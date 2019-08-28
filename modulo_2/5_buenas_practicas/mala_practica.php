<?php
if (isset($_POST['verificar'])) {
    $edad = $_POST['edad'];

    if ($edad >= 18) {
        echo "<p>Bienvenido</p>";

    } else {
        echo "<p>No puedes ver este sitio</p>";
        die;
    }
}
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

    <form method="post">
    <input type="texto" name="edad">
    <button type="submit" name="verificar">verificar</button>
   
    </form> 
</body>
</html>