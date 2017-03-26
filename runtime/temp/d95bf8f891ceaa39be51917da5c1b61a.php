<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"C:\AppServ\www\tp5\public/../application/admin\view\user\edit.html";i:1490172565;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit"><script type="text/javascript" src="__URL__/js/jquery-1.8.3.min.js"></script>

<title></title>
<link rel="stylesheet" href="__URL__/css/pintuer.css">
<link rel="stylesheet" href="__URL__/css/admin.css">

<!-- <script src="__URL__/js/pintuer.js"></script>
 --></head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-key"></span> 修改会员密码</strong></div>
  <div class="body-content">
   
      <div class="form-group">
        <div class="label">
          <label for="sitename">管理员帐号：</label>
        </div>
        <div class="field">
          <label style="line-height:33px;">
           <?php echo $pwd['username']; ?>
          </label>
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label for="sitename">原始密码：
            
          </label>
        </div>
        <div class="field">
          <input type="password" class="input w50" id="mpass" name="mpass" size="50" placeholder="请输入原始密码" data-validate="required:请输入原始密码" />
           <span id ="tips"></span>
               
        </div>
      </div>     


      <div class="form-group">
        <div class="label">
          <label for="sitename">新密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" name="npass" size="50" placeholder="请输入新密码" data-validate="required:请输入新密码,length#>=5:新密码不能小于5位" />
                  
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label for="sitename">确认新密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" name="repass" size="50" placeholder="请再次输入新密码" data-validate="required:请再次输入新密码,repeat#newpass:两次输入的密码不一致" />
          <span id ="mima"></span>          
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>   
        </div>
      </div>      
    
  </div>
</div>
</body>

<script type="text/javascript">

     $('input[name=mpass]').blur(function(){
         
        var opwd = $('#mpass').val();
        $.post('/admin/User/up', {mpass:opwd}, function(data){

              var data =  eval('('+data+')');


         
            if(data.code){
              
              $('#tips').html('<font color="green">原始密码正确</font>');

            }else{
              $('#tips').html('<font color="red">原始密码不正确</font>');


            }

              },'JSON');
        
     });


      //检测两次输入的密码是否一致
      //
      $('button[type=submit]').click(function(){
  //获取新密码的值
       var npass =   $('input[name=npass]').val();

         //获取重复密码的值

         var repass = $('input[name=repass]').val();


           if(npass!=repass){

            //$('input[name=repass]').val("两次密码不一致");

            $('#mima').html('<font color="red">两次密码不一致</font>');

            return false;
           }

           //这里面执行ajax 修改密码的 方法
           $.post(

            '/admin/User/upd',{repass:repass},function(data){

              alert(data);

              if(data.code){
                alert('密码修改成功');

              }else{

                alert('密码修改失败');


              }




            },'JSON')
       
      })


      

   







     




</script>

</html>