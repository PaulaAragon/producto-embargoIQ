<?php

include "views/encabezado.php";
include "views/pie.php";

?>
<body class="bodyCaptura2">
  
<div class="content-wrapper">
    <br>
      <div class="page-title">
        <div>
          <!-- <h1>Data Table</h1> -->
          <ul class="breadcrumb side">
          <a href="../index.php"> <li><i class="fa fa-home fa-lg"></i></a></li>
            <li> <a href="#">Captura Fase 2 / </a></li>
            <li class="active">Actulizar Datos-Entidad</li>
          </ul>
        </div>
        <hr>

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
                <th>Tipo identificación demandado</th>
                <th>Numero identificación demandado</th>
                <th>Nombre demandado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td class="sticky">Banco Bogota</td>
            <td>Cundinamarca</td>
            <td>Bogota</td>
            <td>Cra 7 bis # 03</td>
            <td>DIAN</td>
            <td>NIT</td>
            <td>98749878743</td>
            <td>DIAN</td>
            <td>diancolombia@gmail.com</td>
            <td>CC</td>
            <td>47922929</td>
            <td>Jose Perez</td>
            <td>
                <a class="btn btn-warning btn-flat" href="#"> <i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-flat" href="#"> <i class="fas fa-calendar-times"></i></a>
            </td>
            </tr>

            <tr>
            <td class="sticky">Banco Itau</td>
            <td>Caldas</td>
            <td>Manizalez</td>
            <td>Clle 9 a # 92</td>
            <td>Cooperativas S.A</td>
            <td>NIT</td>
            <td>74974237492</td>
            <td>Cooperativas S.A</td>
            <td>ciudadania@cooperativas.co</td>
            <td>CC</td>
            <td>54736377</td>
            <td>Juan Torres</td>
            <td>
                <a class="btn btn-warning btn-flat" href="edit.php?idCllave=<?php echo $row['idCllave']?>"> <i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-flat" href="delete.php?idCllave=<?php echo $row['idCllave']?>"> <i class="fas fa-calendar-times"></i></a>
            </td>
            </tr>

            <tr>
            <td class="sticky">Banco Davivienda</td>
            <td>Sucre</td>
            <td>Sincelejo</td>
            <td>Cra 76 bis # 23</td>
            <td>Cooperativa Sucre S.A</td>
            <td>NIT</td>
            <td>209802934</td>
            <td>Cooperativa Sucre S.A</td>
            <td>cooperativasucre@gmail.com</td>
            <td>CC</td>
            <td>76353536</td>
            <td>Maria Rocha</td>
            <td>
                <a class="btn btn-warning btn-flat" href="edit.php?idCllave=<?php echo $row['idCllave']?>"> <i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-flat" href="delete.php?idCllave=<?php echo $row['idCllave']?>"> <i class="fas fa-calendar-times"></i></a>
            </td>
            </tr>

            <tr>
            <td class="sticky">Banco Popular</td>
            <td>Cundinamarca</td>
            <td>Bogota</td>
            <td>Av 85 # 75 - 52</td>
            <td>Secretaria de Movilidad</td>
            <td>NIT</td>
            <td>6836283769</td>
            <td>Secretaria de Movilidad</td>
            <td>contacto@movilidadbogota.gov</td>
            <td>CC</td>
            <td>102938484</td>
            <td>Sara Avila</td>
            <td>
                <a class="btn btn-warning btn-flat" href="edit.php?idCllave=<?php echo $row['idCllave']?>"> <i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-flat" href="delete.php?idCllave=<?php echo $row['idCllave']?>"> <i class="fas fa-calendar-times"></i></a>
            </td>
            </tr>

            <tr>
            <td class="sticky">Banco Itau</td>
            <td>Cundinamarca</td>
            <td>Bogota</td>
            <td>Clle 8 bis # 85-52</td>
            <td>Secretaria de Movilidad</td>
            <td>NIT</td>
            <td>68398930</td>
            <td>Secretaria de Movilidad</td>
            <td>contacto@movilidadbogota.gov</td>
            <td>CC</td>
            <td>37923783</td>
            <td>Alfonzo Gomez</td>
            <td>
                <a class="btn btn-warning btn-flat" href="edit.php?idCllave=<?php echo $row['idCllave']?>"> <i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-flat" href="delete.php?idCllave=<?php echo $row['idCllave']?>"> <i class="fas fa-calendar-times"></i></a>
            </td>
            </tr>

            <tr>
            <td class="sticky">Banco Davivienda</td>
            <td>Antioquia</td>
            <td>Medellin</td>
            <td>Cra 10 bis # 32 a</td>
            <td>Secretaria de Movilidad</td>
            <td>NIT</td>
            <td>7393987387</td>
            <td>Secretaria de Movilidad</td>
            <td>contactociudadano@movilidad.gov</td>
            <td>CC</td>
            <td>102938484</td>
            <td>Camilo Diaz</td>
            <td>
                <a class="btn btn-warning btn-flat" href="edit.php?idCllave=<?php echo $row['idCllave']?>"> <i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-flat" href="delete.php?idCllave=<?php echo $row['idCllave']?>"> <i class="fas fa-calendar-times"></i></a>
            </td>
            </tr>

        </tbody>
    </table>
    </div>

    
    <div class="accC">
    <h4 class="btnCrearCliente">
       </a></h4>

      <a class="btn btn-success btn-flat" href="#"> Atras </a>
      <a class="btn btn-secondary btn-flat" href="#"> Generar Carta</a>
    </div>

    </div>
    </div>
</div>
</div>
</div>
</div>
</body>