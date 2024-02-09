<?php 
//exec("sudo sh ip_static.sh");
//header("Location: index.php");
 ?>
 <?php
$url_script = 'ip_static.sh';

// Descarga el script desde la web
$script_content = file_get_contents($url_script);

if ($script_content !== false) {
    // Crea un archivo temporal para almacenar el script
    $temp_file = tempnam(sys_get_temp_dir(), 'script');
    file_put_contents($temp_file, $script_content);

    // Otorga permisos de ejecución al archivo
    chmod($temp_file, 0755);

    // Ejecuta el script
    $output = shell_exec($temp_file);

    // Muestra la salida (puedes hacer otras cosas con la salida según tus necesidades)
    echo "Salida del script:\n";
    echo $output;

    // Elimina el archivo temporal
    unlink($temp_file);
} else {
    echo "Error al descargar el script.";
}
?>
