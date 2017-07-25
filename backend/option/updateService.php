updatenew.php

<?php
require_once'../database/dbHelper.php';

$updateid="";
$table="";
$mes="no";
if($_GET['id']&&$_GET['d']){
	$updateid= $_GET['id'];
	$table= $_GET['d'];
	echo $updateid;
	echo $table;
/*	$db=new dbHelper();
	$sql="select *from $table where id = $updateid";
	$res=$db->execute_select($sql);

	var_dump($res);
	$db->close();
*/

}else{
	$updateid=$_COOKIE['id'];
	$table=$_COOKIE['table'];
	$mes=$_COOKIE['mes'];
	echo $mes;

	echo $updateid;
	echo $table;
}
$db=new dbHelper();
$sql="select *from $table where id=$updateid";
$res=$db->execute_select($sql);

?>

<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
	<link rel="stylesheet" href="../assets/css/button.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">

	<style>

</style>

<script charset="utf-8" src="../../kinde/kindeditor-all.js"></script>
	<script charset="utf-8" src="../../kinde/kindeditor文件夹名/lang/zh-CN.js"></script>

	
	<script type="text/javascript">
    //KindEditor脚本
    var editor;
    KindEditor.ready(function(K) {
        editor = K.create('#editor_id', {
        });
    });

</script>
<script type="text/javascript">
	
	<script type="text/javascript">

		function getb(){
			
			
				if(<?php echo $_COOKIE['b'];?>==1){//判断cookie值
					alert("上传文件错误！请选择正确的文件名和大小");
					if($page=="")
						$page=$_SESSION['page'];
					
					
				}else if(<?php echo $_COOKIE['b'];?>==3){
					
					alert("文件已存在，请重新选择");
				}else if (<?php echo $_COOKIE['b'];?>==2){
					
					alert("添加成功！");
				}
				else{
					alert("no");
				}
				<?php setcookie("b");?>//删除返回错误代码的cookie
					
					
				
			
		}

	</script>
</script>
</head>
<body onload="getb()">
	
		<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">更改信息</h3>
								</div>
								<div class="panel-body">
								<form action="updateServiceProcess.php" method="post" enctype="multipart/form-data">
									<input class="form-control input-lg" placeholder="标题" type="text" style="width: 40%;margin-left:30%; " name="title" value="<?php echo $res[0][7]?>">
									<br>
								<input class="form-control input-lg" placeholder="简介" type="text" style="width: 40%;margin-left:30%; " name="intro" value="<?php echo $res[0][3]?>">
									<br>
									<div style="margin-left:30%;">
									<textarea class="form-control" placeholder="内容（150字以内）" rows="4"  id="editor_id" name="content" value=""><?php echo $res[0][4]?></textarea></div>
									<br>
									<div class="div1">
									    <div class="div2">上传图片</div>
									    <input type="file" class="inputstyle" name="file" id="file">
									</div>
									
									<br><br><br>
									<input type="hidden" name="table" value="<?php echo $table?>" id="table">
									<input type ="hidden" name="id" value="<?php echo $updateid?>" id="id">
									<input type="submit" name="Submit" class="btn btn-info" value="确定" style="margin-left: 30%;width: 40%;">
									<br>
									</form>
									<select class="form-control input-lg">
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
									
									
								</div>
							</div>
	
</body>
</html>
