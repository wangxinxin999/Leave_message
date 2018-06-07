<?php
//index.php?c=index&a=index

if(isset($_GET["c"])){
	$c = ucfirst(trim($_GET["c"]));
}else{
	$c = "Index";
}

if(isset($_GET["a"])){
	$a = trim($_GET["a"]);
}else{
	$a = "Index";
}
//°²È«:·ÀÖ¹xss sql×¢Èë csrf¹¥»÷
$cname = $c."Controller";
$aname = $a."Action";

$obj = new $cname;

$obj->$aname();

function __autoload($class_name){
	if(strpos($class_name,"Model")){
		include "./model/".$class_name.".php";
	}else if(strpos($class_name,"Controller")){
		include "./controller/".$class_name.".php";
	}else if(strpos($class_name,"mysql")===0){
		include "./lib/".$class_name.".class.php";
	}
}
?>