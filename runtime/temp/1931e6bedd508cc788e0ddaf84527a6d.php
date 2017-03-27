<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"C:\wamp\www\second-hand\thinkphp\public/../application/index\view\auth\register.html";i:1490599206;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎傻比用户前来注册!</title>
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
        <form action="/index/auth/doRegister" method="post">
          <div class="login__form">
            <div class="login__row">
              <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
              </svg>
              <input type="text" name="username" class="login__input name" id="user" placeholder="用户名"/>
              <div id="isusex" style="color: red;font-size: 10px;ma"></div>
              <div id="isuse" style="color: green;font-size: 10px;ma"></div>
            </div>
            <div class="login__row">
              <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
              </svg>
              <input type="password" name="password" class="login__input pass" id="password" placeholder="密码"/>
              <div id="ispasswordx" style="color: red;font-size: 10px;ma"></div>
              <div id="ispassword" style="color: green;font-size: 10px;ma"></div>
            </div>
            <div class="login__row">
              <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
              </svg>
              <input type="password" name="queren" id="password2" class="login__input pass" placeholder="确认密码"/>
              <div id="ispassword2x" style="color: red;font-size: 10px;ma"></div>
              <div id="ispassword2" style="color: green;font-size: 10px;ma"></div>
            </div>
            <div class="login__row">
              <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
              </svg>
              <input type="text" name="email" class="login__input name" placeholder="邮箱"/>
              <div id="isemailx" style="color: red;font-size: 10px;ma"></div>
              <div id="isemail" style="color: green;font-size: 10px;ma"></div>
            </div>
            <span id="tips"></span>
            <button type="button" class="login__submit">注册</button>


            <!-- <p class="login__signup">还没有账户? &nbsp;<a href="/index/user/register">注册</a></p> -->
          </div>
        </form>

    </div>

  </div>
</div>


<script type="text/javascript" src='__STATIC_URL__/amaze/js/jquery.min.js'></script>
<script type="text/javascript">

   $(function(){
        $("#user").blur(function(){
            var username = $('#user').val();
            $.post('/index/auth/usnm',{username:username},function(data){
                if(data.status){
                  alert(data.msg);
                } else {
                  if (!checkUser(username)) {
                      $('#isusex').html('用户名应为3-15位,不能以数字开头');
                  }else{
                      $('#isuse').html('用户名可用');
                  }
                      }
            })

        });


        $("#email").blur(function(){
            var email = $('#email').val();
            if (!checkEmail(email)) {
                $('#isemailx').html('邮箱格式不正确');
            }else{
                $('#isemail').html('邮箱格式正确');

            }
        });

        $('#password').blur(function(){
            var password = $('#password').val();
            if(!checkpassword(password)){
                $('#ispasswordx').html('密码不少于6位');
            }else{
                $('#ispassword').html('密码格式正确');
            }
        });

         $('#password2').blur(function(){
            var password2 = $('#password2').val();
            var password = $('#password').val();
            if(!checkpassword(password2)){
                $('#ispassword2x').html('密码不少于6位');
            }else{
                if(!checkpassword2(password2, password)){
                    $('#ispassword2x').html('两次密码输入不一致');
                }else{
                    $('#ispassword2').html('匹配成功');
                }
            }

        });
    });

    //验证用户名密码函数
    function checkUser(str){
    var re = /^[a-zA-z]\w{3,15}$/;
        if(re.test(str)){
            return true;
        }else{
            return false;
        }
    }
    //邮箱格式验证
    function checkEmail(str){
        var re = /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/;
        if(re.test(str)){
            return true;
        }else{
            return false;
        }
    }

    //密码验证
    function checkpassword(str){
        var re = /^[A-Za-z0-9]{6,18}$/;
         if(re.test(str)){
            return true;
        }else{
            return false;
        }
    }

    //确认密码验证
    function checkpassword2(str, str2){
        if(str != str2){
          return false;
        }else{
            return true;
        }
    }
</script>

<script type="text/javascript">
      $('.login__submit').click(function(){
      var email = $('input[name=email]').val();
      var username = $('input[name=username]').val();
      var password = $('input[name=password]').val();
      var params = {
        email: email,
        username: username,
        password: password
      };
      $.post($('form').attr('action'), params, function(data){
        if(data.status){
          alert('注册成功！');
          setTimeout(function(){
              location.href = '<?php echo url("/index/auth/login"); ?>';
          }, 1000);
        }else{
          alert(data.msg);
        }
      }, 'JSON');

  });

</script>
<script type="text/javascript" src='__STATIC_URL__/amaze/js/index.js'></script>

</body>
</html>
