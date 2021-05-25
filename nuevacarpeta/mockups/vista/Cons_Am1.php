<!doctype html>
<html lang="es">
 <head>
      <meta charset="UTF-8">
      <title>Formulario de Consulta</title>
     <link rel="stylesheet" href="../../../css/estilos.css">
	 <style>
/*	boostrap	 */
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	
/* Bootstrap CSS */
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="../css/estilos.css?<?php echo rand(1000, 9000); ?>">
    <script src="https://kit.fontawesome.com/4c425d671e.js" crossorigin="anonymous"></script>
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Lora & display = swap" rel = "hoja de estilo ">
    
    
 
		 body{
	background: #000000;
	background-size: cover;
	background-repeat:no-repeat;

}

h2{
	color:blue;
}

.icon i{
	color:white;
	font-size:120px;
	cursor:pointer;
}
	
#form{
	margin: auto;
	background:#eee;
	width:380px;
	display: flex;
	margin-top:5%;
	border-radius:5px;
	box-shadow:0 0 3px 3px white;
	background:rgba(0,0,0,0.7);
}

#form #content{
	margin:20px;

}
#formu{
margin-top:-30px;
}


input{
    -webkit-transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    -o-transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    outline: 0;
    -webkit-box-shadow:none;
    box-shadow:none;
    border: none;
    border-bottom: 1px solid #ced4da;
    -webkit-border-radius: 0;
    border-radius: 0;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    background-color: transparent;
    height:45px;
    margin-top:45px;
    width:340px;
    border-bottom:2px solid white;	
    color:white;
}

input:hover{
 border-bottom:1px solid white;
}


#form #content button{
 -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    padding: .84rem 2.14rem;
    font-size: .99rem;
    -webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    -o-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    margin: .375rem;
    border: 0;
    -webkit-border-radius: .125rem;
    border-radius: .125rem;
    cursor: pointer;
    text-transform: uppercase;
    white-space: normal;
    word-wrap: break-word;
    color:#fff;
    background-color:#007bff!important;
    margin-top:40px;
    width:100%;
}
	font-size:16px;
	border-radius: 3px;
	border:1px solid darkgray;
}
.input-48{
	width:48%;
}
.input-100{
	width:100%;
}

.btn-enviar{
	background: crimson;
	color:#fff;
	margin:auto;
	padding: 10px 40px;
	cursor: pointer;
	font-size:20px;
}
.btn-enviar:active{
	transform:scale(1.05);
}
.form__link{
	width:100%;
	margin:7px;
	text-align:center;
	font-size: 14px;
}
		 
	 </style>
	 
	 
 </head>
 <body style="background:rgb(144, 156, 156);">
   <h2> Consultar Registro</h2>
   <form action="aplicacionmedidas.php"  method="POST" class="form-register">
   
	 <div >
			<?php
				if(isset($_SESSION['message'])) {?>

                <div class="alert alert-<?=$_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                  <?=$_SESSION['message'] ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		 		</div>

            <?php session_unset(); }  ?>
</div>
	   
   	<div class="contenedor-inputs">
   	 <input type="text" name="registro" placeholder="Identificacion Registro" class="input-48" style="color:white;" required >
		<input type="submit" value="Consultar" name="opp" class="btn btn-info btn-block rounded-0 py-2" style="background: rgb(76, 194, 76);" required>

    <br><br><br>
    <a href="../../../modulos.php" class="btnModulos" style>Volver a Modulos</a>
   	
   	 </div>
   </form>
	 <!-- Optional JavaScript; choose one of the two! -->

<!--  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
<!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>-->
<!--	scripts 55 -->
	 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	 
 </body>
</html>