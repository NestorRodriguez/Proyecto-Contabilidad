<?php
    include 'Conexion.php';
    ini_set('data.timezone','America/Bogota'); 
    $idUser = 0; 
    $fecha = date("d/m/Y", time());
    $responsable = $_POST["responsablercb"];
    $nit = $_POST["nitrcb"];
    if($mil = $_POST["milrcb"] == ""){
        $mil = 0;
    }else{
        $mil = $_POST["milrcb"];
    }
    if($dosmil  = $_POST["dosmilrcb"] == ""){
        $dosmil = 0;
    }else{
        $dosmil  = $_POST["dosmilrcb"];
    }
    if($cincomil  = $_POST["cincomilrcb"] == ""){
        $cincomil = 0;
    }else{
        $cincomil  = $_POST["cincomilrcb"];
    }    
    if($diezmil  = $_POST["diezmilrcb"] == ""){
        $diezmil = 0;
    }else{
        $diezmil  = $_POST["diezmilrcb"];
    }
    if($veintemil  = $_POST["veintemilrcb"] == ""){
        $veintemil = 0;
    }else{
        $veintemil  = $_POST["veintemilrcb"];
    }
    if($cincuentamil  = $_POST["cincuentamilrcb"] == ""){
        $cincuentamil = 0;
    }else{
        $cincuentamil  = $_POST["cincuentamilrcb"];
    }
    if($cincuenta  = $_POST["cincuentarcb"] == ""){
        $cincuenta = 0;
    }else{
        $cincuenta  = $_POST["cincuentarcb"];
    }
    if($cien   = $_POST["cienrcb"] == ""){
        $cien = 0;
    }else{
        $cien   = $_POST["cienrcb"];
    }
    if($docientos  = $_POST["docientosrcb"] == ""){
        $docientos = 0;
    }else{
        $docientos  = $_POST["docientosrcb"];
    }
    if($quinientos  = $_POST["quinientosrcb"] == ""){
        $quinientos = 0;
    }else{
        $quinientos  = $_POST["quinientosrcb"];
    }
    if($mMil   = $_POST["mmilrcb"] == ""){
        $mMil = 0;
    }else{
        $mMil   = $_POST["mmilrcb"];
    }
    $valor = (($mil * 1000) + ($dosmil * 2000) + ($cincomil * 5000) + ($diezmil * 10000) + ($veintemil * 20000) + ($cincuentamil * 50000) + ($cincuenta * 50) + ($cien * 100) + ($docientos * 200) + ($quinientos * 500) + ($mMil * 1000));

    $insentar = "INSERT INTO recibo (idUser,fecha,responsable,nit,valor,bmil,bdosmil,bcincomil,bdiezmil,bveintemil,bcincuentamil,mcincuenta,mcien,mdocientos,mquinientos,mmil) VALUES
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

    