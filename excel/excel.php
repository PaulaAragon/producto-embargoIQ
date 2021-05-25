<?php

require 'conexion.php';
$query=mysqli_query($mysqli, "SELECT idConfigC, nombreCliente, cantC FROM configcliente");

$doc="configcliente.xls";
header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename='.$doc);
header('Pragma: no-cache');
header('Expires: 0');
echo '<table border=1>';
echo '<tr>';
echo '<th colspan=3>Reporte de cliente</th>';
echo '</tr>';
echo '<tr> 
    <th>Id ConfigCliente</th>
    <th>Nombre</th> 
    <th>Cantidad</th>
    </tr>';
while ($row=mysqli_fetch_array($query)){
    echo '<tr>'; 
    echo '<td>'.$row['idConfigC'].'</td>';
    echo '<td>'.$row['nombreCliente'].'</td>';
    echo '<td>'.$row['cantC'].'</td>';
    echo '</tr>';
}
echo '</table>';
?>