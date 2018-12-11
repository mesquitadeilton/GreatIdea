<?php

	include 'user.php';
	include 'daoUser.php';

	ini_set('default_charset','UTF-8');

	$login = $_POST["email"];
	$password = $_POST["password"];

	$tempUser = new user();
	$tempUser->setEmail($login);
	$tempUser->setPassword($password);

	$db = new database();
	$result = $db->login($tempUser->getEmail(), $tempUser->getPassword());

	if($result == TRUE){
		header('location: index.php');

	}
	else{
		header('location: form_login.php');

	}
?>