<?php
  require_once("funciones.php");
  if($_POST){
    $errores = validar($_POST,'login');
    if(count($errores) == 0){

      $usuario = buscarPorEmail($_POST["email"]);

      if($usuario == null){
        $errores["email"]= "Usuario / Contraseña invalidos";
      }else{
        if(password_verify($_POST["password"],$usuario["password"])==false){
          $errores["password"]="Usuario / Contraseña invalidos";
        }else {

          seteoUsuario($usuario,$_POST);
          if(validarAcceso()){
            header("location: perfil.php");
            exit;
          }else{
            header("location: iniciosesion.php");
            exit;
          }

        }
      }

      }
  }



?>


<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/iniciosesion.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Inicio sesión</title>
  </head>
  <body>

    <?php
    require_once("navbar.php");
     ?>
    <div class="login-box">
      <div class="left-box">
        <?php if(isset($errores)):?>
              <ul class="alert alert-danger">
                <?php foreach ($errores as $key => $value) :?>
                  <li><?=$value;?></li>
                <?php endforeach;?>
              </ul>
        <?php endif;?>

        <h2>Inicia sesión</h2>

        <form class="" action="iniciosesion.php" method="post">
          <p>
            <label for="email">
              Email
            </label>
            <input id="email" type="email" name="email" value="<?=isset($errores['email'])? "":persistir("email") ;?>" placeholder="xxx@xmail.com">
          </p>
          <p>
            <label for="password">
              Contraseña
            </label>
            <input id="password" type="password" name="password" value="">
          </p>
          <p>
            <a class="olvidocontra" href="olvidePass.php">Olvidó su contraseña?</a>
          </p>
          <p>
          <label for="recordar">Recordarme</label>

          <input type="checkbox" name="recordar" id = "recordar" value="recordar">
        </p>
          <p>
            <input type="submit" name="" value="Enviar">
          </p>
        </form>

      </div>
      <div class="right-box">
        <span class="signin-with">Inicia sesión con Redes Sociales <br>
        </span>
        <button class="social facebook" type="button" name="button"> <img class="logo-fb" src="imagenes/logo-fb.jpg" alt="logo facebook">
        Facebook
        </button>
        <br>

        <button class="social google" type="button" name="button"> <img class="logo-google" src="imagenes/logo-google.jpg" alt="logo Google"> Google
        </button>


      </div>
      <div class="sino">Sino
      </div>


    </div>


  </body>
</html>
