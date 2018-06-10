<?php

header('content-type:text/html;charset=utf-8');

include '../Lib/DB.php';
include '../Lib/Message.php';

session_start();
$arr['userid'] = $_SESSION['id'];
$arr['content'] = $_POST['content'];
$arr['intime'] = date("Y-m-d H:i:s",time());
$db = DB::getInstance();
$pdo = $db->pdoContent();
$mess = new Message();

$table_name = 'table_mess';
$data = $mess->adds($pdo,$table_name,$arr);
if($data){
	echo "<script>alert('留言成功,跳转留言列表!');location.href='listController.php'</script>";
}else{
	echo "<script>alert('留言失败,跳转留言列表!');location.href='listController.php'</script>";
}