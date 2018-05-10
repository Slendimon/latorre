<?php

class UserModel{
	
	private $username;

	function UserModel($username)
	{
		$this->username=$username;
	}

	function get_username()
	{
		return $this->username;
	}

	function set_username($username)
	{
		$this->username=$username;
	}

}

?>