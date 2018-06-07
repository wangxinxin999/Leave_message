<?php
class IndexModel extends BaseModel{
	public function getList(){
		//$db = mysql::getInstance();
		$row = $this->db->getRow("select * from tp_user where t_id = 1");
		
		return $row;
	}
}
?>