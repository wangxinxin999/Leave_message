<?php
class IndexController{
	function indexAction(){
		//include "./model/IndexModel.php";
		$model = new IndexModel();
		$info = $model->getList();
		
		$this->smarty->assign();
		$this->assign("info",$info);
		$this->display("info");
	}
	function index2Action(){
		echo 456;
	}
}

?>