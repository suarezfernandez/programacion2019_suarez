<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de cartas</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h3 class="col-md-12">
                Lista de productos
                <a href="registro_cartas.php">Registrar productos</a>
                <a href="logout.php">Cerrar Sesión</a>
                <hr>
            </h3>

            <form class="col-md-12 mb-3">
                <input type="search" name="busqueda" class="form-control">
                <button type="submit" name="buscar" class="btn btn-warning">Buscar</button>
            </form>

            <?php
                //print_r($datos);

                foreach($datos as $dato) {
                    echo '<div class="card col-md-3">
                            <img src="'.$dato->link.'" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">'. $dato->name .'</h5>
                                <p>Creador por: '.$dato->created_by.'</p>
                                <p class="card-text text-success">$ '.$dato->price.'</p>
                                <a href="ver_carta.php?id='.$dato->id.'" class="btn btn-primary">Ver producto</a>

                                <form method="post" action="borrar_carta.php">
                                    <input type="hidden" name="id" value="'.$dato->id.'">
                                    <button class="btn btn-danger" name="borrar">Borrar</button>
                                </form>
                            </div>
                        </div>';
                }
                
            ?>

            

        </div>
    </div>
</body>
</html>