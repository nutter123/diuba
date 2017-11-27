<?php
namespace Home\Controller;
use Think\Controller;
class UsersController extends controller{
  public function reg(){

	$this->display();
}
//为think_users表的createtime字段生成当前的日期

public function register()
    {    $user = D("Users");

         if ($user->create()) {
            if ($_FILES["photo"]['error']==0) {
               $logoinfo = $this->upload();

               $pname=$logoinfo['photo']['savename'];

            }else
            {
               $pname = "default.jpg";
            }

            $user->photo=$pname;
             $pic=$this->pic($pname);
            if (false !== $user->add()) {
                  $this->success('注册成功！', '');
                } else {         $this->error('数据错误');           }
        } else {
              $this->error($user->getError());
                 }
      }

public function userinfo(){
  $users=M("Users");
  $data['telephone']=$_SESSION['telephone'];
  $list=$users->where($data)->find();
  $this->userInfo=$list;
  $findModel=M('find');
  $vo=$findModel->order('id asc')->select();
   $this->findList=$vo;
   var_dump($vo);

   $lostModel=M('lost');
       $lost=$lostModel->order('id asc')->select();
   $this->lostList=$lost;

   $qrcodenum=$findModel->count();
        $Page = new \Think\Page($qrcodenum, 1);
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('theme','%UP_PAGE% %FIRST% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER% ');
        $totalPages=ceil($records/$pageSize);
        $this->linka = $Page->show();
        $this->findList = $findModel->
        order("id asc")->limit($Page->firstRow, 1)->select();

    $qrcodenum2=$lostModel->count();
        $Page2 = new \Think\Page($qrcodenum2, 1);
        $Page2->setConfig('prev','上一页');
        $Page2->setConfig('next','下一页');
        $Page2->setConfig('theme','%UP_PAGE% %FIRST% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER% ');
        $totalPages2=ceil($records/$pageSize);
        $this->linkb = $Page2->show();
        $this->lostList = $lostModel->order("id asc")->limit($Page2->firstRow, 1)->select();
  $this->display();
}
public function findList(){
       $findModel=M('find');
       $find=$findModel->order('id desc')->select();
   $this->find=$find;

 $this->display();
   }
public function editUser(){
  $users = M('users');
  $data['telephone']=$_SESSION['telephone'];
  $res = $users->where($data)->find();
  $this->userInfos=$res;
  $this->display();
  var_dump(I('post.telephone'));
}
public function doUpdate(){
   $user = D("Users");
   if ($_FILES["photo"]['error']==0) {
               $logoinfo = $this->upload();

               $pname=$logoinfo['photo']['savename'];

            }else
            {
               $pname = "default.jpg";
            }
             $user->photo=$pname;
             $pic=$this->pic($pname);

   if (false !== $user->save()) {
                  $this->success('修改成功！','Users/userinfo' );
                } else {         $this->error($user->getError());          }
}
public function upload(){
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  =     './Public/Uploads/photo/'; // 设置附件上传根目录  //
     $upload->autoSub = false;//关闭子目录，默认true
  /*  $upload->savePath = '';*/
 // 设置附件上传(子)目录，默认目录名为年月日
         $info   =   $upload->upload();  // 上传文件
    if(!$info) {        $this->error($upload->getError());    }
else{   return $info;      }                    }

public function pic($pname){
  $image = new \Think\Image();
  $image->open("./Public/Uploads/photo/$pname");
  $image->thumb(150, 150)->text('Nutter','./Public/Uploads/photo/msyh.ttc',10,'#000000',\Think\Image::IMAGE_WATER_SOUTHEAST)->save("./Public/Uploads/photo/$pname");
}
public function checkTele(){
  $t = $_GET["t"];
  $userModel = M("Users");
  $rs=$userModel->where("telephone='$t'")->select();
  if($rs) echo"手机号已存在";

}
public function checkAlias(){
  $u =$_GET["u"];
  $userModel = M("Users");
  $rs=$userModel->field('aliasname')->where("aliasname like '%$u%'")->limit(4)->select();
  $this->ajaxReturn($rs);
}

}
