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
        <?php include 'header-principal.php'; ?>
    </header>

    <section class="container-usuarios">
        <div class="container-usuarios__titulo">
            <h2>Usuarios</h2>
        </div>
        <div class="container-usuarios__filtro">
            <input type="text" placeholder="Buscar usuario">
            <button>Buscar</button>
        </div>
        <div class="container-usuarios__tabla">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $directorio = opendir('user/');
                    $usuarios = [];
                    while (($archivo=readdir($directorio)) !== false){
                        if($archivo != '.' && $archivo != '..'){
                            $rutaArchivo='user/'.$archivo;
                            $contenidoArchivo = file_get_contents($rutaArchivo);
                            $usuario=json_decode($contenidoArchivo,true);
                            $usuarios[]=$usuario;
                        }
                    }
                    closedir($directorio);

                    foreach ($usuarios as $usuario) {
                        echo '<tr>';
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