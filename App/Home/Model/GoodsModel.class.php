<?php 
namespace Home\Model;
use Think\Model;
class GoodsModel extends Model{
	protected $_auto=array(
		array('createtime','getdate',self::MODEL_INSERT,'callback'),
		array('email','trim',self::MODEL_INSERT,'function'),
		array('user_id',1,self::MODEL_INSERT),
		array('user_name',葫芦娃,self::MODEL_INSERT));

	function getdate(){
		return date('Y-m-d H:i:s');
	}
}
class FindModel extends Model{
		protected $_validate = array(
		array('goods_name', 'require', '物品名称必须有！', 1),
		array('fname', 'require', '名字必须有！', 1),
            );
		array('username', 'require', '会员名必须有！', 1),
		array('place', 'require', '地点必须有！', 1),
		array('finddate', 'require', '时间必须有！', 1),
		array('desc', 'require', '备注必须有！', 1),
		array('free', 'require', '奖励金额必须有！', 1),
		array('telephone', 'require', '手机号已经存在！', 1),
		array('email', 'require', '邮箱必须有！', 1),
		)

 protected $_auto = array(
	 array('createtime','getdate',self::MODEL_INSERT, 'callback'),
		);

	function getdate(){
		return date('Y-m-d H:i:s');
	}
}
class LostModel extends Model{
	protected $_validate = array(
		array('goods_name', 'require', '物品名称必须有！', 1),
		array('lname', 'require', '名字必须有！', 1),
            );
		array('username', 'require', '会员名必须有！', 1),
		array('place', 'require', '地点必须有！', 1),
		array('lostdate', 'require', '时间必须有！', 1),
		array('desc', 'require', '备注必须有！', 1),
		array('free', 'require', '奖励金额必须有！', 1),
		array('telephone', 'require', '手机号已经存在！', 1),
		array('email', 'require', '邮箱必须有！', 1),
		)

 protected $_auto = array(
	 array('createtime','getdate',self::MODEL_INSERT, 'callback'),
		);

	function getdate(){
		return date('Y-m-d H:i:s');
	}
}
?>