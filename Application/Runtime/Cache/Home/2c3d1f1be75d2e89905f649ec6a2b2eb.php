<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>考试在线系统</title>
    <link rel="stylesheet" type="text/css" href="../../../../thinkphp/Public/home/css/css.css">
    <script type="text/javascript" src="../../../../thinkphp/Public/home/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="../../../../thinkphp/Public/home/js/jquery1.42.min.js"></script>
    <style type="text/css">
        /*导航栏样式 开始*/
        *{margin:0; padding:0; list-style:none; }
        body{ background:#fff; font:normal 12px/22px 宋体;  }
        img{ border:0;  }
        a{ text-decoration:none; color:#333;  }
        /*a:hover{ color:#FF8400;  }*/
        /*.js{width:90%; margin:10px auto 0 auto; }*/
        /*.js p{ padding:5px 0; font-weight:bold; overflow:hidden;  }*/
        /*.js p span{ float:right; }*/
        /*.js p span a{ color:#f00; text-decoration:underline;   }*/
        /*.js textarea{ height:190px;  width:98%; padding:5px; border:1px solid #ccc; border-top:2px solid #aaa;  border-left:2px solid #aaa;  }*/

        .clearfix:after{content:".";display:block;height:0;clear:both;visibility:hidden;}
        .navBar{  position:relative; z-index:1; padding-left:10px;   height:60px; line-height:60px; background:url(img/line.gif) repeat-x 0 bottom #fff; color:#333;   }
        .nav{ position:relative; width:980px; margin:0 auto;  font-family:"Microsoft YaHei",SimSun,SimHei; font-size:14px; }
        .nav a{ color:#333;  }
        .nav h3{ font-size:100%; font-weight:normal;   }
        .nav .m{ float:left;  position:relative; z-index:1; }
        .nav .s{ float:left; width:3px; text-align:center; color:#D4D4D4; font-size:12px; }
        .nav h3 a{ display:block; width:137px; text-align:center;   font-weight:bold;  }
        .nav .sub{ display:none; /*默认隐藏*/  position:absolute; left:-3px; top:60px; z-index:1; width:128px; border:1px solid #E6E4E3; border-top:0;  background:#fff; }
        .nav .sub li{ text-align:center; padding:0 8px; margin-bottom:-1px;   }
        .nav .sub li a{ display:block;  border-bottom:1px solid #E6E4E3; padding:8px 0; height:28px; line-height:28px; color:#666;   }
        .nav .sub li a:hover{ color:#FE7700;   }
        .nav .block{ height:3px; width:130px; background:#FE7700; position:absolute; left:0; top:57px; overflow:hidden;  }
        /*导航栏样式 结束*/

        /*轮播图样式 开始*/
        *{margin:0; padding:0; list-style:none; }
        body{ background:#fff; font:normal 12px/22px 宋体;  }
        img{ border:0;  }
        a{ text-decoration:none; color:#333;  }
        a:hover{ color:#1974A1;  }
        .js{width:90%; margin:10px auto 0 auto; }
        .js p{ padding:5px 0; font-weight:bold; overflow:hidden;  }
        .js p span{ float:right; }
        .js p span a{ color:#f00; text-decoration:underline;   }
        .js textarea{ height:100px;  width:98%; padding:5px; border:1px solid #ccc; border-top:2px solid #aaa;  border-left:2px solid #aaa;  }

        .focusBox { position: relative; width:980px; height:450px; overflow: hidden; }
        .focusBox .pic{ position:relative; z-index:0; }
        .focusBox .pic img { width:980px; height:450px; display: block; }
        .focusBox .hd { width:100%; position: absolute; bottom: 10px; text-align: center; font-size:0; z-index:1; }
        .focusBox .hd li{margin: 0 5px; background: url(images/dot.png) no-repeat 0 -16px; height: 16px; overflow: hidden; width: 16px; cursor: pointer;
            display:inline-block; *display:inline; zoom:1;  _background: url(images/dot8.png) no-repeat 0 -16px;
        }
        .focusBox .hd .on{ background-position:0 0; }
        .focusBox .prev,
        .focusBox .next { width: 60px; height: 90px; margin: -60px 0 0; display: none; background: url(images/ad_ctr.png) no-repeat 0 0; position: absolute; top: 50%; z-index: 10; cursor: pointer; text-indent: -9999px; filter:alpha(opacity=20);opacity:0.2;  }
        .focusBox .prev { left: 0; }
        .focusBox .next { background-position: 0 -90px; right: 0; }
        .focusBox .prev:hover,
        .focusBox .next:hover { filter:alpha(opacity=50) !important;opacity:0.5 !important;  }
        /*轮播图样式 结束*/
    </style>
</head>
<body>
    <!--header头 开始-->
    <div class="header">
        <div class="topR" id="topBar">
            <div class="wrapper">
                <a href="" class="topR_logo"><img width="200px" height="56px" src="../../../../thinkphp/Public/home/img/top_logo.png" alt=""></a>
                <div id="header_bar">
                    <div class="topR_login">
                        <a href="/thinkphp/home/login/index">马上登录</a>
                        <a href="/thinkphp/home/login/register">注册</a>
                    </div>
                </div>
                <div id="aside-tips"></div>
            </div>
        </div>
        <!--导航栏 开始-->
        <div class="mainNav mb20 bc">
            <div class="wrapper">
                <div class="navBar">
                    <ul class="nav clearfix">
                        <li class="m">
                            <h3><a href="/thinkphp/home/index">网站首页</a></h3>
                        </li>
                        <li class="s">|</li>
                        <li class="m">
                            <h3><a href="">在线考试</a></h3>
                            <ul class="sub">
                                <li><a href="#">如何使用</a></li>
                                <li><a href="#">如何使用</a></li>
                                <li><a href="#">如何使用</a></li>
                                <li><a href="#">如何使用</a></li>
                            </ul>
                        </li>
                        <li class="s">|</li>
                        <li class="m "><!-- 当前频道添加on -->
                            <h3><a href="">初 中</a></h3>
                            <ul class="sub">
                                <li><a href="#">语文</a></li>
                                <li><a href="#">数学</a></li>
                                <li><a href="#">英语</a></li>
                                <li><a href="#">物理</a></li>
                                <li><a href="#">化学</a></li>
                            </ul>
                        </li>
                        <li class="s">|</li>
                        <li class="m">
                            <h3><a href="">高 中</a></h3>
                            <ul class="sub">
                                <li><a href="#">语文</a></li>
                                <li><a href="#">数学</a></li>
                                <li><a href="#">英语</a></li>
                                <li><a href="#">物理</a></li>
                                <li><a href="#">化学</a></li>
                                <li><a href="#">地理</a></li>
                                <li><a href="#">历史</a></li>
                            </ul>
                        </li>
                        <li class="s">|</li>
                        <li class="m">
                            <h3><a href="">大 学</a></h3>
                            <ul class="sub">
                                <li><a href="#">高等数学</a></li>
                                <li><a href="#">大学英语</a></li>
                                <li><a href="#">大学物理</a></li>
                                <li><a href="#">无机化学</a></li>
                            </ul>
                        </li>
                        <li class="s">|</li>
                        <li class="m">
                            <h3><a href="">关于我们</a></h3>
                        </li>
                        <li class="s">|</li>
                        <li class="m">
                            <h3><a href="">联系我们</a></h3>
                        </li>
                        <li class="block"></li><!-- 滑动块 -->
                    </ul>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            (function(){
                var ind = 0; //初始位置
                var nav= jQuery(".nav");
                var init = jQuery(".nav .m").eq(ind);
                var block = jQuery(".nav .block"); //滑块
                block.css({"left":init.position().left-3}); //初始化滑块位置
                nav.hover(function(){},function(){ block.animate({"left":init.position().left-3},100); }); //移出导航滑块返回
                jQuery(".nav").slide({
                    type:"menu", //效果类型
                    titCell:".m", // 鼠标触发对象
                    targetCell:".sub", // 效果对象，必须被titCell包含
                    delayTime:300, // 效果时间
                    triggerTime:0, //鼠标延迟触发时间
                    returnDefault:true,//on返回初始位置
                    defaultIndex:ind,//初始位置
                    startFun:function(i,c,s,tit){ //控制当前滑块位置
                        block.animate({"left":tit.eq(i).position().left-3},100);
                    }
                });
            })()
        </script>
        <!--导航栏 结束-->

        <!--轮播图 开始-->
        <div class="focusBox" style="margin:0 auto">
            <ul class="pic">
                <li><a href=""><img src="../../../../thinkphp/Public/home/img/1.jpg"/></a></li>
                <li><a href=""><img src="../../../../thinkphp/Public/home/img/2.jpg"/></a></li>
                <li><a href=""><img src="../../../../thinkphp/Public/home/img/3.jpg"/></a></li>
                <li><a href=""><img src="../../../../thinkphp/Public/home/img/4.jpg"/></a></li>
                <li><a href=""><img src="../../../../thinkphp/Public/home/img/5.jpg"/></a></li>
            </ul>
            <a class="prev" href="javascript:void(0)"></a>
            <a class="next" href="javascript:void(0)"></a>
            <ul class="hd">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <script type="text/javascript">
            /*鼠标移过，左右按钮显示*/
            jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
            /*SuperSlide图片切换*/
            jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});
        </script>
        <!--轮播图 结束-->
    </div>
    <!--header头 结束-->

    <!--主体内容 开始-->
    <div class="secItem mb20 bc clearfix">
        <div class="fl">
            <section class="index_item">
                <div class="i_title clearfix">
                    <span class="t_txt fl">初中试题</span>
                    <a class="t_more fr" href="/thinkphp/home/list/index?pid=3">更多...</a>
                </div>
                <ul>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                </ul>
            </section>
            <section class="index_item">
                <div class="i_title clearfix">
                    <span class="t_txt fl">高中试题</span>
                    <a class="t_more fr" href="/thinkphp/home/list/index?pid=4">更多...</a>
                </div>
                <ul>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                </ul>
            </section>
            <section class="index_item">
                <div class="i_title clearfix">
                    <span class="t_txt fl">大学试题</span>
                    <a class="t_more fr" href="/thinkphp/home/list/index?pid=5">更多...</a>
                </div>
                <ul>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                    <li style="height:30px"><a href="">1111111111111</a></li>
                </ul>
            </section>
        </div>
        <div class="fr">

            <!-- Start 预留广告位 -->
            <div class="index-side-ad"><a href=""><img src="//wsimg.chuanke.com/fragment/e90f2c346799d55efec71ae38398e144.jpg"></a></div>
            <br>
            <div class="index-side-ad"><a href=""><img src="//wsimg.chuanke.com/fragment/9075ee4c6de3f390149b293a22aa8777.jpg"></a></div>
            <br>
            <div class="index-side-ad"><a href=""><img src="//wsimg.chuanke.com/fragment/9075ee4c6de3f390149b293a22aa8777.jpg"></a></div>
            <!-- End 预留广告位 -->
        </div>
    </div>
    <!--主体内容 结束-->
    <hr width="100%">
    <!--footer尾部 开始-->
    <include file="./Application/Home/View/index/footer.html">
    <footer class="footer">
        <div class="ft_friendlinks">
            <dl class="flink">
                <dt class="tit">友情链接：</dt>
                <dd class="con">
                    <a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">中华人民共和国教育部</a>
                    <a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">北京市教委</a>
                    <a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">美国留学</a>
                    <a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">知好乐网校</a>
                    <a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">在线英语培训</a>
                    <a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">公务员考试网</a>
                    <a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">坦途教育网</a>
                    <a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">博浪网</a>
                    <a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">智康1对1</a>
                    <a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">学习方法网</a>
                    <a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">在线考试中心</a>
                    <a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">时代学习网</a>
                    <a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">大耳朵英语</a>
                    <a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">尚友网</a>
                </dd>
            </dl>
        </div>
        <nav class="ft_nav">
            <a href="" target="_blank">关于在线考试</a>
            <a href="" target="_blank">在线帮助</a>
            <a href="" target="_blank">投诉&amp;反馈</a>
            <a href="" target="_blank">联系方式</a>
            <a href="" target="_blank">招聘信息</a>
            <a href="">手机触屏版</a>
        </nav>
        <div class="copyright">
            <p class="info">
                <span class="mr10">京ICP证<a href="http://www.miitbeian.gov.cn" target="_blank">130265</a>号</span>
                <span class="mr10">Copyright © 2016 <a href="" target="_blank">使用在线考试前必读</a></span>
                <span>在线考试<a target="_blank" href="">kaoshi.com</a></span>
            </p>
        </div>
    </footer>
    <!--footer尾部 结束-->
</body>
</html>