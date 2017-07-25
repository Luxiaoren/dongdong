<?php
require_once'../backend/database/dbHelper.php';
echo $_GET['id'].$_GET['table'];
$id=$_GET['id'];
$table=$_GET['table'];
$db=new dbHelper();
$sql="select *from $table where id=$id";
$res=$db->execute_select($sql);

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>安徽东东运输有限公司</title>
<link rel="stylesheet" type="text/css" href="Assets/css/reset.css"/>
<script type="text/javascript" src="Assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="Assets/js/js_z.js"></script>
<link rel="stylesheet" type="text/css" href="Assets/css/thems.css">
</head>

<style>
    .top ul li{
        list-style-type: none;
        float: left;
        display: inline-block;
        line-height:30px;
    }
</style>
<script>
    $(document).ready(function () {
        var DATA=new Date();
        var mouse=DATA.getMonth()+1;
        $(".data").text(DATA.getYear()+1900+"年"+mouse+"月"+DATA.getDate());
    })
</script>
<body>
<div class="top">
    <ul>
        <li>   <h3 style="text-align: center">欢迎来到东东运输有限公司网站！</h3></li>
        <li style="margin-left: 50%" class="data"><h3>data</h3></li>
    </ul>
    <div style="clear: both"></div>
    <hr>
</div>
<div class="h_bg">
    <div class="head clearfix">
        <div class="logo"><a href="index.html"><img src="Assets/images/logo.png" style="width:180px;height:180px" alt=""/></a></div>
        <ul class="nav clearfix">
            <li>
                <a href="index.php">
                    首页<p>Home</p>
                </a>
            </li>
            <li>
                <a href="about.php">
                    关于东东<p>About</p>
                </a>
            </li>
            <li>
                <a href="service.php">
                    服务内容<p>Service</p>
                </a>
            </li>
            <li>
                <a href="case.php">
                    案例展示<p>Case</p>
                </a>
            </li>
            <li  class="now">
                <a href="news.php">
                    新闻动态<p>News</p>
                </a>
            </li>
            <li>
                <a href="contact.php">
                    联系我们<p>Contact</p>
                </a>
            </li>
        </ul>
        <div class="head_r">
            <div>
                <span>服务热线</span>
                <span class="yellow">18019993312</span>
            </div>
        </div>
    </div>
</div>
<!--幻灯片-->
<div class="banner banner_s"><img src="Assets/upload/banner_a.jpg" alt=""/></div>
<!--幻灯片-->
<div class="space_hx">&nbsp;</div>
<div class="scd scd_a clearfix">
<?php
echo "
	<span>".$res[0][2]."</span><br>
	<span>".$res[0][3]."</span><span>".$res[0][6]."</span><br>
	<br><content>".$res[0][4]."</content>
";

?>
</div>