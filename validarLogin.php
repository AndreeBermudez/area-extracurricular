<?php
    ob_start();
    session_start();
    $usuario = $_POST['user'];
    $password = $_POST['password'];

    if($usuario == 'admin' && $password == 'admin') {
        header('Location: principal.html');
        exit();
    } else {
        $_SESSION['error'] = 'Usuario o contraseña incorrectos';
        header('Location: index.php');
        exit();
    }
?>