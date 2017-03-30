<?php 
/**
 *控制用户的行为
 *
 *登录 
 */

 namespace  app\admin\controller;

 use app\admin\model\Admin ;


 use think\Controller;
 use think\Session;
 use think\Db;

 use app\admin\model\User as Suer;

class Auth extends Controller
{


	 public  function register()
	 {

	 	return $this->fetch();
	 }



  public function doRegister(Admin $user)
  {
 
    //这里写ajax 代码
    //
    //inpUt接收username  password 
    

    $name =  input('post.username');

    $pwd = md5(input('post.pwd'));



    //
    //
    //插入数据库
    //
   
// 模型对象赋值
     $user->data([
     'username' => $name,
    'password' => $pwd,
   ]);
 $data = $user->save();
  // $data =  Admin::where(['username'=>$name,'password'=>$pwd])->insert();
   //var_dump($data);

    //
    //返回Json数据
    //
    if($data){

    	 return json_encode(['code'=>1,'success'=>'注册成功']);

    	 $this->success('登录成功','Auth/login');


    }else{

    	return json_encode(['code'=>0,'error'=>'注册失败']);

    	$this->error('注册失败','Auth/doRegister');


    }

  }
	public function  login()
	{
  

		return $this->fetch();
	}

//这个是管理员登录方法

	public function doLogin()
	{



//

     $result  = Admin::where(['username'=>input('post.username'),'password'=>md5(input('post.password'))])->find();

      if($result){
     	Session::set('username',$result->username);
       Session::set('id',$result->id);
       // Session::set('role',$result->role);



      	return json(['status'=>1,'msg'=>'成功']);

      		

     			$this->success('登录成功','Index/index');

      		

   }else{

    return  json(['status'=>0,'msg'=>'登录失败']);
  }

  



	

	
	}


  public function mLogin()
  {
      $result  = Suer::where(['username'=>input('post.username'),'password'=>md5(input('post.password'))])->find();


      //dump($result);

        if($result){
         Session::set('username',$result->username);
         Session::set('id',$result->user_id);
         Session::set('role',$result->role);
         return json(['status'=>1,'msg'=>'成功']);
    }else{
        return  json(['status'=>0,'msg'=>'登录失败']);
        }

  



  }

	public function logut()
	{
       
         // session::delete();

		// echo '退出成功';

	}
}

 ?>