<?php
class ArmarRegistro{
  public function armarAvatar(){
      $nombre = $_FILES["avatar"]["name"];
      $ext = pathinfo($nombre,PATHINFO_EXTENSION);
      $archivoOrigen = $_FILES["avatar"]["tmp_name"];
      $archivoDestino = dirname(__FILE__);
      $archivoDestino = $archivoDestino."/FotosAvatar/";
      $avatar = uniqid();
      $archivoDestino = $archivoDestino.$avatar;
      $archivoDestino = $archivoDestino.".".$ext;
      move_uploaded_file($archivoOrigen, $archivoDestino);
      $avatar = $avatar.".".$ext;
      return $avatar;
  }

  public function armarUsuario($datos,$avatar){
      $usuario = [
          "nombre"=>$datos["nombre"],
          "apellido"=>$datos["apellido"],
          "email"=>$datos["email"],
          "password"=>password_hash($datos["password"],PASSWORD_DEFAULT),
          "avatar"=>$avatar,
          "perfil"=>1
      ];
      return $usuario;
  }
}
