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
        <img src="./recursos/galeria/imagen1.jpg" alt="imagen 1" />
        <img src="./recursos/galeria/imagen2.jpg" alt="imagen 2" />
        <img src="./recursos/galeria/imagen3.jpg" alt="imagen 3" />
        <img src="./recursos/galeria/imagen4.jpg" alt="imagen 4" />
        <img src="./recursos/galeria/imagen5.jpg" alt="imagen 5" />
      </div>
      <div class="column">
        <img src="./recursos/galeria/imagen6.jpg" alt="imagen 6" />
        <img src="./recursos/galeria/imagen7.jpg" alt="imagen 7" />
        <img src="./recursos/galeria/imagen8.jpg" alt="imagen 8" />
        <img src="./recursos/galeria/imagen9.jpg" alt="imagen 9" />
        <img src="./recursos/galeria/imagen10.jpg" alt="imagen 10" />
      </div>
      <div class="column">
        <img src="./recursos/galeria/imagen11.jpg" alt="imagen 11" />
        <img src="./recursos/galeria/imagen12.jpg" alt="imagen 12" />
        <img src="./recursos/galeria/imagen13.jpg" alt="imagen 13" />
        <img src="./recursos/galeria/imagen14.jpg" alt="imagen 14" />
        <img src="./recursos/galeria/imagen15.jpg" alt="imagen 15" />
      </div>
      <div class="column">
        <img src="./recursos/galeria/imagen16.png" alt="imagen 16" />
        <img src="./recursos/galeria/imagen17.jpg" alt="imagen 17" />
        <img src="./recursos/galeria/imagen18.jpg" alt="imagen 18" />
        <img src="./recursos/galeria/imagen19.jpg" alt="imagen 19" />
        <img src="./recursos/galeria/imagen20.jpg" alt="imagen 20" />
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
</html>
