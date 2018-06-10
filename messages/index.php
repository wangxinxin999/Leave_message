<?php

//index.php?c=index&a=index

$controller = isset($_GET["c"])? ucfirst(trim($_GET["c"])):'User';

$action = isset($_GET["a"])? trim($_GET["a"]): 'index';

include('/Lib/'.$controller.'.php');

$obj = new $controller();

$obj->$action();