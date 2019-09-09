<?php

try {
    $DB_HOST = "localhost";
    $DB_NAME = "appprima";
    $DB_USER = "Suarez";
    $DB_PASS = "suarez123";
    $conf = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $conexion = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS, $conf);

}catch(PDOException $pdo) {
    die($pdo->getMessage());
}