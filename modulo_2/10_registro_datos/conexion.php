<?php

try {
    $DB_HOST = "localhost";
    $DB_NAME = "lista_cartas";
    $DB_USER = "root";
    $DB_PASS = "";
    $config = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ];

    $config = [
        3 => 2, // Lanzar excepciones como errores
        19 => 5, // Traer los datos en forma de objetos
    ];

    $conexion = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS, $config);
    
} catch(PDOException $pdo) {
    die( $pdo->getMessage() );
}