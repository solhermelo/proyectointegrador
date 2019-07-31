<?php
session_start();
require_once("helpers.php");

//function armarAvatar($imagen){
  //  $nombre = $imagen["avatar"]["name"];
  //  $ext = pathinfo($nombre,PATHINFO_EXTENSION);
  //  $archivoOrigen = $imagen["avatar"]["tmp_name"];
    //$archivoDestino = dirname(__FILE__);
    //$archivoDestino = $archivoDestino."/FotosAvatar/";
    //$avatar = uniqid();
    //$archivoDestino = $archivoDestino.$avatar;
    //$archivoDestino = $archivoDestino.".".$ext;
    //move_uploaded_file($archivoOrigen,$archivoDestino);
    //$avatar = $avatar.".".$ext;
    //return $avatar;
//}

//function armarUsuario($datos,$avatar){
  //  $usuario = [
    //    "nombre"=>$datos["nombre"],
      //  "apellido"=>$datos["apellido"],
      //  "email"=>$datos["email"],
      //  "password"=>password_hash($datos["password"],PASSWORD_DEFAULT),
      //  "avatar"=>$avatar,
      //  "perfil"=>1
    //];
    //return $usuario;
//}

//function guardarUsuario($usuario){
  //  $json = json_encode($usuario);
    //file_put_contents("usuarios.json",$json.PHP_EOL,FILE_APPEND);
//}
//function buscarPorEmail($email){
  //  $usuarios = abrirBaseJSON("usuarios.json");

  //  foreach ($usuarios as $key => $value) {

    //    if($email == $value["email"]){
      //      return $value;
    //    }
  //  }
    //return null;
//}



//function seteoUsuario($usuario,$datos){

  //  $_SESSION["nombre"] = $usuario["nombre"];
    //$_SESSION["apellido"] = $usuario["apellido"];
    //$_SESSION["email"]=$usuario["email"];
    //$_SESSION["avatar"]=$usuario["avatar"];
    //$_SESSION["perfil"]=$usuario["perfil"];
    //if(isset($datos["recordar"])){
      //  setcookie("email",$datos["email"],time()+3600);
        //setcookie("password",$datos["password"],time()+3600);
    //}

//}

//function validarAcceso(){
//    if(isset($_SESSION["email"])){
  //      return true;
    //}elseif (isset($_COOKIE["email"])) {
      //  $_SESSION["email"]= $_COOKIE["email"];
        //$_SESSION["password"]=$_COOKIE["password"];
        //return true;
  //  }else{
    //    return false;
  //  }
//}
