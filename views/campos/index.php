<!-- <link rel="stylesheet" href="assets/css/main.css"> -->
<div class="content-wrapper">
  <br>
        <div class="page-title">
          <div>
            <!-- <h1>Data Table</h1> -->
            <ul class="breadcrumb side">
            <a href="index.php"> <li><i class="fa fa-home fa-lg"></i></a></li>
              <li> <a href="?c=campos">Tabla Campos Llave / </a></li>
              <li class="active">Campos registrados</li>
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
              <h4 class="tituloSla">CAMPOS LLAVE</h4>
              <table style="width:100%">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Fecha Generacion Oficio</th>
                  <th>Nº Oficio Coactivos</th>
                  <th>Nº Proceso Judicial</th>
                  <th>Nº Cuenta Judicial</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($this->modelo->ListarCampos() as $r):  ?>
                <tr>
                  <td> <?=$r->idCllave?>  </td>
                  <td> <?=$r->fechaGen?> </td>
                  <td> <?=$r->nOfiCoactivos?> </td>
                  <td> <?=$r->nProJudicial?> </td>
                  <td> <?=$r->nCuentaJudicial?> </td>
                  <td class="accC"> 
                      <a class="btn btn-warning btn-flat" 
                        href="?c=campos&a=FormCrearCampos&idCllave=<?=$r->idCllave?>"> 
                        <i class="fas fa-pen"></i>
                      </a>
                      <a class="btn btn-danger btn-flat" 
                      href="?c=campos&a=Borrar&idCllave=<?=$r->idCllave?>">
                        <!-- <i class="fa fa-lg fa-trash"></i> -->
                        <i class="fas fa-calendar-times"></i>
                      </a>
                     </td>
                </tr>

                <?php endforeach;?>

                </tbody>
                </table>                
                  <div class="accC">
                    <h4 class="btnCrearCliente">
                      <a class="btn btn-primary btn-flat" href="?c=campos&a=FormCrearCampos">
                      <i class="fa fa-lg fa-plus"></i>
                      </a></h4>
                  <!-- </div>

                          <div> -->
                      <a class="btn btn-success btn-flat" href="index.php">
                        <i class="far fa-hand-point-left"></i>
                      </a>
                    </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
