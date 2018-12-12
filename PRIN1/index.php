<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">

		<title>Great Idea</title>

		<link rel="stylesheet" href="index.css">
		<link rel="stylesheet" href="menu.css">

		<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
	</head>

	<body>
		<?php
			include 'menu.php';
		?>

		<div class="search">
			<form action="search.php" style="margin: auto;">
				<input id="search_bar" name="search_bar" type="text">
				<input id="bt_search" name="bt_search" type="submit" value="BUSCAR">
			</form>
		</div>
	</body>
</html>