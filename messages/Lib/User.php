<?php
header('content-type:text/html;charset=utf-8');

include('Controller.php');

class User extends Controller
{

	public function index()
	{
		//include('user/login.php');
		$this->display('./Views/login');
	}
	
	//用户登录
	public function login($pdo,$username,$password)
	{
		
		$sql = "select * from table_user where username='$username'";
		$res = $pdo->query($sql)->fetchAll();
		$data = array();
        foreach ($res as $key => $val) {
            $data['username'] = $val['username'];
            $data['password'] = $val['password'];
            $data['id'] = $val['id'];
        }
        
        if(!empty($data)){
        	if ($data['password'] == "$password") {
        		
        		session_start();
        		$_SESSION['username'] = $username;
        		$_SESSION['id'] = $data['id'];
        		return 0;//登录成功

        	}else{
        		return 1;//密码错误
        	}
        }else{
        	return 2;//用户名不存在
        }
	

	}
	//用户注册
	public function register($pdo,$table_name,$arr)
	{
		$username = $arr['username'];
		$sql = "select * from table_user where username='$username'";
		$res = $pdo->query($sql)->fetchAll();
		if(empty($res)){
			$key = '';
	        $val = '';
	        foreach ($arr as $item => $value) {
	            $key .= $item . ',';
	            $val .= "'" . $value . "'" . ',';
	        }
	        $sql = "insert into " . $table_name . "(" . trim($key, ',') . ") values(" . trim($val, ',') . ")";
	        $res = $pdo->exec($sql);
	        return $res;
		}else{
			return 0;
		}
	
	}
}
