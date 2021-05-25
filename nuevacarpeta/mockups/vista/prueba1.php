	<?php include_once("../basedatos/conexionBD.php");

	$ID1= $_POST['registro'];
	
	
		$p1= new p();
		$conexion1=$p1->conectar();

		$query3="SELECT * from aplicacionmedidas INNER JOIN bancos on Id_Banco=Banco1_Am where Id_Am=$ID1";
		$rs1=mysqli_query($conexion1,$query3);
			
		while($row = mysqli_fetch_row($rs1))
		{
			?>
			
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<form action="../controlador/controlador1.php" method="post">
	<div class="panel-body">
									
									<h6>Rol</h6>
								 <select  name='Select_nombre' id='Select_id'	  class="form-group col-xs-11">
									 <option value="0"></option>
									 <span class=" error" ></span>
									 <?php
	
			
		 $query = "SELECT * FROM tipooficio";
			$rs1= mysqli_query($conexion1,$query);	   
          while ($valores = mysqli_fetch_array($rs1)) {
            echo '<option value="'.$valores[Id_Tipo].'">'.$valores[Nombre_Tipo].'</option>';
          }
									 ?>
									</select>
								</div>
	<p style="position:absolute; top: 20%; left: 45%;"> Identificacion Registro</p>
			<input name="a1" type="text" class="cuadrito1" style="position: absolute; top: 23%; left: 43%" readonly value="<?php echo $row['Id_Am']  ?>  ">
	
	<p style="position:absolute; top: 25%; left: 45%;"> Banco</p>
			<input name="a1" type="text" class="cuadrito1" style="position: absolute; top: 33%; left: 53%" readonly value="<?php echo $row['Nombre_Banco']  ?>  ">	
	
	
<!--	<div>-->
<!--  <select name='' id='btn'disabled>-->
<!--    <option value="1" selected >No elegido</option>-->
<!--    <option value="2" >Oficio Incompleto</option>-->
<!--    <option value="3">Oficio Ilegible</option>-->
<!--    <option value="4">No es un Oficio</option>-->
<!--  </select>-->
<!--</div>-->

<input type="submit" id="btn" value="ENviar"  name="op4" >
	
	<?php
	
		}
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script><script>
	$("#btn").prop('disabled', false);
$( "#Select_id").change(function() {
  var selector = $("#Select_id  option:selected").val();
  switch(selector){
    
	case "1":
      $("#btn").prop('hidden', true);
      break;
    case "2":
      $("#btn").prop('hidden', true);
      break;
    case "3":
      $("#btn").prop('hidden', true);
      break;
	case "4":
      $("#btn").prop('hidden', false);
      break;
	case "5":
      $("#btn").prop('hidden', true);
      break;
	case "6":
      $("#btn").prop('hidden', true);
      break;
  }
});
	</script>
	</form>
</body>
</html>
