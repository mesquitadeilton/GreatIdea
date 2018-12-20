<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">

		<title>Great Idea | MEU PERFIL</title>

		<link rel="shortcut icon" href="img/favicon.png"/>

		<link rel="stylesheet" href="account.css">
		<link rel="stylesheet" href="menu.css">

		<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">

		<script language="JavaScript" src="masks.js"></script>
	</head>

	<body>
		<?php 

		include 'menu.php';

		?>

		<div class="card">
			<form action="func_update_register.php" method="POST">
				<input id="credential_bar" maxlength="255" name="name" onkeyup="lettersOnly(this)" placeholder="NOME (CAMPO OBRIGATÓRIO)" type="text" value="<?php echo $_SESSION['name'] ?>" style="margin-right: 50px">
				<input readonly id="credential_bar" maxlength="14" name="cpf" onkeypress="mask(this, maskCPF)" placeholder="CPF (CAMPO OBRIGATÓRIO)" type="text" value="<?php echo $_SESSION['cpf'] ?>">
				<br>
				<br>
				<input id="credential_bar" maxlength="10" name="birth_date" onkeypress="mask(this, maskDate)" placeholder="DATA DE NASCIMENTO" type="text" value="<?php echo $_SESSION['birth_date'] ?>" style="margin-right: 50px; width: 140px;">
				<input readonly id="credential_bar" maxlength="255" name="email" placeholder="EMAIL (CAMPO OBRIGATÓRIO)" type="email"
				value="<?php echo $_SESSION['email'] ?>" style="margin-right: 50px; width: 200px;">
				<input id="credential_bar" maxlength="15" name="phone" onkeyup="mask(this, maskPhone)" placeholder="TELEFONE" type="text" value="<?php echo $_SESSION['phone'] ?>" style="width: 140px;">
				<br>
				<br>
				<input id="credential_bar" maxlength="100" name="city" onkeyup="lettersOnly(this)" placeholder="CIDADE" type="text" value="<?php echo $_SESSION['city'] ?>" style="margin-right: 50px">
				<select id="state" name="state" >
					<option disabled selected value=NULL>ESTADO</option>
					<option <?=($_SESSION['state'] == 'ACRE')?'selected':''?> >ACRE</option>
				    <option <?=($_SESSION['state'] == 'ALAGOAS')?'selected':''?> >ALAGOAS</option>
				    <option <?=($_SESSION['state'] == 'AMAPÁ')?'selected':''?> >AMAPA</option>
				    <option <?=($_SESSION['state'] == 'AMAZONAS')?'selected':''?> >AMAZONAS</option>
				    <option <?=($_SESSION['state'] == 'BAHIA')?'selected':''?> >BAHIA</option>
				    <option <?=($_SESSION['state'] == 'CEARÁ')?'selected':''?> >CEARÁ</option>
				    <option <?=($_SESSION['state'] == 'DISTRITO FEDERAL')?'selected':''?> >DISTRITO FEDERAL</option>
				    <option <?=($_SESSION['state'] == 'ESPÍRITO SANTO')?'selected':''?> >ESPRITO SANTO</option>
				    <option <?=($_SESSION['state'] == 'GOIÁS')?'selected':''?> >GOIÁS</option>
				    <option <?=($_SESSION['state'] == 'MARANHÃO')?'selected':''?> >MARANHÃO</option>
				    <option <?=($_SESSION['state'] == 'MATO GROSSO')?'selected':''?> >MATO GROSSO</option>
				    <option <?=($_SESSION['state'] == 'MATO GROSSO DO SUL')?'selected':''?> >MATO GROSSO DO SUL</option>
				    <option <?=($_SESSION['state'] == 'MINAS GERAIS')?'selected':''?> >MINAS GERAIS</option>
				    <option <?=($_SESSION['state'] == 'PARÁ')?'selected':''?> >PARÁ</option>
				    <option <?=($_SESSION['state'] == 'PARAÍBA')?'selected':''?> >PARAÍBA</option>
				    <option <?=($_SESSION['state'] == 'PARANÁ')?'selected':''?> >PARANÁ</option>
				    <option <?=($_SESSION['state'] == 'PERNAMBUCO')?'selected':''?> >PERNAMBUCO</option>
				    <option <?=($_SESSION['state'] == 'PIAUÍ')?'selected':''?> >PIAUÍ</option>
				    <option <?=($_SESSION['state'] == 'RIO DE JANEIRO')?'selected':''?> >RIO DE JANEIRO</option>
				    <option <?=($_SESSION['state'] == 'RIO GRANDE DO NORTE')?'selected':''?> >RIO GRANDE DO NORTE</option>
				    <option <?=($_SESSION['state'] == 'RIO GRANDE DO SUL')?'selected':''?> >RIO GRANDE DO SUL</option>
				    <option <?=($_SESSION['state'] == 'RONDÔNIA')?'selected':''?> >RONDÔNIA</option>
				    <option <?=($_SESSION['state'] == 'RORAIMA')?'selected':''?> >RORAIMA</option>
				    <option <?=($_SESSION['state'] == 'SANTA CATARINA')?'selected':''?> >SANTA CATARINA</option>
				    <option <?=($_SESSION['state'] == 'SÃO PAULO')?'selected':''?> >SÃO PAULO</option>
				    <option <?=($_SESSION['state'] == 'SERGIPE')?'selected':''?> >SERGIPE</option>
				    <option <?=($_SESSION['state'] == 'TOCANTIS')?'selected':''?> >TOCANTIS</option>
				</select>
				<br>
				<br>
				<input id="credential_bar" name="password" placeholder="SENHA" type="password">
				<br>
				<br>
				<br>
				<input <?=($_SESSION['check_client'] == TRUE)?'checked':''?> name="check_client" type="checkbox" style="margin-right: 5px;">
				<label>CLIENTE</label>
				<input <?=($_SESSION['check_creator'] == TRUE)?'checked':''?> name="check_creator" type="checkbox" style="margin-left: 20px; margin-right: 5px;">
				<label>CRIADOR</label>
				<input id="bt_submit" name="bt_update" type="submit" value="ATUZALIZAR">
				<br>
				<br>
			</form>
		</div>
	</body>
</html>