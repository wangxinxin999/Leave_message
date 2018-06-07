<?php
include('mysql.php');
session_start();
$username = $_POST['username'];
$content = $_POST['content'];
$userid = $_SESSION["id"];
$time = date('Y-m-d H:i:s',time());
$result  = mysqli_query($link, "insert into tp_liuyan (content,userid,intime) values('$content','$userid','$time')");
if($result){
	echo 1;
}else{
	echo 2;
}
?>