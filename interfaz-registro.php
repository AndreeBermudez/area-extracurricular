<?php
session_start();
if (isset($_SESSION['usuario'])) {
  if ($_SESSION['usuario'] = 'admin') {
    header('Location: interfaz-principal.php');
  } else {
    header('Location: interfaz-principal.php');
  }
  exit();
}
require_once './logica/funcion_registrar.php';

$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $usuario = $_POST['usuario'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmar_password = $_POST['confirmar_password'];

  $resultado = registrarUsuario($nombre, $apellido, $usuario, $email, $password, $confirmar_password);
  if ($resultado === 'Registrado con éxito') {
    $_SESSION['mensaje'] = $resultado;
    header('Location: interfaz-login.php');
    exit;
  } else {
    $error = $resultado;
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
        <img src="./recursos/img-nav/logo.webp" alt="logo">
      </div>
      <div class="form-titulo">
        <p>Ingresa tus datos para registrarte.</p>
      </div>
      <div class="form-register">
        <form class="formulario" id="myRegister" method="POST" action="interfaz-registro.php">
          <div class="user-register">
            <input type="text" name="nombre" placeholder="Nombre" required />
          </div>
          <div class="user-register">
            <input type="text" name="apellido" placeholder="Apellido" required />
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
            <a href="interfaz-login.php"><input type="submit" name="Registro" value="Registrarse" /></a>
            <?php if (!empty($error)) : ?>
              <div class="error-msj"><?php echo $error; ?></div>
            <?php endif; ?>
            <p>¿Ya tienes una cuenta? <a href="interfaz-login.php">Iniciar Sesión</a></p>
          </div>
        </form>
      </div>

    </div>

  </section>
</body>

</html>