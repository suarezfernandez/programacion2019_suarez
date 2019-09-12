<?php

require_once 'conexion.php';

try {
    // Guardar los datos
    if (isset($_POST['guardar'])) {
        $nombre = $_POST['name'];
        $url = $_POST['link'];
        $precio = $_POST['price']; 

        // Validaciones
        if (empty($nombre)) {
            throw new Exception("El nombre no puede estar vacio", 1);
        }

        if (empty($url)) {
            throw new Exception("El link no puede estar vacio", 2);
        }

        if (empty($precio)) {
            throw new Exception("El precio no puede estar vacio", 3);
        }

        if (intval($precio) < 15) {
            throw new Exception("El precio no puede ser menor que 15", 4);
        }

        // Verificar que no exista en la base de datos 
        $sql = "SELECT id, name FROM registro_cartas WHERE name LIKE '%nombre%'";
        $datos2 = $conexion->query($sql)->fetchAll();

        if (count($datos2) > 0) {
            throw new Exception("ya existe este nombre. Elija otro", 1);
        }

        // Insertar     
        $sql = "INSERT INTO registro_cartas
                (name, link, price)
                VALUES
                (\"$nombre\", \"$url\", \"$precio\")";

        $resultado = $conexion->exec($sql);

        if ($resultado) {
            $mensaje = "Se guardaron los datos";
        } else {
            $mensaje = "No se pudieron guardar los datos";
        }

        echo $mensaje;

    }    

} catch(Exception $e) {
    
    $error = [
        'codigo' => $e->getCode(),
        'mensaje' => $e->getMessage()
    ];

}

// Incluir la vista
require_once 'vistas/registro_cartas.html.php';