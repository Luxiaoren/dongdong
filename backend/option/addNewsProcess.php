dfsa

<?php
  require_once'../database/dbHelper.php'; 
$title=$_POST['title'];
$editer=$_POST['editer'];
$content=$_POST['content'];
$page=$_POST['page'];
$fenlei=$_POST['fenlei'];
echo $page;
	date_default_timezone_set('PRC');
	$date=date("Y-m-d");

  $db=new dbHelper();
  $sql="insert into $page(leibie,title,editer,content,uploadTime)values('$fenlei','$title','$editer','$content','$date')";	
  $res =$db->execute_insert_updata($sql);
  if(!$res){
  	echo"err";
  	die();
  }
	setcookie("b",2);
	setcookie("page",$page);
	echo '<script type="text/javascript">top.location.href="../newShow.php";alert("添加成功")</script>';







?>