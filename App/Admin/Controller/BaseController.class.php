<?php 
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function _initialize(){
       // session(null);
        header("Content-type:text/html;charset=utf-8");
         	if (CONTROLLER_NAME!='Index') {
    		if(NULL==session('flag')||session('flag')!='logok')
    		{ //echo _NAME;
                $this->error("请先管理员登录");
                $url=U('Index/index');
                header ("Location:$url");
    		}
    	}
    }
}
 ?>