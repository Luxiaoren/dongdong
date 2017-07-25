<?php

header("Content-type:text/html;charset=utf-8");
require_once './database/dbhelper.php';
$password=$_POST['password'];
$username=$_POST['username'];
 echo $password.$username;

if($password==""||$username=="")
{
	header("Location:index.php?error=3");
	die();
}

 $dbhelper = new dbhelper();

$sql="select *from user where username='$username'";
echo $sql."<br>";
//$sql ="insert into user_log(username,password)value('lxr2','111','2@qq.com')";

$res=$dbhelper->execute_select($sql);

$dbhelper->close();
if($res==null){
	header("Location:index.php?error=1");
}else{
	
	if($res[0][2]==$password){
		if($_POST['Remamber']=='1'){
		session_start();
		$_SESSION['id']=$res[0][0];
		$_SESSION['username']=$res[0][1];
		$_SESSION['password']=$res[0][2];
		$_SESSION['email']=$res[0][3];
		}else{
			session_start();
			$_SESSION['id']=$res[0][0];
			$_SESSION['username']=$res[0][1];
		}

		header("Location:mainshow.php");
	}else{
		header("Location:index.php?error=2");
	}
}






