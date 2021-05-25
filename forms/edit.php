<?php
    include ("db.php");

    if(isset($_GET['idCllave'])){
        $idCllave = $_GET['idCllave'];
        $query = "SELECT * FROM camposllave WHERE idCllave = $idCllave";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $fgo = $row['fechaGen'];
            $noc = $row['nOfiCoactivos'];
            $npj = $row['nProJudicial'];
            $ncj = $row['nCuentaJudicial'];
        }
    }
    if (isset($_POST['update'])){
       $idCllave = $_GET['idCllave'];
       $fgo = $_POST['fgo'];
       $noc = $_POST['noc'];
       $npj = $_POST['npj'];
       $ncj = $_POST['ncj'];

        $query = "UPDATE camposllave set 
        fechaGen = '$fgo', nOfiCoactivos = '$noc', nProJudicial = '$npj', nCuentaJudicial = '$ncj' WHERE idCllave = $idCllave";
        mysqli_query($conn, $query);
        
        $_SESSION['message'] = "Campos LLave Actualizados Correctamente";
        $_SESSION['message_type'] = 'primary';
        header("Location: editarCampos.php");

    }

?>

<?php include("../capturaDos/includes/encabezado14.php") ?>

    <div class="container p-14">
    <div class="formPRUEBADOS">
        <div class="row">
            <div class="col-md-11 mx-auto">
                <div class="card card-body">
                <legend class="tregFormC"> Modificar campos llave</legend><br><hr><br>
                    <form action="edit.php?idCllave=<?php echo $_GET['idCllave'];?>" method="POST">
                        <div class="form-group">
                            <label class="col-lg-10 control-label" for="fgo">Fecha Generación Oficio</label>
                            <input class="formI" type="date" name="fgo" value="<?php echo $fgo;?>"
                            class="form-control" placeholder="Editar Fecha G">
                        </div><br>
                        <div class="form-group">
                        <label class="col-lg-10 control-label" for="noc">Nº Oficio Coactivos</label>
                            <input class="formI" type="number" name="noc" value="<?php echo $noc;?>"
                            class="form-control" placeholder="Editar Nº ">
                        </div><br>
                        <div class="form-group">
                        <label class="col-lg-10 control-label" for="npj">Nº Proceso Judicial</label>
                            <input class="formI" type="number" name="npj" value="<?php echo $npj;?>"
                            class="form-control" placeholder="Editar Nº Proceso Judicial">
                        </div><br>
                        <div class="form-group">
                        <label class="col-lg-10 control-label" for="ncj">Nº Cuenta Judicial</label>
                            <input class="formI" type="number" name="ncj" value="<?php echo $ncj;?>"
                            class="form-control" placeholder="Editar Nº Cuenta Judicial">
                        </div>

                        <hr>
                        <div class="form-group1">
                          <div class="col-lg-10 col-lg-offset-5">   
                            <a class="btn btn-primary" href="editarCampos.php">
                            <i class="fas fa-arrow-circle-left"></i></a>

                            <!-- <a href="?c=configCliente"> Atras </a> -->
                            <!-- <button class="btn btn-default" type="reset">Cancelar</button> -->
                            <button class="btn btn-success btn-flat" class="content-center" type="submit"  name="update">Actualizar</button>
                          </div>
                        </div>

                    <!-- <button class="btn btn-success btn-flat" class="content-center" type="submit"  name="update"> -->
                    
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("includes/pie.php") ?>