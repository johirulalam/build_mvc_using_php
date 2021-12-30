<?php 

class Model extends Database{

	protected $db = array();

	public function __construct() {
		$this->db = new Database();
	}
}



 ?>