<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio1</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
</head>
<body class="container">
    <form action="" method="post" class="border mt-5 p-3 col-md-8">
        <div class="form-group">
            <label for="semana" class="pu-4">Escriba del 0 al 6 el dia de la semana:</label>
            <input type="number" name="semana" id="" class="p-1 ">
            <button type="submit" name="boton" class="">Ver el dia de la semana</button>
        </div>
    </form>
</body>
</html>

<?php
    if(isset($_POST['boton'])) {
        
        $dias = ["Domingo", "Lunes", "Martes", "Miercoles", "Viernes", "Sabado",];

        if ($dias == 1) {
            echo $dias[0];
        }

    }
?>