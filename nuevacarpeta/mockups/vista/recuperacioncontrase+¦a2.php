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
			   
			 <h1 style="color: #00BBFF; position: absolute; top: 265px; left: 100px ;"  >Tecnologia</h1><h2 style="position: absolute; top:325px ; left:120px ;"> e Innovación </h2><br>
			 <br>
			 <h4 style=" color: #AFA7A7; position: absolute; top: 450px ; left: 90px ;">¿Olvido su contraseña?<b style=""><strong>></strong></b></h4>
			
    
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
			 
            <div class="login-form">
               <form action="../controlador/controlador.php" method="post">
				  
                  <div class="form-group">
					 <img src="logo iq1.png" style=" width=100%; heigh= 100%; left:  9% ;  border= solid; position:absolute ; top:-140%; left:  100% ; " >
					  <h3 style="color: #00BBFF ; width: -100px"  align="center"><b style="position: absolute; top: -60px ; left: 10px ;">Recuperacion de contraseña</b></h3>
					  
					 
                     <h6>Ingresa tu correo electronico para <br>
							recuperar la contraseña.</h6>
                     <input type="text" class="form-control" placeholder="correo electronico" name="u" required style=" width: 360px">
                  </div>
                  <div class="form-group">
                  
                  </div>
				   
				    <input class="btn btn-primary" type="button" value="Volver" style="width: 130px; height: 40px; position:absolute; top: 135px; left: 40px;  	background-color:#E00003" name="" onClick="location.href='recuperacioncontraseña1.php'">
			
       <input class="btn btn-warning" type="submit" value="Siguiente" style="width: 130px; height: 40px; position:absolute; top: 135px; left: 220px;  	background-color:#00CBFF" name="">
       
		   
               </form>
				 <br>
				   <a href="" style="position: absolute; top: 200px; left:  70px; ">¿Tienes algún problema?</a>
			           
            </div>
         </div>
      </div>
<script type="text/javascript">

</script>
</body>
</html>

