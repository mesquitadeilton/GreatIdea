<?php
	class user{
		private $name;
		private $email;
		private $phone;
		private $city;
		private $password;

		public function __construct(){
			
		}

		public function setName($name){
			$this->name = $name;
		}

		public function getName(){
			return $this->name;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setPhone($phone){
			$this->phone = $phone;
		}

		public function getPhone(){
			return $this->phone;
		}

		public function setCity($city){
			$this->city = $city;
		}

		public function getCity(){
			return $this->city;
		}

		public function setPassword($password){
			$this->password = $password;
		}

		public function getPassword(){
			return $this->password;
		}
	}
?>