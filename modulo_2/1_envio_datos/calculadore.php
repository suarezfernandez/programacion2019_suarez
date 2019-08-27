<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora php</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
</head>
<body>
    <div class="container">
        <h1 class="display-4 animated bounceInDown">Calculadora</h1>
        <div class="row">
            <div class="col-md-5">
                <!-- Formulario -->
                <form method="post">
                    <div class="form-group">
                        <label for="num1" class="animated bounceInLeft">Numero 1:</label>
                        <input type="text" name="num1" id="num2" class="form-control animated fadeIn delay-1s">
                    </div>

                    <div class="form-group">
                        <label for="num2" class="animated bounceInLeft">Numero 2:</label>
                        <input type="text" name="num2" id="num2" class="form-control animated fadeIn delay-1s">
                    </div>

                    <div class="form-gruop">
                        <label for="opcion" class="animated fadeIn delay-1s">Operacion</label>
                        <br>
                        <input type="radio" name="opcion" id="" value="1" class="animated fadeIn delay-1s"> Suma
                        <input type="radio" name="opcion" id="" value="2" class="animated fadeIn delay-1s"> Resta
                        <input type="radio" name="opcion" id="" value="3" class="animated fadeIn delay-1s"> Multiplicación
                        <input type="radio" name="opcion" id="" value="4" class="animated fadeIn delay-1s">  División
                    </div>

                    <div class="form-gruop">
                        <button type="submit" name="calcular" class="btn btn-info animated bounceInUp">Calcular</button>
                    </div>
                </form>
            </div>

            <!-- Resultado -->
            <div class="col-md-6">
                <?php

                echo "<pre>";
                print_r($_POST);
                echo "</pre>";

                if(isset($_POST['calcular'])) {
                    // Variables
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $opcion = $_POST['opcion'];

                    // Proceso
                    if($opcion == 1){
                        $suma = $num1 + $num2;
                        echo "<div>Resultado de la suma. $num1 + $num2 = $suma</div>";
                    } else if($opcion == 2){
                        $resta = $num1 - $num2;
                        echo "<div>Resultado de la resta. $num1 - $num2 = $resta</div>";
                    } else if($opcion == 3){
                        $multiplicacion = $num1 * $num2;
                        echo "<div>Resultado de la resta. $num1 * $num2 = $multiplicacion</div>";
                    } else if($opcion == 4){
                        $division = $num1 / $num2;
                        echo "<div>Resultado de la resta. $num1 / $num2 = $division</div>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>