<?php
require_once'../database/dbHelper.php';
$db=new dbHelper();
$sql="select count(*) from comdongdong";
$res=$db->execute_select($sql);
$num=$res[0][0];

$sql="select *from comdongdong where id =$num";

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
</head>
<body >
	
		<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">关于我们</h3>
								</div>
						<div class="panel-body">
							<form action="aboutProcess.php" method="post" enctype="multipart/form-data">
								<div style="margin-left: 20%">
									<table align="center" border="1px black solid">
									<tr>
									<td><label>公司名称:</label></td><td><input class="form-control input-lg" placeholder="" type="text" style="width: 100%; " name="comname" value="<?php echo $res[0][1]?>"></td></tr>
									<br>
									<tr>
									<td><label>公司电话:</label></td><td><input class="form-control input-lg" placeholder="" type="text" style="width: 100%;" name="tel" value="<?php echo $res[0][2]?>"></td></tr>
									<br>
									<tr>
									<td><label>公司网址:</label></td><td><input class="form-control input-lg" placeholder="" type="text" style="width: 100%;" name="interaddress" value="<?php echo $res[0][3]?>"></td></tr>
									<br>
									<tr>
									<td><label>公司邮箱:</label></td><td><input class="form-control input-lg" placeholder="" type="text" style="width: 100%; " name="email" value="<?php echo $res[0][4]?>"><td></tr>
									<br>
									<tr>
									<td><label>公司地址:</label></td><td><input class="form-control input-lg" placeholder="" type="text" style="width: 100%; " name="address" value="<?php echo $res[0][5]?>"></td></tr>
									<br>
									<tr>
									<td><label>公司简介:</label></td><td><textarea name="intro" style="width: 100%;height:200px;"> <?php echo $res[0][7]?></textarea></td></tr>
									<tr>
									<td><label>工商注册号:</label></td><td><input class="form-control input-lg" placeholder="" type="text" style="width: 100%;" name="zhucehao" value="<?php echo $res[0][7]?>"></td></tr>
									<tr>
									<td><label>组织机构代码:</label></td><td><input class="form-control input-lg" placeholder="" type="text" style="width: 100%;" name="zuzhijigou" value="<?php echo $res[0][8]?>"></td></tr>
									<tr>
									<td><label>统一信用代码:</label></td><td><input class="form-control input-lg" placeholder="" type="text" style="width: 100%;" name="xinyon" value="<?php echo $res[0][9]?>"></td></tr>
									<tr>
									<td><label>企业类型:</label></td><td><input class="form-control input-lg" placeholder="" type="text" style="width: 100%; " name="leixing" value="<?php echo $res[0][10]?>"></td></tr>
									<tr>
									<tr>
									<td><label>行业:</label></td><td><input class="form-control input-lg" placeholder="" type="text" style="width: 100%; " name="hangye" value="<?php echo $res[0][11]?>"></td></tr>
									<tr>
									<td><label>主要人员:</label></td><td><input class="form-control input-lg" placeholder="" type="text" style="width: 100%; " name="zhuyaorenyuan" value="<?php echo $res[0][13]?>"></td></tr>
									<tr>
									<td><label>经营范围:</label></td><td><textarea id="editor_id" name="jingyingfanwei" style="width:700px;height:300px;">
											<?php echo $res[0][12]?>
											</textarea> </td></tr>
									<tr><td colspan="2" ><input type="submit" name="Submit" class="btn btn-info"  value="确定" style="width: 100%;"></td></tr>
									</table>
								</div>
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
	
</body>
</html>
