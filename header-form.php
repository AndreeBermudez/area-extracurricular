<section class="navegacion">
  <div class="logo">
    <img src="./recursos/img-nav/logo.webp" alt="Logo" />
  </div>

  <div class="hamburger">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </div>

  <nav class="nav-bar">
    <ul>
      <li><a href="interfaz-principal.php">Inicio</a></li>
      <li><a href="interfaz-clubes.php">Clubes</a></li>
      <li><a href="interfaz-formulario.php" class="active">Formulario</a></li>
      <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'admin') : ?>
        <li><a href="interfaz-administrador.php">Administración</a></li>
      <?php endif; ?>
      <li><a href="./logica/funcion_logout.php">Salir</a></li>
    </ul>
  </nav>
</section>
<section class="formulario-registro">
  <section id="formulario">
    <div class="form-container">
      <?php
      require_once 'modelo/registro_crud.php';

      $errorNumero = "";
      $correo = $_SESSION['email'];
      $codigo = strtoupper(substr($correo, 0, 9));
      $nombre = $_SESSION['nombre'];
      $apellido = $_SESSION['apellido'];
      $usuario_id = $_SESSION['usuario_id'];
      $numero = $taller = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = isset($_POST['numero']) ? htmlspecialchars($_POST['numero']) : '';
        $taller = isset($_POST['talleres']) ? htmlspecialchars($_POST['talleres']) : '';

        $valid = true;

        if (!preg_match('/^\d{9}$/', $numero)) {
          $errorNumero = "Número inválido. Debe tener exactamente 9 dígitos.";
          $valid = false;
        }

        if ($valid) {
          date_default_timezone_set('America/Lima');
          $fechaEnvio = date('Y-m-d H:i:s');

          $taller = strtolower($taller);

          $resultado = crearRegistro($usuario_id, $codigo, $numero, $taller, $fechaEnvio);

          if ($resultado === 'Registro creado con éxito') {
            echo "<div class='resumen'>";
            echo "<p id='enviado-msg' class='enviado-msg' ><b>¡Formulario enviado correctamente!</b></p> ";
            echo "<p><strong>Código:</strong> " . $codigo . "</p>";
            echo "<p><strong>Nombre:</strong> " . $nombre . " " . $apellido . "</p>";
            echo "<p><strong>Correo:</strong> " . $correo . "</p>";
            echo "<p><strong>Número:</strong> " . $numero . "</p>";
            echo "<p><strong>Taller:</strong> " . ($taller === "taller cultural" ? "Cultural" : "Deportivo") . "</p>";
            echo "<p>Se enviará más información al correo.</p>";
            echo "<p><strong>Enviado:</strong> " . $fechaEnvio . "</p>";
            echo "</div>";
          } else {
            echo "<p>Hubo un problema al enviar el formulario:</p>";
            echo "<p>$resultado.</p>";
          }
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
                <option value="taller cultural" <?php if ($taller == "taller cultural") echo "selected"; ?>>Taller Cultural</option>
                <option value="taller deportivo" <?php if ($taller == "taller deportivo") echo "selected"; ?>>Taller Deportivo</option>
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