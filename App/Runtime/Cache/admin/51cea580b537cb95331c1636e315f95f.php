<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realm - Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bluth Company">
    
      <link rel="shortcut icon" href="/diuba/Public/admin/assets/ico/favicon.html">
    <link href="/diuba/Public/admin/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/diuba/Public/admin/assets/css/theme.css" rel="stylesheet">
    <link href="/diuba/Public/admin/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/diuba/Public/admin/assets/css/alertify.css" rel="stylesheet">
    <link rel="Favicon Icon" href="favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
 
   <div id="wrap">
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <div class="logo">
            <img src="/diuba/Public/admin/assets/img/logo.png" alt="Realm Admin Template">
          </div>
           <a class="btn btn-navbar visible-phone" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
           <a class="btn btn-navbar slide_menu_left visible-tablet">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="top-menu visible-desktop">
            <ul class="pull-right">  
              <li><a href="../Index"><i class="icon-off"></i> Logout  </a></li>
            </ul>
          </div>

          <div class="top-menu visible-phone visible-tablet">
            <ul class="pull-right">  
              <li><a title="link to View all Messages page, no popover in phone view or tablet" href="#"><i class="icon-envelope"></i></a></li>
              <li><a title="link to View all Notifications page, no popover in phone view or tablet" href="#"><i class="icon-globe"></i></a></li>
              <li><a href="login.html"><i class="icon-off"></i></a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container-fluid">

      <!-- Side menu -->  
      <div class="sidebar-nav nav-collapse collapse">
        
        <div class="accordion">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse1"><i class="icon-reorder"></i> <span>用户信息</span></a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
              <div class="accordion-inner">
                <a class="accordion-toggle" href="../User/users.html"><i class="icon-star"></i>用户信息管理</a>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse2"><i class="icon-reorder"></i> <span>教练信息</span></a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
              <div class="accordion-inner">
                <a class="accordion-toggle" href="../Good/goods.html"><i class="icon-star"></i>物品信息管理</a>
              </div>
            </div>
          </div>
          

        </div>
      </div>
 
      <!-- /Side menu -->
      <!-- Main window -->
          <div class="main_container" id="users_page">
    
            <div class="row-fluid">

              <h2 class="heading" style="text-align: center">
                  教练列表
              </h2>
            </div> <!-- /row-fluid -->
    
            
            
               
              
    
            <div class="row-fluid">
              <div class="widget widget-padding span12">
                <div class="widget-header">
                  <i class="icon-group"></i>
                  <h5>教练</h5>
                  <div class="widget-buttons">
                      <a href="#" data-title="Add User" data-toggle="modal" data-target="#example_modal"><i class="icon-plus"></i></a>
                      <a href="#" data-title="Collapse" data-collapsed="false" class="collapse"><i class="icon-chevron-up"></i></a>
                  </div>
                </div>  
                <div class="widget-body">
                  <table align="center" width="100%" border=1 class="table table-hover"> 
 <tr>
 
   <th>序号</th>   
   <th>头像</th>
   <th>用户别名</th>
   <th>简介</th>
   <th>状态</th>
   <th>等级</th> 
   <th>操作</th>
  
 </tr>

<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($vo["id"]); ?></td>
<td>
<img src="/diuba/Public/Uploads/photo/<?php echo ($vo["photo"]); ?>"style="height: 30px"></td>
<td><?php echo ($vo["aliasname"]); ?>
</td>
<td><?php echo ($vo["telephone"]); ?></td>
<td><span class="label label-success"></span>
<?php if($vo["state"] == '0'): ?><span class="label label-success">正常</span><?php else: ?>
<span class="label">已禁用</span><?php endif; ?>
</td>
<td><?php echo (substr($vo["createtime"],0,10)); ?></td>

<td>
<?php if(($vo["state"] == 0)): ?><a href="changestate/id/<?php echo ($vo["id"]); ?>/state/1" style="color: blue">禁用用户</a>
    <?php else: ?>
      <a href="changestate/id/<?php echo ($vo["id"]); ?>/state/0" style="color: blue">取消禁用</a><?php endif; ?>
    
<a href="editpswd/id/<?php echo ($vo["id"]); ?>" style="color: red">密码重置</a>
<a href="changestate/id/<?php echo ($vo["id"]); ?>" style="color: green">修改</a>

  <a  href="delUser/id/<?php echo ($vo["id"]); ?>">
  删除
</a>

</td>

</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
                </div> <!-- /widget-body -->
              </div> <!-- /widget -->
            </div> <!-- /row-fluid -->
    
          </div>
          <!-- /Main window -->
    ]
    </div><!--/.fluid-container-->
    </div><!-- wrap ends-->

    <!-- Example Modal -->
    <div id="example_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Add user/employee</h3>
      </div>
      <div class="modal-body">
        <p>Here you can insert the user creation form</p>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
      </div>
    </div>  

    <script type="text/javascript" src="/diuba/Public/admin/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="__PUBLIC_ta_/admin/assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/diuba/Public/admin/assets/js/raphael-min.js"></script>
    <script type="text/javascript" src="/diuba/Public/admin/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src='/diuba/Public/admin/assets/js/sparkline.js'></script>
    <script type="text/javascript" src='/diuba/Public/admin/assets/js/morris.min.js'></script>
    <script type="text/javascript" src="/diuba/Public/admin/assets/js/jquery.dataTables.min.js"></script>   
    <script type="text/javascript" src="/diuba/Public/admin/assets/js/jquery.masonry.min.js"></script>   
    <script type="text/javascript" src="/diuba/Public/admin/assets/js/jquery.imagesloaded.min.js"></script>   
    <script type="text/javascript" src="/diuba/Public/admin/assets/js/jquery.facybox.js"></script>   
    <script type="text/javascript" src="/diuba/Public/admin/assets/js/jquery.alertify.min.js"></script> 
    <script type="text/javascript" src="/diuba/Public/admin/assets/js/jquery.knob.js"></script>
    <script type='text/javascript' src='/diuba/Public/admin/assets/js/fullcalendar.min.js'></script>
    <script type='text/javascript' src='/diuba/Public/admin/assets/js/jquery.gritter.min.js'></script>
    <script type="text/javascript" src="/diuba/Public/admin/assets/js/realm.js"></script>
  </body>
</html>