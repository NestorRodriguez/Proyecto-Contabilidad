<?PHP
require_once 'PDOrecibo.php';



// Logica
$alm = new Alumno();
$model = new AlumnoModel();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':

            $alm->__SET('idRecibo',                   $_REQUEST['idRecibo']);
            $alm->__SET('idUser',                    $_REQUEST['idUser']);
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
           
            $model->Actualizar($alm);
            header('Location: recibo.php');
            break;

        case 'registrar':

                $alm->__SET('idUser',                    $_REQUEST['idUser']);
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
            header('Location: recibo.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['idRecibo']);
            header('Location: recibo.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['idRecibo']);
            header('Location: recibo.php');
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

    <?php require 'header.php' ?>
     <h2>Recibo</h2>

    <div class="contenedor-caja">
                <input id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus="">
                <input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
    
            <table>
                <thead>
                    <tr>
                        <th >Id</th>
                        <th >Fecha</th>
                        <th >Nombre</th>
                        <th >Nit</th>
                        <th >Valor</th>
                        <th >1.</th>
                        <th >2.</th>
                        <th >5.</th>
                        <th >10</th>
                        <th >20</th>
                        <th >50</th>
                        <th >5.0</th>
                        <th >100</th>
                        <th >200</th>
                        <th >500</th>
                        <th >1.mil</th>
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
                            <a href="?action=editar&idRecibo=<?php echo $r->idRecibo; ?>">Modificar</a>
                        </td>
                        <td>
                            <a href="?action=eliminar&idRecibo=<?php echo $r->idRecibo; ?>">Eliminar</a>
                        </td>    
                    </tr>
                <?php endforeach; ?>
        </table>
    </div>
</body>
</html>