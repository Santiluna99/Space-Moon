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

$nombre=$_POST['nombre'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$titulo1=$_POST['titulo1'];
$titulo2=$_POST['titulo2'];
$descripcion1=$_POST['descripcion1'];
$descripcion2=$_POST['descripcion2'];

    $config_data = config_read($config_file);
    config_set($config_data, "acercade", "nombre", $nombre);
    config_set($config_data, "acercade", "titulo", $titulo);
    config_set($config_data, "acercade", "descripcion", $descripcion);
    config_set($config_data, "acercade", "titulo1", $titulo1);
    config_set($config_data, "acercade", "titulo2", $titulo2);
    config_set($config_data, "acercade", "descripcion1", $descripcion1);
    config_set($config_data, "acercade", "descripcion2", $descripcion2);
    config_write($config_data, $config_file);
    
    $contenido = parse_ini_file($config_file, true);   


echo "<script>alert('Cambios guardados exitosamente');
    window.history.go(-1);
</script>";

?>