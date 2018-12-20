<div class="top">
	<div class="logo">
		Great Idea
	</div>

	<nav class="menu">
		<ul>
			<li><a href="index.php">INICIO</a></li>
			<li><a href="">SOFTWARES</a></li>
			<li><a href="">PROTOTIPOS</a></li>
			<li><a href="">SOBRE</a></li>
		</ul>
	</nav>

	<?php
		session_start();

		if(empty($_SESSION['nick'])){
	?>
		<div class="button">
			<form action="identification.php" style="margin-left: 5px; margin-right: 5px;">
				<input id="bt_identification" name="bt_account" type="submit" value="MINHA CONTA">
			</form>
		</div>

	<?php
		}
		else{
	?>
			<div class="button">
				<form action="account.php">
					<input id="bt_identification" name="bt_account" type="submit" value="<?php echo "OLÁ, ".($_SESSION['nick']) ?>">
				</form>
				<form action="func_logout.php" style="margin-left: -5px">
					<input id="bt_identification" name="bt_account" type="submit" value="SAIR">
				</form>
			</div>
	<?php
		}
	?>
</div>