<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">

		<title>Great Idea | CADASTRAR</title>

		<link rel="stylesheet" href="identification.css">
		<link rel="stylesheet" href="index.css">
		<link rel="stylesheet" href="menu.css">

		<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
	</head>
	<body>
		<div class="content" style="height: auto;">
			<form action="func_register.php" method="POST">
				<label>NOME</label>
				<input id="credential_bar" name="name" type="text">
				<br>
				<br>
				<label>CPF</label>
				<input id="credential_bar" name="cpf" type="text">
				<br>
				<br>
				<label>DATA DE NASCIMENTO</label>
				<input id="credential_bar" name="birth_date" type="date">
				<br>
				<br>
				<label>EMAIL</label>
				<input id="credential_bar" name="email" type="text">
				<br>
				<br>
				<label>TELEFONE</label>
				<input id="credential_bar" name="phone" type="number">
				<br>
				<br>
				<label>CIDADE</label>
				<br>
				<input id="credential_bar" name="city" type="text" style="width: 200px">
				<select id="state" name="state">
					<option>ACRE</option>
				    <option>ALAGOAS</option>
				    <option>AMAPA</option>
				    <option>AMAZONAS</option>
				    <option>BAHIA</option>
				    <option>CEARÁ</option>
				    <option>DISTRITO FEDERAL</option>
				    <option>ESPIRITO SANTO</option>
				    <option>GOIAS</option>
				    <option>MARANHÃO</option>
				    <option>MATO GROSSO</option>
				    <option>MATO GROSSO DO SUL</option>
				    <option>MINAS GERAIS</option>
				    <option>PARA</option>
				    <option>PARAIBA</option>
				    <option>PARANÁ</option>
				    <option>PERNAMBUCO</option>
				    <option>PIAUI</option>
				    <option>RIO DE JANEIRO</option>
				    <option>RIO GRANDE DO NORTE</option>
				    <option>RIO GRANDE DO SUL</option>
				    <option>RONDONIA</option>
				    <option>RORAIMA</option>
				    <option>SANTA CATARINA</option>
				    <option>SAO PAULO</option>
				    <option>SERGIPE</option>
				    <option>TOCANTIS</option>
				</select>
				<br>
				<br>
				<label>SENHA</label>
				<input id="credential_bar" name="password" type="password">
				<br>
				<br>
				<br>
				<input name="check_client" type="checkbox" style="margin-right: 5px;">
				<label>CLIENTE</label>
				<input name="check_creator" type="checkbox" style="margin-left: 20px; margin-right: 5px;">
				<label>CRIADOR</label>
				<input id="bt_submit" name="bt_register" type="submit" value="CADASTRAR">
				<br>
				<br>
			</form>
		</div>
	</body>
</html>