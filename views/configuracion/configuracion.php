<?php include("../../forms/db.php")  ?>

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

  <script src="jquery-3.6.0.js"></script>
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
      <br>
    <h4 class="tituloSla">BUSCAR | CONFIGURACIÓN PRUEBA</h4>
    <hr>
    
      <div class="container">
  
          <!-- <input class="inputCBuscar" type="search" name="id"  aria-label="Search" > -->
          <div id="centroButton"> 
            <button class="btn btn-outline-success" type="submit" id="myButton" onclick="ShowHideElement()">1.  Tabla Campos Captura</button>
          </div>
          
            <form action="../requerimientos/requerimientos.php" method="POST">
              <br>
              <input type=hidden id="estado1" name="estado1" value="0">
              <input type=hidden id="estado2" name="estado2" value="0">
              <input type=hidden id="estado3" name="estado3" value="0">
              <input type=hidden id="estado4" name="estado4" value="0">
              <input type="search" name="idCllave" class="inputCBuscar" placeholder="Buscar por Nº ID">
              <input type="submit" name="enviar" value="2.  Buscar..." >
            </form>

        <form class="myForm">
            <br>
              <hr>
              <h4 class="tituloSla">CAMPOS DE CAPTURA</h4>

              <div id="second-container">
                <table class="tableCtp"> 
                  <!-- VARIABLES DE SESION / MENSAJE ALERTA  -->
                    <?php if(isset($_SESSION['message'])) {?>

                      <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                        <?=$_SESSION['message'] ?>
                        <button type="button" data-bs-dismiss="alert"></button>
                      </div>

                    <?php session_unset(); }  ?>
                    
                      


                  <tbody>

                    <tr class="thCtp">
                        <td rowspan="4" class="tdCtp" >Campos Llave</td>
                        <td> <input type="button" id="cajaFgo" disabled="" value="Fecha generación oficio" >
                            <button type="button" class="btn btn-success"  onclick="activarcajaFgo()"><i class="far fa-eye"></i>  </button>
                            <button type="button" class="btn btn-secondary btn-flat" onclick="desactivarcajaFgo()"><i class="fas fa-exclamation-circle"></i> </button>
                        </td>
                        <td rowspan="4" class="tdCtp"> 
                          <!-- <a class="btn btn-warning btn-flat" href="../../forms/editarCampos.php">EDITAR  <i class="fas fa-wrench"></i></a> -->
                          <a href="../requerimientos/requerimientos.php">Prueba</a>
                          </td>
                    </tr>
                        <tr class="thCtp"> 
                        <td> <input type="button" id="cajaNo" value="Nº Oficio" disabled="">
                            <button type="button" class="btn btn-success"  onclick="activarcajaNo()"><i class="far fa-check-circle"></i>  </button>
                            <button type="button" class="btn btn-secondary btn-flat" onclick="desactivarcajaNo()"><i class="fas fa-exclamation-circle"></i> </button>
                        </td>
                        
                        </tr>
                      <tr class="thCtp"> 
                        <td> <input type="button" id="cajaNpj" value="Nº proceso judicial" disabled="">
                            <button type="button" class="btn btn-success"  onclick="activarcajaNpj()"><i class="far fa-check-circle"></i>  </button>
                            <button type="button" class="btn btn-secondary btn-flat" onclick="desactivarcajaNpj()"><i class="fas fa-exclamation-circle"></i> </button>
                        </td>
                    </tr>

                      <tr class="thCtp"> 
                        <td> <input type="button" id="cajaCdj" value="Cuenta Deposito Judicial" disabled="">
                            <button type="button" class="btn btn-success"  onclick="activarcajaCdj()"><i class="far fa-check-circle"></i>  </button>
                            <button type="button" class="btn btn-secondary btn-flat" onclick="desactivarcajaCdj()"><i class="fas fa-exclamation-circle"></i> </button>
                        </td>            
                    </tr>


                    <tr class="thCtp">
                      <td rowspan="5" class="thCtp">Consulta de vinculos</td>
                      <td>Tipo oficio</td>
                      <td rowspan="5" class="tdCtp">
                      <a href="../requerimientos/requerimientos.php">Prueba</a>
                      <!-- <a class="btn btn-warning btn-flat" href="#">prueba<i class="fas fa-wrench"></i></a> -->
                    </tr>

                    <tr class="thCtp"> <td>Etiqueta</td>
                    </tr>
                    <tr class="thCtp"> <td>Tipo identificación demandado</td>
                    </tr>
                    <tr class="thCtp"> <td>Numero de identificación demandado</td> 
                    </tr>
                    <tr class="thCtp"> <td>Correo electrónico remitente oficio</td>
                    </tr>


                    <tr class="thCtp">
                        <td rowspan="12" class="thCtp">Aplicación de medidas</td>
                        <td>Banco</td>
                        <td rowspan="12" class="tdCtp"> 
                        <a href="../requerimientos/requerimientos.php">Prueba</a>
                        <!-- <a class="btn btn-warning btn-flat" href="#">prueba<i class="fas fa-wrench"></i></a> -->
                    </tr>

                      <tr class="thCtp"> <td>Tipo producto</td> 
                      </tr>
                      <tr class="thCtp"> <td>Numero de producto a embargar/desembargar</td>
                      </tr>
                      <tr class="thCtp"> <td>Cuantía</td> 
                      </tr>
                      <tr class="thCtp"> <td>Porcentaje</td> 
                      </tr>
                      <tr class="thCtp"> <td>Limite de inembargabilidad</td> 
                      </tr>
                      <tr class="thCtp"> <td>Banco destino</td> 
                      </tr>
                      <tr class="thCtp"> <td>Tipo de identificación  demandante</td> 
                      </tr>
                      <tr class="thCtp"> <td>Numero de identificación demandante</td> 
                      </tr>
                      <tr class="thCtp"> <td>Nombre identificación demandante</td> 
                      </tr>
                      <tr class="thCtp"> <td>Numero de proceso</td> 
                      </tr>
                      <tr class="thCtp"> <td>Casual  aclaración</td> 
                      </tr>


                    <tr class="thCtp">
                      <td rowspan="5" class="thCtp">Datos demográficos</td>
                      <td>Departamento</td>
                      <td rowspan="5" class="tdCtp"> 
                      <a href="../requerimientos/requerimientos.php">Prueba</a>
                      <!-- <a class="btn btn-info btn-flat" href="#"> <i class="fas fa-user-edit"></i></a>
                                  <a class="btn btn-warning btn-flat" href="#"> <i class="fa fa-lg fa-trash"></i></a></td> -->
                    </tr> 
                    
                    <tr class="thCtp"> <td>Ciudad</td> 
                    </tr>
                    <tr class="thCtp"> <td>Entidad que remite el oficio</td> 
                    </tr>
                    <tr class="thCtp"> <td>Dirección</td> 
                    </tr>


                    </tbody>
                </table>

              </div>
        </form>
        
      </div>
      <br><br>
    


 
    
<?php 
  include("../pie.php");
  include("configuracion.js");
?>

<!-- SCRIPT PARA MOSTRAR FORMULARIO -->
<script type="text/javascript">

    $(".myForm").hide();

    function ShowHideElement(){
      let  text = "";

      if($("#myButton").text() === "Mostrar Tabla"){
        $(".myForm").show();
        text = "Ocultar Tabla";
      }else{
        $(".myForm").hide();
        text = "Mostrar Tabla";
      }
      $("#myButton").html(text);
    }

</script>


    
</body>
</html>