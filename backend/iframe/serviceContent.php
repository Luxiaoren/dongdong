
<?php
require_once'../database/dbHelper.php';

$data="companyService";
$db=new dbHelper();

		$sql="select *from companyService where id=1";
		$res=$db->execute_select($sql);
	
		$fenlei=explode('|', $res[0][1]);
		$nums=count($fenlei);
		
		
if($_GET['fenlei']!=""){
	$ff=$_GET['fenlei'];
	$sql="select *from companyService where leibie='$ff'";
	$res=$db->execute_select($sql);
}else
	{
		$sql="select *from companyService";
		$res=$db->execute_select($sql);
}
	


?>

<html lang="en">

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="../assets/vendor/chartist/css/chartist-custom.css">
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
	<script type="text/javascript">
			function update(i){
				
				
				window.location.href='../option/updateService.php?id='+i+'&d='+'companyService'+'';
			}
			function changfenlei(){
				window.location.href='serviceContent.php?fenlei='+document.getElementById("fenlei").value+'';
			}
			function deletenew(id){
				window.location.href='../option/deletefile.php?id='+id+'&table='+'companyService'+'';
			}
	</script>
</head>

<body >
	
	<style type="text/css">
		.table th{
			width: 20%;
		}

		/* .name1 input[type=file]{
			color:red;
		} */

	</style>
<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">服务内容</h3>
								</div>
								<div class="panel-body">
									<table class="table">
										
										<thead>
											<tr class="name1">
												<form action="" method="post" enctype="multipart/form-data">
												<th> <select id ="fenlei" onchange="changfenlei()" class="form-control input-lg"  style="width: 40%;padding: 0px;height: 40px;">
														
														<?php

																for($i=0;$i<$nums-1;$i++){
																	if($fenlei[$i]==$_GET['fenlei']){
																			echo "<option value='".$fenlei[$i]."' selected='selected'>".$fenlei[$i]."</option>";
																	}else{
																	echo "<option value='".$fenlei[$i]."'>".$fenlei[$i]."</option>";
																}
																}
														?>
													</select></th>
												<th></th>
												<th></th>
												<input type="hidden" name="page" id="page" value="comnews">
												
												<input type="hidden" name="table" id="table" value="comnews">
												<th><input type="button" name="addfenlei" class="btn btn-info" value="添加分类" onclick="window.location.href='../option/addfenlei.php?page=companyService'">
												<input type="button" name="add" class="btn btn-info" value="添加文章" style="margin-left: 0px;" onclick="window.location.href='../option/addService.php?page=companyService'">
												</form>
											</tr>
										</thead>
										<thead>
											<tr>
												<th>编号</th>
												<th>标题</th>
												
												<th>时间</th>
												<th>更改</th>
											</tr>
										</thead>
										<tbody>
										<?php
										if($res){
											$counts=count($res);
											$data='chenggong';
											$j=1;
										for($i=$counts-1;$i>=0;$i--){
											
											echo"<tr>
													<td>".$j++."</td>
													<td>".$res[$i][7]."</td>
												
													<td>".$res[$i][6]."</td>
													<td><input type='button' name='chang' class='btn btn-info'  value='修改' style='width:50px;padding:0px;'  onclick='update(".$res[$i][0].")'>
														<input type='button' name='delete' class='btn btn-info'  style='width:50px;padding:0px;'  value='删除' onclick='deletenew(".$res[$i][0].")'>
													</td>
												</tr>";
											}
										}
											
										?>
											
										</tbody>
									</table>
								</div>
							</div>

</body>
</html>
