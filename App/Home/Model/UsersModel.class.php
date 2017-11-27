<?php
namespace Home\Model;
use Think\Model;
class UsersModel extends Model {
 protected $_validate = array(
        array('telephone', 'require', '手机号必须！', 1),
		array('aliasname', 'require', '用户名必须！', 1),
		
		array('email', 'require', '邮箱必须！', 1),
        array('telephone', '', '手机号已经存在', 0, 'unique', self::MODEL_INSERT),
        array('aliasname','administrator','用户名不能是administrator',1,'notequal'),
		array('aliasname','admin','用户名不能是admin',1,'notequal'),
		array('aliasname','管理员','用户名不能是管理员',1,'notequal'),
	array('password', 'require', '密码必须！', 1),
	array('newpassword','password','两次密码不一致',0,'confirm'),
            );

 protected $_auto = array(
	 array('createtime','getdate',self::MODEL_INSERT, 'callback'),
	array('password','md5', self::MODEL_INSERT, 'function'),
		);

	function getdate(){
		return date('Y-m-d H:i:s');
	}

}
