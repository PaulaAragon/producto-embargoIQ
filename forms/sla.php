<?php include("db.php")  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Embargos</title>
    <!--  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/4c425d671e.js" crossorigin="anonymous"></script>
    <script src="jquery-3.6.0.js"></script>

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
            <a href="../prueba/index.php"></a>
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

    <br>
    <h4 class="tituloSla">CAMPOS LLAVE</h4>
    
  <form action="" >
    <div class="containerSla">
        <div class="item">
          <!-- <label for="">Fecha geración de oficio</label> -->
          <input type="text" name="fechaGeneracion" value="Fecha geración de oficio" disabled=""> <a href="editarCampos.php"><i class="far fa-edit"></i></a>
        </div>
        <div class="item">
          <!-- <label for="">Nº oficio coactivos</label> -->
          <input type="text" name="" value="Nº oficio coactivos" disabled=""> <a href="editarCampos.php"><i class="far fa-edit"></i></a>
          
        </div>
        <div class="item">
          <!-- <label for="">Nº proceso para judicial</label> -->
          <input type="text" name="" value="Nº proceso para judicial" disabled=""> <a href="editarCampos.php"><i class="far fa-edit"></i></a>
        </div>
        <div class="item">
          <!-- <label for="">Nº cuenta deposito judicial</label> -->
          <input type="text" name="" value="Nº cuenta deposito judicial" disabled=""> <a href="editarCampos.php"><i class="far fa-edit"></i></a>
        </div>
    </div>
    </form>    

    <hr>
    <h4 class="tituloSla">ACUERDOS A NIVEL DE SERVICIO (SLA)</h4>

    
    <form method="post">
    <div id="main-container">
    <table>
        <thead>
        <tr>
        <th>____________</th><th>Horario</th><th>Periodicidad</th><th>Días disponibles</th>
        <th>Acciones</th>
        </tr>
        </thead>
        <tr>
            <td>Inicio de proceso</td>
            <td><input type="time" name="horario" placeholder="Inicio Proceso"></td>
            <td><input type="time" name="periodicidad" placeholder="Inicio Proceso"></td>
            <td><input type="date" name="diasDisp" placeholder="Inicio Proceso"></td>
            
            <td> 
              <a class="btnConfiguracionSla" 
              href="?c=configCliente&a=FormCrear&id=<?=$r->idConfigC?>"> 
              <i class="fas fa-user-edit"></i></a>
              <a class="btnConfiguracionDelete" href="?c=configCliente&a=Borrar&id=<?=$r->idConfigC?>">
              <i class="fas fa-trash-alt"></i></a>
            </td>

        </tr>
        <tr>
            <td>Consulta de vinculos</td>
            <td><input type="time" name="horarioCv" placeholder="Inicio Proceso"></td>
            <td><input type="time" name="periodicidadCv" placeholder="Inicio Proceso"></td>
            <td><input type="date" name="diasDispCv" placeholder="Inicio Proceso"></td>
            
            <td> 
              <a class="btnConfiguracionSla" 
              href="?c=configCliente&a=FormCrear&id=<?=$r->idConfigC?>"> 
              <i class="fas fa-user-edit"></i></a>
              <a class="btnConfiguracionDelete" href="?c=configCliente&a=Borrar&id=<?=$r->idConfigC?>"><i class="fa fa-lg fa-trash"></i></a>
            </td>

        </tr>
         <tr>
            <td>Respuesta de consulta de vinculos</td>
            <td><input type="time" name="horarioRCv" placeholder="Inicio Proceso"></td>
            <td><input type="time" name="periodicidadRCv" placeholder="Inicio Proceso"></td>
            <td><input type="date" name="diasDispRCv" placeholder="Inicio Proceso"></td>
            
            <td> 
              <a class="btnConfiguracionSla" 
              href="?c=configCliente&a=FormCrear&id=<?=$r->idConfigC?>"> 
              <i class="fas fa-user-edit"></i></a>
              <a class="btnConfiguracionDelete" href="?c=configCliente&a=Borrar&id=<?=$r->idConfigC?>"><i class="fa fa-lg fa-trash"></i></a>
            </td>

        </tr>
        <tr>
            <td>Aplicacion de medidas</td>
            <td><input type="time" name="horarioAm" placeholder="Inicio Proceso"></td>
            <td><input type="time" name="periodicidadAm" placeholder="Inicio Proceso"></td>
            <td><input type="date" name="diasDispAm" placeholder="Inicio Proceso"></td>
            
            <td> 
              <a class="btnConfiguracionSla" 
              href="?c=configCliente&a=FormCrear&id=<?=$r->idConfigC?>"> 
              <i class="fas fa-user-edit"></i></a>
              <a class="btnConfiguracionDelete" href="?c=configCliente&a=Borrar&id=<?=$r->idConfigC?>"><i class="fa fa-lg fa-trash"></i></a>
            </td>

        </tr>
        <tr>
            <td>Tiempo de congelación Clientes vip</td>
            <td><input type="time" name="horarioTvip" placeholder="Inicio Proceso"></td>
            <td><input type="time" name="periodicidadTvip" placeholder="Inicio Proceso"></td>
            <td><input type="date" name="diasDispTvip" placeholder="Inicio Proceso"></td>
            
            <td> 
              <a class="btnConfiguracionSla" 
              href="?c=configCliente&a=FormCrear&id=<?=$r->idConfigC?>"> 
              <i class="fas fa-user-edit"></i></a>
              <a class="btnConfiguracionDelete" href="?c=configCliente&a=Borrar&id=<?=$r->idConfigC?>"><i class="fa fa-lg fa-trash"></i></a>
            </td>

        </tr>
        <tr>
            <td>Envió de cartas/ respuestas</td>
            <td><input type="time" name="horarioEc" ></td>
            <td><input type="time" name="periodicidadEc" ></td>
            <td><input type="date" name="diasDispEc"></td>

            <td> 
              <a class="btnConfiguracionSla" 
              href="?c=configCliente&a=FormCrear&id=<?=$r->idConfigC?>"> 
              <i class="fas fa-user-edit"></i></a>
              <a class="btnConfiguracionDelete" href="?c=configCliente&a=Borrar&id=<?=$r->idConfigC?>"><i class="fa fa-lg fa-trash"></i></a>
            </td>

        </tr>
        <tr>
            <td>Fin Proceso</td>
            <td><input type="time" name="horarioFp" placeholder="Inicio Proceso"></td>
            <td><input type="time" name="periodicidadFp" placeholder="Inicio Proceso"></td>
            <td><input type="date" name="diasDispFp" placeholder="Inicio Proceso"></td> 
            <td> 
              <a class="btnConfiguracionSla" 
              href="?c=configCliente&a=FormCrear&id=<?=$r->idConfigC?>"> 
              <i class="fas fa-user-edit"></i></a>
              <a class="btnConfiguracionDelete" href="?c=configCliente&a=Borrar&id=<?=$r->idConfigC?>"><i class="fa fa-lg fa-trash"></i></a>
            </td>
        </tr>
    </table>
    <hr>
       <input type="submit" id="btnAnadir"  name="Anadir" value="Añadir ADS">
        
  </div> 
  </form>
  <?php
    include("../models/conBd.php");
    // if($conex) {echo "Todo correcto";}// 
    if(isset($_POST['Anadir'])){
      if (strlen($_POST['horario']) >= 1 &&
          strlen($_POST['periodicidad']) >= 1 &&
          strlen($_POST['diasDisp']) >= 1 ) {

          $horario = trim($_POST['horario']);
          $periodicidad = trim($_POST['periodicidad']);
          $diasDisp = date($_POST['diasDisp']);
          $consulta = "INSERT INTO inicioproceso(horario, periodicidad, diasDisp) VALUES ('$horario', '$periodicidad','$diasDisp')";
          $resultado = mysqli_query($conex,$consulta);
        }

        if (strlen($_POST['horarioCv']) >= 1 &&
          strlen($_POST['periodicidadCv']) >= 1 &&
          strlen($_POST['diasDispCv']) >= 1 ) {

          $horarioCv = trim($_POST['horarioCv']);
          $periodicidadCv = trim($_POST['periodicidadCv']);
          $diasDispCv = date($_POST['diasDispCv']);
          $consultaCv = "INSERT INTO consultavinculos(horarioCv, periodicidadCv, diasDispCv) VALUES ('$horarioCv', '$periodicidadCv','$diasDispCv')";
          $resultadoCv = mysqli_query($conex,$consultaCv);
        }

        if (strlen($_POST['horarioRCv']) >= 1 &&
          strlen($_POST['periodicidadRCv']) >= 1 &&
          strlen($_POST['diasDispRCv']) >= 1 ) {

          $horarioRCv = trim($_POST['horarioRCv']);
          $periodicidadRCv = trim($_POST['periodicidadRCv']);
          $diasDispRCv = date($_POST['diasDispRCv']);
          $consultaRCv = "INSERT INTO rtaconsultavinculos(horarioRCv, periodicidadRCv, diasDispRCv) VALUES ('$horarioRCv', '$periodicidadRCv','$diasDispRCv')";
          $resultadoRCv = mysqli_query($conex,$consultaRCv);
          
        }
        if (strlen($_POST['horarioAm']) >= 1 &&
          strlen($_POST['periodicidadAm']) >= 1 &&
          strlen($_POST['diasDispAm']) >= 1 ) {

          $horarioAm = trim($_POST['horarioAm']);
          $periodicidadAm = trim($_POST['periodicidadAm']);
          $diasDispAm = date($_POST['diasDispAm']);
          $consultaAm = "INSERT INTO aplicacionmedidas(horarioAm, periodicidadAm, diasDispAm) VALUES ('$horarioAm', '$periodicidadAm','$diasDispAm')";
          $resultadoAm = mysqli_query($conex,$consultaAm);
        }

        if (strlen($_POST['horarioTvip']) >= 1 &&
          strlen($_POST['periodicidadTvip']) >= 1 &&
          strlen($_POST['diasDispTvip']) >= 1 ) {

          $horarioTvip = trim($_POST['horarioTvip']);
          $periodicidadTvip = trim($_POST['periodicidadTvip']);
          $diasDispTvip = date($_POST['diasDispTvip']);
          $consultaTvip = "INSERT INTO congelaciontvip(horarioTvip, periodicidadTvip, diasDispTvip) VALUES ('$horarioTvip', '$periodicidadTvip','$diasDispTvip')";
          $resultadoTvip = mysqli_query($conex,$consultaTvip);
        }

        if (strlen($_POST['horarioEc']) >= 1 &&
          strlen($_POST['periodicidadEc']) >= 1 &&
          strlen($_POST['diasDispEc']) >= 1 ) {

          $horarioEc = trim($_POST['horarioEc']);
          $periodicidadEc = trim($_POST['periodicidadEc']);
          $diasDispEc = date($_POST['diasDispEc']);
          $consultaEc = "INSERT INTO enviocartas(horarioEc, periodicidadEc, diasDispEc) VALUES ('$horarioEc', '$periodicidadEc','$diasDispEc')";
          $resultadoEc = mysqli_query($conex,$consultaEc);
        }

        if (strlen($_POST['horarioFp']) >= 1 &&
          strlen($_POST['periodicidadFp']) >= 1 &&
          strlen($_POST['diasDispFp']) >= 1 ) {

          $horarioFp = trim($_POST['horarioFp']);
          $periodicidadFp = trim($_POST['periodicidadFp']);
          $diasDispFp = date($_POST['diasDispFp']);
          $consultaFp = "INSERT INTO finproceso(horarioFp, periodicidadFp, diasDispFp) VALUES ('$horarioFp', '$periodicidadFp','$diasDispFp')";
          $resultadoFp = mysqli_query($conex,$consultaFp);
          if ($resultadoFp){
            ?>
            <h4 class="ok">
              <i class="far fa-calendar-check"> | ADS Añadido correctamente</i>
            </h4>
            <?php
          }else {
            ?>
            <h4 class="bad">No se añadieron ADS</h4>
            <?php
          }
        }else{
            ?>
              <h4 class="bad">
                <i class="fas fa-exclamation-circle"> | Por favor completa los campos</i>
              </h4>
            <?php
        }
  }
  ?>

  <br>
  <br>
  <hr>
  <h4 class="tituloSla">CAMPOS DE CAPTURA</h4>

  <div id="second-container">
    <table class="tableCtp"> 
        <!-- <thead>
        <tr class="trcampCapt">
          <th>Col1</th>  <th>Col2</th>  <th>Acciones</th>
        </tr>
        </thead> -->
<!-- VARIABLES DE SESION / MENSAJE ALERTA  -->
        <?php if(isset($_SESSION['message'])) {?>

          <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
            <?=$_SESSION['message'] ?>
            <button type="button" data-bs-dismiss="alert"></button>
          </div>

        <?php session_unset(); }  ?>

        <tbody>
        <tr class="thCtp">
            <td rowspan="4" class="tdCtp">Campos Llave</td>
            <td>Fecha generación oficio</td> 
             <td rowspan="4" class="tdCtp"> 
                <a class="btnConfiguracionSla" href="editarCampos.php">EDITAR  <i class="fas fa-wrench"></i></a>
            
              </td>
        </tr>
            <tr class="thCtp"> <td>Nº Oficio </td> 
            </tr>
          <tr class="thCtp"> <td>Nº proceso judicial</td> 
            </tr>
          <tr class="thCtp"> <td>Cuenta de deposito judicial</td>
            </tr>


        <tr class="thCtp">
          <td rowspan="5" class="thCtp">Consulta de vinculos</td>
          <td>Tipo oficio</td>
          <td rowspan="5" class="tdCtp">
          <a class="btnConfiguracionSla" href="editarConsultaV.php">EDITAR   <i class="fas fa-wrench"></i></a>
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
            <a class="btnConfiguracionSla" href="#">EDITAR<i class="fas fa-wrench"></i></a>
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
          <a class="btnConfiguracionSla" href="#">EDITAR<i class="fas fa-wrench"></i></a>
        </tr> 
        
        <tr class="thCtp"> <td>Ciudad</td> 
         </tr>
        <tr class="thCtp"> <td>Entidad que remite el oficio</td> 
        </tr>
        <tr class="thCtp"> <td>Dirección</td> 
        </tr>


        </tbody>
    </table><br><br><br><br><br><br>

  </div>
 
    
<?php 
// include("#")
 ?>
    
</body>
</html>