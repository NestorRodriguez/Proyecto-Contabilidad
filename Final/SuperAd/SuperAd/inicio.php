<?php
    session_start();
    if(!isset($_SESSION['SA'])){
        session_destroy();
        header('Location: ../../../Arqueo de caja/PHP/Login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" /> 
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Bienvendido</title>
    
</head>
<body>
    <div>
    	<a href="../../../Arqueo de caja/PHP/Cerrar.php">Cerrar Sesión</a>
    </div>
    <header>
        <a href="/SuperAd">Arqueo</a>
    </header>
    
    <h1>Crear Usuario y Modificar</h1>

    <a href="login.php">Crear Usuario</a> y
    <a href="mostrar.php">Modificar</a> 
    
</body>
</html>