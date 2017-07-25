
<?php
require_once'../database/dbHelper.php';

$data="chenggong";
$db=new dbHelper();

	$sql="select *from news";
	$res=$db->execute_select($sql);
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
				
				
				window.location.href='../option/update.php?id='+i+'&d='+'news'+'';
			}
			function deletefile(id){
				window.location.href='../option/deletefile.php?id='+id+'&table='+'news'+'';
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
									<h3 class="panel-title">公司新闻</h3>
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th>描述</th>
												<th>图片</th>
												<th>时间</th>
												<th>更改</th>
											</tr>
										</thead>
										<thead>
											<tr class="name1">
												<form action="../upSucc.php" method="post" enctype="multipart/form-data">
												<th></th>
												<th><input type="text" name="intro" value="" style="width: 300px;" colspan="2"></th>
												
												<th ><div class="div1" style="margin-left: 0px;">
												    <div class="div2">上传图片</div>
												    <input type="file" class="inputstyle" name="file" id="file">
												</div></th>
												<th></th>
												<input type="hidden" name="page" value="news">
												<th><input type="submit" name="Submit" class="btn btn-info" value="确定"></th>
												</form>
											</tr>
										</thead>
										<tbody>
										<?php
										if($res){
											$counts=count($res);
											$data='chenggong';
										for($i=$counts-1;$i>=0;$i--){
											echo"<tr>
													<td>".$res[$i][0]."</td>
													<td>".$res[$i][1]."</td>
													<td><img src='../".$res[$i][4]."' style='width:150px;height:100px;'></td>
													<td>".$res[$i][5]."</td>
													<td><input type='button' name='chang' class='btn btn-info'  value='修改' style='width:50px;padding:0px;'  onclick='update(".$res[$i][0].")'>
														<input type='button' name='delete' class='btn btn-info'  style='width:50px;padding:0px;'  value='删除' onclick='deletefile(".$res[$i][0].")'>
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
