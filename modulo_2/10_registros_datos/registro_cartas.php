<?php

// Guardar los datos 


try {
if (isset($_POST['guardar'])) {
    $nombre = $_POST['name'];
    $url = $_POST['link'];
    $precio =$_POST['price'];

    //validaciones

    if (empty($url)) {
        throw new Exception("El link no puede estar vacio");
    }
    if (empty($precio)) {
        throw new Exception("El link no puede estar vacio");
    }
   var_dump($_POST);
};


} catch(Exception $e) {
 $errol =$e->getMessage();
}

//Incluir la vista

require_once 'vistas/registro_cartas.html.php';