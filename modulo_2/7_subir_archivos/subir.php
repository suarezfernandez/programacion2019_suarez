<?php

$error = "";
$mensaje = "";

// if (isset($_POST['subir'])) {
//     echo "<pre>";
//     print_r($_FILES);
//     echo "</pre>";

    if (isset($_FILES['archivo']) &&  ($_FILES['archivo']['error']) == 0 ) {
     $nombre = $_FILES['archivo']['name'];
     $nombre_tmp = $_FILES['archivo']['tmp_name'];
     $tamano = $_FILES['archivo']['size'];

     if (is_uploaded_file($nombre_tmp)) {
         $mensaje "Hemo recibido el archivo";
     } else {
        $mensaje "No se pudo recibir el archivo";
     }
// Mover el archivo a nuestra carpeta
$movido = move_uploaded_file($nombre_tmp, "archivos_recibidos/".$nombre);
if ($movido) {
    $mensaje "El archivo se subio correctamente";
} else {
    $error "No se pudo subir correctamente";
}
    }
    else {
        $error "no se ha enviado un archivo";
    }


// Inclir la vista

require_once 'archivo.html.php';
