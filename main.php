<?php
require_once('user_model.inc.php');
// queremos redireccionar al  usuario al login si la sesion es expirada o invalida
session_start();
if(!isset($_SESSION['user'])){
	header("Location:login.php");
}
else
{
	$user=$_SESSION['user'];
}
?>
<html>
<head>
	
</head>
<body>
	<p>
		Bienvenido <?php print $user->get_username() ?>. Estas logueado en el sistema de la academia La Torre.
		<a href="index.php?op=logout">Logout</a>
	</p>
</body>
</html>