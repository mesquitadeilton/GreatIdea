<?php
	include 'user.php';
	include 'daoUser.php';

	if(empty($_POST['name']) || empty($_POST['cpf']) || empty($_POST['email']) || empty($_POST['password'])){
		?>

		<script> 
			alert('PREENCHA OS CAMPOS PARA CONTINUAR');
			parent.location = 'register.php';
		</script>

		<?php
	}
	else{
		$name = strtoupper($_POST['name']);
		$cpf = $_POST['cpf'];
		$birth_date = $_POST['birth_date'];
		$email = strtoupper($_POST['email']);
		$phone = $_POST['phone'];
		$city = strtoupper($_POST['city']);
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
		
		if($tempDao->validate_register($tempUser->getCPF(), $tempUser->getEmail()) == TRUE){
			$tempDao->register($tempUser->getName(), $tempUser->getCPF(), $tempUser->getBirthDate(), $tempUser->getEmail(), $tempUser->getPhone(), $tempUser->getCity(), $tempUser->getState(), $tempUser->getPassword());

			if($_POST['check_client']){
				$tempDao->register_client($tempUser->getCPF());
			}

			if($_POST['check_creator']){
				$tempDao->register_creator($tempUser->getCPF());
			}

			session_start();
			$nick = explode(" ", (string)$tempUser->getName());
			$_SESSION['nick'] = $nick[0];
			$_SESSION['name'] = $tempUser->getName();
			$_SESSION['cpf'] = $tempUser->getCPF();
			$_SESSION['birth_date'] = $tempUser->getBirthDate();
			$_SESSION['email'] = $tempUser->getEmail();
			$_SESSION['phone'] = $tempUser->getPhone();
			$_SESSION['city'] = $tempUser->getCity();
			$_SESSION['state'] = $tempUser->getState();

			header('location: index.php');
		}
		else{
			?>

			<script> 
				alert('USUÁRIO JÁ CADASTRADO');
				parent.location = 'register.php';
			</script>

			<?php
		}
	}
?>