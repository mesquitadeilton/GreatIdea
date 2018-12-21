<?php
	include 'user.php';
	include 'daoUser.php';

	$name = mb_strtoupper($_POST['name']);
	$cpf = $_POST['cpf'];
	$birth_date = $_POST['birth_date'];
	$email = mb_strtoupper($_POST['email']);
	$phone = $_POST['phone'];
	$city = mb_strtoupper($_POST['city']);
	$state = $_POST['state'];
	$password = $_POST['password'];

	$tempUser = new user();
	$tempUser->setName($name);
	$tempUser->setCPF($cpf);
	$tempUser->setBirthDate($birth_date);
	$tempUser->setEmail($email);
	$tempUser->setPhone($phone);
	$tempUser->setCity($city);
	$tempUser->setState($state);
	$tempUser->setPassword($password);

	$tempDao = new daoUser();

	if($_POST['check_client']){
		if($tempDao->check_account_client($tempUser->getCPF())){
		}
		else{
			$tempDao->register_client($tempUser->getCPF());

			session_start();
			$_SESSION['check_client'] = TRUE;
		}
	}
	else{
		session_start();
		$_SESSION['check_client'] = FALSE;
	}

	if($_POST['check_creator']){
		if($tempDao->check_account_creator($tempUser->getCPF())){
		}
		else{
			$tempDao->register_creator($tempUser->getCPF());

			session_start();
			$_SESSION['check_creator'] = TRUE;
		}
	}
	else{
		session_start();
		$_SESSION['check_creator'] = FALSE;
	}

	if($_POST['name']){
		$tempDao->update_register_name($tempUser->getName(), $tempUser->getCPF());
	}

	if($_POST['birth_date']){
		$tempDao->update_register_birth_date($tempUser->getBirthDate(), $tempUser->getCPF());
	}

	if($_POST['phone']){
		$tempDao->update_register_phone($tempUser->getPhone(), $tempUser->getCPF());
	}

	if($_POST['city']){
		$tempDao->update_register_city($tempUser->getCity(), $tempUser->getCPF());
	}

	if($_POST['state']){
		$tempDao->update_register_state($tempUser->getState(), $tempUser->getCPF());
	}

	if($_POST['password']){
		$tempDao->update_register_password($tempUser->getPassword(), $tempUser->getCPF());
	}

	header('location: account.php');
?>