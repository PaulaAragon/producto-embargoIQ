<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Embargos</title>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- FONT OSWALD -->
        <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> -->
    <link href = "https://fonts.googleapis.com/css2? family = Lora & display = swap" rel = "hoja de estilo ">
    <!-- CUSTOMS CSS -->
    <link rel="stylesheet" href="../css/estilos14.css">
</head>
<body>
    
    <div class="container">
        <nav class="nav-main">
            <img src="../img/iq.jpg" alt="LogoIQ" class="nav-brand">
            <ul class="nav-menu">
                <li>
                    <a href="../prueba/index.php">Inicio</a>
                </li>
                <li>
                    <a href="../views/crearcliente/crearcliente.php">
                    Crear Cliente</a>
                </li>
                <li>
                    <a href="../modulos.php">Modulos</a>
                </li>
            </ul>
            <ul class="nav-menu-right">
                <li>
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <hr>
    <!-- FIN NAV -->
<body>
    <br><br><br><hr><br>
    <?php if(isset($_SESSION['message'])) {?>

<div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
  <?=$_SESSION['message'] ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php session_unset(); }  ?>
    <h2 class="tituloInicioCaptura">FORMULARIO REGISTRO DEMANDADO</h2>
        <div class="contenedor-formularioDemandado">
        <form action="save.php" method="POST" class="form-registroDemandad">
        <!-- <form action="" method="POST" class="form-registroDemandado"> -->
                <h3 class="titulo-registroDemandado">CREAR REGISTRO</h3>
                <div class="contenedor-inputs">
                    <input type="text" name="entidad_remitente" 
                        placeholder="Entidad Remitente" class="input100" required>

                    <input type="number" name="numero_idDemandante" 
                        placeholder="Numero ID Demandante" class="input100" required>

                    <input type="text" name="tipo_idDemandado"
                        placeholder="Tipo ID Demandado" class="input50" required>

                    <input type="number" name="numero_idDemandado"
                        placeholder="Numero Identificacion Demandado" class="input50" required>

                    <input type="text" name="nombre_demandado"
                        placeholder="Nombre Demandado" class="input50" required>

                    <input type="submit" class="btnRegitroDemandado" name="save" value="GUARDAR REGISTRO">
                    <a href="capturaDos.php"class="btnRegitroDemandado" >DATOS ENTIDAD</a>
                </div>
            </form>
        </div>
        

    
</body>
</html>