<?php 

require_once 'database.php';
	class connection extends database{
		var $connection = ''; 
		public function __construct(){
			$data = $this->data();
			$this->connection = mysqli_connect(
				$data['host'],
				$data['username'],
				$data['password'],
				$data['database']
			);
		}

		public function query($q){
			return mysqli_query($this->connection, $q);
		}
	}

 ?>