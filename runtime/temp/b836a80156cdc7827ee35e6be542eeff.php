<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"C:\wamp\www\second-hand\thinkphp\public/../application/index\view\baidu\callback.html";i:1490429209;}*/ ?>
<div class="grid_3">
    <div class="container">
        <div class="breadcrumb1">
            <ul>
                <a href="index.html">
                    <i class="fa fa-home home_1">
                    </i>
                </a>
                <span class="divider">
                    |
                </span>
                <li class="current-page">
                    完善信息
                </li>
            </ul>
        </div>
        <div class="services">
            <div class="col-sm-6 login_left">
                    <div class="form-group">
                        <label for="edit-name">
                            邮箱
                            <span class="form-required" title="This field is required.">
                                *
                            </span>
                        </label>
                        <input class="form-text required" id="email" maxlength="60" name="email" size="60" type="text" value="">
                        </input>
                    </div>
                    <div class="age_select">
                        <label for="edit-pass">
                            年龄
                            <span class="form-required" title="This field is required.">
                                *
                            </span>
                        </label>
                        <div class="age_grid">
                            <div class="col-sm-4 form_box">
                                <div class="select-block1">
                                    <input type="text" name="year" placeholder="年龄数字"></input>
                    
                            </div>
                        </div>
                            
                        <div class="clearfix">
                        </div>
                    </div>
                    </div>
                    <div class="age_select">
                        <label for="edit-pass">
                            住址
                            <span class="form-required" title="This field is required.">
                                *
                            </span>
                        </label>
                        <div class="age_grid" id="city_2">
                            <div class="col-sm-4 form_box">
                            	<div class="select-block1">
                                	<select class="prov" name="prov"></select>
                                </div>
                            </div>
                            <div class="col-sm-4 form_box2">
                                <div class="select-block1">
                                    <select class="city" disabled="disabled" name="city">
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 form_box1">
                                <div class="select-block1">
                                    <select class="dist" disabled="disabled" name="dist"></select>
                                </div>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-group1">
                        <label class="col-sm-2 control-lable" for="sex">
                            性别 :
                        </label>
                        <div class="col-sm-3 left">
                            <div class="select-block1">
                                <select name="sex">
                                	<option value="1">帅哥</option>
                                	<option value="0">美女</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit-name">
                            个人简介
                            <span class="form-required" title="This field is required.">
                                *
                            </span>
                        </label>
                        <textarea class="form-control bio" placeholder="" rows="3" id="content"></textarea>
                    </div>
                    <div class="form-actions">
                        <input class="btn_1 submit" id="edit-submit" name="op" type="submit" value="注册">
                        </input>
                    </div>

            </div>
            <div class="col-sm-6">
                <ul class="sharing">
                    <li>
                        <a class="facebook" href="#" title="Facebook">
                            <i class="fa fa-boxed fa-fw fa-facebook">
                            </i>
                            qq
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clearfix">
            </div>
        </div>
    </div>
</div>
<div class="map">
</div>
<script type="text/javascript">
    $(function() {
                $("#city_2").citySelect({
                    prov: "南京",
                    nodata: "none"
                });

            });
</script>




<!-- 这是表单提交验证 -->
<script type="text/javascript">
	$('#edit-submit').click(function(){

		var username = "<?php echo $user_res['uname']; ?>";
		var password = "<?php echo $user_res['portrait']; ?>";
		var email    = $('#email').val();
		var content  = $('#content').val();
		var year     = $('input[name=year]').val();
		var sex      = $('select[name=sex]').val();

        

		if (email.length < 1) 
		{
			$('#error_msg').text('邮箱不能为空');
			$('#error').modal();
			return false;
		}

		if (content.length < 1) 
		{
			$('#error_msg').text('个人介绍写一点吧');
			$('#error').modal();
			return false;
		}
		var data = {prov: $('select[name=prov]').val(),city:$('select[name=city]').val(),dist:$('select[name=dist]').val(),username: username ,password : password ,confirm :confirm ,email: email,year:year,sex:sex ,content :content,uid:"<?php echo $user_res['uid']; ?>"};

		$.post('/index/baidu/doRegister', data, function(data){
           
			if(data.error_code)
			{
				$('#error_msg').text(data.error_msg);
				$('#error').modal();
				return false;
			} else{
				$('#error_msg').text(data.error_msg);
				$('#error').modal();
				$('#close').click(function(){
					window.location.href = '<?php echo url("/index/index/index"); ?>';
				});
			}
        }, 'JSON' );
	});
</script>




<!-- 这是错误弹窗 -->
<div class="modal fade" tabindex="-1" role="dialog" id="error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="title">不能注册</h4>
      </div>
      <div class="modal-body">
        <p id="error_msg"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="close">Close</button>
      </div>
    </div>   
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>