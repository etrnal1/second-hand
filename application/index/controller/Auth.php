<?php
namespace app\index\controller;

use think\Db;
use think\Controller;
use think\Request;
use think\Validate;
use app\index\model\User;
use think\Session;
use app\index\controller\Email;
class Auth extends Controller
{

	protected $is_check_login = [''];

	public function _initialize()
	{
		if(!$this->checkLogin() && (in_array(Request::instance()->action(), $this->is_check_login) || $this->is_check_login[0] == '*'))
		{
			$this->error('您还没有登录请先登录', url('index/auth/login'));
		}
	}

	/**
	 * [checkLogin 检查是否登录]
	 * @return 沈宏伟[type] [description]
	 */
	public function checkLogin()
	{
		if(Session::get('username'))
		{
			return true;
		}else{
			return false;
		}

		// return Session::get('username');
	}

	/**
	 * [login 登录界面]
	 * @return 沈宏伟[type] [description]
	 */
	public function login()
	{
		$this->assign('title', '登录页面');
		return $this->fetch();
	}

	/**
	 * [doLogin 登录方法]
	 * @return 沈宏伟[type] [description]
	 */
	public function doLogin()
	{
		// var_dump($_POST);
		$info = User::where(['username' => input('post.username'), 'password' => md5(input('post.password'))])->find();
		if($info){
			Session::set('username',$info['username']);
            Session::set('user_id',$info['user_id']);
			return json(['status' => 1, 'msg' => '登陆成功', 'redirect_url' => url('index/index/index') ]);
		}else{
			// $this->error('登录失败,fucking out');
			return json(['status' => 0, 'msg' => '登陆失败', 'redirect_url' => url('index/auth/login') ]);
		}
	}

	/**
	 * [logout 退出方法]
	 * @return 沈宏伟[type] [description]
	 */
	public function logout()
	{
		$accesstoken = Session::get('accesstoken','think');
		if($accesstoken){
			$logout_url = "https://openapi.baidu.com/connect/2.0/logout?access_token=$accesstoken&next=http://911.com/index/index/show";
			session(null);
			$this->redirect($logout_url);
		} else {
			session(null);
			$this->redirect('/index/index/show');
		}




		$this->success('退出成功！');//写个logout页面。别忘了
		// return json(['status' => 1, 'msg' => '退出成功', 'redirect_url' => url('index/index/index') ]);
	}

	/**
	 * [register 注册页面]
	 * @return 沈宏伟[type] [description]
	 */
	public function register()
	{
		$this->assign('title', '注册页面');

		return $this->fetch();
	}

	/**
	 * [doRegister 注册方法]
	 * @return 沈宏伟[type] [description]
	 */
	public function doRegister()
	{
		//定义验证规则
		$validate = new Validate([
			'username' => 'require|max:25',
			'email' => 'email',
			'password' => 'require|length:6,18'
		]);
		$data = [
		'username' => input('post.username'),
		'email' => input('post.email'),
		'password' => input('post.password')
		];


		if (!$validate->check($data)) {
			return json(['status' => 0, 'msg' => $validate->getError()]);
		}else{
			$data['password'] = md5($data['password']);
			$result = User::create($data);
			if($result){
				return json(['status' => 1, 'msg' => '注册成功', 'redirect_url' => url('index/index/index') ]);

			}else{
				return json(['status' => 0, 'msg' => '注册失败，请刷新页面重试 ！']);

			}
		}
	}

	public function usnm()
	{

	 	$username = input('post.username');


		$result = Db::table('sh_user')->where('username',$username)->find();
		if($result){
				return json(['status' => 1, 'msg' => '用户名已存在']);
			}else{
				return json(['status' => 0, 'msg' => '用户名可用']);

			}
	}

}
