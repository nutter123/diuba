<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<!--后台模板在线网址 http://www.sucaihuo.com/modals/5/518/demo/ui_features.html-->
<head>
    <meta charset="utf-8">
    <title>丢吧管理平台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="丢吧管理平台">
    
</head>
<body>
<div id="wrap">
    
    <div class="container-fluid">
        

        <!-- Main window -->
        <div class="main_container" id="users_page">

            <div class="row-fluid">

                <h2 class="heading">
                    数据统计与分析
                </h2>
            </div> <!-- /row-fluid -->


            <!--此处往下为代码改写部分-->
            <div class="row-fluid">
                <div class="widget widget-padding span12">
                    <div class="widget-header">
                        <i class="icon-group"></i>
                        <h5>数据统计</h5>
                        <div class="widget-buttons">
                            <!--<a href="#" data-title="Add User" data-toggle="modal" data-target="#example_modal"><i class="icon-plus"></i></a>-->
                            <a href="#" data-title="Collapse" data-collapsed="false" class="collapse"><i class="icon-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="widget-body table-responsive ">
                        <table id="users" class="table table-condensed table-striped table-bordered dataTable">
                            <thead>
                            <tr >
                                <td>注册用户</td>
                                <td>失物启示</td>
                                <td>招领启事</td>
                                <td>生成二维码</td>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td><?php echo ($count1); ?></td>
                                    <td><?php echo ($count2); ?></td>
                                    <td><?php echo ($count3); ?></td>
                                    <td><?php echo ($count4); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- /widget-body -->
                </div> <!-- /widget -->
            </div> <!-- /row-fluid -->

        </div>
        <!-- /Main window -->

    </div><!--/.fluid-container-->
</div><!-- wrap ends-->
</body>
</html>