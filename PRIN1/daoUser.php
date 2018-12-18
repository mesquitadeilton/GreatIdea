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

		public function register_client($cpf){
			$link = $this->connect();
			$string = "INSERT INTO client(cpf) VALUES('$cpf')";

			mysqli_query($link, $string) or die("FALHA AO INSERIR NA TABELA CLIENT");
		}

		public function register_creator($cpf){
			$link = $this->connect();
			$string = "INSERT INTO creator(cpf) VALUES('$cpf')";

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
				$_SESSION['nick'] = strtoupper($nick[0]);
				$_SESSION['name'] = $search['name'];
				$_SESSION['cpf'] = $search['cpf'];
				$_SESSION['birth_date'] = $search['birth_date'];
				$_SESSION['email'] = $search['email'];
				$_SESSION['phone'] = $search['phone'];
				$_SESSION['city'] = $search['city'];
				$_SESSION['state'] = $search['state'];

				return TRUE;
			}
			else{
				return FALSE;
			}

		}
	}
?>