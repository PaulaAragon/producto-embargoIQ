<?php include("db.php")  ?>
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
                    <a href="../modulos.php">Modulos</a>
                </li>
                <li>
                    <a href="../views/crearcliente/crearcliente.php">Crear Cliente</a>
                </li>
                <!-- <li>
                    <a href="">Captura Fase-Dos</a>
                </li> -->
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

  <div class="content-wrapper">

        <div class="page-title">

  <div id="second-container">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
              <h4 class="tituloSla">CAMPOS LLAVE</h4>
              <hr>
    <table class="table table-border" style="width:100%">
      <thead>
          <tr>
              <th>Fecha Generacion Oficio</th>
              <th>Nº Oficio Coactivos</th>
              <th>Nº Proceso Judicial</th>
              <th>Nº Cuenta Judicial</th>
              <th>Acciones</th>
          
          </tr>
      </thead>
    <tbody>
        
        <?php   
        
        $query = "SELECT * FROM camposllave";
        $result_task = mysqli_query($conn, $query);

        while($row = mysqli_fetch_array($result_task)) {  ?>

            <tr>
                <td> <?php echo $row['fechaGen']  ?> </td>
                <td> <?php echo $row['nOfiCoactivos']  ?> </td>
                <td> <?php echo $row['nProJudicial']  ?> </td>
                <td> <?php echo $row['nCuentaJudicial']  ?> </td>


                <td>
                <a class="btnConfiguracionSla" href="edit.php?idCllave=<?php echo $row['idCllave']?>"> <i class="fas fa-pencil-alt"></i></a>
                <a class="btnConfiguracionDelete" href="delete.php?idCllave=<?php echo $row['idCllave']?>"> <i class="fas fa-calendar-times"></i></a>
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

    <div class="accC">
    <h4 class="btnCrearCliente">
       </a></h4>
            <br><hr><br>
      <a class="btnConfiguracion" href="sla.php">
        <i class="far fa-hand-point-left"></i>  </a>
        <span></span>
      <a class="btnConfiguracion" href="../views/configuracion/configuracion.php"> Prueba buscar</a>
    </div>

</div>
</div>
</div>
</div>
<br><br><br><br><br><br><br><br>
<?php include("../capturaDos/includes/pie14.php");

?>