<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Soy PHP</h1>
    <?php
    echo "<h1> Bienvenido a {$_SERVER['HTTP_HOST']}</h1>";

    echo "Hoy es " . date("1");
   
    
    ?>
</body>
</html>