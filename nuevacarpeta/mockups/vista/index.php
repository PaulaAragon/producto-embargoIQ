<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Inicio - Tecnologia e inovacion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- boostrap 4-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	
    <style type="text/css">

        body {
			
    font-family: "Lato", sans-serif;
}
.


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
		
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="sidenav">
         <div class="login-main-text">
			   <img src="../img/logoiq.png"  style="width=100%; heigh= 100%; border= solid; position:absolute; top:300px; left:9%;">
			 <h1 style="color: #00BBFF; position: absolute; top :400px ; left:90px ; "  >Tecnologia</h1><h2 style="position:absolute; top: 450px; left: 115px;"> e Innovación </h2><br>

         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
			 
            <div class="login-form">
               <form action="../controlador/controlador.php" method="post"  >
				  
                  <div class="form-group">
				<div style="position: absolute; top: 40%; left:60%; ">
					<!-- <?php if(isset($_SESSION['message'])){?> -->
					  
					  		<!-- <div  class="alert alert-<?= $_SESSION['message_type'];?>  alert-dismissible fade show" role="alert"> -->
 							<!-- <?=  $_SESSION['message']?> -->
  							<!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> -->
								<!-- <span aria-hidden="true">&times;</span> -->
							<!-- </button> -->
							<!-- </div> -->
					  <!-- <?php session_unset();	}  ?> -->
				</div>
					  
					  <h3 style="color: #00BBFF; position: absolute; top:40% ; left: 47%;"  ><b>Inicio De Sesión</b></h3>
                     <h4>Usuario</h4>
                     <input type="text" class="form-control" placeholder="User Name" name="u" minlength="5" maxlength="25"  title="por favor coloque un correo valido" required>
                  </div>
                  <div class="form-group">
                     <h4>Contraseña</h4>
                     <input type="password" class="form-control" placeholder="Password" name="c" minlength="2" required>
                  </div>
				   
				    
			
       <input class="btn btn-black" type="submit" value="Ingresar" style="width: 400px; height:40px; position: absolute; top: 77%; 50%;" name="op2">
       
		   
               </form>
				 <br>
				   <a href="recuperacioncontraseña1.php" style="position:absolute; top:85%; left: 47% ">¿Olvido su contraseña?</a>
			           
            </div>
         </div>
      </div>
	
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	

	

	

</body>
</html>
