<?php

namespace app\index\controller;

// use app\admin\model\Contact;
use think\Controller;
use email\email\Email;
class Exmail extends Controller
{
    public function num()
    {
        $today = strtotime(date('Y-m-d',time()));
        $a = Contact::where('create_time','>',$today)->where('is_do',0)->count();
        return (['status'=>201,'message'=>$a]);
    }

    public function about()

    {
        $today = strtotime(date('Y-m-d',time()));
        $about = Contact::where('create_time','>',$today)->where('is_do',0)->select();
        $this->assign('title','联系我们信息');
        $this->assign('about',$about);
        return $this->fetch();
    }

    public function del()
    {
        $msg=$_POST['id'];
        $msg = Contact::where('contact_id',$msg)->del();
        $b = Contact::where('is_do',0)->select();

        if($msg && !$b){


            return (['status' =>201, 'message'=>'删除成功']);


        }else if($msg){
            return ( ['status' =>200,'message' => '删除成功']);



        }else{
            return ( ['message' => '删除失败']);
        }
    }

    public function tongguo()
    {
        $msg=$_POST['id'];
        $msg = Contact::where('contact_id',$msg)->update(['is_do'=>1]);
        $b = Contact::where('is_do',0)->select();

        if($msg && !$b){


            return (['status' =>201, 'message'=>'删除成功']);


        }else if($msg){
            return ( ['status' =>200,'message' => '删除成功']);



        }else{
            return ( ['message' => '删除失败']);
        }
    }

    public function email()
    {
        $mail = new Email();
        $mail->setServer("smtp.exmail.qq.com", "xy.email@etrnal.com", "Woaini33279"); //设置smtp服务器
        $mail->setFrom("xy.email@etrnal.com"); //设置发件人
        $mail->setReceiver("990971784@qq.com"); //设置收件人，多个收件人，调用多次
        // $mail->setCc("XXXX"); //设置抄送，多个抄送，调用多次
        // $mail->setBcc("XXXXX"); //设置秘密抄送，多个秘密抄送，调用多次
        $mail->setMailInfo("test", "<b>你好吗</b>");// 设置邮件主题、内容
        $mail->sendMail(); //发送
    }
}
