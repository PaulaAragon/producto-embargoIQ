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
    <link rel="stylesheet" href="css/estilos14.css">
</head>
<body>
    
    <div class="container">
        <nav class="nav-main">
            <img src="img/iq.jpg" alt="LogoIQ" class="nav-brand">
            <ul class="nav-menu">
                <li>
                    <a href="prueba/index.php">Inicio</a>
                </li>
                <li>
                    <a href="../views/crearcliente/crearcliente.php">Crear Cliente</a>
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
    
    <br><hr>
      <section class="container flex">
        <div class="modulos">
            <h3 class="h3M">Modulos</h3>
            <hr><br>
            <a href="forms/docNoProcesados.php" class="btnConfiguracion">Doc No procesados</a>
            <br>
            <a href="nuevacarpeta/mockups/vista/Cons_Am1.php" class="btnModulos">Captura para aplicacion de medidas</a>
            <br><br><br>
            <a href="nuevacarpeta/mockups/vista/Cons_Am.php" class="btnModulos">Prueba / Captura Fase1</a>
            <br><br><br>
            <a href="capturaDos/inicioCapturaDos.php" class="btnModulos">Prueba / Captura Fase2</a>
            <br><br><br>
            <a href="nuevacarpeta/mockups/vista/Cons_Am2.php" class="btnModulos">Captura Especializada</a>
            <br><br><hr>
            

        </div>
        <br> 
        <div class="modulos2">
            <h3 class="h3M">Roles y perfiles</h3>
            <hr><br>
            <a href="#" class="btnModulos">Administrador</a>
            <br><br><br>
            <a href="#" class="btnModulos">Coordinador/Lider</a>
            <br><br><br>
            <a href="#" class="btnModulos">Analista</a>
            <br><br><br>
            <a href="nuevacarpeta/mockups/vista/registro_usuario.php" class="btnModulos">Crear Usuario</a>
            <br><br><hr>
        </div>
      

        <div class="modulos3">
          <h3 class="h3M">Reportes</h3>
          <hr><br>
          <a href="pdf/index.php" class="btnModulos">Estado Bancos Registrados (pdf)</a>
          <br><br><br>
          <a href="excel/excel.php" class="btnModulos">Estado Bancos Registrados (xls)</a>
          <br><br><br>
          <!-- <a href="pdf/index.php" class="btnModulos">Estado de procesos generales</a> -->
          <a href="pdf/reporteCapturaDos/index.php" class="btnModulos">Captura Fase dos (pdf)</a>
          <br><br><br>
          <hr>
      </div>
    </section>
      <hr>
    
    <?php include "views/header14/pie14.php";

    ?>

 


</body>
</html>