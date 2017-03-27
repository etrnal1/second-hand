<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"C:\wamp\www\second-hand\thinkphp\public/../application/index\view\notice\shop.html";i:1490271680;}*/ ?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>商品发布规则 - 校园二手街</title>
    <link rel="icon" href="http://www.2shoujie.com/favicon.ico"/>
    <link rel="icon" href="http://www.2shoujie.com/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/init_1.css"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/main_1.css"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/periphery.css"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/animate.css"/>

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
                <img src="__STATIC_URL__/amaze/picture/2shoujie_web_title_qianxun.png" alt="最安全方便的校园二手市场"/>
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
            </div>
        </div>
    </header>
    <div class="container">
        <div class="main center">
            <div class="rule-wrapper center">
                <div class="rule-hd center">
                    <div class="l-triangle"></div>
                    <h2>商品发布规则</h2>
                    <div class="r-triangle"></div>
                </div>
                <table class="rules center">
                    <thead>
                    <tr>
                        <td class="r-order"></td>
                        <th>发布规则</th>
                        <th>惩罚措施</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="r-order"><span>1</span></td>
                        <td class="r-rule">同一类型的商品不得多次发布，建议发在一个商品当中。每张图片可以对应一件商品，在商品详情中描述每个商品的价格。</td>
                        <td class="r-punishment">一经发现将删除重复商品，只保留一个</td>
                    </tr>
                    <tr>
                        <td class="r-order"><span>2</span></td>
                        <td class="r-rule">不得在本平台上发布商品图片与实物不一致的商品，若引用网上图片第一张必须为实物拍摄</td>
                        <td class="r-punishment">一经发现将删除商品</td>
                    </tr>
                    <tr>
                        <td class="r-order"><span>3</span></td>
                        <td class="r-rule">不得在本平台上发布带有虚假诈骗信息的商品</td>
                        <td class="r-punishment">一经查证将删除发布内容，并且永久封号</td>
                    </tr>
                    <tr>
                        <td class="r-order"><span>4</span></td>
                        <td class="r-rule">不得在本平台上密集发布全新商品</td>
                        <td class="r-punishment">一经发现将视作广告，删除全部商品并封号</td>
                    </tr>
                    <tr>
                        <td class="r-order"><span>5</span></td>
                        <td class="r-rule">不得在本平台上发布违法商品</td>
                        <td class="r-punishment">一经查证将删除发布内容，并且永久封号</td>
                    </tr>
                    <tr>
                        <td class="r-order"><span>6</span></td>
                        <td class="r-rule">不得在本平台上发布与商品无关信息</td>
                        <td class="r-punishment">一经发现将删除发布内容，并且永久封号</td>
                    </tr>
                    <tr>
                        <td class="r-order"><span>7</span></td>
                        <td class="r-rule">发布商品30天后自动下架</td>
                        <td class="r-punishment">下架后可在个人主页重新上架</td>
                    </tr>
                    </tbody>
                </table>
                <div class="end-line"></div>
            </div>
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
    <script src="__STATIC_URL__/amaze/js/common.js"></script>
    <script src="__STATIC_URL__/amaze/js/add.js"></script>
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