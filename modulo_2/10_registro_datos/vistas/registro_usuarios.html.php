<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <form method="post">
        <input type="text" class="form-control" name="nombre" placeholder="nombre">  <br>
        <input type="text" class="form-control" name="usuario" placeholder="usuario"><br>
          <input type="password" class="form-control" name="contrasena" placeholder="contrasena"> <br>
          <button type="submit" class="btn btn-dark" name="registrar">Registrar</button> <br>
          <a href="login.php">Iniciar Sesión</a>
        </form>
      </div>
    </div>
  </div>

</body>
</html>