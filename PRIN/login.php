<!DOCTYPE html>

<html lang="pt">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Cadastrar</title>

		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="login.css">

		<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
	</head>
	<body>
		<div class="top">
			<input type="checkbox" id="bt_menu">
			<label for="bt_menu">&#9776;</label>

			<?php
				session_start();

				if (!empty($_SESSION['name']))
					echo "Olá ".$_SESSION['name'];
			?>
		</div>

		<div class="content">
			<form action="func_login.php" method="POST">
				<h1>FAZER LOGIN</h1>
				<br>
				<h2>EMAIL</h1>
				<input type="text" name="login">
				<br>
				<br>
				<h2>SENHA</h1>
				<input type="password" name="password">
				<br>
				<br>
				<br>
				<input id="bt" type="submit" name="bt_submit" value="ENTRAR">
			</form>
		</div>
	</body>
</html>