<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../CSS/Style.css">
        <title>Page Title</title>

    </head>

    <body>        
        
        <div class="contenedor">
            <div class="login-box">
                <h1>Inicia sesión aquí</h1>        
                <form action="ValidacionLogin.php" method="POST" name="login">
                    <label for="User">Usuario:</label>
                    <input type="text" name="user" id="user" placeholder="Usuario"><br>
                    <label for="Password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Contraseña"><br>
                    <input type="button" onclick="validate();" value="Iniciar sesión">
                </form>
                <div id="alerta"></div>
            </div>
        </div>
        <script type="text/javascript" src="../JS/Scripts.js"></script>
        <script type="text/javascript" src="../JS/Scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>

</html>