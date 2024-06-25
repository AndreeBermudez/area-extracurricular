<?php
    ob_start();
    session_start();
    $usuario = $_POST['user'];
    $password = $_POST['password'];

    $usuarioEncontrado = false;
    $directorioUsuarios='user/';
    $rutaArchivoUsuario= $directorioUsuarios . $usuario. '.txt';

    if(file_exists($rutaArchivoUsuario)){
        $datosUsuarioJson = file_get_contents($rutaArchivoUsuario);
        $datosUsuario= json_decode($datosUsuarioJson,true);
        if(password_verify($password,$datosUsuario['passwordHash'])){
            $usuarioEncontrado = true;
        }
    }

    if($usuarioEncontrado) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['esAdmin']=$datosUsuario['esAdmin'] ?? false;
        header('Location: interfaz-principal.php');
        exit();
    } else {
        $_SESSION['error'] = 'Usuario o contraseña incorrectos';
        header('Location: interfaz-login.php');
        exit();
    }
?>