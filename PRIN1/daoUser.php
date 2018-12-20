<?php
	class daoUser{
		private $servername = "localhost";
		private $database = "great_idea";
		private $username = "root";
		private $password = "";

		function __construct(){
			$link = $this->connect();
		}

		public function connect(){
			$link = mysqli_connect($this->servername, $this->username, $this->password, $this->database) or die("FALHA NA CONEXÃO");

			return $link;
		}

		public function register($name, $cpf, $birth_date, $email, $phone, $city, $state, $password){
			$link = $this->connect();
			$string = "INSERT INTO users(name, cpf, birth_date, email, phone, city, state, password) VALUES('$name', '$cpf', '$birth_date', '$email', '$phone', '$city', '$state', MD5('$password'))";

			mysqli_query($link, $string) or die("FALHA AO INSERIR NA TABELA");
		}

		public function validate_register($cpf, $email){
			$link = $this->connect();
			$string = "SELECT * FROM `users` WHERE `cpf` = '$cpf' OR `email` = '$email'";

			$query = mysqli_query($link, $string) or die("FALHA NA BUSCA");

			if(mysqli_num_rows($query) == 0){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}

		public function register_client($cpf){
			$link = $this->connect();
			$string = "INSERT INTO users_client(cpf) VALUES('$cpf')";

			mysqli_query($link, $string) or die("FALHA AO INSERIR NA TABELA CLIENT");
		}

		public function register_creator($cpf){
			$link = $this->connect();
			$string = "INSERT INTO users_creator(cpf) VALUES('$cpf')";

			mysqli_query($link, $string) or die("FALHA AO INSERIR NA TABELA CLIENT");
		}

		public function login($login, $password){
			$link = $this->connect();
			$string = "SELECT * FROM `users` WHERE `email` = '$login' AND `password` = MD5('$password')";

			$query = mysqli_query($link, $string) or die("FALHA NA BUSCA");

			if(mysqli_num_rows($query) > 0){
				$search = mysqli_fetch_array($query);
				
				session_start();
				$nick = explode(" ", (string)$search['name']);
				$_SESSION['nick'] = $nick[0];
				$_SESSION['name'] = $search['name'];
				$_SESSION['cpf'] = $search['cpf'];
				$_SESSION['birth_date'] = $search['birth_date'];
				$_SESSION['email'] = $search['email'];
				$_SESSION['phone'] = $search['phone'];
				$_SESSION['city'] = $search['city'];
				$_SESSION['state'] = $search['state'];

				if($this->check_account_client($search['cpf']))
					$_SESSION['check_client'] = TRUE;
				else
					$_SESSION['check_client'] = FALSE;

				if($this->check_account_creator($search['cpf']))
					$_SESSION['check_creator'] = TRUE;
				else
					$_SESSION['check_creator'] = FALSE;

				return TRUE;
			}
			else{
				return FALSE;
			}

		}

		public function check_account_client($cpf){
			$link = $this->connect();
			$string = "SELECT * FROM `users_client` WHERE `cpf` = '$cpf'";

			$query = mysqli_query($link, $string) or die("FALHA NA BUSCA");

			if(mysqli_num_rows($query) > 0)
				return TRUE;
			else
				return FALSE;
		}

		public function check_account_creator($cpf){
			$link = $this->connect();
			$string = "SELECT * FROM `users_creator` WHERE `cpf` = '$cpf'";

			$query = mysqli_query($link, $string) or die("FALHA NA BUSCA");

			if(mysqli_num_rows($query) > 0)
				return TRUE;
			else
				return FALSE;
		}

		public function update_register_name($new_name, $cpf){
			$link = $this->connect();
			$string = "UPDATE users SET name = '$new_name' WHERE cpf = '$cpf'";

			mysqli_query($link, $string) or die("FALHA AO INSERIR NA TABELA");

			session_start();
			$nick = explode(" ", (string)$new_name);
			$_SESSION['nick'] = $nick[0];
			$_SESSION['name'] = $new_name;
		}

		public function update_register_birth_date($new_birth_date, $cpf){
			$link = $this->connect();
			$string = "UPDATE users SET birth_date = '$new_birth_date' WHERE cpf = '$cpf'";

			mysqli_query($link, $string) or die("FALHA AO INSERIR NA TABELA");

			session_start();
			$_SESSION['birth_date'] = $new_birth_date;
		}

		public function update_register_phone($new_phone, $cpf){
			$link = $this->connect();
			$string = "UPDATE users SET phone = '$new_phone' WHERE cpf = '$cpf'";

			mysqli_query($link, $string) or die("FALHA AO INSERIR NA TABELA");

			session_start();
			$_SESSION['phone'] = $new_phone;
		}

		public function update_register_city($new_city, $cpf){
			$link = $this->connect();
			$string = "UPDATE users SET city = '$new_city' WHERE cpf = '$cpf'";

			mysqli_query($link, $string) or die("FALHA AO INSERIR NA TABELA");

			session_start();
			$_SESSION['city'] = $new_city;
		}

		public function update_register_state($new_state, $cpf){
			$link = $this->connect();
			$string = "UPDATE users SET state = '$new_state' WHERE cpf = '$cpf'";

			mysqli_query($link, $string) or die("FALHA AO INSERIR NA TABELA");

			session_start();
			$_SESSION['state'] = $new_state;
		}

		public function update_register_password($new_password, $cpf){
			$link = $this->connect();
			$string = "UPDATE users SET password = MD5('$new_password') WHERE cpf = '$cpf'";

			mysqli_query($link, $string) or die("FALHA AO INSERIR NA TABELA");

			session_start();
			$_SESSION['password'] = $new_password;
		}
	}
?>