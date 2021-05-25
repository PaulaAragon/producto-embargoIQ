<?php
	include_once("../basedatos/conexionBD.php");

	$ID1= $_POST['registro'];
	
	
		$p1= new p();
		$conexion1=$p1->conectar();
		
		$query3="select * from aplicacionmedidas inner join bancos on Banco1_Am = Id_Banco where Id_Am=$ID1";
		$rs1=mysqli_query($conexion1,$query3);
			
		while($row = mysqli_fetch_assoc($rs1))
		{
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA" content="id-edge">
	
	<title>Alicacion de medidas</title>
	<link  rel="stylesheet" href="../css/estilos.css">
	<!-- boostrap 4-->
<!--			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">-->

</head>

<body>
		<form action="../controlador/controlador.php" method="post">
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
					<li><a href="">submenu4</a></li>
				</ul>
				
			
			</li>
		</ul>
	</div>	
		
			<div>
			<img  class="im" src="../img/logoiq1.png">
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
					

				
			<input type="range" style="unicode-range: 90%; width: 600px;  position: absolute;  top:10%;left: 32% ">
			</div>
			
			<h4 style="position: absolute; top: 1%; left: 45%; color:#100076"> Aplicacion de medidas</h4>
			
				<div class="im1">
			<img src="data:image/jpg;base64,<?php echo base64_encode($row['Img_Banco']); ?>  " >	
			</div>
			
		</div>
	</header>
	<section id="pantalla-dividida">
	
		<div class='izquierda'>
	  
		  <img class="img3" src="data:image/jpg;base64,<?php echo base64_encode($row['Img']); ?>  " >	
		</div>
	
		<div class='derecha'>
			
			
		<div>		
			
			 
			<p style="position:absolute; top: 19%; left: 43%;"> Identificacion Registro</p>
			<input name="a1" type="text" class="cuadrito1" style="position: absolute; top: 22%; left: 43%" readonly value="<?php echo $row['Id_Am']  ?>  ">	
<!--	<div > <?php	if(isset($_SESSION['message'])) {?><div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert"><?=$_SESSION['message'] ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div> <?php session_unset(); }  ?></div>-->

				<div class="rotativo" style="position: absolute; top:26%; left:99%;">
				<p>recibido	</p>
				</div>
			
			<p style="position:absolute; top:28%; left: 45%;"> Fecha y Hora Recepcion </p>
	<input name="a" type="text" class="cuadrito1" style="position: absolute; top: 34%; left: 43%" readonly value="<?php echo $row['FechaHoraRecepcion']  ?>  ">
			
			<p style="position: absolute; top:30% ; left: 60%;"> Banco </p>
			<div>
								<select  name="b" id="" 	  class="cuadrito">
									 <option value="<?php echo $row['Banco1_Am']  ?>" ></option>
									 <span class="nav" ></span>
									 <?php
		 #$query = $mysqli -> query ("SELECT * FROM bancos");
//          while ($valores = mysqli_fetch_array($query3)) {
            echo '<option value="'.$row[Id_Banco].'">'.$row[Nombre_Banco].'</option>';
//		}
									 ?>
			</select>
			</div>
			
<!--			<input name="b" type="text" class="cuadrito" style=" position: absolute; top: 34%; left: 57%;" value=" <?php // $row['Banco1_Am']  ?>"   >	-->
			
			<p style="position: absolute; top: 30% ; left: 74%;"> Oficina </p>
			<input name="c" type="text" class="cuadrito" style=" position: absolute; top: 34%; left: 71%" value="<?php echo $row['Oficina']  ?>  ">	
			
			<p style="position: absolute; top:30% ; left: 88.5%;"> Correo </p>
			<input name="d"  type="text" class="cuadrito" style=" position: absolute; top:34%; left: 85%" value="<?php echo $row['Correo']  ?>  ">
	</div>
		<!--------------------------->	
				<div>
					
				<div class="rotativo" style="position: absolute; top:46%; left:99% ;" >
				<p>consulta de vinculos </p>
				</div>
				
			<p style="position:absolute; top:42%; left: 46%;"> Tipo Ente </p>
			<input name="e" type="text" class="cuadrito1" style="position: absolute; top: 46%; left: 43%;" value="<?php echo $row['TipoEnte']  ?>  ">	
					
			<p style="position: absolute; top:41% ; left: 57.5%;">Numero de proceso ente </p>
			<input name="f" type="text" class="cuadrito1" style=" position: absolute; top:46%; left: 57%;" readonly value="<?php echo $row['NumeroProcesoEnte']  ?>  ">	
			
			<p style="position: absolute; top: 41% ; left: 72.5%;"> Numero cuenta deposito judicial </p>
			<input name="g" type="text" class="cuadrito1" style=" position: absolute; top:46%; left: 71%;" readonly value="<?php echo $row['NumeroCuentaDepositoJudicial']  ?>  ">	
			
			<p style="position: absolute; top:41% ; left: 86%;"> Fecha Generación oficio </p>
			<input name="h" type="text" class="cuadrito1" style="position: absolute; top:46%; left: 85%;" readonly value="<?php echo $row['FechaGeneracionOficio']  ?>  ">	
				</div><a href=""></a>
			<!------------------------------------------------------------------------>
			
				<div>
			<p style="position:absolute; top:52%; left: 46%;"> Tipo oficio </p>
			<input name="i" type="text" class="cuadrito" style="position: absolute; top: 55%; left: 43%" value="<?php echo $row['TipoOficio_Am']  ?>  ">		
					
			<p style="position: absolute; top:52% ; left: 60%;">Etiqueta IQ </p>
			<input name="j" type="text" class="cuadrito" style=" position: absolute; top:55%; left: 57%" value="<?php echo $row['EtiquetaIQ']  ?>  ">	
			
			<p style="position: absolute; top:52% ; left: 72.5%;"> Tipo identificacion demandado </p>
			<input name="k" type="text" class="cuadrito" style=" position: absolute; top: 55%; left: 71%" value="<?php echo $row['TipoIdentificacionDemandado']  ?>  ">	
			
			<p style="position: absolute; top:52% ; left: 85.5%;"> Numero identificacion demandado </p>
			<input name="l" type="text" class="cuadrito" style=" position: absolute; top: 55%; left: 85%" value="<?php echo $row['NumeroIdentificacionDemandado']  ?>  ">	
				
				</div>
			<!---------------------------------------------------->
			
			<div>
			<p style="position:absolute; top: 60%; left: 46%;"> Banco </p>
			<input name="m" type="text" class="cuadrito" style="position: absolute; top: 63%; left: 43%" value="<?php echo $row['Banco2_Am']  ?>  ">	
				
			<p style="position: absolute; top:60% ; left: 60%;">Cuantia </p>
			<input name="n1" type="text" class="cuadrito" style=" position: absolute; top: 63%; left: 57%" value="<?php echo $row['Cuantia']  ?>  ">	
			
			<p style="position: absolute; top: 60% ; left: 74%;">Porcentaje </p>
			<input name="n2" type="text" class="cuadrito" style=" position: absolute; top: 63%; left: 71%" value="<?php echo $row['Porcentaje']  ?>  ">	
			
			<p style="position: absolute; top:60% ; left: 86.5%;"> Etiqueta Cliente </p>
			<input name="o" type="text" class="cuadrito" style="position: absolute; top: 63%; left: 85%" value="<?php echo $row['EtiquetaCliente']  ?>  ">
				</div>
		<!------------------------------------------------->
			
			<div>
						
				<div class="rotativo"  style="position: absolute; top:70%;  left: 99%;">
					<p>Respuesta vinculos</p>
					</div>
				
			<p style="position:absolute; top: 73%; left: 44.5%;"> Estado producto </p>
			<input name="p" type="text" class="cuadrito1" style="position: absolute; top: 77%; left: 43%;" readonly value="<?php echo $row['EstadoProducto']  ?>  ">	
				
			<p style="position: absolute; top:73% ; left: 58%;">Numero Producto </p>
			<input name="q" type="text" class="cuadrito1" style=" position: absolute; top:77%; left: 57%;" readonly value="<?php echo $row['NumeroProducto']  ?>  ">	
			
			<p style="position: absolute; top: 73% ; left: 71.5%;"> Nombre demandado </p>
			<input name="r" type="text" class="cuadrito1" style=" position: absolute; top:77%; left: 71%;" readonly value="<?php echo $row['NombreDemandado']  ?>  ">	
				</div>
			<!------------------------------------------------------------------------>
			
			<div>
					
				<div class="rotativo"  style="position: absolute; top: 90%; left: 99%">
					<p>Aplicacion de medidas </p>
					</div>
				
			<p style="position:absolute; top:86%; left:44%;"> Tipo Idendificacion Demandante </p>
			<input name="s" type="text" class="cuadrito" style="position: absolute; top: 92%; left: 43%;" value="<?php echo $row['TipoIdentificacionDemandante']  ?>  ">	
			<p style="position: absolute; top:86% ; left: 57.5%;">Numero Identificacion Demandante </p>
			<input name="t" type="text" class="cuadrito" style=" position: absolute; top: 92%; left: 57%;" value="<?php echo $row['NumeroIdentificacionDemandante']  ?>  ">	
			
			<p style="position: absolute; top: 88% ; left: 71.5%;"> Nombre demandante </p>
			<input name="u" type="text" class="cuadrito" style=" position: absolute; top: 92%; left: 71%;" value="<?php echo $row['NombreDemandante']  ?>  ">	
				</div>
			<!------------------------------------------------------------------------>
			
				<div>
						
					
			<p style="position:absolute; top: 97%; left: 43%;">Producto a Embargar/Desembargar </p>
			<input name="v" type="text" class="cuadrito" style="position: absolute; top: 103%; left: 43%;"value="<?php echo $row['ProductoEmbargarDesembargar']  ?>  ">	
					
			<p style="position: absolute; top:97% ; left: 57.5%;">Numero Producto a Embargar/Desembargar </p>
			<input name="w" type="text" class="cuadrito" style=" position: absolute; top: 103%; left: 57%;" value="<?php echo $row['NumeroProductoEmbargarDesembargar']  ?>  ">	
			
			<p style="position: absolute; top: 97% ; left: 72.5%;"> Limite de Embargabilidad </p>
			<input name="x" type="text" class="cuadrito" style=" position: absolute; top: 103%; left: 71%;" value="<?php echo $row['LimiteEmbargabilidad']  ?>  ">	
					
			<p style="position: absolute; top:100% ; left: 86.5%;"> Banco Destino </p>
			<input name="y" type="text" class="cuadrito" style=" position: absolute; top: 103%; left: 85%" value="<?php echo $row['BancoDestino_Am']  ?>  ">
				</div>
			<!------------------------------------------------------------------------>
			<div>
				<p style="position: absolute; top:108% ; left: 45%;"> Casual Aclaracion </p>
			<input name="z" id="" type="text" class="cuadrito2" style=" position: absolute; top: 111%; left: 43%;" value="<?php echo $row['CasualAclaracion']  ?>  " >
				
		<div>
			<button type="button" class="btn btn-secundary" style="width:20px; height: 10px;  position: absolute; top:113%; left:96%; background-color:#00FF5C; font-size:15px;" name="op2" onClick=
					"<?php
					 	$query4='ALTER TABLE aplicacionmedidas ADD CasualAclaracion1 varchar(100) AFTER casualaclaracion ' ;
		 				
		 				$rs3=mysqli_query($conexion1,$query4);
		 
					 
					 ?>
					 ">
				<a style="position: absolute; top: 105%; left: 95%;" href="aplicacionmedidas1.php?id=<?php echo $row['Id_Am']?> "><b>+</b></a></button>
				</div>
				
		

						
 	
				 
			<hr>	
				</div>
	
				
			
</div>
			
			
			
	</section>
			<footer>
	<div class="abajo">
		<input  type="reset"   class="boton" value="Limpiar" style="background:#21D1FF; border: 2px solid #00B4E3; position: absolute; left: 47%;" > 
		<button class="boton"  type="reset"  value="Limpiar 1" style="background: #EBE900; border:2px solid #DDDC00;position: absolute; left: 65%;"> Error</button>
		
		<input type="submit" onClick="alerta()" value="Guardar" class="boton" style="background:#00FF5C;  border: 2px solid #00D84E; position: absolute; left:86% ;" name="op9" > 
	
	</div>
			</footer>
			<script>
			function alerta()
				{
					alert("Guardado Correctamente")
				}
			
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
	