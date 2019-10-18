<?php
ini_set('display_errors', 'on');
ini_set('max_execution_time', '0');
set_time_limit(9000);

require 'php-sdk/Meli/meli.php';
require 'clases/Conexion.php';
require 'clases/Configuracion.php';
use clases\Conexion;
use clases\Configuracion;

$aplicacion = array(
    'ID' => '4282773055253235',
    'KEY' => '6pBbVXfvoetRX682lCHEgMlRy3jU0ojd',
    'URL' => 'https://app.mercadoconnecting.com/checkAPI.php',
    // 'ID' => '3661330296299812',
    // 'KEY' => 'TQRNCA9hj3L6hB1PNEPD62iF6Sf50S8Q',
    // 'URL' => 'https://ml.kenshopublicidad.com/checkAPI.php',
);
$appId = $aplicacion['ID'];
$appKey = $aplicacion['KEY'];
$appUrl = $aplicacion['URL'];

//Actualizacion de token a cada 6 horas

$todosLosUsers = configABM();
foreach ($todosLosUsers as $user) {
    $timeActual= time();   // Obtenemos el timestamp del momento actual
    $dateToken = strtotime($user['dateToken']); // Obtenemos timestamp de la fecha de creacion del token
    // Calculamos el número de segundos que tienen esos 6 horas
    $seisHoras = 21600;

    if($timeActual-$dateToken > $seisHoras) {
        $meli = new Meli($appId,$appKey);

        $test= $meli->post('https://api.mercadolibre.com/oauth/token?grant_type=refresh_token&client_id='.$appId.'&client_secret='.$appKey.'&refresh_token='.$user['re_token']);
        $newAccessToken= $test['body']->access_token;
        $newRefreshToken= $test['body']->refresh_token;
        // guardo tokens en la base de datos en el cliente
        $guardarTokensGen= Configuracion::actualizarTokensGen($newAccessToken,$newRefreshToken,$user['id_admin']);
    }
}

function configABM() {
    $link=Conexion::conectarK();
    $query="SELECT * FROM user_config";
    $stmt=$link->prepare($query);
    $stmt->execute();
    $resultado=$stmt->fetchAll(\PDO::FETCH_ASSOC);
    return $resultado;
}

$porPagina = 50;
$filtro = isset($_REQUEST['u']) ? $_REQUEST['u'] : false;
$totalProductos = articulosCount($filtro);

$paginas = ceil($totalProductos / $porPagina);
$meli = new Meli($appId, $appKey);

echo '<pre>';

for ($p = 0; $p < $paginas; $p++) {
    $articulos = articulosAdmin($p * $porPagina, $porPagina, $filtro);
    
    echo 'Actualizando '.count($articulos).' articulos...'.PHP_EOL;
    foreach ($articulos as $articulo) {
        flush();
        $body = $articulo;
        unset($body['idML']);
        unset($body['category_id']);
        unset($body['idEmpresa']);
        unset($body['ac_token']);
        unset($body['idART']);
        unset($body['description']);

        if (empty($body['pictures'])) {
            $body['pictures'] = array();
        } else {            
            $pictures = explode(';', $body['pictures']);
    
            $body['pictures'] = array();
            foreach ($pictures as $picture) {
                $body['pictures'][] = array('source' => $picture);
            }
        }
        
        $item = $articulo['idML'];
        $token = $articulo['ac_token'];

        if ($articulo["siteML"] == "MLM" && $articulo["price"] < 549.00) {
            $body['shipping'] = [
                'mode' => 'me2',
                'local_pick_up' => false,
                'free_shipping' => false,
                'free_methods' => array(),
                'logistic_type' => 'drop_off',
            ];
        }
        if ($articulo['idVariation']) {
                $verVariacion2[] = array(
                    'id' => $articulo['idVariation'], 
                    'available_quantity' => $articulo['available_quantity'], 
                    'price' => $articulo['price'], 
                );
            $body['variations'] = $verVariacion2;
            unset($body['price']);
            unset($body['available_quantity']);
            unset($body['title']);
            unset($body['warranty']);
            unset($body['pictures']);
            unset($body['idVariation']);
            unset($body['siteML']);
        }

        unset($body['siteML']);
        unset($body['idVariation']);

        $params = array('access_token' => $token);
            // $descrip = array('plain_text' => $articulo['description']);
            // $acText= $meli->put('/items/'.$item.'/description', $descrip, $params,true);
        $meli->put('items/' . $item, $body, $params, true);

    }
    $respuestas = $meli->executeQueued();

    if (!empty($respuestas)) {
        foreach ($respuestas as $k => $respuesta) {
            notificar($articulos[$k], $respuesta);
            loguear($articulos[$k], $respuesta);
        }
    }
}

function articulosCount($filtro)
{
    $link = Conexion::conectarK();
    $where = $filtro ? ' and idEmpresa='.$filtro : '';
    $query = "SELECT count(*) FROM articulosML WHERE idML !='' AND idML is not null $where";
    $stmt = $link->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchColumn();
    return $resultado;
}

function articulosAdmin($offset, $porPagina, $filtro)
{
    $link = Conexion::conectarK();
    $where = $filtro ? 'and idEmpresa='.$filtro : 'and actualizaBase = 1';
    $query = "SELECT idVariation,idML, idEmpresa, ac_token, title, category_id, price, available_quantity, warranty, siteML, pictures, idART, description FROM articulosML as A 
inner join user_config on id_admin = idEmpresa 
left outer join attr_var_auto on idART = attr_idART 
WHERE idML != '' AND idML is not null $where limit $offset, $porPagina;";
    $stmt = $link->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    return $resultado;
}

function notificar($articulo, $respuesta)
{
    if ($respuesta['httpCode'] == 200) {
        // insertar('notificaciones', array(
        //     'idEmpresa' => $articulo['idEmpresa'],
        //     'resource' => "'actualizacionBase'",
        //     'topic' => "'Se actualizo el producto ".$articulo['idML']."'",
        //     'sent' => "now()"
        // ));
        echo 'Se actualizo el producto '.$articulo['idML'].PHP_EOL;
    } else {
        $body = json_decode($respuesta['body']);

        if (is_object($body)) {
            $message = $body->message;
        } else {
            $message = $body;
        }
        
        insertar('notificaciones', array(
            'resource' => "'actualizacionBase'",
            'idEmpresa' => $articulo['idEmpresa'],
            'topic' => "'Error al actualizar el producto ".$articulo['idML'].": ".$message."'",
            'sent' => "now()"
        ));
        echo 'Error al actualizar el producto '.$articulo['idML'].": ".$message.PHP_EOL;
    }
}

function loguear($articulo, $respuesta)
{
    if ($respuesta['httpCode'] != 200) {
        $body = json_decode($respuesta['body']);
        insertar('errores', array(
            'idML' => "'".$articulo['idML']."'",
            'idART' => $articulo['idART'],
            'idEmpresa' => $articulo['idEmpresa'],
            'mensaje' => "'".$body->message."'",
            'fecha' => "now()"
        ));
    }
}

function insertar($tabla, $datos)
{
    $keys = array_keys($datos);
    $campos = implode(",", $keys);
    $valores = implode(",", $datos);
    
    $opciones  = array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $link = new \PDO(
        "mysql:host=localhost;dbname=mconnect_basegeneral",
        "mconnect_cliente", //usuario
        "4pwUzorS)xl#", //pass
                                // "mysql:host=localhost;dbname=kensho_publicador_abm",
                                // "kensho_clienteml", //usuario
                                // "kRu3pTv),.Z~", //pass
        $opciones);
    $link->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
    $query="INSERT INTO $tabla ($campos) values ($valores)";
    $stmt=$link->prepare($query);
    $stmt->execute();
}