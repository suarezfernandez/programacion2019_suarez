<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio1</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1> hipotenusa de un triangulo</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="number">Base</label>
                        <input type="number" name="base">
                    </div>

                    <div class="form-group">
                        <label for="number">Altura</label>
                        <input type="number" name="altura">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="exe" class="btn btn-dark">Calcular</button>
                    </div>

                    
                </form>
                <?php 

                if (isset($_POST['exe'])) {

                    $base = $_POST['base'];
                    $altura = $_POST['altura'];

                    $Hipotenusa = sqrt(pow($base,2) + pow($altura,2));

                    echo "<div class='alert alert-danger'>Hipotenusa: $Hipotenusa</div>";
                }
                
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>