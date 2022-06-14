<?php
    $obj = new mysqli('localhost', 'root', '', 'web11_db_slet');

     function selectData($obj){

        if(isset($_GET['sort_asc']) && $_GET['sort_asc'] == 1){
            $sql = 'SELECT id, name FROM `lang` ORDER BY name DESC';
        }
        else{
            $sql = 'SELECT id, name FROM `lang` ORDER BY name ASC';
        }

        $sourse = $obj->query($sql);
        $data = [];
        while($row = $sourse->fetch_array(MYSQLI_ASSOC)){
            $data[] = $row;
        }
        return $data;
    }

    if(isset($_GET['lang_name'])){
        $lang = $_GET['lang_name'];
        $data = selectData($obj);
        $flag = false;
        foreach($data as $value){
            if($value['name'] == $lang){
                $flag = true;
                break;
            }
        }
        if(!$flag){
            $sql = 'INSERT INTO `lang` (name) VALUES(\''.$lang.'\')';
            $obj->query($sql);
        // header("location: index.php");
        }
    }

    if(isset($_POST['lang']) && isset($_POST['id'])){
        $sql = 'UPDATE `lang` SET name = \''.$_POST['lang'].'\' WHERE id = '.$_POST['id'];
        $obj->query($sql);
    }

    if(isset($_GET['lang_delete'])){
        $sql = 'DELETE FROM `lang` WHERE id = '.$_GET['lang_delete'];
        $obj->query($sql);
    }

    $data = selectData($obj);

    echo "<ul>";
    foreach($data as $value){
        echo "<li>{$value['name']}
        <a href='index.php?lang_delete={$value['id']}'> удалить</a>
        <a href='update.php?lang_update={$value['id']}'> обновить</a>
        </li>";
    }
    echo "</ul>";
?>

<form action="index.php" method="GET">
    <input type="text" placeholder="Введите язык" name="lang_name">
    <input type="submit" value="Добавить">
</form>

<form action="index.php" method="GET">
    <input type="radio" name="sort_asc" value="0" checked>По возрастанию
    <input type="radio" name="sort_asc" value="1">По убыванию
    <input type="submit" name="отсортировать">
</form>