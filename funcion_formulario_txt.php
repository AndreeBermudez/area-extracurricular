<?php
function registrarFormulario($codigo, $nombre, $apellido, $correo, $numero, $taller, $fechaEnvio) {
    $directorio = 'Form-Talleres';
    if (!is_dir($directorio)) {
        mkdir($directorio, 0755, true);
    }
    $data = "Código: $codigo\nNombre: $nombre $apellido\nCorreo: $correo\nNúmero: $numero\nTaller: $taller\nEnviado: $fechaEnvio\n\n";
    file_put_contents("$directorio/$codigo.txt", $data);
}
?>