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
  <link rel="stylesheet" href="css/estilos.css?<?php echo rand(1000, 9000); ?>">
  <link rel="stylesheet" href="">
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
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
  <h1 class="tcliente">CONFIGURACIÓN CLIENTE</h1>
  <br>

  <section class="container flex text-center">
        <!--TIPO FILE / RECIBIRLO CON METODO POST / AÑADIR SIEMPRE ENCTYPE = ARCHIVO DONDE SE PROCESARAN
        LAS IMAGENES-->
  <form action="registroCliente.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <label for="">
          <h5 class="h1t">Nombre Cliente</h5>
        </label>
        <input type="text"REQUIRED class="buscador" name="nombreCliente">

        <label for="">
          <h5 class="h1t">Seleccionar imagen</h5>
        </label>
        <!-- <div class="separador--l"> -->
          <input type="file" REQUIRED name="imagenCliente">
          <input type="submit" class="btnCliente" id="btnCrear"  name="Crear" value="Crear Cliente">
        <!-- </div> -->
        <!-- <div class="separador--l"> -->
          <!-- <button class="btnCliente">Crear cliente</button> -->
        <!-- </div> -->

    </div>
    </form>
  </section>

  <hr>
  <section class="container flex text-center">
    <div class="columna">
      <img src="img/davivienda.jpg" alt="davivienda">
      <a href="modulos.php" class="btnConfiguracion">Configurar</a>
    </div>

    <div class="columna">
      <img src="img/itau.jpg" alt="itau">
      <a href="#" class="btnConfiguracion">Configurar</a>
    </div>

    <div class="columna">
      <img src="img/popular.jpg" alt="popular">
      <a href="#" class="btnConfiguracion">Configurar</a>
    </div>
  </section>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>