<?php 

	class Database extends PDO {

		public function __construct() {
			$dsn  = 'mysql:dbname=mvc; host=localhost';
			$user = 'root';
			$pass = '';
			parent::__construct($dsn, $user, $pass);
		}
	}

 ?>