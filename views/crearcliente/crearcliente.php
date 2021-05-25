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
    <link rel="stylesheet" href="../../css/estilos14.css">
</head>
<body>
    
    <div class="container">
        <nav class="nav-main">
            <img src="../../img/iq.jpg" alt="LogoIQ" class="nav-brand">
            <ul class="nav-menu">
                <li>
                    <a href="../../prueba/index.php">Inicio</a>
                </li>
                <li>
                    <a href="../../modulos.php">Modulos</a>
                </li>
                <li>
                    <a href="../../capturaDos/capturaDos.php">
                    Captura Fase-Dos</a>
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

  <h2 class="tcliente">CONFIGURACIÓN CLIENTE</h2>
  <br>

  <section class="section-register">
    <!--TIPO FILE / RECIBIRLO CON METODO POST / AÑADIR SIEMPRE ENCTYPE = ARCHIVO DONDE SE PROCESARAN LAS IMAGENES-->
    <form action="../../registroCliente.php" method="post" enctype="multipart/form-data" class="form-register">
    <h3>Formulario Registro Clientes</h3>
        <input class="controls" type="text"REQUIRED  name="nombreCliente" placeholder="Nombre Cliente">
          <!-- <h5 class="h1t">Seleccionar imagen</h5> -->
          <input class="controls" type="file" REQUIRED name="imagenCliente">
          <hr>
          <input class="botons" type="submit" id="btnCrear" name="Crear" value="Crear Cliente">
          <hr>
          <a href="?c=configCliente" class="btnListCliente">Listado de  Clientes</a>
          <a href="../../index.php" class="btnListCliente">prueba</a>
          <br>
    </form>
  </section>
  <hr><br>

  <?php include '../header14/pie14.php'; ?>