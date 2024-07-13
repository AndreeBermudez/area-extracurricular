<?php
require_once "conexion.php";

function crearRegistro($usuario_id, $codigo, $telefono, $tipo_registro, $fecha_registro)
{
    global $conn;
    $sql = "INSERT INTO registros (usuario_id, codigo, telefono, tipo_registro, fecha_registro) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issss", $usuario_id, $codigo, $telefono, $tipo_registro, $fecha_registro);

    if ($stmt->execute()) {
        return 'Registro creado con éxito';
    } else {
        return 'Error al crear el registro: ' . $stmt->error;
    }
}


function listarRegistros()
{
    global $conn;
    $sql = "SELECT u.nombre, u.apellido, u.username, r.codigo, r.telefono, r.tipo_registro, r.fecha_registro 
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
    if($stmt->execute()){
        return "Registro consumido con exito";
    }else{
        return "No se encontro el registro a consumir". $stmt->error;
    }
}

function filtrarRegistro($palabra){
    global $conn;

    $palabra = "%" . $palabra . "%";

    $sql = "SELECT u.nombre, u.apellido, u.username, r.codigo, r.telefono, r.tipo_registro, r.fecha_registro 
            FROM registro r
            INNER JOIN usuarios u
            ON r.usuario_id = u.usuario_id
            WHERE u.nombre LIKE ?"; 
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $palabra);
    $stmt->execute();
    $result = $stmt->get_result();

    $usuarios = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
        }
        return $usuarios;
    } else {
        return $usuarios;
    }
}
