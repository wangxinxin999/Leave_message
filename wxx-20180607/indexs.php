<?php
include('mysql.php');
$user = $_POST['user'];
$pwd = $_POST['pwd'];
session_start();
$_SESSION["name"]=$user;
$result  = mysqli_query($link, "select * from tp_user where t_user = '$user' and t_pwd = '$pwd'");
$arr = mysqli_fetch_assoc($result);
$_SESSION["id"]=$arr['t_id'];
if(empty($arr)){
	echo 0;
}else{
	echo 1;
}
?>