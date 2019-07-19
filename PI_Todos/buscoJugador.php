<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="viewport" content="width=device-width" , "initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">

    <title>Busco Jugador</title>
  </head>

<body class="container2">
  <div class="">

    <?php
    require_once("navbar.php");
     ?>

    <section class="sectionBuscoJugador">

    <!--formulario -->
    <div class="buscojugador">
    <h1>Busco jugador</h1>
    <form class="formbuscojugador" action="buscoJugador.php" method="post">
      <p>
        <label for="nombre equipo">Nombre del equipo</label>
          <input id= "nombre equipo" type="text" name="nombre equipo" value="">
      </p>
      <p>
        <label for="fecha">Fecha</label>
          <input id="fecha" type="date" name="fecha" value="">
      </p>
      <p>
        <label for="hora">Hora</label>
          <input id="hora" type="time" name="hora" value="">
      </p>
      <p>
        <label for="ubicacion">Ubicación</label>
          <select id = "ubicacion" class="" name="ubicacion">
            <optgroup label="Caba">
              CABA
            </optgroup>
              <option value="agro">Agronomía</option>
              <option value="almagro">Almagro</option>
              <option value="balva">Balvanera</option>
              <option value="barracas">Barracas</option>
              <option value="belgrano">Belgrano</option>
              <option value="boedo">Boedo</option>
              <option value="caballito">Caballito</option>
              <option value="chacarita">Chacarita</option>
              <option value="coghlan">Coghlan</option>
              <option value="colegiales">Colegiales</option>
              <option value="constitucion">Constitución</option>
              <option value="flores">Flores</option>
              <option value="floresta">Floresta</option>
              <option value="laboca">La Boca</option>
              <option value="lapaternal">La Paternal</option>
              <option value="liniers">Liniers</option>
              <option value="mataderos">Mataderos</option>
              <option value="montecastro">Monte Castro</option>
              <option value="monserrat">Monserrat</option>
              <option value="nuevapompeya">Nueva Pompeya</option>
              <option value="nunez">Nuñez</option>
              <option value="parqueavellaneda">Parque Avellaneda</option>
              <option value="palermo">Palermo</option>
              <option value="parquechacabuco">Parque Chacabuco</option>
              <option value="parquechas">Parque Chas</option>
              <option value="parquepatricios">Parque Patricios</option>
              <option value="puertomadero">Puerto Madero</option>
              <option value="recoleta">Recoleta</option>
              <option value="retiro">Retiro</option>
              <option value="saavedra">Saavedra</option>
              <option value="sancristobal">San Cristóbal</option>
              <option value="sannicolas">San Nicolás</option>
              <option value="santelmo">San Telmo</option>
              <option value="villacrespo">Villa Crespo</option>
              <option value="villaluro">Villa Luro</option>
              <option value="villareal">Villa Real</option>
              <option value="velezsarsfield">Vélez Sarsfield</option>
              <option value="versalles">Versalles</option>
              <option value="villadelparque">Villa del Parque</option>
              <option value="villadevoto">Villa Devoto</option>
              <option value="villageneralmitre">Villa General Mitre</option>
              <option value="villalugano">Villa Lugano</option>
              <option value="villaortuzar">Villa Ortúzar</option>
              <option value="villa pueyrredon">Villa Pueyrredón</option>
              <option value="villariachuelo">Villa Riachuelo</option>
              <option value="villasantarita">Villa Santa Rita</option>
              <option value="villasoldati">Villa Soldati</option>
              <option value="villaurquiza">Villa Urquiza</option>
            <optgroup label="Provincia">
              Provincia
            </optgroup>
            <option value="pilar">Pilar</option>
            <option value="vtelopez">Vicente López</option>
            <option value="escobar">Escobar</option>
            <option value="tigre">Tigre</option>
        </select>
        </p>

        <p>
          <label for="tipo de futbol">Tipo de fútbol</label>
            <select class="" name="tipo de futbol">
              <option value="f5">F5</option>
              <option value="f7">F7</option>
              <option value="f8">F8</option>
              <option value="f11">F11</option>
            </select>
        </p>

        <p>
          <label for="cantidad jugadores">Cantidad de jugadores</label>
            <select class="" name="cantidad jugadores">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>

          </select>
        </p>
        <p>
          <label for="aclaraciones">Aclaraciones</label><br>
            <textarea id="aclaraciones" name="aclaraciones" rows="4" cols="60"></textarea>
        </p>
        <p>
          <input type="submit" name="" value="Enviar">
        </p>

      </form>
      </div>

    </section>

    <?php
    require_once("footer.php")
    ?>


     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     </div>
  </body>
</html>
