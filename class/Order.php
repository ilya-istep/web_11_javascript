<?php 
	include_once 'class/Product.php';

	class Order extends Product{

		public $product_id = null;

		public $product_name = null;

		public function __construct($product_id = null){

			if($product_id === null){
				return;
			}
			else{
				$this->product_id = $product_id;
			}

			if(isset($_SESSION['orders']) && 
				is_array($_SESSION['orders']) && 
				count($_SESSION['orders']) > 0)
			{
				// товары в корзине есть
				if($this->searchProductOrder()){
					// такой товар есть
					$this->editProductCount();
				}
				else{
					// такого товара нет
					$this->addProduct();
				}
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

		static function writeOrderProducts(){
			if(isset($_SESSION['orders']) && 
				is_array($_SESSION['orders']) && 
				count($_SESSION['orders']) > 0)
			{
				return $_SESSION['orders'];
			}
			else{
				return [];
			}

		}

		public function deleteOrder(){
			unset($_SESSION['orders']);
		}

		static public function writeCountProducts(){
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