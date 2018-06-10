<?php

header('content-type:text/html;charset=utf-8');

include '../Lib/DB.php';
include '../Lib/User.php';

$arr = $_POST;
$db = DB::getInstance();
$pdo = $db->pdoContent();
$user = new User;
$table_name = 'table_user';
$data = $user->register($pdo,$table_name,$arr);
if ($data == 1) {
    echo "<script>alert('注册成功~请登录!');location.href='../Views/login.php'</script>";
} else {
    echo "<script>alert('注册失败~请重试!');location.href='../Views/register.php'</script>";
}