<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - Prueba</title>
    <style>
    
    </style>
</head>
<body>

<form action="formPrueba.php" method="POST">
    <?php

    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        $campos = array();

        if($nombre == ""){
            array_push($campos, "Los campos estan vacios");
        }
        if($apellido == "" || strlen($apellido) < 5){
            array_push($campos, "No puede tener menos de 5 caracteres");
        }
        if (count($campos) > 0) {
           echo "<div class='error'>";
           for($i=0; $i <  count($campos); $i++){
                echo "<li>".$campos[$i]."</div>";
           }
        }else{
            echo "<div class='correcto'>
                    Datos Correctos";
        }
        echo "</div>";
    }

    ?>


    <p>Nombre <br>
    <input type="text" name="nombre">
    </p>

    <p>Apellido <br>
    <input type="text" name="apellido" id="">
    </p>
    <p>
    <input type="submit" value="Enviar datos">
    </p>
</form>
    
</body>
</html>