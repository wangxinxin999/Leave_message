<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>User-login</title>
</head>
<body>
<center>
	<h3>欢迎 ▲ 登录</h3>
	<form action="loginController.php" method="post">
	<table>
		<tr>
			<td>用户名:</td>
			<td><input type="text" name="username" /></td>
		</tr>
		<tr>
			<td>密码:</td>
			<td><input type="password" name="password" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="登录" />&nbsp;&nbsp;&nbsp;&nbsp;<a href="register.php">注册</a></td>
		</tr>
		
	</table>
	</form>
</center>
</body>
</html>