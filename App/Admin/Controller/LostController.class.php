<?php
namespace Admin\Controller;
use Think\Controller;
class LostController extends BaseController {
    public function lostlist(){
       $lostModel=M('lost');
       $lost=$lostModel->order('id desc')->select();
   $this->lost=$lost;
      
 $this->display();
   }
     public function dellost($id){
  $lostmodel=M('lost'); 
  $res=$lostmodel->where("id=$id")->find();
  $photoPath=realpath("./Public/Uploads/lostphoto/".$res['picture']);
  unlink($photoPath);
  if (false!==$lostmodel->where("id=$id")->delete()) {
            $this->success('删除成功！');
        } else {
            $this->error('删除失败！');
        }
    
  }
}