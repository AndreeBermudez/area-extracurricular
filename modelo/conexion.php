<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "area_extracurricular"; 

try {
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");
} catch (mysqli_sql_exception $e) {
    // Manejo de errores más detallado
    die("Conexión fallida: " . $e->getMessage());
}

// Verificamos si la conexión es correcta
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>