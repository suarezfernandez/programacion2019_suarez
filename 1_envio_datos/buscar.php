<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscar</title>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="container">
<!-- Hacer un formulario para buscar un dato. -->
    <form action="" method="post" class="border form-check" style="margin: 100px; padding: 40px;">
        <div class="row">
            <label for="buscador" class="col-4">Resultado que coinciden con:</label>
            <input type="search" name="buscador" id="buscador" class=" col-3" placeholder="Escribe aqui:">
        </div>

        <div class="row">
            <input type="submit" value="Buscar" name="submit" style="margin-left: 430px; margin-top: 10px;" class="btn btn-primary">
        </div>

    </form>
</body>
</html>

<?php
if (isset($_POST['submit']) ) {
        $buscador = $_POST['buscador'];
    
        echo "<p class='alert alert-primary'>Lo que buscas es: $buscador</p>";
    }
?>