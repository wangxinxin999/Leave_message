<?php

class Controller
{
	public function display($tplname)
	{
		include('./'.$tplname.'.php');
	}

	// public function assign($name,$value)
	// {
	// 	$this->smarty->assign($name,$value);
	// }
}

