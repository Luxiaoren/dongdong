<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>安徽东东运输有限公司</title>
    <link rel="stylesheet" type="text/css" href="Assets/css/reset.css"/>
    <script type="text/javascript" src="Assets/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="Assets/plugins/FlexSlider/jquery.flexslider.js"></script>
    <link rel="stylesheet" type="text/css" href="Assets/plugins/FlexSlider/flexslider.css">
    <script type="text/javascript" src="Assets/js/js_z.js"></script>
    <link rel="stylesheet" type="text/css" href="Assets/css/thems.css">
    <script language="javascript">
        $(function () {
            $('.flexslider').flexslider({
                animation: "slide"
            });
        });
    </script>
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
        <div class="logo"><a href="index.php"><img style="width:180px;height:180px" src="Assets/images/logo.png" alt=""/></a></div>
        <ul class="nav clearfix">
            <li class="now">
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
<div class="banner">
    <div class="slider">
        <div class="flexslider">
            <ul class="slides">
                <li><a href=""><img src="Assets/upload/slide1.jpg" alt=""/></a></li>
                <li><a href=""><img src="Assets/upload/slide2.jpg" alt=""/></a></li>
                <li><a href=""><img src="Assets/upload/slide3.jpg" alt=""/></a></li>
            </ul>
        </div>
    </div>
</div>
<!--幻灯片-->
<div class="space_hx">&nbsp;</div>
<!--主体盒子-->
<div class="i_ma">
    <div class="name">+<em>我们服务</em>+</div>
    <p>安徽东东运输有限公司，我们的业务</p>
    <div class="space_hx">&nbsp;</div>
    <ul class="clearfix">
        <li>
            <a href="">
                <div class="tu"><img src="Assets/images/icon4.png" alt=""/></div>
                <h6>物流集成组件</h6>
            </a>
        </li>
        <li>
            <a href="">
                <div class="tu"><img src="Assets/images/icon5.png" alt=""/></div>
                <h6>行业数据池</h6>
            </a>
        </li>
        <li>
            <a href="">
                <div class="tu"><img src="Assets/images/icon6.png" alt=""/></div>
                <h6>数据与安全环节</h6>
            </a>
        </li>
        <li>
            <a href="">
                <div class="tu"><img src="Assets/images/icon7.png" alt=""/></div>
                <h6>客户服务</h6>
            </a>
        </li>
        <li>
            <a href="">
                <div class="tu"><img src="Assets/images/icon8.png" alt=""/></div>
                <h6>物流业务组件</h6>
            </a>
        </li>
    </ul>
</div>
<div class="space_hx">&nbsp;</div>
<div class="bg_b">
    <div class="i_mb">
        <div class="name">案例展示</div>
        <div class="tabBox_t">
            <div class="tabBox">
                <ul class="tabNav">
                    <li class="now">成功案例</li>
                    <li>公司新闻</li>
                    <li>活动庆典</li>
                    <li>展会直播</li>
                    <li>年会活动</li>
                    <li>公司成长史</li>
                </ul>
                <div class="tabCont" style="display:block;">
                    <!--成功案例-->
                    <ul class="clearfix case_l">
                    <?php
                    require_once'../backend/database/dbHelper.php';
                    $db=new dbHelper();
                    $sql="select *from chenggong";
                    $res=$db->execute_select($sql);
                    $counts=count($res);
                    for($i=$counts-1;$i>=$counts-4;$i--){
                        echo"<li>
                            <a href=''>
                                <div class='tu'>
                                    <img src='../backend/".$res[$i][4]."' alt=''/>
                                    <div class='s_b'><img src='Assets/images/icon9.png' alt=''/></div>
                                </div>
                                <div class='title'>".$res[$i][1]."</div>
                                <div class='des'>安徽东东运输有限公司，我们的业务</div>
                            </a>
                        </li>";
                    }
                        ?>
                      <!--   <li>
                          <a href="">
                              <div class="tu">
                                  <img src="Assets/images/2.jpg" alt=""/>
                                  <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                              </div>
                              <div class="title">成功案例二</div>
                              <div class="des">安徽东东运输有限公司，我们的业务</div>
                          </a>
                      </li> -->
                      
                       
                </div>
                <div class="tabCont">
                    <!--品牌营销-->
                    <ul class="clearfix case_l">
                       
                       <?php
                    require_once'../backend/database/dbHelper.php';
                    $db=new dbHelper();
                    $sql="select *from news";
                    $res=$db->execute_select($sql);
                    $counts=count($res);
                    for($i=$counts-1;$i>=$counts-4;$i--){
                        echo"<li>
                            <a href=''>
                                <div class='tu'>
                                    <img src='../backend/".$res[$i][4]."' alt=''/>
                                    <div class='s_b'><img src='Assets/images/icon9.png' alt=''/></div>
                                </div>
                                <div class='title'>".$res[$i][1]."</div>
                                <div class='des'>安徽东东运输有限公司，我们的业务</div>
                            </a>
                        </li>";
                    }
                        ?>
                       
                        <!-- <li>
                            <a href="">
                                <div class="tu">
                                    <img src="Assets/upload/u=3460279956,2392849297&fm=26&gp=0.jpg" alt=""/>
                                    <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                                </div>
                                <div class="title">公司新闻案例四</div>
                                <div class="des">安徽东东运输有限公司，我们的业务</div>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <div class="tabCont">
                    <!--活动庆典-->
                    <ul class="clearfix case_l">
                        <?php
                            require_once'../backend/database/dbHelper.php';
                            $db=new dbHelper();
                            $sql="select *from huodong";
                            $res=$db->execute_select($sql);
                            $counts=count($res);
                            for($i=$counts-1;$i>=$counts-4;$i--){
                               echo"<li>
                            <a href=''>
                                <div class='tu'>
                                    <img src='../backend/".$res[$i][4]."' alt=''/>
                                    <div class='s_b'><img src='Assets/images/icon9.png' alt=''/></div>
                                </div>
                                <div class='title'>".$res[$i][1]."</div>
                                <div class='des'>".$res[$i][2]."</div>
                            </a>
                        </li>";
                            }
                        ?>
                       <!--  <li>
                           <a href="">
                               <div class="tu">
                                   <img src="Assets/upload/huodongqindian2.jpg" alt=""/>
                                   <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                               </div>
                               <div class="title">活动庆典案例二</div>
                               <div class="des">安徽东东运输有限公司，我们的业务</div>
                           </a>
                       </li> -->
                      
                    </ul>
                </div>
                <div class="tabCont">
                    <!--展会直播-->
                    <ul class="clearfix case_l">
                      <?php
                            require_once'../backend/database/dbHelper.php';
                            $db=new dbHelper();
                            $sql="select *from zhanhui";
                            $res=$db->execute_select($sql);
                            $counts=count($res);
                            for($i=$counts-1;$i>=$counts-4;$i--){
                                echo"<li>
                            <a href=''>
                                <div class='tu'>
                                    <img src='../backend/".$res[$i][4]."' alt=''/>
                                    <div class='s_b'><img src='Assets/images/icon9.png' alt=''/></div>
                                </div>
                                <div class='title'>".$res[$i][1]."</div>
                                <div class='des'>".$res[$i][2]."</div>
                            </a>
                        </li>";
                            }
                        ?>
                       <!--  <li>
                           <a href="">
                               <div class="tu">
                                   <img src="Assets/upload/zhanhui2.jpg" alt=""/>
                                   <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                               </div>
                               <div class="title">展会布置案例二</div>
                               <div class="des">安徽东东运输有限公司，我们的业务</div>
                           </a>
                       </li> -->
                    </ul>
                </div>
                <div class="tabCont">
                    <!--年会活动-->
                    <ul class="clearfix case_l">
                        <?php
                            require_once'../backend/database/dbHelper.php';
                            $db=new dbHelper();
                            $sql="select *from nianhui";
                            $res=$db->execute_select($sql);
                            $counts=count($res);
                            for($i=$counts-1;$i>=$counts-4;$i--){
                               echo"<li>
                            <a href=''>
                                <div class='tu'>
                                    <img src='../backend/".$res[$i][4]."' alt=''/>
                                    <div class='s_b'><img src='Assets/images/icon9.png' alt=''/></div>
                                </div>
                                <div class='title'>".$res[$i][1]."</div>
                                <div class='des'>".$res[$i][2]."</div>
                            </a>
                        </li>";
                            }
                        ?>
                     
                      
                        <!-- <li>
                            <a href="">
                                <div class="tu">
                                    <img src="Assets/upload/nianhui4.jpg" alt=""/>
                                    <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                                </div>
                                <div class="title">年会活动案例四</div>
                                <div class="des">安徽东东运输有限公司，我们的业务</div>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <div class="tabCont">
                    <!--公司成长史-->
                    <ul class="clearfix case_l">
                         <?php
                            require_once'../backend/database/dbHelper.php';
                            $db=new dbHelper();
                            $sql="select *from history";
                            $res=$db->execute_select($sql);
                            $counts=count($res);
                            for($i=$counts-1;$i>=$counts-4;$i--){
                               echo"<li>
                            <a href=''>
                                <div class='tu'>
                                    <img src='../backend/".$res[$i][4]."' alt=''/>
                                    <div class='s_b'><img src='Assets/images/icon9.png' alt=''/></div>
                                </div>
                                <div class='title'>".$res[$i][1]."</div>
                                <div class='des'>".$res[$i][2]."</div>
                            </a>
                        </li>";
                            }
                        ?>
                        <!-- <li>
                            <a href="">
                                <div class="tu">
                                    <img src="Assets/upload/gongsi2.jpg" alt=""/>
                                    <div class="s_b"><img src="Assets/images/icon9.png" alt=""/></div>
                                </div>
                                <div class="title">公司成长史二</div>
                                <div class="des">安徽东东运输有限公司，我们的业务</div>
                            </a>
                        </li> -->
                        
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space_hx">&nbsp;</div>
<div class="i_mc clearfix">
    <div class="name">品牌与梦想</div>
    <p> 高层次、高水平、高质量的服务</p>
    <div class="space_hx">&nbsp;</div>
    <dl class="i_about clearfix">
        <dt><a href=""><img src="Assets/images/pic1.png" alt=""/></a>
        <div class="line">&nbsp;</div>
        </dt>
        <dd>
            <div class="name">关于我们</div>
            <p class="des">道路普通货物运输；货物装卸、配载；大件运输；
                货运代理；物流信息咨询；汽车及配件销售；车辆事务代理；货物包装、
                配送（除快递）、仓储服务（除危险品）；汽车租赁；汽车技术检测服务。
                （依法须经批准的项目，经相关部门批准后方可开展经营活动）
            <div class="more"><a href="">>>更多</a></div>
        </dd>
    </dl>
    <dl class="i_news clearfix">
        <dt><a href=""><img src="Assets/images/pic2.png" alt=""/></a></dt>
        <dd>
            <div class="name">公司最新资讯</div>
            <ul>
                <li>
                    <a href="">
                        <i>+</i>
                        <p>二连浩特市五项措施强化交通运输行业安全生产工作</p>
                        <em>5-08</em>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i>+</i>
                        <p>新三板钢铁电商行业撮合交易成主流 资讯平台毛利率较高</p>
                        <em>4-15</em>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i>+</i>
                        <p>G7联合中物联汽车物流分会 共同发布行业公路运输指导参数</p>
                        <em>1-5</em>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i>+</i>
                        <p>市交通运输委关于开展2016年度深圳现代物流业资助资金航空业子项...</p>
                        <em>3-28</em>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i>+</i>
                        <p>省交通干校圆满完成宁夏交通运输行业领导干部新闻宣传及舆论引导...</p>
                        <em>5-26</em>
                    </a>
                </li>
            </ul>
            <div class="more"><a href="">>>更多</a></div>
        </dd>
    </dl>
</div>
<div class="space_hx">&nbsp;</div>
<div class="i_friend">
    <div class="tabBox_t">
        <div class="tabBox">
            <ul class="tabNav">
                <li><span>合作伙伴</span></li>
            </ul>
            <div class="tabCont" style="display:block;">
                <ul class="fr_l clearfix">
                    <li><a href="hezuo1.html"><img src="Assets/upload/anli2%20(1).jpg" alt="" width="100px" height="100px"/></a>
                    </li>
                    <li><a href="hezuo2.html"><img src="Assets/upload/anli2%20(2).jpg" alt="" width="100px" height="100px"/></a>
                    </li>
                    <li><a href="hezuo3.html"><img src="Assets/upload/anli3.jpg" alt="" width="100px" height="100px"/></a></li>
                    <li><a href="hezuo4.html"><img src="Assets/upload/anli4.jpg" alt="" width="100px" height="100px"/></a></li>
                </ul>
            </div>
           <!-- <div class="tabCont">
                <ul class="fr_l clearfix">
                    <li><a href=""><img src="Assets/upload/pic1.jpg" alt=""/></a></li>
                    <li><a href=""><img src="Assets/upload/pic1.jpg" alt=""/></a></li>
                    <li><a href=""><img src="Assets/upload/pic1.jpg" alt=""/></a></li>
                    <li><a href=""><img src="Assets/upload/pic1.jpg" alt=""/></a></li>
                </ul>
            </div>-->
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
