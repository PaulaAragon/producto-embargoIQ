<?php

include ("db.php");

if(isset($_POST['save'])){
    $fgo = $_POST['fgo'];
    $noc = $_POST['noc'];
    $npj = $_POST['npj'];
    $ncj = $_POST['ncj'];

    $query = "INSERT INTO camposllave(fechaGen, nOfiCoactivos, nProJudicial, nCuentaJudicial) 
    VALUES ('$fgo', '$noc', '$npj', '$ncj')";
    $resut = mysqli_query($conn, $query);
    if(!$resut){
        die("Query Failed");
    }

    $_SESSION['message'] = 'Campos llave guardados exitosamente';
    $_SESSION['message_type'] = 'success';

    
    header("Location: docNoProcesados.php");
}

?>