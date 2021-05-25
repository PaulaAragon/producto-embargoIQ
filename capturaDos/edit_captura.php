<?php
    include ("db.php");

    if(isset($_GET['id_capturaDos'])){
        $id_capturaDos = $_GET['id_capturaDos'];
        $query = "SELECT * FROM prueba_capturados WHERE id_capturaDos = $id_capturaDos";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $banco = $row['banco'];
            $departamento = $row['departamento'];
            $ciudad = $row['ciudad'];
            $direccion = $row['direccion'];
            $entidad_remitente = $row['entidad_remitente'];
            $tipo_idDemandante = $row['tipo_idDemandante'];
            $numero_idDemandante = $row['numero_idDemandante'];
            $nombre_demandante = $row['nombre_demandante'];
            $correo_entidadRemitente = $row['correo_entidadRemitente'];
            $tipo_idDemandado = $row['tipo_idDemandado'];
            $numero_idDemandado = $row['numero_idDemandado'];
            $nombre_demandado = $row['nombre_demandado'];
        }
    }
    if (isset($_POST['update'])){
       $id_capturaDos = $_GET['id_capturaDos'];
       $banco = $_POST['banco'];
       $departamento = $_POST['departamento'];
       $ciudad = $_POST['ciudad'];
       $direccion = $_POST['direccion'];
       $entidad_remitente = $_POST['entidad_remitente'];
       $tipo_idDemandante = $_POST['tipo_idDemandante'];
       $numero_idDemandante = $_POST['numero_idDemandante'];
       $nombre_demandante = $_POST['nombre_demandante'];
       $correo_entidadRemitente = $_POST['correo_entidadRemitente'];
       $tipo_idDemandado = $_POST['tipo_idDemandado'];
       $numero_idDemandado = $_POST['numero_idDemandado'];
       $nombre_demandado = $_POST['nombre_demandado'];

        $query = "UPDATE prueba_capturados set 
        banco = '$banco', departamento = '$departamento', ciudad = '$ciudad', direccion = '$direccion',
        entidad_remitente = '$entidad_remitente', tipo_idDemandante = '$tipo_idDemandante', numero_idDemandante = '$numero_idDemandante',
        nombre_demandante = '$nombre_demandante', correo_entidadRemitente = '$correo_entidadRemitente', tipo_idDemandado = '$tipo_idDemandado', numero_idDemandado = '$numero_idDemandado',
        nombre_demandado = '$nombre_demandado'  WHERE id_capturaDos = $id_capturaDos";
        mysqli_query($conn, $query);
        
        $_SESSION['message'] = "Datos Entidad Actualizados Correctamente";
        $_SESSION['message_type'] = 'primary';
        header("Location: capturaDos.php");

    }

?>

<?php include("includes/encabezado14.php") ?>

<div class="content-wrapper">
      <div class="page-title">
        <!-- <div>
          <ul class="breadcrumb-side">
          <a href="../index.php"> <li><i class="fa fa-home fa-lg"></i></a></li>
            <li> <a href="../modulos.php">/  Modulos  </a> </li>
            <li> /  Captura Fase 2 /</li>
            <li> <a href="capturaDos.php">  Registro Datos-Entidad /  </a> </li>
            <li class="active"> > Edición Datos-Entidad</li>
          </ul>
        </div> -->
    <br><br>
    <div class="container">
    <div class="formCaptura">
        <div class="row g-3">
            <div class="col-md-14 mx-auto">
                <div class="card card-body">
               <hr> <legend class="tregFormC"> Modificar Datos Entidad</legend><hr><br>
                    <form action="edit_captura.php?id_capturaDos=<?php echo $_GET['id_capturaDos'];?>" method="POST">
                        <div class="form-group">
                            <label class="col-lg-10 control-label" for="banco">Banco</label><br>
                            <input class="formI" type="text" name="banco" value="<?php echo $banco;?>"
                            class="form-control" placeholder="Editar Banco">
                        </div><br>
                        <div class="form-group">
                        <label class="col-lg-10 control-label" for="departamento">Departamento</label><br>
                            <input class="formI" type="text" name="departamento" value="<?php echo $departamento;?>"
                            class="form-control" placeholder="Editar Departamento ">
                        </div><br>
                        <div class="form-group">
                        <label class="col-lg-10 control-label" for="ciudad">Ciudad</label><br>
                            <input class="formI" type="text" name="ciudad" value="<?php echo $ciudad;?>"
                            class="form-control" placeholder="Editar Ciudad">
                        </div><br>
                        <div class="form-group">
                        <label class="col-lg-10 control-label" for="direccion">Dirección</label><br>
                            <input class="formI" type="text" name="direccion" value="<?php echo $direccion;?>"
                            class="form-control" placeholder="Editar Nº Cuenta Judicial">
                        </div><br>
                        <div class="form-group">
                        <label class="col-lg-10 control-label" for="entidad_remitente">Entidad Remitente</label><br>
                            <input class="formI" type="text" name="entidad_remitente" value="<?php echo $entidad_remitente;?>"
                            class="form-control" placeholder="Editar entidad_remitente">
                        </div><br>
                        <div class="form-group">
                        <label class="col-lg-10 control-label" for="tipo_idDemandante">Tipo identificación demandante</label>
                            <input class="formI" type="text" name="tipo_idDemandante" value="<?php echo $tipo_idDemandante;?>"
                            class="form-control" placeholder="Editar Ciudad">
                        </div><br>
                        <div class="form-group">
                        <label class="col-lg-10 control-label" for="numero_idDemandante">Numero Identificación Demandante</label>
                            <input class="formI" type="number" name="numero_idDemandante" value="<?php echo $numero_idDemandante;?>"
                            class="form-control" placeholder="Editar Ciudad">
                        </div><br>
                        <div class="form-group">
                        <label class="col-lg-10 control-label" for="nombre_demandante">Nombre Demandante</label>
                            <input class="formI" type="text" name="nombre_demandante" value="<?php echo $nombre_demandante;?>"
                            class="form-control" placeholder="Editar Ciudad">
                        </div><br>
                        <div class="form-group">
                        <label class="col-lg-10 control-label" for="correo_entidadRemitente">Correo Entidad Remitente</label>
                            <input class="formI" type="text" name="correo_entidadRemitente" value="<?php echo $correo_entidadRemitente;?>"
                            class="form-control" placeholder="Editar Ciudad">
                        </div><br>
                       
                        </div>
                        


                        <hr>
                        <div class="form-group1">
                          <div class="col-lg-10 col-lg-offset-5">   
                            <a class="btn btn-primary" href="capturaDos.php">
                            <i class="fas fa-arrow-circle-left"></i></a>

                            
                            <button class="btn btn-success btn-flat" class="content-center" type="submit"  name="update">Actualizar</button>
                          </div>
                        </div>
                    
                    </button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br>


<?php 
// include("includes/pie.php")
 ?>