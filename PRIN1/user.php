<?php
	class user{
		private $name;
		private $cpf;
		private $birth_date;
		private $email;
		private $phone;
		private $city;
		private $state;
		private $password;

		function __construct(){

		}

		public function setName($name){
			$this->name = $name;
		}
		public function getName(){
			return $this->name;
		}

		public function setCPF($cpf){
			$this->cpf = $cpf;
		}
		public function getCPF(){
			return $this->cpf;
		}

		public function setBirthDate($birth_date){
			$this->birth_date = $birth_date;
		}
		public function getBirthDate(){
			return $this->birth_date;
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

		public function setState($state){
			$this->state = $state;
		}
		public function getState(){
			return $this->state;
		}

		public function setPassword($password){
			$this->password = $password;
		}
		public function getPassword(){
			return $this->password;
		}
	}
?>