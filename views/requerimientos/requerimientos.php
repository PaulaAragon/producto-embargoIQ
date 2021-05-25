<?php include("../../forms/db.php");

        

        //    if(isset($_GET['enviar'])){
        //        $busqueda = $_GET['busqueda'];
        //        $consulta = $conn->query("SELECT * FROM camposllave WHERE idCllave = $id ");

        //        while ($row = $consulta->fetch_array()){
        //            echo $row['idCllave'];
        //        }
        //     //    NO OLVIDAR CERRARLO AL FINAL
        //    }

            // $id = $_POST['idCllave'];

            // $query = "SELECT * FROM camposllave WHERE idCllave = $id";
            // $resultado=mysqli_query($conn, $query);
            // while($row = mysqli_fetch_array($resultado)){

                if(isset($_POST['idCllave'])){
                    $idCllave = $_POST['idCllave'];
                    $query = "SELECT * FROM camposllave WHERE idCllave = $idCllave";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) == 1){
                        $row = mysqli_fetch_array($result);
                        $fgo = $row['fechaGen'];
                        $noc = $row['nOfiCoactivos'];
                        $npj = $row['nProJudicial'];
                        $ncj = $row['nCuentaJudicial'];
                    }

                    $estado1 = $_POST["estado1"];
                    $estado2 = $_POST["estado2"];
                    $estado3 = $_POST["estado3"];
                    $estado4 = $_POST["estado4"];
                    $aux1="";
                    $aux2="";
                    $aux3="";
                    $aux4="";
                    
                    if($estado1==0){
                      $aux1="readonly";
                    }
                    if($estado2==0){
                      $aux2="readonly";
                    }
                    if($estado3==0){
                      $aux3="readonly";
                    }
                    if($estado4==0){
                      $aux4="readonly";
                    }
                }

        ?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> -->
  <link href = "https://fonts.googleapis.com/css2? family = Lora & display = swap" rel = "hoja de estilo ">
  <link rel="stylesheet" href="../../css/estilos.css?<?php echo rand(1000, 9000); ?>">
  <script src="https://kit.fontawesome.com/4c425d671e.js" crossorigin="anonymous"></script>

  <!-- <script src="jquery-3.6.0.js"></script> -->
  <!-- <link rel="stylesheet" href="assets/css/main.css">  ESTILOS DE LA PLANTILLA ASSETS-->
  <title>Proyecto Embargos mvc</title>
</head>

<body>
  <!--MENU-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <div class="container-fluid">
        <a class="navbar-brand" href="../../index.php">
          <img class="logotipo" src="../../img/iq.jpg" alt="iq">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../../index.php">Inicio</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Servicios
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Sector Financiero</a></li>
                <li><a class="dropdown-item" href="#">Sector Salud</a></li>
                <li><a class="dropdown-item" href="#">Sector Industria y comercio</a></li>
                <li><a class="dropdown-item" href="modulos.php">Modulos</a></li>
              </ul>
            <li class="nav-item">
              <a class="nav-link" href="https://www.iqoutsourcing.com/quienes-somos/">Somos</a>
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
  <div>
            <ul class="breadcrumb">
              <li> <a href="../../index.php"> <i class="fa fa-home fa-lg"> </i> </a> </li>
              <li>  <h5> <a href="../configuracion/configuracion.php">  | Configuracion / </a> </h5> </li>
              <li> <h5>  Requerimientos  </h5></li>
            </ul>
          </div>
          <hr>

    <h2 class="tDocNPro">Requerimientos</h2>


    

    <section id="pantalla-divida">
      <div class="izquierda">
          <!-- <h5>Doc No procesados</h5><br> -->
          <!-- <img src="../img/oficio.jpg" alt="oficio" title="oficio"> -->
          <?php  include("../../models/conBd.php");
          $query = "SELECT imagenCliente FROM configcliente WHERE idConfigC = 78";
          $resultado = $conex->query($query);

          while($row = $resultado->fetch_assoc()){
          ?>

          <div> 
          <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagenCliente']);?>" alt="">
          </div>

          <?php
           }
          ?>
          
      </div>

      <div class="derecha">
          <h2 class="tCampLlave">Requerimientos</h2>

        
          
        <section class="sectionR">
            <div class="containerR">
                <div class="itemR">
                    <label for="">Fecha y hora de recepción</label><br>
                    <input <?php echo $aux1; ?> type="date" name="fhr" class="inputR" id="inputRfhr" value="<?php echo $fgo;?>" >
                </div>

                <div class="itemR">
                    <label for="">Banco</label><br>
                    <input type="text" name="banco" class="inputR" >
                </div>

                <div class="itemR">
                    <label for="">Oficina</label><br>
                    <input type="text" name="oficina" class="inputR" >
                </div>
                
                <div class="itemR">
                    <label for=""> Correo</label><br>
                    <input type="email" name="correo" class="inputR" >
                </div>
                
            </div>
            
            <div class="containerR">
                <hr>
                <div class="itemR">
                    <label for=""> Nº Oficio Coactivos</label><br>
                    <input <?php echo $aux2; ?> type="number" name="" class="inputR" value="<?php echo $noc;?>" >
                </div>

                <div class="itemR">
                    <label for=""> Nº Proceso judicial</label><br>
                    <input <?php echo $aux3; ?> type="number" name="" class="inputR" value="<?php echo $npj;?>" >
                </div>

                <div class="itemR">
                    <label for="">Nº Cuenta Judicial</label><br>
                    <input <?php echo $aux4; ?> type="number" name="" class="inputR" value="<?php echo $ncj;?>" >
                </div>

                <div class="itemR">
                    <label for=""> Fecha Generación Oficio</label><br>
                    <input type="date" name="" class="inputR" id="inputRfhr">
                </div> 

            </div>

            <div class="containerR">
                <div class="itemR3">
                    <label for="">Tipo oficio</label><br>
                    <input type="display" name="" class="inputR" >
                </div>

                <div class="itemR3">
                    <label for="">Nº identificación demandado </label><br>
                    <input type="text" name="" class="inputR" id="inputRfhr">
                </div>

                <div class="itemR3">
                    <label for="">Tipo identificación demandado</label><br>
                    <input type="text" name="" class="inputR" id="inputRfhr" >
                </div>

                <div class="itemR3">
                    <label for="">Etiqueta IQ</label><br>
                    <input type="number" name="" class="inputR">
                </div> 

                <div class="itemR3">
                    <label for="">Banco</label><br>
                    <input type="text" name="" class="inputR">
                </div>

                <div class="itemR3">
                    <label for=""> Valor a embargar</label><br>
                    <input type="number" name="" class="inputR" >
                </div>

                <div class="itemR3">
                    <label for="">Porcentaje</label><br>
                    <input type="number" name="" class="inputR" >
                </div>

                <div class="itemR3">
                    <label for="">Etiqueta Cliente</label><br>
                    <input type="number" name="" class="inputR" >
                </div>

                <div class="itemR3">
                    <label for="">Causal de aclaración</label><br>
                    <input type="text" name="" class="inputR" id="inputRCausalA" >
                    <a class="btn btn-success btn-flat"> <i class="fas fa-plus"></i></a>
                </div>      
            </div>

            <div class="containerR">
               <hr>
                <div class="itemR">
                    <label for=""> Estado Producto</label><br>
                    <input type="number" name="" class="inputR" >
                </div>
                
                <div class="itemR">
                    <label for=""> Nº Producto</label><br>
                    <input type="number" name="" class="inputR" >
                </div>

                <div class="itemR">
                    <label for="">Nombre Demandado</label><br>
                    <input type="number" name="" class="inputR" >
                </div>
            </div>

            <div class="form-group1">
                <div class="col-lg-20 col-lg-offset-10">   
                <a class="btn btn-secondary" id="botonesR" >Limpiar  <i class="fas fa-redo-alt"></i></a>
                <a class="btn btn-warning btn-flat" id="botonesR" >Error  <i class="fas fa-times"></i></a>
                <a class="btn btn-success btn-flat" id="botonesR" >Guardar  <i class="fas fa-tasks"></i></a>
                </div>
            </div>
            
        </section>
      </div>

  </section>
  <?php include("../../forms/includes/pie.php") ?>
</body>
</html>