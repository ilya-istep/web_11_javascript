<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <form action="worker_card.php" method="POST" enctype="multipart/form-data" style='margin-bottom: 50px'>
        <p>Введите данные работника:</p>
        <p><input type="text" name="field_1" placeholder="Фамилия" required></p>     
        <p><input type="text" name="field_2"  placeholder="Имя" required></p>
        <p>Пол:
            <input type="radio" name="sex" value="1" checked>муж. 
		    <input type="radio" name="sex" value="2">жен.
        </p>
        <p>Загрузите диплом в формате jpg:</p>
        <p><input type="file" name="my_file" placeholder="Загрузите диплом" required></p>
    	<p><button type="submit">Отправить</button></p>
    </form>

    <?php
        // print_r($_POST);
        // print_r($_FILES);

        function writeData(){          
            echo '<p style="font-weight:bold">Карточка работника</p>
                  <p>Фамилия: '.$_POST['field_1'].'</p>
                  <p>Имя: '.$_POST['field_2'].'</p>';
            if($_POST['sex'] == 1){
                echo '<p>Пол: муж.</p>';
            }
            if($_POST['sex'] == 2){
                echo '<p>Пол: жен.</p>';
            }
        }

        function loadFile(){
            $upfile = './storage/'.$_FILES['my_file']['name'];
            if($_FILES['my_file']['type'] == "image/jpeg" && move_uploaded_file($_FILES['my_file']['tmp_name'], $upfile)){
                writeData();
                echo "Диплом:<br>
                    <a href='$upfile'><img style='width: 100px' src='$upfile'></a>";
            }
            else{
                echo "<p style='color: #f00'>Недопустимое расширение файла! Пожалуйста, повторите попытку</p>";
            }
        }

        if(isset($_POST) && !empty($_POST)){
            loadFile();
        }
        else{
            echo "<br>";
        }
    ?>
</body>
</html>