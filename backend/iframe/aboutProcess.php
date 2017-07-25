<?php
require_once'../database/dbHelper.php';
$name=$_POST['comname'];
$tel=$_POST['tel'];
$interaddress=$_POST['interaddress'];
$email=$_POST['email'];
$address=$_POST['address'];
$intro=$_POST['intro'];
$zhucehao=$_POST['zhucehao'];
$zuzhijigou=$_POST['zuzhijigou'];
$xinyon=$_POST['xinyon'];
$leixing=$_POST['leixing'];
$hangye=$_POST['hangye'];
$zhuyaorenyuan=$_POST['zhuyaorenyuan'];
$jingyingfanwei=$_POST['jingyingfanwei'];
$db=new dbHelper();
$sql="insert into comdongdong(name,tel,internetAdd,email,address,intro,gongshangzhucehao,zuzhijigoudaima ,xinyongdaima ,qiyeleixing,hangye,jingyingfanwei,zhuyaorenyuan) value('$name','$tel','$interaddress','$email','$address','$intro','$zhucehao','$zuzhijigou','$xinyon','$leixing','$hangye','$jingyingfanwei','$zhuyaorenyuan')";
echo $sql;

$res=$db->execute_insert_updata($sql);

if($res){
	 echo "<script type='text/javascript'>location.href='./aboutCom.php';alert('修改成功')</script>";
}else{
	echo "<script type='text/javascript'>location.href='./aboutCom.php';alert('修改失败')</script>";
}


?>