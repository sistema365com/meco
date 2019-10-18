<?php 

/**
* 
*/
class Informes
{
    public function importesPorMesAño($ano=2018)
    {
        $link=Conexion::conectarK();
        $query="SELECT 
                MONTH(date_created) AS Mes,
                 sum(precioCompra) as suma,
                 count(idOrden) as cantidad,
                 AVG(precioCompra) as promedio 
                 FROM inf_ordenes WHERE YEAR(date_created)=".$ano." AND idEmpresa=".$_SESSION['empresa']." group by MONTH(date_created)";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }    
    public function visitasPorMesAño($ano=2018)
    {
        $link=Conexion::conectarK();
        $query="SELECT MONTH(fecha) AS Mes, sum(visitas) as visitas FROM inf_visitas WHERE YEAR(fecha)=".$ano." AND idEmpresa=".$_SESSION['empresa']." group by MONTH(fecha)";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }    
    public function topProducto($ano=2018)
    {
        $link=Conexion::conectarK();
        $query="SELECT A.title, A.perma_link,O.items, count(O.id) as cantidad FROM inf_ordenes O INNER JOIN articulosML A ON A.idML=O.items WHERE YEAR(O.date_created)=".$ano." AND O.idEmpresa=".$_SESSION['empresa']." group by O.items order by cantidad DESC LIMIT 5";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }    
    public function balance($ano=2018)
    {
        $link=Conexion::conectarK();
        $query="SELECT sum(precioCompra) as ventas, sum(precioComision) as cometa, sum(precioCompra) - sum(precioComision) as dif FROM inf_ordenes WHERE YEAR(date_created)=".$ano." AND idEmpresa=".$_SESSION['empresa']."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }    
    public function topRespuestasAnual($ano)
    {
        $link=Conexion::conectarK();
        $query="SELECT U.nombre, U.apellido, count(I.idRespuesta) as respuestas
                FROM user_admin_".$_SESSION['prefijo']." as U
                INNER JOIN inf_preguntas as I ON U.id_admin = I.usuario WHERE I.idEmpresa=".$_SESSION['empresa']." AND YEAR(I.fechaRespondida)='".$ano."' GROUP BY I.usuario ORDER BY respuestas DESC";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }    
    public function topRespuestasMensual($mes)
    {
        $link=Conexion::conectarK();
        $query="SELECT U.nombre, U.apellido, count(I.idRespuesta) as respuestas
                FROM user_admin_".$_SESSION['prefijo']." as U
                INNER JOIN inf_preguntas as I ON U.id_admin = I.usuario WHERE I.idEmpresa=".$_SESSION['empresa']." AND MONTH(I.fechaRespondida)='".$mes."' GROUP BY I.usuario ORDER BY respuestas DESC";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }    
    public function topMensajesAnual($ano)
    {
        $link=Conexion::conectarK();
        $query="SELECT U.nombre, U.apellido, count(I.texto) as respuestas
                FROM user_admin_".$_SESSION['prefijo']." as U
                INNER JOIN inf_mensajes as I ON U.id_admin = I.usuario WHERE I.idEmpresa=".$_SESSION['empresa']." AND YEAR(I.fecha)='".$ano."' GROUP BY I.usuario";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }    
    public function topMensajesMensual($mes)
    {
        $link=Conexion::conectarK();
        $query="SELECT U.nombre, U.apellido, count(I.texto) as respuestas
                FROM user_admin_".$_SESSION['prefijo']." as U
                INNER JOIN inf_mensajes as I ON U.id_admin = I.usuario WHERE I.idEmpresa=".$_SESSION['empresa']." AND MONTH(I.fecha)='".$mes."' GROUP BY I.usuario";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }    
    public function guardarRespuesta($empresa,$usuario,$idML,$articulo,$idRespuesta,$texto,$fechaRealizada){
        $link = Conexion::conectarK();
        $query='INSERT INTO inf_preguntas 
        (idEmpresa,
        usuario,
        idML,
        articulo,
        idRespuesta,
        texto,
        fechaRealizada,
        fechaRespondida) 
        values (
        '.$empresa.',
        '.$usuario.',
        "'.$idML.'",
        "'.$articulo.'",
        "'.$idRespuesta.'",
        "'.$texto.'",
        "'.$fechaRealizada.'",
        now())';
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
    public function guardarMensaje($empresa,$usuario,$idML,$articulo,$idRespuesta,$texto){
        $link = Conexion::conectarK();
        $query='INSERT INTO inf_mensajes 
        (idEmpresa,
        usuario,
        idML,
        articulo,
        idRespuesta,
        texto,
        fecha) 
        values (
        '.$empresa.',
        '.$usuario.',
        "'.$idML.'",
        "'.$articulo.'",
        "'.$idRespuesta.'",
        "'.$texto.'",
        now())';
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
        $link = Conexion::conectarK();
        $query='UPDATE plantillaMensajes SET 
        titulo="'.$_POST['titulo'].'",
        texto="'.$_POST['texto'].'" WHERE id='.$_POST['id'].' and idEmpresa='.$_SESSION['empresa'];
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