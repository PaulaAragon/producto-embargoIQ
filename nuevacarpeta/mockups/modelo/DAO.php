<?php
require_once("../basedatos/conexionBD.php");

class DAO
{
	public $res;
	public $res1;
	public $res2;
	public $con2;
	public function Login($I2,$C2)
	{
		$i2=$I2;
		$c2=$C2;
		
		$res=new p();  
		$con2=$res->conectar();
		
		$sql= "SELECT * FROM usuario Where Clave_Usuario='$c2' and Correo_Usuario= '$i2' ";
//		$sql1= "SELECT * FROM usuario WHERE Correo_Usuario='$i2'";
		//mysqli_real_escape_string($i2),mysqli_real_escape_string($c2);
		
		$res7= mysqli_query($con2,$sql);
		 $R=mysqli_fetch_row($res7);
		
		if($R==true)	
		{			
		 
			echo"ingreso aprobado<br>";	
			header("location:../../../prueba/index.php");
		
		}else
		{	
			header("location:../vista/index.php");
			echo "<h4 style=' position:absolute; '> Correo o contraseña incorrectos</h4>";
		}
		mysqli_close ($con2);
			return $res7;
	}
	
	public function Actualizar($CEDULA11)
	{
		require_once("../basedatos/conexionBD.php");
		$c1= new p();
		$cc=$c1->conectar();
		$this->M4=$CEDULA11;
		$query1="SELECT
    a1.Id_Am,
	a1.Id_Am as IDD,
    a1.FechaHoraRecepcion,
    b1.Nombre_Banco AS Banco1_Am,
    a1.Oficina,
    a1.Correo,
    a1.TipoEnte,
    a1.NumeroProcesoEnte,
    a1.NumeroCuentaDepositoJudicial,
    a1.FechaGeneracionOficio,
    t1.Nombre_Tipo AS TipoOficio_Am,
    a1.EtiquetaIQ,
    a1.TipoIdentificacionDemandado,
    a1.NumeroIdentificacionDemandado,
    b3.Nombre_Banco AS Banco2_Am,
    a1.Cuantia,
    a1.Porcentaje,
    a1.EtiquetaCliente,
    a1.EstadoProducto,
    a1.NumeroProducto,
    a1.NombreDemandado,
    a1.TipoIdentificacionDemandante,
    a1.NumeroIdentificacionDemandante,
    a1.NombreDemandante,
    a1.ProductoEmbargarDesembargar,
    a1.NumeroProductoEmbargarDesembargar,
    a1.LimiteEmbargabilidad,
    b2.Nombre_Banco AS BancoDestino_Am,
    a1.CasualAclaracion
FROM
    bancos AS b1
INNER JOIN aplicacionmedidas AS a1
ON
    b1.Id_Banco = a1.Banco1_Am
INNER JOIN bancos AS b2
ON
    b2.Id_Banco = a1.BancoDestino_Am
INNER JOIN tipooficio AS t1
ON
    a1.TipoOficio_Am = t1.Id_Tipo
INNER JOIN bancos AS b3
ON
    b3.Id_Banco = a1.Banco2_Am WHERE Id_Am=$this->M4";

        #$query1="SELECT * FROM aplicacionmedidas inner join bancos on Id_Banco= Banco1_Am   where Id_Am=$this->M4";
        $resultado4=mysqli_query($cc,$query1);         
         
	
	      while ($columna = mysqli_fetch_array( $resultado4 ))
			{
			  
			echo"  <!doctype html>";
			echo "<html>";
            echo "<head>";
	echo "<meta charset='utf-8'>";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
			  echo "<meta http-equiv='X-UA' content='id-edge'>";
	
	echo "<title>Alicacion de medidas</title>";
	echo "<link  rel='stylesheet' href='../css/estilos.css'>";
	echo "<link href='https://fonts.googleapis.com/css?family=Work+Sans:300,400,600,700,900&display=swap' rel='stylesheet'>";
	
  	echo "<script src='http://code.jquery.com/jquery-1.11.1.min.js'></script>";
    echo "<script src='http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>";
    echo "</head>";

	echo "<body>";
	echo "<form action='../controlador/controlador.php' method='post'>";
	echo "<header>";
	
	echo "<div class='arriba'>";
	echo "<div id='header'>";
		
	echo "<ul class='nav'>";
	echo "<li><img class='img4'  src='../img/descarga1.png'>";
	echo "			<ul>";
	echo"				<li><a href=''>submenu1</a>";
    echo "						<ul>";
    echo"							<li>   </li>";
    echo"							<li><a href=''>submenu3</a></li>";
	echo"						<li><a href=''>submenu4</a></li>";
    echo"						</ul>";
    echo"					</li>";
    echo"					<li><a href=''>submenu2</a></li>";
	echo"				<li><a href=''>submenu3</a></li>";
	echo"				<li><a href=''>submenu4</a></li>";
	echo"			</ul>";
				
			
	echo"		</li>";
	echo"	</ul>";
	echo"</div>";	
		
	echo"		<img  class='im' src='../img/logoiq1.png'>";
	echo"		<div class='radio'>";
	echo"		<input type='range' style='unicode-range:90%; width:600px;' >";
	echo"		</div>";
			
	echo"		<h1 style='position:absolute; top:1%; left:45%; color:#100076'> Aplicacion de medidas</h1>";
			  
		include_once("../basedatos/conexionBD.php");
			
			$res= new p();
			$con2=$res->conectar();
			
			$query4= "SELECT Img_Banco FROM aplicacionmedidas inner join bancos on Id_banco= Banco1_Am where Id_Am=$this->M4  ";
			$resultado2=mysqli_query($con2,$query4);
			
			while ($row1=mysqli_fetch_assoc($resultado2))
			{
				?>
			<img class='img1' src="data:image/jpg;base64,base64_encode($row1['Img_Banco'])">;	
				<?php
			}
			
	
			
	echo"	</div>";
	echo"</header>";
			
            echo "<section id='pantalla-dividida'>";

		echo "<div class='izquierda'>";

		$resultado11=$cc->query($query1);
			
		while ($row=mysqli_fetch_assoc($resultado11))
		{ 
			echo "<img class='img3' src='data:image/jpg;base64,base64_encode($row
			['Img']); ' >";	
				
			};
		
		echo "<input name='a1' type='text' class='cuadrito1' style='position:absolute; top:20%; left:43%;' readonly value='". $columna['Id_Am']."'>";	
			
		echo "</div>";
	
		echo "<div class='derecha'>";
			
			
		echo "<div>";		
				echo "<div class='rotativo' style='position:absolute; top:25%; left: 99%;'>";
				echo "<p>recibido</p>";
				echo "</div>";
			 
			echo "<p style='position:absolute; top:25%; left:45%;'> Fecha y Hora Recepcion</p>";
			echo "<input name='a' type='text' class='cuadrito1' style='position:absolute; top:31%; left:43%;' readonly value='". $columna['FechaHoraRecepcion']."'>";
			  
			echo" <p style='position:absolute; top:27%; left:60%;'> Banco </p>
			<input name='b' type='text' class='cuadrito' style=' position:absolute; top:31%; left:57%;' value='".$columna['Banco1_Am']."' >";
			  
			echo "<p style='position:absolute; top:27%; left:74%;'> Oficina</p>";
			echo "<input name='c' type='text' class='cuadrito' style=' position:absolute; top:31%; left:71%;' value='".$columna['Oficina']."'>";	
			
			echo "<p style='position:absolute; top:27%; left:88.5%;'> Correo</p>";
			echo "<input name='d' type='text' class='cuadrito' style='position:absolute; top:31%; left:85%;' value='".$columna['Correo']."' >";
			echo"</div>";
			###################	
			echo"	<div>";
				
			echo"	<div class='rotativo' style='position:absolute; top:42%; left:99%;' >
				<p>consulta de vinculos </p>
				</div>";
				
			echo"<p style='position:absolute; top:39%; left:46%;'> Tipo Ente </p>";
			echo"<input name='e' type='text' class='cuadrito1' style='position:absolute; top:42%; left:43%;'  value='".$columna['TipoEnte']."'>";
			  
			echo"<p style='position:absolute; top:37%; left:57.5%;'>Numero de proceso ente</p>";
			echo "<input name='f' type='text' class='cuadrito1' style='position:absolute; top:42%; left:57%;' readonly value='".$columna['NumeroProcesoEnte']."' >	";
			
			echo"<p style='position:absolute; top:37%; left:72.5%;'> Numero cuenta deposito judicial </p>";
			echo"<input name='g' type='text' class='cuadrito1' style=' position:absolute; top:42%; left:71%;' readonly value='".$columna['NumeroCuentaDepositoJudicial']."'>";	
			
			echo"<p style='position:absolute; top:37%; left:86%;'> Fecha Generación oficio </p>";
			echo"<input name='h' type='text' class='cuadrito1' style=' position:absolute; top:42%; left:85%;' readonly value='".$columna['FechaGeneracionOficio']."'>";	
			echo"	</div>";
			##################
			
			echo"	<div>";
			echo"<p style='position:absolute; top:49%; left:46%;'>Tipo oficio</p>";
			echo"<input name='i' type='text' class='cuadrito' style='position:absolute; top:52%; left:43%;'value='".$columna['TipoOficio_Am']."'>";
			  
			echo"<p style='position:absolute; top:49%; left:60%;'>Etiqueta IQ</p>";
			echo"<input name='j' type='text' class='cuadrito' style='position:absolute; top:52%; left:57%;' value='".$columna['EtiquetaIQ']."' >";	
			
			echo"<p style='position:absolute; top:47%; left:72.5%;'> Tipo identificacion demandado</p>";
			echo"<input name='k' type='text' class='cuadrito' style=' position:absolute; top:52%; left:71%;' value='".$columna['TipoIdentificacionDemandado']."' >";	
			
			echo"<p style='position:absolute; top:47%; left:85.5%;'> Numero identificacion demandado</p>";
			echo"<input name='l' type='text' class='cuadrito' style='position:absolute; top:52%; left:85%;' value='".$columna['NumeroIdentificacionDemandado']."';>";
				
			echo"</div>";
			#############
			
			echo"<div>";
			echo"<p style='position:absolute; top:57%; left:46%;'> Banco </p>";
			echo"<input name='m' type='text' class='cuadrito' style='position:absolute; top:60%; left:43%;' value='".$columna['Banco2_Am']."'>";	
			
			echo"<p style='position:absolute; top:57%; left:60%;'>Cuantia</p>";
			echo"<input name='n1' type='text' class='cuadrito' style='position:absolute; top:60%; left:57%;' value='".$columna['Cuantia']."'>";	
			
			echo"<p style='position: absolute; top: 57% ; left: 74%;'>Porcentaje </p>";
			echo"<input name='n2' type='text' class='cuadrito' style='position: absolute; top: 60%; left: 71%;' value='".$columna['Porcentaje']."' >";	
			
			echo"<p style='position:absolute; top:57%; left:86.5%;'> Etiqueta Cliente</p>";
			echo"<input name='o' type='text' class='cuadrito' style='position:absolute; top:60%; left:85%;' value='".$columna['EtiquetaCliente']."' >";
			echo"	</div>";
			############################
			echo "<div>";
			echo"	<div class='rotativo'  style='position:absolute; top:66%; left:99%;'>
					<p>Respuesta vinculos</p>
					</div>";
				
			echo "<p style='position:absolute; top:71%; left:44.5%;'> Estado producto</p>";
			echo "<input name='p' type='text' class='cuadrito1' style='position:absolute; top:75%; left:43%;' readonly value='".$columna['EstadoProducto']."'>";
			  
			echo"<p style='position:absolute; top:71%; left:58%;'>Numero Producto</p>";
			echo "<input name='q' type='text' class='cuadrito1' style='position:absolute; top:75%; left:57%;' readonly value='".$columna['NumeroProducto']."'>";
			
			echo"<p style='position:absolute; top:71%; left:71.5%;'> Nombre demandado </p>";
			echo"<input name='r' type='text' class='cuadrito1' style='position:absolute; top:75%; left:71%;' readonly value='".$columna['NombreDemandado']."'>";
			echo"	</div>";
			################################
			
			echo"<div>";
			echo"	<div class='rotativo' style='position:absolute; top:88%; left:99%;'>";
			echo"	<p>Aplicacion de medidas </p>";
			echo"	</div>";
				
			echo"<p style='position:absolute; top:83%; left:44%;'> Tipo Idendificacion Demandante </p>";
			echo"<input name='s' <type='text' class='cuadrito' style='position:absolute; top:89%; left:43%;'value='".$columna['TipoIdentificacionDemandante']."' >";	
			  
			echo"<p style='position: absolute; top:83%; left: 57.5%;'>Numero Identificacion Demandante </p>";
			echo"<input name='t' type='text' class='cuadrito' style='position: absolute; top: 89%; left: 57%;' value='".$columna['NumeroIdentificacionDemandante']."'>";	
			
			echo"<p style='position: absolute; top: 84%; left: 71.5%;'> Nombre demandante </p>";
			echo"<input name='u' type='text' class='cuadrito' style='position: absolute; top: 89%; left: 71%;' value='".$columna['NombreDemandante']."'>";	
			echo"	</div>";
			###################
			
			echo"<div>";
					
			echo"<p style='position:absolute; top:94%; left:43%;'>Producto a Embargar/Desembargar </p>";
			echo"<input name='v' type='text' class='cuadrito' style='position:absolute; top:100%; left:43%;'value='".$columna['ProductoEmbargarDesembargar']."'>";	
			  
			echo"<p style='position:absolute; top:94%; left:57.5%;'>Numero Producto a Embargar</p>";
			echo"<input name='w' type='text' class='cuadrito' style='position:absolute; top:100%; left:57%;' value='".$columna['NumeroProductoEmbargarDesembargar']."'>";	
			
			echo"<p style='position:absolute; top:94%; left:72.5%;'> Limite de Embargabilidad</p>";
			echo"<input name='x' type='text' class='cuadrito' style='position:absolute; top:100%; left:71%;'value='".$columna['LimiteEmbargabilidad']."'>";	
			  
			echo"<p style='position:absolute; top:95%; left:86.5%;'> Banco Destino</p>";
			echo"<input name='y' type='text' class='cuadrito' style='position:absolute; top:100%; left:85%;'value='".$columna['BancoDestino_Am']."'>";
			echo"	</div>";
			##############################################
			echo"<div>";
			echo"	<p style='position:absolute; top:105%; left:44%;'> Casual Aclaracion</p>";
			echo"<input name='z' type='text' class='cuadrito2' style='position:absolute; top:109%; left:43%;'value='".$columna['CasualAclaracion']."'>";
				
			echo"	<button type='button'  style='position:absolute; top:110%; left:96%; background-color:#00FF5C; font-size:15px'  onClick='";
					
						$query2='ALTER TABLE aplicacionmedidas ADD CasualAclaracion1 VARCHAR(30) NOT NULL AFTER Img ';	$RRR=mysqli_query($con2,$query2);		
		   			if( $RRR)
			{
				
				
			}
			else{echo'Tabla no ha podido ser creada';}
				
			echo "'><a href='../vista/aplicacionmedidas1.php id='".$columna['IDD']."''><b>+</b></a></button>";
				 
			echo"<hr>";	
			echo"	</div>";
			
echo"</div>";
			
			
			
echo"	</section>";
echo"	<div class='abajo'>";
echo"	<input type='reset' class='boton' value='Limpiar' style='background:#21D1FF; border:2px solid #00B4E3; position:absolute; left:5%;'>"; 
echo"	<button class='boton' type='reset' value='Limpiar 1' style='background:#EBE900; border:2px solid #DDDC00; position:absolute; left:49%;'> Error</button>";
		
echo"	<input type='submit' value='Guardar' class='boton' style='background:#00FF5C; border:2px solid #00D84E; position:absolute; left:85%;' name='op9' >";
	
echo"	</div>";
echo"<script type='text/javascript'>";

echo"</script>";
	
echo"</form>";
	
echo"</body>";
echo"</html>";
		 }

        mysqli_close($cc); 

        return $query1;
	
	}
	#####
	public function modificar(
$AA2,$AA1,$BB1,$CC1,$DD1,$EE1,$FF1,$GG1,$HH1,$II1,$JJ1,$KK1,$LL1,$MM1,$NN1,$NN2,$OO1,$PP1,$QQ1,$RR1,$SS1,$TT1,$UU1,$VV1,$WW1,$XX1,$YY1,$ZZ1)
	{
		require_once("../basedatos/conexionBD.php");
		
		$c1= new p();
		$cc=$c1->conectar();
		$query= "UPDATE aplicacionmedidas SET FechaHoraRecepcion='".$AA1."',Banco1_Am='".$BB1."', Oficina='".$CC1."', Correo='".$DD1."',TipoEnte='".$EE1."', NumeroProcesoEnte='".$FF1."', NumeroCuentaDepositoJudicial='".$GG1."',FechaGeneracionOficio='".$HH1."', TipoOficio_Am='".$II1."',EtiquetaIQ='".$JJ1."', TipoIdentificacionDemandado='".$KK1."', NumeroIdentificacionDemandado='".$LL1."',Banco2_Am='".$MM1."',Cuantia='".$NN1."',Porcentaje='".$NN2."',EtiquetaCliente='".$OO1."',EstadoProducto='".$PP1."',NumeroProducto='".$QQ1."',NombreDemandado='".$RR1."',TipoIdentificacionDemandante='".$SS1."',NumeroIdentificacionDemandante='".$TT1."',NombreDemandante='".$UU1."',ProductoEmbargarDesembargar='".$VV1."',NumeroProductoEmbargarDesembargar='".$WW1."',LimiteEmbargabilidad='".$XX1."',BancoDestino_Am='".$YY1."',CasualAclaracion='".$ZZ1."' WHERE Id_Am='".$AA2."' ";
		
		$resultado=mysqli_query($cc,$query);
		#$R1=mysqli_fetch_row($resultado);
		if ($resultado)
		{ 
		
			function alerta()
				{
					alert("Guardado Correctamente");
			}
	
			header("location:../../../modulos.php");
		}
		else
		{		
				function alerta()
				{
					alert("Guardado Incorrectamente");
			}
			header("location:../../../modulos.php");
		}
		mysqli_close($cc);
		return $resultado;
		
	}

public function modificar1(
$AA2,$AA1,$BB1,$CC1,$DD1,$EE1,$FF1,$GG1,$HH1,$II1,$JJ1,$KK1,$LL1,$MM1,$NN1,$NN2,$OO1,$PP1,$QQ1,$RR1,$SS1,$TT1,$UU1,$VV1,$WW1,$XX1,$YY1,$ZZ1)
	{
		require_once("../basedatos/conexionBD.php");
		
		$c1= new p();
		$cc=$c1->conectar();
		$query= "UPDATE aplicacionmedidas SET FechaHoraRecepcion='".$AA1."',Banco1_Am='".$BB1."', Oficina='".$CC1."', Correo='".$DD1."',TipoEnte='".$EE1."', NumeroProcesoEnte='".$FF1."', NumeroCuentaDepositoJudicial='".$GG1."',FechaGeneracionOficio='".$HH1."', TipoOficio_Am='".$II1."',EtiquetaIQ='".$JJ1."', TipoIdentificacionDemandado='".$KK1."', NumeroIdentificacionDemandado='".$LL1."',Banco2_Am='".$MM1."',Cuantia='".$NN1."',Porcentaje='".$NN2."',EtiquetaCliente='".$OO1."',EstadoProducto='".$PP1."',NumeroProducto='".$QQ1."',NombreDemandado='".$RR1."',TipoIdentificacionDemandante='".$SS1."',NumeroIdentificacionDemandante='".$TT1."',NombreDemandante='".$UU1."',ProductoEmbargarDesembargar='".$VV1."',NumeroProductoEmbargarDesembargar='".$WW1."',LimiteEmbargabilidad='".$XX1."',BancoDestino_Am='".$YY1."',CasualAclaracion='".$ZZ1."' WHERE Id_Am='".$AA2."' ";
		
		$resultado=mysqli_query($cc,$query);
		#$R1=mysqli_fetch_row($resultado);
		if ($resultado)
		{ 
		
			function alerta()
				{
					alert("Guardado Correctamente");
			}
	
			header("location:../vista/Cons_Am.php");
		}
		else
		{		
				function alerta()
				{
					alert("Guardado Incorrectamente");
			}
			header("location:../vista/Cons_Am.php");
		}
		mysqli_close($cc);
		return $resultado;
		
	}
}
class DAO1
	{

public function Insertar($D,$N,$A,$U,$C,$T,$R)
{
	//$D1=$D;
	//$N1=$N;
	//$A1=$A;
	//$U1=$U;
	//$C1=$C;
	//$T1=$T;
	//$R1=$R;

	$query= "INSERT INTO usuario (Id_Usuario, Nombre_Usuario, Apellido_Usuario,Correo_Usuario,Clave_Usuario,Celular_Usuario,Rol_Usuario) values ('".$D."','".$N."','".$A."','".$U."','".$C."','".$T."','".$R."')";

	$res= new p();
	$conn= $res->conectar();
	$res2= mysqli_query ($conn,$query);
		//$R=mysqli_fetch_row($res2);
	if($res2)
	{
		echo "<h1 align='center'>Datos Almacenados correctamente</h1><br>"; 
	 }
	 else
	 {

		 echo "Error en el Insert<br>";
	 }
		mysqli_close($conn);
			return $res2;
}

}
?>