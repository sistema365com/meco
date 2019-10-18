<?php 

/**
* 
*/
class Variaciones
{
    public function addAtributo($idART,$json){
    	$json2= serialize($json);
        $texto= str_replace('"', "''", $json2);
        $link = Conexion::conectarK();
        $query='INSERT INTO attr_atributos 
        (idEmpresa,idART, json) 
        values (
        '.$_SESSION['empresa'].',
        "'.$idART.'",
         "'.$texto.' ")';
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
    public function addVariacion($idART,$json){
    	$json2= serialize($json);
        $texto= str_replace('"', "''", $json2);
        $link = Conexion::conectarK();
        $query='INSERT INTO attr_variaciones 
        (idEmpresa,idART, json) 
        values (
        '.$_SESSION['empresa'].',
        "'.$idART.'",
         "'.$texto.' ")';
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
    public function verAtributos($idART)
    {
        $link=Conexion::conectarK();
        $query="SELECT * FROM attr_atributos WHERE idART='".$idART."' AND idEmpresa=".$_SESSION['empresa']."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        $texto= str_replace("''", '"', $resultado['json']);
		$jsonR= unserialize($texto);
        return $jsonR;
    }
    public function verVariaciones($idART)
    {
        $link=Conexion::conectarK();
        $query="SELECT * FROM attr_variaciones WHERE idART='".$idART."' AND idEmpresa=".$_SESSION['empresa']."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        $texto= str_replace("''", '"', $resultado['json']);
		$jsonR= unserialize($texto);
        return $jsonR;
    }
    public function eliminaAtributo($idART){
        $link=Conexion::conectarK();
        $query="DELETE FROM attr_atributos WHERE idART = ".$idART." and idEmpresa= ".$_SESSION['empresa']."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        if ($stmt) {
            return true;
        }
        return false;
    }
    public function eliminaVariacion($idART){
        $link=Conexion::conectarK();
        $query="DELETE FROM attr_variaciones WHERE idART = ".$idART." and idEmpresa= ".$_SESSION['empresa']."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        if ($stmt) {
            return true;
        }
        return false;
    }




}


 ?>