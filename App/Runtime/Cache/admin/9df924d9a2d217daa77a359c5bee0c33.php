<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        丢吧
    </title>
    <!--<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />-->
     <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    
<link rel="stylesheet" href="/diuba/Public/assets_h/stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/diuba/Public/assets_h/stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/diuba/Public/assets_h/stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/diuba/Public/assets_h/stylesheets/style.css" media="all" rel="stylesheet" type="text/css" />

<script src="/diuba/Public/assets_h/javascripts/jquery.min.js" type="text/javascript"></script>
<script src="/diuba/Public/assets_h/javascripts/jquery-ui.js" type="text/javascript"></script>
<script src="/diuba/Public/assets_h/javascripts/bootstrap.min.js" type="text/javascript"></script>
<script src="/diuba/Public/assets_h/javascripts/modernizr.custom.js" type="text/javascript"></script>
<script src="/diuba/Public/assets_h/javascripts/main.js" type="text/javascript"></script>
</head>
<body class="login2">
<!--http://sharpandnimble.com/se7en/demo/index.html-->
<div class="login-wrapper">
    <!--<a href="index.html"><img width="100" height="30" src="/diuba/Public/assets_h/images/logo-login%402x.png" /></a>-->
    <br/>
    <br/>
    <h2>丢吧管理平台</h2>
    <form method="post" action="<?php echo U('Index/checkLogin');?>">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon-user"></i></span><input class="form-control" name="username" placeholder="用户名" type="text">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon-lock"></i></span><input class="form-control" name="password" placeholder="密码" type="password">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon-lock"></i></span><input class="form-control" name="verify" placeholder="验证码" type="text" required >
                
            </div>
            <div>
                <img id="verifyImg" src="<?php echo U('verify');?>" onClick="fleshVerify()" title="点击刷新验证码" style="cursor: pointer;border:0;">
            </div>
        </div>        
        <!--<a class="pull-right" href="#">Forgot password?</a>-->
        <!--<div class="text-left">-->
            <!--<label class="checkbox"><input type="checkbox"><span>Keep me logged in</span></label>-->
        <!--</div>-->
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="登 录">

    </form>
    <!--<p>-->
        <!--Don't have an account yet?-->
    <!--</p>-->
    <!--<a class="btn btn-default-outline btn-block" href="<?php echo U('index/register');?>">注 册</a>-->
</div>
<!-- End Login Screen -->
</body>
<script type="text/javascript">
    function fleshVerify(){
        document.getElementById("verifyImg").src="<?php echo U('verify');?>";
    }  
</script>
</html>