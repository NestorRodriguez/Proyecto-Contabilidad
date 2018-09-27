<?php
    session_start();

    include 'Conexion.php';

    $user = $_POST['user'];
    $password = $_POST['password'];

    $validacion = $conexion->query("SELECT * FROM usuarios WHERE user = '$user' AND password = '$password'");

    while($usuario = mysqli_fetch_array($validacion))
    {
        $id = $usuario['idUser'];
        $nombre = $usuario['user'];
        $permiso = $usuario['rol'];    
    }
    if($permiso == 3){
        $_SESSION['CM']=$id;
        header('Location: Caja.php');
    }else if($permiso == 2){
        $_SESSION['A']=$id;
        header('Location: ../../Final/Auditor/inicio.php');
    }else if($permiso == 1){
        $_SESSION['SA']=$id;
        header('Location: ../../Final/SuperAd/SuperAd/inicio.php');
    }else{
        header('Location: Login.php');
    }
?>