<?php
	include('mysql.php');
	$id = $_GET['id'];
	$type = $_GET['type'];
	if($type == 1){
		$result = mysqli_query($link,"delete from tp_liuyan where id = '$id'");
		echo "<script>alert('删除成功');location.href='indexs3.php'</script>";
	}else{
		$result = mysqli_query($link,"select * from tp_liuyan where id = '$id'"); 
		$arr = mysqli_fetch_assoc($result);	
	}
?>
<?php
	session_start(); 
	$username = $_SESSION["name"]; 
	if ($type != 1) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>留言板_wxx</title>
</head>
<body>
	<h3>修改留言</h3>
	<table>
		<input type="hidden" id = 'userid' value="<?php echo $arr['id']?>" />
		<tr>
			<td>留言人:</td>
			<td><input type="text" value=<?php echo $username?> name='username' id='username'></td>
		</tr>
		<tr>
			<td>留言内容:</td>
			<td><textarea name="conten" id="content" cols="21" rows="10" ><?php echo $arr['content']?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="button" value="提交" id='sub' /></td>
		</tr>
	</table>
	
</body>
</html>
<script src="jQuery.js" type="text/javascript"></script>
<script>
	$("#sub").click(function(){
		var username = $("#username").val();
	 	var content  = $("#content").val();
		var userid = $("#userid").val();

	 	$.ajax({
            url: "indexs4.php",
            type: 'POST',
            data: {
               'username':username,
               'content':content,
               'userid':userid,
            },
            dataType: 'json',
            success: function (msg) {
            	if(msg == 1){
            		alert("修改成功~");
            		location.href='indexs3.php';
            	}else{
            		alert("修改失败~");
            	}
            	       	
            	
            }
        })
	});
</script>
<?php
	}
?>

