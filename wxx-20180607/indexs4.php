<?php
	include('mysql.php');
	$username = $_POST['username'];
	$content = $_POST['content'];
	$userid = $_POST['userid'];
	$result = mysqli_query($link,"update tp_liuyan set content='$content' where id = '$userid'");
	if($result){
		echo 1;
	}else{
		echo 2;
	}
?>