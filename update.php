<?php
    $obj = new mysqli('localhost', 'root', '', 'web11_db_slet');

     function selectData($obj){
        $sql = 'SELECT id, name FROM `lang` WHERE id = '.$_GET['lang_update'];
        $sourse = $obj->query($sql);
        $data;
        while($row = $sourse->fetch_array(MYSQLI_ASSOC)){
            $data = $row;
        }
        return $data;
    }

    if(isset($_GET['lang_update'])){
    	$data = selectData($obj);
    }
    else{
    	header("location: index.php");
    }
?>

<form action="index.php" method="POST">
	<input type="text" name="lang" value="<?php echo $data['name']; ?>">
	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
	<input type="submit" value="обновить">
</form>