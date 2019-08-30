<?php
$error = "";
$mensaje = "";

try {

    // Cuando el usuario presione el boton subir
    if (isset($_POST['subir'])) { 

        // Validar que el usuario suba un archivo
        if (!isset($_FILES['archivo']) || ($_FILES['archivo']['error']) != 0 ) {
            throw new Exception("Error: Debe seleccionar un archivo");
        }

        $nombre = $_FILES['archivo']['name'];
        $nombre_tmp = $_FILES['archivo']['tmp_name'];
        $tamano = $_FILES['archivo']['size'];

        $tamano_maximo = 2048; // 5KB

        // Validar que el tamaño no pase de 2KB
        if ($tamano > $tamano_maximo) {
            throw new Exception("Error: El archivo es mayor que 2KB");
        }

        // Validar si no se recibio el archivo
        if (!is_uploaded_file($nombre_tmp)) {
            throw new Exception("No se recibio el archivo");
        }

        $directorio = 'archivos_recibidos';
    
        // Validar de que el directorio exista
        if(!file_exists($directorio)) {
            throw new Exception("Error: El directorio no existe");
        }

        // Mover el archivo a nuestra carpeta
        $movido = move_uploaded_file($nombre_tmp, $directorio."/".$nombre);

        // Validar si el archivo no se subio
        if (!$movido) {
            throw new Exception("El archivo no se pudo subir");
        }

        // Si todo salio bien, asignar el mensaje
        $mensaje = "El archivo se subio correctamente";

    }
} catch (Exception $ex) {
    // Asignarle el mensaje de las excepciones a la variable $error
    $error = $ex->getMessage();
}

// Incluir la vista
require_once 'archivo.html.php';
