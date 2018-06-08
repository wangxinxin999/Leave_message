<?php

header('content-type:text/html;charset=utf-8');

include '../DB.php';
include '../Message.php';

$id = $_GET['id'];

$db = DB::getInstance();
$pdo = $db->pdoContent();
$mess = new Message();
$table_name = 'table_mess';

$data = $mess->delete($pdo,$table_name,$id);
if($data){
	echo "<script>alert('留言已删除!');location.href='listController.php'</script>";
}else{
	echo "<script>alert('留言删除失败!');location.href='listController.php'</script>";
}
