<?php
/**
 * @Author: Marte
 * @Date:   2017-03-23 09:53:20
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-03-23 10:10:11
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
class PersonShop extends Controller
{
    public function shop()
    {
        return $this->fetch();
    }
}