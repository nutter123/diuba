<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends BaseController {
    public function users(){
       $usersModel=M('users');
       $users=$usersModel->order('id asc')->select();
   $this->users=$users;
       
 $this->display();
   }
   public function delUser(){
   	$id=I("id");
	$usersmodel=M('users');	
	$res=$usersmodel->where("id=$id")->find();
	$photoPath=realpath("./Public/Uploads/photo/".$res['photo']);
	unlink($photoPath);
	if ($usersmodel->delete($id)) {
            $this->success('删除成功！');
        } else {
            $this->error('删除失败！');
        }
		
	}

	public function editpswd($id){
	$usersmodel=M('users');	
	$usersmodel->password="123456";
	if(false!==$usersmodel->where("id=$id")->save()){
		$this->success('密码重置成功！');
	}else{
		$this->error('密码重置失败');
	}
	}
public function changestate($id,$state){
	$usersmodel=M('users');
	$usersmodel->state="$state";	
	if(false!==$usersmodel->where("id=$id")->save()){
		$this->success('修改成功！');
	}else{
		$this->error('修改失败');
	}
	}
}