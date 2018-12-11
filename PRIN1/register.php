<!DOCTYPE html>

<html lang="pt">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Cadastrar</title>

		<link rel="stylesheet" href="index.css">
		<link rel="stylesheet" href="identification.css">

		<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
	</head>

	<body>
		<header>
			<input id="bt_menu" type="checkbox">
			<label for="bt_menu">&#9776;</label>

			<nav class="menu">
				<ul>
					<li><a href="index.php">INICIO</a></li>
					<li><a href="">SOFTWARES</a></li>
					<li><a href="">PROTOTIPOS</a></li>
					<li><a href="">SOBRE</a></li>
				</ul>
			</nav>
		</header>

		<div class="content">
			<h1 style="text-align: center;">CADASTRAR</h1>
			<br>
			<form action="func_login.php" method="POST">
				<h4>NOME</h4>
				<input type="text" name="name">
				<br>
				<br>
				<h4>EMAIL</h4>
				<input type="text" name="email">
				<br>
				<br>
				<h4>TELEFONE</h4>
				<input type="text" name="phone">
				<br>
				<br>
				<h4>CIDADE</h4>
				<input type="text" name="city">
				<br>
				<br>
				<h4>SENHA</h4>
				<input type="password" name="password">
				<br>
				<br>
				<br>
				<input id="bt_identification" type="submit" name="bt_register" value="FINALIZAR">
			</form>
		</div>
	</body>
</html>