<?php 
/**
 * 控制商品的控制器
 * 
 * 浏览商品
 * 上传商品
 */

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
use think\Paginator;
use think\Controller;





use think\Session;
class Shop extends Controller
{

	//控制首页显示
	//
  

  /**
   * { 实现商品的图片信息上传 }
   */
  public function upload()
  {

  
  //$file =  $file['image'];


// 移动到框架应用根目录/public/uploads/ 目录下
 $info = $file->move(ROOT_PATH . 'public' . DS .'uploads');
 // dump($info);
  //if($info){

    // $info->getSaveName();
// // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg

//}else{
// // // 上传失败获取错误信息
     //$file->getError();
  //}
    

    $user_id = Session::get('user_id','$link');

    
     //获取商品名字
     $data ['shop_name']  = input('post.shop_name');

   // 获取图片信息
     $data['shop_picture'] =  $info->getSaveName();  

    //获取标题id
       $data= input('post.id');
       dump($data);
    
    //发布时间
       $data['create_time'] = input('post.datetime');
    

   //插入数据库

  foreach($data as $value){
    
    dump($value);

  }

   //插入总数据库
















// 获取表单上传文件 例如上传了001.jpg
// 
// 
//$file = input('post.');

//foreach($file as $value){

  // $file = $value;
//}


  // $file =  array($file);







  }
   public function show()
   {
      //查询商品信息
      //
    //// 查询状态为1的用户数据 并且每页显示10条数据

     $result = Sh::name('Shop_all')->where('status',1)->paginate(2);
    // dump($result);
     foreach ($result as $value) {

    $value['shop_pictrue'] =  json_decode($value->shop_pictrue);
     }

     //打印商品信息
     //dump($value['shop_pictrue']);

     $this->assign('result',$result);


//    $list = Sh::name('shop_all')->;
//   // dump($list);

// // 把分页数据赋值给模板变量list
// $this->assign('list', $list);
// 渲染模板输出
return $this->fetch();
       


   	//return $this->fetch();



   }

//商品的删除
   public function del()
   {



   }

   //商品的发布的页面展示
   
   public function add()
   {
    //这里面进行查询,获取类名 
    
     //$result = Sh::name('Shop_all')->select();

    
  $result  = Db::view('Shop_all','class_id')
  ->view('Shop_class','class_name','Shop_class.class_id= Shop_all.class_id')->select();

     //echo '123';
     //
  //dump($result);
     $this->assign('result' ,$result);
    
   	return $this->fetch();
   }

   //商品修改内容
   public function xiugai()
   {

   	 
   }
   //商品批量删除方法
   
   public function ps()
   {

    //接收过来的数据
    //
    //
    //echo (123);
      $set = input('post.');  
      foreach($set as $value){
         
           $value = $value;
           //dump($value);


      }

      //获取id值
      $del = (array_values($value));

      //dump($del);


      //dump($del);
      //删除数据
      $result  = Sh::destroy($del);

 // dump($result);
  if($result){
   return json(['code'=>1,'msg'=>'删除成功']);

  }else{

     return json(['code'=>0,'msg'=>'删除失败']);
  }



     //进行删除操作
     

     //返回json数据


   }


//商品模糊查询
    public function search()
    {
 

  //根据搜索的关键词去数据库查找相应的数据


         $key = input('post.keywords');


         $data = Sh::where('shop_name','LIKE','%'.$key.'%')->select();

       if($data){
              return json(['code'=>'1','msg'=>$data]);

         }else{
           return json(['code'=>'0','msg'=>'亲没有查到商品哦']);
         }
         $this->assign('data',$data);

    }

/**
 * { function 这是商品发布功能
 *  @ 获取传递过来的信息
 *  对数据库进行操作
 *  返回json数据
 * }
 */
  public function sub(){

    //我得有图片上传功能
    //
    //
    // class_id 接收过来
    //
    //shop_all 
    




  }
/**
 * 展示分类界面
 * @return [type] [description]
 */
  public function adclass()
  {


    //use 分类表

     // 查询分类信息
     
      $sh =  sc::column('class_name','class_id');
      array_keys($sh);

         array_values($sh);

      dump($sh);

   //    sc::where('status',1)->column('name');
   // // dump($sh);
    //foreach($sh as $value){
     $this->assign('sh',$sh);

    //var_dump($value);
    //}
   
     // 
     // 展示分类信息到模版
     // 
     // 
     // html 页面进行数据遍历 

   return  $this->fetch();

  }


  public function delclass()
  {

     $key  = input('post.key');

     //id 传过来执行删除操作
     
      $result =  Db::name('shop_class')->where('class_id',$key)->delete();

      if($result){
          return  json(['code'=>1,'msg'=>'删除类成功']);

    }else{

        return   json(['code'=>0,'msg'=>'删除失败']);


      }

     // var_dump($result);
      // "<a  href =""">  ..  " </a>"

      // $('#li').html($data);

      // dump($result);

  }

/**
 * [cate description]:这个是展示添加类的界面
 * @return [type] [description]
 */
  public function cate()
  {

    return $this->fetch();
  }


/**
 * [sup description]这个要显示查找到的商品负责逻辑的处理与修改
 * @return [type] [description] 
 *  
 */
 public  function   sup()
 {

 }

public function us(Sc $sc){


  // 获取商品类名
  

            $classname = input('post.class_name');
  // class
  $class  = input('post.class');
  // 商品图片
             
// 获取表单上传文件 例如上传了001.jpg
         $file = request()->file('image');
// 移动到框架应用根目录/public/uploads/ 目录下
         $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
if($info){
// 成功上传后 获取上传信息
// 输出 jpg
      //  echo $info->getExtension();
// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg          
         // echo $info->getSaveName();
// 输出 42a79759f284b767dfcb2a0197904287.jpg
          //echo $info->getFilename();
}else{
// 上传失败获取错误信息
           echo $file->getError();
      }


//获取图片信息
      $uu = $info->getSaveName();
//执行插入数据库操作

  $user = Sc::create(['class_name' => $class,'class' =>$class,'image' =>$uu]);

  $this->success('插入成功','/admin/Shop/Cate');


}
























}








 ?>