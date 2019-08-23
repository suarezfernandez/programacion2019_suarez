<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora php</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="display-4">Calculadora</h1>
        <div class="row">
            <div class="col-md-5">
                <!-- Formulario -->
                <form method="post">
                    <div class="form-group">
                        <label for="num1">Numero 1:</label>
                        <input type="text" name="numero1" id="numero1" class="form-control"value="">
                    </div>

                    <div class="form-group">
                        <label for="num2">Numero 2:</label>
                        <input type="text" name="numero2" id="numero2" class="form-control">
                    </div>

                    <div class="form-gruop">
                        <label for="">Operacion</label>
                        <br>
                        <input type="radio" name="opcion" id="" value="1" class=""> Suma
                        <input type="radio" name="opcion" id="" value="2" class=""> Resta
                        <input type="radio" name="opcion" id="" value="3" class=""> Multiplicación
                        <input type="radio" name="opcion" id="" value="4" class="">  División
                    </div>

                    <div class="form-gruop">
                        <button type="submit" name="calcular" class="btn btn-info">Calcular</button>
                    </div>
                </form>
            </div>

            <!-- Resultado -->
            <div class="col-md-6">
                <?php
                    
                    if (isset($_POST['calcular'])) {
                        //variables
                        $numero1 = $_POST['numero1'];
                        $numero2 = $_POST['numero2'];
                        $opcion = $_POST['opcion'];

                        // Proceso
                        if ($opcion == 1) {
                            $suma = $numero1 + $numero2;
                            echo "<div>Resultado de la suma. $numero1 + $numero2 = $suma</div>";
                        }
                        if ($opcion == 2) {
                            $suma = $numero1 - $numero2;
                            echo "<div>Resultado de la resta. $numero1 - $numero2 = $resta</div>";
                        }
                        if ($opcion == 3 ) {
                            $suma = $numero1 / $numero2;
                            echo "<div>Resultado de la division. $numero1 / $numero2 = $divsion</div>";
                        }
                        if ($opcion == 4) {
                            $multiplicacion = $numero1 * $numero2;
                            echo "<div>Resultado de la suma. $numero1 * $numero2 = $multiplicacion</div>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>