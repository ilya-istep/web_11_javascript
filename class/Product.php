<?php 

	include_once 'class/DB.php';

	class Product extends DB{

		public function render(){
			return $this->getProducts();
		}

		public function getProducts(){
			return $this->select();
		}

	}



