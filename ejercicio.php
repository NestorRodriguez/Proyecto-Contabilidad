<!DOCTYPE html>
<HTML LANG="ES">

<HEAD>
   <TITLE>PHP y HTML</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>

<!-- realiza el titulo  -->
<H1>PHP y HTML</H1>

<!--reliza un subtitulo -->
<P>�ste es el p�rrafo 1, escrito desde HTML</P>
<P>
<?PHP
    //crea una variable 1 donde la variable va incrementando hasta 10
    for ($numero = 1; $numero <= 10; $numero++) 
    {
        //separa la variable de numero hasta 10 por un coma cada numero
        if ($numero <= 9) {
            echo $numero . ", ";
        } 
        else 
        {
            //finaliza el numero 10 con un signo de admiracion (!)
            echo $numero . "!";
        }
    } 
?>
</p>
<!--Realiza un subtitulo en negrilla -->
<p><strong>Cosas que puedes hacer:</strong>
    <?php
        //crea una lista de "cosas"
        $cosas = array("Hablar a bases de datos",
        "Enviar cookies", "Evaluar formularios de datos",
        "Construir páginas web dinámicas");

        //genera una lista en fila de la lista de la variable de $cosas
        foreach ($cosas as $cosa) 
        {
            echo "<li>$cosa</li>";
        }
        //Elimina lo que tiene dentro de la array
        unset($cosas);
    ?>
</p>
    <!--Realiza el titulo en negrilla-->
    <p><strong>Esta oración desordenada cambiará cada vez que hagas clic en Guardar y Enviar<strong></p>
    <p>
      <?php
        //Realiza una lista de palabra en desorden
        $palabras = array("el ", "rápido ", "marrón ", "zorro ",
        "saltó ", "sobre ", "el ", "vago ", "perro ");
        
        //realiza la actividad de organizar la frase
        shuffle($palabras);

        //Genera una frase en negrilla para organizarla
        foreach ($palabras as $palabra) {
            echo $palabra;
        };

        //Elimina lo que tiene dentro de el array
        unset($palabra);
      ?>
    </p>
  </body>
</html> 
