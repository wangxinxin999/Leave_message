<?php
class BaseModel{
	public $db = false;
	public function __construct(){
		$this->db = mysql::getInstance();

	}
	
}

?>