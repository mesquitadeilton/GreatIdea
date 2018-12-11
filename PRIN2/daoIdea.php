<?php

	include 'Idea.php';
	class daoIdea{
		private $servername = "localhost";
		private $database = "dbideias";
		private $username = "ideias";
		private $password = "ideias";

		function __construct(){
			$link = $this->connect();
		}

		public function connect(){
			$link = mysqli_connect($this->servername, $this->username, $this->password, $this->database) or die("FALHA NA CONEXÃO");

			return $link;
		}

		public function insert($title, $description, $value, $contact){
			$link = $this->connect();
			$string = "INSERT INTO idea(id, title, description, value, contact) VALUES('$title', '$description', $value, '$contact')";

			mysqli_query($link, $string) or die("FALHA AO INSERIR NA TABELA");
		}

		public function busca($title){
			$link = $this->connect();
			$string = "SELECT * FROM users WHERE title = '$title";

			$query = mysqli_query($link, $string) or die("FALHA NA BUSCA");
			$search = mysqli_fetch_array($query);

			$idea = new Idea();
			$idea->setTitle = $search['title'];
			$idea->setDescription = $search['description'];
			$idea->setValue = $search['value'];
			$idea->setContact = $search['contact'];
		

			

				return $idea;
			}
			else{
				return null;
			}
		}
	}
?>