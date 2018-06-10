<?php

header('content-type:text/html;charset=utf-8');

include '../Lib/DB.php';
include '../Lib/Message.php';
$db = DB::getInstance();
$pdo = $db->pdoContent();
$mess = new Message();
session_start();
$username = $_SESSION['username'];
$table_name = 'table_mess';
$data = $mess->show($pdo,$table_name,$username);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<body>
	<center>
		<h3>留言板列表</h3>
		<table border="1">
			<tr>
				<td>id</td>
				<td>内容</td>
				<td>留言人</td>
				<td>操作</td>
			</tr>
			<?php foreach ($data as $key => $v): ?>
				<tr>
					<td><?php echo $v['mid'] ?></td>
					<td><?php echo $v['username'] ?></td>
					<td><?php echo $v['content'] ?></td>
					<td><a href="delController.php?id=<?php echo $v['mid'];?>">删除</a>||
					<a href="updController.php?id=<?php echo $v['mid'];?>">修改</a></td>
				</tr>
			<?php endforeach ?>
			
		</table>
		<a href="../Views/add.php">点击这里,添加留言</a>
	</center>
</body>
</html>
