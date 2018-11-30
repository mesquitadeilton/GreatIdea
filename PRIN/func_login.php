<?php
	include 'user.php';
	include 'database.php';

	ini_set('default_charset','UTF-8');

	$login = $_POST["login"];
	$password = $_POST["password"];

	$tempUser = new user();
	$tempUser->setEmail($email);
	$tempUser->setPassword($password);

	$db = new database();
	$result = $db->login($tempUserLogin->getLogin(), $tempUserLogin->getPassword());

	if($result == TRUE){
		session_start();

		$_SESSION['login'] = $tempUserLogin->getLogin();
		$_SESSION['password'] = $tempUserLogin->getPassword();

		header('location: index.php');
	}
	else{
		header('location: login.php');
	}
?>