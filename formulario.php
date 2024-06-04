<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario</title>
  <link rel="stylesheet" href="./css/normalize.css" />
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <header class="header-formulario">
    <section class="navegacion">
      <div class="logo">
        <img src="./img-nav/logo.webp" alt="Logo" />
      </div>

      <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>

      <nav class="nav-bar">
        <ul>
          <li><a href="principal.php" class="active">Inicio</a></li>
          <li><a href="formulario.php">Formulario</a></li>
          <li><a href="index.php">Salir</a></li>
        </ul>
      </nav>
    </section>
    <section class="formulario-registro">
      <section id="formulario">
        <div class="form-container">
          <?php
          $errorCodigo = $errorNombre = $errorApellido = $errorNumero = "";
          $codigo = $nombre = $apellido = $numero = $taller = "";

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $codigo = htmlspecialchars($_POST['Codigo']);
            $nombre = htmlspecialchars($_POST['Nombre']);
            $apellido = htmlspecialchars($_POST['Apellido']);
            $numero = htmlspecialchars($_POST['numero']);
            $taller = htmlspecialchars($_POST['talleres']);

            $valid = true;

            if (!preg_match('/^U.{8}$/i', $codigo)) {
              $errorCodigo = "Código inválido. Debe comenzar con 'U' y tener 9 caracteres.";
              $valid = false;
            }

            if (!preg_match('/^[a-zA-Z]+$/', $nombre)) {
              $errorNombre = "Solo se permiten letras en el nombre.";
              $valid = false;
            }

            if (!preg_match('/^[a-zA-Z]+$/', $apellido)) {
              $errorApellido = "Solo se permiten letras en el apellido.";
              $valid = false;
            }

            if (!preg_match('/^\d{9}$/', $numero)) {
              $errorNumero = "Número inválido. Debe tener exactamente 9 dígitos.";
              $valid = false;
            }

            if ($valid) {
              $correo = $codigo . "@utp.edu.pe";

              echo "<div class='resumen'>";
              echo "<p id='enviado-msg' class='enviado-msg' ><b>¡Formulario enviado correctamente!</b></p> ";
              echo "<p><strong>Código:</strong> " . $codigo . "</p>";
              echo "<p><strong>Nombre:</strong> " . $nombre . " " . $apellido . "</p>";
              echo "<p><strong>Correo:</strong> " . $correo . "</p>";
              echo "<p><strong>Número:</strong> " . $numero . "</p>";
              echo "<p><strong>Taller:</strong> " . ($taller === "taller1" ? "Cultural" : "Deportivo") . "</p>";
              echo "<p>Se enviará más información al correo.</p>";
              echo "</div>";
            }
          }

          if ($_SERVER["REQUEST_METHOD"] != "POST" || !$valid) {
          ?>
            <h2>Registro para los talleres</h2>
            <form id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validarFormulario();">
              <div class="form-step" id="step1">
                <h3>Paso 1: Ingresa tu código</h3>
                <div class="input-container">
                  <label for="Codigo">Código:</label>
                  <input type="text" id="Codigo" title="Código de Estudiante" name="Codigo" placeholder="Ingresa tu código" value="<?php echo $codigo; ?>" required>
                  <span class="error-msg error-codigo"><?php echo $errorCodigo; ?></span>
                </div>
                <div class="button-container">
                  <button type="button" style="display: none;">Regresar</button>
                  <button type="button" onclick="if(validarPaso1()) mostrarPaso(2)">Siguiente</button>
                </div>
              </div>
              <div class="form-step" id="step2" style="display: none;">
                <h3>Paso 2: Ingresa tus datos personales</h3>
                <div class="input-container">
                  <label for="nombre">Nombre:</label>
                  <input type="text" id="nombre" name="Nombre" placeholder="Escribe tu nombre" value="<?php echo $nombre; ?>" required>
                  <span class="error-msg error-nombre"><?php echo $errorNombre; ?></span>
                </div>
                <div class="input-container">
                  <label for="apellido">Apellido:</label>
                  <input type="text" id="apellido" name="Apellido" placeholder="Escribe tu apellido" value="<?php echo $apellido; ?>" required>
                  <span class="error-msg error-apellido"><?php echo $errorApellido; ?></span>
                </div>
                <div class="input-container">
                  <label for="numero">Número:</label>
                  <input type="text" name="numero" id="numero" placeholder="Ejemplo: 999999999" value="<?php echo $numero; ?>" required>
                  <span class="error-msg error-numero"><?php echo $errorNumero; ?></span>
                </div>
                <div class="button-container">
                  <button type="button" onclick="mostrarPaso(1)">Regresar</button>
                  <button type="button" onclick="if(validarPaso2()) mostrarPaso(3)">Siguiente</button>
                </div>
              </div>
              <div class="form-step" id="step3" style="display: none;">
                <h3>Paso 3: Selecciona un taller</h3>
                <div class="input-container">
                  <label for="taller">Seleccione un taller:</label>
                  <select id="taller" name="talleres" required>
                    <option value="taller1" <?php if ($taller == "taller1") echo "selected"; ?>>Taller Cultural</option>
                    <option value="taller2" <?php if ($taller == "taller2") echo "selected"; ?>>Taller Deportivo</option>
                  </select>
                </div>
                <div class="button-container">
                  <button type="button" onclick="mostrarPaso(2)">Regresar</button>
                  <button type="submit">Enviar</button>
                </div>
              </div>
            </form>
          <?php
          }
          ?>
        </div>
      </section>
    </section>
  </header>

  <section class="galeria">
    <div class="galeria-titulo">
      <h2>Sé parte de nosotros</h2>
    </div>
    <div class="row">
      <div class="column">
        <img src="./galeria/imagen1.jpg" alt="imagen 1" />
        <img src="./galeria/imagen2.jpg" alt="imagen 1" />
        <img src="./galeria/imagen3.jpg" alt="imagen 1" />
        <img src="./galeria/imagen4.jpg" alt="imagen 1" />
        <img src="./galeria/imagen5.jpg" alt="imagen 1" />
      </div>
      <div class="column">
        <img src="./galeria/imagen6.jpg" alt="imagen 1" />
        <img src="./galeria/imagen7.jpg" alt="imagen 1" />
        <img src="./galeria/imagen8.jpg" alt="imagen 1" />
        <img src="./galeria/imagen9.jpg" alt="imagen 1" />
        <img src="./galeria/imagen10.jpg" alt="imagen 1" />
      </div>
      <div class="column">
        <img src="./galeria/imagen11.jpg" alt="imagen 1" />
        <img src="./galeria/imagen12.jpg" alt="imagen 1" />
        <img src="./galeria/imagen13.jpg" alt="imagen 1" />
        <img src="./galeria/imagen14.jpg" alt="imagen 1" />
        <img src="./galeria/imagen15.jpg" alt="imagen 1" />
      </div>
      <div class="column">
        <img src="./galeria/imagen16.png" alt="imagen 1" />
        <img src="./galeria/imagen17.jpg" alt="imagen 1" />
        <img src="./galeria/imagen18.jpg" alt="imagen 1" />
        <img src="./galeria/imagen19.jpg" alt="imagen 1" />
        <img src="./galeria/imagen20.jpg" alt="imagen 1" />
      </div>
    </div>
  </section>

  <footer class="footer-utp">
    <div class="footer-seccion1">
      <div class="footer-ubicanos">
        <h2>
          <img src="./iconos/bx-map.svg" alt="ubicanos-logo" />
          UBICANOS
        </h2>
        <p>
          Campus Chimbote. Km 424 Panamericana Norte - Calle 56 S/N y al lado
          de Innova
        </p>
      </div>
      <div class="footer-email">
        <form class="footer-form">
          <p>Recibe las últimas noticias</p>
          <input type="email" id="email" placeholder="Ingresa tu email aquí" />
          <button type="submit">Enviar</button>
        </form>
      </div>
    </div>
    <div class="footer-seccion2">
      <div class="footer-iconos">
        <ul>
          <li>
            <a href="https://www.facebook.com/UTP.Peru" target="_blank"><img src="./iconos/facebook.svg" alt="icono-facebook" /></a>
          </li>
          <li>
            <a href="https://www.instagram.com/universidadutp/?hl=es" target="_blank"><img src="./iconos/instagram.svg" alt="icono-instagram" /></a>
          </li>
          <li>
            <a href="https://pe.linkedin.com/school/utp-universidad-tecnologica-del-peru/" target="_blank"><img src="./iconos/linkedin.svg" alt="icono-linkedin" /></a>
          </li>
          <li>
            <a href="https://www.youtube.com/channel/UCLQEBv7WN0SgOFD_nRLraRQ" target="_blank"><img src="./iconos/youtube.svg" alt="icono-youtube" /></a>
          </li>
          <li>
            <a href="https://github.com/AndreeBermudez" target="_blank"><img src="./iconos/github.svg" alt="icono-github" /></a>
          </li>
        </ul>
      </div>
      <div class="footer-copy">
        <p>
          © 2024 Universidad Tecnológica del Perú. Todos los derechos
          reservados.
        </p>
      </div>
    </div>
  </footer>
  <script src="./js/script.js"></script>
  <script src="./js/form.js"></script>
</body>