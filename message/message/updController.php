<?php

header('content-type:text/html;charset=utf-8');

include '../DB.php';
include '../Message.php';

$id = $_GET['id'];

$db = DB::getInstance();
$pdo = $db->pdoContent();
$mess = new Message();

$table_name = 'table_mess';
$data = $mess->select($pdo,$table_name,$id);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Message</title>
</head>
<center>
<body>
	<h3>修改留言</h3>
	<form action="upd.php" method="post">

		<table>
			<input type="hidden" name = "id" value ="<?php echo $data['mid']?>" />
			
			<tr>
				<td>留言内容:</td>
				<td><textarea name="content" id="content" cols="21" rows="10" placeholder='欢迎留言..'><?php echo $data['content']?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="提交留言~" /></td>
			</tr>
		</table>
	</form>
</body>
</center>
</html> 