<?php
session_start();
// Si no existe un usuario
if (!isset($_SESSION['usuario'])) {
    header('Location: interfaz-login.php');
    exit();
} else {
    // Si no hay un atributo esAdmin o es false
    if (!isset($_SESSION['esAdmin']) || $_SESSION['esAdmin'] !== true) {
        header('Location: interfaz-principal.php');
        exit();
    }
}
?>

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
    <header class="header-administrador">
        <?php include 'header-administrador.php'; ?>
    </header>

    <section class="container-usuarios">
        <div class="container-usuarios__titulo">
            <h2>Usuarios Registrados</h2>
        </div>
        <div class="container-usuarios__filtro">
            <input type="text" id="busquedaUsuario" placeholder="Buscar usuario">
        </div>
        <div class="container-usuarios__tabla">
            <table class="tabla-usuarios">
                <thead class="tabla-usuarios__cabecera">
                    <tr>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="tabla-usuarios__cuerpo">
                    <?php
                    $directorio = opendir('user/');
                    $usuarios = [];
                    while (($archivo = readdir($directorio)) !== false) {
                        if ($archivo != '.' && $archivo != '..' && $archivo != 'admin.txt') {
                            $rutaArchivo = 'user/' . $archivo;
                            $contenidoArchivo = file_get_contents($rutaArchivo);
                            $usuario = json_decode($contenidoArchivo, true);
                            $usuarios[] = $usuario;
                        }
                    }
                    closedir($directorio);

                    foreach ($usuarios as $usuario) {
                        echo '<tr class="filaUsuario">';
                        echo '<td>' . $usuario['nombre'] . '</td>';
                        echo '<td>' . $usuario['usuario'] . '</td>';
                        echo '<td>' . $usuario['email'] . '</td>';
                        echo '<td><button>Editar</button><button>Eliminar</button></td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </section>


    <footer class="footer-utp">
        <?php include 'footer.php'; ?>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>