<?php
	include 'user.php';
	include 'database.php';

	ini_set('default_charset','UTF-8');

	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$city = $_POST["city"];
	$password = $_POST["password"];

	$tempUser = new user();
	$tempUser->setName($name);
	$tempUser->setEmail($email);
	$tempUser->setPhone($phone);
	$tempUser->setCity($city);
	$tempUser->setPassword($password);

	$db = new database();
	$db->insert($tempUser->getName(), $tempUser->getEmail(), $tempUser->getPhone(), $tempUser->getCity(), $tempUser->getPassword());

	session_start();
	$_SESSION['login'] = $tempUser->getEmail();
	$_SESSION['password'] = $tempUser->getPassword();

	header('location: register.php');
?>