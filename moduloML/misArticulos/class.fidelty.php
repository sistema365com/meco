<?php 

/**
* 
*/
class Fidelity
{

	private $idART;
	private $title;
    private $price;
    private $available_quantity;
	private $pictures;
	const TABLA = 'ARTICULO';


	function __construct()
	{
        $link=Conexion::conectarK();
        $query="SELECT tablaML,tablaART FROM camposArticulos_".$_SESSION['prefijo']." where
        tablaML='idART' or
        tablaML='price' or
        tablaML='pictures' or
        tablaML='available_quantity' or
        tablaML='title'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $key) {
        	if ($key['tablaML']=='idART') {
        		$this->setIdART($key['tablaART']);
        	}
        	if ($key['tablaML']=='title') {
        		$this->setTitle($key['tablaART']);
        	}
            if ($key['tablaML']=='price') {
                $this->setPrice($key['tablaART']);
            }
            if ($key['tablaML']=='available_quantity') {
                $this->setAvailable_quantity($key['tablaART']);
            }
        	if ($key['tablaML']=='pictures') {
                $this->setPictures($key['tablaART']);
        	}
        }
	}

        public function sendGetFidelity($key,$catalogo,$articulo,$desde,$hasta)
        {
            //datos a enviar
            $data = array("a" => "a");
            //url contra la que atacamos
            if($_SESSION['empresa']==16) {
                $urlFidelity= "https://rest.fidelitytools.net/MercadoConnecting/Catalogo/ObtenerCatalogo/$key/$catalogo/$articulo/0/false/$desde/$hasta";
            }
            else {
                $urlFidelity= "https://rest.fidelitytools.net/MercadoConnecting/Catalogo/ObtenerCatalogo/$key/$catalogo/0/$articulo/false/$desde/$hasta";
            }
            // echo $urlFidelity;
            //https://rest.fidelitytools.net/MercadoConnecting/Catalogo/ObtenerCatalogo/62a4f3b17d4fa3cb22d01b663ee2ecf1/NDc4Mg/0/0/false/0/0
            $ch = curl_init($urlFidelity);
            //a true, obtendremos una respuesta de la url, en otro caso, 
            //true si es correcto, false si no lo es
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //establecemos el verbo http que queremos utilizar para la petición
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            //enviamos el array data
            curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
            //obtenemos la respuesta
            $response = curl_exec($ch);
            $resultado3=json_decode($response);
            $resultado2= $resultado3->productos;
            $resultado= json_decode(json_encode($resultado2), true);
            // Se cierra el recurso CURL y se liberan los recursos del sistema
            curl_close($ch);
            if(!$response) {
                return false;
            }else{
                return $resultado;
            }
        }

    public function listarArticulosBD()
    {
        $link=Conexion::conectarExterna();
        $impuesto= Configuracion::verConfigu();
        $query="SELECT a.id_product as NUMERO, a.name as DESCRIP, round(p.price*".$impuesto['impuesto'].",2) as PRECIO, s.quantity as STOCK 
                FROM ".$impuesto['prefijoPresta']."_product_lang as a 
                INNER JOIN ".$impuesto['prefijoPresta']."_product as p ON a.id_product= p.id_product 
                INNER JOIN ".$impuesto['prefijoPresta']."_stock_available as s ON a.id_product = s.id_product group by NUMERO";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function listarArticulosBDC($array)
    {
        $datosConfig= Configuracion::DatosExt();
        $impuesto= Configuracion::verConfigu();
        if ($impuesto['prefijo']=='balcon') {
            $resultado= $this->sendGetFidelity($impuesto['e_user'],$impuesto['e_pass'],0,0,0);
            for ($i=0; $i < count($resultado); $i++) { 
                $resultado2[] = array(
                    'NUMERO' => $resultado[$i]['codigoInterno'], 
                    'DESCRIP' => 'Perfume '.$resultado[$i]['titulo'].' '.$resultado[$i]['etiquetas'][0]['etiqueta'][0], 
                    'titulo' => 'Perfume '.$resultado[$i]['titulo'].' '.$resultado[$i]['etiquetas'][0]['etiqueta'][0], 
                    'PRECIO' => $resultado[$i]['precio'], 
                    'precio' => $resultado[$i]['precio'], 
                    'STOCK' => $resultado[$i]['stock'], 
                    'stock' => $resultado[$i]['stock'], 
                    'imagenes' => $resultado[$i]['imagenes'], 
                    'contenido' => $resultado[$i]['contenido'], 
                    'TEXTO' => $resultado[$i]['contenido'], 
                );
            }
        }
        else {
            $resultado= $this->sendGetFidelity($impuesto['e_user'],$impuesto['e_pass'],0,0,0);
            for ($i=0; $i < count($resultado); $i++) { 
                $resultado2[] = array(
                    'NUMERO' => $resultado[$i]['idProducto'], 
                    'DESCRIP' => $resultado[$i]['titulo'], 
                    'titulo' => $resultado[$i]['titulo'], 
                    'PRECIO' => $resultado[$i]['precio4'], 
                    'precio' => $resultado[$i]['precio4'], 
                    'STOCK' => $resultado[$i]['stock'], 
                    'stock' => $resultado[$i]['stock'], 
                    'imagenes' => $resultado[$i]['imagenes'], 
                    'contenido' => $resultado[$i]['contenido'], 
                    'TEXTO' => $resultado[$i]['contenido'], 
                );
            }
        }
        // probar($resultado2);
        return $resultado2;
    }
    public function listarArticulosBDLimitados($desde,$cantidad,$orden='ASC')
    {
        if (!$desde) {
            $desde= 0;
        }
        if (!$cantidad) {
            $cantidad= 10;
        }
        $datosConfig= Configuracion::DatosExt();
        $impuesto= Configuracion::verConfigu();
        // https://rest.fidelitytools.net/MercadoConnecting/Catalogo/ObtenerCatalogo/62a4f3b17d4fa3cb22d01b663ee2ecf1/NDc4Mg/false/0/0/10
        $resultado= $this->sendGetFidelity($impuesto['e_user'],$impuesto['e_pass'],0,$desde,$cantidad);
        $impuesto= Configuracion::verConfigu();
        if ($impuesto['prefijo']=='balcon') {
            
            for ($i=0; $i < count($resultado); $i++) { 
                $resultado2[] = array(
                    'NUMERO' => $resultado[$i]['codigoInterno'], 
                    'DESCRIP' => 'Perfume '.$resultado[$i]['titulo'].' '.$resultado[$i]['etiquetas'][0]['etiqueta'][0], 
                    'titulo' => 'Perfume '.$resultado[$i]['titulo'].' '.$resultado[$i]['etiquetas'][0]['etiqueta'][0], 
                    'PRECIO' => $resultado[$i]['precio'], 
                    'precio' => $resultado[$i]['precio'], 
                    'STOCK' => $resultado[$i]['stock'], 
                    'stock' => $resultado[$i]['stock'], 
                    'imagenes' => $resultado[$i]['imagenes'], 
                    'contenido' => $resultado[$i]['contenido'], 
                    'TEXTO' => $resultado[$i]['contenido'], 
                );
            }
        }
        else {
            
            for ($i=0; $i < count($resultado); $i++) { 
                $resultado2[] = array(
                    'NUMERO' => $resultado[$i]['idProducto'], 
                    'DESCRIP' => $resultado[$i]['titulo'], 
                    'titulo' => $resultado[$i]['titulo'], 
                    'PRECIO' => $resultado[$i]['precio4'], 
                    'precio' => $resultado[$i]['precio4'], 
                    'STOCK' => $resultado[$i]['stock'], 
                    'stock' => $resultado[$i]['stock'], 
                    'imagenes' => $resultado[$i]['imagenes'], 
                    'contenido' => $resultado[$i]['contenido'], 
                    'TEXTO' => $resultado[$i]['contenido'], 
                );
            }
        }
        
        return $resultado2;
    }
    public function verDescripcion($id)
    {
        $link=Conexion::conectarExterna();
        $impuesto= Configuracion::verConfigu();
        if ($_SESSION['empresa']==10) {
        $query="SELECT * FROM ".$impuesto['prefijoPresta']."_product_lang WHERE id_product= ".$id." AND id_lang=4";
        }
        if ($_SESSION['empresa']==15) {
        $query="SELECT description FROM nl_naim_mercadoconnect WHERE id_product= ".$id."";
        }
        else {
        $query="SELECT * FROM ".$impuesto['prefijoPresta']."_product_lang WHERE id_product= ".$id."";
        }
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function listarImgPresta($id)
    {
        $link=Conexion::conectarExterna();
        $impuesto= Configuracion::verConfigu();
        $query="SELECT id_image as IMG FROM ".$impuesto['prefijoPresta']."_image_shop where id_product=".$id."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
	public function listarImgPresta2($id)
	{
        $link=Conexion::conectarExterna();
        $impuesto= Configuracion::verConfigu();
        $query="SELECT id_image as IMG FROM ".$impuesto['prefijoPresta']."_image where id_product=".$id."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
	}
    public function verArticuloBD($id)
    {
        $datosConfig= Configuracion::DatosExt();
        $impuesto= Configuracion::verConfigu();
        $resultado= $this->sendGetFidelity($impuesto['e_user'],$impuesto['e_pass'],$id,0,10);
        if ($impuesto['prefijo']=='balcon') {
            $resultado2 = array(
                'NUMERO' => $resultado[0]['codigoInterno'], 
                'DESCRIP' => 'Perfume '.$resultado[0]['titulo'].' '.$resultado[0]['etiquetas'][0]['etiqueta'][0], 
                'titulo' => 'Perfume '.$resultado[0]['titulo'].' '.$resultado[0]['etiquetas'][0]['etiqueta'][0], 
                'PRECIO' => $resultado[0]['precio'], 
                'precio' => $resultado[0]['precio'], 
                'STOCK' => $resultado[0]['stock'], 
                'stock' => $resultado[0]['stock'], 
                'imagenes' => $resultado[0]['imagenes'], 
                'contenido' => $resultado[0]['contenido'], 
            );
        }
        else {
            $resultado2 = array(
                'NUMERO' => $resultado[0]['idProducto'], 
                'DESCRIP' => $resultado[0]['titulo'], 
                'titulo' => $resultado[0]['titulo'], 
                'PRECIO' => $resultado[0]['precio4'], 
                'precio' => $resultado[0]['precio4'], 
                'STOCK' => $resultado[0]['stock'], 
                'stock' => $resultado[0]['stock'], 
                'imagenes' => $resultado[0]['imagenes'], 
                'contenido' => $resultado[0]['contenido'], 
            );
        }
        return $resultado2;
    }
	public function verArticuloBDporSKU($id)
	{
        $link=Conexion::conectarExterna();
        $impuesto= Configuracion::verConfigu();
        $query="SELECT p.reference as REFERENCIA, a.id_product as NUMERO, a.name as DESCRIP, round(p.price*".$impuesto['impuesto'].",2) as PRECIO, s.quantity as STOCK 
                FROM ".$impuesto['prefijoPresta']."_product_lang as a 
                INNER JOIN ".$impuesto['prefijoPresta']."_product as p ON a.id_product= p.id_product and p.reference='".$id."'
                INNER JOIN ".$impuesto['prefijoPresta']."_stock_available as s ON a.id_product = s.id_product";
                // echo $query.'<hr>';
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
	}
    public function actualizarArtBM($array,$campos,$empresa)
    {
        $link=Conexion::conectarK();
        foreach ($array as $key) {
            if ($key['NUMERO'] != '') {
            $separados[]= $key['NUMERO'];
            }
        }
        $idsModificar= implode(',', $separados);
        $query= "UPDATE articulosML SET ";
        // si hay cambio titulo
        if (in_array('titulo',$campos)) {
        $query.="title = CASE idART ";
        foreach ($array as $key) {
            if ($key['NUMERO'] != '') {
             $query.= "WHEN ".$key['NUMERO']." THEN '".$key['DESCRIP']."' ";
            }
         } 
                if (in_array('stock',$campos) || in_array('precio',$campos)) {
                    $query.= "END,";
                }
                else {
                    $query.= "END ";
                } 
        }
        // si hay cambio stock
        if (in_array('stock',$campos)) {
        $query.= 'available_quantity = CASE idART ';
        foreach ($array as $key) {
            if ($key['NUMERO'] != '') {
                if ($key['STOCK']<0) {
                    $stock=0;
                }
                else{
                    $stock=$key['STOCK'];
                }
             $query.= 'WHEN '.$key['NUMERO'].' THEN '.$stock.' ';
            }
        } 
                if (in_array('precio',$campos)) {
                    $query.= "END,";
                }
                else {
                    $query.= "END ";
                } 
        }
        // si hay cambio precio
        if (in_array('precio',$campos)) {
        $query.= 'price = CASE idART ';
        foreach ($array as $key) {
            if ($key['NUMERO'] != '') {
             $query.= 'WHEN '.$key['NUMERO'].' THEN '.$key['PRECIO'].' ';
            }
        }        
        $query.= 'END ';
        }
        $query.='WHERE idART IN ('.$idsModificar.') AND idEmpresa='.$empresa;
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado>0) {
            return true;
        }
        else 
            return false;
    }
    public function actualizarArtDescripcionBM($array,$campos,$empresa)
    {
        $link=Conexion::conectarK();
        foreach ($array as $key) {
            if ($key['NUMERO'] != '') {
            $separados[]= $key['NUMERO'];
            }
        }
        $idsModificar= implode(',', $separados);
        $query= "UPDATE articulosML SET ";
        // si hay cambio titulo
        if (in_array('texto',$campos)) {
        $query.="description = CASE idART ";
        foreach ($array as $key) {
            if ($key['NUMERO'] != '') {
             $query.= "WHEN ".$key['NUMERO']." THEN '".strip_tags(html_entity_decode($key['TEXTO']))."' ";
            }
         } 
                if (in_array('stock',$campos) || in_array('precio',$campos)) {
                    $query.= "END,";
                }
                else {
                    $query.= "END ";
                } 
        }
        // si hay cambio stock
        if (in_array('stock',$campos)) {
        $query.= 'available_quantity = CASE idART ';
        foreach ($array as $key) {
            if ($key['NUMERO'] != '') {
                if ($key['STOCK']<0) {
                    $stock=0;
                }
                else{
                    $stock=$key['STOCK'];
                }
             $query.= 'WHEN '.$key['NUMERO'].' THEN '.$stock.' ';
            }
        } 
                if (in_array('precio',$campos)) {
                    $query.= "END,";
                }
                else {
                    $query.= "END ";
                } 
        }
        // si hay cambio precio
        if (in_array('precio',$campos)) {
        $query.= 'price = CASE idART ';
        foreach ($array as $key) {
            if ($key['NUMERO'] != '') {
             $query.= 'WHEN '.$key['NUMERO'].' THEN '.$key['PRECIO'].' ';
            }
        }        
        $query.= 'END ';
        }
        $query.='WHERE idART IN ('.$idsModificar.') AND idEmpresa='.$empresa;
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        $modificadas= $stmt->rowCount();
        return $modificadas;
    }
    public function verArticuloBM($id,$empresa)
    {
        $link=Conexion::conectarK();
        $query="SELECT * FROM articulosML WHERE idART='".$id."' and idEmpresa='".$empresa."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
	   function __destruct(){ 

    }


    /**
     * Gets the value of idART.
     *
     * @return mixed
     */
    public function getIdART()
    {
        return $this->idART;
    }

    /**
     * Sets the value of idART.
     *
     * @param mixed $idART the id
     *
     * @return self
     */
    public function setIdART($idART)
    {
        $this->idART = $idART;

        return $this;
    }
    /**
     * Gets the value of idART.
     *
     * @return mixed
     */
    public function getAvailable_quantity()
    {
        return $this->available_quantity;
    }

    /**
     * Sets the value of idART.
     *
     * @param mixed $idART the id
     *
     * @return self
     */
    public function setAvailable_quantity($available_quantity)
    {
        $this->available_quantity = $available_quantity;

        return $this;
    }

    /**
     * Gets the value of pictures.
     *
     * @return mixed
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * Sets the value of pictures.
     *
     * @param mixed $pictures the id
     *
     * @return self
     */
    public function setPictures($pictures)
    {
        $this->pictures = $pictures;

        return $this;
    }

    /**
     * Gets the value of title.
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the value of title.
     *
     * @param mixed $title the title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets the value of price.
     *
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the value of price.
     *
     * @param mixed $price the price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}


 ?>