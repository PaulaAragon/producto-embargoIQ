<?php

// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'proyecto');
// $con=@mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// mysqli_set_charset($con,'utf_8');
// if(!$con){
//     die("No se pudo conectar: ".mysqli_connect($con));
// }
// if (@mysqli_connect_errno()){
//     die("Conexion Fallo: ".mysqli_connect_errno());
// }

$mysqli = new mysqli('localhost', 'root', '', 'proyecto');

if ($mysqli->connect_error) {
    #mensaje
    die ('Error en la conexion' . $mysqli->connect_error);
}


?>