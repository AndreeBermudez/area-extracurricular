<?php
require_once '../modelo/usuario_crud.php';
session_start();

$usuario = $_POST['user'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $datosUsuario = $result->fetch_assoc();
    if (password_verify($password, $datosUsuario['password'])) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['rol'] = $datosUsuario['rol'];
        $_SESSION['usuario_id'] = $datosUsuario['usuario_id'];
        $_SESSION['nombre'] = $datosUsuario['nombre'];
        $_SESSION['apellido'] = $datosUsuario['apellido'];
        $_SESSION['email'] = $datosUsuario['email'];
        header('Location: ../interfaz-principal.php');
        exit();
    } else {
        $_SESSION['error'] = 'Usuario o contraseña incorrectos';
    }
} else {
    $_SESSION['error'] = 'Usuario o contraseña incorrectos';
}

header('Location: ../interfaz-login.php');
exit();
?>