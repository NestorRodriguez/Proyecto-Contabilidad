<?php
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=arqueo','root','');
    }catch(PDOException $e){
        echo "ERROR: ".$e->getMessage();
    }

    