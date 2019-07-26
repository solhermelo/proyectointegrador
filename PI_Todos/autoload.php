<?php
require_once ("clases/BaseDatos.php");
require_once ("clases/Mysql.php");
require_once ('clases/usuario.php');
require_once ('clases/helpers.php');
require_once ('clases/encriptar.php');
require_once ('clases/validador.php');

$host = "localhost";
$db_nombre = "quienjuega";
$usuario = "root";
$password = "root";
$puerto = "8889";
$charset = "utf8mb4";

$pdo = MySql::conexion($host,$db_nombre,$usuario,$password,$puerto,$charset);
