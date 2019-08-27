<?php
session_start();


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">
    <h1>Publicar</h1> 
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group">
                        <input type="text" name="nombre" id="" class="form-control" placeholder="Nombre de la publicación">
                    </div>
                    <div class="form-group">
                        <input type="url" name="url" class="form-control" placeholder="URL de la imagen">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="guardar" class="btn btn-info">Guardar publicación</button>
                    </div>
                    <a href="listado.php">Ir al listado</a>
                </form>
            </div>
        </div>

     <?php

     
        if (!isset($_SESSION['publicaciones'])) {
            $_SESSION['publicaciones'] = [];
        }

        if (isset($_POST['guardar'])) {
            $datos = new stdClass();
            $datos->nombre = $_POST['nombre'];
            $datos->url = $_POST['url'];

            // Agregar los datos a la SESSION
            $resultado = array_push($_SESSION['publicaciones'], $datos);

            if ($resultado) {
                echo "<p class='alert alert-success'>Se agregó</p>";
            } else {
                echo "<p class='alert alert-danger'>No se agregó</p>";
            }
        }
        


     ?>   
</body>
</html>