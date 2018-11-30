<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Good Ideia</title>

		<link rel="stylesheet" href="style.css">

		<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
	</head>

	<body>
		<div class="top">
			<input id="bt_menu" type="checkbox">
			<label for="bt_menu">&#9776;</label>

			<?php
				session_start();

				if (!empty($_SESSION['name']))
					echo "Olá ".$_SESSION['name'];
			?>
		</div>

		<br>
		<form action="register.php">
			<input id="bt_register" type="submit" name="bt_register" value="CADASTRAR">
		</form>
		<br>
		<form action="login.php">
			<input id="bt_login" type="submit" name="bt_register" value="FAZER LOGIN">
		</form>
	</body>
</html>