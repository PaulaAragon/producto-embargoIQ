<?php
    include ("db.php");

    if(isset($_GET['idCv'])){
        $idCv = $_GET['idCv'];
        $query = "SELECT * FROM consultavinculos WHERE idCv = $idCv";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $to = $row['tipoOficio'];
            $etiq = $row['etiqueta'];
            $tid = $row['tdocD'];
            $nid = $row['ndocD'];
            $ced = $row['correoD'];
        }
    }
    if (isset($_POST['update'])){
       $idCv = $_GET['idCv'];
       $to = $_POST['to'];
       $etiq = $_POST['etiq'];
       $tid = $_POST['tid'];
       $nid = $_POST['nid'];
       $ced = $_POST['ced'];
 

        $query = "UPDATE consultavinculos set 
        tipoOficio = '$to', etiqueta = '$etiq', tdocD = '$tid', ndocD = '$nid', correoD = '$ced' WHERE idCv = $idCv";
        mysqli_query($conn, $query);
        
        $_SESSION['message'] = "Registros Actualizados ";
        $_SESSION['message_type'] = 'primary';
        header("Location: editarConsultaV.php");

    }

?>

<?php include("includes/encabezado.php") ?>

    <div class="container p-14">
    <div class="formS">
        <div class="row">
            <div class="col-md-14 mx-auto">
                <div class="card card-body">
                <legend class="tregFormC"> Modificar Consulta de vinculos</legend>
                    <form action="editConsultaV.php?idCv=<?php echo $_GET['idCv'];?>" method="POST">
                        <div class="form-group">
                            <label class="col-lg-10 control-label" for="to">Tipo Oficio</label>
                            <input class="formI" type="text" name="to" value="<?php echo $to;?>"
                            class="form-control" placeholder="Editar Tipo Oficio">
                        </div><br>
                        <div class="form-group">
                        <label class="col-lg-10 control-label" for="etiq">Etiqueta</label>
                            <input class="formI" type="text" name="etiq" value="<?php echo $etiq;?>"
                            class="form-control" placeholder="Editar etiqueta ">
                        </div><br>
                        <div class="form-group">
                        <label class="col-lg-10 control-label" for="tid">Tipo identificación demandado</label>
                            <input class="formI" type="text" name="tid" value="<?php echo $tid;?>"
                            class="form-control" placeholder="Editar Tipo de identificación">
                        </div><br>
                        <div class="form-group">
                        <label class="col-lg-10 control-label" for="nid">Nº identificación demandado</label>
                            <input class="formI" type="number" name="nid" value="<?php echo $nid;?>"
                            class="form-control" placeholder="Editar Nº identificación demandao">
                        </div>
                        <div class="form-group">
                        <label class="col-lg-10 control-label" for="ced">Correo demandado</label>
                            <input class="formI" type="email" name="ced" value="<?php echo $ced;?>"
                            class="form-control" placeholder="Editar Correo del demandado">
                        </div>

                        <hr>
                        <div class="form-group1">
                          <div class="col-lg-10 col-lg-offset-5">   
                            <a class="btn btn-primary" href="editarConsultaV.php">
                            <i class="fas fa-arrow-circle-left"></i></a>

                            <!-- <a href="?c=configCliente"> Atras </a> -->
                            <!-- <button class="btn btn-default" type="reset">Cancelar</button> -->
                            <button class="btn btn-success btn-flat" class="content-center" type="submit"  name="update">Actualizar Consulta de vinculos</button>
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