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

  public function armarUsuario($registro,$avatar){
      $usuario = [
          "nombre"=>$registro->getNombre(),
          "apellido"=>$registro->getApellido(),
          "email"=>$registro->getEmail(),
          "password"=>password_hash($usuarios->getPassword(),PASSWORD_DEFAULT),
          "avatar"=>$avatar,
      ];
      return $usuario;
  }
}
