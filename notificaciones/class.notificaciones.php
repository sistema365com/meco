<?php 

/**
* 
*/
class Notificaciones
{


    public function preguntaLeida($empresa)
    {
        $link=Conexion::conectarK();
        $query="UPDATE notificaciones SET
        leido=1
        WHERE topic= 'questions' and idEmpresa=".$empresa."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function marcarTodas($empresa)
    {
        $link=Conexion::conectarK();
        $query="UPDATE notificaciones SET
        leido=1
        WHERE idEmpresa=".$empresa."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function marcarLeido($id)
    {
        $link=Conexion::conectarK();
        $query="UPDATE notificaciones SET
        leido=1
        WHERE resource= '".$id."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
    }
    public function marcarLeido2($id)
    {
        $link=Conexion::conectarK();
        $query="UPDATE notificaciones SET
        leido=1
        WHERE resource= '/orders/".$id."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
    }
    public function marcarLeido3($id)
    {
        $link=Conexion::conectarK();
        $query="UPDATE notificaciones SET
        leido=1
        WHERE resource= '1/notiTicket' AND idEmpresa=".$_SESSION['empresa']."";
        $stmt=$link->prepare($query);
        $stmt->execute();
    }
    public function verNoti($id)
    {
        $link=Conexion::conectarK();
        $query="SELECT * FROM notificaciones WHERE idNoti='".$id."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function verNoti2($id)
    {
        $link=Conexion::conectarK();
        $query="SELECT * FROM notificaciones WHERE resource='".$id."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
	public function listarNoti($id)
	{
        $link=Conexion::conectarK();
        $query="SELECT * FROM notificaciones where idEmpresa=".$id." and leido=0";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
	}
    public function altaNoti($ordenes,$idNoti)
    {
    	$idEmpresa= Configuracion::verIDML($ordenes['user_id']);
        $link=Conexion::conectarK();
        $query="INSERT INTO notificaciones (
        idEmpresa,
        idNoti,
        resource,
        user_id,
        topic,
        sent)
        values (
        ".$idEmpresa['id_admin'].",
        '".$idNoti."',
        '".$ordenes['resource']."',
        '".$ordenes['user_id']."',
        '".$ordenes['topic']."',
        '".$ordenes['sent']."'
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

	




}



 ?>