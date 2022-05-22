<?php 

class Validator{

	// $data пользовательские данные
	// $type тип данных в формате строки
	static function typeDataValidator($data, $type){
		if(gettype($data) != $type){
			return [
					'status' => false,
					'msg' => 'Поле должно быть строкой'
				];
		}
	}

	// $str пользовательская строка
	// $maxLenght максимальная длина
	static function maxLengthValidator($str, $maxLenght){

		Validator::typeDataValidator($str, 'string');

		return (strlen($str) <= $maxLenght)? 
			['status' => true]
		: 
			[
				'status' => false,
				'msg' => 'Максимальная длина поля '.$maxLenght
			];
	}

	// $str пользовательская строка
	// $maxLenght максимальная длина
	static function minLengthValidator($str, $minLenght){

		Validator::typeDataValidator($str, 'string');

		return (strlen($str) >= $minLenght)? 
			['status' => true]
		: 
			[
				'status' => false,
				'msg' => 'Минимальная длина поля '.$minLenght
			];
	}

	// $str пользовательская строка
	// $simbol символ, который нельзя использовать
	static function simbolValidator($str){

		Validator::typeDataValidator($str, 'string');

		$simbols = ['?', '!', '^', '(', ')', '*', '<', '>'];
		$flag = null;

		foreach($simbols as $simbol){
			if(strpos($str, $simbol) !== false){
				$flag = false;
				echo $flag;
				echo "неверный символ";
				
				// [
				// 	'status' => false,
				// 	'msg' => 'Недопустимый символ'.$simbol,
				// ];

			}
			else{
				$flag = true;

				// ['status' => true];
			}
		}

		

		return ($flag == true)? 
			['status' => true]
		: 
			[
				'status' => false,
				'msg' => 'Недопустимый символ',
			];

	}

}