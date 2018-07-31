<!DOCTYPE html>
<html>
  <head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>PHP!</title>
  </head>
  <body>
    <img src="http://i1061.photobucket.com/albums/t480/ericqweinstein/php-logo_zps408c82d7.png"/>
    <div class="header"><h1>
      <?php
      $bienvenido = "¡Empecemos con PHP!";
      echo $bienvenido;
      ?>
    </h1></div>
    <p><strong>Generá una lista:</strong>
      <?php
     for ($numero = 1; $numero <= 10; $numero++) {
        if ($numero <= 9) {
            echo $numero . ", ";
        } else {
            echo $numero . "!";
        }
      }; ?>
    </p>
    <p><strong>Cosas que podés hacer:</strong>
      <?php
        $cosas = array("Hablar a bases de datos",
        "Enviar cookies", "Evaluar formularios de datos",
        "Construir páginas web dinámicas");
        foreach ($cosas as $cosa) {
            echo "<li>$cosa</li>";
        }
        unset($cosas);
      ?>
    </p>
    <p><strong>Esta oración desordenada cambiará cada vez que hagas clic en Guardar y Enviar<strong></p>
    <p>
      <?php
        $palabras = array("el ", "rápido ", "marrón ", "zorro ",
        "saltó ", "sobre ", "el ", "vago ", "perro ");
        shuffle($palabras);
        foreach ($palabras as $palabra) {
            echo $palabra;
        };
        
        unset($palabra);
      ?>
    </p>
  </body>
</html>  

<!-- primero se importa la imagen principal de PHP
segundo segenera un titulo donde dice empecemos con PHP
tercero se genera una lista de numeros generando una validacion que sea solo hasta 10
cuarto se genera una lista de acciones en columna
quinto genera primero un titulo donde cada vez que le de guardar cambiara y enviara  
luego genera la oracion desordenada para que el usuario la organize -->