<?php

class Message
{
	//展示留言列表
	public function show($pdo,$table_name,$username)
	{
		$sql = "select * from ".$table_name." a inner join table_user b on a.userid=b.id  where username='$username'";
		$data = $pdo->query($sql)->fetchAll();
        $arr = array();
        foreach ($data as $key => $val) {
            $arr[$key]['content'] = $val['content'];
            $arr[$key]['username'] = $val['username'];
            $arr[$key]['mid'] = $val['mid'];
        }
        return $arr;
	}
	public function select($pdo,$table_name,$id)
	{
		$sql = "select * from ".$table_name." a inner join table_user b on a.userid=b.id  where mid='$id'";
		$data = $pdo->query($sql)->fetchAll();
        $arr = array();
        foreach ($data as $key => $val) {
            $arr['content'] = $val['content'];
            $arr['username'] = $val['username'];
            $arr['mid'] = $val['mid'];
        }
        return $arr;
		print_r($arr);die;

	}
	//添加留言
	public function adds($pdo,$table_name,$arr)
	{
		$key = '';
        $val = '';
        foreach ($arr as $item => $value) {
            $key .= $item . ',';
            $val .= "'" . $value . "'" . ',';
        }
        $sql = "insert into " . $table_name . "(" . trim($key, ',') . ") values(" . trim($val, ',') . ")";
        $res = $pdo->exec($sql);
        return $res;
	}
	//修改留言
	public function update($pdo,$table_name,$id,$content)
	{
		$sql = "update ".$table_name." set content = ' $content' where mid = '$id'";
		$res = $pdo->exec($sql);
        return $res;
	}
	//删除留言
	public function delete($pdo,$table_name,$id)
	{
		$sql = "delete from " . $table_name . " where mid = '$id'";
        $res = $pdo->exec($sql);
        return $res;
	}
}