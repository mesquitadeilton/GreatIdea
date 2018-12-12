<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">

		<title>Great Idea | MINHA CONTA</title>

		<link rel="stylesheet" href="identification.css">
		<link rel="stylesheet" href="index.css">
		<link rel="stylesheet" href="menu.css">

		<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
	</head>
	<body>
		<?php
			include 'menu.php';
		?>

		<div class="content">
			<form action="func_identification.php" method="POST">
				EMAIL
				<input id="credential_bar" name="email" type="text">
				<br>
				<br>
				<br>
				SENHA
				<input id="credential_bar" name="password" type="password" style="font-weight: bolder;">
				<br>
				<br>
				<br>
				<input id="bt_login" name="bt_login" type="submit" value="ENTRAR">
			</form>
			<br>
			<br>
			<br>
		</div>
	</body>
</html>