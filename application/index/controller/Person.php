<?php
/**
 * @Author: Marte
 * @Date:   2017-03-19 14:33:19
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-03-27 17:21:30
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


}