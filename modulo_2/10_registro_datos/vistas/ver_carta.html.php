<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <img src="<?= $carta->link; ?>" alt="imagen">
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h1 class="display-3"><?= $carta->name; ?></h1>
        <p class="lead text-success"><?= $carta->price; ?></p>
        <p>Esto es una descripcion</p>
      </div>
    </div>


  </div>
</body>
</html>