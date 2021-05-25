<?php
	include_once("../basedatos/conexionBD.php");

	$ID1= $_GET['id'];
	
	$p1= new p();
		$conexion1=$p1->conectar();
		
		$query3="select * from aplicacionmedidas inner join bancos on Banco1_Am = Id_Banco where Id_Am=$ID1";
		$rs1=mysqli_query($conexion1,$query3);
			
		while ($row = mysqli_fetch_array($rs1))
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
	
	
  
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
		<form action="../controlador/controlador.php" method="post">
	<header>
	
		<div class="arriba">
			<div id="header">
		
		<ul class="nav">
			<li><img class="img4"  src="../img/descarga1.png"> 
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
		
			<img  class="im" src="../img/logoiq1.png">
			<div class="radio">
			<input type="radio" style="position:absolute; top:-60%; left: 10%;">

				
			<input type="range" style="unicode-range: 90%; width: 600px;     ">
			</div>
			
			<h1 style="position: absolute; top: 1%; left: 45%; color:#100076"> Aplicacion de medidas</h1>
			<img class="im1" src="data:image/jpg;base64,<?php echo base64_encode($row['Img_Banco']); ?>  " >	
			
		</div>
	</header>
	<section id="pantalla-dividida">
		
		
		
		
		<div class='izquierda'>
		
				
			<img class="img3" src="data:image/jpg;base64,<?php echo base64_encode($row['Img']); ?>  " >	
				
				
			
		</div>
	
		<div class='derecha'>
			
			
		<div>	
			<?php
				
			
			?>
				<div class="rotativo" style="position: absolute; top:25%; left: 99%;">
				<p>recibido	</p>
				</div>
			<p style="position:absolute; top: 18%; left: 46%;">Registro</p>
			<input name="a1" type="text" class="cuadrito1" style="position: absolute; top: 20.5%; left: 43%" readonly value="<?php echo $row['Id_Am']  ?>">	
			 
			<p style="position:absolute; top: 25%; left: 45%;"> Fecha y Hora Recepcion </p>
			<input name="a" type="text" class="cuadrito1" style="position: absolute; top: 31%; left: 43%" readonly value="<?php echo $row['FechaHoraRecepcion']  ?>">	
			
			<p style="position: absolute; top:27% ; left: 60%;"> Banco </p>
			<input name="b" type="text" class="cuadrito" style=" position: absolute; top: 31%; left: 57%" value="<?php echo $row['Banco1_Am']  ?>">	
			
			<p style="position: absolute; top: 27% ; left: 74%;"> Oficina </p>
			<input name="c" type="text" class="cuadrito" style=" position: absolute; top: 31%; left: 71%" >	
			
			<p style="position: absolute; top:27% ; left: 88.5%;"> Correo </p>
			<input name="d"  type="text" class="cuadrito" style=" position: absolute; top: 31%; left: 85%" >
				</div>
		<!--------------------------->	
				<div>
					
				<div class="rotativo" style="position: absolute; top:42%; left:99% ;" >
				<p>consulta de vinculos </p>
				</div>
				
			<p style="position:absolute; top: 39%; left: 46%;"> Tipo Ente </p>
			<input name="e" type="text" class="cuadrito1" style="position: absolute; top: 42%; left: 43%;">	
			<p style="position: absolute; top:37% ; left: 57.5%;">Numero de proceso ente </p>
			<input name="f" type="text" class="cuadrito1" style=" position: absolute; top: 42%; left: 57%;" readonly>	
			
			<p style="position: absolute; top: 37% ; left: 72.5%;"> Numero cuenta deposito judicial </p>
			<input name="g" type="text" class="cuadrito1" style=" position: absolute; top: 42%; left: 71%;" readonly>	
			
			<p style="position: absolute; top:37% ; left: 86%;"> Fecha Generación oficio </p>
			<input name="h" type="text" class="cuadrito1	" style=" position: absolute; top: 42%; left: 85%;" readonly>	
				</div>
			<!------------------------------------------------------------------------>
			
				<div>
			<p style="position:absolute; top: 49%; left: 46%;"> Tipo oficio </p>
			<input name="i" type="text" class="cuadrito" style="position: absolute; top: 52%; left: 43%">		
			<p style="position: absolute; top:49% ; left: 60%;">Etiqueta IQ </p>
			<input name="j" type="text" class="cuadrito" style=" position: absolute; top:52%; left: 57%" >	
			
			<p style="position: absolute; top: 47% ; left: 72.5%;"> Tipo identificacion demandado </p>
			<input name="k" type="text" class="cuadrito" style=" position: absolute; top: 52%; left: 71%" >	
			
			<p style="position: absolute; top:47% ; left: 85.5%;"> Numero identificacion demandado </p>
			<input name="l" type="text" class="cuadrito" style=" position: absolute; top: 52%; left: 85%" >	
				
				</div>
			<!---------------------------------------------------->
			
			<div>
			<p style="position:absolute; top: 57%; left: 46%;"> Banco </p>
			<input name="m" type="text" class="cuadrito" style="position: absolute; top: 60%; left: 43%">	
			<p style="position: absolute; top:57% ; left: 60%;">Cuantia </p>
			<input name="n1" type="text" class="cuadrito" style=" position: absolute; top: 60%; left: 57%" >	
			
			<p style="position: absolute; top: 57% ; left: 74%;">Porcentaje </p>
			<input name="n2" type="text" class="cuadrito" style=" position: absolute; top: 60%; left: 71%" >	
			
			<p style="position: absolute; top:57% ; left: 86.5%;"> Etiqueta Cliente </p>
			<input name="o" type="text" class="cuadrito" style="position: absolute; top: 60%; left: 85%" >
				</div>
		<!------------------------------------------------->
			
			<div>
						
				<div class="rotativo"  style="position: absolute; top:66%;  left: 99%;">
					<p>Respuesta vinculos</p>
					</div>
				
			<p style="position:absolute; top: 71%; left: 44.5%;"> Estado producto </p>
			<input name="p" type="text" class="cuadrito1" style="position: absolute; top: 75%; left: 43%;" readonly>	
			<p style="position: absolute; top:71% ; left: 58%;">Numero Producto </p>
			<input name="q" type="text" class="cuadrito1" style=" position: absolute; top: 75%; left: 57%;" readonly>	
			
			<p style="position: absolute; top: 71% ; left: 71.5%;"> Nombre demandado </p>
			<input name="r" type="text" class="cuadrito1" style=" position: absolute; top: 75%; left: 71%;" readonly>	
				</div>
			<!------------------------------------------------------------------------>
			
			<div>
					
				<div class="rotativo"  style="position: absolute; top: 88%; left: 99%">
					<p>Aplicacion de medidas </p>
					</div>
				
			<p style="position:absolute; top:83%; left:44%;"> Tipo Idendificacion Demandante </p>
			<input name="s" type="text" class="cuadrito" style="position: absolute; top: 89%; left: 43%;">	
			<p style="position: absolute; top:83% ; left: 57.5%;">Numero Identificacion Demandante </p>
			<input name="t" type="text" class="cuadrito" style=" position: absolute; top: 89%; left: 57%;" >	
			
			<p style="position: absolute; top: 84% ; left: 71.5%;"> Nombre demandante </p>
			<input name="u" type="text" class="cuadrito" style=" position: absolute; top: 89%; left: 71%;" >	
				</div>
			<!------------------------------------------------------------------------>
			
				<div>
						
					
			<p style="position:absolute; top: 94%; left: 43%;">Producto a Embargar/Desembargar </p>
			<input name="v" type="text" class="cuadrito" style="position: absolute; top: 100%; left: 43%;">	
			<p style="position: absolute; top:94% ; left: 57.5%;">Numero Producto a Embargar </p>
			<input name="w" type="text" class="cuadrito" style=" position: absolute; top: 100%; left: 57%;" >	
			
			<p style="position: absolute; top: 94% ; left: 72.5%;"> Limite de Embargabilidad </p>
			<input name="x" type="text" class="cuadrito" style=" position: absolute; top: 100%; left: 71%;" >	
			<p style="position: absolute; top:95% ; left: 86.5%;"> Banco Destino </p>
			<input name="y" type="text" class="cuadrito" style=" position: absolute; top: 100%; left: 85%">
				</div>
			<!------------------------------------------------------------------------>
			<div>
				<p style="position: absolute; top:105% ; left: 44%;"> Casual Aclaracion 1 </p>
			<input name="z" type="text" class="cuadrito2" style=" position: absolute; top: 109%; left: 43%;" >
				
				<p style="position: absolute; top:105% ; left: 61%;"> Casual Aclaracion 2</p>
			<input name="z1" type="text" class="cuadrito2" style=" position: absolute; top: 109%; left: 60%;" >
				
				<button type="button" style="position: absolute; top:110%; left:96%; background-color:#00FF5C; font-size:15px;" name="op2" onClick="
					<?php
						$query2="ALTER TABLE aplicacionmedidas ADD CasualAclaracion2 VARCHAR(30) NOT NULL AFTER CasualAclaracion1 ";	$RRR=mysqli_query($con2,$query2);		
		  
			if( $RRR)
			{
			
				
			}
			else{echo"Tabla no ha podido ser creada";}
					
			?>	
						
						"><b><a href="aplicacionmedidas1.php">+</a></b></button>

						
	
				 
			<hr>	
				</div>
	
				
			
</div>
			
			
			
	</section>
	<div class="abajo">
		<input  type="reset"   class="boton" value="Limpiar" style="background:#21D1FF; border: 2px solid #00B4E3; position: absolute; left: 5%;" > 
		<button class="boton"  type="reset"  value="Limpiar 1" style="background: #EBE900; border: 2px solid #DDDC00;position: absolute; left: 49%;"> Error</button>
		
		<button type="submit" value="Guardar" class="boton" style="background:#00FF5C;  border: 2px solid #00D84E; position: absolute; left:85% ;" name="op2" > Guardar </button>
	
	</div>
	<script type="text/javascript">

</script>
	
	</form>
	<?php
}

?>
	</body>
</html>
