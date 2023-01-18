<?php
function config_read($config_file) {
    return parse_ini_file($config_file, true);
}
// Actualiza una nueva configuración en datos de archivo inicial cargados
function config_set(&$config_data, $section, $key, $value) {
    $config_data[$section][$key] = $value;
}

// Organiza los datos de configuración del archivo ini de nuevo en el disco.
function config_write($config_data, $config_file) {
    $new_content = '';
    foreach ($config_data as $section => $section_content) {
        $section_content = array_map(function($value, $key) {
            return "$key=$value";
        }, array_values($section_content), array_keys($section_content));
        $section_content = implode("\n", $section_content);
        $new_content .= "[$section]\n$section_content\n";
    }
    file_put_contents($config_file, $new_content);
}

// Función abreviada para actualizar un único valor de configuración en un archivo.
function config_set_file($config_file, $section, $key, $value) {
    $config_data = config_read($config_file);
    config_set($config_data, $section, $key, $value);
    config_write($config_file, $section, $key, $value);
}

$config_file = "../registro-usuarios.ini";

$numero=$_POST['numero'];
$mail=$_POST['mail'];
$direccion=$_POST['direccion'];


    $config_data = config_read($config_file);
    config_set($config_data, "contacto", "numero", $numero);
    config_set($config_data, "contacto", "mail", $mail);
    config_set($config_data, "contacto", "direccion", $direccion);
    
    config_write($config_data, $config_file);
    
    $contenido_contacto = parse_ini_file($config_file, true);   


echo "<script>alert('Cambios guardados exitosamente');
    window.history.go(-1);
</script>";

?>