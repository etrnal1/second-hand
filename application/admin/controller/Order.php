<?php 
namespace  app\admin\controller;
//数据库类
use think\Db;
//请求类
//
//use think\Request;
use think\Request;
//分页类
//使用全部商品表
use app\admin\model\Shop_all as Sh;

use app\admin\model\Shop_class  as Sc;

use app\admin\model\User;

 use app\admin\model\Yuyue as Cx;
use think\Paginator;
use think\Controller;

class Order  extends Controller
{
    /**
     * 这是展示订单 的界面
     * @return [type] [description]
     *  
     */
	 public function show()
	 {
	 	//查询预约表
	 	$result = Db::view('Yuyue')->view('User','username','Yuyue.user_id=User.user_id')->select();
	 	//$result   = Cx::select();
	 	$this->assign('result',$result);
	 	return $this->fetch();
	  }
	  	// *
	  	//  * [uda description]:
	  	//  * @return [type] [description]
	  	 
	  public  function  uda()
	  {

	  	        $id =  input('post.id');
                   echo $id;

                   $result = User::where('user_id',$id)->delete();

                   if($result){
					return json(['code'=>1,'msg'=>'消息成功']);
                   	 	}else{

						return json(['code'=>0,'msg'=>"删除成功"]);
					}



                   //删除功能
                  

        }
        /**
         * [shanchu description]:执行删除操作
         * @return [type] [description]
         */
        public function shanchu()
        {
               $id  = input('post.id');

             $result   =  Cx::destroy(['yuyue_id'=>$id]);

            //删除成功 dump($result);
            //返回json 数据
            if($result){
            	return json(['code'=>1,'msg'=>'删除成功']);
            }else{
            		return json(['code'=>0,'msg'=>'删除失败']);

            }
 

              // 删除用户订单
              



               //echo $id;

        }

}

	   /// var id  = $value['yuyue_id']; }