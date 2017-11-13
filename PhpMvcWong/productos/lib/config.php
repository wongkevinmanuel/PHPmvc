<?php 
///////////////////// 
// Configuraciones// 

/**
 * Si la aplicacion esta en desarrollo
 * @var bool
 */
define("IS_DEBUG",true); 

/*
 * Si la applicacion mostrara los errores en el navegador
 */
ini_set('display_errors','On');
/////////////////////////////// 
//
////////////////////////////// 
// Coneccion a Base de Datos//
////////////////////////////// 
/**
 * Direccion Ip del servidor de base de datos.
 * @var string
 */ 
define("DB_HOST","localhost"); 
/**
 * Nombre de la Base de datos.
 * @var string
 */ 
define("DB_NAME","productos");     
/**
 * Usuario con que conectamos a la Base de datos.
 * @var string
 */
define("DB_USER","root"); 
/**
 * Contraseña del usuario on que conectamos a la Base de datos.
 * @var string
 */
//define("DB_US_PASS","1234");
define("DB_US_PASS","");

/**
 * Puerto del servidor de la Base de datos.
 * @var string
 */ 
define ("DB_PORT","3306");

/**
 * Codificación de la Base de datos.
 * @var string
 */
define("DB_CODIF","--client_encoding=iso-8859-1");
///////////////////////////////////
?>