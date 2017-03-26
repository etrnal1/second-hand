<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"C:\AppServ\www\tp5\public/../application/admin\view\auth\register.html";i:1490411120;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>注册界面</title>
	<script type="text/javascript" src="__URL__/js/jquery-1.8.3.min.js"></script>
</head>
<body>

     用户名  <input type = "text" name ="username"></input><br>

      密码  <input type="password" name ="pwd"><br>

      注册	<input type="submit" name ="button"><br>
      <h1 id  ="zc"></h1>

验证码 <div><?php echo captcha_img(); ?></div>

</body>

 

<script type="text/javascript">

	//这里写ajax 代码
	//点击登录事件
	//
	$('input[name=button]').click(function(){
//获取用户名
			var username =  $('input[name=username]').val();
//获取密
			var password = $('input[name=pwd]').val();



			//ajax 代码   url  data function  json 
			//
			//
		$.post(
            '/admin/Auth/doRegister',
             {username:username,pwd:password}, 
          

           function(data){

           var data =eval('('+data+')');

         

           	 if(data.code){

           	  $('#zc').html('<font color ="green">注册成功</font>');

           	 	  //$('#zc').html('我是大大红');

	           	 location.href= '<?php echo url("admin/Auth/login"); ?>';
   

           	 }else{
           	 	$('#zc').html('<font color="red">注册失败</font>');
           	 }


           },'JSON');
	
		
	})
	//
	//
	
	//
	


	//
	



</script>
</html>