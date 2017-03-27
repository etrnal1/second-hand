<?php
/**
 * @Author: Marte
 * @Date:   2017-03-19 00:18:25
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-03-27 13:43:34
 */
namespace app\index\controller;

use app\index\model\User;
use think\View;
use app\index\model\Article;
use think\Controller;
class Notice extends Controller
{
    /**
     * [phone 二手手机注意事项页面]
     * @return 沈宏伟[type] [description]
     */
    public function phone()
    {
        return $this->fetch();
    }
    /**
     * [shop 发布商品规则页面]
     * @return 沈宏伟[type] [description]
     */
    public function shop()
    {
        return $this->fetch();
    }

}