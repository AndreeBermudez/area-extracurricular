<?php
require_once './modelo/usuario_crud.php';
function registrarUsuario($nombre, $apellido, $usuario, $email, $password, $confirmar_password)
{
    $error = '';
    if (empty($nombre) || empty($apellido) || empty($usuario) || empty($email) || empty($password) || empty($confirmar_password)) {
        return 'Todos los campos son obligatorios';
    } else if (!preg_match("/^[a-zA-Z ]+$/", $nombre)) {
        return 'El nombre no debe contener caracteres especiales';
    } else if (!preg_match("/^[a-zA-Z ]+$/", $apellido)) {
        return 'El apellido no debe contener caracteres especiales';
    } else if (!preg_match("/^u\d{8}@utp\.edu\.pe$/", $email)) {
        return 'El email debe tener el formato u22102663@utp.edu.pe';
    } else if ($password !== $confirmar_password) {
        return 'Las contraseñas no coinciden';
    } else {

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        if (crearUsuario($usuario, $email, $passwordHash, $nombre, $apellido)) {
            return 'Registrado con éxito';
        } else {
            return 'Error al crear el usuario';
        }
    }
}
