<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"E:\wamp\wamp\www\second-hand\thinkphp\public/../application/index\view\index\show.html";i:1490340404;}*/ ?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>【<?php echo \think\Session::get('schoolname'); ?>二手网|<?php echo \think\Session::get('schoolname'); ?>跳蚤市场|<?php echo \think\Session::get('schoolname'); ?>二手市场】 - <?php echo \think\Session::get('schoolname'); ?>校园二手街</title>
    <meta name="keywords" content="中南财经政法大学,二手,闲置,二手交易,二手市场,旧货市场,中南财经政法大学二手网,中南财经政法大学跳蚤市场,中南财经政法大学二手市场,中南财经政法大学旧货市场"/>
    <meta name="description" content="校园二手街中南财经政法大学跳蚤市场频道是专门为中南财经政法大学用户提供的二手交易平台、旧货市场。您可以发布、查找中南财经政法大学二手自行车、二手电动车、二手教材、二手手机、二手电脑、租房、二手书、二手iPhone等二手闲置物品信息。买卖二手物品，尽在中南财经政法大学二手网。"/>
    <link rel="icon" href="http://znufe.2shoujie.com/favicon.ico"/>
    <link rel="icon" href="http://znufe.2shoujie.com/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/init_4.css"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/main_4.css"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/index_41.css"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/animate_4.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC_URL__/amaze/css/bootstrap.css">
    <script type="text/javascript" src="__STATIC_URL__/amaze/js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="__STATIC_URL__/amaze/js/bootstrap.js"></script>

    <script>
    (function(){if(!/*@cc_on!@*/0)return;var e = "abbr,article,aside,audio,canvas,datalist,details,dialog,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(','),i=e.length;while(i--){document.createElement(e[i])}})()
    </script>

</head>
<body>
    <header class="ease2">
    <a href="#">
        <img class="logo ease2" src="__STATIC_URL__/amaze/picture/2shoujie_web_logo_4.png" alt="中南财经政法大学二手市场">
    </a>

    <div class="header-main center ease2">
        <a href="#" class="slogan">
            <h1 class="s-main"></h1>
            <div class="s-submain"></div>
            <img src="__STATIC_URL__/amaze/picture/2shoujie_web_title_qianxun.png" alt="中南财经政法大学最安全方便的校园二手市场"/>
        </a>
        <div class="search-box-wr ease2">
            <form class="search-box center" action="<?php echo url('/index/Goods/search'); ?>" method="post">
                <button type="submit" class="search-submit">搜索</button>
                <div class="input-wr">
                    <img class="search-icon" src="__STATIC_URL__/amaze/picture/search-icon_4.png"/>
                    <div class="search-input">
                    <input name="keyword" id="keyword" x-webkit-speech type="text" placeholder="搜索你想要的二货"/>
                    </div>
                </div>
            </form>
            <div class="search-hots center ease2">
                <span>热门：</span>
                                <a class="hots" href="<?php echo url('index/index/one'); ?>" target="_blank"><font color="#66666A"><b>自行车</b></font></a>
                                <a class="hots" href="<?php echo url('index/index/one'); ?>" target="_blank"><font color="#66666A"><b>运动健身</b></font></a>
                                <a class="hots" href="<?php echo url('index/index/one'); ?>" target="_blank"><font color="#66666A"><b>教材</b></font></a>
                                <a class="hots" href="<?php echo url('index/index/one'); ?>" target="_blank"><font color="#66666A"><b>生活娱乐</b></font></a>
                            </div>

        </div>
        <?php if(!empty(\think\Session::get('username'))): ?>
        <div class="log-re ease2">

                    <!-- <div class="button" > -->
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                       <?php echo \think\Session::get('username'); ?>
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;嗨,<?php echo \think\Session::get('username'); ?></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo url('index/person/person'); ?>">个人中心</a></li>
                        <li><a href="#">我的收藏</a></li>
                        <li><a href="<?php echo url('index/auth/logout'); ?>">退出</a></li>

                        <!-- <li><a href="#">Separated link</a></li> -->
                      </ul>
                    </div>
                    <!-- </div> -->
                    <!-- <a href="/index/auth/logout"><div class="button" >退出</div></a> -->
        </div>
        <?php endif; if(empty(\think\Session::get('username'))): ?>
        <div class="log-re ease2">
                                <a href="<?php echo url('index/auth/login'); ?>"><div class="button" >登录</div></a>
                                <a href="<?php echo url('index/auth/register'); ?>"><div class="button" >注册</div></a>
        </div>
        <?php endif; ?>

    </div>

</header>
    <nav class="ease2">
    <ul>
        <li class="blank-head"><a href="javascript:;"></a></li>
                <li class="area">
                    <div>
                        <i class="nav-icons"></i>

                        <div id="college"><span><?php echo \think\Session::get('schoolname'); ?></span></div>

                        <a class="switch" href="<?php echo url('index/index/index'); ?>">切换</a>
                    </div>
                </li>
                <?php foreach($big as $value): ?>
                <li class="category-1 catg">
                        <a href="<?php echo url('index/index/one'); ?>" target="_blank">
                            <i class="nav-icons">
                                <img src="__STATIC_URL__/amaze/picture/<?php echo $value->image; ?>" alt="校园代步"/>
                            </i>
                            <h3><?php echo $value->class_name; ?></h3>
                            <!-- <h3>校园代步</h3> -->
                        </a>
                    <div class="sub-nav">
                        <span >
                            <?php foreach($small as $v): if($v->class_id == $value->class_id): ?>


                                            <a href="<?php echo url('index/index/one'); ?>?id={}" target="_blank"><?php echo $v->little_name; ?></a>
                                            <!-- <a href="<?php echo url('index/index/one'); ?>" target="_blank">电动车</a> -->



                                <?php endif; endforeach; ?>
                        </span>
                    </div>

                </li>
                <?php endforeach; ?>

            </ul>
        </nav>
    <div class="container">
    <div class="main center">
                <div class="wrap-site mt20">
            <div class="recom-title"></div>
            <ul class="recom-list group">
                <li><a href="<?php echo url('index/notice/shop'); ?>" target="_blank">商品发布规则</a></li>
                                <li><a href="<?php echo url('index/notice/phone'); ?>" target="_blank">购买二手iPhone注意事项</a></li>
                            </ul>
        </div>
        <div class="label-wr center clearfix">
            <div id="nav-labels">
                <a id="new_pro" class="labels" href="<?php echo url('index/publish/newest'); ?>">最新发布</a>
            </div>
            <div id="link-labels">
                <a id="hot-topic" class="labels" href="<?php echo url('index/publish/qiugou'); ?>">求购专区</a>
            </div>
        </div>
        <div class="item-list">
            <ul class="items clearfix">
                <?php foreach($all as $shop): ?>

                <li class="item">

                    <a href="<?php echo url('index/Goods/goods'); ?>?id=<?php echo $shop->all_id; ?>" class="img" target="_blank"><img src="http://911.com/uploads/<?php echo $shop->shop_pictrue[0]; ?>" /></a>

                    <div class="info">
                        <div class="price"><?php echo $shop->shop_price; ?></div><!--价格-->
                        <div class="name">
                            <a href="<?php echo url('index/Goods/goods'); ?>?id=<?php echo $shop->all_id; ?>" target="_blank"><?php echo $shop->shop_name; ?></a>
                        </div>
                        <div class="department"><span>临床11级(未认证)</span></div>
                        <div class="place"><span>全校</span></div>
                    </div>

                </li>
                <?php endforeach; ?>

                 <li class="item fixed"></li>
                <li class="item fixed"></li>
                <li class="item fixed"></li>
            </ul>
        </div>
        <div class="pages">
                        <?php echo $all->render(); ?>
                        <!-- <a class="page-num cur" href="http://znufe.2shoujie.com/recent">1</a>
                        <a class="page-num " href="http://znufe.2shoujie.com/recent/pn2">2</a>
                        <a class="page-num " href="http://znufe.2shoujie.com/recent/pn3">3</a>
                        <a class="page-num " href="http://znufe.2shoujie.com/recent/pn4">4</a>
                        <a class="page-num " href="http://znufe.2shoujie.com/recent/pn5">5</a>
                        <a class="page-num " href="http://znufe.2shoujie.com/recent/pn6">6</a>
                        <a class="page-num " href="http://znufe.2shoujie.com/recent/pn7">7</a>
                        <a class="page-num " href="http://znufe.2shoujie.com/recent/pn8">8</a>
                                    <a class="page-arrow arrow-right" href="http://znufe.2shoujie.com/recent/pn2">下一页</a> -->
                    </div>
    </div>
</div>
<div class="return-to-top"><a href=""></a></div>
    <aside>

        <a id="release-button" class="release-button mt_6" href="<?php echo url('index/publish/publish'); ?>"></a><!--我要发布-->



    <div class="ad-baidu">
        <script type="text/javascript">
        var cpro_id="u1997686";
        (window["cproStyleApi"] = window["cproStyleApi"] || {})[cpro_id]={at:"3",rsi0:"140",rsi1:"220",pat:"6",tn:"baiduCustNativeAD",rss1:"#e3eeec",conBW:"0",adp:"1",ptt:"1",ptc:"%E6%82%A8%E5%8F%AF%E8%83%BD%E6%84%9F%E5%85%B4%E8%B6%A3",ptFS:"14",ptFC:"#00ad90",ptBC:"#e3eeec",titFF:"%E5%BE%AE%E8%BD%AF%E9%9B%85%E9%BB%91",titFS:"14",rss2:"#00ad90",titSU:"0",ptbg:"90",piw:"0",pih:"0",ptp:"0"}
        </script>
        <script src="__STATIC_URL__/amaze/js/c_4.js" type="text/javascript"></script>
    </div>
    <!--百度联盟广告-->
    </aside>
    <footer>
    <img class="footer-tri" src="__STATIC_URL__/amaze/picture/footer-tri_4.png"/>
        <div class="friend-links">
        <div class="links-title center">友情链接</div>
        <ul class="links-wr center">
                        <li class="first">
                <a href="http://91.com" target="_blank" class="links">千寻二手街</a>
            </li>
                        <li >
                <a href="http://tieba.baidu.com/f?ie=utf-8&kw=%E4%B8%AD%E5%8D%97%E8%B4%A2%E7%BB%8F%E6%94%BF%E6%B3%95%E5%A4%A7%E5%AD%A6&fr=search" target="_blank" class="links">河北工业大学吧</a>
            </li>
                        <li >
                <a href="http://wellan.znufe.edu.cn" target="_blank" class="links">文澜新闻网</a>
            </li>
                        <li >
                <a href="http://uzone.univs.cn/school_2113.html" target="_blank" class="links">中部崛起网</a>
            </li>
                    </ul>
    </div>
        <div class="site-msg line1">
        <a class="about" id="fd_footer" href="javascript:;">产品意见反馈</a>
        <a class="about" href="http://www.2shoujie.com/joinUs" target="_blank">加入我们</a>
        <a class="contact" href="http://www.2shoujie.com/open" target="_blank">开通学校|开放平台</a>
    </div>
    <div class="site-msg line2">
        <span class="power">&copy;2016-2017 千寻 版权所有</span>
        <!-- <span>鄂ICP备14003265号-2</span> -->
    </div>
</footer>
    <script src="__STATIC_URL__/amaze/js/jquery-1.7.2.min_4.js"></script>
    <script src="__STATIC_URL__/amaze/js/common_4.js"></script>
    <script src="__STATIC_URL__/amaze/js/add_4.js"></script>

    <script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?141dfb73d31a5c8909afe43264b7c38f";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    </script>
</body>
</html>

<!-- <!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CSS3动态背景登录框代码 - 站长素材</title>
<link rel="stylesheet" type="text/css" href="__STATIC_URL__/amaze/css/styles.css">
</head>
<body>
<div class="htmleaf-container">
  <div class="wrapper">
    <div class="container">
      <h1>Welcome</h1>

      <form class="form">
        <input type="text" placeholder="Username">
        <input type="password" placeholder="Password">
        <button type="submit" id="login-button">Login</button>
      </form>
    </div>

    <ul class="bg-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
</div>

<script src="__STATIC_URL__/amaze/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$('#login-button').click(function (event) {
  event.preventDefault();
  $('form').fadeOut(500);
  $('.wrapper').addClass('form-success');
});
</script>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';color:#000000">
<p>适用浏览器：360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗. 不支持IE8及以下浏览器。</p>
<p>来源：<a href="http://sc.chinaz.com/" target="_blank">站长素材</a></p>
</div>
</body>
</html> -->