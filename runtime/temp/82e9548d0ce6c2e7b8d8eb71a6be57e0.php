<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"E:\wamp\wamp\www\second-hand\thinkphp\public/../application/index\view\person\person.html";i:1490706290;}*/ ?>
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
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/index_4.css"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/animate_4.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC_URL__/amaze/css/lanrenzhijia.css">
    <link rel="stylesheet" type="text/css" href="__STATIC_URL__/amaze/css/bootstrap.css">
    <script type="text/javascript" src="__STATIC_URL__/amaze/js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="__STATIC_URL__/amaze/js/bootstrap.js"></script>

    <script>
    (function(){if(!/*@cc_on!@*/0)return;var e = "abbr,article,aside,audio,canvas,datalist,details,dialog,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(','),i=e.length;while(i--){document.createElement(e[i])}})()
    </script>

</head>
<body>
    <header class="ease2">
    <a href="<?php echo url('index/index/show'); ?>">
        <img class="logo ease2" src="__STATIC_URL__/amaze/picture/2shoujie_web_logo_4.png" alt="中南财经政法大学二手市场">
    </a>

    <div class="header-main center ease2">
        <a href="<?php echo url('index/index/show'); ?>" class="slogan">
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
                                <a class="hots" href="<?php echo url('index/index/one'); ?>?id=1" target="_blank">自行车</a>
                                <a class="hots" href="<?php echo url('index/index/one'); ?>?id=2" target="_blank">手机电脑</a>
                                <a class="hots" href="<?php echo url('index/index/one'); ?>?id=7" target="_blank">教材</a>
                                <a class="hots" href="<?php echo url('index/index/one'); ?>?id=5" target="_blank">生活娱乐</a>
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
                        <li><a href="<?php echo url('index/person/weather'); ?>" target="_blank">查看天气</a></li>
                        <li><a href="<?php echo url('index/auth/logout'); ?>">退出</a></li>
                        <!-- <li><a href="#">Separated link</a></li> -->
                      </ul>
                    </div>
                    <!-- </div> -->
                    <!-- <a href="/index/auth/logout"><div class="button" >退出</div></a> -->
        </div>
        <?php endif; if(empty(\think\Session::get('username'))): ?>
        <div class="log-re ease2">
                                <a href="/index/auth/login"><div class="button" >登录</div></a>
                                <a href="/index/auth/register"><div class="button" >注册</div></a>
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
                        <a href="<?php echo url('index/index/one'); ?>?id=<?php echo $value->class_id; ?>" target="_blank">
                            <i class="nav-icons">
                                <img src="__STATIC_URL__/amaze/picture/<?php echo $value->image; ?>" alt="校园代步"/>
                            </i>
                            <h3><?php echo $value->class_name; ?></h3>
                            <!-- <h3>校园代步</h3> -->
                        </a>
                    <div class="sub-nav">
                        <span >
                            <?php foreach($small as $v): if($v->class_id == $value->class_id): ?>


                                            <a href="<?php echo url('index/index/one'); ?>?id=<?php echo $value->class_id; ?>" target="_blank"><?php echo $v->little_name; ?></a>
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
            <div class="tab_box">
              <div class="lyz_tab_left">
                <div class="pro_con111">
                  <ul>
                    <li class="hover" id="one1" onMouseOver="setTab(&#39;one&#39;,1,5)">个人资料</li>
                    <li id="one2" onMouseOver="setTab(&#39;one&#39;,2,5)">我发布的商品</li>
                    <li id="one3" onMouseOver="setTab(&#39;one&#39;,3,5)">我的收藏</li>
                    <li id="one4" onMouseOver="setTab(&#39;one&#39;,4,5)">我的预约</li>
                  </ul>
                </div>
                <script language="javascript">
            <!--
                function setTab(name,cursel,n){
                    for(i=1;i<=n;i++){
                    var menu=document.getElementById(name+i);
                    var con=document.getElementById("con_"+name+"_"+i);
                    menu.className=i==cursel?"hover":"";
                    con.style.display=i==cursel?"block":"none";
                    }
                }
            //-->
            </script>
              </div>
              <div class="lyz_tab_right">
                <div class="hover" id="con_one_1">
                    <div>
                        <div>账户信息</div>
                        <hr>
                        <div>账号:&nbsp;&nbsp;<font color="blue" size="4"><b><?php echo $user->username; ?></b></font></div>
                        <div>基本信息</div>
                        <hr>
<!--                         <input type="text" style="display:inline;" name=""> -->
                        <div>邮箱:&nbsp;&nbsp;<font color="blue" size="4"><b><?php echo $user->email; ?></b></font></div>
                        <div>手机号:&nbsp;<font color="blue" size="4"><b><?php echo $user->phone; ?></b></font></div>
                        <div>qq:&nbsp;&nbsp;<font color="blue" size="4"><b><?php echo $user->qq; ?></b></font></div>
                    </div>
                </div>
                <div class="hover" id="con_one_2" style="display: none">
                    <div>
                        <table border="1" width="600px">
                        <tr>
                            <div class="shopname"><th>商品名称</th></div>
                            <div class="shopprice"><th>商品详情</th></div>
                            <div class="createtime"><th>商品价格</th></div>
                        </tr>
                        <?php foreach($all as $info): ?>

                            <tr>
                                <div class="shopname"><th><?php echo $info['shop_name']; ?></th></div>
                                <div class="shopprice"><th><?php echo $info['shop_profile']; ?></th></div>
                                <div class="createtime"><th><?php echo $info['shop_price']; ?></th></div>
                            </tr>

                        <?php endforeach; ?>

                    </table>

                    </div>
                </div>
                <div class="hover" id="con_one_3" style="display: none">
                    <table border="1" width="600px">
                        <tr>
                            <div class="shopname"><th>商品名称</th></div>
                            <div class="shopprice"><th>商品详情</th></div>
                            <div class="createtime"><th>商品价格</th></div>
                        </tr>
                        <?php foreach($collect as $info): ?>

                            <tr>
                                <div class="shopname"><th><?php echo $info['shop_name']; ?></th></div>
                                <div class="shopprice"><th><?php echo $info['shop_profile']; ?></th></div>
                                <div class="createtime"><th><?php echo $info['shop_price']; ?></th></div>
                            </tr>

                        <?php endforeach; ?>

                    </table>


                </div>
                <div class="hover" id="con_one_4" style="display: none">
                    <table border="1" width="600px">
                        <tr>
                            <div class="shopname"><th>商品名称</th></div>
                            <div class="shopprice"><th>商品详情</th></div>
                            <div class="createtime"><th>商品价格</th></div>
                        </tr>
                        <?php foreach($yuyue as $info): ?>

                            <tr>
                                <div class="shopname"><th><?php echo $info['shop_id']; ?></th></div>

                            </tr>

                        <?php endforeach; ?>

                    </table>

                </div>
              </div>
              <div class="clear"></div>
        </div>

    </div>
</div>
<div class="return-to-top"><a href=""></a></div>
    <aside>
        <a id="release-button" class="release-button mt_6" href="javascript:;"></a>

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
                <a href="http://www.2shoujie.com" target="_blank" class="links">千寻二手街</a>
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
