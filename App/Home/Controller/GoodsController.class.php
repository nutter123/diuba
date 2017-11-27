<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends controller{
  public function goods(){
	$users = M('users');
	$data['telephone']=$_SESSION['telephone'];
	$res = $users->where($data)->find();
	$this->list=$res;

	$goods = M('goods');
	$goodsData['userid']=$data['telephone'];

	$qrcodenum=$goods->where($goodsData)->count();
        $Page = new \Think\Page($qrcodenum, 1);
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('theme','%UP_PAGE% %FIRST% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER% ');
        $totalPages=ceil($records/$pageSize);
        $this->link = $Page->show();
        $this->qrcodeList = $goods->where($goodsData)->
        order("id desc")->limit($Page->firstRow, 1)->select();
/*
        if(isset($_GET['page']))
            $page=$_GET['page'];
        else
            $page=1;
        //$startPos= ($page-1)*$pageSize;
        //$qrcodeList=$goods->where($goodsData)->limit("$startPos,$pageSize")->select();
       $qrcodeList=$goods->where($goodsData)->page("$page,$pageSize")->select();
        
        $this->qrcodeList=$qrcodeList;
        //页面分页链接的生成
        $link="";
        for ($i=1;$i<=$totalPages;$i++){
            $link=$link."<a href='".U("goods",array("page"=>$i))."'>第".$i."页</a> ";
        }
	$this->qrcodeList=$qrcodeList;   
	$this->link=$link;  */
	$this->display();
}
public function delqrcode(){
	$id=I('get.id');
	$goods = M('goods');
	$res=$goods->where("id=$id")->find();
	$photoPath=realpath("Public/Uploads/qrcode/".$res['qrpath']);
	unlink($photoPath);
	if ($goods->delete($id)) {
            $this->success('删除成功！');
        } else {
            $this->error('删除失败！');
        }
}

public function goodsadd(){
$goods=D("goods");
if($goods->create()){
	$newid=$goods->add();

if(false != $newid){
	$qrcodeString="http://".$_SERVER['SERVER_NAME'].U("Index/detail",array("id"=>$newid));
	$data["qrpath"]=$this->qrcode($qrcodeString);
	$data["id"]=$newid;
	$goods->save($data);
	$this->success('二维码生成成功!');
}else{
	$this->error('数据错误');
}
}
else{
	$this->error($user->getError());
}
}

public function qrcode($qrcodeString){
         vendor("phpqrcode.phpqrcode");
            $model = new \QRcode();
            $path="Public/Uploads/qrcode/";
            if(!file_exists($path))
            {                mkdir($path, 0700);            }//0700 111 权限  可读可写可执行
            $filename=time().'.png';
            $path="Public/Uploads/qrcode/".$filename; //合成路径
            $level = 'H';
            $size = 3;
            $model::png($qrcodeString,$path, $level, $size,1);
            //框架生成二维码LOGO
            $logo = "Public/Uploads/qrcode/beijing.png";
            $image = new \Think\Image();
            $weizhi = array(175,175);
            $image->open($logo)->water($path,$weizhi,50)->save($path);
            return $filename;
}
public function dolostrelease(){
    $lost = D("Lost");
    if($lost->create()){
        if($_FILES["photo"]['error']==0) {
            $path =  './Public/Uploads/lostphoto/';
               $logoinfo = $this->upload($path);
               var_dump($logoinfo);
               $pname=$logoinfo['file']['savename'];
              
            }else
            {
               $pname = "default.jpg";
            }
            $lost->picture=$pname;
            $lost->createtime=date('Y-m-d H:i:s');
            if (false !== $lost->add()) {
                  $this->success('失物信息添加成功！', '');
                } else {         $this->error('数据错误');           }
        } else {            
              $this->error($lost->getError());  
                 }
    }
public function dofindrelease(){
    $find = D("Find");
    if($find->create()){
        if($_FILES["photo"]['error']==0) {
            $path =  './Public/Uploads/findphoto/';
               $logoinfo = $this->upload($path);

               $pname=$logoinfo['file']['savename'];
              
            }else
            {
               $pname = "default.jpg";
            }
            $find->picture=$pname;
            $find->createtime=date('Y-m-d H:i:s');
            var_dump($pname);
            if (false !== $find->add()) {
                  $this->success('招领信息添加成功！', '');
                } else {         $this->error('数据错误');           }
        } else {            
              $this->error($find->getError());  
                 }
    }
public function upload($path){
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  =    $path; // 设置附件上传根目录  // 
     $upload->autoSub = false;//关闭子目录，默认true
 /*   $upload->savePath = '';*/
 // 设置附件上传(子)目录，默认目录名为年月日
         $info   =   $upload->upload();  // 上传文件 
    if(!$info) {        $this->error($upload->getError());    }
else{   return $info;      }                    }
}