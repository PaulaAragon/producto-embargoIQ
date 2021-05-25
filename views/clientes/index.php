<!-- <link rel="stylesheet" href="assets/css/main.css"> -->
<div class="content-wrapper">
  <br>
        <div class="page-title">
          <div>
            <!-- <h1>Data Table</h1> -->
            <ul class="breadcrumb side">
            <a href="index.php"> <li><i class="fa fa-home fa-lg"></i></a></li>
              <li> <a href="?c=configCliente">Tabla Cliente / </a></li>
              <li class="active">Clientes registrados</li>
            </ul>
          </div>
          <hr>
          <!-- <div>
            <h4 class="btnCrearCliente"><a class="btn btn-primary btn-flat" href="?c=configCliente&a=FormCrear">
              <i class="fa fa-lg fa-plus"></i>
            </a></h4>
          </div> -->
          <!-- <br> -->
        </div>
        <div id="second-container">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th class="nombC">Nombre Cliente</th>
                    <th class="cantC">Cantidad de clientes</th>
                    <th class="imgC">Img</th>
                    <th class="imgC">Acciones</th>
                  </tr>
                </thead>
                  <tbody>
                <?php foreach($this->modelo->Listar() as $r):?>
                  <tr>
                    <td> <?=$r->idConfigC?> </td>
                    <td >  <?=$r->nombreCliente?> </td>
                    <td class="cantC"> <?=$r->cantC?></td>
                    <td> <?//=$r->imgCliente?></td>
                    <td class="accC"> 
                      <a class="btn btn-info btn-flat" 
                        href="?c=configCliente&a=FormCrear&id=<?=$r->idConfigC?>"> 
                        <i class="fas fa-user-edit"></i>
                      </a>
                      <a class="btn btn-warning btn-flat" href="?c=configCliente&a=Borrar&id=<?=$r->idConfigC?>">
                        <!-- <i class="fa fa-lg fa-trash"></i> -->
                        <i class="fas fa-user-minus"></i>
                      </a>
                     </td>
                  </tr>
                <?php endforeach;?>
                </tbody>
                </table>
                
                  <div class="accC">
                    <h4 class="btnCrearCliente"><a class="btn btn-primary btn-flat" href="?c=configCliente&a=FormCrear">
                      <i class="fa fa-lg fa-plus"></i>
                      </a></h4>
                  <!-- </div>

                  <div> -->
                      <a class="btn btn-success btn-flat" href="index.php">
                        <i class="far fa-hand-point-left"></i>
                      </a>
                      <a href="excel/excel.php" class="btnConfiguracion">Generar Reporte XLS</a>
                      <a href="pdf/index.php" class="btnModulos">Reportes</a>
                    </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
