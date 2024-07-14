<section class="navegacion">
    <div class="logo">
        <img src="img-nav/logo.webp" alt="Logo">
    </div>

    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>

    <nav class="nav-bar">
        <ul>
            <li><a href="interfaz-principal.php">Inicio</a></li>
            <li><a href="interfaz-clubes.php" class="active">Clubes</a></li>
            <li><a href="interfaz-formulario.php">Formulario</a></li>
            <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'admin') : ?>
                <li><a href="interfaz-administrador.php">Administración</a></li>
            <?php endif; ?>
            <li><a href="logout.php">Salir</a></li>
        </ul>
    </nav>
</section>
<section class="container-titulo">
    <h1 class="portada-titulo">CLUBES</h1>
</section>