<?php
if (isset($_POST['verificar'])) {
    $edad = $_POST['edad'];

    if ($edad >= 18) {
        echo "joder tio";
       

    } else {
        echo "<p>No puedes ver este sitio</p>";
        
    }
}

require_once 'edad.html.php';
