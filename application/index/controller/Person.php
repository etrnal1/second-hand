<?php
/**
 * @Author: Marte
 * @Date:   2017-03-19 14:33:19
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-03-28 19:39:31
 */
namespace app\index\controller;

use app\index\model\User;
use think\View;
use think\Controller;
use app\index\model\Shop_class;
use app\index\model\Shop_books;
use app\index\model\Shop_walk;
use app\index\model\Shop_phone;
use app\index\model\Shop_numeral;
use app\index\model\Shop_clothes;
use app\index\model\Shop_others;
use app\index\model\Shop_life;
use app\index\model\Shop_elec;
use app\index\model\Shop_all;
use app\index\model\Shop_little_class;
use app\index\model\User_collect;
use app\index\model\Yuyue;
use think\Session;
use think\Db;
class Person extends Controller
{
    /**
     * [person 个人展示页面]
     * @return [type] [description]
     */
    public function person()
    {
        $user_id = Session::get('user_id','think');

        $all = Shop_all::where(['user_id' => $user_id])->select();
        $user = User::where(['user_id' => $user_id])->find();

        $collect = Db::view('User_collect','all_id,user_id')->view('Shop_all','shop_name,shop_profile,shop_price','Shop_all.all_id = User_collect.all_id')->where(['user_id' => $user_id])->select();

        $big = Shop_class::select();
        $small = Shop_little_class::select();

        $yuyue = Yuyue::where(['user_id' => $user_id])->select();

        $this->assign('all',$all);
        $this->assign('yuyue',$yuyue);
        $this->assign('big',$big);
        $this->assign('small',$small);
        $this->assign('user',$user);
        $this->assign('collect',$collect);
        return $this->fetch();
    }

    public function weather()
    {
        $host = "https://ali-weather.showapi.com";
        $path = "/ip-to-weather";
        $method = "GET";
        $appcode = "1921e702424c4dcbad7fed0aa707ae11";
        $headers = array();
        array_push($headers, "Authorization:APPCODE " . $appcode);
        $querys = "ip=101.200.62.210&need3HourForcast=0&needAlarm=0&needHourData=0&needIndex=0&needMoreDay=0";
        $bodys = "";
        $url = $host . $path . "?" . $querys;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_FAILONERROR, false);//显示HTTP状态码，默认行为是忽略编号小于等于400的HTTP信息
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HEADER, true);//启用时会将头文件的信息作为数据流输出
        if (1 == strpos("$".$host, "https://"))
        {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        }

        $curl = curl_exec($curl);
        $curl = strstr($curl,'{');
        $curl = json_decode($curl);
        $curl = $curl->showapi_res_body;
        $this->assign('curl',$curl);
        return $this->fetch();
    }


}