<?php
/////////////////////////////////
//Clase de Conexion a Mysql //
/////////////////////////////////
require_once(dirname(__FILE__).'/config.php');

abstract class Abstract_db
{
// /////////////
// Variables //
// /////////////
 
	private static $conexion;
	//private  static $strconexion;
	private  static $estado=0;
	 
 
/**
* Función que se utilizara al momento de hacer la instancia de la clase.
* @param  integer Nivel de acceso con el que se accede a la base de datos.
* @return void
*/
private static function conectar($nivel){
	try {
		if(empty(self::$strconexion))
			//self::cargarValores($nivel);
		self::$conexion=mysqli_connect(DB_HOST,DB_USER,DB_US_PASS,DB_NAME,DB_PORT);
                self::$estado=1;
		return true;		
	}
	catch (Exception $e){
		self::$estado=3;
		return false;
	}
}

/**
* función para destruir la conexión.
* @return void
*/
private static function desconectar(){
	self::$estado=2;
	mysqli_close(self::$conexion);
}

protected static function result_ejecutar_sql($sql,$nivel=0){
	if(self::$estado!=1)	
		self::conectar($nivel);
	try{

		$result= mysqli_query(self::$conexion,$sql); 
	}
	catch(Exception $e){
		return false;
		self::desconectar();
	}
	self::desconectar();
	return $result;
        //return $datos;
}


protected static function update_sql($sql,$nivel=0){
	$row_afect=0;
	if(self::$estado!=1)	
		self::conectar($nivel);
	try{
		$result= mysqli_query(self::$conexion,$sql);
		$row_afect= mysqli_affected_rows($result);
	}
	catch(Exception $e){
	}
	self::desconectar();
	return $row_afect;
}
}
?>
