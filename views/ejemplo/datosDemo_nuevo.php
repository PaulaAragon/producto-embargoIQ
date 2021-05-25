<?php include("./views/encabezado.php") ?>

    <h2> <?php echo $data["titulo"]; ?> </h2>
    <hr>
    <form action="" id="nuevo" name="nuevo" method="POST" autocomplete="off">
    
    Departamento: <input type="text" id="departamento" name="departamento"> <br>
    Ciudad: <input type="text" id="ciudad" name="ciudad"> <br>
    Entidad Remit: <input type="text" id="entidadRemitente" name="entidadRemitente"> <br>
    Dirección: <input type="text" id="direccion" name="direccion"> <br>

    <button id="guardar" name="guardar" type="submit">Guardar Datos Demograficos</button>
    
    
    </form>
