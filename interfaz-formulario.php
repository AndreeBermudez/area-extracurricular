<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('Location: interfaz-login.php');
        exit();
    }
?>
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
    <?php
    include 'header-form.php';
    ?>
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
    <?php
    include 'footer.php';
    ?>
  </footer>
  <script src="./js/script.js"></script>
  <script src="./js/form.js"></script>
</body>
