<?php
	class database{
		private $servername = "localhost";
		private $database = "database";
		private $username = "root";
		private $password = "";

		function __construct(){
			$link = $this->connect();
		}

		public function connect(){
			$link = mysqli_connect($this->servername, $this->username, $this->password, $this->database) or die("FALHA NA CONEXÃO");

			return $link;
		}

		public function insert($name, $email, $phone, $city, $password){
			$link = $this->connect();
			$string = "INSERT INTO users(name, email, phone, city, password) VALUES('$name', '$email', '$phone', '$city', MD5('$password'))";

			mysqli_query($link, $string) or die("FALHA AO INSERIR NA TABELA");
		}

		public function login($login, $password){
			$link = $this->connect();
			$string = "SELECT * FROM users WHERE email = '$login' AND password = MD5('$password')";

			$query = mysqli_query($link, $string) or die("FALHA NA BUSCA");
			$search = mysqli_fetch_array($query);
			$name = $search['name'];
			$email = $search['email'];
			$phone = $search['phone'];
			$city = $search['city'];
			$password = $search['password'];

			if(mysqli_num_rows($query) > 0){
				session_start();

				$_SESSION['name'] = $name;
				$_SESSION['email'] = $email;
				$_SESSION['phone'] = $phone;
				$_SESSION['city'] = $city;
				$_SESSION['password'] = $password;

				return TRUE;
			}
			else{
				return FALSE;
			}
		}
	}
?>