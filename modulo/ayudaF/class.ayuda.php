<?php 

/**
* 
*/
class Ayuda
{

    public function borrar($id){
        $link=Conexion::conectarK();
        $query='UPDATE tickets SET 
        estado=2,
        fechaCierre= now() 
        WHERE id='.$id.'';
        $stmt=$link->prepare($query);
        $stmt->execute();
        if ($stmt) {
            return true;
        }
        return false;
    }
    public function abrirTicket($id){
        $link=Conexion::conectarK();
        $query='UPDATE tickets SET 
        estado=0,
        fechaCierre= "" 
        WHERE id='.$id.'';
        $stmt=$link->prepare($query);
        $stmt->execute();
        if ($stmt) {
            return true;
        }
        return false;
    }
    public function listar($cliente)
    {
    $link=Conexion::conectarK();
    $query= "SELECT * FROM tickets WHERE cliente=".$cliente." ORDER BY id DESC";
    $stmt=$link->prepare($query);
    $stmt->execute();
    $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
    }
    public function listarMensajes($ticket)
    {
    $link=Conexion::conectarK();
    $query= "SELECT * FROM ticketsSMS WHERE idTicket=".$ticket." ORDER BY id ASC";
    $stmt=$link->prepare($query);
    $stmt->execute();
    $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
    }
    public function ver($id)
    {
    $link=Conexion::conectarK();
    $query= "SELECT * FROM tickets WHERE id=".$id;
    $stmt=$link->prepare($query);
    $stmt->execute();
    $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado;
    }
    public function crear(){
        $link = Conexion::conectarK();
        $query='INSERT INTO tickets (cliente, tipo, prioridad, titulo, fechaApertura) 
        values (
        '.$_SESSION['empresa'].', 
        '.$_POST['tipo'].', 
        "'.$_POST['prioridad'].'", 
        "'.$_POST['titulo'].'", 
        now())';
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        $DestID = $link->lastInsertID();
        $query2='INSERT INTO ticketsSMS (idTicket, creadoPor, contenido, fecha) 
        values (
        '.$DestID.', 
        '.$_SESSION['empresa'].', 
        "'.htmlentities($_POST['contenido']).'", 
        now())';
        $stmt2=$link->prepare($query2);
        $resultado2= $stmt2->execute();
        if ($resultado) {
            return true;
        }
        else{
            return false;
        }
    }
    public function addMensaje(){
        $link = Conexion::conectarK();
        $query='INSERT INTO ticketsSMS (idTicket, creadoPor, contenido, fecha) 
        values (
        '.$_POST['id'].', 
        '.$_SESSION['empresa'].', 
        "'.htmlentities($_POST['contenido']).'", 
        now())';
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        $query2='UPDATE tickets SET 
        estado=0
        WHERE id='.$_POST['id'].'';
        $stmt2=$link->prepare($query2);
        $resultado2= $stmt2->execute();
        if ($resultado) {
            return true;
        }
        else{
            return false;
        }
    }
    public function editar($id){
        $link = Conexion::conectarK();
        $query='UPDATE noticias SET 
        titulo="'.$_POST['titulo'].'", 
        contenido="'.htmlentities($_POST['contenido']).'", 
        categoria="'.$_POST['categoria'].'", 
        creadoPor="'.$_POST['creadoPor'].'", 
        publicado='.$_POST['publicado'].' 
        WHERE id='.$id.'';
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado) {
            return true;
        }
        else{
            return false;
        }
        
    }



}
 ?>