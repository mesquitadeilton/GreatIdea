<?php

Class daoProject{
	/* Database connection start */
	var $servername = "localhost";
	var $username = "ideias";
	var $password = "ideias";
	var $dbname = "dbideias";
	var $conn;
	function getConnstring() {
		$con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

  		/* check connection */
  		if (mysqli_connect_errno()) {
  			printf("FALHA NA CONEXÃO: %s\n", mysqli_connect_error());
  			exit();
  		} else {
  			$this->conn = $con;
  		}
  		return $this->conn;
  	}
}

?>
