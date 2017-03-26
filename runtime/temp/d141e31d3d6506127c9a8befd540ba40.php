<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"C:\AppServ\www\tp5\public/../application/admin\view\user\guanli.html";i:1490239208;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>  
    <link rel="stylesheet" href="__URL__/css/pintuer.css">
    <link rel="stylesheet" href="__URL__/css/admin.css">
    <!-- <script src="__URL__/js/jquery.js"></script>
    <script src="__URL__/js/pintuer.js"></script>   -->
    <script type="text/javascript" src="__URL__/js/jquery-1.8.3.min.js">
  
   

</script>
</head>
<body>
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 留言管理</strong></div>
    <div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
          <button type="submit" class="button border-red"><span class="icon-trash-o"></span> 批量删除</button>
        </li>
        <span id="shanchu"></span>
      </ul>
    </div>
    <table class="table table-hover text-center">


      <tr>


        <th width="120">ID</th>
        <th>姓名</th>       
        <th>电话</th>
        <th>邮箱</th>
        <th>其他</th>
        <th width="25%">内容</th>
         <th width="120">留言时间</th>
        <th>操作</th>       
      </tr>  

      <?php foreach($list as $value): ?>    
        <tr id="zs<?php echo $value['user_id']; ?>">
        
          <td><input type="checkbox" name="id[]" value="1" />
            1</td>
          <td><?php echo $value['username']; ?></td>
          <td><?php echo $value['phone']; ?></td>
          <td><?php echo $value['email']; ?></td>  
           <td><?php echo $value['nickname']; ?></td>         
          <td><?php echo $value['person']; ?></td>
          <td><?php echo $value['create_time']; ?></td>
         <!--  <?php if($value['create_time']): ?>}
          <td>{ $time = date("Y-m-d H:i:s",$value['create_time'])}</td>
          <?php endif; ?> -->
          <td >
            <div class="button-group"> 

            <!--  <input type ="submit" value="删除" name = "<?php echo $value['user_id']; ?>"   ></input> -->

            <button name ="ha" id ="<?php echo $value['user_id']; ?>"> 删除</button>
            <!-- <a class="button border-red">删除</a> -->
            </div>
            <span></span>
          </td>
          <td>
            <div class="button-group"> 

            <!--  <input type ="submit" value="删除" name = "<?php echo $value['user_id']; ?>"   ></input> -->

            
            <!-- <a class="button border-red">删除</a> -->
            <font color =></font>
            </div>
            
          </td>



<script type="text/javascript">
  
  $('#<?php echo $value['user_id']; ?>').click(function(){

      $.post( '/admin/User/shanchu',

          {id:<?php echo $value['user_id']; ?>},






        function(result){

             var result = eval('('+result+')')
            
          
         

             if(result.code){

            $('#shanchu').html('<font color ="green">删除成功</font>');
            $('#zs<?php echo $value['user_id']; ?>').html('');

            }else{
             $('#shanchu').html('<font color ="red">删除失败</font>');


            }



      },'JSON')

      
   })

</script>

          
        </tr>
        <?php endforeach; ?>
        
        
          
         
      <tr>

       <div>
<ul>
<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
<li> <?php echo $user['nickname']; ?></li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>

        <td colspan="8"><div class="pagelist"> 

          <!-- <a href="">上一页</a> 
            <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a>  -->

          <?php echo $list->render(); ?>


          </div></td>
      </tr>
    </table>
  </div>




</body>


  </html>