<!-- <link rel="stylesheet" href="assets/css/main.css"> -->
<div class="content-wrapper">
  <br>
  
  <!--  -->
          <div>
            <ul class="breadcrumb">
              <li> <a href="index.php"> <i class="fa fa-home fa-lg"></i></a> </li>
              <li> <a href="?c=campos"> Campos / </a> </li>
              <li> <?=$tituloCampos?> Campos Llave</li>
            </ul>
          </div>
         <hr>
        <div class="page-title">
          <div class="tFormCliente">
            <h5 class="th4Formcliente"><i class="fas fa-user-edit"></i> CAMPOS LLAVE:</h5>
            <br>
            <h5>Ingresa datos para registar campos llave</h5>
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
                    action="?c=campos&a=GuardarCampos">
                      <fieldset>
                        <legend class="tregFormC"> <?=$tituloCampos?> campos llave</legend>
                        <div class="form-group">
                            <input class="formI" name="idCllave" type="hidden" 
                            value="<?=$p->getidCllave()?>">

                        <div class="form-group">
                        <label class="col-lg-10 control-label" for="fgo">Fecha Generacion Oficio</label>
                            <div class="col-lg-10">
                            <input required class="formI" name="fgo" type="date" placeholder="Fecha Oficio"
                            value="<?=$p->getfechaGen()?>">
                            </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-10 control-label" for="noc">Nº Oficio Coactivos</label>
                          <div class="col-lg-10">
                            <input required class="formI" name="noc" type="number"
                            value="<?=$p->getnOfiCoactivos()?>">
                        <br></div>
                        </div>
                        <br>
                        
                        <div class="form-group">
                          <label class="col-lg-10 control-label" for="npj">Nº Proceso Judicial</label>
                          <div class="col-lg-10">
                            <input required class="formI" name="npj" type="number"
                            value="<?=$p->getnProJudicial()?>">
                        <br></div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-10 control-label" for="ncj">Nº Cuenta Judicial</label>
                          <div class="col-lg-10">
                            <input required class="formI" name="ncj" type="number"
                            value="<?=$p->getnCuentaJudicial()?>">
                        <br></div>
                        </div>

                        <hr>
                        <div class="form-group1">
                          <div class="col-lg-10 col-lg-offset-2">   
                            <a class="btn btn-primary" href="?c=campos">
                            <i class="fas fa-arrow-circle-left"></i></a>

                            <!-- <a href="?c=configCliente"> Atras </a> -->
                            <!-- <button class="btn btn-default" type="reset">Cancelar</button> -->
                            <button class="btn btn-success btn-flat" type="submit">Enviar</button>
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