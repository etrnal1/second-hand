<?php
namespace app\index\controller;

use app\index\controller\Auth;
use app\index\model\User as ModelUser;
use think\Session;
use think\Validate;
class Baidu extends Auth
{


    private $api_key = 'a80294iyuO5PKPs9EcuO17GY';
    private $serect_key = 'pTHHVGBBeqMto2LGobdTEU0y0aQNDAXs';
    private $redirect_url = 'http://911.com/index/baidu/callback';
    private $apibase_url = 'https://openapi.baidu.com/rest/2.0/';
    private $logout = 'http://911.com/index/index/show';


    public function baiduLogin()
    {

        $getcode_url = "http://openapi.baidu.com/oauth/2.0/authorize?response_type=code&client_id=$this->api_key&redirect_uri=$this->redirect_url";
        $this->assign('getcode_url',$getcode_url);
        return $this->fetch();
    }


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
            $result = ModelUser::where(['username' => $username])->find();
            if(!$result){
                $user = new ModelUser;
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
                    return $this->success('已登录成功','/index/index/show');
                } else
                {
                    $this->assign('user_res',$user_res);
                    return $this->fetch();
                }
        } else {
            return $this->error('授权失败','index/index/index');
        }
    }




    public function back()
    {

    }


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




    public function baiduOut()
    {

        $accesstoken = Session::get('accesstoken','think');
        if($accesstoken){
            $logout_url = "https://openapi.baidu.com/connect/2.0/logout?access_token=$accesstoken&next=logout";
        }

        var_dump($logout_url);
        die();
        session_unset();
    }

    /**
     * [doRegister 处理注册的数据]
     * @作者：任彪
     * @return [type] [description]
     */
    // public function doRegister(User $user)
    // {

    //     $validate = new Validate([
    //         'content'  => 'require|min:1',
    //         'email' => 'email'
    //     ]);
    //     $data = [
    //         'content'=> input('post.content'),
    //         'email' => input('post.email')
    //     ];

    //     //验证用户名、密码的长度和邮箱的格式
    //     if (!$validate->check($data)) {
    //         return  json(['error_code'=> 1 , 'error_msg' => $validate->getError()]);
    //         die;
    //     }

    //     //验证年龄是否为纯数字
    //     if(!is_numeric(input('post.year')))
    //     {
    //         return  json(['error_code'=> 1 , 'error_msg' => '请不要在年龄框输入其他非法字符，谢谢']);
    //         die;
    //     }

    //     $username = input('post.username') . substr(str_shuffle('abcdefghijklmnsahjdsz') ,0,6);
    //     $username = $this->newName($username);


    //     $data = [
    //         'id'       => intval(input('post.uid')),
    //         'email'    => input('post.email'),
    //         'username' => $username,
    //         'password' => input('post.password'),
    //         'age'      => input('post.year'),
    //         'sex'      => input('post.sex'),
    //         'prov'     => input('post.prov'),
    //         'city'     => input('post.city'),
    //         'dist'     => input('post.dist'),
    //         'last_login_time' => time(),
    //         'create_time' => time(),
    //         'description' => input('post.content')
    //     ];

    //     $result = $user->insert($data);
    //     if($result)
    //     {
    //         Session::set('user_id',$data['id']);
    //         Session::set('username',$data['username']);
    //         return json(['error_code'=> 0 , 'error_msg' => "你注册成功了，快去开启新的人生"]);
    //     } else
    //     {
    //         return json(['error_code'=> 0 , 'error_msg' => "操作太频繁了，休息一下再注册吧"]);
    //     }
    // }


    public function newName($name)
    {
        $result = User::where('username',$name)->select();

        if($result)
        {
            $name .=  rand(1,9);
            return  $this->newName($name);
        } else {
            return $name;
        }


    }










}