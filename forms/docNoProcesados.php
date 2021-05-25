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
                    <a href="../prueba/index.php">
                    Inicio</a>
                </li>
                <li>
                    <a href="../modulos.php">Modulos</a>
                </li>
                <li>
                    <a href="../views/crearcliente/crearcliente.php">Crear Cliente</a>
                </li>
                <!-- <li>
                    <a href="../capturaDos/capturaDos.php">Captura Fase-uno</a>
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
  <br>
          <!-- <div>
            <ul class="breadcrumb">
              <li> <a href="index.php"> <i class="fa fa-home fa-lg"> </i> </a> </li>
              <li>  <h5> <a href="../modulos.php">  | Modulos / </a> </h5> </li>
              <li> <h5>  Doc No procesados  </h5></li>
            </ul>
          </div> -->
          <hr>

    <h2 class="tDocNPro">Documentos no procesados</h2>
    <br>
    

    <!-- <h5>Ejemplo barra progreso</h5>
    <div class="contenedor">
        <progress value=20> </progress>
    </div> -->

    <section id="pantalla-divida">
      <div class="izquierda">
          <!-- <h5>Doc No procesados</h5><br> -->
          <!-- <img src="../img/oficio.jpg" alt="oficio" title="oficio"> -->
          <?php  include("../models/conBd.php");
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
        <br><br>
          <h2 class="tCampLlave">Campos Llave</h2>
          <br><hr><br>
          
          <div class="container p-4">
              
            <div class="row">

              <div class="col-md-10">

              <?php if(isset($_SESSION['message'])) {?>

                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                  <?=$_SESSION['message'] ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

              <?php session_unset(); }  ?>

              <div class="card card-body">
                <form action="save.php" method="POST" class="form-docNoProc">
                  <div class="form-group">
                  <label for="fname" class="label-docNoProc">Fecha Generacion Oficio</label><br>
                  <input type="date" name="fgo" class="form-control" placeholder="Fecha Gen Oficio"><br>
                  <label for="lname" class="label-docNoProc">Nº oficio Coactivos</label><br>
                  <input type="number" name="noc" class="form-control" placeholder="Numero oficio Coactivos" ><br>
                  <label for="lname" class="label-docNoProc">Nº Proceso Judicial</label><br>
                  <input type="number" name="npj" class="form-control" placeholder="Numero Proceso Judicial" ><br>
                  <label for="lname" class="label-docNoProc">Nº Cuenta Judicial</label><br>
                  <input type="number" name="ncj" class="form-control" placeholder="Numero Cuenta Judicial" ><br>
                  <p class="center-content">
                  <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar Campos Llave">
                  </p> <br><hr><br>
                  <p class="center-content2">
                  <a href="sla.php">Prueba SLA</a>
                  </p>
                  </div>
                </form>
              </div>
              <br><br><hr><br>

              </div>
                
              <div class="col-md-8">

              </div>
              
            </div>

          </div>
            
      </div>

  </section>

   <!-- FOOTER -->
 
 <!-- PIE DE PAGINA -->
<div class="footer-links">
        <div class="footer-container">
            <ul>
                <li>
                    <a href="https://www.iqoutsourcing.com/">
                    <h3>IQ OUTSOURCING <i class="fas fa-angle-double-right"></i></h3>
                    </a>
                    
                </li>
            </ul>
            <ul>
                <li>
                    <a href="https://www.iqoutsourcing.com/contactenos/">
                        <h3>CONTACTENOS <i class="fas fa-angle-double-right"></i></h3> 
                    </a>
                </li>
                <li>
                    <a href=""></a>
                    <h3>Comuníquese con nuestro PBX +57 (1) 593 1990 o escríbanos al correo:</h3>
                    <h3>Para ventas: comercial@iq-online.com</h3>
                    <h3>Para otros: contacto@iq-online.com</h3>
                </li>
            </ul>
            <ul>
                <li>
                    <a href=""></a>
                    <h3>SEDE PRINCIPAL</h3>
                </li>
                <li>
                    <h3>Cra. 13 A No. 29-24 – Bogotá, Colombia</h3>
                </li>
            </ul>
            <ul>
                <li>
                <section class="social">
                    <p>Redes Sociales</p>
                    <div class="links">
                        <a href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </section>
                </li>
            </ul>
        </div>
    </div>

    <footer class="footer">
        <h3>Producto Embargos | IQ Outsourcing</h3>
    </footer>

      <!-- Scroll Reveal -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="../encabezadoPrueba/main.js"></script>
  
  <?php include("includes/pie.php") ?>
</body>
</html>



