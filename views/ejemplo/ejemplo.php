<?php include("./views/encabezado.php") ?>


    <h2> <?php echo $data["titulo"]; ?> </h2>
    <hr>
    <a href="">Agregar</a>
    <br>
    <table border="1" width="80%">
        <thead>
        <tr>
        <th>Id</th>
        <th>Departamento</th>
        <th>Ciudad</th>
        <th>Entidad Remitente</th>
        <th>Dirección </th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($data["datos"] as $dato) {
                echo "<tr>";
                echo "<td>" .$dato["id"]. "</td>";
                echo "<td>" .$dato["departamento"]. "</td>";
                echo "<td>" .$dato["ciudad"]. "</td>";
                echo "<td>" .$dato["entidadRemitente"]. "</td>";
                echo "<td>" .$dato["direccion"]. "</td>";
                echo "</tr>";
            }  
            ?>
        </tbody>
    </table>
    
</body>
</html>
