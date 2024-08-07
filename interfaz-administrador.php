<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: interfaz-login.php');
    exit();
} else {
    if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
        header('Location: interfaz-principal.php');
        exit();
    }
}

require_once './modelo/usuario_crud.php';
require_once './modelo/registro_crud.php';
$usuarios = listarUsuarios();
$registros = listarRegistros();
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
        <div class="tabla-usuarios-container">
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
                                <form method="POST" action="./logica/funcion_eliminar_usuario.php" onsubmit="return confirm('¿Está seguro de que desea eliminar este usuario?');">
                                    <input type="hidden" name="usuario_id" value="<?php echo $usuario['usuario_id']; ?>">
                                    <button type="submit" name="eliminar_usuario">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container-usuarios">
        <div class="container-usuarios__titulo">
            <h2>Formularios Registrados</h2>
        </div>

        <div class="tabla-usuarios-container">
            <table class="tabla-usuarios">
                <thead class="tabla-usuarios__cabecera">
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Usuario</th>
                        <th>Codigo</th>
                        <th>Telefono</th>
                        <th>Tipo de Registro</th>
                        <th>Fecha de Registro</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="tabla-usuarios__cuerpo">
                    <?php foreach ($registros as $registro) : ?>
                        <tr class="filaUsuario">
                            <td><?php echo htmlspecialchars($registro['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($registro['apellido']); ?></td>
                            <td><?php echo htmlspecialchars($registro['username']); ?></td>
                            <td><?php echo htmlspecialchars($registro['codigo']); ?></td>
                            <td><?php echo htmlspecialchars($registro['telefono']); ?></td>
                            <td><?php echo htmlspecialchars($registro['tipo_registro']); ?></td>
                            <td><?php echo htmlspecialchars($registro['fecha_registro']); ?></td>
                            <td>
                                <form method="POST" action="./logica/funcion_eliminar_registro.php" onsubmit="return confirm('¿Está seguro de que desea procesar este registro?');">
                                    <input type="hidden" name="registro_id" value="<?php echo $registro['registro_id']; ?>">
                                    <button type="submit" name="eliminar_registro">Procesar</button>
                                </form>
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