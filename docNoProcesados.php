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
    <link rel="stylesheet" href="css/estilos.css?<?php echo rand(1000, 9000); ?>">
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
        <a class="navbar-brand" href="index.php">
          <img class="logotipo" src="img/iq.jpg" alt="iq">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
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
              <li> <a href="index.php"> <i class="fa fa-home fa-lg"> </i> </a> </li>
              <li>  <h5> <a href="modulos.php">  | Modulos / </a> </h5> </li>
              <li> <h5>  Doc No procesados  </h5></li>
            </ul>
          </div>
          <hr>

    <h2 class="tDocNPro">Documentos no procesados</h2>
    <br>
    

    <!-- <h5>Ejemplo barra progreso</h5>
    <div class="contenedor">
        <progress value=20> </progress>
    </div> -->

    <section id="pantalla-divida">
      <div class="izquierda">
          <h6>Doc No procesados</h6><br>
          <!-- <input type="file" value="Adjuntar Oficio">
          <br>
          <img src="img/oficio.jpg" alt="oficio" title="oficio"> -->
      </div>

      <div class="derecha">
          <h2 class="tCampLlave">Campos Llave</h2>
            <form action="" >
              <div class="containerNoProc">
                <div class="itemNoProc">
                  <label for="">Fecha geración de oficio</label>
                  <input type="text" name="fechaGeneracion" id=""> <i class="far fa-edit"></i>
                </div>
                <div class="itemNoProc">
                  <label for="">Nº proceso para judicial</label>
                  <input type="text" name="" id=""> <i class="far fa-edit"></i>
                </div>
                <br>
                <div class="itemNoProc">
                  <label for="">Nº oficio coactivos_____</label>
                  <input type="text" name="" id="itemNoProc1"> <i class="far fa-edit"></i>
                </div>
                <div class="itemNoProc">
                  <label for="">Nº cuenta deposito judicial</label>
                  <input type="text" name="" id=""> <i class="far fa-edit"></i>
                </div>
              </div>
              <!-- <button type="button" class="btn btn-success center" id="EnviarDNoP">Enviar</button> -->
              <a href="#" class="btnSaveDNoP">Guardar <i class="far fa-save"> </i> </a> 
              
            </form>
      </div>

  </section>

</body>
</html>