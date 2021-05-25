<?php
    include ("db.php");

    if(isset($_GET['id_capturaDos'])) {
        $id_capturaDos = $_GET['id_capturaDos'];
        $query = "DELETE FROM prueba_capturados WHERE id_capturaDos = $id_capturaDos";
        $result = mysqli_query($conn, $query);
        if (!$result){
            die("Fallo En La Consulta");
        }
    
        $_SESSION['message'] = "CAMPOS LLAVE ELIMINADOS CORRECTAMENTE";
        $_SESSION['message_type'] = 'danger';
        header("Location: capturaDos.php");
    }


?>