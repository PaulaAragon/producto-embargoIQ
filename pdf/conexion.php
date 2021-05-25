<?php

    $mysqli = new mysqli('localhost', 'root', '', 'proyecto');

    if ($mysqli->connect_error) {
        #mensaje
        die ('Error en la conexion' . $mysqli->connect_error);
    }


?>