<?php
require_once("funciones.php");

 ?>

    <!DOCTYPE html>
    <html lang="es" dir="ltr">
      <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta charset="utf-8">
        <link rel="stylesheet" href="iniciosesion.css">
        <link rel="stylesheet" href="styles.css">
        <title>Configuración perfil</title>
      </head>
      <body>

        <header>

        <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">¿Quien juega?</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="index.php">Inicio<span class="sr-only">(current)</span></a>

                    <a class="nav-item nav-link active" href="FAQ.php">Preguntas frecuentes</a>
                    <a class="nav-item nav-link active" href="logout.php">Cerrar sesión</a>


                </div>
            </div>
        </nav>
        </header>


<div class="contenedor-foto-perfil">
  <div class="fotoAvatar">
    <h1 class="bienvenido">Bienvenido <?=$_SESSION["nombre"];?></h1>
    <img class = "fotoPerfil" src="FotosAvatar/<?=$_SESSION["avatar"];?>" alt="foto perfil">
  </div>
</div>


  </body>
</html>
