<?php include("db.php")  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Embargos</title>
    <!-- FONT AWESOME -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
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
                    <a href="../prueba/index.php">
                    Inicio</a>
                </li>
                <li>
                    <a href="../views/crearcliente/crearcliente.php">Crear Cliente</a>
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
 

<body class="bodyCaptura2">
  
<div class="content-wrapper">
      <div class="page-title">
        <!-- <div>
          <h1>Data Table</h1>
          <ul class="breadcrumb side">
          <a href="../index.php"> <li><i class="fa fa-home fa-lg"></i></a></li>
            <li> <a href="../modulos.php">/  Modulos  </a> </li>
            <li> /  Captura Fase 2 /</li>
            <li class="active"> Registro Datos-Entidad</li>
          </ul>
        </div> -->
        

    <div id="second-container">
            <div class="col-md-18">
            <div class="card">
                <div class="card-body">
                <h4 class="tituloSla">DATOS ENTIDAD</h4>
                <hr>
    <div class="page-container">
    <div class="table-container">
    <table class="table-cebra">
        <thead>
            <tr>
                <th class="sticky">Banco</th>
                <th>Departamento</th>
                <th>Ciudad</th>
                <th>Dirección</th>
                <th>Entidad remitente del oficio</th>
                <th>Tipo identificación demandante</th>
                <th>Número de identificación del demandante</th>
                <th>Nombre demandante</th>
                <th>Correo electrónico entidad que remite el oficio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php   
        
        $query = "SELECT * FROM prueba_capturados";
        $result_task = mysqli_query($conn, $query);

        while($row = mysqli_fetch_array($result_task)) {  ?>

            <tr>
                <td class="sticky"> <?php echo $row['banco']  ?> </td>
                <td> <?php echo $row['departamento']  ?> </td>
                <td> <?php echo $row['ciudad']  ?> </td>
                <td> <?php echo $row['direccion']  ?> </td>
                <td> <?php echo $row['entidad_remitente'] ?> </td>
                <td> <?php echo $row['tipo_idDemandante'] ?> </td>
                <td> <?php echo $row['numero_idDemandante'] ?> </td>
                <td> <?php echo $row['nombre_demandante'] ?> </td>
                <td> <?php echo $row['correo_entidadRemitente'] ?> </td>


                <td>
                <a class="btnConfiguracionSla" href="edit_captura.php?id_capturaDos=<?php echo $row['id_capturaDos']?>"> <i class="fas fa-pencil-alt"></i></a>
                <a class="btnConfiguracionDelete" href="delete_captura.php?id_capturaDos=<?php echo $row['id_capturaDos']?>"> <i class="fas fa-calendar-times"></i></a>
                </td>
            
            </tr>

        <?php } ?>

        <?php if(isset($_SESSION['message'])) {?>

        <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
        <?=$_SESSION['message'] ?>
        <!-- <button type="button" data-bs-dismiss="alert"></button> -->
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php session_unset(); }  ?>
        
        </tbody>
        
    </table>
    </div>
    
    <div class="accC">
        <br>

      <a class="btnConfiguracion" href="#"> Generar Carta  <i class="fas fa-envelope-open-text"></i></a>
      <a class="btnConfiguracion" href="../pdf/reporteCapturaDos/index.php"> Generar Reporte PDF  <i class="far fa-file-pdf"></i></a>
      <a class="btnConfiguracion" href="../nuevacarpeta/mockups/vista/Cons_Am2.php"> Captura Especializada </a>
      <a class="btnConfiguracion" href="inicioCapturaDos.php"> Atras <i class="far fa-hand-point-left"></i> </a>
      
    </div>
    <br><hr><br>
    

    <!-- </div> -->
    </div>
    </div>
    </div>
    </div>
</div>
<br><br>
<?php 
// include "includes/pie14.php";
?>
</body>



