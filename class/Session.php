<?php 

	class SessionClass{

		function saveSession($login){

			$_SESSION['auth'] = md5($login);
		}

		function deleteSession(){

		}
	}

?>