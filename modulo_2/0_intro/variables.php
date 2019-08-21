<?php

// Comentario en linea
/* Comentario
multi
linea
*/
# Comentario en linea

// VARIABLES
$nombre = "suarez";
$edad = 37;
$estaCasado = true;

echo $nombre;
echo $edad;
echo $estaCasado;
// imprimir
echo $nombre;
echo $edad;
echo $estaCasado;

// Concatenar
echo "hola" . $nombre;
// echo "Hola " + $nombre; // Esto da errol

echo 10 + 10;

echo "<p>Hola $nombre, tienes $edad años</p>";
echo '<p>Hola $nombre, tienes $edad años</p>';

echo "<img src='prima2.jpg'/>";


die;

echo "Hola $nombre, tienes $edad años";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
echo'<script> 
alert("hola a todos desde php");
</script>';
?>
    
</body>
</html>