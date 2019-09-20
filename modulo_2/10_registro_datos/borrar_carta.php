<?php

require_once 'conexion.php';

if (isset($_POST['borrar'])) {
  $id = $_POST['id'];

  // Borrado físico
  // $sql = "DELETE FROM cartas WHERE id = $id";

  // Borrado lógico
  $sql = "UPDATE cartas SET activo = 0 WHERE id = $id";

  $eliminado = $conexion->exec($sql);
  
  if ($eliminado) {
    echo "Eliminado";
  } else {
    echo "No eliminado";
  }

  header("Location: lista_cartas.php");
  exit;
}