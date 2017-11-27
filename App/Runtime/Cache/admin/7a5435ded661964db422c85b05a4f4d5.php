<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>0.0</title>
    <meta charset="UTF-8">
    <link href="/diuba/Public/style/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
 <table align="center" width="100%" border=1 class="table table-hover"> 
 <tr>
 
   <th>序号</th>   
   <th>头像</th>
   <th>用户别名</th>
   <th>联系电话</th>
   <th>状态</th>
   <th>创建时间</th> 
   <th>操作</th>
  
 </tr>

<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($vo["id"]); ?></td>
<td>
<img src="/diuba/Public/Admin/photo/<?php echo ($vo["photo"]); ?>"></td>
<td><?php echo ($vo["aliasname"]); ?>
</td>
<td><?php echo ($vo["telephone"]); ?></td>
<td>
<?php if($vo["state"] == '0'): ?>正常<?php else: ?>
已禁用<?php endif; ?>
</td>
<td><?php echo (substr($vo["createtime"],0,10)); ?></td>

<th>

<?php if(($vo["state"] == 0)): ?><a href="changestate/id/<?php echo ($vo["id"]); ?>/state/1" style="color: blue">已禁用</a>
		<?php else: ?>
			<a href="changestate/id/<?php echo ($vo["id"]); ?>/state/0" style="color: blue">取消禁用</a><?php endif; ?>
		
<a href="editpswd/id/<?php echo ($vo["id"]); ?>" style="color: red">密码重置</a>
<a href="changestate/id/<?php echo ($vo["id"]); ?>" style="color: green">修改</a>
<a href="delUser/id/<?php echo ($vo["id"]); ?>" style="color: #666">删除</a>

</font>
</th>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</body>
</html>