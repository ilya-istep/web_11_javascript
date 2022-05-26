<?php
    session_start();

    include_once 'class/Product.php';

    class Order extends Product{

        public $product_id = null;

        public function __construct($product_id = null){ //конструктор всегда public
           
            if($product_id === null){
                return;
            }
            else{
                $this->product_id = $product_id;
            }

            // print_r($this->getProducts());

            if(isset($_SESSION['orders']) && 
                is_array($_SESSION['orders']) && 
                count($_SESSION['orders']) > 0){

                // товары в корзине есть

                $this->editProductCount();

                if($this->searchProductOrder()){
                    // такой товар есть
                }
                else{
                    $this->addProduct();
                }

            }
            else{
                // корзина пустая
                $this->addProduct();
            }

        }

        public function searchProductOrder(){
            // корзина пустая
           
            foreach($_SESSION['orders'] as $order){
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

            foreach($_SESSION['orders'] as $order){
                if($order['id'] == $this->product_id){
                    $order['count']++;              
                }
                $newDataSession[] = $order; 
            }

            $_SESSION['orders'] =  $newDataSession;
        }

        public function deleteOrder(){
            unset($_SESSION['orders']);
        }

    }

?>