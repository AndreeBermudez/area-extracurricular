<?php
session_start();
require_once '../modelo/registro_crud.php';

if (isset($_POST['eliminar_registro'])) {
    $registro_id = $_POST['registro_id'];
    $resultado = consumirRegistro($registro_id);

    if ($resultado === true) {
        $_SESSION['mensaje'] = 'Registro eliminado con éxito';
    } else {
        $_SESSION['error'] = 'Error al eliminar el registro';
    }
}

header('Location: ../interfaz-administrador.php');
exit();
?>