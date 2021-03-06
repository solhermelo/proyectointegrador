<?php
require_once ("helpers.php");
require_once ("clases/baseMySQL.php");
require_once ("clases/usuario.php");
require_once ("clases/encriptar.php");
require_once ("clases/validador.php");
require_once ("clases/armarRegistro.php");
require_once ("clases/autenticador.php");
require_once ("clases/preguntas.php");


$host = "localhost";
$dbname = "quienjuega";
$puerto = "3306";
$usuario = "root";
$pass = "";
$charset = "utf8mb4";

$pdo = BaseMYSQL::conexion($host, $dbname, $puerto, $usuario, $pass, $charset);


$validar = new Validador();
$registro = new ArmarRegistro();
