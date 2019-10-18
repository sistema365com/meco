<?php 

/**
* 
*/
class Plantilla
{
	
    public function addMensaje(){
        $texto= str_replace('"', "''", $_POST['texto']);
        $link = Conexion::conectarK();
        $query='INSERT INTO plantillaMensajes 
        (idEmpresa,titulo, texto) 
        values (
        '.$_SESSION['empresa'].',
        "'.$_POST['titulo'].'",
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
    public function addRespuesta(){
        $texto= str_replace('"', "''", $_POST['texto']);
        $link = Conexion::conectarK();
        $query='INSERT INTO plantillaRespuestas 
        (idEmpresa,titulo, texto) 
        values (
        '.$_SESSION['empresa'].',
        "'.$_POST['titulo'].'",
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
    public function editaMensaje(){
        $texto= str_replace('"', "''", $_POST['texto']);
        $link = Conexion::conectarK();
        $query='UPDATE plantillaMensajes SET 
        titulo="'.$_POST['titulo'].'",
        texto="'.$texto.' " WHERE id='.$_POST['id'].' and idEmpresa='.$_SESSION['empresa'];
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado) {
            return true;
        }
        else{
            return false;
        }        
    }
    public function cargarMensajesAutomaticos(){
        $mensajes= implode(';', $_POST['mensajesAutomaticos']);
        $link = Conexion::conectarK();
        $query='UPDATE user_config SET 
        mensajesAutomaticos="'.$mensajes.'" WHERE id_admin='.$_POST['empresa'];
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado) {
            return true;
        }
        else{
            return false;
        }        
    }
    public function editarSaludo($tipo,$texto){
        $link = Conexion::conectarK();
        $query='UPDATE plantillasGeneral SET 
        texto="'.$texto.'" WHERE tipo="'.$tipo.'" and idEmpresa='.$_SESSION['empresa'];
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado) {
            return true;
        }
        else{
            return false;
        }        
    }
    public function borrarSaludos($empresa){
        $link = Conexion::conectarK();
        $query='UPDATE plantillasGeneral SET 
        texto="" WHERE idEmpresa='.$empresa;
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado) {
            return true;
        }
        else{
            return false;
        }        
    }
    public function editaRespuesta(){
        $texto= str_replace('"', "''", $_POST['texto']);
        $link = Conexion::conectarK();
        $query='UPDATE plantillaRespuestas SET 
        titulo="'.$_POST['titulo'].'",
        texto="'.$texto.' " WHERE id='.$_POST['id'].' and idEmpresa='.$_SESSION['empresa'];
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado) {
            return true;
        }
        else{
            return false;
        }        
    }
    public function eliminaRespuesta($id){
        $link=Conexion::conectarK();
        $query="DELETE FROM plantillaRespuestas WHERE id = ".$id." and idEmpresa= ".$_SESSION['empresa']."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        if ($stmt) {
            return true;
        }
        return false;
    }
    public function eliminaMensaje($id){
        $link=Conexion::conectarK();
        $query="DELETE FROM plantillaMensajes WHERE id = ".$id." and idEmpresa= ".$_SESSION['empresa']."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        if ($stmt) {
            return true;
        }
        return false;
    }
    public function verPlantillaGeneral($empresa)
    {
        $link=Conexion::conectarK();
        $query="SELECT * FROM plantillasGeneral WHERE idEmpresa='".$empresa."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function listarMensajes($empresa)
    {
        $link=Conexion::conectarK();
        $query="SELECT * FROM plantillaMensajes WHERE idEmpresa='".$empresa."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function listarRespuestas($empresa)
    {
        $link=Conexion::conectarK();
        $query="SELECT * FROM plantillaRespuestas WHERE idEmpresa='".$empresa."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function verMensajePositivo($Empresa)
    {
        $link=Conexion::conectarK();
        $query="SELECT * FROM plantillaMensajes WHERE idEmpresa='".$empresa."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
}

 ?>