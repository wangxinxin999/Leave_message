<?php
	session_start();
	$username = $_SESSION['username'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Message</title>
</head>
<center>
<body>
	<h3>欢迎<font color="red"><?php echo $username;?></font>来到留言板</h3>
	<form action="../Controller/addController.php" method="post">
		<table>
			<tr>
				<td>留言人:</td>
				<td><input type="text" value=<?php echo $username?> name='username' id='username'></td>
			</tr>
			<tr>
				<td>留言内容:</td>
				<td><textarea name="content" id="content" cols="21" rows="10" placeholder='欢迎留言..'></textarea></td>
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