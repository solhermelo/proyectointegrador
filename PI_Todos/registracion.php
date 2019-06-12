<?php
require_once("helpers.php");
require_once("funciones.php");
if($_POST){
  $errores = validar($_POST,'registro');
  if(count($errores)== 0){
    $avatar = armarAvatar($_FILES);
    $usuario = armarUsuario($_POST,$avatar);
    guardarUsuario($usuario);
    header("location: iniciosesion.php");
    exit;

  }
}

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/registracion.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Registración</title>
  </head>
  <body>
    <?php require_once("navbar.php"); ?>

    <div class="login-box">
      <div class="left-box">

        <h2>Registrate</h2>

        <form class="" action="registracion.php" method="post" enctype="multipart/form-data">
          <p>
            <label for="nombre">
            </label>
            <input id="nombre" type="text" name="nombre" value="<?= isset($errores["nombre"])? "": persistir("nombre") ?>" placeholder="Nombre:">

              <?php if(isset($errores["nombre"])) :?>
  				 <span>
  						<?php echo $errores["nombre"] ?>
  				 </span>
  			     <?php endif; ?>


          </p>
          <p>
            <label for="apellido">
            </label>
              <input id="apellido" type="text" name="apellido" value="<?= isset($errores["apellido"])? "": persistir("apellido") ?>" placeholder="Apellido:">
              <?php if(isset($errores["apellido"])) :?>
        				 <span>
        						<?php echo $errores["apellido"] ?>
        				 </span>
			         <?php endif; ?>
          </p>
          <p>
            <label for="email">
            </label>
            <input id="email" type="email" name="email" value="<?= isset($errores["email"])? "": persistir("email") ?>" placeholder="Email:">
            <?php if(isset($errores["email"])) :?>
      				 <span>
      						<?php echo $errores["email"] ?>
      				 </span>
		     	  <?php endif; ?>
          </p>
          <p>
            <label for="password">
            </label>
            <input id="password" type="password" name="password" value="" placeholder="Contraseña:">

            <?php if(isset($errores["password"])) :?>
      				 <span>
      						<?php echo $errores["password"] ?>
      				 </span>
	         <?php endif; ?>
          </p>
          <p>
            <label for="repassword">
            </label>
            <input id="repassword" type="password" name="repassword" value="" placeholder="Confirme contraseña:">
            <?php if(isset($errores["repassword"])) :?>
      				 <span>
      						<?php echo $errores["repassword"] ?>
      				 </span>
			       <?php endif; ?>
          </p>
          <p>
            <input type="file" name="avatar" value="">
          </p>
          <p>
            <input type="submit" name="" value="Enviar">
          </p>
        </form>

      </div>
      <div class="right-box">
        <span class="signin-with">Registrate con Redes Sociales <br>
        </span>
        <button class="social facebook" type="button" name="button">
          <img class="logo-fb" src="imagenes/logo-fb.jpg" alt="logo facebook">
          Facebook
        </button>

        <br>
        <button class="social google" type="button" name="button">
          <img class="logo-google" src="imagenes/logo-google.jpg" alt="logo Google">
          Google
        </button>

      </div>
      <div class="sino">Sino
      </div>


    </div>


  </body>
</html>
