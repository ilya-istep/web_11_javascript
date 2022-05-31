<?php 
	session_start();

	include_once 'class/Order.php';
	include_once 'class/Product.php';

	$objProducts = new Product();

	$products = $objProducts->render();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Магазин</title>
	<style>
		.wrap{
			display: flex;
			flex-wrap: wrap;
		}
		.wrap > div{
			width: 20%;
		}
		.wrap > div img{
			display: block;
			height: 200px;
			margin:  0 auto;
		}
		.order{
			position: absolute;
			right:10px;
			top: 0;
		}
	</style>
</head>
<body>

	<div class="order">

		<?php 
			// if(isset($_SESSION['orders'])){

			// 	// echo count($_SESSION['orders']);

			// 	$sess = $_SESSION['orders'];

			// 	foreach($sess as $i => $value):?>
					<!-- <p>
						В корзине 
						<?php// echo $sess[$i]['count']; ?>
						шт товара 
						<?php //echo $sess[$i]['id'];?>
					</p> -->
				<?php //endforeach;
			//}
			//else{
			//	echo "<p>В корзине 0 товаров</p>";
			//}
		?>

		<p>
			<a href="obr.php?show_order=1">
				В корзине
				<?php 
					echo Order::writeCountProducts();
				?>
				товаров
			<a>
		</p>

		<a href="obr.php?delete=1">Очистить корзину</a>

	</div>

	<div class="wrap">
		<?php foreach ($products as $product):?>

			<div>
				<h5><?php echo $product['name']?></h5>
				<img src="images/<?php echo $product['image']?>" alt="">
				<a href="obr.php?product_id=<?php echo $product['id'];?>">В корзину</a>
			</div>

		<?php endforeach;?>
	</div>

</body>
</html>