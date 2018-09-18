<?php
    session_start();


    if($_SERVER['REQUEST_METHOD']=='POST'){
        $user = $_POST['user'];
        $password = $_POST['password'];
        require('Conexion.php');
        $consultaCM = $conexion->prepare('SELECT * FROM usuarios
        WHERE user=:user AND password=:password AND rol=3');
        $consultaCM->execute(array(':user'=>$user,':password'=>$password));
                
        $resultadoCM = $consultaCM->fetch();

        if($resultadoCM==true){
            $_SESSION['user']=$user;
            header('Location: Caja.php');
        }else if ($resultadoCM==false){
            $consultaA = $conexion->prepare('SELECT * FROM usuarios
            WHERE user=:user AND password=:password AND rol=2');
            $consultaA->execute(array(':user'=>$user,':password'=>$password));

            $resultadoA = $consultaA->fetch();

            if($resultadoA==true){
                $_SESSION['user']=$user;
                header('Location: Auditor.php');
            }else if($resultadoA==false){
                $consultaSA = $conexion->prepare('SELECT * FROM usuarios
                WHERE user=:user AND password=:password AND rol=1');
                $consultaSA->execute(array(':user'=>$user,':password'=>$password));
    
                $resultadoSA = $consultaSA->fetch();
                if($resultadoSA==true){
                    $_SESSION['user']=$user;
                    header('Location: SuperAdmin.php');
                }else{
                    header('Location: Login.php');
                }
            }
        }        
    }
?>