<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/4c425d671e.js" crossorigin="anonymous"></script>
    <title>Configuración Cliente</title>
  </head>
  <body>
    <!--MENU-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
              <img class="logotipo" src="img/iq.jpg" alt="iq">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
              </li>
              
              <!--<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Servicios
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Sector Financiero</a></li>
                  <li><a class="dropdown-item" href="#">Sector Salud</a></li>
                  <li><a class="dropdown-item" href="#">Sector Industria y comercio</a></li>
                </ul> -->
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
        </div> <!--FIN DE .CONTAINER-->
    </nav>

    <br>
    <h4 class="tituloSla">CAMPOS LLAVE</h4>
    
  <form action="" >
    <div class="containerSla">
        <div class="item">
          <label for="">Fecha geración de oficio</label>
          <input type="text" name="fechaGeneracion" id=""> <i class="far fa-edit"></i>
        </div>
        <div class="item">
          <label for="">Nº oficio coactivos</label>
          <input type="text" name="" id=""> <i class="far fa-edit"></i>
        </div>
        <div class="item">
          <label for="">Nº proceso para judicial</label>
          <input type="text" name="" id=""> <i class="far fa-edit"></i>
        </div>
        <div class="item">
          <label for="">Nº cuenta deposito judicial</label>
          <input type="text" name="" id=""> <i class="far fa-edit"></i>
        </div>
    </div>
    </form>
    <li><a href="?c=campos" class="btnConfiguracion" >listar</a></li>
    

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
              <a class="btn btn-info btn-flat" 
              href="?c=configCliente&a=FormCrear&id=<?=$r->idConfigC?>"> 
              <i class="fas fa-user-edit"></i></a>
              <a class="btn btn-warning btn-flat" href="?c=configCliente&a=Borrar&id=<?=$r->idConfigC?>"><i class="fa fa-lg fa-trash"></i></a>
            </td>

        </tr>
        <tr>
            <td>Consulta de vinculos</td>
            <td><input type="time" name="horarioCv" placeholder="Inicio Proceso"></td>
            <td><input type="time" name="periodicidadCv" placeholder="Inicio Proceso"></td>
            <td><input type="date" name="diasDispCv" placeholder="Inicio Proceso"></td>
            
            <td> 
              <a class="btn btn-info btn-flat" 
              href="?c=configCliente&a=FormCrear&id=<?=$r->idConfigC?>"> 
              <i class="fas fa-user-edit"></i></a>
              <a class="btn btn-warning btn-flat" href="?c=configCliente&a=Borrar&id=<?=$r->idConfigC?>"><i class="fa fa-lg fa-trash"></i></a>
            </td>

        </tr>
         <tr>
            <td>Respuesta de consulta de vinculos</td>
            <td><input type="time" name="horarioRCv" placeholder="Inicio Proceso"></td>
            <td><input type="time" name="periodicidadRCv" placeholder="Inicio Proceso"></td>
            <td><input type="date" name="diasDispRCv" placeholder="Inicio Proceso"></td>
            
            <td> 
              <a class="btn btn-info btn-flat" 
              href="?c=configCliente&a=FormCrear&id=<?=$r->idConfigC?>"> 
              <i class="fas fa-user-edit"></i></a>
              <a class="btn btn-warning btn-flat" href="?c=configCliente&a=Borrar&id=<?=$r->idConfigC?>"><i class="fa fa-lg fa-trash"></i></a>
            </td>

        </tr>
        <tr>
            <td>Aplicacion de medidas</td>
            <td><input type="time" name="horarioAm" placeholder="Inicio Proceso"></td>
            <td><input type="time" name="periodicidadAm" placeholder="Inicio Proceso"></td>
            <td><input type="date" name="diasDispAm" placeholder="Inicio Proceso"></td>
            
            <td> 
              <a class="btn btn-info btn-flat" 
              href="?c=configCliente&a=FormCrear&id=<?=$r->idConfigC?>"> 
              <i class="fas fa-user-edit"></i></a>
              <a class="btn btn-warning btn-flat" href="?c=configCliente&a=Borrar&id=<?=$r->idConfigC?>"><i class="fa fa-lg fa-trash"></i></a>
            </td>

        </tr>
        <tr>
            <td>Tiempo de congelación Clientes vip</td>
            <td><input type="time" name="horarioTvip" placeholder="Inicio Proceso"></td>
            <td><input type="time" name="periodicidadTvip" placeholder="Inicio Proceso"></td>
            <td><input type="date" name="diasDispTvip" placeholder="Inicio Proceso"></td>
            
            <td> 
              <a class="btn btn-info btn-flat" 
              href="?c=configCliente&a=FormCrear&id=<?=$r->idConfigC?>"> 
              <i class="fas fa-user-edit"></i></a>
              <a class="btn btn-warning btn-flat" href="?c=configCliente&a=Borrar&id=<?=$r->idConfigC?>"><i class="fa fa-lg fa-trash"></i></a>
            </td>

        </tr>
        <tr>
            <td>Envió de cartas/ respuestas</td>
            <td><input type="time" name="horarioEc" ></td>
            <td><input type="time" name="periodicidadEc" ></td>
            <td><input type="date" name="diasDispEc"></td>

            <td> 
              <a class="btn btn-info btn-flat" 
              href="?c=configCliente&a=FormCrear&id=<?=$r->idConfigC?>"> 
              <i class="fas fa-user-edit"></i></a>
              <a class="btn btn-warning btn-flat" href="?c=configCliente&a=Borrar&id=<?=$r->idConfigC?>"><i class="fa fa-lg fa-trash"></i></a>
            </td>

        </tr>
        <tr>
            <td>Fin Proceso</td>
            <td><input type="time" name="horarioFp" placeholder="Inicio Proceso"></td>
            <td><input type="time" name="periodicidadFp" placeholder="Inicio Proceso"></td>
            <td><input type="date" name="diasDispFp" placeholder="Inicio Proceso"></td> 
            <td> 
              <a class="btn btn-info btn-flat" 
              href="?c=configCliente&a=FormCrear&id=<?=$r->idConfigC?>"> 
              <i class="fas fa-user-edit"></i></a>
              <a class="btn btn-warning btn-flat" href="?c=configCliente&a=Borrar&id=<?=$r->idConfigC?>"><i class="fa fa-lg fa-trash"></i></a>
            </td>
        </tr>
    </table>
    <hr>
       <input type="submit" id="btnAnadir"  name="Anadir" value="Añadir ADS">
        <a class="btn btn-success btn-flat" href="modulos.php">
          <i class="fas fa-arrow-circle-left"></i>
        </a>
        
  </div> 
  </form>
  <?php
    include("models/conBd.php");
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

        <tbody>
        <tr class="thCtp">
            <td rowspan="4" class="tdCtp">Campos Llave</td>
            <td>Nº Oficio</td> 
             <td rowspan="4" class="tdCtp"> <a class="btn btn-info btn-flat" href="#"> <i class="fas fa-user-edit"></i></a>
                      <a class="btn btn-warning btn-flat" href="#"> <i class="fa fa-lg fa-trash"></i></a></td>
        </tr>
            <tr class="thCtp"> <td> N proceso</td> 
            </tr>
          <tr class="thCtp"> <td>Cuenta de deposito judicial</td> 
            </tr>
          <tr class="thCtp"> <td>Fecha generación oficio</td>
            </tr>


        <tr class="thCtp">
          <td rowspan="5" class="thCtp">Consulta de vinculos</td>
          <td>Tipo oficio</td>
          <td rowspan="5" class="tdCtp"> <a class="btn btn-info btn-flat" href="#"> <i class="fas fa-user-edit"></i></a>
                      <a class="btn btn-warning btn-flat" href="#"> <i class="fa fa-lg fa-trash"></i></a></td>
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
            <td rowspan="12" class="tdCtp"> <a class="btn btn-info btn-flat" href="#"> <i class="fas fa-user-edit"></i></a>
                      <a class="btn btn-warning btn-flat" href="#"> <i class="fa fa-lg fa-trash"></i></a></td>
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
          <td rowspan="5" class="tdCtp"> <a class="btn btn-info btn-flat" href="#"> <i class="fas fa-user-edit"></i></a>
                      <a class="btn btn-warning btn-flat" href="#"> <i class="fa fa-lg fa-trash"></i></a></td>
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
 
    
    
</body>
</html>