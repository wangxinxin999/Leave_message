<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>留言板_wxx</title>
</head>
<center>
	<body>
	<table>
		<tr>
			<td>用户名:</td>
			<td><input type="text" id='user' name="user" placeholder='你的名字'/></td>
		</tr>
		<tr>
			<td>密码:</td>
			<td><input type="password" id='pwd' name='pwd' placeholder='你的密码'/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="button" value='提交' id='button'/></td>
		</tr>
	</table>
</body>
</center>
</html>

<script src="jQuery.js" type="text/javascript"></script>
<script>
	 $("#button").click(function(){
	 	var user = $("#user").val();
	 	var pwd  = $("#pwd").val();
	 	$.ajax({
            url: "indexs.php",
            type: 'POST',
            data: {
               'user':user,
               'pwd':pwd,
            },
            dataType: 'json',
            success: function (msg) {
            	if(msg == 1){
            		location.href = "add.php";
            	}else{
            		alert("用户名或者密码错误");
            	}
            	
            	
            }
        })

	 });  
</script>
