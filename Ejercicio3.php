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
      #Se inicializa un for (Para) con el fin de imprimir una serie de números.
       for ($numero = 1; $numero <= 10; $numero++) {
        #Se realiza validación de los numero para poner comas y separa los números
        if ($numero <= 9) {
            echo $numero . ", ";
        } else {
            echo $numero . "!";
        }
      }; ?>
    </p>
    <p><strong>Cosas que podés hacer:</strong>
      <?php
      #Se declara un array de string.
        $cosas = array("Hablar a bases de datos",
        "Enviar cookies", "Evaluar formularios de datos",
        "Construir páginas web dinámicas");
        #se recorre el array para despues ser mostrado el resultado de cada iteración en una lista <li> de HTML.
        foreach ($cosas as $cosa) {
            echo "<li>$cosa</li>";
        }
        #Se destrulle la variable.
        unset($cosas);
      ?>
    </p>
    <p><strong>Esta oración desordenada cambiará cada vez que hagas clic en Guardar y Enviar<strong></p>
    <p>
      <?php
      #Se declara un array de string.
        $palabras = array("el ", "rápido ", "marrón ", "zorro ",
        "saltó ", "sobre ", "el ", "vago ", "perro ");
        #Se mezcla los valores del array en orden aleatorio.
        shuffle($palabras);
        #Se recorre el array para mostra el resultado en esta caso se mostrara en una sola linea.
        foreach ($palabras as $palabra) {
            echo $palabra;
        };
        #Se destrulle la variable.
        unset($palabra);
      ?>
    </p>
  </body>
</html> 

