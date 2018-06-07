<?php
include('mysql.php');
session_start();
$id = $_SESSION["id"];
$result  = mysqli_query($link, "select * from tp_liuyan a inner join tp_user b on a.userid = b.t_id where userid = '$id'");
while ($arr = mysqli_fetch_assoc($result)) {
	$row[] = $arr;
}
?>
<center>
		<h3>留言板列表</h3>
		<table border="1">
			<tr>
				<td>id</td>
				<td>内容</td>
				<td>留言人</td>
				<td>操作</td>
			</tr>
			<?php foreach ($row as $key => $v): ?>
				<tr>
					<td><?php echo $v['id'] ?></td>
					<td><?php echo $v['t_user'] ?></td>
					<td><?php echo $v['content'] ?></td>
					<td><a href="del.php?id=<?php echo $v['id'];?>&type=1">删除</a>||<a href="del.php?id=<?php echo $v['id'];?>&type=2">修改</a></td>
				</tr>
			<?php endforeach ?>
			
		</table>
	</center>
