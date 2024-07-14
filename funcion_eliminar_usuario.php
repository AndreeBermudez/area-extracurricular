<?php
session_start();
require_once './modelo/usuario_crud.php';

if (isset($_POST['eliminar_usuario'])) {
    $usuario_id = $_POST['usuario_id'];
    $resultado = eliminarUsuario($usuario_id);

    if ($resultado === true) {
        $_SESSION['mensaje'] = 'Usuario eliminado con éxito';
    } else {
        $_SESSION['error'] = 'Error al eliminar el usuario';
    }
}

header('Location: interfaz-administrador.php');
exit();
?>