<?php
	
	// $upfile = './storage/'.rand().$_FILES['my_file']['name']; // добавляет рандомные буквы к имени

	// $upfile = './storage/'.date("Y-m-d_H-i-s").$_FILES['my_file']['name']; // добавляет дату к имени

	$hash = md5(date("Y-m-d_H-i-s").$_FILES['my_file']['name']);// добавляет шифрованный хэш к имени файла
	$upfile = './storage/'.$hash."-".$_FILES['my_file']['name']; 

	$msg = [
			'ошибка загрузки',
			'файл успешно загружен',
			'данный формат не поддерживается',
			'слишком большой вес',
		];

	function writeJSON($status, $msg){

		$data = json_encode(['status' => $status, 'data' => $msg]);
		header("location: form.php?data=".$data);
		die();
	}

	if($_FILES['my_file']['size'] > 500000){
		writeJSON('error', $msg['3']);
	}

	if($_FILES['my_file']['type'] != "image/png"){
		// проверяет формат
		writeJSON('error', $msg['2']);
	}	
		
	if (move_uploaded_file($_FILES['my_file']['tmp_name'], $upfile)) {
		// всё круто
		writeJSON('ok', $msg['1']);
	} 
	else {
		//ошибка
		writeJSON('error', $msg['0']);
	}
?>