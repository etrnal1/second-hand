<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"E:\wamp\wamp\www\second-hand\thinkphp\public/../application/index\view\auth\login.html";i:1490665912;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎傻比用户前来登陆!</title>
<meta name="viewport" content="width=device-width"/>
<meta name="viewport" content="initial-scale=1.0,user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="stylesheet" href="__STATIC_URL__/amaze/css/style1.css" type="text/css" />

</head>

<body>

<div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>

        <div class="login__form">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" name="username" class="login__input name" placeholder="用户名"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" name="password" class="login__input pass" placeholder="密码"/>
        </div>
        <font color="pink" size="3"><b>百度账号登陆:</b></font><div><a href="<?php echo $getcode_url; ?>"><img src="__STATIC_URL__/amaze/images/baidulogo1.jpg"></a></div>
        <button class="login__submit">登陆千寻</button>
        <span id="tips"></span>
        <p class="login__signup">还没有账户? &nbsp;<a href="<?php echo url('index/auth/register'); ?>">注册千寻账户</a></p>
      </div>


    </div>

  </div>
</div>
<script type="text/javascript" src='__STATIC_URL__/amaze/js/jquery.min.js'></script>
<script type="text/javascript">

          $('.login__submit').click(function(){

          var method = $('form').attr('method');
          var action = $('form').attr('action');
          var username = $('input[name=username]').val();
          var password = $('input[name=password]').val();
          var params = {
            username: username,
            password: password
          };
          $.post('/index/auth/doLogin', params, function(data){
            if(data.status){
              // alert('登陆成功！');
              setTimeout(function(){
                  location.href = '<?php echo url("index/index/show"); ?>';
              }, 1000);
            }else{
              alert(data.msg);
              return false;
            }
          }, 'JSON');
          // return false;
        });

          // $.ajax({
          //   url:action,
          //   type:method,
          //   dataType:'json',
          //   data:{username:inputusername,password:inputpassword},
          //   success:function(data){
          //     // alert(66);
          //     // console.log(data);
          //     if(data.code){
          //       $('#tips').text(data.tips);
          //       alert('登陆成功');
          //       window.location.href = "/";
          //     } else {
          //       $('#tips').text('登陆失败');
          //       alert('用户名或密码错误');
          //     }
          //   }
          // });


</script>

<script type="text/javascript" src='__STATIC_URL__/amaze/js/index.js'></script>

</body>
</html>
