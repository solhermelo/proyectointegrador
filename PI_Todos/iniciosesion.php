<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <link rel="stylesheet" href="iniciosesion.css">
    <link rel="stylesheet" href="styles.css">
    <title>Inicio sesión</title>
  </head>
  <body>
    <header>
      <!--comienzo barra de navegador-->
      <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-ligh fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">¿Quien juega?</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="index.php">Inicio<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="FAQ.php">Preguntas frecuentes</a>
          <a class="nav-item nav-link active" href="iniciosesion.php">Iniciar sesion<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="registracion.php">Resgistrarse</a>
        </div>
      </div>
  </nav>
  </header>
  <!--fin barra de navegador -->
    <div class="login-box">
      <div class="left-box">
        <h2>Inicia sesión</h2>

        <form class="" action="index.php" method="post">
          <p>
            <label for="email">
              Email
            </label>
            <input id="email" type="email" name="email" value="" placeholder="xxx@xmail.com">
          </p>
          <p>
            <label for="pass">
              Contraseña
            </label>
            <input id="pass" type="password" name="pass" value="">
          </p>
          <p>
            <a class="olvidocontra" href="#">Olvidó su contraseña?</a>
          </p>
          <p>
          <label for="recordarme">Recordarme</label>

          <input type="checkbox" name="" value="">
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
