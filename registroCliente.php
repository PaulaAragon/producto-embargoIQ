<?php

    include("models/conBd.php");

    $nombre = $_POST['nombreCliente'];
    $imagen = addslashes(file_get_contents($_FILES['imagenCliente']['tmp_name']));

    $query = "INSERT INTO configcliente(nombreCliente,imagenCliente) VALUES ('$nombre', '$imagen')";
    $result = $conex->query($query);

    if($result){
        echo "Cliente Registrado";
    }else{
        echo "No se registro cliente";
    }


?>
