<?PHP
require_once 'conexion.php';



// Logica
$alm = new Alumno();
$model = new AlumnoModel();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            $alm->__SET('idUser',                   $_REQUEST['idUser']);
            $alm->__SET('user',                     $_REQUEST['user']);
            $alm->__SET('password',                 $_REQUEST['password']);
            $alm->__SET('rol',                      $_REQUEST['rol']);
           
            $model->Actualizar($alm);
            header('Location: mostrar.php');
            break;

        case 'registrar':
            $alm->__SET('user',                     $_REQUEST['user']);
            $alm->__SET('password',                 $_REQUEST['password']);
            $alm->__SET('rol',                      $_REQUEST['rol']);

            $model->Registrar($alm);
            header('Location: mostrar.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['idUser']);
            header('Location: mostrar.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['idUser']);
            header('Location: mostrar.php');
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabla de registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div>
    	<a href="../../../Arqueo de caja/PHP/Cerrar.php">Cerrar Sesión</a>
    </div>
    <?php require 'header.php' ?>

    <h1>Registrarse</h1>
    <span> <a href="login.php">Crear Usuario</a></span> 

    <div id="main-container">

        <table>
                <thead>
                    <tr>
                        <th >Nombre</th>
                        <th >Contraseña</th>
                        <th >Rol</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <?php foreach($model->Listar() as $r): ?>
                    <tr>
                        <td><?php echo $r->__GET('user'); ?></td>
                        <td><?php echo $r->__GET('password'); ?></td>
                        <td><?php echo $r->__GET('rol') == 1 ? 'S' : 'A'; ?></td>
                        <td>
                            <a href="?action=editar&idUser=<?php echo $r->idUser; ?>">Modificar</a>
                        </td>
                        <td>
                            <a href="?action=eliminar&idUser=<?php echo $r->idUser; ?>">Eliminar</a>
                        </td>
                        
                    </tr>
                <?php endforeach; ?>
        </table> 
    </div>
</body>
</html>