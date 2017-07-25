<?php 
require_once'../database/dbHelper.php';
$leixing=$_POST['leixing'];
$page=$_POST['page'];
$db=new dbHelper();
if($page=="companyService"){
	$sql="select comServiceAll  from $page where id=1";
	echo $sql;
	$res=$db->execute_select($sql);
	var_dump($res);
	$fenlei=$res[0][0]."$leixing|";
	$sql="update $page set comServiceAll ='$fenlei' where id=1";
	$res=$db->execute_insert_updata($sql);

	setcookie("page",$page);
	echo"<script>alert('添加成功');location.href='../iframe/serviceContent.php';</script>";
}else{

$sql="select fenlei from $page where id=1";

$res=$db->execute_select($sql);

$fenlei=$res[0][0]."|$leixing";
$sql="update $page set fenlei='$fenlei' where id=1";
$res=$db->execute_insert_updata($sql);

setcookie("page",$page);
echo"<script>alert('添加成功');top.location.href='../newShow.php';</script>";
}
?>