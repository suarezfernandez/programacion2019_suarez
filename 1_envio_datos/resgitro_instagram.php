<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de instagram</title>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="container">
<!-- Hacer una página para registrar el nombre, la edad, el correo y la contraseña para instagram.-->
<section>
    <h3 class="row">Bienvenido a INSTAGRAM</h3>
    <form action="" method="post" class="form-check">
    <div class="row py-2">
        <label for="email" class="col-sm-1 form-check-label">Email:</label>
        <input type="email" name="email" id="email" class="col-2" placeholder="Escribe tu email:" style="margin-left: 20px">
    </div>

    <div class="row py-1 form-group" style="border-style: 2px solid black">
        <label for="edad" class="col-sm-1 form-check-label">Edad:</label>
        <input type="text" name="edad" id="edad" class="col-2" style="margin-left: 20px" placeholder="Escribe tu edad:">

    </div>

    <div class="row form-group">
        <label for="contrasena" class="col-sm-1 form-check-label">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena" class="col-2" style="margin-left: 20px" placeholder="Escribe tu contraseña:">
    </div>

    <div class="row form-group" style="margin-left: 220px">
        <input type="submit" value="Enviar" name="submit" class="btn btn-primary">
    </div>
</section>
    </form>
</body>
</html>

<?php

    // echo"<pre>";
    // print_r($_POST);
    // echo"</pre>";

    if (isset($_POST['submit']) ) {
        // echo "Presionaste el boton";
        echo "<div class='alert alert-primary' style='margin-right: 800px'>Gracias por registrarte</div>";
        // Almacenar los datos en variables
        $email = $_POST['email'];
        $edad = $_POST['edad'];
        $contrasena = $_POST['contrasena'];
    
        echo "<div class='alert alert-primary' style='margin-right: 800px'>
                <p>Se ha enviado un codigo de confirmacion
                al correo <b>$email</b></p>    
        </div>";
    }


?>