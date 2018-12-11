<!DOCTYPE html>

<html lang="pt">
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Cadastrar | Ideia </title>
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

			<div class="name_site">
				<a  href="http://localhost/GitHub/Projeto-PRIN/PRIN/index.php"> Great Idea <img id="logo" src="img/icon1.php.png"></a>
			</div>
			
			<nav class="menu">
				<ul>
					<li><a href="index.php">INICIO</a></li>
					<li><a href="#">SOFTWARES</a></li>
					<li><a href="#">PROTOTIPOS</a></li>
					<li><a href="#">SOBRE</a></li>
					<li><a href="#">CONTATO</a></li>
				</ul>
			</nav>

			<?php 
			session_start();
			if ($_SESSION['name']!=null) 
				      echo '<div id="user">Bem-vindo ' . $_SESSION['name'] . '!</div>';
			
			?>
		</header>

		<div class="content">
			<h1 style="text-align: center;">CADASTRE A SUA IDEIA</h1>
			<br>
			<form action="daoIdea.php" method="POST">
				<h4>TÍTULO</h4>
				<input type="text" name="title">
				<br>
				<br>
				<h4>DESCRIÇÃO</h4>
				<input type="text" name="description">
				<br>
				<br>
				<h4>VALOR</h4>
				<input type="text" name="value">
				<br>
				<br>
				<h4>CONTATO</h4>
				<input type="text" name="contact">
				<br>
				<br>

				<input id="bt_identification" type="submit" name="bt_register" value="FINALIZAR">
			</form>
		</div>
	</body>
</html>