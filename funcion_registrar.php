<?php
function registrarUsuario($nombre, $usuario, $email, $password, $confirmar_password) {
    $error = '';
    if (empty($nombre) || empty($usuario) || empty($email) || empty($password) || empty($confirmar_password)) {
        return 'Todos los campos son obligatorios';
    } else if (!preg_match("/^[a-zA-Z]+$/", $nombre)) {
        return 'El nombre no debe contener caracteres especiales';
    } else if (!preg_match("/^[\w-]+(\.[\w-]+)*@utp\.edu\.pe$/", $email)) {
        return 'El email debe terminar en @utp.edu.pe';
    } else if ($password !== $confirmar_password) {
        return 'Las contraseñas no coinciden';
    } else {
        $directorio = 'user';
        if (!is_dir($directorio)) {
            mkdir($directorio, 0755, true);
        }
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        //Array de datos del usuario
        $datosUsuario = [
            'nombre' => $nombre,
            'usuario' => $usuario,
            'email' => $email,
            'passwordHash' => $passwordHash,
        ];
        //Array a Json
        $datosUsuarioJson = json_encode($datosUsuario);
        file_put_contents("$directorio/$usuario.txt", $datosUsuarioJson);
        return 'Registrado con éxito';
    }
}
?>