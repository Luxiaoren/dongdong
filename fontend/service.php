
<?php
require_once'../backend/database/dbHelper.php';

$db= new dbHelper();
$sql="select comServiceAll  from companyService where id=1";
$res=$db->execute_select($sql);
$fenlei=explode('|', $res[0][0]);
$num=count($fenlei);
$sql="select *  from companyService where id>1";
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
        <div class="logo"><a href="index.php"><img src="Assets/images/logo.png" style="width:180px;height:180px" alt=""/></a></div>
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
            <li class="now">
                <a href="service.php">
                    服务内容<p>Service</p>
                </a>
            </li>
            <li>
                <a href="case.php">
                    案例展示<p>Case</p>
                </a>
            </li>
            <li>
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
    	<div class="name">服务内容<span>/Service</span></div>
        <ul class="s_nav">
        	<li class="now"><a href="service.html">道路普通货物运输</a></li>
            <li><a href="service2.html">货物装卸、配载</a></li>
            <li><a href="service3.html">汽车及配件销售</a></li>
            <li><a href="service4.html">车辆事务代理</a></li>
            <li><a href="service5.html">货物包装、配送</a></li>
            <?php
                for($i=0;$i<$num;$i++){
                    if($fenlei[$i]!=""){
                echo" <li><a href='serviceCon.php?leixing=".$fenlei[$i]."'>".$fenlei[$i]."</a></li>";
                }
            }
            ?>
        </ul>
    </div>
    <div class="scd_r">
    	<div class="scd_rh">
        	<div class="pst">
                当前位置：
                <a href="index.html">首页</a>&nbsp;&nbsp;>&nbsp;&nbsp;
                <a href="" class="on">服务内容</a>
            </div>
        </div>
        <div class="scd_m">
        	<div class="service">
            	<dl class="clearfix">
                	<dt><a href="service_d.html"><img src="Assets/upload/putongyunshu1.jpg" alt=""/></a></dt>
                    <dd>
                    	<div class="title"><a href="service_d.html">卡车货物运输</a></div>
                        <div class="time">TIME 2016-04-10 21:29:09</div>
                        <div class="des">汽车的包装应能充分防止货物在运输中灭失和腐坏,保证货物多次装卸不致毁坏. </div>
						<div class="more"><a href="service_d.html">查看详情</a></div>
                    </dd>
                </dl>
                <dl class="clearfix">
                	<dt><a href="service_d.html"><img src="Assets/upload/putongyunshu2.jpg" alt=""/></a></dt>
                    <dd>
                    	<div class="title"><a href="service_d.html">交通运输</a></div>
                        <div class="time">TIME 2017-02-05 21:29:09</div>
                        <div class="des">汽车的标记,表示牌及运输标记,货签,内容主要包括商品的记号和号码,件数,站名,
                            收货人名称等.字迹均应清晰,不易檫掉,保证多次换装中不致脱...</div>
						<div class="more"><a href="service_d.html">查看详情</a></div>
                    </dd>
                </dl>
                <dl class="clearfix">
                	<dt><a href="service_d.html"><img src="Assets/upload/putongyunshu3.jpg" alt=""/></a></dt>
                    <dd>
                    	<div class="title"><a href="service_d.html">货物运输</a></div>
                        <div class="time">TIME 2017-03-10 11:59:09</div>
                        <div class="des"> 客户评价：安徽东东运输有限公司从事汽车运输已有不少年头，有
                            着丰富的物流管理经验，还有着一支优秀的物流方面的团队，相比新兴企业，它更有经验，
                            对比一些知名公司，它的性价比更高。双捷汽车运输很有发展前景，我看好它。</div>
						<div class="more"><a href="service_d.html">查看详情</a></div>
                    </dd>
                </dl>
                <dl class="clearfix">
                	<dt><a href="service_d.html"><img src="Assets/upload/putongyunshu4.jpg" alt=""/></a></dt>
                    <dd>
                    	<div class="title"><a href="service_d.html">合肥某面包车公司</a></div>
                        <div class="time">TIME 2015-04-10 5:29:39</div>
                        <div class="des">客户评价：之所以选择安徽东东运输，主要是因为他们的物流速度达到了
                            我们的预期，要运输的城市之间都有快速直达专线，每趟下来都没有出现车辆损坏！让我
                            们非常放心。</div>
						<div class="more"><a href="service_d.html">查看详情</a></div>
                    </dd>
                </dl>
                <dl class="clearfix">
                	<dt><a href="service_d.html"><img src="Assets/upload/putongyunshu5.jpg" alt=""/></a></dt>
                    <dd>
                    	<div class="title"><a href="service_d.html">肥某电子商务公司</a></div>
                        <div class="time">TIME 2017-3-12 15:29:20</div>
                        <div class="des">客户评价：东东运输服务公司拥有丰富的物流行业管理经验，
                            在选择运输公司时我们会考虑很多，包括公司的车辆资源，运输速度，
                            能否保证货物不受损，还有公司的口碑等等。经过自己的考察与同行的良好
                            的评价，我们最终选择了他们公司作为合作伙伴，经过多次安全高效的运输，
                            我公司与他们签订了长期合作业务。
                        </div>
						<div class="more"><a href="service_d.html">查看详情</a></div>
                    </dd>
                </dl>
                <div class="space_hx">&nbsp;</div>
                <div class="pages">
                    <a href="">首页</a>
                    <a href="" class="now">上一页</a>
                    <a href="">下一页</a>
                    <a href="">尾页</a>
                </div>
            </div>
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
</body>
</html>
