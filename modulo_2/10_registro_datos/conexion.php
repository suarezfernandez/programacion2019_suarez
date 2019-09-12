<?php

try {
    $DB_HOST = "localhost";
    $DB_NAME = "lista_cartas";
    $DB_USER = "root";
    $DB_PASS = "";
    $config = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $conexion = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS, $config);
    
} catch(PDOException $pdo) {
    echo $pdo->getMessage();
} 