<?php

//封装mysql 链接数据库 php_mysql
//封装mysql 链接数据库 php_mysqli
//封装mysql 链接数据库 php_pdo
/*
	query()
	getOne()
	getRow()
	getAll()
 */
class mysql{
	static private $dbcon = false; //连接数据库的实例
	//私有的构造函数
	private function __construct(){
		$dbcon = @mysql_connect("127.0.0.1","root","root");
		mysql_select_db("xx_test_tp",$dbcon) or die("mysql connect error ");
		mysql_query("set names utf8;");
	}

	//私有的克隆方法
	private function __clone(){}

	//具体返回mysql链接对象实例
	public static function getInstance(){
		if(self::$dbcon == false){
			self::$dbcon = new self;
		}

		return self::$dbcon;
	} 
	public function query($sql){
		return mysql_query($sql);
	}
	public function getOne($sql){
		//select count(*) from
		//select username from
		$query = $this->query($sql);
		return mysql_result($query, 0);
	}
	/**
	 * 获取一行记录
	 * @param  sql  
	 * @param  type default:assoc,other:row,array 
	 * @return array
	 */
	public function getRow($sql,$type="assoc"){
		$query = $this->query($sql);
		//mysql_fetch_row/assoc/array
		if(!in_array($type,array("assoc","array","row"))){
			die("mysql_query error");
		}
		$funcname = "mysql_fetch_".$type;
		return $funcname($query);
	}
	public function getAll($sql){

	}
	/**
	 * 添加一条记录
	 * @param  $table 插入表
	 * @param  $data  数据，名值对形式，一维数组
	 * @return $insertid 插入新数据的id
	 */
	public function insert($table,$data=array()){

	}
	public function delete(){}
	public function update(){}
	public function select(){}

}

