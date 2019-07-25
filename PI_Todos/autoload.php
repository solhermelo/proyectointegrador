<?php
require_once ("clases/BaseDato.php");
require_once ("clases/Mysql.php");
require_once 'clases/producto.php';
require_once 'clases/helpers.php';

$host = "localhost";
$db_nombre = "";
$usuario = "root";
$password = "root";
$puerto = "8888";
$charset = "utf8mb4";

$pdo = MySql::conexion($host,$db_nombre,$usuario,$password,$puerto,$charset);
