<?php
require_once'../database/dbHelper.php';


$table=$_GET['table'];
$id=$_GET['id'];
$db=new dbHelper();
$sql="delete from $table where id=$id";
$res=$db->execute_insert_updata($sql);
if($table=="companyService"){
	if($res){
		 echo "<script type='text/javascript'>location.href='../iframe/serviceContent.php';alert('删除成功')</script>";
	}
}else{
	if($res){
		 echo "<script type='text/javascript'>location.href='../iframe/".$table.".php';alert('删除成功')</script>";
	}
}
?>