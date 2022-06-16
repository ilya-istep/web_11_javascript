<?php 

    if(isset($_POST['search']) && !empty($_POST['search'])){
        $connect = new mysqli('localhost', 'root', '', 'web11_db_slet');

        $sql = "SELECT * FROM `product` WHERE name LIKE '%".$_POST['search']."%'";

        $result = $connect->query($sql);
        $data = [];

        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $data[] = $row;
        }

        echo "<ul>";
        foreach($data as $product){
            echo "<li>{$product['name']}</li>";
        }
        echo "</ul>";
    }
 
?>

<form action="index.php" method="POST">
    <input type="text" name="search">
    <input type="submit" value="найти">
</form>

 <!-- SELECT g.name as g_name, s.name as sportsman_name FROM `groups` g INNER JOIN `sportsmens` s ON s.groups_id = g.id WHERE g.coach_id is NULL; -->

 <!-- SELECT g.name as g_name, c.name as coach_name FROM `groups` g INNER JOIN `coach` c ON g.coach_id = c.id INNER JOIN `sportsmens` s ON s.groups_id != g.id-->