<?php
/**
 * @Author: Marte
 * @Date:   2017-03-19 00:18:25
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-03-29 00:14:36
 */
namespace app\index\controller;

use app\index\model\User;
use think\View;
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
use app\index\model\Shop_qiugou;
use app\index\controller\Auth;
use think\Controller;
use think\Validate;
use think\Session;
class Publish extends Auth
{
    /**
     * [publish 发布商品页面]
     * @return 沈宏伟[type] [description]
     */
    protected $is_check_login = ['publish','publish_qiugou'];
    public function publish()
    {

        $big = Shop_class::select();
        $small = Shop_little_class::select();
        $result = Shop_class::select();


        $this->assign('big',$big);
        $this->assign('small',$small);
        $this->assign('name',$result);
        return $this->fetch();
    }

    /**
     * [upload 上传商品信息]
     * @return 沈宏伟[type] [description]
     */
    public function upload(){
// 获取表单上传文件
        $schoolName = Session::get('schoolname','think');
        $user_id = Session::get('user_id','think');
        $user = User::where(['user_id' => $user_id])->find();
        $id = $_POST['xiala'];
        $result = Shop_class::where(['class_id' => $id])->find();
        $name = $result->class;

        $name = "app\index\model\\$name";
        $class = new $name;

        $class->shop_name = $_POST['name'];
        $class->shop_profile = $_POST['profile'];
        $class->location = $_POST['location'];
        $class->shop_price = $_POST['price'];
        $class->user_id = $user_id;
        // $class->save();

        $user->phone = $_POST['phone'];
        $user->qq = $_POST['qq'];
        $user->save();

        $files = request()->file('image');
        $arr_pic = [];
        foreach($files as $file){
        // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');

            if($info){
            // 成功上传后 获取上传信息
                $arr_pic[] = $info->getSaveName();
            } else {
            // 上传失败获取错误信息
                echo $file->getError();
            }

        }
        $class->shop_pictrue = json_encode($arr_pic);
        $class->save();

        $all = new Shop_all;
        $all->class_id = $id;
        $all->shop_name = $_POST['name'];
        $all->shop_profile = $_POST['profile'];
        $all->location = $_POST['location'];
        $all->shop_price = $_POST['price'];
        $all->user_id = $user_id;
        $all->shop_pictrue = json_encode($arr_pic);
        $all->schoolName = $schoolName;
        $all->save();
        $this->success('发布成功','/index/index/show');
    }

    /**
     * [qiugou 求购页面]
     * @return 沈宏伟[type] [description]
     */
    public function qiugou()
    {
        $qiugou = Shop_qiugou::select();
        $big = Shop_class::select();
        $small = Shop_little_class::select();
        // var_dump($qiugou);
        // die();
        $this->assign('qiugou',$qiugou);
        $this->assign('big',$big);
        $this->assign('small',$small);
        return $this->fetch();
    }

    /**
     * [newest 最新商品页面]
     * @return 沈宏伟[type] [description]
     */
    public function newest()
    {
        $schoolName = Session::get('schoolname','think');
        $big = Shop_class::select();
        $small = Shop_little_class::select();

        $time = time();
        $all = Shop_all::where(['status' =>  1])->where(['schoolName' => $schoolName])->select();
        foreach ($all as $key => $value) {
            $pic = $value->shop_pictrue;
            $create_time = $value->create_time;
            $value['shop_pictrue'] = json_decode($pic);
            if(($time - $create_time)/24*3600 < 3)
            {
                $value['create_time'] = $create_time;
            }
        }
        $this->assign('all',$all);
        $this->assign('big',$big);
        $this->assign('small',$small);
        return $this->fetch();
    }

    /**
     * [publish_qiugou 发布求购页面]
     * @return 沈宏伟[type] [description]
     */
    public function publish_qiugou()
    {

        $big = Shop_class::select();
        $small = Shop_little_class::select();

        $this->assign('big',$big);
        $this->assign('small',$small);

        return $this->fetch();
    }
    /**
     * [upload_qiugou 上传求购信息]
     * @return [type] [description]
     */
    public function upload_qiugou()
    {
        $user_id = Session::get('user_id','think');
        $qiugou = new Shop_qiugou;
        $qiugou->shop_name = $_POST['name'];
        $qiugou->shop_profile = $_POST['profile'];
        $qiugou->location = $_POST['location'];
        $qiugou->shop_price = $_POST['price'];
        $qiugou->phone = $_POST['phone'];
        $qiugou->qq = $_POST['qq'];
        $qiugou->user_id = $user_id;
        $qiugou->save();
        return json(['status' => 1, 'msg' => '求购成功','redirect_url' => url('index/publish/publish_qiugou')]);
    }
}