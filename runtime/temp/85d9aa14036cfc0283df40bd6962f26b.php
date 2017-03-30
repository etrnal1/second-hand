<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"E:\wamp\wamp\www\second-hand\thinkphp\public/../application/index\view\goods\goods.html";i:1490717320;}*/ ?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>全新张道真实用英语语法。 - <?php echo \think\Session::get('schoolname'); ?>二手托福/雅思/GRE - <?php echo \think\Session::get('schoolname'); ?>校园二手街</title>
    <meta name="description" content="全新，最全的英语语法，适合英语底子弱的人"/>
    <link rel="icon" href="http://znufe.2shoujie.com/favicon.ico"/>
    <link rel="icon" href="http://znufe.2shoujie.com/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/init.css"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/main.css"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/index.css"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/detail.css"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/fancybox-1.3.1.css"/>
    <script type="text/javascript" src="__STATIC_URL__/amaze/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="__STATIC_URL__/amaze/css/bootstrap.css">
    <script type="text/javascript" src="__STATIC_URL__/amaze/js/jquery-1.12.4.js"></script>
    <script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>

    <script>
    (function(){if(!/*@cc_on!@*/0)return;var e = "abbr,article,aside,audio,canvas,datalist,details,dialog,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(','),i=e.length;while(i--){document.createElement(e[i])}})()
    </script>
    <style>

    li {
        list-style:none
    }
    img {
        border:none
    }
    a {
        text-decoration:none;
    }
    .apple a {
        display:block;
        text-decoration:none;
    }
    .apple,.aa {
        width:90%;
        height:50px;
        overflow:hidden;
        margin:30px auto;
        border:1px solid #1B96EE;
    }
    .apple ul {
        height:50px;
    }
    .apple a,.aa a {
        width:100%;
        height:50px;
        line-height:50px;
        text-indent:20px;
        color:#1B96EE;
    }
    .aa {
        word-wrap:break-word;
        line-height:50px;
        color:#1B96EE;
    }
    </style>

</head>
<body>
    <header class="ease2">
        <div class="header-main center ease2">
            <a href="<?php echo url('index/index/show'); ?>" class="slogan">
                <h1 class="s-main"></h1>
                <div class="s-submain"></div>
                <img src="__STATIC_URL__/amaze/picture/2shoujie_web_title_qianxun.png" />
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
                    <a class="hots" href="http://znufe.2shoujie.com/"><?php echo \think\Session::get('schoolname'); ?></a>
                    <span class="cat-bread">></span>
                    <a class="hots" href="/category42"><?php echo \think\Session::get('schoolname'); ?>二手托福/雅思/GRE</a>
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
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<嗨,<?php echo \think\Session::get('username'); ?></li>
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
        <?php else: ?>
        <div class="log-re ease2">
                                <a href="<?php echo url('index/auth/login'); ?>"><div class="button" >登录</div></a>
                                <a href="<?php echo url('index/auth/register'); ?>"><div class="button" >注册</div></a>
        </div>
        <?php endif; ?>
        </div>
    </header>
    <div class="container">
        <div class="main center clearfix">
            <div class="ershou-details">
                <div class="ershou-photos-wr">
                    <a class="ershou-favorite" href="javascript:void(0);" style="background-image:url('__STATIC_URL__/amaze/images/heart.png');" onclick="favorites();">0</a>
                                        <div class="bigger-photo-box">
                                                <a class="bigger-photo hide show" rel="img_group" href="http://911.com/uploads/<?php echo $all->shop_pictrue[0]; ?>"><img class="bigger" src="http://911.com/uploads/<?php echo $all->shop_pictrue[0]; ?>" alt="<?php echo $all->shop_name; ?>"/></a>
                                            </div>
                    <div class="ershou-photo-slide">
                                                <div class="ershou-small-photos">
                            <img class="small cur" src="http://911.com/uploads/<?php echo $all->shop_pictrue[0]; ?>"/>
                        </div>
                                            </div>
                    <div class="ershou-photo-slide-layer"></div>
                </div>
                <div class="ershou-info">
                    <div class="ershou-hd">
                        <h2 class="ershou-title"><?php echo $all->shop_name; ?></h2>
                        <div class="ershou-price discount">
                            <span><?php echo $all->shop_price; ?></span>
                            <span class="is-discount">可小刀</span>
                        </div>
                        <p class="bro-counts">浏览了<span>6</span>次</p>
                    </div>
                    <ul class="ershou-detail">
                        <li class="ershou-place">
                            <div class="name"><span>交易地点</span></div>
                            <div class="value"><span><?php echo $all->location; ?></span></div>
                        </li>
                        <li class="ershou-seller">
                            <div class="name"><span>卖家</span></div>
                            <a href="<?php echo url('/index/Personshop/shop'); ?>" target="_blank">
                                <div class="value">
                                    <span class="value-name"><?php echo $all->user_id; ?></span>
                                </div>
                            </a>
                        </li>
                        <?php if(!empty(\think\Session::get('username'))): ?>
                        <li class="ershou-cert">

                            <div class="name"><span>预约状态</span></div>
                            <input type="hidden" name="hidden" value="<?php echo $all->all_id; ?>">
                            <div class="value"><span><button class="yuYue">点击预约</button></span></div>
                        </li>
                        <?php else: ?>
                        <li class="ershou-cert">
                            <div class="name"><span>预约状态</span></div>
                            <div class="value"><a href="<?php echo url('index/auth/login'); ?>"><span><button>点击登陆,才可预约</button></span></a></div>
                        </li>
                        <?php endif; ?>
                        <li class="ershou-tel">
                            <div class="name"><span>手机</span></div>
                            <?php if(empty(\think\Session::get('username'))): ?>
                            <div class="value">
                                <span class="user-num">******</span>
                                <a href="<?php echo url('index/auth/login'); ?>"><span class="user-login-tip">登录后查看完整号码</span></a>
                            </div>
                            <?php else: ?>
                            <div class="value">
                                <span class="user-num"><?php echo $uid->phone; ?></span>
                            </div>
                            <?php endif; ?>
                        </li>
                        <li class="ershou-time">
                            <div class="name"><span>发布时间</span></div>
                            <div class="value">
                                <span class="real-time"><?php echo $all->create_time; ?></span>
                            </div>
                        </li>
                    </ul>
                    <div class="jiathis_style_32x32" style="margin-top: 25px;height:32px;line-height: 32px;margin-left: 25px;">
                        <span style="display: inline-block;float: left;font-size: 14px;color: #666;">分享到：</span>
                        <a class="jiathis_button_qzone" title="分享到空间"><span class="jiathis_txt jtico jtico_qzone"></span></a>
                        <a class="jiathis_button_tsina" title="分享到微博"><span class="jiathis_txt jtico jtico_tsina"></span></a>
                        <a class="jiathis_button_tqq" title="分享到腾讯微博"><span class="jiathis_txt jtico jtico_tqq"></span></a>
                        <a class="jiathis_button_weixin" title="分享到微信"><span class="jiathis_txt jtico jtico_weixin"></span></a>
                        <a class="jiathis_button_renren" title="分享到人人网"><span class="jiathis_txt jtico jtico_renren"></span></a>
                        <a id="goods_button_more" href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank"></a>
                    </div>
                    <script type="text/javascript" >
                        var jiathis_config={
                            summary:"",
                            appkey:{
                                "tsina":"295689228"
                            },
                            shortUrl:false,
                            hideMore:false
                        }
                    </script>
                    <script type="text/javascript" src="js/jia.js" charset="utf-8"></script>
                    <div class="complain"><a href="javascript:void(0);" onclick="report();">&bull;&nbsp;&nbsp;&nbsp;&nbsp;举报&nbsp;&nbsp;&nbsp;&nbsp;&bull;</a></div>
                </div>
            </div>
            <div class="ershou-desc">
                 <div class="desc clearfix">
                    <a href="#">
                        <img id="user_ph" src="__STATIC_URL__/amaze/picture/avatar7.png"/>
                    </a>
                    商品详情:<span id="user_cmt"><?php echo $all->shop_profile; ?></span>
                </div>
            </div>
            <div class="comments">
                <div class="comments-title">评论</div>
                <div class="comments-wr">
                    <div class="comment-wr">
                        <div class="post-comment clearfix">
                            <div class="comment-cover">
                                <span class="loader loader-quart"></span>
                            </div>

                            <input id="goods_id" type="hidden" value="<?php echo $all->all_id; ?>" name="hidden_id"/>
                            <img class="avatar" src="__STATIC_URL__/amaze/picture/avatar-unlogin.png" alt="头像"/>
                            <?php if(empty(\think\Session::get('username'))): ?>
                            <div class="commenting-unlogin clearfix">
                                <div class="comment-input-wr-wr">
                                    <div class="comment-input-wr">
                                        <span class="tips">评论总要登录留个名吧</span>
                                    </div>
                                </div>
                                <a href="<?php echo url('index/auth/login'); ?>"><button class="comment-login" data-type="l"></button></a>
                            </div>
                            <?php else: ?>

                                <input type="text" name="comment" size="15" style="width:433px; height:60px;">
                                <input type="submit" class="comment-login1"  data-type="l" >

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plnr">
                <div>评论内容:</div>
                <div class="apple">
                    <ul class="ul">

                    </ul>
                </div>




            </div>
            <!--百度联盟广告-->
            <div class="comment-right">
                <div class="concerned-goods">
                    <div class="wrap-ad-box">
                        <div class="ad-box">
                        <script type="text/javascript">
        var cpro_id="u1997686";
        (window["cproStyleApi"] = window["cproStyleApi"] || {})[cpro_id]={at:"3",rsi0:"140",rsi1:"220",pat:"6",tn:"baiduCustNativeAD",rss1:"#e3eeec",conBW:"0",adp:"1",ptt:"1",ptc:"%E6%82%A8%E5%8F%AF%E8%83%BD%E6%84%9F%E5%85%B4%E8%B6%A3",ptFS:"14",ptFC:"#00ad90",ptBC:"#e3eeec",titFF:"%E5%BE%AE%E8%BD%AF%E9%9B%85%E9%BB%91",titFS:"14",rss2:"#00ad90",titSU:"0",ptbg:"90",piw:"0",pih:"0",ptp:"0"}
        </script>
        <script src="__STATIC_URL__/amaze/js/c_4.js" type="text/javascript"></script>
                        </div>
                    </div>
                </div>
            </div>
            <!--百度联盟广告-->
        </div>
    </div>

    <footer>
        <img class="footer-tri" src="__STATIC_URL__/amaze/picture/footer-tri.png"/>
        <div class="site-msg line2">
            <span class="power">&copy;2014-2015 易橙科技 版权所有</span>
            <span>鄂ICP备14003265号-2</span>
        </div>
    </footer>
    <script src="__STATIC_URL__/amaze/js/jquery-1.7.2.min.js"></script>
    <script src="__STATIC_URL__/amaze/js/jquery.mousewheel-3.0.2.pack.js"></script>
    <script src="__STATIC_URL__/amaze/js/jquery.fancybox-1.3.1.js"></script>
    <script src="__STATIC_URL__/amaze/js/common.js"></script>
    <script src="__STATIC_URL__/amaze/js/detail.js"></script>
    <script src="__STATIC_URL__/amaze/js/add.js"></script>
    <script src="__STATIC_URL__/amaze/js/jia.js"></script>
    <script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?141dfb73d31a5c8909afe43264b7c38f";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    </script>
    <script type="text/javascript">
        $('.comment-login1').click(function(){
            var comment = $('input[name=comment]').val();
            $.post('/index/Goods/comment/?id=<?php echo $all->all_id; ?>',{comment:comment},function(data){
                if(data){
                    chaxun();


                }else{
                    alert(data.msg);
                }
            },'JSON')
        });
    </script>
    <script type="text/javascript">
        $('.yuYue').click(function(){

        })
    </script>
    <script type="text/javascript">
        $('.yuYue').click(function(){
            $('.yuYue').text('预约成功');
            var hidden = $('input[name=hidden]').val();
            var hidden_id = $('input[name=hidden_id]').val();
            $.post('/index/Goods/yuYue',{hidden:hidden,hidden_id:hidden_id},function(){
                if(data.status){
                    alert(data.msg);

                    location.href = '<?php echo url("/index/publish/publish_qiugou"); ?>';

                }else{
                    alert(data.msg);
                }
            },'JSON')
        })
    </script>

    <script>
    //滚动
    function chaxun(){

        $.post('/index/goods/chaxun/?id=<?php echo $all->all_id; ?>',{},function(data){
            if(data.status){
                $('.ul').html(data.result);
            }

        })
    }
    function autoScroll(obj) {
        $(obj).find("ul").animate({
            marginTop: "-39px"
        }, 500, function() {
            $(this).css({
                marginTop: "0px"
            }).find("li:first").appendTo(this);
        })
    }
    $(function() {
        setInterval('autoScroll(".apple")', 2000);

    })</script>
</body>
</html>