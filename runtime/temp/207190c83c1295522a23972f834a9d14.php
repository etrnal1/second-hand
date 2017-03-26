<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"C:\AppServ\www\tp5\public/../application/admin\view\shop\show.html";i:1490495978;}*/ ?>
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
<script src="__URL__/js/jquery.js"></script>
<script src="__URL__/js/pintuer.js"></script>
</head>
<body>
<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href="add.html"> 添加内容</a> </li>
        <li>搜索：</li>
        <li>首页
          <select name="s_ishome" class="input" onchange="changesearch()" style="width:60px; line-height:17px; display:inline-block">
            <option value="">选择</option>
            <option value="1">是</option>
            <option value="0">否</option>
          </select>
          &nbsp;&nbsp;
          推荐
          <select name="s_isvouch" class="input" onchange="changesearch()"  style="width:60px; line-height:17px;display:inline-block">
            <option value="">选择</option>
            <option value="1">是</option>
            <option value="0">否</option>
          </select>
          &nbsp;&nbsp;
          置顶
          <select name="s_istop" class="input" onchange="changesearch()"  style="width:60px; line-height:17px;display:inline-block">
            <option value="">选择</option>
            <option value="1">是</option>
            <option value="0">否</option>
          </select>
        </li>
        <if condition="$iscid eq 1">
          <li>
            <select name="cid" class="input" style="width:200px; line-height:17px;" onchange="changesearch()">
              <option value="">请选择分类</option>
              <option value="">校园代步</option>
              <option value="">手机/电脑</option>
              <option value="">数码/配件</option>
              <option value="">产品/电器</option>
            </select>
          </li>
        </if>
        <li>
          <input type="text" placeholder="请输入搜索关键字" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
          <a href="javascript:void(0)" class="button border-main icon-search" onclick="changesearch()" > 搜索</a></li>
          <span id ="ms"></span>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">ID</th>
        <th width="10%">状态</th>
        <th>商品图片</th>
        <th>商品名称</th>
        <th>商品详情</th>
        <th>商品价格</th>
        <th>商品分类</th>
        <th width="10%">更新时间</th>
        <th width="310">操作</th>
      </tr>
      <volist name="list" id="vo">
       <?php foreach($result as $value): ?>
        <tr id="shanchu">
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id" value="<?php echo $value['all_id']; ?>" />
           </td>
          <td><input type="text" name="sort[1]" value="<?php echo $value['status']; ?>" style="width:50px; text-align:center; border:1px solid #ddd; padding:7px 0;" />
				
          </td>
          <td width="10%"><img src="" alt="" width="70" height="50" /></td>
          <td><?php echo $value['shop_name']; ?></td>
          <td><font color="#00CC99"><?php echo $value['shop_profile']; ?></font></td>
            <td><font color="#00CC99"><?php echo $value['shop_price']; ?></font></td>

          <td>产品分类</td>
          <td><?php echo $value['update_time']; ?></td>
          <td><div class="button-group"> <a class="button border-main" href="add.html"><span class="icon-edit"></span> 修改</a>
           </tr>
        <?php endforeach; ?>



  </div>

        <td colspan="8"><div class="pagelist"> 

          <!-- <a href="">上一页</a> 
            <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a>  -->

          <?php echo $result->render(); ?>


          </div></td>
      </tr>
    </table>
  </div>

      
                 
    </volist>


    
   		 
         
            
        
        
      <tr>
        <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
          全选 </td>
          <td colspan="7" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red icon-trash-o" style="padding:5px 15px;" onclick="DelSelect()"> 删除</a> 状态：<span id ="msg"></span></td>
         <!--  <select name="ishome" style="padding:5px 15px; border:1px solid #ddd;" onchange="changeishome(this)">
            <option value="">首页</option>
            <option value="1">是</option>
            <option value="0">否</option>
          </select>
          <select name="isvouch" style="padding:5px 15px; border:1px solid #ddd;" onchange="changeisvouch(this)">
            <option value="">推荐</option>
            <option value="1">是</option>
            <option value="0">否</option>
          </select>
          <select name="istop" style="padding:5px 15px; border:1px solid #ddd;" onchange="changeistop(this)">
            <option value="">置顶</option>
            <option value="1">是</option>
            <option value="0">否</option>
          </select>
          &nbsp;&nbsp;&nbsp;
          
          //移动到： -->
         <!--  <select name="movecid" style="padding:5px 15px; border:1px solid #ddd;" onchange="changecate(this)">
            <option value="">请选择分类</option>
            <option value="">产品分类</option>
            <option value="">产品分类</option>
            <option value="">产品分类</option>
            <option value="">产品分类</option>
          </select>
          <select name="copynum" style="padding:5px 15px; border:1px solid #ddd;" onchange="changecopy(this)">
            <option value="">请选择复制</option>
            <option value="5">复制5条</option>
            <option value="10">复制10条</option>
            <option value="15">复制15条</option>
            <option value="20">复制20条</option>
          </select></td> -->
      </tr>
      <tr>
   
      </tr>
    </table>
  </div>
</form>

<script type="text/javascript" src="__URL__/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">

   function  DelSelect()
   {


    var Checkbox=false;
    $("input[name=id]").each(function(){
    if (this.checked==true) {   
     Checkbox=true;  
     }
   });
  if (Checkbox){
   
        var set = new Array();
       $("input[name=id]:checked").each(function(){

        alert(this.value);
        set.push(this.value);

      $.post( '/admin/Shop/ps',{id:set},function(data){

      alert(data);

      if(data.code){
        $('#msg').html(data.msg);
        $('#shanchu').html('');
        //alert(data.msg);
       }else{
        $().html();

        $('#msg').html(data.msg);


       }

  },'JSON')
})


}
  else{
    alert("请选择您要删除的内容!");
    return false;
  }


  
  
    //alert('我要删除图片了');
  }

  /**
   * 这个是搜索商品功能
   * 能实现商品的模糊查询
   */
   function changesearch(){



      //获取关键词
            
              var word = $('input[name=keywords]').val();
      //      //传送过去
      //      //
      //      //ajax
             
            $.post('/admin/Shop/search',{keywords:word},function(data){

              if(data.code){
                $('#ms').html(data.msg);

              }else{

                $('#ms').html(data.msg);


              }


            },'JSON')
}
/**
 * 这是要进行排序功能
 */
 function sorts()
{

  alert('我要进行排序了');
}

//sorts()


   

    


</script> 
</body>
</html>