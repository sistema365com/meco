<?php
namespace clases;
use clases\Configuracion;

class Conexion
{
	private function __construct(){}

	static function conectarInterna()
		{
			$datosConfig= Configuracion::DatosConfig();
			$opciones  = array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

			$link = new \PDO(
							"mysql:host=".$datosConfig['host'].";dbname=".$datosConfig['dbName']."",
							"".$datosConfig['user']."", //usuario
							"".$datosConfig['pass']."", //pass
							$opciones);	

			$link->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
			return $link;
		}
	static function conectarExterna()
		{
			$datosConfig= Configuracion::DatosExt();
			$opciones  = array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

			$link = new \PDO(
							"mysql:host=".$datosConfig['host'].";dbname=".$datosConfig['dbName']."",
							"".$datosConfig['user']."", //usuario
							"".$datosConfig['pass']."", //pass
							$opciones);	

			$link->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
			return $link;
		}
	static function conectar()
		{
			$opciones  = array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

			$link = new \PDO(
				"mysql:host=localhost;dbname=scotchbox",
				"root", //usuario
				"root", //pass
				$opciones); 

			$link->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
			return $link;
		}
	static function conectarK()
		{
			$opciones  = array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
			$link = new PDO(
				"mysql:host=localhost;dbname=u430849600_mconnecting",
				"u430849600_mcon", //usuario
				"Password0", //pass
				$opciones);	

			$link->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
			return $link;
		}
}
?>