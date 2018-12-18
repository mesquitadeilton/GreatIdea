<?php
	include 'user.php';
	include 'daoUser.php';

	if(empty($_POST['login']) || empty($_POST['password'])){
		?>

		<script> 
			alert('PREENCHA OS CAMPOS PARA CONTINUAR');
			parent.location = 'identification.php';
		</script>

		<?php
	}
	else{
		$login = $_POST['login'];
		$password = $_POST['password'];

		$tempUser = new user();
		$tempUser->setEmail($login);
		$tempUser->setPassword($password);

		$tempDao = new daoUser();
		if($tempDao->login($tempUser->getEmail(), $tempUser->getPassword()) == TRUE){
			header('location: index.php');
		}
		else{
			?>

			<script> 
				alert('USUÁRIO OU SENHA INVÁLIDO');
				parent.location = 'identification.php';
			</script>

			<?php
		}
	}
?>