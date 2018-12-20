<?php
	session_start();
	$_SESSION['nick'] = NULL;
	$_SESSION['name'] = NULL;
	$_SESSION['cpf'] = NULL;
	$_SESSION['birth_date'] = NULL;
	$_SESSION['email'] = NULL;
	$_SESSION['phone'] = NULL;
	$_SESSION['city'] = NULL;
	$_SESSION['state'] = NULL;
	$_SESSION['check_client'] = NULL;
	$_SESSION['check_creator'] = NULL;

	header('location: index.php');
?>