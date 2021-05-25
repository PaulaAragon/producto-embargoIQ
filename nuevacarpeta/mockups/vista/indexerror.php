<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Inicio - Tecnologia e inovacion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
.error{
	background-color: red;
	font-size: 12px;
	padding: 10px;
		}
.correcto{ 
	background-color:lawngreen;
	font-size: 12px;
	padding: 10px;
		}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="sidenav">
         <div class="login-main-text">
			 <img src="logo iq.png"  style=" width=100%; heigh= 100%;  ;  border= solid; position:absolute; top: 300px; left:  9%;" >
			 <h1 style="color: #00BBFF; position: absolute; top :400px ; left:90px ; "  >Tecnologia</h1><h2 style="position:absolute; top: 450px; left: 115px;"> e Innovación </h2><br>
			
    
         </div>
      </div>
	<form action="../controlador/controlador.php" method="post">
<!--               <form action="../vista/indexerror.php" method="post">-->
      <div class="main">
         <div class="col-md-6 col-sm-12">
			 
            <div class="login-form">
				<?php
//			if(isset($_POST['u'] ))	
//						{
//							$u=$_POST['u'];
//							$c=$_POST['c'];
							
//							$campos=array();
							
//							if($u == ""||strpos($u,"@")===false )
//							{
//								array_push($campos,"Ingresa un correcto electronico valido.");
//							}
//							if($c == ""|| strlen($c)<6)
//							{
//								array_push($campos,"El campo password no puede estar vacio ni tener menos de 6 caracteres");
//							}
							
			
//							if(count($campos)>0)
//							{ 
//								echo "<div class='error'> ";
//								for($i=0;$i<count($campos);$i++)
//								{
//									echo
//										"<li>"
//										.$campos[$i].
//										"</i>";	
//								}
							
//							}
//							else
//							{
//								echo "<div class='correcto'> 
//								Datos Correctos";	
//							}
//						}	echo"</div>";
				?>
			 </div>
              
				  
                  <div class="form-group">
					 
					  <h3 style="color: #00BBFF; "  align="center"><b>Inicio De Sesión</b></h3>
                     <h4>Usuario</h4>
                     <input type="text" class="form-control" placeholder="User Name" name="u" required>
                  </div>
                  <div class="form-group">
                     <h4>Contraseña</h4>
                     <input type="password" class="form-control" placeholder="Password" name="c" required>
                  </div>
				   
				    
			
       <input class="btn btn-black" type="submit" value="Ingresar" style="width: 200px; left: 20px" name="op2">
       
		   
               </form>
				 <br>
				   <a href="recuperacioncontraseña1.php"	>¿Olvido su contraseña?</a>
			           <br>
<br>
<br>
<br>
<br>
<br>
<br>

            </div>
         </div>
      </div>
<script type="text/javascript">

</script>
</body>
</html>
