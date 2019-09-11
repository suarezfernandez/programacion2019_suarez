<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de cartas</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Formulario de Registro -->
                <form method="post">
                    <h3>Registro de Cartas</h3>
                    <a href="lista_cartas.php">Ver lista de cartas</a>
                    <hr>

                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Nombre">
                                            </div>

                    <div class="form-group">
                        <input type="url" name="link" class="form-control" placeholder="Link">
                                            </div>

                    <div class="form-group">
                        <input type="number" name="price" class="form-control" placeholder="Precio">
                                            </div>

                    <div class="form-group">
                        <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>