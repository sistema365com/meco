<?php 
/**
* 
*/
class Articulo
{

	private $idART;
	private $title;
    private $price;
    private $available_quantity;
	private $pictures;


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
    public function borrarArticuloMC($id,$empresa){
        $link=Conexion::conectarK();
        $query="DELETE FROM articulosML WHERE idART = ".$id." AND idEmpresa=".$empresa."";
        $stmt=$link->prepare($query);
        $stmt->execute();
    }
    public function listarErrores($fecha1,$fecha2,$empresa)
    {
        $link=Conexion::conectarK();
        // $query= 'SELECT * FROM errores WHERE DATE_SUB(CURDATE(),INTERVAL 1 DAY) <= fecha';
        $query="SELECT * FROM errores WHERE idEmpresa=$empresa and fecha BETWEEN '$fecha1' AND '$fecha2 23:59:59' group by idART order by fecha DESC";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function listarArticulosBDC($array)
    {
        $datosConfig= Configuracion::DatosExt();
        $ids= implode($array, ',');
        $link=Conexion::conectarExterna();
        $query="SELECT * FROM ".$datosConfig['tabla']." WHERE ".$this->getIdART()." in (".$ids.")";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function listarVariosArticulosBM($array)
    {
        $ids= implode($array, ',');
        $link=Conexion::conectarK();
        $query="SELECT * FROM articulosML WHERE idART in (".$ids.") AND idEmpresa=".$_SESSION['empresa']."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function verArticulosStockCero($estado)
    {
        $link=Conexion::conectarK();
        if (!$estado) {
        $query="SELECT * FROM articulosML WHERE idML!='' and available_quantity=0 and idEmpresa=".$_SESSION['empresa']."";
        }
        else{
        $query="SELECT * FROM articulosML WHERE idML!='' and estado=".$estado." and available_quantity=0 and idEmpresa=".$_SESSION['empresa']."";
        }
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function verArticulosStockUno($estado)
    {
        $link=Conexion::conectarK();
        if (!$estado) {
        $query="SELECT * FROM articulosML WHERE idML!='' and available_quantity!=0 and idEmpresa=".$_SESSION['empresa']."";
        }
        else{
        $query="SELECT * FROM articulosML WHERE idML!='' and estado=".$estado." and available_quantity!=0 and idEmpresa=".$_SESSION['empresa']."";
        }
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function listarArticulosBD()
    {
        $datosConfig= Configuracion::DatosExt();
        $link=Conexion::conectarExterna();
        $query="SELECT * FROM ".$datosConfig['tabla']."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
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
        $link=Conexion::conectarExterna();
        $query="SELECT * FROM ".$datosConfig['tabla']." ORDER BY ".$this->getIdART()." ".$orden." LIMIT ".$desde.",".$cantidad."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
	}
    public function verArticuloBD($id)
    {
        $datosConfig= Configuracion::DatosExt();
        $link=Conexion::conectarExterna();
        $query="SELECT * FROM ".$datosConfig['tabla']." WHERE ".$this->getIdART()."='".$id."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
	public function verDescripcion($id)
	{
        $datosConfig= Configuracion::DatosExt();
        $link=Conexion::conectarExterna();
        $query="SELECT * FROM articulo_desc WHERE ".$this->getIdART()."='".$id."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
	}
    public function cargarPublicacion($idART,$idML,$permaLink,$stopTime,$empresa)
    {
        $link=Conexion::conectarK();
        $query="UPDATE articulosML SET
        idML= '".$idML."',
        perma_link= '".$permaLink."',
        expiration_time= '".$stopTime."',
        estado= '1',
        fecha= now()
        WHERE idART= ".$idART." and idEmpresa=".$empresa."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function cambiarEstado($idART,$idML,$estado,$empresa)
    {
        $link=Conexion::conectarK();
        $query="UPDATE articulosML SET
        idML= '".$idML."',
        estado= '".$estado."',
        fecha= now()
        WHERE idART= '".$idART."' and idEmpresa='".$empresa."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function eliminarPublicacion($idART,$idML,$estado,$empresa)
    {
        $link=Conexion::conectarK();
        $query="UPDATE articulosML SET
        idML= '',
        perma_link= '',
        expiration_time= '',
        estado= '".$estado."',
        fecha= now()
        WHERE idART= '".$idART."' and idEmpresa='".$empresa."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        $this->eliminarAtributo($idART);
        $this->eliminarVariacion($idART);
        return $resultado;
    }
    public function eliminarAtributo($idART)
    {
        $link=Conexion::conectarK();
        $query="DELETE FROM attr_atributos WHERE idART=$idART AND idEmpresa=".$_SESSION['empresa'];
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function agregaVariacion($idART,$idVar){
        $link = Conexion::conectarK();
        $query='INSERT INTO attr_var_auto 
        (attr_idEmpresa,attr_idART, idVariation) 
        values (
        '.$_SESSION['empresa'].',
        "'.$idART.'",
         "'.$idVar.' ")';
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        $DestID = $link->lastInsertID();
        if ($DestID) {
            return true;
        }
        else{
            return false;
        }
        
    } 
    public function eliminarVariacion($idART)
    {
        $link=Conexion::conectarK();
        $query="DELETE FROM attr_variaciones WHERE idART=$idART AND idEmpresa=".$_SESSION['empresa'];
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function actualizarArtBMARCO($array,$campos,$empresa)
    {
        $link=Conexion::conectarK();
        foreach ($array as $key) {
            if ($key['sku'] != '') {
            $separados[]= $key['sku'];
            }
        }
        $idsModificar= implode(',', $separados);
        $query= "UPDATE articulosML SET ";
        // si hay cambio titulo
        if (in_array('titulo',$campos)) {
        $query.="title = CASE idART ";
        foreach ($array as $key) {
            if ($key['sku'] != '') {
             $query.= "WHEN ".$key['sku']." THEN '".$key['titulo']."' ";
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
            if ($key['sku'] != '') {
                if ($key['stock']<0) {
                    $stock=0;
                }
                else{
                    $stock=$key['stock'];
                }
             $query.= 'WHEN '.$key['sku'].' THEN '.$stock.' ';
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
            if ($key['sku'] != '') {
             $query.= 'WHEN '.$key['sku'].' THEN '.$key['precio'].' ';
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
        $modificadas= $stmt->rowCount();
        return $modificadas;
    }
    public function actualizarArtDescripcionBMARCO($array,$campos,$empresa)
    {
        $link=Conexion::conectarK();
        foreach ($array as $key) {
            if ($key['sku'] != '') {
            $separados[]= $key['sku'];
            }
        }
        $idsModificar= implode(',', $separados);
        $query= "UPDATE articulosML SET ";
        // si hay cambio titulo
        if (in_array('texto',$campos)) {
        $query.="description = CASE idART ";
        foreach ($array as $key) {
            if ($key['sku'] != '') {
             $query.= "WHEN ".$key['sku']." THEN '".strip_tags(html_entity_decode($key['texto_ml']))."' ";
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
    static function verPlantillaHF()
    {
        $link=Conexion::conectarInterna();
        $query= "SELECT * FROM configABM where id=1";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function importar($idART,$json,$descripcion,$empresa)
    {
        if ($json['body']['status']=='active') {
            $estado= 1;
        }
        if ($json['body']['status']=='paused') {
            $estado= 3;
        }
        if ($json['body']['status']=='closed') {
            $estado= 4;
        }
        foreach ($json['body']['pictures'] as $key) {
            if (!$imagenes) {
                $imagenes= $key['url'];
            }
            else{
            $imagenes= $imagnes.';'.$key['url'];;
            }
        }
        $link=Conexion::conectarK();
        $query="INSERT INTO articulosML (
        idEmpresa,
        idART,
        idML,
        title,
        category_id,
        price,
        currency_id,
        available_quantity,
        buying_mode,
        listing_type_id,
        condition_buy,
        description,
        video_id,
        warranty,
        pictures,
        seller_custom_field,
        perma_link,
        expiration_time,
        estado,
        fecha)
        values (
        '".$empresa."',
        '".$idART."',
        '".$json['body']['id']."',
        '".$json['body']['title']."',
        '".$json['body']['category_id']."',
        '".$json['body']['price']."',
        '".$json['body']['currency_id']."',
        '".$json['body']['available_quantity']."',
        '".$json['body']['buying_mode']."',
        '".$json['body']['listing_type_id']."',
        '".$json['body']['condition']."',
        '".$descripcion."',
        '".$json['body']['video_id']."',
        '".$json['body']['warranty']."',
        '".$imagenes."',
        '".$json['body']['seller_custom_field']."',
        '".$json['body']['permalink']."',
        '".$json['body']['expiration_time']."',
        '".$estado."',
        now())";
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        $DestID = $link->lastInsertID();
        if ($DestID>0) {
            return true;
        }
        else
            return false;
    }
    public function importandoProducto($idART,$json,$descripcion,$empresa)
    {
        if ($json['status']=='active') {
            $estado= 1;
        }
        if ($json['status']=='paused') {
            $estado= 3;
        }
        if ($json['status']=='closed') {
            $estado= 4;
        }
        $imagenesJSON= array_column($json['pictures'], 'url');
        $imagenes= implode(';', $imagenesJSON);
        $titulo= str_replace("'", "''", $json['title']);
        $titulo2= str_replace("COMILLAS", "''", $titulo);
        $link=Conexion::conectarK();
        $query="INSERT INTO articulosML (
        idEmpresa,
        idART,
        idML,
        title,
        category_id,
        price,
        currency_id,
        available_quantity,
        buying_mode,
        listing_type_id,
        condition_buy,
        description,
        video_id,
        warranty,
        pictures,
        seller_custom_field,
        perma_link,
        expiration_time,
        estado,
        fecha)
        values (
        '".$empresa."',
        '".$idART."',
        '".$json['id']."',
        '".$titulo2."',
        '".$json['category_id']."',
        '".$json['price']."',
        '".$json['currency_id']."',
        '".$json['available_quantity']."',
        '".$json['buying_mode']."',
        '".$json['listing_type_id']."',
        '".$json['condition']."',
        '".htmlentities(addslashes($descripcion))."',
        '".$json['video_id']."',
        '".$json['warranty']."',
        '".$imagenes."',
        '".$json['seller_custom_field']."',
        '".$json['permalink']."',
        '".$json['expiration_time']."',
        '".$estado."',
        now())";
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        $DestID = $link->lastInsertID();
        if ($DestID>0) {
            return true;
        }
        else
            return false;
    }
    public function altaBM($empresa,$siteML,$presta)
    {
        $textoPlano= str_replace("'", "''", $_POST['textoPlano']);
        if ($siteML=='MCO') {
            $precioVenta= round($_POST['price']);
        }
        else {
            $precioVenta= $_POST['price'];
        }
        $envios1= $_POST['envios1'];
        $envios[]=$envios1[0];
        $envios2= $_POST['envios2'];
        $envios3= $_POST['envios3'];
        if ($envios2[0]=='true') {
            $envios[]='true';
        }
        else {
            $envios[]='false';
        }
        if ($envios3[0]=='true') {
            $envios[]='true';
        }
        else {
            $envios[]='false';
        }
        $idVideo= explode('watch?v=', $_POST['video_id']);
        $enviosG= implode(';', $envios);
        $link=Conexion::conectarK();
        $query="INSERT INTO articulosML (
        idEmpresa,
        idART,
        title,
        category_id,
        price,
        currency_id,
        available_quantity,
        buying_mode,
        listing_type_id,
        condition_buy,
        description,
        video_id,
        warranty,
        pictures,
        seller_custom_field,
        envios,
        estado,
        fecha)
        values (
        '".$empresa."',
        '".$_POST['idART']."',
        '".ucwords($_POST['title'])."',
        '".$_POST['category_id']."',
        '".$precioVenta."',
        '".$_POST['currency_id']."',
        '".$_POST['available_quantity']."',
        '".$_POST['buying_mode']."',
        '".$_POST['listing_type_id']."',
        '".$_POST['condition_buy']."',
        '".$textoPlano."',
        '".$idVideo[1]."',
        '".$_POST['warranty']."',
        '".$_POST['pictures']."',
        '".$_POST['seller_custom_field']."',
        '".$enviosG."',
        '0',
        now())";
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        $DestID = $link->lastInsertID();
        if ($DestID>0) {
            return true;
        }
        else
            return false;
    }
    public function altaMasivaBM($art,$category,$verDesc,$imagenesM,$empresa,$siteML,$pago)
    {
        $textoPlano= str_replace("'", "''", $verDesc);
        if ($siteML=='MCO') {
            $precioVenta= round($art[$this->getPrice()]);
        }
        else {
            $precioVenta= $art[$this->getPrice()];
        }
        $envios1= $_POST['envios1'];
        $envios[]=$envios1[0];
        $envios2= $_POST['envios2'];
        if ($envios2[0]=='true') {
            $envios[]='true';
        }
        else {
            $envios[]='false';
        }
        if ($art['REFERENCIA']=='') {
            $SKU= $art[$this->getIdART()];
        }
        else {
            $SKU= $art['REFERENCIA'];
        }
        $tituloDescrip= str_replace("'", "''", $art[$this->getTitle()]);
        $enviosG= implode(';', $envios);
        $moneda= $_POST['currency_id'];
        $tipoVenta= 'buy_it_now';
        $tipoListado= $_POST['listing_type_id'];
        $usadoNuevo= $_POST['condition_buy'];
        $video= explode('watch?v=', $_POST['video_id']);
        $garantia= $_POST['warranty'];
        $fotelis= implode(';', $imagenesM);
        $link=Conexion::conectarK();
        $query="INSERT INTO articulosML (
        idEmpresa,
        idART,
        title,
        category_id,
        price,
        currency_id,
        available_quantity,
        buying_mode,
        listing_type_id,
        condition_buy,
        description,
        video_id,
        warranty,
        pictures,
        seller_custom_field,
        envios,
        estado,
        fecha)
        values (
        '".$empresa."',
        '".$art['NUMERO']."',
        '".ucwords($tituloDescrip)."',
        '".$category."',
        '".$precioVenta."',
        '".$moneda."',
        '".$art[$this->getAvailable_quantity()]."',
        '".$tipoVenta."',
        '".$tipoListado."',
        '".$usadoNuevo."',
        '".$textoPlano."',
        '".$video[1]."',
        '".$garantia."',
        '".$fotelis."',
        '".$SKU."',
        '".$enviosG."',
        '0',
        now())";
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        $DestID = $link->lastInsertID();
        if ($DestID>0) {
            return true;
        }
        else
            return false;
    }
    public function editaBM($empresa)
    {
        // $datosConfig= Configuracion::DatosConfig();
        $video= explode('watch?v=', $_POST['video_id']);
        $link=Conexion::conectarK();
        $query="UPDATE articulosML SET 
        title= '".$_POST['title']."',
        category_id= '".$_POST['category_id']."',
        price= '".$_POST['price']."',
        currency_id= '".$_POST['currency_id']."',
        available_quantity= '".$_POST['available_quantity']."',
        buying_mode= '".$_POST['buying_mode']."',
        listing_type_id= '".$_POST['listing_type_id']."',
        condition_buy= '".$_POST['condition']."',
        description= '".$_POST['textoPlano']."',
        category_id= '".$_POST['category_id']."',
        video_id= '".$video[1]."',
        warranty= '".$_POST['warranty']."',
        pictures= '".$_POST['pictures']."'
        WHERE idART= '".$_POST['idART']."' and idEmpresa='".$empresa."'";
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado>0) {
            return true;
        }
        else 
            return false;
    }
    public function listarArticulosBM($estado,$empresa,$desde,$hasta)
    {
        if (!$desde) {
            $desde= 0;
        }
        if (!$hasta) {
            $hasta= 20;
        }
        $datosConfig= Configuracion::DatosConfig();
        $link=Conexion::conectarK();
        if ($estado=='') {
        $query="SELECT title,idML,idART,price,available_quantity,perma_link,estado,listing_type_id,warranty FROM articulosML WHERE estado!='4' and idEmpresa=".$empresa." LIMIT ".$desde.",".$hasta."";
        }
        else {
        $query="SELECT title,idML,idART,price,available_quantity,perma_link,estado,listing_type_id,warranty FROM articulosML WHERE estado=".$estado." and idEmpresa=".$empresa." LIMIT ".$desde.",".$hasta."";
        }
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function listarArticulosBMLimitado($estado,$empresa,$desde,$hasta)
    {
        if (!$desde) {
            $desde= 0;
        }
        if (!$hasta) {
            $hasta= 20;
        }
        $datosConfig= Configuracion::DatosConfig();
        $link=Conexion::conectarK();
        if (!isset($estado)) {
        $query="SELECT title,idML,idART,price,available_quantity,perma_link,estado,listing_type_id,warranty FROM articulosML WHERE estado!='4' and idEmpresa=".$empresa." LIMIT ".$desde.",".$hasta."";
        }
        else {
        $query="SELECT title,idML,idART,price,available_quantity,perma_link,estado,listing_type_id,warranty FROM articulosML WHERE estado=".$estado." and idEmpresa=".$empresa." LIMIT ".$desde.",".$hasta."";
        }
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function contarArticulosBM($estado,$empresa)
    {
        $link=Conexion::conectarK();
        $query="SELECT count(*) as cantidad FROM articulosML WHERE estado=".$estado." and idEmpresa=".$empresa."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function listarArticulosBMC($empresa,$desde,$hasta)
    {
        if (!$desde) {
            $desde= 0;
        }
        if (!$hasta) {
            $hasta= 10;
        }
        $datosConfig= Configuracion::DatosConfig();
        $link=Conexion::conectarK();
        $query="SELECT 
        idART as NUMERO,
        title as DESCRIP,
        price as PRECIO,
        description as TEXTO,
        available_quantity as STOCK
         FROM articulosML WHERE idEmpresa='".$empresa."' order by NUMERO ASC LIMIT ".$desde.",".$hasta."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function BMporEstado($empresa,$d,$h)
    {
        if (!$d) {
            $d=0;
        }
        if (!$h) {
            $h=10000;
        }
        $datosConfig= Configuracion::DatosConfig();
        $link=Conexion::conectarK();
        $query="SELECT * FROM articulosML WHERE idEmpresa=".$empresa." LIMIT ".$d.",".$h."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function BMPendientes($estado,$empresa,$d,$h)
    {
        $datosConfig= Configuracion::DatosConfig();
        $link=Conexion::conectarK();
        $query="SELECT * FROM articulosML WHERE estado=".$estado." and idEmpresa=".$empresa." 
        LIMIT ".$d.",".$h."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function verArticuloBM($id,$empresa)
    {
        $link=Conexion::conectarK();
        $query="SELECT * FROM articulosML WHERE idART='".$id."' and idEmpresa=".$empresa."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function verArticuloPorIdML($id)
    {
        $link=Conexion::conectarK();
        $query="SELECT * FROM articulosML WHERE idML='".$id."' and idEmpresa='".$_SESSION['empresa']."'";
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