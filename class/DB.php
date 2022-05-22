<?php 

	class DB{

		protected function select($selectUser){

			$users = [
						[
							'login' => 'Egor',
							'password' => '123',
						],
						[
							'login' => 'Anna',
							'password' => '123',
						],
						[
							'login' => 'Oleg',
							'password' => '123',
						],
						[
							'login' => 'Nikita',
							'password' => '321',
						]
					];

			foreach ($users as $user) {
				if($user['login'] == $selectUser['login'] && 
					$user['password'] == $selectUser['password']){

					return "есть";			
				}
			}

			return "нет";
		} 
	}