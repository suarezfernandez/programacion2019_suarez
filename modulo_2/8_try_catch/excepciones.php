<?php
try {
    $edad = 2;

    if ($edad < 18) {
        throw new Exception("No puedes acceder");
    }

    echo "Bienvenido";
}
catch (Exception $ex) {
// echo "<pre>";
// print_r($ex);
// echo "</pre>";

$error = $ex->getMessage();

echo "<p>$error</p>";
}

