<?php
/*

	$age = 30;

	// echo 'Алексей '.$age."<br>";
	// echo "Алексей $age";
	// print($age);
	// print_r($age);
	// var_dump($age);

	$a = [12, [5, [4, 6], 8], 6];

	// print_r($ar);
	// echo "<br>";
	// echo "<br>";
	// var_dump($ar);

	printArray($a);
*/

	// function printArray($arr){
	// 	echo "<pre>";
	// 	print_r($arr);
	// 	echo "</pre>";
	// }

	// // $a = [5, 7, 4, 7, 4];

	// for($i = 0; $i < count($a); $i++){
	// 	echo $a[$i];
	// }

	// $i = 0;

	// while($i < count($a)){
	// 	echo $a[$i];
	// 	$i++;
	// }

	// if(false){
	// 	echo "+";
	// }
	// else{
	// 	echo "-";
	// }
	
	// $b = 1;

	// switch($b){
	// 	case '0': echo "0"; break;
	// 	case '1': echo "1"; break;
	// 	default: echo "другое"; break;
	// }

	// $b = [];

	// for($i = 0; $i < count($a); $i++){
	// 	if($a[$i] > 4){
	// 		$flag = false;

	// 		for($j = 0; $j < count($b); $j++){
	// 			if($b[$j] == $a[$i]){
	// 				$flag = true;
	// 			}
	// 		}
			
	// 		if($flag == false){
	// 			$b[] = $a[$i];
	// 		}
	// 	}
	// }

	// print_r($b);

	// $a = ['name' => 'Oleg'];
	// $a['name'];


	// foreach ($a as $key => $value) {
	// 	echo $value;
	// }

	// $students = [
	// 	['name' => 'Alexey'],
	// 	['name' => 'Evgeniy']
	// ];

	// echo "<ul>";
	// foreach ($students as $value) {
	// 	// echo "<li> {$value['name']} </li>";
	// 	echo "<li>".$value['name']."</li>";
	// }
	// echo "</ul>";

	// $links = [
	// 	['name' => 'Главная', 'url' => 'https://ya.ru'],
	// 	['name' => 'Контакты', 'url' => 'https://ya.ru'],
	// ];

	// echo "<ul>";
	// foreach ($links as $value) {
	// 	echo "<li><a href='{$value['url']}'>{$value['name']}</a></li>";
	// }
	// echo "</ul>";
?>

<!-- <a href="index 2.php?a=123">ссылка</a> -->

<style>
	a{
		text-decoration: none;
	}
	.active, .active a{
		color: red;
	}
</style>

<?php

	$posts = ["Новость 1",
			  "Новость 2",
			  "Новость 3",
			  "Новость 4",
			  "Новость 5",
			  "Новость 6",
			  "Новость 7",
			  "Новость 8",
			  "Новость 9",
			  ];

	$count_posts_page = 2;

	if(!isset($_GET['page'])){
		$_GET['page'] = 1;
	}

	render($count_posts_page, $posts);

 	$count_pages = count($posts) / $count_posts_page;

 	for($i = 0; $i < $count_pages; $i++){
 		$page = $i + 1;

 		if(isset($_GET['page']) && $_GET['page'] == $page){
 			echo "<li class='active'><a href='index.php?page=".$page."'>".$page."</a></li>";
 		}
 		else{
 			echo "<li><a href='index.php?page=".$page."'>".$page."</a></li>";
 		}
 	}

 	echo "</ul>";

 	function render($count_posts_page, $posts){

 		$start_index;

 		if($_GET['page'] == 1){
 			$start_index = 0;
 		}
 		else{
 			$start_index = ($_GET['page'] - 1) * $count_posts_page;
 		}

 		$j = 0;
 		for($i = $start_index; $i < count($posts); $i++){
 			if($count_posts_page > $j){
 				echo "<div>". $posts[$i]."</div>";
 			}
 			$j++;
 		}
 	}
?>
