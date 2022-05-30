<?php 

	session_start();

	if(isset($_GET['product_id'])) {
		$product_id = (int)$_GET['product_id'];

		include_once 'class/Order.php';

		$objOrder = new Order($product_id);
	}

	if(isset($_GET['product_name'])) {

		$product_name = $_GET['product_name'];

		// echo $product_name;
		// die();
		
	}

	if(isset($_GET['delete']) && $_GET['delete'] == 1) {
		
		include_once 'class/Order.php';

		$objOrder = new Order();
		$objOrder->deleteOrder();
	}

	header("location: index.php?return_name=$product_name");