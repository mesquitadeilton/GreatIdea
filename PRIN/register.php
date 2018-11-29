<!DOCTYPE html>

<html lang="pt">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Cadastrar</title>

		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="register.css">

		<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
	</head>
	<body>
		<div class="top">
			<input type="checkbox" id="bt_menu">
			<label for="bt_menu">&#9776;</label>

			<?php
				session_start();

				if (!empty($_SESSION['login']))
					echo "Olá ".$_SESSION['login'];
			?>
		</div>

		<div class="content">
			<form action="func_register.php" method="POST">
				<h1>NOME</h1>
				<input type="text" name="name">
				<br>
				<br>
				<h1>EMAIL</h1>
				<input type="text" name="email">
				<br>
				<br>
				<h1>TELEFONE</h1>
				<input type="text" name="phone">
				<br>
				<br>
				<h1>CIDADE</h1>
				<input type="text" name="city">
				<br>
				<br>
				<h1>SENHA</h1>
				<input type="password" name="password">
				<br>
				<br>
				<br>
				<input id="bt" type="submit" name="bt_submit" value="CADASTRAR">
			</form>
		</div>
	</body>
</html>