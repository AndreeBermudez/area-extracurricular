<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Area Extracurricular</title>
</head>

<body>
  <header>
    <?php include 'header-clubes.php'; ?>
  </header>

  <section class="clubes">
    <div class="clubes-header">
      <h2>TALLERES UTP - CHIMBOTE</h2>
    </div>

    <div class="clubes-container">

      <?php include 'lista-clubes.php';
      foreach ($clubes as $club) : ?>
        <div class="clubes-box">
          <div class="clubes-img">
            <img src="img-clubes/<?php echo $club['imagen']; ?>" alt="<?php echo $club['alt']; ?>" />
          </div>
          <div class="clubes-texto">
            <span><?php echo $club['horario']; ?></span>
            <a class="n-titulo" target="_blank"><?php echo $club['titulo']; ?></a>
            <p><?php echo $club['descripcion']; ?></p>
            <a href="<?php echo $club['link']; ?>"><?php echo $club['texto_link']; ?></a>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

  </section>

  <footer class="footer-utp">
    <?php include 'footer.php'; ?>
  </footer>

  <script src="js/script.js"></script>
</body>

</html>