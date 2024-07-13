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
                    <li><a href="interfaz-principal.php" class="active">Inicio</a></li>
                    <li><a href="interfaz-clubes.php">Clubes</a></li>
                    <li><a href="interfaz-formulario.php">Formulario</a></li>
                    <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'admin') : ?>
                        <li><a href="interfaz-administrador.php">Administración</a></li>
                    <?php endif; ?>
                    <li><a href="logout.php">Salir</a></li>
                </ul>
        </section>
        <section class="container-titulo">
            <h1 class="portada-titulo">Area de Oficina Extracurricular</h1>
            <span class="fecha">Hoy es: <?php echo date("d/m/Y"); ?></span>
        </section>