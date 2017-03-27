<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"E:\wamp\wamp\www\second-hand\thinkphp\public/../application/index\view\index\index.html";i:1490369419;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>千寻二手街 - 最安全方便的校内二手市场</title>
    <meta name="keywords" content="校园,大学,大学生,二手,闲置,二手市场,跳蚤市场,旧货市场,二手网,二手交易,校园二手,校园二手市场,校园二手网,校园跳蚤市场,大学生二手,大学生二手市场,大学生二手网,大学生跳蚤市场" />
    <meta name="description" content="校园二手街是最安全方便的校园二手市场、校园二手网、校园跳蚤市场、校园旧货市场、大学生二手市场、大学生二手网、大学生跳蚤市场、大学生旧货市场、二手市场、旧货市场、跳蚤市场、二手网，覆盖多所大学的大学生。涵盖二手手机、二手自行车、二手电动车、二手教材、二手书、二手球拍等旧货市场物品信息，满足大学生校园内的二手交易、二手求购的需求。学号认证更安全，校内交易更方便。" />
    <meta name="baidu-site-verification" content="8S16NULIyk" />
    <meta name="google-site-verification" content="vbwE0Aq4e-TBMajDfvoYPHFtOAiZlQcssKXEOKaMpBo" />
    <meta name="360-site-verification" content="410048b82228095750d06e117eb4ccca" />
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/common_5.css"/>
    <link rel="stylesheet" href="__STATIC_URL__/amaze/css/school_5.css"/>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="__STATIC_URL__/amaze/css/mainliandong.css" rel="stylesheet">
    <style>
    * {
        margin: 0;
        padding: 0;
    }
    body{
        background-image:url('__STATIC_URL__/amaze/images/snow_bk.jpg');
        background-size:cover;
        background-repeat: no-repeat;
        background-color:#222;
        position: relative;
        width:100%;
    }
    #code{
        width:40%;
        min-width:450px;
        height:450px;
        background-color:rgba(0, 0, 0, 0.3);
        position:fixed;
        left:30%;
        top:20%;
        border-radius: 10px;
        font-size:16px;
        line-height:22px;
        font-weitht:bold;
    }
    #author{
        position: fixed;
        bottom: 10px;
        left: 48%;
    }
    #author a{
        text-decoration: none;}
    .key{
        color:orange;
        font-family:'';
    }
    .comment{
        color:#e6e6e6;
        font-weight: 800;
    }
    </style>

</head>
<body>
	<div class="container">
		<div class="school_top">
            <h3>选择学校</h3>
        </div>
		<form class="form-inline" action="<?php echo url('/index/index/doShow'); ?>" method="post">
		  <div data-toggle="distpicker" class="distpicker">
			<div class="form-group">
			  <label class="sr-only" for="province1">Province</label>
			  <select class="form-control" id="province1"></select>
			</div>
			<div class="form-group">
			  <label class="sr-only" for="city1">City</label>
			  <select class="form-control" id="city1"></select>
			</div>
			<div class="form-group">
			  <label class="sr-only" for="district1">District</label>
			  <select name="schoolName" class="form-control" id="district1"></select>
			</div>
		  </div>
		  <input type="submit" value="进入千寻网" class="sub">
		</form>
	</div>

	<script src="__STATIC_URL__/amaze/js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="__STATIC_URL__/amaze/js/bootstrap.min.js"></script>
	<script src="__STATIC_URL__/amaze/js/distpicker.data.js"></script>
	<script src="__STATIC_URL__/amaze/js/distpicker.js"></script>
	<script src="__STATIC_URL__/amaze/js/mainliandong.js"></script>
	<script src="__STATIC_URL__/amaze/js/jquery-1.10.1.min_5.js"></script>
    <script src="__STATIC_URL__/amaze/js/sear_school_5.js"></script>
    <script src="__STATIC_URL__/amaze/jquery.js"></script>
    <script src="__STATIC_URL__/amaze/js/lanren.js"></script>
    <script src="__STATIC_URL__/amaze/js/ThreeCanvas.js"></script>
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="__STATIC_URL__/amaze/js/Snow.js"></script>
    <script src="__STATIC_URL__/amaze/js/snowFall.js"></script>
    <!-- 代码部分end -->
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
	    $('.sub').click(function(){
	        var schoolName = $('select[name=schoolName]').val();
	        $.post($('form').attr('action'), schoolName, function(data){
	        if(data.status){
	            setTimeout(function(){
	               location.href = '<?php echo url("index/index/show"); ?>';
	            }, 1000);
	        }else{
	            alert(data.msg);
	        }
	        }, 'JSON');
	    })
	</script>


    <script>

        $.snowFall({
            //创建粒子数量，密度
            particleNo: 500,
            //粒子下拉速度
            particleSpeed:30,
            //粒子在垂直（Y轴）方向运动范围
            particleY_Range:1300,
            //粒子在垂直（X轴）方向运动范围
            particleX_Range:1000,
            //是否绑定鼠标事件
            bindMouse: false,
            //相机离Z轴原点距离
            zIndex:600,
          //摄像机视野角度
            angle:55,
            wind_weight:0
            });
    </script>
    <canvas>
    </canvas>
    <!-- 代码部分end -->
</body>
</html>