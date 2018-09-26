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
            header('Location: login.php');
            break;

        case 'registrar':
            $alm->__SET('user',                     $_REQUEST['user']);
            $alm->__SET('password',                 $_REQUEST['password']);
            $alm->__SET('rol',                      $_REQUEST['rol']);

            $model->Registrar($alm);
            header('Location: login.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['idUser']);
            header('Location: login.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['idUser']);
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Super Administrador</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body >
    
        <?php require 'header.php' ?>   

        <div class="pure-g">
            <div class="pure-u-1-12">
                
                <form action="?action=<?php echo $alm->idUser > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" >
                    <input type="hidden" name="idUser" value="<?php echo $alm->__GET('idUser'); ?>" />

                    <h1>Crear Usuario</h1>
                    <span> <a href="mostrar.php">modificar</a></span>

                    <input type="text" name="user" placeholder="Nombre" value="<?php echo $alm->__GET('user'); ?>"  />

                    <input type="password" name="password" placeholder="Contraseña"value="<?php echo $alm->__GET('password'); ?>">

                    <select name="rol" >
                        <option value="1" <?php echo $alm->__GET('rol') == 1 ? 'selected' : ''; ?>>Super Administrador</option>
                        <option value="2" <?php echo $alm->__GET('rol') == 2 ? 'selected' : ''; ?>>Auditor</option>
                    </select>

                    <td colspan="2">
                         <input type="submit" class="pure-button pure-button-primary">
                    </td>
                </form>
            </div>
        </div>   
    </body>
</html>



