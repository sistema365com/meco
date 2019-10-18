<?php 

/**
* 
*/
class Categoria
{
	
    const TABLA1 = 'categoria1';
    const ID1 = 'id';
    const NOMBRE1= 'nombre';
    const DEPENDENCIA1= '';
    const TABLA2 = 'categoria2';
    const ID2 = 'id';
    const NOMBRE2= 'nombre';
    const DEPENDENCIA2= '';
    private $categoria;


    public function crearCategoria1($nombre){
    $link = Conexion::conectar();
    $query='INSERT INTO '.self::TABLA1.' (
    '.self::NOMBRE1.') 
    values (
    "'.$nombre.'")';
    $stmt=$link->prepare($query);
    $resultado= $stmt->execute();
    $DestID = $link->lastInsertID();
    if ($DestID>0) {
        return true;
    }
    else
        return false;
    }

    public function crearCategoria2($nombre){
    $link = Conexion::conectar();
    $query='INSERT INTO '.self::TABLA2.' (
    '.self::NOMBRE2.') 
    values (
    "'.$nombre.'")';
    $stmt=$link->prepare($query);
    $resultado= $stmt->execute();
    $DestID = $link->lastInsertID();
    if ($DestID>0) {
        return true;
    }
    else
        return false;
    }

    public function editaCategoria1($idNota,$nombre){
    $link=Conexion::conectar();
    $query='UPDATE '.self::TABLA1.' SET 
    '.self::NOMBRE1.'="'.$nombre.'"  
    WHERE '.self::ID1.'="'.$idNota.'"';
    $stmt=$link->prepare($query);
    $resultado= $stmt->execute();
    if ($resultado>0) {
        return true;
    }
    else 
        return false;
    }
    public function editaCategoria2($idNota,$nombre){
    $link=Conexion::conectar();
    $query='UPDATE '.self::TABLA2.' SET 
    '.self::NOMBRE2.'="'.$nombre.'"  
    WHERE '.self::ID2.'="'.$idNota.'"';
    $stmt=$link->prepare($query);
    $resultado= $stmt->execute();
    if ($resultado>0) {
        return true;
    }
    else 
        return false;
    }
    public function borrarCategoria1($id){
        $link=Conexion::conectar();
        $query="DELETE FROM ".self::TABLA1." WHERE ".self::ID1." = ".$id."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        if ($stmt) {
            return true;
        }
        return false;
    }
    public function borrarCategoria2($id){
        $link=Conexion::conectar();
        $query="DELETE FROM ".self::TABLA2." WHERE ".self::ID2." = ".$id."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        if ($stmt) {
            return true;
        }
        return false;
    }
    public function listarCategoria1()
    {
    $link=Conexion::conectar();
        $query= "SELECT * FROM ".self::TABLA1."";
        // $query="SELECT Id, Nombre FROM RUBRO2 WHERE Dependencia= ".$id."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
	public function listarCategoria2()
	{
	$link=Conexion::conectar();
        $query= "SELECT * FROM ".self::TABLA2."";
        // $query="SELECT Id, Nombre FROM RUBRO2 WHERE Dependencia= ".$id."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
	}
    public function nombreCate1($id)
    {
    $link=Conexion::conectar();
    $query="SELECT * FROM ".self::TABLA1." WHERE ".self::ID1." = '".$id."'";
    $stmt=$link->prepare($query);
    $stmt->execute();
    $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado;              
    }
    public function nombreCate2($id)
    {
    $link=Conexion::conectar();
    $query="SELECT * FROM ".self::TABLA2." WHERE ".self::ID2." = '".$id."'";
    $stmt=$link->prepare($query);
    $stmt->execute();
    $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado;              
    }





    /**
     * Gets the value of categoria.
     *
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Sets the value of categoria.
     *
     * @param mixed $categoria the categoria
     *
     * @return self
     */
    private function _setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }
}

 ?>