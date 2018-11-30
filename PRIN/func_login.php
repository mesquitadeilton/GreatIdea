<?php
	include 'user.php';
	include 'database.php';

	ini_set('default_charset','UTF-8');

	$login = $_POST["login"];
	$password = $_POST["password"];

	$tempUser = new user();
	$tempUser->setEmail($login);
	$tempUser->setPassword($password);

	$db = new database();
	$result = $db->login($tempUser->getEmail(), $tempUser->getPassword());

	if($result == TRUE){
		session_start();

		$_SESSION['login'] = $tempUser->getEmail();
		$_SESSION['password'] = $tempUser->getPassword();

		header('location: index.php');
	}
	else{
		header('location: login.php');
	}
?>