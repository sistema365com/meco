<?php 

/**
* 
*/
class Generico
{

    const TABLAUSER = 'user_admin';
    const TABLANOTAS = 'notas';
    const TABLACATE1 = 'categoria1';
    const TABLACATE2 = 'categoria2';


	private $sucursal;

    public function editaCongiMail($dire,$hora,$msj){
        $link = Conexion::conectar();
        $query='UPDATE configABM SET 
        direccion="'.$dire.'",
        horarios="'.$hora.'",
        mensajeAd="'.$msj.'" WHERE id="1"';
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado) {
            return true;
        }
        else{
            return false;
        }
        
    }
    public function editaTags($dire,$hora,$msj){
        $link = Conexion::conectar();
        $query='UPDATE configABM SET 
        title="'.$dire.'",
        description="'.$hora.'",
        metaKey="'.$msj.'" WHERE id="1"';
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado) {
            return true;
        }
        else{
            return false;
        }
        
    }
    public function editaAnuncio($anuncio){
        $link = Conexion::conectar();
        $query='UPDATE configABM SET 
        anuncio="'.$anuncio.'" WHERE id="1"';
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado) {
            return true;
        }
        else{
            return false;
        }
        
    }
    public function listarConfigMail(){
        $link=Conexion::conectar();
        $query="SELECT * FROM configABM";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function verConfig()
    {
    $link=Conexion::conectar();
    $query= "SELECT * FROM configABM ORDER BY id DESC";
    // $query="SELECT Id, Nombre FROM RUBRO2 WHERE Dependencia= ".$id."";
    $stmt=$link->prepare($query);
    $stmt->execute();
    $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado;
    }
    public function contarUser(){
    $link=Conexion::conectar();
    $query="SELECT COUNT(*) FROM ".self::TABLAUSER."";
    $stmt=$link->prepare($query);
    $stmt->execute();
    $resultado=$stmt->fetchColumn();
    return $resultado;
    }
    public function contarNota(){
    $link=Conexion::conectar();
    $query="SELECT COUNT(*) FROM ".self::TABLANOTAS."";
    $stmt=$link->prepare($query);
    $stmt->execute();
    $resultado=$stmt->fetchColumn();
    return $resultado;
    }
    public function contarCate1(){
    $link=Conexion::conectar();
    $query="SELECT COUNT(*) FROM ".self::TABLACATE1."";
    $stmt=$link->prepare($query);
    $stmt->execute();
    $resultado=$stmt->fetchColumn();
    return $resultado;
    }
    public function contarCate2(){
    $link=Conexion::conectar();
    $query="SELECT COUNT(*) FROM ".self::TABLACATE2."";
    $stmt=$link->prepare($query);
    $stmt->execute();
    $resultado=$stmt->fetchColumn();
    return $resultado;
    }


    public function crearOP($idComprador,$codigoUnico,$venta,$articulos){
        $link = Conexion::conectar();
        $query='INSERT INTO carrito (idComprador, codigoUnico, importe, articulos, fecha) values ("'.$idComprador.'", "'.$codigoUnico.'", "'.$venta.'", "'.$articulos.'", now())';
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado) {
            return true;
        }
        else{
            return false;
        }
        
    }
    public function listarRegistrados($inicio,$tamañoLista)
    {
    $link=Conexion::conectar();
    $query= "SELECT * FROM registrados ORDER BY fecha DESC LIMIT ".$inicio.", ".$tamañoLista."";
    // $query="SELECT Id, Nombre FROM RUBRO2 WHERE Dependencia= ".$id."";
    $stmt=$link->prepare($query);
    $stmt->execute();
    $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
    }
    public function cantidadRegistrados()
    {
    $link=Conexion::conectar();
    $query= "SELECT count(*) as cant FROM registrados";
    // $query="SELECT Id, Nombre FROM RUBRO2 WHERE Dependencia= ".$id."";
    $stmt=$link->prepare($query);
    $stmt->execute();
    $resultado=$stmt->fetchColumn();
    return $resultado;
    }
    public function cargarContacto($nombreRemitente,$emailRemitente,$articulos,$conocio,$fuenteconsulta){
        $link = Conexion::conectar();
        $query='INSERT INTO registrados (nombre, email, articulos, conocio, fuente, fecha) values ("'.$nombreRemitente.'", "'.$emailRemitente.'", "'.$articulos.'", "'.$conocio.'","'.$fuenteconsulta.'", now())';
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado) {
            return true;
        }
        else{
            return false;
        }
        
    }
    public function confirmarOP($id){
        $estado= 'pagado';
        $link = Conexion::conectar();
        $query='UPDATE carrito SET 
        estado="'.$estado.'" WHERE codigoUnico="'.$id.'"';
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado) {
            return true;
        }
        else{
            return false;
        }
        
    }
	public function cancelarOP($id){
        $estado= 'cancelado';
        $link = Conexion::conectar();
        $query='UPDATE carrito SET 
        estado="'.$estado.'" WHERE codigoUnico="'.$id.'"';
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado) {
            return true;
        }
        else{
            return false;
        }
        
    }

	public function listarSucursal(){
        $link=Conexion::conectar();
        $query="SELECT * FROM sucursales";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
	}

    public function listaBuscador(){
        $link=Conexion::conectar();
        $query="SELECT * FROM RUBRO3";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function verSiExiste($campo){
        $link=Conexion::conectar();
        $query="SELECT * FROM RUBRO3 where Nombre='".$campo."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }


    


    /**
     * Gets the value of sucursal.
     *
     * @return mixed
     */
    public function getSucursal()
    {
        return $this->sucursal;
    }

    /**
     * Sets the value of sucursal.
     *
     * @param mixed $sucursal the sucursal
     *
     * @return self
     */
    private function _setSucursal($sucursal)
    {
        $this->sucursal = $sucursal;

        return $this;
    }
}

 ?>