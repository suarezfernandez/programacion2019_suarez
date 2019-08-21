<?php

// Objetos
$pesrona = new stdClass();
$pesrona->nombre = "suarez";
$pesrona->edad = 23;
$pesrona->estaCasado = true;

if ($pesrona->edad >= 18) {
    echo "$pesrona->nombre es mayor de edad";
} else {
    echo "$persona->nombre es menor de edad";
}
echo "<img src='primabrasil.jpg'/>";