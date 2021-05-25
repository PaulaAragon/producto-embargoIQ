<?php

include ("db.php");

if(isset($_POST['save'])){
    $entidad_remitente = $_POST['entidad_remitente'];
    $numero_idDemandante = $_POST['numero_idDemandante'];
    $tipo_idDemandado = $_POST['tipo_idDemandado'];
    $numero_idDemandado = $_POST['numero_idDemandado'];
    $nombre_demandado = $_POST['nombre_demandado'];

    $query = "INSERT INTO prueba_capturados(entidad_remitente, numero_idDemandante, tipo_idDemandado, numero_idDemandado, 
    nombre_demandado) 
    VALUES ('$entidad_remitente', '$numero_idDemandante', '$tipo_idDemandado', '$numero_idDemandado', '$nombre_demandado')";
    $resut = mysqli_query($conn, $query);
    if(!$resut){
        die("Query Failed");
    }

    $_SESSION['message'] = 'DATOS REGISTRADOS CORRECTAMENTE';
    $_SESSION['message_type'] = 'success';

    
    header("Location: formularioDemandado.php");
}

?>