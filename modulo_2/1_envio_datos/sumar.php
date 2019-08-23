<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sumar</title>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="container">
<!-- Hacer un formulario para sumar 2 numeros. -->
    <form action="" method="get" class="border mt-5 mx-5" style="padding: 20px;">
        <div class="row">
            <label for="suma" class="col-auto pt-2">La suma de:</label>
            <input type="number" name="suma" id="suma" class="col-2">
            <label for="suma2" class="col-auto pt-2">+</label>
            <input type="number" name="suma2" id="suma2" class="col-2">
            <button type="submit" name="sumar" class="btn btn-primary ml-2">Sumar</button>
        </div>
    </form>
</body>
</html>

<?php
    $suma = $_GET['suma'];
    $suma2 = $_GET['suma2'];
    $resultado = $suma +$suma2;

    echo "<div class='alert alert-primary mt-2 mx-5'><p>La suma de $suma + $suma = $resultado</p></div>"
?>