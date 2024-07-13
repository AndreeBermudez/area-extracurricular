<?php
session_start();
// Si no existe un usuario
if (!isset($_SESSION['usuario'])) {
    header('Location: interfaz-login.php');
    exit();
} else {
    // Si el rol no es 'admin'
    if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
        header('Location: interfaz-principal.php');
        exit();
    }
}

require_once './modelo/usuario_crud.php';
$usuarios = listarUsuarios();
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
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="tabla-usuarios__cuerpo">
                    <?php foreach ($usuarios as $usuario) : ?>
                        <tr class="filaUsuario">
                            <td><?php echo htmlspecialchars($usuario['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['apellido']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['username']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                            <td>
                                <button>Editar</button>
                                <button>Eliminar</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
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