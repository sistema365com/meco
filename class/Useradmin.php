<?php 

/**
* 
*/
class Useradmin
{
    const TABLA = 'user_admin';
    const USERID = 'id_admin';
    const USER = 'user_id';
    const PASS = 'pass';
    const NOMBRE = 'nombre';
    const APELLIDO = 'apellido';
    const EMAIL = 'email';
    const TELEFONO = 'telefono';
    const PERMISOS = 'permisos';
    private $user;

    public function cumples(){
        $link=Conexion::conectarInterna();
        $query= "SELECT * FROM user_admin where date_format(telefono,'%m') = date_format(now(),'%m') order by date_format(telefono,'%d')";
        // $query="SELECT Id, Nombre FROM RUBRO2 WHERE Dependencia= ".$id."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function borrarUser($id,$prefijo){
        $link=Conexion::conectarK();
        $query="DELETE FROM user_admin_".$_SESSION['prefijo']." WHERE ".self::USERID." = ".$id."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        return $query;
    }
    public function listarUsuarios($prefijo){
        $link=Conexion::conectarK();
        $query= "SELECT * FROM user_admin_".$prefijo." WHERE id_admin!=1 ORDER BY ".self::USERID." DESC";
        // $query="SELECT Id, Nombre FROM RUBRO2 WHERE Dependencia= ".$id."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function editaUser($userId,$usuario,$nombre,$apellido,$email,$telefono,$permisos,$prefijo){
        $link=Conexion::conectarK();
        $query='UPDATE user_admin_'.$prefijo.' SET 
        '.self::USER.'="'.$usuario.'", 
        '.self::NOMBRE.'="'.$nombre.'",  
        '.self::APELLIDO.'="'.$apellido.'",  
        '.self::EMAIL.'="'.$email.'",  
        '.self::PERMISOS.'="'.$permisos.'",  
        '.self::TELEFONO.'="'.$telefono.'"  
        WHERE '.self::USERID.'="'.$userId.'"';
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado>0) {
            return true;
        }
        else 
            return false;
    }
    public function cambiaPass($pass,$idUser,$prefijo){
        $link=Conexion::conectarK();
        $query='UPDATE user_admin_'.$prefijo.' SET 
        '.self::PASS.' ="'.$pass.'" 
        WHERE '.self::USERID.'="'.$idUser.'"';
        // $query='UPDATE user_admin_'.$prefijo.' SET 
        // '.self::PASS.'=aes_encrypt("'.$pass.'","lalala")
        // WHERE '.self::USERID.'="'.$idUser.'"';
        // echo $query;
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        if ($resultado>0) {
            return true;
        }
        else 
            return false;
    }
    public function verUsuario($id,$prefijo){
        $link=Conexion::conectarK();
        $query="SELECT * FROM user_admin_".$prefijo." WHERE ".self::USERID." = '".$id."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function recuperapass($email){
        $link=Conexion::conectarInterna();
        $query="SELECT * FROM ".self::TABLA." WHERE ".self::EMAIL." = '" . $email . "'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
        }
    public function login($user, $pass)
        {
            $divido= explode("-", $user);
            $bdCliente= 'user_admin_'.$divido[0];
            $link=Conexion::conectarK();
            $query="SELECT * FROM ".$bdCliente." WHERE ".self::USER." = '" . $divido[1] . "' AND ".self::PASS." = '" . $pass . "'";
            // $query="SELECT * FROM ".self::TABLA." WHERE ".self::USER." = '" . $user . "' AND ".self::PASS." = aes_encrypt('" . $pass . "','lalala')";
            $stmt=$link->prepare($query);
            $stmt->execute();
            $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
            if (!$resultado) {
                return 0;
            }
            else
            {
                @session_start();
                $identificaUser= self::USERID;
                $identificaNombre= self::NOMBRE;
                $sopermi= self::PERMISOS;
                $_SESSION['usuario_logueado'] = $resultado[$identificaUser];
                $_SESSION['nombre'] = $resultado[$identificaNombre];
                $_SESSION['permisos'] = $resultado['permisos'];
                $_SESSION['empresa'] = $resultado['empresa'];
                $_SESSION['prefijo'] = $resultado['prefijo'];
                $_SESSION['email'] = $resultado['email'];
                return $resultado;
            }
            if ($recordar_usuario!=0) // si quiere recordar el usuario creo la cookie
                setcookie('usuario', $user, time() + 60 * 60 * 24 * 30); // 60 segundos * 60 minutos * 24hs * 30 días = 2592000 segundos = 1 mes
            else
                setcookie('usuario'); // sino la borro
        }
    public function registrar($usuario,$pass,$nombre,$apellido,$email,$telefono,$permisos,$prefijo){
        $link = Conexion::conectarK();
        $query='INSERT INTO user_admin_'.$prefijo.' (
        '.self::USER.', 
        '.self::PASS.', 
        '.self::NOMBRE.', 
        '.self::APELLIDO.', 
        '.self::EMAIL.', 
        '.self::TELEFONO.', 
        '.self::PERMISOS.') 
        values (
        "'.$usuario.'", 
        "'.$pass.'", 
        "'.$nombre.'", 
        "'.$apellido.'", 
        "'.$email.'", 
        "'.$telefono.'", 
        "'.$permisos.'")';
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        $DestID = $link->lastInsertID();
        if ($DestID>0) {
            return true;
        }
        else
            return false;
        }
    public function validar($email){
        $link=Conexion::conectarInterna();
        $query="SELECT * FROM ".self::TABLA." WHERE ".self::EMAIL." = '" . $email ."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        if ($resultado) {
            return false;
        }
        else {
            return true;
        }

    }



   

    /**
     * Gets the value of user.
     *
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets the value of user.
     *
     * @param mixed $user the user
     *
     * @return self
     */
    private function _setUser($user)
    {
        $this->user = $user;

        return $this;
    }
}



 ?>