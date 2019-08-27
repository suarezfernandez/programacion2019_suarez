<?php

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
        <div class="row">
            <div class="col-md-5">
            <h1>Publicar</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="text">Nombre: </label>
                        <input type="text" class="form-control" name="nombre">
                    </div>
                    
                    <div class="form-froup">
                        <label for="text">URL de la imagen</label>
                        <input type="text" class="form-control" name="url">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark" name="guardar">Guardar públicacion</button>
                    </div>
                    <a href="listado.php">Ir al listado</a>
                    
                </form>
                

             

                if (isset($_SESSION['guardar'])) {
                    $_SECCION['publicaciones'] = [];

                }

                
                if(isset($_POST['guardar'])) {

                    $datos = new stdClass();
                    $datos->nombre = $_POST['nombre'];
                    $datos->url = $_POST['url'];

                    echo "<pre>";
                    print_r($datos);
                    echo "</pre>";
                }

                    session_start();

                    echo "<pre>";
                    print_r($_SESSION);
                    echo "</pre>";
                
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>