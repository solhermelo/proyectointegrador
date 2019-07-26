<?php
class Validador{

  public function validar($datos,$bandera){

      $errores = [];

      if(isset($datos["nombre"])){
          $nombre = trim($datos["nombre"]);
          if(empty($nombre)){
              $errores["nombre"]="Tienes que completar tu nombre";
          }
      }
      if(isset($datos["apellido"])){
          $apellido = trim($datos["apellido"]);
          if(empty($apellido)){
              $errores["apellido"]="Tienes que completar tu apellido";
          }
      }
      if(isset($datos["email"])){
          $email = trim($datos["email"]);
          if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errores["email"]="El email no es válido";
          }

      }
      $password = trim($datos["password"]);
      if(isset($datos["password"])){
          if(empty($password)){
              $errores["password"] = "El password no puede estar vacio";
          }elseif(strlen($password)<8){
              $errores["password"]="El password debe tener más de 8 cacteres";
          }
      }
      if(isset($datos["repassword"])){
          $repassword = trim($datos["repassword"]);
          if(empty($repassword)){
              $errores["repassword"]= "El campo no debe estar vacio";
          }
          if($password != $repassword){
              $errores["repassword"]= "Las contraseñas deben coincidir";
          }
      }

      if(isset($_FILES) && $bandera == 'registro'){
          if($_FILES["avatar"]["error"]!=0){
              $errores["avatar"]="Hubo un error al cargar la imagen";
          }
          $avatar = $_FILES["avatar"]["name"];
          $ext = strtolower(pathinfo($avatar,PATHINFO_EXTENSION));
          if($ext != "jpg" && $ext != "png" && $ext != "jpeg"){
              $errores["avatar"] = "La extensión debe ser PNG, JPEG ó JPG";
          }
      }


      return $errores;
  }

  public function validarAcceso(){
      if(isset($_SESSION["email"])){
          return true;
      }elseif (isset($_COOKIE["email"])) {
          $_SESSION["email"]= $_COOKIE["email"];
          $_SESSION["password"]=$_COOKIE["password"];
          return true;
      }else{
          return false;
      }
  }
}
 ?>
