<?php
    ob_start();
    session_start();
    $usuario = $_POST['user'];
    $password = $_POST['password'];

    $usuarioEncontrado = false;

    if (isset($_SESSION['usuarios'])) {
        foreach ($_SESSION['usuarios'] as $usuarioGuardado) {
            if ($usuarioGuardado['usuario'] == $usuario && $usuarioGuardado['password'] == $password) {
                $usuarioEncontrado = true;
                break;
            }
        }
    }

    if($usuarioEncontrado) {
        header('Location: principal.php');
        exit();
    } else {
        $_SESSION['error'] = 'Usuario o contraseña incorrectos';
        header('Location: index.php');
        exit();
    }
?>