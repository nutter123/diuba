<?php
namespace Admin\Controller;
use Think\Controller;
class FindController extends BaseController {
    public function findlist(){
       $findModel=M('find');
       $find=$findModel->order('id desc')->select();
   $this->find=$find;
       
 $this->display();
   }
     public function delfind($id){
	$findmodel=M('find');	
  $res=$findmodel->where("id=$id")->find();
  $photoPath=realpath("./Public/Uploads/findphoto/".$res['picture']);
  unlink($photoPath);
	if (false!==$findmodel->where("id=$id")->delete()) {
            $this->success('删除成功！');
        } else {
            $this->error('删除失败！');
        }
		
	}
}