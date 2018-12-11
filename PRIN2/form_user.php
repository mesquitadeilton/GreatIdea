<!DOCTYPE html>

<html lang="pt">
	<head>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Cadastro | Usuario</title>
		<link rel="icon" href="img/icon1.php.png" type="png">

		<link rel="stylesheet" href="index_menu.css">
		<link rel="stylesheet" href="identification.css">
		<link rel="stylesheet" type="text/css" href="forms.css">

		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
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
			<h1 style="text-align: center;">CADASTRE-SE</h1>
			<br>
			<form action="register_idea.php" method="POST">
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
				<input type="passwords" name="passwords">
				<br>
				<br>
				
				<input id="bt_identification" type="submit" name="bt_register" value="FINALIZAR">
			</form>
		</div>
	</body>
</html>