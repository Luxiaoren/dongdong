
<?php
require_once'../backend/database/dbHelper.php';

$db=new dbHelper();

$sql="select *from allshow ";

$res=$db->execute_select($sql);
$counts=count($res);

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
            <li>
                <a href="service.php">
                    服务内容<p>Service</p>
                </a>
            </li>
            <li class="now">
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
<div class="scd_t">
	案例展示<span>/case</span>
    <div class="pst">
    	当前位置：
        <a href="index.php">首页</a>&nbsp;&nbsp;>&nbsp;&nbsp;
        <a href="" class="on">案例展示</a>
    </div>
</div>
<div class="scd">
	<div class="case">
    	<div class="tabBox_t">
            <div class="tabBox">
              <ul class="tabNav">
                <li class="now"></li>
                <li>成功案例</li>
                <li>公司新闻</li>
                <li>活动庆典</li>
                <li>展会直播</li>
                <li>年会活动</li>
              </ul>
              <div class="tabCont" style="display:block;">
                <!--影视项目-->
                <ul class="clearfix case_l">
                	 <?php 
                    $sql="select *from allshow ";

                      $res=$db->execute_select($sql);
                      $counts=count($res);
                   for($i=0;$i<$counts;$i++){
                   echo "<li>
                    	<a href=''>
                     
                        	<div class='tu'>
                            	<img src='../backend/".$res[$i][4]."' alt=''/>
                                <div class='s_b'><img src='Assets/images/icon9.png' alt=''/></div>

                            </div>
                            <div class='title'> ".$res[$i][1]."</div>
                         
                        </a>
                    </li> ";
                    }?>
                    <li>
                    	<a href="">
                        	<div class="tu">
                            	<img src="Assets/images/2.jpg" alt=""/>
                                <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                            </div>
                            <div class="title">案例二</div>
                        </a>
                    </li>
                    <li>
                    	<a href="">
                        	<div class="tu">
                            	<img src="Assets/images/3.jpg" alt=""/>
                                <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                            </div>
                            <div class="title">案例三</div>
                        </a>
                    </li>
                    <li>
                    	<a href="">
                        	<div class="tu">
                            	<img src="Assets/images/4.jpg" alt=""/>
                                <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                            </div>
                            <div class="title">案例四</div>
                        </a>
                    </li>
                    <li>
                    	<a href="">
                        	<div class="tu">
                            	<img src="Assets/images/5.jpg" alt=""/>
                                <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                            </div>
                            <div class="title">案例五</div>
                        </a>
                    </li>
                    <li>
                    	<a href="">
                        	<div class="tu">
                            	<img src="Assets/images/6.jpg" alt=""/>
                                <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                            </div>
                            <div class="title">案例六</div>
                        </a>
                    </li>
                    <li>
                    	<a href="">
                        	<div class="tu">
                            	<img src="Assets/images/7.jpg" alt=""/>
                                <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                            </div>
                            <div class="title">案例七</div>
                        </a>
                    </li>
                    <li>
                    	<a href="">
                        	<div class="tu">
                            	<img src="Assets/images/8.jpg" alt=""/>
                                <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                            </div>
                            <div class="title">案例八</div>
                        </a>
                    </li>
                </ul>
              </div>
              <div class="tabCont">
                <!--品牌营销-->
                  <ul class="clearfix case_l">
                      <?php 
                    $sql="select *from chenggong";

                      $res=$db->execute_select($sql);
                      $counts=count($res);
                   for($i=0;$i<$counts;$i++){
                   echo "<li>
                      <a href=''>
                     
                          <div class='tu'>
                              <img src='../backend/".$res[$i][4]."' alt=''/>
                                <div class='s_b'><img src='Assets/images/icon9.png' alt=''/></div>

                            </div>
                            <div class='title'> ".$res[$i][1]."</div>
                         
                        </a>
                    </li> ";
                    }?>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/images/2.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">案例二</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/images/3.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">案例三</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/images/4.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">案例四</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/images/5.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">案例五</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/images/6.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>

                              </div>
                              <div class="title">案例六</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/images/7.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>

                              </div>
                              <div class="title">案例七</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/images/8.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>

                              </div>
                              <div class="title">案例八</div>
                          </a>
                      </li>
                  </ul>
              </div>
              <div class="tabCont">
                <!--公司新闻-->
                  <ul class="clearfix case_l">
                      <?php 
                    $sql="select *from news";

                      $res=$db->execute_select($sql);
                      $counts=count($res);
                   for($i=0;$i<$counts;$i++){
                   echo "<li>
                      <a href=''>
                     
                          <div class='tu'>
                              <img src='../backend/".$res[$i][4]."' alt=''/>
                                <div class='s_b'><img src='Assets/images/icon9.png' alt=''/></div>

                            </div>
                            <div class='title'> ".$res[$i][1]."</div>
                         
                        </a>
                    </li> ";
                    }?>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/u=2630802576,240546180&fm=26&gp=0.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">公司新闻案例二</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/u=2651313389,3503394462&fm=26&gp=0.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">公司新闻案例三</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/u=3460279956,2392849297&fm=26&gp=0.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">公司新闻案例四</div>
                          </a>
                      </li>

                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/u=3381469241,200566476&fm=26&gp=0.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">公司新闻案例五</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/u=2243040503,2970040918&fm=26&gp=0.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">公司新闻案例六</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/u=1086562107,2833066276&fm=26&gp=0.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">公司新闻案例七</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/u=2230889399,4074218678&fm=26&gp=0.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">公司新闻案例八</div>
                          </a>
                      </li>
                  </ul>
              </div>
              <div class="tabCont">
                <!--活动庆典-->
                  <ul class="clearfix case_l">
                     <?php 
                    $sql="select *from huodong";

                      $res=$db->execute_select($sql);
                      $counts=count($res);
                   for($i=0;$i<$counts;$i++){
                   echo "<li>
                      <a href=''>
                     
                          <div class='tu'>
                              <img src='../backend/".$res[$i][4]."' alt=''/>
                                <div class='s_b'><img src='Assets/images/icon9.png' alt=''/></div>

                            </div>
                            <div class='title'> ".$res[$i][1]."</div>
                         
                        </a>
                    </li> ";
                    }?>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/huodongqindian2.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">活动庆典案例二</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/huodongqingdian3.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">活动庆典案例三</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/huodongqingdian4.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">活动庆典案例四</div>

                          </a>
                      </li>

                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/huodongqingdian5.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">活动庆典案例五</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/huodongqingdian6.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">活动庆典案例六</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/huodongqingdian7.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">活动庆典案例七</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/huodongqingdian8.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">活动庆典案例八</div>
                          </a>
                      </li>
                  </ul>
              </div>
              <div class="tabCont">
                <!--展会直播-->
                  <ul class="clearfix case_l">
                      <?php 
                    $sql="select *from zhanhui";

                      $res=$db->execute_select($sql);
                      $counts=count($res);
                   for($i=0;$i<$counts;$i++){
                   echo "<li>
                      <a href=''>
                     
                          <div class='tu'>
                              <img src='../backend/".$res[$i][4]."' alt=''/>
                                <div class='s_b'><img src='Assets/images/icon9.png' alt=''/></div>

                            </div>
                            <div class='title'> ".$res[$i][1]."</div>
                         
                        </a>
                    </li> ";
                    }?>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/zhanhui2.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">展会布置案例二</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/zhanhui3.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">展会布置案例三</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/zhanhui4.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">展会布置案例四</div>
                          </a>
                      </li>

                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/zhanhui5.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">展会布置案例五</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/zhanhui7.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">展会布置案例六</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/zhanhui8.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">展会布置案例七</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/zhanhui9.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">展会布置案例八</div>
                          </a>
                      </li>
                  </ul>
              </div>
              <div class="tabCont">
                <!--年会活动-->
                  <ul class="clearfix case_l">
                      <?php 
                    $sql="select *from nianhui";

                      $res=$db->execute_select($sql);
                      $counts=count($res);
                   for($i=0;$i<$counts;$i++){
                   echo "<li>
                      <a href=''>
                     
                          <div class='tu'>
                              <img src='../backend/".$res[$i][4]."' alt=''/>
                                <div class='s_b'><img src='Assets/images/icon9.png' alt=''/></div>

                            </div>
                            <div class='title'> ".$res[$i][1]."</div>
                         
                        </a>
                    </li> ";
                    }?>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/nianhui2.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">年会活动案例二</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/nianhui3.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">年会活动案例三</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/nianhui4.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">年会活动案例四</div>
                          </a>
                      </li>

                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/nianhui5.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">年会活动案例五</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/nianhui6.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">年会活动案例六</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/nianhui7.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">年会活动案例七</div>
                          </a>
                      </li>
                      <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/upload/nianhui8.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">年会活动案例八</div>
                          </a>
                      </li>
                  </ul>
              </div>
            </div>
        </div>
    </div>
	<div class="space_hx">&nbsp;</div>
	<div class="pages">
    	<a href="">首页</a>
        <a href="" class="now">上一页</a>
        <a href="">下一页</a>
        <a href="">尾页</a>
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
