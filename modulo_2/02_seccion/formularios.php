
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>




    <h1>Bienvenido La Suareta</h1>


       Nombre: <input type="text"name="nombre"value="">

       <input type="submit"/>
       <br>
       <img class="mediana" src="prima.jpg"/>

    
      <input type="text"name="nombre"value="">


    <?php 
    if (isset($_POST['guardar'])) {
    $datos = new stdClass();
    $datos->nombre = $_POST['nombre'];
    $datos->url = $_POST['url'];

    echo "<pre>";
    print_r($datos);
    echo </pre>";
   
    }
     
    ?>
        
</body>
</html>