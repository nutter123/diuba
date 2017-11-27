<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realm - Lost</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bluth Company">
    <link rel="shortcut icon" href="/diuba/Public/admin/assets/ico/favicon.html">
    <link href="/diuba/Public/admin/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/diuba/Public/admin/assets/css/theme.css" rel="stylesheet">
    <link href="/diuba/Public/admin/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/diuba/Public/admin/assets/css/alertify.css" rel="stylesheet">
    <link rel="Favicon Icon" href="favicon.ico">
    <!-- <link href="http://fonts.useso.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css"> -->
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
            <ul class="pull-left">
              <li><a id="messages" data-notification="2" href="#"><i class="icon-envelope"></i> 123</a></li>
              <li><a id="notifications" data-notification="3" href="#"><i class="icon-globe"></i> 456</a></li>
            </ul>
            <ul class="pull-right">  
              <li><a href="login.html"><i class="icon-off"></i> 789</a></li>
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
        <div class="user_side clearfix">
          <img src="/diuba/Public/admin/assets/img/odinn.jpg" alt="Odinn god of Thunder">
          <h5>LIMINGUO</h5>
          <a href="#"><i class="icon-cog"></i> LIMINGUOA</a>        
        </div>
        <div class="accordion" id="accordion2">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_F79999" href="index-2.html"><i class="icon-dashboard"></i> <span>数据统计与分析</span></a>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_C3F7A7 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse1"><i class="icon-magic"></i> <span>用户信息</span></a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
              <div class="accordion-inner">
                <a class="accordion-toggle" href="../User/users.html"><i class="icon-star"></i>用户信息管理</a>
                <a class="accordion-toggle" href="forms.html"><i class="icon-list-alt"></i> 2222</a>
                <a class="accordion-toggle" href="tables.html"><i class="icon-table"></i> 2223</a>
                <a class="accordion-toggle" href="buttons.html"><i class="icon-circle"></i> 2224</a>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse2"><i class="icon-reorder"></i> <span>物品信息</span></a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
              <div class="accordion-inner">
                <a class="accordion-toggle" href="notifications.html"><i class="icon-rss"></i> 3331</a>
                <a class="accordion-toggle" href="calendar.html"><i class="icon-calendar"></i> 3332</a>
                <a class="accordion-toggle" href="gallery.html"><i class="icon-picture"></i> 3333</a>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_F6F1A2" href="../Lost/Lostlist.html"><i class="icon-Lost"></i> <span>失物信息</span></a>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_C1F8A9" href="../find/findList.html"><i class="icon-bar-chart"></i> <span>招领信息</span></a>
            </div>
          </div> 
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_9FDDF6" href="tickets.html"><i class="icon-bullhorn"></i> <span>666   </span></a>
            </div>
          </div> 
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_F5C294 active" href="users.html"><i class="icon-user"></i> <span>777</span></a>
            </div>
          </div>      
        </div>
      </div>
      <!-- /Side menu -->

      <!-- Main window -->
          <div class="main_container" id="users_page">
    
            <div class="row-fluid">
              <ul class="breadcrumb">
                <li><a href="#">11</a> <span class="divider">/</span></li>
                <li><a href="#">22</a> <span class="divider">/</span></li>
                <li class="active">33</li>
              </ul>
              <h2 class="heading">
                  LIMINGUOO
                  <div class="btn-group pull-right">
                    <button class="btn"><i class="icon-download-alt"></i> 44</button>
                    <button class="btn"><i class="icon-envelope"></i> 55</button>
                    <button class="btn"><i class="icon-cog"></i> 66</button>
                  </div>
              </h2>
            </div> <!-- /row-fluid -->
    
            
               
              
    
            <div class="row-fluid">
              <div class="widget widget-padding span12">
                <div class="widget-header">
                  <i class="icon-group"></i>
                  <h5>失物信息列表</h5>
                  <div class="widget-buttons">
                      <a href="#" data-title="Add User" data-toggle="modal" data-target="#example_modal"><i class="icon-plus"></i></a>
                      <a href="#" data-title="Collapse" data-collapsed="false" class="collapse"><i class="icon-chevron-up"></i></a>
                  </div>
                </div>  
                <div class="widget-body">
                  <table align="center" width="100%" border=1 class="table table-hover"> 
 <tr>
 
   <th>图片</th>   
   <th>物品</th>
   <th>失主姓名</th>
   <th>丢失地点</th>
   <th>发布时间</th>
   <th>酬金</th> 
   <th>联系电话</th>
   <th>操作</th>
  
 </tr>

<?php if(is_array($lost)): $i = 0; $__LIST__ = $lost;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td>
<img src="/diuba/Public/Admin/photo/<?php echo ($vo["picture"]); ?>"></td>
<td><?php echo ($vo["goods_name"]); ?></td>
<td><?php echo ($vo["lname"]); ?></td>
<td><?php echo ($vo["place"]); ?></td>
<td><?php echo ($vo["createtime"]); ?></td>
<td><?php echo ($vo["free"]); ?></td>
<td><?php echo ($vo["telephone"]); ?></td>
<td>
<a href="dellost/id/<?php echo ($vo["id"]); ?>" style="color: #666">删除</a>

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
    <script type="text/javascript" src="/diuba/Public/admin/assets/js/jquery-ui.min.js"></script>
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