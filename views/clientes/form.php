<!-- <link rel="stylesheet" href="assets/css/main.css"> -->
<div class="content-wrapper">
  <br>
          <div>
            <ul class="breadcrumb">
              <li> <a href="index.php"> <i class="fa fa-home fa-lg"></i></a> </li>
              <li> <a href="?c=configCliente"> Datos registrados / </a> </li>
              <li> <?=$titulo?> Cliente</li>
            </ul>
          </div>
         <hr>
    <div class="page-title">
          <div class="tFormCliente">
            <h5 class="th4Formcliente"><i class="fas fa-user-edit"></i> CLIENTES:</h5>
            <br>
            <h5>Ingresa datos para registar nuevo cliente</h5>
          </div>
          <br>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="formS">
              <div class="row">
                <div class="#">
                <br>
                  <div class="#">
                    <form class="form-horizontal" method="POST" 
                    action="?c=configCliente&a=Guardar">
                      <fieldset>
                        <legend class="tregFormC"> <?=$titulo?> Cliente</legend>
                        <div class="form-group">
                            <input class="formI" name="idConfigC" type="hidden" 
                            value="<?=$p->getIdConfigC()?>">

                            <label class="col-lg-2 control-label" for="Nombre">Nombre</label>
                          <div class="col-lg-10">
                            <input required class="formI" name="Nombre" type="text" placeholder="Nombre Cliente"
                            value="<?=$p->getnombreCliente()?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Cantidad">Cantidad</label>
                          <div class="col-lg-10">
                            <input required class="formI" name="Cantidad" type="number" placeholder="Cantidad"
                            value="<?=$p->getcantC()?>">
                        <br></div>
                        </div>
                        <br>  
                        <!-- <div>
                        <label for="">
                            <h5 class="#">Seleccionar imagen</h5>
                            </label>
                            <div class="separador--l">
                            <input class="formI" name="imagenCliente" type="longbloc" >
                            <input type="file"  name="imagenCliente" class="formI">
                        </div> -->
                        <hr>
                        <div class="form-group1">
                          <div class="col-lg-10 col-lg-offset-2">
                          
                        <a class="btn btn-primary" href="?c=configCliente">
                        <i class="fas fa-arrow-circle-left"></i>
                        </a>

                            <!-- <a href="?c=configCliente"> Atras </a> -->
                            <!-- <button class="btn btn-default" type="reset">Cancelar</button> -->
                            <button class="btn btn-success btn-flat" type="submit">Actualizar Datos</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><hr><br>