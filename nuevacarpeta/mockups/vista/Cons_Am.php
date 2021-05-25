<!doctype html>
<html lang="es">
 <head>
      <meta charset="UTF-8">
      <title>Formulario de Consulta</title>
      <link rel="stylesheet" href="fondo.css">
	 <style>
		 body{
	background:#D2CCCC;
	background-size: cover;
	background-repeat:no-repeat;

}

h2{
	color:white;
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
	 <link rel="stylesheet" href="../../../css/estilos.css">
	 
 </head>
 <body>
   <h1> Consultar Usuario</h1>
   <form action="../vista/capturafase1.php" method="POST" class="form-register">
   
   	<div class="contenedor-inputs">
   	 <input type="text" name="registro" placeholder="Cedula" class="input-48" required>
   	 <input type="submit" value="Consultar" name="op3" class="btn btn-info btn-block rounded-0 py-2" style="background: rgb(76, 194, 76);" required>
   	<br><br><br>
      

   	 </div>
   </form>
   <a href="../../../modulos.php" class="btnModulos" style>Volver a Modulos</a>
 </body>
</html>
<body>

