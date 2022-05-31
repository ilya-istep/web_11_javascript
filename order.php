<?php
	session_start();
	include_once 'class/Order.php';
	include_once 'class/Product.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Корзина</title>
	<style>
		table{
			border: 1px solid #ccc;
			margin: 0 auto;
		}
		table td,
		table th{
			border: 1px solid #ccc;
			padding: 10px;
		}
		.order{
			position: absolute;
			right:10px;
			top: 0;
		}
		table td img{
			height: 50px;
		}
	</style>
</head>
<body>

	<div class="order">
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

	<table>
		<thead>
			<tr>
				<th scope="col">
					№
				</th>
				<th scope="col">
					Имя товара
				</th>
				<th scope="col">
					Изображение
				</th>
				<th scope="col">
					Количество
				</th>
				<th scope="col">
					Цена за ед.
				</th>
				<th scope="col">
					Общая цена
				</th>
			</tr>
		</thead>

		<tbody>
			<?php if(Order::writeCountProducts() === 0): ?>
				<tr>
					<td colspan="6">
						<p>Товаров в корзине пока нет</p>
					</td>
			</tr>
			<?php else: ?>
				<?php 
					$num = 1;
					$sum = 0;
					foreach(Order::writeOrderProducts() as $productOrder): 
					$productObj = new Product();
					$product = $productObj->getProduct($productOrder['id']);

					$sum += ($product['price'] * $productOrder['count']); 
				?>
					<tr>
						<td><?php echo $num; $num++; ?></td>
						<td><?php echo $product['name']?></td>
						<td><img src="images/<?php echo $product['image'] ?>" alt=""></td>
						<td><?php echo $productOrder['count'];?> шт.</td>
						<td><?php echo $product['price']?> руб.</td>
						<td><?php echo $product['price'] * $productOrder['count']; ?> руб.</td>
					</tr>
				<?php endforeach; ?>
				
				<tr>
					<td colspan="5"></td>
					<td colspan="5">Итого: <?php echo $sum; ?> руб.</td>
				</tr>
				
			
			<?php endif; ?>		
		</tbody>

	</table>

</body>
</html>

