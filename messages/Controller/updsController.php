<?php

header('content-type:text/html;charset=utf-8');

include '../Lib/DB.php';
include '../Lib/Message.php';

$id = $_POST['id'];
$content = $_POST['content'];

$db = DB::getInstance();
$pdo = $db->pdoContent();
$mess = new Message();

$table_name = 'table_mess';
$data = $mess->update($pdo,$table_name,$id,$content);
if($data){
	echo "<script>alert('留言已修改,跳转留言列表!');location.href='listController.php'</script>";
}else{
	echo "<script>alert('留言修改失败,跳转留言列表!');location.href='listController.php'</script>";
}
