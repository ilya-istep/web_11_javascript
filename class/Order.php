<?php 
	include_once 'class/Product.php';

	class Order extends Product{

		public $product_id = null;

		public function __construct($product_id = null){

			if($product_id === null){
				return;
			}
			else{
				$this->product_id = $product_id;
			}


			if(isset($_SESSION['orders']) && 
				is_array($_SESSION['orders']) && 
				count($_SESSION['orders']) > 0 && 
				$this->searchProductOrder()){

				$this->editProductCount();
	
			}
			else{
				// корзина пустая
				$this->addProduct();
			}
			
		}

		public function searchProductOrder(){
			
			foreach ($_SESSION['orders'] as $order) {
				if($order['id'] == $this->product_id){
					return true;
				}
			}
			return false;
		}

		public function addProduct(){
			$_SESSION['orders'][] = ['id' => $this->product_id, 'count' => 1];
		}

		public function editProductCount(){

			$newDataSession = [];

			foreach ($_SESSION['orders'] as $order) {
				if($order['id'] == $this->product_id){
					$order['count']++;
				}
				$newDataSession[] = $order;
			}

			$_SESSION['orders'] = $newDataSession;

		}

		public function newProductCount($newCount){

			$newDataSession = [];

			foreach ($_SESSION['orders'] as $order) {
				$order['count'] = $newCount;
				$newDataSession[] = $order;
			}

			$_SESSION['orders'] = $newDataSession;

			// $_SESSION['orders'] = $sess;
			// foreach ($sess as $index => $value) {
			// 	if($sess[$index] == $this->product_id){

			// 	}
			// }

		}

		static function writeOrderProducts(){
			if(isset($_SESSION['orders']) && 
				is_array($_SESSION['orders']) && 
				count($_SESSION['orders']) > 0){

				return $_SESSION['orders'];
			}
			else{
				return [];
			}
		}

		public function deleteOrder(){
			unset($_SESSION['orders']);
		}


		static public function writeCountProductOrder(){

			if(isset($_SESSION['orders'])){
				$allCount = 0;
				foreach($_SESSION['orders'] as $order){
					$allCount += $order['count'];
				}
				return $allCount;
			}
			else{
				return 0;
			}
		}

	}