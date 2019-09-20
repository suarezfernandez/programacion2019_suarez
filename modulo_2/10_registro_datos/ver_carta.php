<?php

require_once 'conexion.php';

if ( isset($_GET['id']) ) {
  $id = $_GET['id'];

  $sql = "SELECT id, name, link, price FROM cartas WHERE id = $id";

  $carta = $conexion->query($sql)->fetch();

  if (!$carta) {
    die("Esta carta no existe");
  }
}

// Incluir la vista
require_once 'vistas/ver_carta.html.php';