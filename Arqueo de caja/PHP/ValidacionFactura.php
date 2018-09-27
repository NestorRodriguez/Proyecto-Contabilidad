<?php
    include 'Conexion.php';
    ini_set('data.timezone','America/Bogota'); 
    $idUser = 0; 
    $fecha = date("d/m/Y", time());
    $responsable = $_POST["responsableftr"];
    $nit = $_POST["nitftr"];
    if($mil = $_POST["milftr"] == ""){
        $mil = 0;
    }else{
        $mil = $_POST["milftr"];
    }
    if($dosmil  = $_POST["dosmilftr"] == ""){
        $dosmil = 0;
    }else{
        $dosmil  = $_POST["dosmilftr"];
    }
    if($cincomil  = $_POST["cincomilftr"] == ""){
        $cincomil = 0;
    }else{
        $cincomil  = $_POST["cincomilftr"];
    }    
    if($diezmil  = $_POST["diezmilftr"] == ""){
        $diezmil = 0;
    }else{
        $diezmil  = $_POST["diezmilftr"];
    }
    if($veintemil  = $_POST["veintemilftr"] == ""){
        $veintemil = 0;
    }else{
        $veintemil  = $_POST["veintemilftr"];
    }
    if($cincuentamil  = $_POST["cincuentamilftr"] == ""){
        $cincuentamil = 0;
    }else{
        $cincuentamil  = $_POST["cincuentamilftr"];
    }
    if($cincuenta  = $_POST["cincuentaftr"] == ""){
        $cincuenta = 0;
    }else{
        $cincuenta  = $_POST["cincuentaftr"];
    }
    if($cien   = $_POST["cienftr"] == ""){
        $cien = 0;
    }else{
        $cien   = $_POST["cienftr"];
    }
    if($docientos  = $_POST["docientosftr"] == ""){
        $docientos = 0;
    }else{
        $docientos  = $_POST["docientosftr"];
    }
    if($quinientos  = $_POST["quinientosftr"] == ""){
        $quinientos = 0;
    }else{
        $quinientos  = $_POST["quinientosftr"];
    }
    if($mMil   = $_POST["mmilftr"] == ""){
        $mMil = 0;
    }else{
        $mMil   = $_POST["mmilftr"];
    }
    $valor = (($mil * 1000) + ($dosmil * 2000) + ($cincomil * 5000) + ($diezmil * 10000) + ($veintemil * 20000) + ($cincuentamil * 50000) + ($cincuenta * 50) + ($cien * 100) + ($docientos * 200) + ($quinientos * 500) + ($mMil * 1000));

    $insentar = "INSERT INTO factura (idUser,fecha,responsable,nit,valor,bmil,bdosmil,bcincomil,bdiezmil,bveintemil,bcincuentamil,mcincuenta,mcien,mdocientos,mquinientos,mmil) VALUES
    ('$idUser','$fecha','$responsable','$nit','$valor','$mil','$dosmil','$cincomil','$diezmil','$veintemil','$cincuentamil','$cincuenta','$cien','$docientos','$quinientos','$mMil')";

    $resultado = mysqli_query($conexion,$insentar);

    if(!$resultado){
        echo 'Error';
    }else{
        echo '<script>
        alert("El registro ha sido exitoso!");
        window.location.href = "../PHP/Caja.php";
        </script>';
    }
