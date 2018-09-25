<?php
    include 'Conexion.php';

    $idUser = 0; 
    $numeroCheque = $_POST["ncheque"];
    $banco = $_POST['banco'];
    $responsable = $_POST['responsablechq'];
    if($mil = $_POST["milchq"] == ""){
        $mil = 0;
    }else{
        $mil = $_POST["milchq"];
    }
    if($dosmil  = $_POST["dosmilchq"] == ""){
        $dosmil = 0;
    }else{
        $dosmil  = $_POST["dosmilchq"];
    }
    if($cincomil  = $_POST["cincomilchq"] == ""){
        $cincomil = 0;
    }else{
        $cincomil  = $_POST["cincomilchq"];
    }    
    if($diezmil  = $_POST["diezmilchq"] == ""){
        $diezmil = 0;
    }else{
        $diezmil  = $_POST["diezmilchq"];
    }
    if($veintemil  = $_POST["veintemilchq"] == ""){
        $veintemil = 0;
    }else{
        $veintemil  = $_POST["veintemilchq"];
    }
    if($cincuentamil  = $_POST["cincuentamilchq"] == ""){
        $cincuentamil = 0;
    }else{
        $cincuentamil  = $_POST["cincuentamilchq"];
    }
    if($cincuenta  = $_POST["cincuentachq"] == ""){
        $cincuenta = 0;
    }else{
        $cincuenta  = $_POST["cincuentachq"];
    }
    if($cien   = $_POST["cienchq"] == ""){
        $cien = 0;
    }else{
        $cien   = $_POST["cienchq"];
    }
    if($docientos  = $_POST["docientoschq"] == ""){
        $docientos = 0;
    }else{
        $docientos  = $_POST["docientoschq"];
    }
    if($quinientos  = $_POST["quinientoschq"] == ""){
        $quinientos = 0;
    }else{
        $quinientos  = $_POST["quinientoschq"];
    }
    if($mMil   = $_POST["mmilchq"] == ""){
        $mMil = 0;
    }else{
        $mMil   = $_POST["mmilchq"];
    }
    $valor = (($mil * 1000) + ($dosmil * 2000) + ($cincomil * 5000) + ($diezmil * 10000) + ($veintemil * 20000) + ($cincuentamil * 50000) + ($cincuenta * 50) + ($cien * 100) + ($docientos * 200) + ($quinientos * 500) + ($mMil * 1000));

    $insentar = "INSERT INTO cheque (idUser,numeroCheque,banco,responsable,valor,bmil,bdosmil,bcincomil,bdiezmil,bveintemil,bcincuentamil,mcincuenta,mcien,mdocientos,mquinientos,mmil) VALUES
    ('$idUser','$numeroCheque','$banco','$responsable','$valor','$mil','$dosmil','$cincomil','$diezmil','$veintemil','$cincuentamil','$cincuenta','$cien','$docientos','$quinientos','$mMil')";
    
    $resultado = mysqli_query($conexion,$insentar);

    if(!$resultado){
        echo 'Error';
    }else{
        echo '<script>
        alert("El registro ha sido exitoso!");
        window.location.href = "http://localhost/Arqueo%20de%20caja/PHP/Caja.php";
        </script>';
    }