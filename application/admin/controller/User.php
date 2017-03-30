<?php 
/**
 * 这是控制用户的编辑行为
 * 修改管理员密码
 */
namespace  app\admin\controller;

use think\Controller;
use think\Session;
use think\Request;
use app\admin\model\Admin;

use app\admin\model\User as Suer;


use think\Paginator;

use think\Db;

class User extends Controller
{
	



	public function  edit()
	{

		

		$pwd = Db::name('admin')->find();

		//dump($pwd);
		//dump(input('session.username'));
			$this->assign('pwd',$pwd);


		//dump($pwd);

		$this->assign('pwd',$pwd);
		return $this->fetch();
	}
 //查询原始密码
	public function  up()
	{

		//获取session_id
		 $id  = input('session.id');

		
        // 查询password
		 $cpwd  =  admin::where(['id'=>$id])->find()['password'];



		
		// 
		// 获取提交过来的原始密码
		$opwd = md5(input('post.mpass'));

		
		//等于 0是相等
		  $data=strcmp($opwd,$cpwd);


		 

       if($data){

         
     	
     	
      return json_encode(['code'=>0]);


      }else{

      	return json_encode(['code'=>1,'tips'=>'原始密码正确']);
     	
      }


     

}

//更新用户的密码 ,修改用户的密码
public function upd()
{
 //获取用户的新密码 ,加密存进数据库
      $npwd = md5(input('post.repass'));
 // dump(npwd);
//更新语句
       $id  = input('session.id');
     //$data =  Admin::updata(['id'=>$id,'password'=>$npwd]);
     //需要更新的是管理员表
       $user = new Admin;
//save方法第二个参数为更新条件


     $data =   $user->where('id', $id)
->update(['password' => $npwd]);
      if($data ==1){
      	$res  = true;


      }else{

      	$res =false;
      }
 //dump($data);
	 if($res){
        return json(['code'=>1,'msg'=>'修改成功']);
      }else{
          return json(['code'=>0,'msg'=>'修改失败']);
	}



}

		//管理用户
		public function  guanli()
		{

			//查询用户信息

			//使用 分页// 查询状态为1的用户数据 并且每页显示10条数据
             $list = Suer::where('user_id','>','0')->paginate(2);
            // 把分页数据赋值给模板变量list
            $this->assign('list', $list);
             // dump($list);
             // 渲染模板输出
             return $this->fetch();
           }
  //删除用户
		public function shanchu()
		{

			//获取Id
			$id  = input('post.id');
			//删除语句
			$result = Suer::where('user_id',$id)->delete();
              //返回json 数据
            if($result){
				return json_encode(['code' =>1,'tips'=>'删除成功']);

			}else{
				return json_encode(['code'=>0]);
			}
		}
}
