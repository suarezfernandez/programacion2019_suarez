<?php

session_start();

require_once 'conexion.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Buscar esos datos en la base de datos
    $sql = "SELECT  id, name, username FROM users
        WHERE   username = '$username' AND password = '$password'";

    $resultado = $conexion->query($sql)->fetch();

    if ($resultado)  {
       $_SESSION['id_user'] = $resultado['id'];
       $_SESSION['name_user'] = $resultado['name'];

   header("location: registro_cartas.php");
   exit;

    }else {
       echo "no existe";
   }
}
// incluir la vista
require_once "vistas/login.html.php";