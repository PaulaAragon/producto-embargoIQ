<?php
 	$mysqli=new mysqli('localhost','root','','mockups')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   
    <title>Registro Usuario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://www.danstools.com/email-validator/?apikey=API-KEY&apiid=API-ID&email=EMAIL_TO_VERIFY">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{
			
			
  /* Safari 4-5, Chrome 1-9 */
    background: -webkit-gradient(radial, center center, 0, center center, 460, from(#1a82f7), to(#2F2727));

  /* Safari 5.1+, Chrome 10+ */
    background: -webkit-radial-gradient(circle, #1a82f7, #2F2727);

  /* Firefox 3.6+ */
    background: -moz-radial-gradient(circle, #1a82f7, #2F2727);

  /* IE 10 */
    background: -ms-radial-gradient(circle, #1a82f7, #2F2727);
    height:600px;
}

.centered-form{
    margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}

label.label-floatlabel {
    font-weight: bold;
    color: #46b8da;
    font-size: 11px;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link  rel="stylesheet" href="../css/estilos.css">
</head>
<body><header>
	
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

				
			</div>
			
			<h1 style="position: absolute; top: 1%; left: 45%; color:#100076"> Registro Usuario</h1>
			<!-- <img class="im1" src="data:image/jpg;base64,<?php echo base64_encode($row['Img_Banco']); ?>  " >	 -->
			
		</div>
	</header>
<div class="container">
			<form action="../controlador/controlador.php" method="post">
        <div class="row centered-form">
		
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
		
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title" ><strong>Registro Usuario</strong></h1>
                    </div>
					
                    <div class="panel-body">
						
                        <form role="form">
							
                            <div class="row">
                                <div class="form-group col-xs-12">
									<h6>Documento</h6>
                                        <input type="text" name="d" id="rut_postulante" class="form-control input-sm floatlabel" placeholder="Ingrese Documento" >
    			    		    </div>
								
								<div class="panel-body">
									
									<h6>Rol</h6>
								 <select  name="r" id="" 	  class="form-group col-xs-11">
									 <option value="0">seleccione Rol</option>
									 <span class=" error" ></span>
									 <?php
		 $query = $mysqli -> query ("SELECT * FROM roles");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[Id_Rol].'">'.$valores[Nombre_Rol].'</option>';
          }
									 ?>
									</select>
								</div>
                                
								<div class="form-group col-xs-12">
									<h6>Celular</h6>
        	                            <input type="text" name="t" id="nombre" class="form-control input-sm floatlabel" placeholder="Ingrese Celular" >
    			    		    </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
										<h6>Nombre</h6>
    		                            <input type="text" name="n" id="nombre" class="form-control input-sm floatlabel" placeholder="Ingrese Nombres">
    			    				</div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                      <div class="form-group">
										  <h6>Apellido</h6>
        	                            <input type="text" name="a" id="a_paterno" class="form-control input-sm floatlabel" placeholder="Ingrese Apellidos">
    			    				</div>
                                </div>
								<div class="form-group col-xs-12">
									<h6>Usuario</h6>
        	                            <input type="text" name="u" id="nombre" class="form-control input-sm floatlabel" placeholder="Ingrese Correo" >
    			    		    </div>
                                 <div class="form-group col-xs-12">
									 <h6>Contraseña</h6>
                                        <input type="password" name="c" id="pass" class="form-control input-sm floatlabel" placeholder="Ingrese Contraseña">
    			    		    </div>
								<div class="form-group col-xs-12">
									<h6>Confirme Contraseña</h6>
                                        <input type="password" name="rc" id="pass" class="form-control input-sm floatlabel" placeholder="Repita Contraseña">
    			    		    </div>
                            </div>
                            <input  type="submit" value="Registrar" name="op1" class="btn btn-info btn-block"  onClick="alerta()" >
                        </form>
							
							</form>	
                    </div>
					
                </div>                    
            </div>            
        </div>        
    </div>
<script type="text/javascript">

</script>
	
</body>
</html>