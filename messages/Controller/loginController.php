<?php

header('content-type:text/html;charset=utf-8');

include '../Lib/DB.php';
include '../Lib/User.php';

$username = $_POST['username'];
$password = $_POST['password'];
$db = DB::getInstance();
$pdo = $db->pdoContent();
$user = new User();

$data = $user->login($pdo,$username,$password);
if($data == 0){
	echo "<script>alert('登录成功!');location.href='listController.php'</script>";
}else if($data == 1){
	echo "<script>alert('用户密码错误');location.href='../Views/login.php'</script>";
}else if($data == 2){
	echo "<script>alert('用户不存在');location.href='../Views/login.php'</script>";
}
