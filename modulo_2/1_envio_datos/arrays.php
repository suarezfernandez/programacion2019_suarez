<?php

$meses = ['Enero', 
'Febrero', 
'Marzo', 
'Abril', 
'Mayo',
'Junio',
'Julio',
'Agosto',
'Septiembre',
'Octubre',
'Noviembre',
'Diciembre',];
$colores = ['rosado', 'morado', 'azul', 'blanco'];

echo "Este mes es" . $meses[2];

for ($valor = 0; $valor <= 11; $valor++) {
    echo $meses[$valor] . "<br>";
}

// los arrays almacenan diferentes tipos de datos
$datos = ['suarez', 37, true];
echo $datos[0] . "<br>";
echo $datos[1] . "<br>";
echo $datos[2] . "<br>";
