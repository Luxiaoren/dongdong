<?php
require_once'../backend/database/dbHelper.php';

$db=new dbHelper();
$sql="select  fenlei from comnews where id=1";
$res=$db->execute_select($sql);
$fenlei=explode('|', $res[0][0]);


$fenleiCount=count($fenlei);
$leibie="公司新闻";
$pagenum=1;

if($_GET['leibie']&&$_GET['pagenum']){
    $leibie=$_GET['leibie'];
    $pagenum=$_GET['pagenum'];
}else if($_GET['leibie']){
     $leibie=$_GET['leibie'];
}

$sql="select *from comnews where leibie ='$leibie'";
$res=$db->execute_select($sql);


$newsnum=count($res);

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
<!--主体盒子-->
<div class="scd scd_a clearfix">
	<div class="scd_l">
    	<div class="name">新闻动态<span>/news</span></div>
        <ul class="s_nav">
        	<li class="now"><a href="">新闻动态</a></li>
        </ul>
        <?php
            for($i=0;$i<$fenleiCount;$i++){
                echo "<ul class='s_nav'>
            <li class='now'><a href='news.php?leibie=".$fenlei[$i]."'>".$fenlei[$i]."</a></li>
                 </ul>";
            }
        ?>
    </div>
    <div class="scd_r">
    	<div class="scd_rh">
        	<div class="pst">
                当前位置：
                <a href="index.html">首页</a>&nbsp;&nbsp;>&nbsp;&nbsp;
                <a href="" class="on">联系我们</a>
            </div>
        </div>
        <div class="scd_m">
           <ul class="scd_m_ul">
               <li>公路货运受铁改冲击 寻求合作或为良策</li>
               <?php
               for($j=$newsnum-1;$j>=0;$j--){
                echo "<li><a href='content.php?id=".$res[$j][0]."&table=comnews'>".$res[$j][2]."</a></li>";
               }
                
               ?>
           </ul>
        </div>
    </div>
</div>
<!--主体盒子-->
<div class="space_hx">&nbsp;</div>
<!--底部-->
<div class="f_bg">
    <ul class="foot clearfix">
        <li>
            <b>关于东东</b>
            <p><a href="">公司简介</a></p>
            <p><a href="">人才招聘</a></p>
        </li>
        <li>
            <b>服务内容</b>
            <p><a href=""> 道路普通货物运输</a></p>
            <p><a href="">物流信息咨询</a></p>
            <p><a href="">车辆事务代理</a></p>
            <p><a href="">货物包装、配送、仓储服务</a></p>
            <p><a href="">汽车技术检测服务</a></p>
        </li>
        <li>
            <b>案例展示</b>
            <p><a href="">成功案例</a></p>
            <p><a href="">公司新闻</a></p>
            <p><a href="">活动庆典</a></p>
            <p><a href="">展会直播</a></p>
        </li>
        <li>
            <b>新闻动态</b>
            <p><a href="">公司动态</a></p>
            <p><a href="">行业资讯</a></p>
        </li>
        <li class="f_c">
            <b>联系我们</b>
            <p><span>安徽东东运输有限公司</span></p>
            <p>地址： 合肥市庐阳区庐阳产业园徽商钢材市场B125</p>
            <p>电话：18019993312</p>
            <p>邮箱：2398842322@qq.com
            </p>
        </li>
        <li>
            <b>关注我们</b>
        </li>
    </ul>
</div>
<div class="bq">
    <span>CopyRight © 2016-2017</span>
    <span>安徽东东运输有限公司</span>
    <span>皖ICP备17013920号</span>
</div>
<!--底部-->
</body>
</html>
