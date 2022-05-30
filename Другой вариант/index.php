<?php 
	session_start();

	include_once 'class/Product.php';

	$objProducts = new Product();

	$products = $objProducts->render();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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
			width: 80%;
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
				if(isset($_SESSION['orders'])){

					// echo count($_SESSION['orders']);

					$sess = $_SESSION['orders'];
					$name = $_GET['return_name'];
					foreach($sess as $i => $value):?>
						<p>
							В корзине <?php echo $sess[$i]['count']; ?>шт товара <?php echo $sess[$i]['id'];?>
						</p>
					<?php endforeach;
				}
				else{
					echo "<p>В корзине 0 товаров</p>";
				}
			?>

		<a href="order.php?delete=1">Очистить корзину</a>

		<!-- <?php print_r($_GET) ?> -->

	</div>

	<div class="wrap">
		<?php foreach ($products as $product):?>

			<div>
				<h5><?php echo $product['name']?></h5>
				<img src="images/<?php echo $product['image']?>" alt="">
				<a href="order.php?product_id=<?php echo $product['id'];?>&product_name=<?php echo $product['name'];?>">В корзину</a>
			</div>

		<?php endforeach;?>
	</div>

</body>
</html>