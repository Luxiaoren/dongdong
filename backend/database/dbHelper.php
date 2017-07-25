<?php
class dbhelper{
	private $conn;
	private $dbname="dongdong";
	private $username="root";
	private $password="123";
	private $host="localhost";

	public function __construct(){
		$this->conn=new mysqli($this -> host ,$this -> username, $this -> password,$this -> dbname);

		if($this ->conn->connect_error){
			die("msyql connection faild !".$this ->conn->connect_error);
		}

		

	}

	public function execute_select($sql){

		if($res = $this->conn->query($sql)){
			$rows=array();
			while ($row=$res->fetch_row()) {
				# code...
				$rows[ ]=$row;
			}
		}
		
		return $rows;
	}

	public function execute_insert_updata($sql){
		$res = $this ->conn->query($sql)or $this ->conn->connect_error;
		return $res;
	}

	public function close(){
		$this->conn->close();
	}

}
