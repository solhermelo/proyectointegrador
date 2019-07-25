<?php
require_once ("clases/BaseDatos.php");
require_once ("clases/Mysql.php");
require_once 'clases/usuario.php';
require_once 'clases/helpers.php';

$host = "localhost";
$db_nombre = "";
$usuario = "root";
$password = "root";
$puerto = "8888";
$charset = "utf8mb4";

$pdo = MySql::conexion($host,$db_nombre,$usuario,$password,$puerto,$charset);
