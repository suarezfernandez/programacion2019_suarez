<?php

if ( isset($_GET['id'])) {
    $id = $_GET['id'];
    echo 'Informacion de la carta del ID '  . $id;
}