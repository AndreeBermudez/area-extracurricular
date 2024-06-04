<?php
session_start();
$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmar_password = $_POST['confirmar_password'];

    if (empty($nombre) || empty($usuario) || empty($email) || empty($password) || empty($confirmar_password)) {
        $error = 'Todos los campos son obligatorios';
    } else if (!preg_match("/^[a-zA-Z]+$/", $nombre)) {
        $error = 'El nombre no debe contener caracteres especiales';
    } else if (!preg_match("/^[\w-]+(\.[\w-]+)*@utp\.edu\.pe$/", $email)) {
        $error = 'El email debe terminar en @utp.edu.pe';
    } else if ($password !== $confirmar_password) {
        $error = 'Las contraseñas no coinciden';
    } else {
        if (!isset($_SESSION['usuarios'])) {
            $_SESSION['usuarios'] = [];
        }
        $_SESSION['usuarios'][] = ['usuario' => $usuario, 'password' => $password];
        $_SESSION['mensaje'] = 'Registrado con éxito';
        header('Location: index.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/registro.css">
    <title>Registro</title>
</head>
<body>
    <section class="register-background">
        <div class="register-imagen"></div>

        <div class="register-container-form">
            <div class="form-logo">
                <img src="./img-nav/logo.webp" alt="logo">
            </div>
            <div class="form-titulo">
                <p>Ingresa tus datos para registrarte.</p>
            </div>
            <div class="form-register">
                  <form class="formulario" id="myRegister" method="POST" action="registro.php">
                    <div class="user-register">
                      <input type="text" name="nombre" placeholder="Nombre" required />
                    </div>
                    <div class="user-register">
                      <input type="text" name="usuario" placeholder="Usuario" required />
                    </div>
                    <div class="user-register">
                      <input type="email" name="email" placeholder="Correo electrónico" required />
                    </div>
                    <div class="user-register">
                      <input type="password" name="password" placeholder="Contraseña" required />
                    </div>
                    <div class="user-register">
                      <input type="password" name="confirmar_password" placeholder="Confirmar Contraseña" required />
                    </div>
                    <div class="btn-registro">
                      <a href="index.html"><input type="submit" name="Registro" value="Registrarse"/></a>
                      <?php if (!empty($error)): ?>
                      <div class="error-msj"><?php echo $error; ?></div>
                      <?php endif; ?>
                      <p>¿Ya tienes una cuenta? <a href="index.php">Iniciar Sesión</a></p>
                  </div>
                  </form>
            </div>

        </div>
        
    </section>
</body>
</html>
