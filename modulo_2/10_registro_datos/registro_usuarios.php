<?php

require_once 'conexion.php';

try {
  // Guardar los datos
  if (isset($_POST['registrar'])) {
    // Capturar los datos
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Validaciones
    if (empty($nombre)) {
      throw new Exception("El nombre no puede estar vacio", 1);
    }

    if (empty($usuario)) {
        throw new Exception("El usuario no puede estar vacio", 2);
    }

    if (empty($contrasena)) {
        throw new Exception("La contraseña no puede estar vacia", 3);
    }

    // Verificar si el usuario existe en la base de datos
    $sql = "SELECT id, name, username FROM users WHERE username LIKE '%$usuario%' ";

    $datos = $conexion->query($sql)->fetchAll();

    if (count($datos) > 0) {
      throw new Exception("Ya existe este usuario. Elija otro", 1);
    }

    // Encriptar la contraseña
    $contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

    // Insertar
    $sql = "INSERT INTO users 
            (name, username, password)
            VALUES
            (\"$nombre\", \"$usuario\", \"$contrasena\")
            ";

    $resultado = $conexion->exec($sql);

    if ($resultado) {
      header("Location: login.php");
      exit;
    } else {
      echo "No se guardó";
    }

  }
}
catch(PDOException $x) {
  die($x->getMessage());
}
catch(Exception $e) {
    
  $error = [
    'codigo' => $e->getCode(),
    'mensaje' => $e->getMessage()
  ];

}

// Incluir la vista
require_once 'vistas/registro_usuarios.html.php';