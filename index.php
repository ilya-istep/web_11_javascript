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
	<title>Мотоциклы</title>
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
            margin: 0 auto;
        }
        .order{
            position: absolute;
            right: 10px;
            top: 0;
        }
    </style>
</head>
<body>

    <div class="order">
        <?php
            if(isset($_SESSION['orders'])){
                echo count($_SESSION['orders']);
                // echo count($_SESSION['product_id']['count']);
            }
            else{
                echo 0;
            }
            echo "<pre>";
                print_r($_SESSION['orders']);
            echo "</pre>";

        ?>
        <a href="order.php?delete=1">Очистить корзину</a>
    </div>


    <div class="wrap">

        <?php foreach ($products as $product):?>

            <div>
                <h5><?php echo $product['name']?></h5>
                <a href="order.php?product_id=<?php echo $product['id'];?>">
                    <img src="images/<?php echo $product['image'];?>">
                    <span>В корзину</span>
                </a>
            </div>

        <?php endforeach;?>

    </div>
</body>
</html>







