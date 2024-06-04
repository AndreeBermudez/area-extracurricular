<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Enviado!</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>

<?php
$errorCodigo = $errorNombre = $errorApellido = $errorNumero = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = htmlspecialchars($_POST['Codigo']);
    $nombre = htmlspecialchars($_POST['Nombre']);
    $apellido = htmlspecialchars($_POST['Apellido']);
    $numero = htmlspecialchars($_POST['numero']);
    $taller = htmlspecialchars($_POST['talleres']);
    
    $valid = true;


    if (!preg_match('/^U.{8}$/i', $codigo)) {
        $errorCodigo = "Código inválido. Debe comenzar con 'U' y tener 9 caracteres.";
        $valid = false;
    }


    if (!preg_match('/^[a-zA-Z]+$/', $nombre)) {
        $errorNombre = "Solo se permiten letras en el nombre.";
        $valid = false;
    }

    if (!preg_match('/^[a-zA-Z]+$/', $apellido)) {
        $errorApellido = "Solo se permiten letras en el apellido.";
        $valid = false;
    }

    if (!preg_match('/^\d{9}$/', $numero)) {
        $errorNumero = "Número inválido. Debe tener exactamente 9 dígitos.";
        $valid = false;
    }

    if ($valid) {
        $correo = $codigo . "@utp.edu.pe";
        

        echo "<div class='resumen'>";
        echo "<p id='enviado-msg' class='enviado-msg' ><b>¡Formulario enviado correctamente!</b></p> ";
        echo "<p><strong>Código:</strong> " . $codigo . "</p>";
        echo "<p><strong>Nombre:</strong> " . $nombre . " " . $apellido . "</p>";
        echo "<p><strong>Correo:</strong> " . $correo . "</p>";
        echo "<p><strong>Número:</strong> " . $numero . "</p>";
        echo "<p><strong>Taller:</strong> " . ($taller === "taller1" ? "Cultural" : "Deportivo") . "</p>";
        echo "<p>Se enviará más información al correo.</p>";
        echo "</div>";
    } else {
        include 'formulario.php';
    }
} else {
    include 'formulario.php';
}
?>

</body>
</html>




