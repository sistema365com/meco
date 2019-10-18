<?php 

namespace clases;

/**
* 
*/
class Configuracion
{
	public $usuario;

    static function verConfigu()
    {
        $id= $_SESSION['empresa'];
        $link=Conexion::conectarK();
        $query="SELECT * FROM user_config where id_admin=".$id."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(\PDO::FETCH_ASSOC);
        return $resultado;
    }
	static function verIDML($id)
	{
        $link=Conexion::conectarK();
        $query="SELECT * FROM user_config where mlUserId=".$id."";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(\PDO::FETCH_ASSOC);
        return $resultado;
	}

    static function configABM()
    {
        $link=Conexion::conectarK();
        $query="SELECT * FROM user_config";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
    }

	static function ArticulosAdmin()
	{
        $link=Conexion::conectarK();
        $query="SELECT * FROM articulosML inner join user_config on id_admin = idEmpresa WHERE idML !='' AND idML is not null limit 10;";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
	}

    static function actualizarTokens($ac_token,$re_token)
    {
        $link=Conexion::conectarInterna();
        $query="UPDATE configABM SET
        ac_token= '".$ac_token."',
        re_token= '".$re_token."',
        dateToken= now()
        WHERE id= 1";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(\PDO::FETCH_ASSOC);
        return $resultado;
    }   
    static function actualizarTokensGen($ac_token,$re_token,$cliente)
    {
        $link=Conexion::conectarK();
        $query="UPDATE user_config SET
        ac_token= '".$ac_token."',
        re_token= '".$re_token."',
        dateToken= now()
        WHERE id_admin=".$cliente;
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(\PDO::FETCH_ASSOC);
        return $resultado;
    }	
	static function DatosConfig()
	{
		$confi= configuracion::verConfigu();
		$resultado = array(
			'host' => $confi['host'],
			'user' => $confi['user'],
			'pass' => $confi['pass'],
			'dbName' => $confi['dbName'],
			);
		return $resultado;
	}
	static function DatosExt()
	{
		$confi= configuracion::verConfigu();
		$resultado = array(
			'host' => $confi['e_host'],
			'user' => $confi['e_user'],
			'pass' => $confi['e_pass'],
			'dbName' => $confi['e_dbName'],
			'tabla' => $confi['e_tabla'],
			);
		return $resultado;
	}

    /**
     * Gets the value of usuario.
     *
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Sets the value of usuario.
     *
     * @param mixed $usuario the usuario
     *
     * @return self
     */
    public function _setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }
}
