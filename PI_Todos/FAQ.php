<?php

require_once("autoload.php");
$preguntas = PreguntasFrecuentes::obtenerPreguntas($pdo);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!--Para ejecutar EMMET html:5, usar tab-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Esta etiqueta es para que me de propiedades responsive-->
    <meta name="twitter:" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>FAQ Football Academy</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body class="container2">

    <?php require_once("navbar.php"); ?>

    <div class="div_1 shadow p-3 mb-5 bg-white rounded">
          <h1 class="titulo">PREGUNTAS FRECUENTES</h1>
          <br>

          <?php foreach($preguntas as $pregunta): ?>
            <h2 class="shadow-lg p-3 mb-2 bg-white rounded preguntas"><?= $pregunta["Questions"] ?></h2>
            <p class="respuesta"><?= $pregunta["Answers"] ?></p>
          <?php endforeach ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>
</html>
