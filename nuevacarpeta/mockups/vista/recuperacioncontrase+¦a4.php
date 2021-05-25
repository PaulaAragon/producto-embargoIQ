<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">|		
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
				   
            </div>
				<div class="login-form" > 
				<div class="alert alert-info alert-dismissable" style="width:400px ; height: 100px; position: absolute; top:  -170px; left:-10px ;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Mínimo de 8 caracteres, con una mayúscula, una minúscula, un numero  y un carácter especial(@,-,%,#,_,+,*,&,.) </strong>
            </div>
                  <div class="form-group">
					  
					  
					<nav style="position:  absolute; top:-300%; left:90% ;"><img src="logo iq1.png" style=" width=100%; heigh= 100%;   position:relative; top:100%; left:  50% ; " ></nav>
					  
					  <h3 style="color: #00BBFF ; width: -100px"  align="center"><b style="position: absolute; top: -60px ; left: 10px ;">Recuperacion de contraseña</b></h3>
					  
					 
                     <h6>Dijita la nueva contraseña.</h6>
					 <div>
						 <div>
							 <article>
								 <section style="position: absolute; top: 70%; left: 5% ;">
						  <p>Nueva contraseña =</p>   	
								 </section>
								 </div>
						 
						 <anside> <section style="position: absolute; top: 60%; left: 49% ;">     
							 <input type="text" class="form-control" name="" placeholder="Nueva contraseña" required style="width: 200px; height: 50% ; "    maxlength="30" minlength="8" pattern="@">
							 </section>
						 </anside>	
							 <section style="position: absolute;top:100px ; left: ;">
								 <p>	Confirme contraseña = </p>
								 
								<div style=" position: absolute; top: -10px ; left:  180px;"> 
								<input type="password" class="form-control" name="u" placeholder="Confirme contraseña" required style="width: 200px; height: 50% ;">
								 </div>
							 </section>                                                                         	
								 </article>
					  </div>
					 
						  </div>
                  <!--</div>-->
                  <div class="form-group">
                  
                  </div>
				   
				<section>  
					<div>
			 <input class="btn btn-warning" type="submit" value="Volver" style="width: 180px; height: 40px; position: absolute; top: 155px; left: 10px;  	background-color:#E00003" name="" onClick="location.href='recuperacioncontraseña3.php'">
						</div>
					
					
					<div>
       <input class="btn btn-warning" type="button" value="Siguiente" style="width: 180px; height: 40px; position:absolute; top: 155px; left: 200px;  	background-color:#00CBFF" name=""  >
					</div>
					</section>
       
		   
               </form>
				 <br>
				   <a href="" style="position: absolute; top: 220px; left:  70px; ">¿Tienes algún problema?</a>
			           
            </div>
         </div>
      </div>
<script type="text/javascript">

</script>
</body>
</html>

