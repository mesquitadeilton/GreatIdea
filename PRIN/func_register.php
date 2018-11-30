<?php
	include 'user.php';
	include 'database.php';

	ini_set('default_charset','UTF-8');

	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$city = $_POST["city"];
	$password = $_POST["password"];

	if(empty($name) || empty($email) || empty($phone) || empty($phone) || empty($city) || empty($password)){
		header('location: register.php');
	}
	else{
		$tempUser = new user();
		$tempUser->setName($name);
		$tempUser->setEmail($email);
		$tempUser->setPhone($phone);
		$tempUser->setCity($city);
		$tempUser->setPassword($password);

		$db = new database();
		$db->insert($tempUser->getName(), $tempUser->getEmail(), $tempUser->getPhone(), $tempUser->getCity(), $tempUser->getPassword());

		$result = $db->login($tempUser->getEmail(), $tempUser->getPassword());

		header('location: index.php');
	}
?>