<?php
session_start();
 ?>


<!DOCTYPE html>
<html>
<!-- Beautify -->
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="viewport" content="width=device-width" , "initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Inicio</title>
</head>

<body>
<?php
require_once("navbar.php");
 ?>



    <section class="section">
        <!--comienzo carrousel -->
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" "carousel-inner img">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="">
                        <img src="IMAGENES/jugador10.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>ARMA EQUIPO</h5>
                            <p>Ahorra tiempo y encontrá a tu equipo para jugar donde quieras.</p>
                            <a class="btn btn-primary" href="registracion.php" role="button">REGISTRATE</a>
                        </div>
                    </div>
                    <div class="carousel-item" style="">
                        <img src="IMAGENES/jugador2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>BUSCA JUGADORES</h5>
                            <p>Si te faltan jugadores para completar tu equipo busca en nuestra base de datos por posición y disponibilidad.</p>
                            <a class="btn btn-primary" href="#" role="button">REGISTRATE</a>
                        </div>
                    </div>
                    <div class="carousel-item" style="">
                        <img src="IMAGENES/fotochicas.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>SUMATE A UN EQUIPO</h5>
                            <p>Si queres jugar y ser parte de un equipo contanos tus habilidades y en que posición jugas y te conectaremos con equipos que estén interesados</p>
                            <a class="btn btn-primary" href="#" role="button">REGISTRATE</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
        <!--fin carrousel -->

        <!--comienzo card -->
        <article class="container mt-5 pt-5">
            <div class="card-deck">
                <div class="card">
                    <img src="IMAGENES/jugador.jpg" class="card-img-top" alt="busco jugador">
                    <div class="card-body">
                        <h3 class="card-title">Busco Jugador</h3>
                        <p class="card-text">¿Te falta un/a jugador/a para tu equipo? Encontralo.</p>
                        <a class="btn btn-primary" href="#" role="button">Clickea acá</a>
                    </div>
                </div>
                <div class="card">
                    <img src="IMAGENES/buscar_equipo2.jpg" class="card-img-top" alt="buscar equipo">
                    <div class="card-body">
                        <h3 class="card-title">Busco Equipo </h3>
                        <p class="card-text">¿Querés jugar y no tenes equipo? Encontrá con quien jugar. </p>
                        <a class="btn btn-primary" href="#" role="button">Clickea acá</a>
                    </div>
                </div>
                <div class="card">
                    <img src="IMAGENES/armar_partido.jpg" class="card-img-top" alt="busco equipo">
                    <div class="card-body">
                        <h3 class="card-title">Armar Partido</h3>
                        <p class="card-text">Crea un partido para el dia que quieras y encontrá a todos los jugadores.</p>
                        <a class="btn btn-primary" href="#" role="button">Clickea acá</a>
                    </div>
                </div>
            </div>
        </article>

        <!--fin card -->



    </section>

    <?php
    require_once("footer.php");
     ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>

</html>
