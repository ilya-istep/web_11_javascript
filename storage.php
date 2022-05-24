<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Корзина</title>
</head>
<body>
    <?php
        include("class/DataBase.php");

        $TovariIndex = new DataBase(); 

        // function viewBase($selectedTovar){
        //     foreach($base as $b){
        //         if($b['id'] = $selectedTovar['id']){

        //         }
        //     }
        // }


        if(isset($_GET['id'])){

        }
        else{
            echo "корзина пуста";
        }
    ?>
</body>
</html>