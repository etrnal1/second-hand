<?php
namespace app\index\controller;
/**
 * @Author: Marte
 * @Date:   2017-03-22 15:18:10
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-03-30 15:52:25
 */

use app\index\model\User;
use think\View;
use think\Session;
use think\Controller;
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
use app\index\model\User_collect;
use app\index\model\Comment;
use app\index\model\Yuyue;
use app\index\controller\Auth;
class Goods extends Auth
{
    protected $is_check_login = ['favorites'];

    /**
     * [goods 单个物品详情方法]
     * @return 沈宏伟 [type] [description]
     */
    public function goods()
    {
        $id = $_GET['id'];
        $all = Shop_all::where(['all_id' => $id])->find();
        $pic = $all->shop_pictrue;
        $all['shop_pictrue'] = json_decode($pic);

        $user_id = Session::get('user_id','think');
        $uid = User::where(['user_id' => $user_id])->find();

        $comments = Comment::where(['shop_id' => $id])->where(['user_id' => $user_id])->select();


        // var_dump($comments);
        // die();
        $this->assign('uid',$uid);
        $this->assign('all',$all);
        $this->assign('comments',$comments);
        return $this->fetch();
    }

    /**
     * [favorites 收藏方法]
     * @return 沈宏伟[type] [description]
     */
    public function favorites()
    {
        $goods_id = $_POST['goods_id'];
        // var_dump($goods_id);
        $user_id = Session::get('user_id','think');
        // var_dump($user_id);
        $GuanZhu = User_collect::where(['all_id' => $goods_id])->where(['user_id' => $user_id])->find();
        if($GuanZhu) {

            User_collect::destroy(['user_id' => $user_id]);
            return json(['status' => 1, 'msg' => '取消收藏', 'redirect_url' => url('index/index/index') ]);

        } else {
            $add_goods = new User_collect;
            $add_goods->user_id = $user_id;
            $add_goods->all_id = $goods_id;
            $add_goods->save();
            $this->success('收藏成功');
        }
        die();
    }

    /**
     * [search 查找搜索方法]
     * @return 沈宏伟[type] [description]
     */
    public function search()
    {
        $keyword = $_POST['keyword'];
        $keywords = Shop_all::where('shop_name','LIKE','%'.$keyword.'%')->select();
        foreach ($keywords as $key => $value) {
            $pic = $value->shop_pictrue;
            $value['shop_pictrue'] = json_decode($pic);
        }
        // var_dump($keywords);
        // die();
        $big = Shop_class::select();
        $small = Shop_little_class::select();

        $this->assign('keyword',$keyword);
        $this->assign('keywords',$keywords);
        $this->assign('big',$big);
        $this->assign('small',$small);
        return $this->fetch();
    }
    /**
     * [comment 提交评论方法]
     * @return 沈宏伟[type] [description]
     */
    public function comment()
    {

        $user_id = Session::get('user_id','think');//用户id
        $id = $_GET['id'];//商品id
        $comment = new Comment;
        $comment->shop_id = $id;
        $comment->user_id = $user_id;
        $comment->content = $_POST['comment'];
        $comment->save();
        return 666;

    }
    /**
     * [chaxun 查询评论方法]
     * @return 沈宏伟[type] [description]
     */
    public function chaxun()
    {
        // return json(['status' => 666]);
        $user_id = Session::get('user_id','think');//用户id
        $id = $_GET['id'];//商品id
        $str = '';
        $comments = Comment::where(['shop_id' => $id])->select();
        foreach ($comments as $key => $value) {
            $content = $value->content;
            $str .= '<li><a href="#">'.$content.'</a></li>';
        }

        if($str){
            return json(['status' => 1, 'result' => $str]);
        }
    }

    /**
     * [yuYue 预约方法]
     * @return [type] [description]
     */
    public function yuYue()
    {
        $user_id = Session::get('user_id','think');
        $all_id = $_POST['hidden_id'];
        $all = new Yuyue;
        $all->user_id = $user_id;
        $all->shop_id = $all_id;
        $all->save();
    }


}