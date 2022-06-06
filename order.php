<?php 
	session_start();

	include_once 'class/Product.php';
	include_once 'class/Order.php';
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
			margin:  0 auto;
		}
		table td,
		table th{
			border: 1px solid #ccc;
			padding:  10px;
		}
		.order{
			position: absolute;
			right:10px;
			top: 0;
		}
		table td img{
			width: 150px;
			display: block;
		}
		.count{
			width: 25px;
		}
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="order">
		<p> 
			<a href="obr.php?show_order=1">
				В корзине <?php echo Order::writeCountProductOrder();?> товаров
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
	            	Общая
	            </th>
	        </tr>
		</thead>
		<tbody>

			<?php if(Order::writeCountProductOrder() === 0):?>
				<tr>
					<td colspan="6">
						<p>Товаров в корзине пока нет</p>
					</td>
				</tr>
			<?php else: ?>	
				<?php 
					$num = 1;
					$sum = 0;
					foreach (Order::writeOrderProducts() as $productOrder): 
						$productObj = new Product();
						$product = $productObj->getProduct($productOrder['id']);

						$sum += ($product['price'] * $productOrder['count']);
				?>
					<tr>
						<td><?php echo $num; $num++;?> </td>
						<td><?php echo $product['name']?></td>
						<td><img src="images/<?php echo $product['image']?>" alt=""></td>
						<td>
							<form action="obr.php" method="GET">
								<p><input class="count" type="text"
									name="newProductCount<?php //$coundId = $productOrder['id']; echo $coundId;?>" 
									placeholder="<?php echo $productOrder['count'];?>"> шт.</p>
								<p><input type="submit" value="Изменить"></p>
							</form>
							<?php// print_r($_SESSION['orders']); ?>
							<p>
								<button><a href="#">Удалить</a></button>
							</p>		 
						</td>
						<td><?php echo $product['price'];?> руб.</td>
						<td><?php echo $product['price'] * $productOrder['count'];?> руб.</td>
					</tr>
				<?php endforeach;?>

				<tr>
					<td colspan="5"></td>
					<td>Итого: <?php echo $sum;?> руб.</td>

				</tr>
			<?php endif; ?>

		</tbody>
	</table>
</body>
</html>