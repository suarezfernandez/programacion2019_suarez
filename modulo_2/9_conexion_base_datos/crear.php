<?php

require_once 'conexion.php';
/*
$sql = "CREATE TABLE usuario (
    id INT UNSIGNED AUTO_INCREMENT,
    nombre VARCHAR(100),
    usuario VARCHAR(50),
    contraseña VARCHAR(80),
    
    PRIMARY KEY(id)
    )";
/*
$sql = 'INSERT INTO usuario
    (nombre, usuario, contrasena)
    VALUES
    ("jose", "nano", "cambi")
';

try {
$conexion->exec($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}

$sql = "CREATE TABLE usuario (
    id INT UNSIGNED AUTO_INCREMENT,
    nombre VARCHAR(100),
    usuario VARCHAR(50),
    contraseña VARCHAR(80),
    
    PRIMARY KEY(id)
    )";

$sql = 'INSERT INTO usuario
    (nombre, usuario, contrasena)
    VALUES
    ("judio", "jily", "manolo")
';

/*
$sql = 'UPDATE usuario
SET usuario="manolopinocho"
WHERE id = 2
';

$sqL = "DELETE FROM usuario WHERE id = 2";
$conexion->exec($sqL);

$sql = 'UPDATE usuario
SET nombre="manolopinocho"
WHERE id = 1
';
$conexion->exec($sql);

$sql = 'INSERT INTO usuario
    (nombre, usuario, contrasena)
    VALUES
    ("juan", "wilson", "carlos"),
    ("tomy", "hony", "1235"),
    ("nicole", "moni", "158")
    
';


$conexion->exec($sql);