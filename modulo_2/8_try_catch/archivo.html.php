<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir Archivos</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="animate.css">
</head>
<body>
<div class="container">
        <div class="border w-50 mx-auto my-5">
            <h1 class="display-4 text-center">Subir archivo</h1>
            <div class="mb-4">
            <form action="" method="post" enctype="multipart/form-data" class="form-gruop">
                <input type="file" name="archivo" id="archivo" class="d-block my-3 mx-auto">
            <?php 
                if (isset($mensaje) && !empty($mensaje)) {
                    echo "<div class='container'><p class='alert alert-success mx-auto w-75'>{$mensaje}</p></div>";
                }
                if (isset($error) && !empty($error)) {
                    echo "<div class='container'><p class='alert alert-danger mx-auto w-75'>{$error}</p></div>";
                }
            ?>
                <button type="submit" name="subir" class="d-block my-2 mx-auto btn btn-outline-secondary w-75 ">Subir archivo</button>
            </form>
            </div>
        </div>
        
    </div>



</body>
</html>