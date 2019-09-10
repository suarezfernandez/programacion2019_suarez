<?php
require_once 'conexion.php';

$sql ="SELECT id, nombre, usuario, contrasena FROM usuario";

// opcion 1
$query = $conexion->query($sql);
$datos = $query->fetchAll();


//Opcion 2
$datos = $conexion->query($sql)->fetchAll();
/*
echo "<pre>";
print_r($datos);
echo "</pre>";
*
// Listar los nombres de los usuarios
echo "<h1>Listado de Usuarios Registrados</h1>";
echo "<ul>";
foreach($datos as $dato) {

    echo "<li> {$dato['nombre']} @{$dato['usuario']} </li>";
}
echo "</ul>";
