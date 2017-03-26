<?php 
/**
 * 这是控制后台的首页
 * 修改密码
 * 使用验证器
 */
 namespace app\admin\controller;
 use app\admin\model\Admin ;
 use think\Controller;
 use think\Session;
 use think\Db;
 use thinl\Request;




 class Index extends  Controller
 {


 	 public function index()
 	 {


 	 	  // $aa = Session::get('id','think');

      // dump($aa);
      // 
     

 	 	

 	 	return  $this->fetch();


 	 }

 	 public function info()
 	 {
 	 	$website =  Db::name('website')->find();

 	 	//dump($website);

 	 	$this->assign('website',$website);
 	 	return $this->fetch();
 	 }

 	 public function pass()
 	 {

 	 	return $this->fetch();
 	 }

 	 public function page()
 	 {

 	 	return $this->fetch();
 	 }

 	 public function adv()
 	 {

 	 	return $this->fetch();
 	 }
 	 
 	 public function column()
 	 {

 	 	return $this->fetch();
 	 }
 	  public function add()
 	 {

 	 	return $this->fetch();
 	 }

 	  public function cate()
 	 {

 	 	return $this->fetch();
 	 }


 	 public function list()
 	 {
      return $this->fetch();

 	 }
  
   public function upload(){
   // 获取表单上传文件 例如上传了001.jpg 
       $file = request()->file('image');
   // 移动到框架应用根目录/public/uploads/ 目录下
       $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
      if($info){
   // 成功上传后 获取上传信息
// 输出 jpg

    //输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
       $info->getSaveName();
    //输出 42a79759f284b767dfcb2a0197904287.jpg

     }else{
     //上传失败获取错误信息
       echo $file->getError();
}


 // Db::name('admin')->insert($info);

 //Db::name('user')->insert($data);

  

  
//网站名字
        $data ['fname'] = input('post.site');
//网站logo
  $data['logo'] = $info->getSaveName();
  //网站链接
  $data['flink'] = input('post.surl');
     //网站关键词      
   $data['keywords']=input('post.keywords');
  //网站描述
   $data['introuction']= input('post.description');
//网站
  
  
 
  $bbs = Db::name('website')->insert($data);
  dump($bbs);
 

   


 
 //astInsID();
 
 //astInsID();
//astInsID();


       }



 }




 ?>