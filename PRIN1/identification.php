<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">

		<title>Great Idea | FAZER LOGIN</title>

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
		<div class="content" style="margin-bottom: 20px;">
			<form action="func_identification.php" method="POST">
				<label>EMAIL</label>
				<input id="credential_bar" name="email" type="text">
				<br>
				<br>
				<br>
				<label>SENHA</label>
				<input id="credential_bar" name="password" type="password" style="font-weight: bolder;">
				<br>
				<br>
				<br>
				<input id="bt_submit" name="bt_login" type="submit" value="ENTRAR">
				<br>
				<a href="">RECUPERAR ACESSO</a>
			</form>
		</div>

		<div class="content" style="margin-top: 20px; padding: 20px; width:410px;">
			<form action="register.php">
				<input id="bt_register" name="bt_register" type="submit" value="CADASTRAR">
			</form>
		</div>
	</body>
</html>