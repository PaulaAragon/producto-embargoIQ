<?php include("db.php")  ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="../css/estilos.css?<?php echo rand(1000, 9000); ?>">
    <script src="https://kit.fontawesome.com/4c425d671e.js" crossorigin="anonymous"></script>
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Lora & display = swap" rel = "hoja de estilo ">
    <link rel="stylesheet" href="">
    <title>Documentos No Procesados</title>
</head>
<body>
    
     <!--MENU-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">
          <img class="logotipo" src="../img/iq.jpg" alt="iq">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
            </li>

            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Servicios
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Sector Financiero</a></li>
                <li><a class="dropdown-item" href="#">Sector Salud</a></li>
                <li><a class="dropdown-item" href="#">Sector Industria y comercio</a></li>
              </ul> -->
              <li>
                    <a href="../modulos.php">Modulos</a>
                </li>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </div>
    <!--FIN DE .CONTAINER-->
  </nav>
  <br>

  <div class="content-wrapper">
  <br>
        <div class="page-title">
          <div>
            <!-- <h1>Data Table</h1> -->
            <ul class="breadcrumb side">
            <a href="../index.php"> <li><i class="fa fa-home fa-lg"></i></a></li>
              <li> <a href="#">Tabla Consulta de vinculos / </a></li>
              <li class="active">Datos Registrados</li>
            </ul>
          </div>
          <hr>

  <div id="second-container">
          <div class="col-md-15">
            <div class="card">
              <div class="card-body">
              <h4 class="tituloSla">CONSULTA DE VINCULOS</h4>
              <hr>
    <table class="table table-border" style="width:100%">
    <thead>
        <tr>
            <th>Tipo oficio</th>
            <th>Etiqueta</th>
            <th>Tipo de identicación demandado</th>
            <th>Numero de identificación demando</th>
            <th>Correo electronico demandado</th>
            <th>Acciones</th>
        
        </tr>
    </thead>
    <tbody>
        
        <?php   
        
        $query = "SELECT * FROM consultavinculos";
        $result_task = mysqli_query($conn, $query);

        while($row = mysqli_fetch_array($result_task)) {  ?>

            <tr>
                <td> <?php echo $row['tipoOficio']  ?> </td>
                <td> <?php echo $row['etiqueta']  ?> </td>
                <td> <?php echo $row['tdocD']  ?> </td>
                <td> <?php echo $row['ndocD']  ?> </td>
                <td> <?php echo $row['correoD']  ?> </td>
                <td>
                <a class="btn btn-warning btn-flat" href="editConsultaV.php?idCv=<?php echo $row['idCv']?>"> <i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-flat" href="delete.php?idCv=<?php echo $row['idCv']?>"> <i class="fas fa-calendar-times"></i></a>
                </td>
            
            </tr>

        <?php } ?>

        <?php if(isset($_SESSION['message'])) {?>

          <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
            <?=$_SESSION['message'] ?>
            <button type="button" data-bs-dismiss="alert"></button>
          </div>

        <?php session_unset(); }  ?>
        
    </tbody>
    
    </table>

    <div class="accC">
    <h4 class="btnCrearCliente">
      <!-- <a class="btn btn-primary btn-flat" href="?c=campos&a=FormCrearCampos"> -->
      <!-- <i class="fa fa-lg fa-plus"></i> -->
       </a></h4>
                  <!-- </div>

           <div> -->
      <a class="btn btn-success btn-flat" href="sla.php">
        <i class="far fa-hand-point-left"></i>
      </a>
    </div>

</div>
</div>
</div>
</div>