<?php

	include 'idea.php';
	include 'daoIdea.php';

	ini_set('default_charset','UTF-8');

	$title = $_POST["title"];
	$description = $_POST["description"];
	$value = $_POST["value"];
	$contact = $_SESSION["email"];


	if(empty($title) || empty($description) || empty($value) || empty($contact)){
		header('location: register_ideia.php');
	}
	else{
		$tempIdea = new Idea();
		$tempIdea->setTitle($title);
		$tempIdea->setDescription($description);
		$tempIdea->setValue($value);
		$tempIdea->setContact($contact);


		$db = new daoIdea();
		$db->insert($tempIdea->getTitle(), $tempIdea->getDescription(), $tempIdea->getValue(), $tempIdea->getContact() );

		$result = $db->busca($tempIdea->getTitle());

		header('location: idea.php');
	}
?>