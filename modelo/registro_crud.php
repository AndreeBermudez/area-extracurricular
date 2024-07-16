<?php
require_once 'conexion.php';

function crearRegistro($usuario_id, $codigo, $telefono, $tipo_registro, $fecha_registro)
{
    global $conn;
    $sql = "INSERT INTO registro (usuario_id, codigo, telefono, tipo_registro, fecha_registro) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issss", $usuario_id, $codigo, $telefono, $tipo_registro, $fecha_registro);

    if ($stmt->execute()) {
        return 'Registro creado con éxito';
    } else {
        if ($stmt->errno == 1062) {  // error para duplicación en MySQL
            return 'Error: El usuario ya está registrado en este taller';
        } else {
            return 'Error al crear el registro: ' . $stmt->error;
        }
    }
}


function listarRegistros()
{
    global $conn;
    $sql = "SELECT r.registro_id,u.nombre, u.apellido, u.username, r.codigo, r.telefono, r.tipo_registro, r.fecha_registro 
            FROM registro r
            INNER JOIN usuarios u
            ON r.usuario_id = u.usuario_id"; 
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $usuarios=[];
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
        }
        return $usuarios;
    } else {
        return[];
    }
}

function consumirRegistro($registro_id){
    global $conn;
    $sql= "DELETE FROM registro WHERE registro_id = ?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("i",$registro_id);
    return $stmt->execute();
}

