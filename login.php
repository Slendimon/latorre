<?php
// queremos redireccionar al usuario al menu si el ya esta logueado
session_start();
if(isset($_SESSION['user']))
{
	header("Location:index.php");
}

?>
<html>
<head>
<link rel="stylesheet" href="css/shake.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" >	 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<style>

	@font-face()
	{
	font-family:"Pala";
	src:url(fonts/Pala/pala.ttf),url(fonts/Pala/pala.eot),url(fonts/Pala/pala.otf);
	}
	
	#login-controls{
		margin:30 auto;
		border: 1px solid #000000;
		padding: 20px;
		width: 300px;
		text-align: center;
		margin-top:60px;
		box-shadow: 0px 0px 10px 1px grey;
		border-radius:5px;
		background:white;
	}

<<<<<<< HEAD
=======
	


>>>>>>> 6b70253a6bd110cbe088e427242de911bfb4f789
	.principal{
		margin:auto auto;
		border:3px solid #000000;
		padding: 60px;
		width: 500px;
		background-color:#FCFCFC;
		position:absolute;
		top:50%;
		left:50%;
		transform: translate(-50%,-50%);
		font-family:"Pala";
		font-size:17px;
	}

	body,html{
<<<<<<< HEAD
		background-color:#00808c;
=======
		background-color:#00808b;
>>>>>>> 6b70253a6bd110cbe088e427242de911bfb4f789
		margin:0;
		padding:0;
		width:100%;
		height:100%;
		position:relative;
	}

	.error-text{
		color:#f00;
	}

<<<<<<< HEAD
=======
	.input-lg
	{
	width:250px;
	height: 40px;
	border-radius:3px;
	border:1px solid #ccc;
	font-family:"Pala"; 
	font-size:22px;
	}
>>>>>>> 6b70253a6bd110cbe088e427242de911bfb4f789
	

</style>

</head>

<body>
	
<div class="principal col-md-4 offset-md-4" align="center">
	<!--<h2 align="center" class="text">Academia Preuniversitaria Especializada <br />
	"LA TORRE"</h2>
-->
	<img src="logo.png"/>
	<div id="login-controls">


	
	<!-- Muestra el mensaje de error si el controlador establece err=1 en la consulta -->
	
	<?php if(@$_GET['err']==1)
	{
		?> <div class="error-text"><b>Inicio de sesión sin éxito. Intentalo de nuevo</b> </div>
		<?php 
	} ?>
	<br />
	<form method="POST" action="index2.php">
<<<<<<< HEAD
=======
		<!--<action="index2.php"> -->
>>>>>>> 6b70253a6bd110cbe088e427242de911bfb4f789
	
	<input type="text" name="user" class="input-lg" id="username" placeholder="Usuario"/>
	</p>

	
	<input type="password" name="pass" class="input-lg" id="password" placeholder="Contraseña" />
	</p>

	<input type="submit" name="op" value="INGRESAR" id="btnCheck" />
	</form>
	</div>
</div>

</body>
</html>
