<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"E:\wamp\wamp\www\second-hand\thinkphp\public/../application/index\view\index\one.html";i:1490271530;}*/ ?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>【<?php echo \think\Session::get('schoolname'); ?>二手手机转让|<?php echo \think\Session::get('schoolname'); ?>二手手机交易市场】 - <?php echo \think\Session::get('schoolname'); ?>校园二手街</title>
    <meta name="keywords" content="中南财经政法大学二手手机转让,中南财经政法大学二手手机交易市场"/>
    <meta name="description" content="中南财经政法大学二手手机交易网为您提供大量中南财经政法大学二手手机报价、交易等信息，在这里您可以免费查看和发布中南财经政法大学二手手机转让、求购、价格等信息，买卖中南财经政法大学二手手机请到校园二手街中南财经政法大学二手手机交易市场"/>
    <link rel="icon" href="http://znufe.2shoujie.com/favicon.ico"/>
    <link rel="icon" href="http://znufe.2shoujie.com/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/init.css"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/main.css"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/index.css"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/sear.css"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC_URL__/amaze/css/bootstrap.css">
    <script type="text/javascript" src="__STATIC_URL__/amaze/js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="__STATIC_URL__/amaze/js/bootstrap.js"></script>

    <script>
    (function(){if(!/*@cc_on!@*/0)return;var e = "abbr,article,aside,audio,canvas,datalist,details,dialog,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(','),i=e.length;while(i--){document.createElement(e[i])}})()
    </script>

</head>
<body>
    <header class="ease2">
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
                        <img class="search-icon" src="__STATIC_URL__/amaze/picture/search-icon.png"/>
                        <div class="search-input">
                        <input name="keyword" id="keyword" x-webkit-speech type="text" placeholder="搜索你想要的二货"/>
                        </div>
                    </div>
                </form>
                <div class="search-hots center ease2">
                    <a class="hots" href="<?php echo url('index/index/show'); ?>"><?php echo \think\Session::get('schoolname'); ?>二手市场</a>
                    <span class="cat-bread">></span>
                                        <a class="hots" href="/category4"><?php echo \think\Session::get('schoolname'); ?>二手手机</a>
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
                        <li>嗨,<?php echo \think\Session::get('username'); ?></li>
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
                                <a href="/index/auth/login"><div class="button" >登录</div></a>
                                <a href="/index/auth/register"><div class="button" >注册</div></a>
        </div>
        <?php endif; ?>
        </div>
    </header>
    <div class="container">
        <div class="main center">
            <div class="rank-by clearfix" data-cur="1">
                <div class="rank-title-wr">
                    <a href="/category4/time/pn1">
                        <div class="rank-title default" data-rank="1">时间</div>
                    </a>
                    <a href="/category4/credit/pn1">
                        <div class="rank-title cred" data-rank="3">信用</div>
                    </a>
                    <a class="pr rank-title-price" href="/category4/priceAsc/pn1">
                        <div class="rank-title pri " data-rank="4">价格</div>
                                                <span id="up_down" order="nor" class="price-nor"></span>
                                            </a>
                    <a href="/category4/hot/pn1">
                        <div class="rank-title hot" data-rank="5">热度</div>
                    </a>
                </div>
                <div class="wave ease2"></div>
            </div>
            <div class="item-list">
                <ul class="items clearfix">
                                        <li class="item">
<!--                         <a href="/goods/180563.html" class="img" target="_blank"><img src="picture/8b2536feeddc406894664b65be715364.gif" alt="个人闲置出手苹果6，国行64g"/></a>
                        <div class="info">
                            <div class="price">1600</div>
                            <div class="name"><a href="/goods/180563.html" target="_blank">个人闲置出手苹果6，国行64g</a></div>
                            <div class="department"><span>财政税务07级(未认证)</span></div>
                            <div class="place"><span>可当面可平台验机</span></div>
                        </div> -->
                    </li>
                                        <li class="item">
                        <a href="/goods/180209.html" class="img" target="_blank"><img src="picture/a5a0e8680bc74430a0f4736999b36125.gif" alt="Lgg3"/></a>
                        <div class="info">
                            <div class="price">280</div>
                            <div class="name"><a href="/goods/180209.html" target="_blank">Lgg3</a></div>
                            <div class="department"><span>生命科学13级(未认证)</span></div>
                            <div class="place"><span>校内</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/180021.html" class="img" target="_blank"><img src="picture/ed0a990a3d254383a616e7d3ba70d146.gif" alt="国行64g苹果6"/></a>
                        <div class="info">
                            <div class="price">2180</div>
                            <div class="name"><a href="/goods/180021.html" target="_blank">国行64g苹果6</a></div>
                            <div class="department"><span>其它院系15级(未认证)</span></div>
                            <div class="place"><span>校内</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/179971.html" class="img" target="_blank"><img src="picture/c2aea930f35941f1b47255a0f5353f88.gif" alt="iPhone 6自用国行保修期内64g可验机试用"/></a>
                        <div class="info">
                            <div class="price">1600</div>
                            <div class="name"><a href="/goods/179971.html" target="_blank">iPhone 6自用国行保修期内64g可验机试用</a></div>
                            <div class="department"><span>信息管理学院12级(未认证)</span></div>
                            <div class="place"><span>认证用户✅</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/179955.html" class="img" target="_blank"><img src="picture/4dfa0b84585042b98c8dad7acbb81342.gif" alt="苹果6自用64g未过保成色新"/></a>
                        <div class="info">
                            <div class="price">1800</div>
                            <div class="name"><a href="/goods/179955.html" target="_blank">苹果6自用64g未过保成色新</a></div>
                            <div class="department"><span>上海高级金融学院14级(未认证)</span></div>
                            <div class="place"><span>可平台验机</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/179840.html" class="img" target="_blank"><img src="picture/90c6e83afaf24a2eb3f1ec72d71de7e8.gif" alt="低价出iphone5s"/></a>
                        <div class="info">
                            <div class="price">720</div>
                            <div class="name"><a href="/goods/179840.html" target="_blank">低价出iphone5s</a></div>
                            <div class="department"><span>园艺林学13级(未认证)</span></div>
                            <div class="place"><span>华中农业大学</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/179224.html" class="img" target="_blank"><img src="picture/53cbc49c198041018de249c4acf6e800.gif" alt="是是是"/></a>
                        <div class="info">
                            <div class="price">111</div>
                            <div class="name"><a href="/goods/179224.html" target="_blank">是是是</a></div>
                            <div class="department"><span>中文15级(未认证)</span></div>
                            <div class="place"><span>是 </span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/178586.html" class="img" target="_blank"><img src="picture/android_1486583340883_17102357.jpg" alt="苹果5s 九成新650元 低价出售"/></a>
                        <div class="info">
                            <div class="price">650</div>
                            <div class="name"><a href="/goods/178586.html" target="_blank">苹果5s 九成新650元 低价出售</a></div>
                            <div class="department"><span>上海高级金融学院12级(未认证)</span></div>
                            <div class="place"><span>随意</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/178250.html" class="img" target="_blank"><img src="picture/451d9de657e843bd8a796ea2aa353eae.gif" alt="iPhone6配件发票齐全自用转让64G"/></a>
                        <div class="info">
                            <div class="price">1600</div>
                            <div class="name"><a href="/goods/178250.html" target="_blank">iPhone6配件发票齐全自用转让64G</a></div>
                            <div class="department"><span>护理学院09级(未认证)</span></div>
                            <div class="place"><span>可以验机交易</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/177968.html" class="img" target="_blank"><img src="picture/android_1484039838411_162248.jpg" alt="高仿苹果5s,"/></a>
                        <div class="info">
                            <div class="price">600</div>
                            <div class="name"><a href="/goods/177968.html" target="_blank">高仿苹果5s,</a></div>
                            <div class="department"><span>会计13级(未认证)</span></div>
                            <div class="place"><span>图书馆</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/177319.html" class="img" target="_blank"><img src="picture/a69cd465cf334f249dfb7f0386aa99bf.gif" alt="二手手机1000元以下"/></a>
                        <div class="info">
                            <div class="price">12</div>
                            <div class="name"><a href="/goods/177319.html" target="_blank">二手手机1000元以下</a></div>
                            <div class="department"><span>WTO学院16级(未认证)</span></div>
                            <div class="place"><span>地方</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/177342.html" class="img" target="_blank"><img src="picture/0c4c3ce6997944ec8735225873f2f3f4.gif" alt="招兼职"/></a>
                        <div class="info">
                            <div class="price">1</div>
                            <div class="name"><a href="/goods/177342.html" target="_blank">招兼职</a></div>
                            <div class="department"><span>建筑系13级(未认证)</span></div>
                            <div class="place"><span>宿舍</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/177255.html" class="img" target="_blank"><img src="picture/19dc203480974198999f861fa181af5b.gif" alt="找兼职。购物省钱。。。。"/></a>
                        <div class="info">
                            <div class="price">1</div>
                            <div class="name"><a href="/goods/177255.html" target="_blank">找兼职。购物省钱。。。。</a></div>
                            <div class="department"><span>建筑系13级(未认证)</span></div>
                            <div class="place"><span>宿舍</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/177207.html" class="img" target="_blank"><img src="picture/0404fe2c729046a59365b9d635864fdd.gif" alt="Iphone6国行金色64G原装配件国美专柜购买带发票"/></a>
                        <div class="info">
                            <div class="price">1520</div>
                            <div class="name"><a href="/goods/177207.html" target="_blank">Iphone6国行金色64G原装配件国美专柜购买带发票</a></div>
                            <div class="department"><span>未认证用户</span></div>
                            <div class="place"><span>哪里都行</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/177129.html" class="img" target="_blank"><img src="picture/34c130021e2b42ffb27f8fa709cf5e7e.gif" alt="收苹果手机"/></a>
                        <div class="info">
                            <div class="price">50000</div>
                            <div class="name"><a href="/goods/177129.html" target="_blank">收苹果手机</a></div>
                            <div class="department"><span>法律12级(未认证)</span></div>
                            <div class="place"><span>随意</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/176704.html" class="img" target="_blank"><img src="picture/bd2e5b0185e74055a26b795d612d1dff.gif" alt="自用iPhone5s土豪金64g转手急"/></a>
                        <div class="info">
                            <div class="price">800</div>
                            <div class="name"><a href="/goods/176704.html" target="_blank">自用iPhone5s土豪金64g转手急</a></div>
                            <div class="department"><span>人文学院16级(未认证)</span></div>
                            <div class="place"><span>，</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/175916.html" class="img" target="_blank"><img src="picture/dafc65042a5c495d91b302d93a4ee2c3.gif" alt="全新小米移动电源10400毫安"/></a>
                        <div class="info">
                            <div class="price">51</div>
                            <div class="name"><a href="/goods/175916.html" target="_blank">全新小米移动电源10400毫安</a></div>
                            <div class="department"><span>未认证用户</span></div>
                            <div class="place"><span>财大，其他地方可以商量</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/175725.html" class="img" target="_blank"><img src="picture/3b66208f75fb48468c90611288dad109.gif" alt="iPhone5s"/></a>
                        <div class="info">
                            <div class="price">600</div>
                            <div class="name"><a href="/goods/175725.html" target="_blank">iPhone5s</a></div>
                            <div class="department"><span>法律16级(未认证)</span></div>
                            <div class="place"><span>任意方式 微信</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/175724.html" class="img" target="_blank"><img src="picture/c2ceb872438f442f941e322b1f8f7c5e.gif" alt="iPhone6"/></a>
                        <div class="info">
                            <div class="price">1300</div>
                            <div class="name"><a href="/goods/175724.html" target="_blank">iPhone6</a></div>
                            <div class="department"><span>法律16级(未认证)</span></div>
                            <div class="place"><span>任意方式 微信 QQ</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/175659.html" class="img" target="_blank"><img src="picture/45821fc33925489398c1b2009e41a4bc.gif" alt="小米2A"/></a>
                        <div class="info">
                            <div class="price">150</div>
                            <div class="name"><a href="/goods/175659.html" target="_blank">小米2A</a></div>
                            <div class="department"><span>金融13级(未认证)</span></div>
                            <div class="place"><span>武汉</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/175369.html" class="img" target="_blank"><img src="picture/android_1479378658098_9100079.jpg" alt="苹果7"/></a>
                        <div class="info">
                            <div class="price">1500</div>
                            <div class="name"><a href="/goods/175369.html" target="_blank">苹果7</a></div>
                            <div class="department"><span>公共安全与管理学院08级(未认证)</span></div>
                            <div class="place"><span>广东</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/175341.html" class="img" target="_blank"><img src="picture/698bda6645e74f1dba2ec46b92250705.gif" alt="99新小米5高配64g黑色出售"/></a>
                        <div class="info">
                            <div class="price">1500</div>
                            <div class="name"><a href="/goods/175341.html" target="_blank">99新小米5高配64g黑色出售</a></div>
                            <div class="department"><span>软件13级(未认证)</span></div>
                            <div class="place"><span>校内</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/175235.html" class="img" target="_blank"><img src="picture/android_1479189483790_142483.jpg" alt="九九成新华硕飞马手机"/></a>
                        <div class="info">
                            <div class="price">200</div>
                            <div class="name"><a href="/goods/175235.html" target="_blank">九九成新华硕飞马手机</a></div>
                            <div class="department"><span>外国语10级(未认证)</span></div>
                            <div class="place"><span>南湖校区</span></div>
                        </div>
                    </li>
                                        <li class="item">
                        <a href="/goods/174794.html" class="img" target="_blank"><img src="picture/5b5eaf1ef4e54099931b7d04bdf907c2.gif" alt="招兼职，加微信Tenfu01，备注兼职"/></a>
                        <div class="info">
                            <div class="price">1</div>
                            <div class="name"><a href="/goods/174794.html" target="_blank">招兼职，加微信Tenfu01，备注兼职</a></div>
                            <div class="department"><span>建筑系13级(未认证)</span></div>
                            <div class="place"><span>宿舍</span></div>
                        </div>
                    </li>
                                        <li class="item fixed"></li>
                    <li class="item fixed"></li>
                    <li class="item fixed"></li>
                </ul>
            </div>
            <div class="pages">
                                                <a class="page-num cur" href="/category4/time/pn1">1</a>
                                <a class="page-num " href="/category4/time/pn2">2</a>
                                <a class="page-num " href="/category4/time/pn3">3</a>
                                <a class="page-num " href="/category4/time/pn4">4</a>
                                <a class="page-num " href="/category4/time/pn5">5</a>
                                <a class="page-num " href="/category4/time/pn6">6</a>
                                <a class="page-num " href="/category4/time/pn7">7</a>
                                                <a class="page-arrow arrow-right" href="/category4/time/pn2">下一页</a>
                            </div>
        </div>
    </div>
    <footer>
        <img class="footer-tri" src="picture/footer-tri.png"/>
        <div class="site-msg line2">
            <span class="power">&copy;2016-2017 千寻 版权所有</span>
            <!-- <span>鄂ICP备14003265号-2</span> -->
        </div>
    </footer>
    <script src="__STATIC_URL__/amaze/js/jquery-1.7.2.min.js"></script>
    <script src="__STATIC_URL__/amaze/js/common.js"></script>
    <script src="__STATIC_URL__/amaze/js/sear.js"></script>
    <script src="__STATIC_URL__/amaze/js/add.js"></script>
    <script src="__STATIC_URL__/amaze/js/trick.js"></script>
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