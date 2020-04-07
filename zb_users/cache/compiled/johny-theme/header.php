<?php  /* Template Name:公共头部 */  ?>
<!DOCTYPE html>
<html lang="<?php  echo $lang['lang_bcp47'];  ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="generator" content="johny zone blog" />
	<meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php  echo $name;  ?>-<?php  echo $title;  ?></title>
	<link rel="stylesheet" rev="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/common/layui-v2.5.6/css/layui.css" type="text/css" media="all"/>
	<link rel="stylesheet" rev="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/<?php  echo $style;  ?>.css" type="text/css" media="all"/>
	<script src="<?php  echo $host;  ?>zb_system/script/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="<?php  echo $host;  ?>zb_system/script/zblogphp.js" type="text/javascript"></script>
	<script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script>
<?php  echo $header;  ?>
<?php if ($type=='index'&&$page=='1') { ?>
	<link rel="alternate" type="application/rss+xml" href="<?php  echo $feedurl;  ?>" title="<?php  echo $name;  ?>" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php  echo $host;  ?>zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php  echo $host;  ?>zb_system/xml-rpc/wlwmanifest.xml" />
<?php } ?>
</head>
<body class="multi <?php  echo $type;  ?>">
<div class="layui-fluid topbar">
    <div class="layui-container">
        <div class="layui-row">
            <div class="layui-col-md6">
                <a href="" class="login">
                    <i class="layui-icon layui-icon-username"></i> 登录/注册
                </a>
            </div>
            <div class="layui-col-md6 right">
                <i class="layui-icon layui-icon-time"></i> 今天是：<?php  echo date("Y年m月d日");  ?>
            </div>
        </div>
    </div>
</div>
<div class="layui-container">
    <div class="layui-row header-middle-area">
        <div class="layui-col-md4 online-contract">
            <ul>
                <li>
                    <a href="">
                        <i class="layui-icon layui-icon-login-wechat"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="layui-icon layui-icon-login-qq"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="layui-icon layui-icon-login-weibo"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="layui-col-md4">
            <a href="<?php  echo $host;  ?>" class="logo">
                <img title="<?php  echo $name;  ?>" src="http://demo.themewinter.com/wp/digiqole/wp-content/themes/digiqole/assets/images/logo/logo-dark.png" alt="">
            </a>
        </div>
        <div class="layui-col-md4">
            <form action="" class="search-form">
                <input type="text" name="keyword" placeholder="请输入关键字，按Enter搜索" autocomplete="off" class="layui-input">
                <i class="layui-icon layui-icon-search"></i>
            </form>
        </div>
    </div>
</div>


<div class="johny-navbar">
    <div class="layui-container">
        <div class="layui-row">
            <div class="layui-col-md12">
                <ul class="layui-nav left">
                    <?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
                </ul>
            </div>
        </div>
    </div>
</div>
