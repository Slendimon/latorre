<?php

if(count($_POST)>0){
	$user = PersonalData::getById($_POST["personal_id"]);
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->address = $_POST["address"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->turno = $_POST["turno"];
	$user->tipo_person="1";

	$user->user_id = $_SESSION["user_id"];


	$u = $user->update();
Core::alert("Actualizado Exitosamente!");
print "<script>window.location='index.php?view=personal';</script>";


}


?>