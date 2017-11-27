<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){ 
        session('flag',null); 
        $this->display();
        var_dump(session());
    }
    public function verify(){
        ob_clean();
        $Verify = new \Think\Verify();
        $Verify->entry();

    }

    public function checkLogin(){ 
        $admin = M('admins');
        $code=I('post.verify');
if(!$this->check_verify($code))$this->error('验证码错误');
        $map   =   array();
        $map['admin_name']  = I('post.username');
        $map['password']    = md5(I('post.password'));
        $res=$admin->where($map)->select();
        if($res==null){
            $this->error('用户名密码错误');
       }else {
            session("flag","logok");
            redirect(U('User/users'));
        }
    }
    function check_verify($code, $id = ''){
         $verify = new \Think\Verify();
    return $verify->check($code, $id);
}
//    public function _initialize(){
//        //只要不是显示登录页面和处理登录、验证码这些，其他情况都要进行session验证。
//        if(ACTION_NAME!='index' && ACTION_NAME!='checkLogin'){
//            if(null==session('flag')|| session('flag')!='logok'){
//                redirect('index');
//            }
//        }
//    }

    public function count()
    {
       

            $users = M('users');
            $users = $users->count();
            $this->count1 = $count1;
            $lost = M('lost');
            $count2 = $lost->count();
            $this->count2 = $count2;
            $find = M('find');
            $count3 = $find->count();
            $this->count3 = $count3;
            $qrcode = M('goods');
            $count4 = $qrcode->count();
            $this->count4 = $count4;
            $this->display();
            
     }


}