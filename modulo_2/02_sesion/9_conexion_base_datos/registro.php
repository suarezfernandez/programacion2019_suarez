<?php

require_once 'conexion.php';

$mensaje = "";
$error = "";

// Traer los registrados
$sql = "SELECT nombre, usuario FROM usuario";

$datos = $conexion->query($sql)->fetchAll();

// Proceso para insertar
if (isset($_POST['registrar'])) {
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $sql = "INSERT INTO usuario
            (nombre, usuario, contrasena)
            VALUES
            (\"$nombre\", \"$usuario\", \"$contrasena\")
    ";

    $resultado = $conexion->exec($sql);

    if ($resultado) {
        $mensaje = "Usuario registrado correctamente";
    } else {
        $error = "No se pudo guardar el usuario";
    }
}

// Incluir la vista
require_once 'registro.html.php';