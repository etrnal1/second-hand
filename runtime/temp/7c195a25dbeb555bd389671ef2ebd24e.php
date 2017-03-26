<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"C:\AppServ\www\tp5\public/../application/admin\view\shop\add.html";i:1490420423;}*/ ?>
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
<div class="panel admin-panel">

  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
<form action="/admin/shop/upload" enctype="multipart/form-data" method="post">
  <div class="body-content">

     
        <div class="label">
          <label>商品名字：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="shop_name" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>

        <div style="padding: 20px">
   
   
</div>
      <div class="field">
           <input onchange="FirstImg()" name="image" class="input tips" style="opacity:0;position:absolute" type="file" id="FirstfileImg" multiple />
            <div position:absolute>
        <span> 点击这里上传图片</span>
    </div>
         
          <fieldset style="width:500px;">
          <legend><input type="button" class="button bg-blue margin-left" id="image" value="图片预览">图片预览</legend>
          <div style="position: relative;" id="ccc">
          </div>
</fieldset>
          <div class="tipss"></div>
        
        </div>
      </div>
      <br/>
            
      
      <if condition="$iscid eq 1">
        <div class="form-group">
          <div class="lfe">分类标题：</label>
          </div>
          <div class="field">
           
            <select name="cid" value='1'class="input w50">
            <?php foreach($result as $value): ?>
              <option id ="sudo<?php echo $value['class_id']; ?>" name="sid" value="<?php echo $value['class_id']; ?>"  selected = "selected" onclick="sd<?php echo $value['class_id']; ?>()" >
               <?php echo $value['class_name']; ?>
			  </option>
         <?php endforeach; ?>
            </select>
          <div class="tips"></div>
          </div>
        </div>
       
      </if>
    <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>

        >

        
        <div class="field">
          <input type="text" class="input w50" name="shop_profile" value=""  data-validate="required:请输入商品描述" />
          <div class="tips"></div>
        </div>
      </div>
     <div class="form-group">
        <div class="label">
          <label>商品价格：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="price" value="0"  data-validate="number:排序必须为数字" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>发布时间：</label>
        </div>
        <div class="field"> 
          <script src="js/laydate/laydate.js"></script>
          <input type="text" class="laydate-icon input w50" name="datetime" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" value=""  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
          <div class="tips" id ="msg"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>发布者：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="authour" value=""  />
          <div class="tips"></div>
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
  </form> 
  
</div>

</body>

<script type="text/javascript" src="__URL__/js/jquery-1.8.3.min.js"></script>

<script type="text/javascript">
jQuery.DuoImgsYulan = function(file, id) {
    for (var i = 0; i < 3; i++) {
        if (!/image\/\w+/.test(file[i].type)) {
            alert("请选择图片文件");
            return false;
        }
        if (file[i].size > 2048 * 1024) {
            alert("图片不能大于2MB");
            continue;
        }
        var img;
        console.log(document.getElementById("fileImg"));
        console.log(file[i]);
        console.log("file-size=" + file[i].size);
        var reader = new FileReader();
        reader.onloadstart = function(e) {
            console.log("开始读取....");
        }
        reader.onprogress = function(e) {
            console.log("正在读取中....");
        }
        reader.onabort = function(e) {
            console.log("中断读取....");
        }
        reader.onerror = function(e) {
            console.log("读取异常....");
        }
        reader.onload = function(e) {
            console.log("成功读取....");
            var div = document.createElement("div"); //外层 div
            div.setAttribute("style", "position:relative;width:inherit;height:inherit;float:left;z-index:2;width:150px;margin-left:8px;margin-right:8px;");
            var del = document.createElement("div"); //删除按钮div
            del.setAttribute("style", "position: absolute; bottom: 4px; right: 0px; z-index: 99; width: 30px; height:30px;border-radius:50%;")
            var delicon = document.createElement("img");
            delicon.setAttribute("src", "http://www.jq22.com/tp/f26c324f-24db-4f08-91d6-f7ffc9ca1516.png");
            delicon.setAttribute("title", "删除");
            delicon.setAttribute("style", "cursor:pointer;width: 30px; height:30px");
            del.onclick = function() {
                this.parentNode.parentNode.removeChild(this.parentElement);
                ClearfirtsImg();
            };
            del.appendChild(delicon);
            div.appendChild(del);
            var imgs = document.createElement("img"); //上传的图片
            imgs.setAttribute("name", "loadimgs");
            imgs.setAttribute("src", e.target.result);
            imgs.setAttribute("width", 150);
            if (document.getElementById(id).childNodes.length > 2) {
                document.getElementById(id).removeChild(document.getElementById(id).firstChild);
            }
            div.appendChild(imgs)
            document.getElementById(id).appendChild(div);
        }
        reader.readAsDataURL(file[i]);
    }
}

function FirstImg() {
    $.DuoImgsYulan(document.getElementById("FirstfileImg").files, "ccc");
}

function ClearfirtsImg() {
    var file = $("#FirstfileImg")
    file.after(file.clone().val(""));
    file.remove();
}function(
=) {};


//这里是图片上传信息
</script>



</html>