<?php

require_once('user_controller.inc.php');
require_once('user_model.inc.php');

// en este simple ejemplo, asumimos que nosotros tenemos registro de usuarios
// solo vamos a demostrar el login/autenticacion y funcion logout
@$op=$_REQUEST['op'];

$user_controller= new UserController();

switch($op)
{
	case 'INGRESAR':
		// aqui esperamos usuario y contraseña, omitimos la validacion por ahora
		$username=$_POST['user'];
		$password=$_POST['pass'];

		if($user_controller->login($username,$password))
		{
			header("Location:index.php"); 
		} else header("Location:login.php?err=1");
	break;

	case 'logout':
		$user_controller->logout();
		header("Location:login.php");
	break;

	default:
		header("Location:login.php");
	break;
}

?>