<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <?php

        print_r($_POST);
        print_r($_FILES);

        echo '<p>Фамилия: '.$_POST['field_1'].'</p>';
        echo '<p>Имя: '.$_POST['field_2'].'</p>';
        if($_POST['sex'] == 1){
            echo '<p>Пол: муж.</p>';
        }
        if($_POST['sex'] == 2){
            echo '<p>Пол: жен.</p>';
        }

        $upfile = './storage/'.$_FILES['my_file']['name']; 

        if($_FILES['my_file']['type'] == "image/jpeg"){
            echo "<img src='./storage/'.$upfile.'>";
        }

    ?>

    <form action="worker.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="field_1" placeholder="Фамилия">       
        <input type="text" name="field_2"  placeholder="Имя">

        <input type="radio" name="sex" value="1" checked>М 
		<input type="radio" name="sex" value="2">Ж

        <input type="file" name="my_file" placeholder="Ваш диплом">
    	<button type="submit">Send</button>
    </form>

</body>
</html>