<?php
	class idea{
		private $title;
		private $description;
		private $value;
		private $contact; // User


		public function __construct(){
			
		}

		public function setTitle($title){
			$this->title = $title;
		}

		public function getTitle(){
			return $this->title;
		}

		public function setDescription($description){
			$this->description = $description;
		}

		public function getDescription(){
			return $this->description;
		}

		public function setValue($Value){
			$this->Value = $value;
		}

		public function getValue(){
			return $this->value;
		}

		public function setContact($Contact){
			$this->Contact = $contact;
		}

		public function getContact(){
			return $this->contact;
		}

	}
?>