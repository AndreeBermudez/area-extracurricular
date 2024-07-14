<?php
require_once 'conexion.php';

function crearUsuario($username, $email, $passwordHash, $nombre, $apellido, $rol = 'usuario')
{
    global $conn;
    $sql = "INSERT INTO usuarios (username, email, password, nombre, apellido, rol) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $username, $email, $passwordHash, $nombre, $apellido, $rol);

    return $stmt->execute();
}

function listarUsuarios()
{
    global $conn;
    $sql = "SELECT * FROM usuarios WHERE rol = 'usuario'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $usuarios = [];
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
        }
        return $usuarios;
    } else {
        return [];
    }
}

function eliminarUsuario($usuario_id){
    global $conn;
    $sql= "DELETE FROM usuarios WHERE usuario_id = ?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("i",$usuario_id);
    return $stmt->execute();
}

?>
