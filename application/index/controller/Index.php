<?php
namespace app\index\controller;

use app\index\model\User;
use app\index\model\School;
use think\View;
use app\index\model\Article;
use think\Controller;
use think\Session;
use think\Paginator;
use app\index\controller\Auth;
use app\index\model\Shop_little_class;
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
class Index extends Controller
{
	/**
	 * 这是首页
	 */
	public function index()
	{
        $info = School::where(1)->select();
        $this->assign('info',$info);
        // die();
		return $this->fetch();
	}


    /**
     * [show 展示页面]
     * @return 沈宏伟[type] [description]
     */
    public function show()
    {
        $schoolName = Session::get('schoolname','think');
        $big = Shop_class::select();
        $small = Shop_little_class::select();

        // $all = Shop_all::select();
        $all = Shop_all::where(['status' =>  1])->where(['schoolName' => $schoolName])->paginate(2);


        foreach ($all as $key => $value) {
            $pic = $value->shop_pictrue;
            $value['shop_pictrue'] = json_decode($pic);
        }


        $this->assign('big',$big);
        $this->assign('small',$small);
        $this->assign('all',$all);
        return $this->fetch();
    }
    /**
     * [doShow 展示页面]
     * @return 沈宏伟[type] [description]
     */
    public function doShow()
    {
        if(isset($_POST['schoolName'])){
            $schoolName = $_POST['schoolName'];
            Session::set('schoolname',$schoolName);
        }

        // if(isset($_GET['a'])){
        //     $id = $_GET['a'];
        //     $name = School::where(['school_id' => $id])->find();
        //     Session::set('schoolname',$name['schoolname']);
        // }
        // Session::set('schoolname',$name['schoolname']);

        $big = Shop_class::select();
        $small = Shop_little_class::select();

        $all = Shop_all::where(['status' =>  1])->where(['schoolName' => $schoolName])->paginate(2);

        foreach ($all as $key => $value) {
            $pic = $value->shop_pictrue;
            $value['shop_pictrue'] = json_decode($pic);
        }

        $this->assign('big',$big);
        $this->assign('all',$all);
        $this->assign('small',$small);
        return $this->fetch();
    }


    /**
     * [one 单类页面]
     * @return 沈宏伟[type] [description]
     */
    public function one()
    {
        $schoolName = Session::get('schoolname','think');
        $class_id = $_GET['id'];
        $shop = Shop_all::where(['class_id' => $class_id])->where(['schoolName' => $schoolName])->find();
        if($shop){
            $pic = $shop->shop_pictrue;
            $shop['shop_pictrue'] = json_decode($pic);
            $this->assign('shop',$shop);
        }

        // var_dump($shop['shop_pictrue']);
        // die();
        $this->assign('class_id',$class_id);
        return $this->fetch();
    }


}
