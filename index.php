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

	function printArray($arr){
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}

	// $a = [5, 7, 4, 7, 4];

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

	$links = [
		['name' => 'Главная', 'url' => 'https://ya.ru'],
		['name' => 'Контакты', 'url' => 'https://ya.ru'],
	];

	echo "<ul>";
	foreach ($links as $value) {
		echo "<li><a href='{$value['url']}'>{$value['name']}</a></li>";
	}
	echo "</ul>";

?>

