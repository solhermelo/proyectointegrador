<?php

require_once("funciones.php");
require_once("autoload.php");
if($_POST){
  $usuario = new Usuario($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['password'], $_FILES['avatar']);
    MySql::guardarProducto($pdo,$usuario,'usuarios', $avatar);
}
if($_POST){
  $errores = validar($_POST,'registro');
  if(count($errores) == 0){
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
    <meta name="viewport" content="width=device-width" , "initial-scale=1.0">
    <!--inicio sesion google-->
<meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
        <!--fin inicio sesion google-->
    <link rel="stylesheet" href="css/registracion.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Registración</title>
  </head>
  <body>

<!--incio sesion con fb-->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '{848601688855431}',
          cookie     : true,
          xfbml      : true,
          version    : '{v3.3}'
        });

        FB.AppEvents.logPageView();

      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>



    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.3&appId=848601688855431&autoLogAppEvents=1"></script>

    <!--incio sesion con fb-->

    <!--inicio sesion google-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!--inicio sesion google-->


    <?php require_once("navbar.php"); ?>

    <div class="login-box">

      <div class="left-box">

        <h2>Registrate</h2>

        <form class="" action="" method="post" enctype="multipart/form-data">
          <p>
            <label for="nombre">
            </label>
            <input id="nombre" type="text" name="nombre" value="<?= isset($errores["nombre"])? "": persistir("nombre") ?>" placeholder="Nombre:">
            <p class = "errores-rojo">
              <?php if(isset($errores["nombre"])) :?>
  				 <span>
  						<?php echo $errores["nombre"] ?>
  				 </span>
  			     <?php endif; ?>
           </p>

          </p>
          <p>
            <label for="apellido">
            </label>
              <input id="apellido" type="text" name="apellido" value="<?= isset($errores["apellido"])? "": persistir("apellido") ?>" placeholder="Apellido:">
            <p class = "errores-rojo">
              <?php if(isset($errores["apellido"])) :?>
        				 <span>
        						<?php echo $errores["apellido"] ?>
        				 </span>
			         <?php endif; ?>
             </p>
          </p>
          <p>
            <label for="email">
            </label>
            <input id="email" type="email" name="email" value="<?= isset($errores["email"])? "": persistir("email") ?>" placeholder="Email:">
            <p class = "errores-rojo">
            <?php if(isset($errores["email"])) :?>
      				 <span>
      						<?php echo $errores["email"] ?>
      				 </span>
		     	  <?php endif; ?>
          </p>
          </p>
          <p>
            <label for="password">
            </label>
            <input id="password" type="password" name="password" value="" placeholder="Contraseña:">
            <p class = "errores-rojo">
            <?php if(isset($errores["password"])) :?>
      				 <span>
      						<?php echo $errores["password"] ?>
      				 </span>
	         <?php endif; ?>
         </p>
          </p>
          <p>
            <label for="repassword">
            </label>
            <input id="repassword" type="password" name="repassword" value="" placeholder="Confirme contraseña:">
            <p class = "errores-rojo">
            <?php if(isset($errores["repassword"])) :?>
      				 <span>
      						<?php echo $errores["repassword"] ?>
      				 </span>
			       <?php endif; ?>
           </p>
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

<!--login fb-->
        <div class="fb-login-button" data-width="" data-size="medium" data-button-type="login_with" data-auto-logout-link="false" data-use-continue-as="true"></div>
<!--login fb-->

        <br>


<!--login google-->
        <div class = "googlelogin" id="my-signin2"></div>
  <script>
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 195,
        'height': 30,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>

  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
<!--login google-->

      </div>
      <div class="sino">Sino
      </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
