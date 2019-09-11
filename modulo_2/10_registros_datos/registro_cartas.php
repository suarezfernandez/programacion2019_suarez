<?php

// Guardar los datos 


try {
if (isset($_POST['guardar'])) {
    $nombre = $_POST['name'];
    $url = $_POST['link'];
    $precio =$_POST['price'];

   var_dump($_POST);
};


} catch(Exception $e) {
 $errol =$e->getMessage();
}

//Incluir la vista

require_once 'vistas/registro_cartas.html.php';