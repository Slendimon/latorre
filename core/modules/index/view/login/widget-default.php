<?php

if(Session::getUID()!=""){
		print "<script>window.location='index.php?view=home';</script>";
}

?>

<head>
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

	.input-lg
	{
	width:250px;
	height: 40px;
	border-radius:3px;
	border:1px solid #ccc;
	font-family:"Pala"; 
	font-size:19px;
	}

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
		background-color:#00808b;
		margin:0;
		padding:0;
		width:100%;
		height:100%;
		position:relative;
	}

	.error-text{
		color:#f00;
	}

	#btnCheck
{
	background: #2FAA96;
	color:#000000;
	text-align: center;
	transition:all 0.1s ease;
	font-size: "Pala";
	border:1px solid ;
}

#btnCheck:hover
{
	background:#2FAA96;
	cursor:pointer;
	font-size:19px;
	transition: all 0.1s ease;
}

nav{
	position: hide;
}
	

</style>

</head>
<div class="row">
<br><br><br><br><br><br>
    	<div class="col-md-4 col-md-offset-4">
    	<?php if(isset($_COOKIE['password_updated'])):?>
    		<div class="alert alert-success">
    		<p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
    		<p>Pruebe iniciar sesion con su nueva contraseña.</p>

    		</div>
    	<?php setcookie("password_updated","",time()-18600);
    	 endif; ?>

    	 <br>
    	 <br>
    	 <br>
    	 <br>
    	 <br>
    	 <br>
    	 <br>
    	 <br>
    	 <br>
    	 <br>
    	 <br>
    	 <br>
    	 <br>
    	 <br>
    	 <br>
    	 <br>
    	 <br>
    	 <br>


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
	<form method="POST" action="index.php?view=processlogin">
		<!--<action="index2.php"> -->
	
	<input type="text" name="email" class="input-lg" id="username" placeholder="Usuario"/>
	</p>

	
	<input type="password" name="password" class="input-lg" id="password" placeholder="Contraseña" />
	</p>

	<input type="submit" name="op" value="INGRESAR" id="btnCheck" />
	</form>
	</div>
</div>

    	<!--	<div class="panel panel-primary">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Iniciar Sesion</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="index.php?view=processlogin">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Usuario" required name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Contraseña" required name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-primary btn-block" type="submit" value="Iniciar Sesion">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		-->
		</div>
	</div>
<br><br><br>