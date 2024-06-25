<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/login.css" />
    <title>Login</title>
  </head>
  <body>
    <section class="login-background">
      <div class="login-imagen"></div>

      <div class="login-container-form">
        <div class="form-logo">
          <img src="./img-nav/logo.webp" alt="logo" />
        </div>
        <div class="form-titulo">
          <p>Ingresa tus datos para iniciar sesión.</p>
        </div>
        <div class="form-login">
          <form
            class="formulario"
            id="myForm"
            method="POST"
            action="funcion_loguear.php"
          >
            <div class="user-login">
              <input
                type="text"
                name="user"
                id="usuario"
                placeholder="Usuario del alumno"
                required
              />
            </div>
            <div class="user-login">
            <input type="password" name="password" id="contrasenia" placeholder="Contraseña" required />
             <?php
                  if (isset($_SESSION['error'])) {
                      echo '<span class="error-msj">' . $_SESSION['error'] . '</span>';
                      unset($_SESSION['error']);
                  }

                  if (isset($_SESSION['mensaje'])) {
                    echo '<span class="registrado-msj">' . $_SESSION['mensaje'] . '</span>';
                    unset($_SESSION['mensaje']);
                }
              ?>
            </div>
            <div class="btn-registro">
              <input type="submit" name="Inicio" value="Iniciar Sesion" />
              <p>
                ¿Aún no eres usuario? <a href="interfaz-registro.php">Registrate</a>
              </p>
            </div>
          </form>
        </div>
        <div class="form-registro"></div>
      </div>
    </section>
  </body>
</html>