

<?php
require_once'../database/dbHelper.php';
echo $_GET['page'];
$page=$_GET['page'];
$db=new dbHelper();

		$sql="select *from $page where id=1";
		$res=$db->execute_select($sql);
		if($page=='companyService'){
		$fenlei=explode('|', $res[0][1]);	
		}else{
		$fenlei=explode('|', $res[0][7]);
			}
	$nums=count($fenlei);

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
</head>
<body >
	
		<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">公司新闻</h3>
								</div>
								<div class="panel-body">
								<form action="addNewsProcess.php" method="post" enctype="multipart/form-data">
									<input class="form-control input-lg" placeholder="标题" type="text" style="width: 40%;margin-left:30%; " name="title">
									<br>
								<input class="form-control input-lg" placeholder="作者" type="text" style="width: 40%;margin-left:30%; " name="editer">
									<br>
									<div style="margin-left: 30%;">
									<select name ="fenlei"  class="form-control input-lg"  style="width: 40%;padding: 0px;height: 40px;">
														
														<?php

																for($i=0;$i<$nums;$i++){
																	if($fenlei[$i]==$_GET['fenlei']){
																			echo "<option value='".$fenlei[$i]."' selected='selected'>".$fenlei[$i]."</option>";
																	}else{
																	echo "<option value='".$fenlei[$i]."'>".$fenlei[$i]."</option>";
																}
																}
														?>
													</select><br>
									<textarea id="editor_id" name="content" style="width:700px;height:300px;">
											&lt;strong&gt;HTML内容&lt;/strong&gt;
											</textarea>
											</div>
									<br>
									
									<div><?php echo $mes;?></div>
									<br><br><br>
									<input type="hidden" name="page" value="<?php echo$_GET
									['page'];?>" id="table">
									<input type ="hidden" name="id" value="" id="id">
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
