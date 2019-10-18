<?php 

/**
* 
*/
class Ordenes 
{
    public function listarOrdenes($id)
    {
        $link=Conexion::conectarK();
        $query="SELECT * FROM ordenes WHERE idCliente=".$id."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function verOrden($id)
    {
        $link=Conexion::conectarK();
        $query="SELECT * FROM inf_ordenes WHERE idOrden=".$id."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function bajaStock($id,$cantidad)
    {
        $link=Conexion::conectarK();
        $query="UPDATE articulosML set available_quantity=available_quantity-".$cantidad." WHERE idML='".$id."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $this->verStockCero($id);
    }
    public function verStockCero($id)
    {
        $link=Conexion::conectarK();
        $query="SELECT * FROM articulosML WHERE idML='".$id."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        if ($resultado['available_quantity']<=0) {
            $this->pausarArticulo($id);
        }
    }
    public function pausarArticulo($id)
    {
        $link=Conexion::conectarK();
        $query="UPDATE articulosML SET
        estado= '3',
        fecha= now()
        WHERE idML= '".$id."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
    }
    public function listarClientes()
    {
        $link=Conexion::conectarK();
        $query="SELECT * FROM user_config";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function altaOrden($ordenes,$idCliente)
    {
        for ($i=0; $i < count($ordenes['order_items']) ; $i++) { 
            $items= '';
            $sku= '';
            $items[]= $ordenes['order_items'][$i]['item']['id'];
            $sku[]= $ordenes['order_items'][$i]['item']['seller_custom_field'];
        }

        $link=Conexion::conectarK();
        $query="INSERT INTO ordenes (
        idCliente,
        seller,
        idOrden,
        date_created,
        items,
        cantidad,
        moneda,
        precio,
        envio,
        pago,
        seller_custom_field,
        fecha)
        values (
        '$idCliente',
        ".$ordenes['seller']['id'].",
        ".$ordenes['id'].",
        '".$ordenes['date_created']."',
        '".implode(',', $items)."',
        '".$ordenes['order_items'][0]['quantity']."',
        '".$ordenes['currency_id']."',
        ".$ordenes['total_amount'].",
        '".$ordenes['shipping']['status']."',
        '".$ordenes['payments'][0]['status']."',
        '".implode(',', $sku)."',
        now())";
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        $DestID = $link->lastInsertID();
        if ($DestID>0) {
            $this->bajaStock($items[0],$ordenes['order_items'][0]['quantity']);
            return true;
        }
        else
            return false;
    }
    public function checkNumOrdenes($array)
    {
        $ids= implode(',', $array);
        $link=Conexion::conectarK();
        $query="SELECT idOrden FROM inf_ordenes WHERE idOrden IN (".$ids.")";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function altaVisitas($array)
    {
        $link=Conexion::conectarK();
        $query="INSERT INTO inf_visitas (idEmpresa,fecha,visitas) values ('".$_SESSION['empresa']."','".$array['fecha']."',".$array['valor'].")";
        echo $query;
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        $DestID = $link->lastInsertID();
        if ($DestID>0) {
            return true;
        }
        else
            return false;
    }
    public function altaOrdenInfoMasiva($array)
    {
        $link= Conexion::conectarK();
        $idEmpresa= Configuracion::verIDML($array[0]['seller']['id']);
        $query= 'INSERT INTO inf_ordenes
        (idEmpresa,seller,idOrden,date_created,items,cantidad,moneda,precioCompra,precioEnvio,precioComision,envio,pago,seller_custom_field)
                VALUES ';
        foreach ($array as $key) {
                for ($i=0; $i < count($key['order_items']) ; $i++) { 
                    $items= '';
                    $sku= '';
                    $items[]= $key['order_items'][$i]['item']['id'];
                    $sku[]= $key['order_items'][$i]['item']['seller_custom_field'];
                }
                $preciodeEnvio=(!$key['payments'][0]['shipping_cost'])?0.00:$key['payments'][0]['shipping_cost'];
                $cometa=(!$key['payments'][0]['marketplace_fee'])?0.00:$key['payments'][0]['marketplace_fee'];
                $query.= "(
                        ".$idEmpresa['id_admin'].",
                        ".$key['seller']['id'].",
                        ".$key['id'].",
                        '".$key['date_created']."',
                        '".implode(',', $items)."',
                        '".$key['order_items'][0]['quantity']."',
                        '".$key['currency_id']."',
                        ".$key['total_amount'].",
                        ".$preciodeEnvio.",
                        ".$cometa.",
                        '".$key['shipping']['shipping_mode']."',
                        '".$key['payments'][0]['status']."',
                        '".implode(',', $sku)."'
                ),";
        }
        $stmt=$link->prepare(trim($query,','));
        $resultado= $stmt->execute();
        $DestID = $link->lastInsertID();
        if ($DestID>0) {
            return true;
        }
        else
            return false;
    }
    public function altaOrdenInfo2($array,$idEmpresa)
    {
        $link= Conexion::conectarK();
        // $idEmpresa= Configuracion::verIDML($array[0]['seller']['id']);
        $query= 'INSERT INTO inf_ordenes
        (idEmpresa,seller,idOrden,date_created,items,cantidad,moneda,precioCompra,precioEnvio,precioComision,statusEnvio,envio,pago,seller_custom_field)
                VALUES ';
                for ($i=0; $i < count($array['order_items']) ; $i++) { 
                    $items= '';
                    $sku= '';
                    $items[]= $array['order_items'][$i]['item']['id'];
                    $sku[]= $array['order_items'][$i]['item']['seller_custom_field'];
                }
                $preciodeEnvio=(!$array['payments'][0]['shipping_cost'])?0.00:$array['payments'][0]['shipping_cost'];
                $cometa=(!$array['payments'][0]['marketplace_fee'])?0.00:$array['payments'][0]['marketplace_fee'];
                $query.= "(
                        ".$idEmpresa.",
                        ".$array['seller']['id'].",
                        ".$array['id'].",
                        '".$array['date_created']."',
                        '".implode(',', $items)."',
                        '".$array['order_items'][0]['quantity']."',
                        '".$array['currency_id']."',
                        ".$array['total_amount'].",
                        ".$preciodeEnvio.",
                        ".$cometa.",
                        '".$array['shipping']['status']."',
                        '".$array['shipping']['shipping_mode']."',
                        '".$array['payments'][0]['status']."',
                        '".implode(',', $sku)."'
                )";
        echo $query;
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        $DestID = $link->lastInsertID();
        if ($DestID>0) {
            $this->bajaStock($items[0],$array['order_items'][0]['quantity']);
            return true;
        }
        else
            return false;
    }
    public function altaOrdenInfo($ordenes)
    {
        for ($i=0; $i < count($ordenes['order_items']) ; $i++) { 
            $items= '';
            $sku= '';
            $items[]= $ordenes['order_items'][$i]['item']['id'];
            $sku[]= $ordenes['order_items'][$i]['item']['seller_custom_field'];
        }

        $link=Conexion::conectarK();
        $query="INSERT INTO inf_ordenes (
        seller,
        idOrden,
        date_created,
        items,
        cantidad,
        moneda,
        precioCompra,
        precioEnvio,
        precioComision,
        envio,
        pago,
        seller_custom_field)
        values (
        ".$ordenes['seller']['id'].",
        ".$ordenes['id'].",
        '".$ordenes['date_created']."',
        '".implode(',', $items)."',
        '".$ordenes['order_items'][0]['quantity']."',
        '".$ordenes['currency_id']."',
        ".$ordenes['total_amount'].",
        ".$ordenes['payments'][0]['shipping_cost'].",
        ".$ordenes['payments'][0]['marketplace_fee'].",
        '".$ordenes['shipping']['shipping_mode']."',
        '".$ordenes['payments'][0]['status']."',
        '".implode(',', $sku)."'
        )";
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        $DestID = $link->lastInsertID();
        if ($DestID>0) {
            return true;
        }
        else
            return false;
    }
    public function cambiarEnvio($idOrden,$estado)
    {
        $link=Conexion::conectarK();
        $query="UPDATE info_ordenes SET
        statusEnvio= '".$estado."'
        WHERE idOrden= ".$idOrden."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function guardarProblema($idOrden,$estado,$json)
    {
        $link=Conexion::conectarK();
        $queryP="UPDATE info_ordenes SET
        statusEnvio= '".$estado."'
        WHERE idOrden= ".$idOrden."";
        $query="INSERT INTO problemas (idOrden,estado,json,query) VALUES (
        '$idOrden',
        '$estado',
        '$json',
        '$queryP',
        )";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }

    
}


 ?>