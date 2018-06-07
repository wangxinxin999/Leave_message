<?php
header("Content-type:text/html;charset=utf-8");
$db = array(
    'host' => '127.0.0.1',
    'port' => '3306',
    'dbname' => 'xx_test_tp',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
);

//mysqli过程化风格
//建立连接:相比mysql_connect可以直接选择dbname、port
//$link = mysqli_connect($db['host'], $db['username'], $db['password'], $db['dbname'], $db['port']);
$link = mysqli_connect($db['host'], $db['username'], $db['password']) or die( 'Could not connect: '  .  mysqli_error ($link));

//选择数据库
mysqli_select_db($link, $db['dbname']) or die ( 'Can\'t use foo : '  .  mysqli_error ($link));

mysqli_set_charset($link, $db['charset']);
?>