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
    <link rel="stylesheet" href="olvidePass.css">
    <link rel="stylesheet" href="styles.css">
    <title>Olvido contraseña</title>
  </head>
  <body>

    <?php
    require_once("navbar.php");
     ?>
    <div class="login-box">

        <?php if(isset($errores)):?>
              <ul class="alert alert-danger">
                <?php foreach ($errores as $key => $value) :?>
                  <li><?=$value;?></li>
                <?php endforeach;?>
              </ul>
        <?php endif;?>

        <h2>Olvidó su contraseña?</h2>

        <form class="" action="iniciosesion.php" method="post">
          <p>
            <label for="email">
              Confirme su email
            </label>
            <input id="email" type="email" name="email" value="<?=isset($errores['email'])? "":persistir("email") ;?>" >
          </p>
          <p>
            <label for="password">
              Ingrese su nueva contraseña:
            </label>
            <input id="password" type="password" name="password" value="">
          </p>
          <p>
            <label for="password">
              Vuelva a ingresar su nueva contraseña:
            </label>
            <input id="password" type="password" name="password" value="">
          </p>
          <p>
            <input type="submit" name="" value="Enviar">
          </p>
        </form>




    </div>


  </body>
</html>
