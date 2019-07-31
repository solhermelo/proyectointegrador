<?php
  require_once("autoload.php");
  if($_POST){
    $usuario = new Usuario($_POST["email"], $_POST["password"]);
    $errores = $validar->validacionLogIn($usuario);
    if(count($errores)==0){
        $usuarioEncontrado = BaseMYSQL::buscarPorEmail($usuario->getEmail(),$pdo,'usuarios');
        if($usuarioEncontrado == false){
          $errores["email"]="Usuario no registrado";
        }else{
          if(Autenticador::verificarPassword($usuario->getPassword(),$usuarioEncontrado["password"] )!=true){
            $errores["password"]="Error en los datos verifique";
          }else{
            Autenticador::seteoSesion($usuarioEncontrado);
            if(isset($_POST["recordar"])){
              Autenticador::seteoCookie($usuarioEncontrado);
            }
            if(Autenticador::validarUsuario()){
              header("location: perfil.php");
            }else{
              redirect("registracion.php");
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
    <meta name="viewport" content="width=device-width" , "initial-scale=1.0">
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
