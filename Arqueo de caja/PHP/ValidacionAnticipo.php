<?php
    include 'Conexion.php';
    $idUser = 0; 
    $responsable = $_POST["responsableant"];
    $cedula = $_POST['cedula'];
    if($mil = $_POST["milant"] == ""){
        $mil = 0;
    }else{
        $mil = $_POST["milant"];
    }
    if($dosmil  = $_POST["dosmilant"] == ""){
        $dosmil = 0;
    }else{
        $dosmil  = $_POST["dosmilant"];
    }
    if($cincomil  = $_POST["cincomilant"] == ""){
        $cincomil = 0;
    }else{
        $cincomil  = $_POST["cincomilant"];
    }    
    if($diezmil  = $_POST["diezmilant"] == ""){
        $diezmil = 0;
    }else{
        $diezmil  = $_POST["diezmilant"];
    }
    if($veintemil  = $_POST["veintemilant"] == ""){
        $veintemil = 0;
    }else{
        $veintemil  = $_POST["veintemilant"];
    }
    if($cincuentamil  = $_POST["cincuentamilant"] == ""){
        $cincuentamil = 0;
    }else{
        $cincuentamil  = $_POST["cincuentamilant"];
    }
    if($cincuenta  = $_POST["cincuentaant"] == ""){
        $cincuenta = 0;
    }else{
        $cincuenta  = $_POST["cincuentaant"];
    }
    if($cien   = $_POST["cienant"] == ""){
        $cien = 0;
    }else{
        $cien   = $_POST["cienant"];
    }
    if($docientos  = $_POST["docientosant"] == ""){
        $docientos = 0;
    }else{
        $docientos  = $_POST["docientosant"];
    }
    if($quinientos  = $_POST["quinientosant"] == ""){
        $quinientos = 0;
    }else{
        $quinientos  = $_POST["quinientosant"];
    }
    if($mMil   = $_POST["mmilant"] == ""){
        $mMil = 0;
    }else{
        $mMil   = $_POST["mmilant"];
    }
    $valor = (($mil * 1000) + ($dosmil * 2000) + ($cincomil * 5000) + ($diezmil * 10000) + ($veintemil * 20000) + ($cincuentamil * 50000) + ($cincuenta * 50) + ($cien * 100) + ($docientos * 200) + ($quinientos * 500) + ($mMil * 1000));

    $insentar = "INSERT INTO anticipo (idUser,responsable,cedula,valor,bmil,bdosmil,bcincomil,bdiezmil,bveintemil,bcincuentamil,mcincuenta,mcien,mdocientos,mquinientos,mmil) VALUES
    ('$idUser','$responsable','$cedula','$valor','$mil','$dosmil','$cincomil','$diezmil','$veintemil','$cincuentamil','$cincuenta','$cien','$docientos','$quinientos','$mMil')";

    $resultado = mysqli_query($conexion,$insentar);

    if(!$resultado){
        echo 'Error';
    }else{
        echo '<script>
        alert("El registro ha sido exitoso!");
        window.location.href = "http://localhost/Arqueo%20de%20caja/PHP/Caja.php";
        </script>';
    }