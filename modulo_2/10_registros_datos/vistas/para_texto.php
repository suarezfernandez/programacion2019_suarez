<?php

// # strlen();
$nombre = "suarez";
$longitud = strlen($nombre);

echo "<p>Longitud del nombre <b>$nombre</b> es {$longitud}</p>";


// # explode();
$nombre_completo = "luis Alberto Suarez Fernandez";
$array_nombre = explode(" ",$nombre_completo);

print_r($array_nombre);


$frutas = "Manzana,pera,Limon,Uva,Kivi";
$listadoFrutas = explode(",", $frutas);

echo "<pre>";
print_r($listadoFrutas);
echo "</pre>";

// #3 str_split();

$pais = "Republica Dominicana";
$texto = str_split($pais, 1);



echo "<pre>";
print_r($texto);
echo "</pre>";



$str = "MI ZANAHORIA ESTA NITIDA";
$str = strtolower($str);
echo $str; // muestra: MI ZANAHORIA ESTA NITIDA;



$str = "mi zanahoria esta nitida";

$str = strtoupper($str);
echo $str; // muestra: MI ZANAHORIA ESTA NITIDA;

// strrev
$texto = "hola mundo";
echo "<br>" . strrev($texto);

$palindromo = "AnitaLavaLatina";
echo "<br>" . strrev($palindromo);


// similar_text

$hijo1 = "luis fernando";
$hijo2 = "luis suarez";

$similar = similar_text($hijo1, $hijo2);

echo "<p>Similitud entre texto: $similar</p>";

// ltrim

$nombre = "       Suarez ";

echo "<pre>" . $nombre . "</pre>";
echo "<pre>" . ltrim($nombre) . "</pre>";

// rtrim
$nombre = "       Suarez   ";

echo "<pre>" . $nombre . "</pre>";
echo "<pre>" . rtrim($nombre) . "</pre>";


// trim
$nombre = "       Suarez    ";

echo "<pre>" . $nombre . "</pre>";
echo "<pre>" . rtrim($nombre) . "</pre>";




// lcfirst

$foo = 'hello world'
// ucfirst
// ucwords
// wordwrap
?>


