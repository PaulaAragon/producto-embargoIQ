<?php
	include_once("../basedatos/conexionBD.php");

	$ID1= $_POST['registro'];
		$p1= new p();
		$conexion1=$p1->conectar();
		
		$query3="select * from tipooficio inner join aplicacionmedidas on Id_Tipo=TipoOficio_Am inner join bancos on Banco1_Am = Id_Banco  where Id_Am='$ID1'";
		
		$rs2=mysqli_query($conexion1,$query3);
			
		while($row = mysqli_fetch_assoc($rs2))
		{      
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA" content="id-edge">
	
	<title>Captura Especializada</title>
	<link  rel="stylesheet" href="../css/estilos.css">
	<!-- boostrap 4-->
<!--			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">-->

</head>

<body>
		
	<header>
	
		<div class="arriba">
			<div id="header">
		
		<ul class="nav">
			<li><img class="img4"  src="../img/descarga.png"> 
				<ul>
					<li><a href="inde.php">Login</a>
						<!--<ul>
							<li>   </li>
							<li><a href="">submenu5</a></li>
							<li><a href="">submenu6</a></li>
						</ul>-->
					</li>
					<li><a href="registro_usuario.php">Registro Usuario</a></li>
					<li><a href="Cons_Am1.php">Aplicacion de medidas</a></li>
					<li><a href="../../../modulos.php">Modulos</a></li>
				</ul>
				
			
			</li>
		</ul>
	</div>	
		
			<div>
				<a href="https://www.iqoutsourcing.com/"><img class="im" src="../img/logoiq1.png"></a>
			</div>
				<div class="radio">
					<p style="position:absolute; top:7%; left: 31%;">Recibido</p>
			<input type="radio" style="position:absolute; top:10%; left: 32%;">
					
					<p style="position:absolute; top:7%; left: 36.5%;">consulta de vinculos</p>
			<input type="radio" style="position:absolute; top:10%; left: 40%;">
					
					<p style="position:absolute; top:7%; left: 47%;">aclaracion</p>
			<input type="radio" style="position:absolute; top:10%; left: 48%;">
					
					<p style="position:absolute; top:7%; left: 53%;">aplicacion medidas</p>
			<input type="radio" style="position:absolute; top:10%; left: 56%;">
					
					<p style="position:absolute; top:5%; left: 63%;">Congelamiento de recursos(vip)</p>
			<input type="radio" style="position:absolute; top:10%; left: 65%;">
					
					<p style="position:absolute; top:7%; left: 72.5%;">Procesado</p>
			<input type="radio" style="position:absolute; top:10%; left: 74%;">
	
			<input type="range" style="unicode-range: 90%; width: 600px;  position:absolute; top:10%; left:32% ">
			</div>
			
			<h4 style="position:absolute; top:0%; left:49%; color:#100076"> Captura Especializada</h4>
			
				<div class="im1">
					<a href="<?php echo $row['Enlace']?>"><img src="data:image/jpg;base64,<?php echo base64_encode($row['Img_Banco']); ?>  " >	</a>
			</div>
			
		</div>
	</header>
	<form action="../controlador/controlador.php" method="post">
	<section id="pantalla-dividida">
		
		
	<div class='izquierda'>
			 <img class="img3" src="data:image/jpg;base64,<?php echo base64_encode($row['Img']); ?>  " >	
		</div>
	
		<div class='derecha'>

		<div>		
				
			<p style="position:absolute; top:29%; left:43%;"> Identificacion Registro</p>
			<input name="a" type="text" class="cuadrito1" style="position: absolute; top:33%; left:43%" readonly value="<?php echo $row['Id_Am']  ?>  ">	
		
			<p style="position:absolute; top:29%; left:60%;"> Banco </p>
			<input name="b" type="text" class="cuadrito" style=" position: absolute; top:33%; left:57%;" value="<?php echo $row['Banco1_Am']  ?>">	
			<p style="position:absolute; top:29%; left:74%;"> Oficina </p>
			<input name="c" type="text" class="cuadrito" style=" position: absolute; top:33%; left:71%;" value="<?php echo $row['Oficina']  ?>  ">
			
			<p style="position:absolute; top:28%; left:87%;">Fecha y Hora Recepcion </p>
			<input name="d" type="text" class="cuadrito1" style="position:absolute; top:33%; left:85%;" readonly value="<?php echo $row['FechaHoraRecepcion']?>  ">
			
	</div>
		<!--------------------------->	
				<div>
				
			<p style="position:absolute; top:42%; left:45%;">Numero Oficio</p>
			<input name="e" type="text" class="cuadrito1" style="position: absolute; top: 46%; left: 43%;" value="<?php echo $row['NumeroProductoEmbargarDesembargar']  ?>  ">	
					
			<p style="position:absolute; top:40%; left:57.5%;">Numero de proceso ente </p>
			<input name="f" type="text" class="cuadrito1" style=" position: absolute; top:46%; left: 57%;" readonly value="<?php echo $row['NumeroProcesoEnte']  ?>  ">	
			
			<p style="position: absolute; top:40% ; left: 72.5%;"> Numero cuenta deposito judicial </p>
			<input name="g" type="text" class="cuadrito1" style=" position: absolute; top:46%; left: 71%;" readonly value="<?php echo $row['NumeroCuentaDepositoJudicial']  ?>  ">	
			
			<p style="position: absolute; top:40% ; left: 86%;"> Fecha Generaci??n oficio </p>
			<input name="h" type="text" class="cuadrito1" style="position: absolute; top:46%; left: 85%;" readonly value="<?php echo $row['FechaGeneracionOficio']?>">	
				</div><a href=""></a>
			<!------------------------------------------------------------------------>
			<div>
				
					<p style="position:absolute; top:53%; left: 46%;"> Tipo oficio </p>
				
					<div style="position:absolute; top:57%; left:43%; " >
				<select  name='Select_nombre' id='Select_id'	class="cuadrito3"  >
									 <option value="<?php echo $row['TipoOficio_Am'] ?>"></option>
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
			
			<p style="position: absolute; top:52% ; left: 57%;">Producto Embargar/Desembargar </p>
			<input name="j" type="text" class="cuadrito" style=" position: absolute; top:59%; left: 57%" value="<?php echo $row['ProductoEmbargarDesembargar']  ?>  ">
				
			<p style="position:absolute; top:52%; left: 71%;"> Numero Cuenta Embargar/Desembargar </p>
			<input name="i" type="text" class="cuadrito" style="position: absolute; top:59%; left:71%" value="<?php echo $row['NumeroProductoEmbargarDesembargar']  ?>  ">		
					

			<p style="position:absolute; top:51%; left:85.5%;"> Documento No procesable</p>
			<div style="position: absolute; top: 57%; left: 85%;"> 
  			<select name='' id='btn'disabled class="cuadrito3">
    		<option value="1" selected >No elegido</option>
    		<option value="2" >Oficio Incompleto</option>
    		<option value="3">Oficio Ilegible</option>
    		<option value="4">No es un Oficio</option>
  			</select>
			</div>

			
			
			
				</div>
			<!---------------------------------------------------->
			
			<div>
			<p style="position:absolute; top:66%; left:46%;"> Banco </p>
			<input name="m" type="text" class="cuadrito" style="position: absolute; top:72%; left:43%" value="<?php echo $row['Banco2_Am']  ?>  ">	
			
			<p style="position:absolute; top:65%; left:58%;"> Tipo identificacion demandado </p>
			<input name="k" type="text" class="cuadrito" style=" position: absolute; top:72%; left:57%" value="<?php echo $row['TipoIdentificacionDemandado']  ?>  ">	
			
			<p style="position:absolute; top:65%; left:71%;"> Numero identificacion demandado </p>
			<input name="l" type="text" class="cuadrito" style="position: absolute; top:72%; left:71%" value="<?php echo $row['NumeroIdentificacionDemandado'] ?>  ">	
				
			<p style="position: absolute; top:67%; left:85.5%;"> Nombre Demandado </p>
			<input name="o" type="text" class="cuadrito" style="position: absolute; top:72%; left:85%" value="<?php echo $row['NombreDemandado']  ?>  ">
					
			</div>
			
			<!--------------------->
			<div>
			
				<p style="position:absolute; top:80%; left:46%;"> Cuantia </p>
			<input name="k" type="text" class="cuadrito" style=" position: absolute; top:85%; left:43%" value="<?php echo $row['Cuantia']  ?>  ">	
			
			<p style="position:absolute; top:80%; left:60%;"> Porcentaje </p>
			<input name="l" type="text" class="cuadrito" style="position: absolute; top:85%; left:71%" value="<?php echo $row['Porcentaje'] ?>  ">	
				
			<p style="position: absolute; top:79%; left:73%;"> Limite De Embargabilidad </p>
			<input name="o" type="text" class="cuadrito" style="position: absolute; top:85%; left:57%" value="<?php echo $row['LimiteEmbargabilidad']  ?>  ">
			
			<p style="position: absolute; top:80%; left:86.5%;"> Banco Destino </p>
			<input name="o" type="text" class="cuadrito" style="position: absolute; top:85%; left:85%" value="<?php echo $row['BancoDestino_Am']  ?>  ">
			
			
			</div>
		
	
	<div >
		<input type="reset" class="boton" value="Limpiar" style="background:#21D1FF; border:2px solid #00B4E3; position:absolute; left:47%; top:95%;">
		
		<button class="boton" type="reset" value="Limpiar 1" style="background: #EBE900; border:2px solid #DDDC00;position:absolute; left:65%; top:95% ;"> Error</button>
		<button class="boton" type="reset" value="Limpiar 1" style="background: grey; border:2px solid grey;position:absolute; left:65%; top:105% ;"> Generar Csv</button>
		<input type="submit" onClick="alerta()" value="Guardar" class="boton" style="background:#00FF5C; border:2px solid #00D84E; position:absolute; left:86%; top:95%;" name="op7" > 
	
	</div>
		</div>
			</section>
<!--			</form>-->
			<script>
			function alerta()
				{
					alert("Guardado Correctamente")
				}
				
				
			
			</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
	<script>
	$("#btn").prop('disabled', false);
$( "#Select_id").change(function() {
  var selector = $("#Select_id  option:selected").val();
  switch(selector){
    
	case "1":
      $("#btn").prop('disabled', true);
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
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	</form>
	</body>
</html>
	<?php
}

	?>