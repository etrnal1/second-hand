<?php
namespace app\index\controller;

use think\Db;
use think\Controller;
use think\Request;
use think\Validate;
use app\index\model\User;
use think\Session;
use email\email\Email;
class Auth extends Controller
{
	private $api_key = 'a80294iyuO5PKPs9EcuO17GY';
    private $serect_key = 'pTHHVGBBeqMto2LGobdTEU0y0aQNDAXs';
    private $redirect_url = 'http://911.com/index/auth/callback';
    private $apibase_url = 'https://openapi.baidu.com/rest/2.0/';
    private $logout = 'http://911.com/index/index/show';
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
		$getcode_url = "http://openapi.baidu.com/oauth/2.0/authorize?response_type=code&client_id=$this->api_key&redirect_uri=$this->redirect_url";
        $this->assign('getcode_url',$getcode_url);
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
		$info = User::where(['username' => input('post.username'), 'password' => md5(input('post.password'))])->where(['status' => 1])->find();
		if($info){
			Session::set('username',$info['username']);
            Session::set('user_id',$info['user_id']);
			return json(['status' => 1, 'msg' => '登陆成功', 'redirect_url' => url('index/index/index') ]);
		}else{
			// $this->error('登录失败,fucking out');
			return json(['status' => 0, 'msg' => '登陆失败', 'redirect_url' => url('index/auth/login') ]);
		}

        return $this->fetch();
	}

    /**
     * [callback 百度回调方法]
     * @return function [description]
     */
	 public function callback()
    {
        $code = $_GET['code'];//获取code
        if($code){

            $getaccesstoken_url = "https://openapi.baidu.com/oauth/2.0/token?grant_type=authorization_code&code=$code&client_id=$this->api_key&client_secret=$this->serect_key&redirect_uri=$this->redirect_url";
            $https_res = $this->getdate($getaccesstoken_url);

            $accesstoken = $https_res['access_token'];//获取Accesstoken
            Session::set('accesstoken',$accesstoken);
            //开放api接口
            $userinfo_url = $this->apibase_url.'passport/users/getLoggedInUser'.'?access_token='.$accesstoken;

            $user_res = $this->getdate($userinfo_url);




            $uid = $user_res['uid'];
            $username = $user_res['uname'];
            // var_dump($uid);
            // var_dump($username);
            // die();
            $result = User::where(['username' => $username])->find();
            if(!$result){
                $user = new User;
                $user->username = $username;

                $user->password = $user_res['portrait'];
                $user->email = '990971784@qq.com';
                $user->save();
            }

            // $result = ModelUser::where('password',$user_res['portrait'])->find();
            if($result)
                {
                    Session::set('user_id',$result->user_id);
                    Session::set('username',$result->username);
                    return $this->success('已登录成功','/index/index/index');
                } else
                {
                    $this->assign('user_res',$user_res);
                    return $this->success('已登录成功','/index/index/index');
                }
        } else {
            return $this->error('授权失败','index/index/index');
        }
    }

    /**
     * [getdate]
     * @param  [type] $url [description]
     * @return [type]      [description]
     */
    public function getdate($url){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        $temp = curl_exec($ch);
        if($temp === FALSE){
            return false;
        }
        $output = json_decode($temp,TRUE);
        curl_close($ch);
        return $output;
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
        $code = substr(md5(uniqid()),mt_rand(0,24),4);
		$validate = new Validate([
			'username' => 'require|max:25',
			'email' => 'email',
			'password' => 'require|length:6,18'
		]);
		$data = [
		'username' => input('post.username'),
		'email' => input('post.email'),
		'password' => input('post.password'),
        'code' => $code
		];

		if (!$validate->check($data)) {
			return json(['status' => 0, 'msg' => $validate->getError()]);
		}else{
			$data['password'] = md5($data['password']);
			$result = User::create($data);
			if($result){

                $mail = new Email();
                $mail->setServer("smtp.exmail.qq.com", "xy.email@etrnal.com", "Woaini33279"); //设置smtp服务器
                $mail->setFrom("xy.email@etrnal.com"); //设置发件人
                $mail->setReceiver($data['email']); //设置收件人，多个收件人，调用多次
                // $mail->setCc("XXXX"); //设置抄送，多个抄送，调用多次
                // $mail->setBcc("XXXXX"); //设置秘密抄送，多个秘密抄送，调用多次
                $html = <<<DOC
            欢迎你{$data['username']}请
            <a href="http://911.com/index/auth/active?code={$code}">激活</a>
DOC;

                $mail->setMailInfo("激活码", $html);// 设置邮件主题、内容
                $mail->sendMail(); //发
				// return json(['status' => 1, 'msg' => '注册成功', 'redirect_url' => url('index/index/index') ]);


			}else{
				return json(['status' => 0, 'msg' => '注册失败，请刷新页面重试 ！']);

			}
		}
	}

    public function active()
    {

        $code = $_GET['code'];

        if ( strlen($code) != 4 ) {
            die();
        }

        $result = User::where(['code' => $code])->find();
        if($result) {
            Session::set('username',$result->username);
            Session::set('user_id',$result->user_id);
            $user = new User;
            $user->save(['status' => 1],['code' => $code]);
            $this->success('验证成功','/index/index/index');
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
