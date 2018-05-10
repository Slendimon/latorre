<?php

class UserController{

	function UserController()
	{
		// vacio por ahora.
	}

	function create($username,$password,$email)
	{
		// crea usuarios en la base de datos.
	}

	function login($username,$password)
	{
		if($this->authenticate($username,$password))
		{
			// inicia sesión el usuario.
			session_start();
			// instanciando el Objeto UserModel
			$user = new UserModel($username);
			// colocando el objeto usuario en la sesión.
			$_SESSION['user']=$user;
			// nosotros le decimos al sistema que se autenticó el usuario.
			return true;
		}
		else
		{
			return false;
		}
	}

	static function authenticate($u,$p)
	{
		 $authentic=false;
		 // revisar contra la bd
		 if($u=='admin' && $p=='123456') $authentic=true;
		 return $authentic;
	}

	function logout()
	{
		// procedimiento de cierre de sesión.
		session_start();
		session_destroy();
	}
}	
?>