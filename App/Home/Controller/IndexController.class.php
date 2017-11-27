<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function login(){

        $this->display();
    }
       public function verify(){
        ob_clean();
        $Verify = new \Think\Verify();
        $Verify->entry();

    }

    public function checkLogin(){
        $users = M('users');
        $code=I('post.verify');
if(!$this->check_verify($code))$this->error('验证码错误');
        $map   =   array();
        $map['telephone']  = I('post.username');
        $map['password']    = md5(I('post.password'));
        $res=$users->where($map)->select();
        var_dump($res);
        if($res==null){
            $this->error('用户名密码错误');
       }else {
            session("telephone",$map['telephone']);
            redirect(U('Goods/goods'));
        }
    }
    function check_verify($code, $id = ''){
         $verify = new \Think\Verify();
    return $verify->check($code, $id);
}
 public function detail(){
        $data["id"]=I('get.id');
        $this->goodsDetail=M("goods")->where($data)->find();
        $this->display();
    }
}
