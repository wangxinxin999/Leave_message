<?php
	session_start(); 
	$username = $_SESSION["name"]; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>留言板_wxx</title>
</head>
<center><body>
	<h3>欢迎<font color="red"><?php echo $username;?></font>来到留言板</h3>
	<table>
		<tr>
			<td>留言人:</td>
			<td><input type="text" value=<?php echo $username?> name='username' id='username'></td>
		</tr>
		<tr>
			<td>留言内容:</td>
			<td><textarea name="conten" id="content" cols="21" rows="10" placeholder='欢迎留言..'></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="button" value="提交留言~" id='sub' /></td>
		</tr>
	</table>
	
</body></center>
</html>
<script src="jQuery.js" type="text/javascript"></script>
<script>
	$("#sub").click(function(){
		var username = $("#username").val();
	 	var content  = $("#content").val();
	 	
	 	$.ajax({
            url: "indexs2.php",
            type: 'POST',
            data: {
               'username':username,
               'content':content,
            },
            dataType: 'json',
            success: function (msg) {
            	if(msg == 1){
            		alert("留言成功~")
            		location.href='indexs3.php';
            	}else{
            		alert("留言失败~")
            	}
            	       	
            	
            }
        })
	});
</script>