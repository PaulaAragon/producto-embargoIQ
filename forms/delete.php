<?php

include ("db.php");

if(isset($_GET['idCllave'])) {
    $idCllave = $_GET['idCllave'];
    $query = "DELETE FROM camposllave WHERE idCllave = $idCllave";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("Fallo En La Consulta");
    }

    $_SESSION['message'] = "CAMPOS LLAVE ELIMINADOS CORRECTAMENTE";
    $_SESSION['message_type'] = 'danger';
    header("Location: editarCampos.php");
}

if(isset($_GET['idCv'])) {
    $idCv = $_GET['idCv'];
    $query = "DELETE FROM consultavinculos WHERE idCv = $idCv";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("Fallo En La Consulta");
    }

    $_SESSION['message'] = "REGISTROS ELIMINADOS CORRECTAMENTE";
    $_SESSION['message_type'] = 'danger';
    header("Location: editarConsultaV.php");
}



?>