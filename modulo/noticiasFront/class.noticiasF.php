<?php 

/**
* 
*/
class NoticiasF
{

    public function listar($d,$h)
    {
    $link=Conexion::conectarK();
    $query= "SELECT * FROM noticias WHERE publicado=1 ORDER BY id DESC LIMIT 20";
    $stmt=$link->prepare($query);
    $stmt->execute();
    $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
    }
    public function ver($id)
    {
    $link=Conexion::conectarK();
    $query= "SELECT * FROM noticias WHERE id=".$id;
    $stmt=$link->prepare($query);
    $stmt->execute();
    $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado;
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
    public function marcarLeido($idNoticia,$lector){
        $link = Conexion::conectarK();
        $query='UPDATE noticias SET 
        leido="'.$lector.'" 
        WHERE id='.$idNoticia.'';
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