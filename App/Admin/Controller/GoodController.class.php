<?php
namespace Admin\Controller;
use Think\Controller;
class GoodController extends BaseController {
    public function goods(){
       $goodsModel=M('goods');
       $goods=$goodsModel->order('id desc')->select();
   $this->goods=$goods;
       
 $this->display();
   }
   public function delGood($id){
   	$id=I("id");
	$goodsmodel=M('goods');	
	$res=$goodsmodel->where("id=$id")->find();
	$photoPath=realpath("./Public/Admin/photo/".$res['qrpath']);
	unlink($photoPath);
	if ($goodsmodel->delete($id)) {
            $this->success('删除成功！');
        } else {
            $this->error('删除失败！');
        }
		
	}
}