<?PHP
require_once 'PDOfactura.php';



// Logica
$alm = new Alumno();
$model = new AlumnoModel();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':

            $alm->__SET('idFactura',                  $_REQUEST['idFactura']);
            $alm->__SET('idUser',                     $_REQUEST['idUser']);
            $alm->__SET('fecha',                      $_REQUEST['fecha']);
            $alm->__SET('responsable',                $_REQUEST['banco']);
            $alm->__SET('nit',                        $_REQUEST['nit']);
            $alm->__SET('valor',                      $_REQUEST['valor']);
            $alm->__SET('bmil',                       $_REQUEST['bmil']);

            $alm->__SET('bdosmil',                    $_REQUEST['bdosmil']);
            $alm->__SET('bcincomil',                  $_REQUEST['bcincomil']); 
            $alm->__SET('bdiezmil',                   $_REQUEST['bdiezmil']);
            $alm->__SET('bveintemil',                 $_REQUEST['bveintemil']); 

            $alm->__SET('bcincuentamil',              $_REQUEST['bcincuentamil']); 
            $alm->__SET('mcincuenta',                 $_REQUEST['mcincuenta']);
            $alm->__SET('mcien',                      $_REQUEST['mcien']);
            $alm->__SET('mdocientos',                 $_REQUEST['mdocientos']); 
            $alm->__SET('mquinientos',                $_REQUEST['mquinientos']); 
            $alm->__SET('mmil',                       $_REQUEST['mmil']);
           
            $model->Actualizar($alm);
            header('Location: factura.php');
            break;

        case 'registrar':

                $alm->__SET('idUser',                     $_REQUEST['idUser']);
                $alm->__SET('fecha',                      $_REQUEST['fecha']);
                $alm->__SET('responsable',                $_REQUEST['responsable']);
                $alm->__SET('nit',                        $_REQUEST['nit']);
                $alm->__SET('valor',                      $_REQUEST['valor']);
                $alm->__SET('bmil',                       $_REQUEST['bmil']);

                $alm->__SET('bdosmil',                    $_REQUEST['bdosmil']);
                $alm->__SET('bcincomil',                  $_REQUEST['bcincomil']); 
                $alm->__SET('bdiezmil',                   $_REQUEST['bdiezmil']);
                $alm->__SET('bveintemil',                 $_REQUEST['bveintemil']); 

                $alm->__SET('bcincuentamil',              $_REQUEST['bcincuentamil']); 
                $alm->__SET('mcincuenta',                 $_REQUEST['mcincuenta']);
                $alm->__SET('mcien',                      $_REQUEST['mcien']);
                $alm->__SET('mdocientos',                 $_REQUEST['mdocientos']); 
                $alm->__SET('mquinientos',                $_REQUEST['mquinientos']); 
                $alm->__SET('mmil',                       $_REQUEST['mmil']);
            $model->Registrar($alm);
            header('Location: factura.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['idFactura']);
            header('Location: factura.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['idFactura']);
            header('Location: factura.php');
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabla de registro</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

	<div>
    	<a href="../../Arqueo de caja/PHP/Cerrar.php">Cerrar Sesión</a>
    </div>
    <?php require 'header.php' ?>


    <h2>Factura</h2>

    <div class="contenedor-caja">
            <input id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus="">
            <input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
            <table  class="pure-table pure-table-horizontal">
                <thead>
                    <tr>
                        <th >id</th>
                        <th >Fecha</th>
                        <th >responsable</th>
                        <th >nit</th>
                        <th >valor</th>
                        <th >C. 1.000</th>
                        <th >C. 2.000</th>
                        <th >C. 5.000</th>
                        <th >C. 10.000</th>
                        <th >C. 20.000</th>
                        <th >C. 50.000</th>
                        <th >C. 50</th>
                        <th >C. 100</th>
                        <th >C. 200</th>
                        <th >C. 500</th>
                        <th >C. 50</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <?php foreach($model->Listar() as $r): ?>
                    <tr>
                        <td><?php echo $r->__GET('idUser'); ?></td>
                        <td><?php echo $r->__GET('fecha'); ?></td>
                        <td><?php echo $r->__GET('responsable'); ?></td>
                        <td><?php echo $r->__GET('nit'); ?></td>
                        <td><?php echo $r->__GET('valor'); ?></td>
                        <td><?php echo $r->__GET('bmil'); ?></td>
                        <td><?php echo $r->__GET('bdosmil'); ?></td>
                        <td><?php echo $r->__GET('bcincomil'); ?></td>
                        <td><?php echo $r->__GET('bdiezmil'); ?></td>
                        <td><?php echo $r->__GET('bveintemil'); ?></td>
                        <td><?php echo $r->__GET('bcincuentamil'); ?></td>
                        <td><?php echo $r->__GET('mcincuenta'); ?></td>
                        <td><?php echo $r->__GET('mcien'); ?></td>
                        <td><?php echo $r->__GET('mdocientos'); ?></td>
                        <td><?php echo $r->__GET('mquinientos'); ?></td>
                        <td><?php echo $r->__GET('mmil'); ?></td>
                        <td>
                            <a href="?action=editar&idFactura=<?php echo $r->idFactura; ?>">Modificar</a>
                        </td>
                        <td>
                            <a href="?action=eliminar&idFactura=<?php echo $r->idFactura; ?>">Eliminar</a>
                        </td>    
                    </tr>
                <?php endforeach; ?>
            </table> 
    </div>
</body>
</html>