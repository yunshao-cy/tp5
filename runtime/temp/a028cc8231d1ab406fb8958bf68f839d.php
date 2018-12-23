<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"D:\www\tp5\public/../application/admin\view\index\index.html";i:1545355749;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="/static/admin/css/pintuer.css">
    <link rel="stylesheet" href="/static/admin/css/admin.css">
    <script src="/static/admin/js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="/static/admin/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l">
	  	<a class="button button-little bg-green" href="" target="_blank">
	  		<span class="icon-home"></span> 前台首页
	  	</a> &nbsp;&nbsp;
	  	
	  	<a class="button button-little bg-red" href="login.html">
	  		<span class="icon-power-off"></span> 退出登录
	  	</a> 
  	</div>
</div>
<div class="leftnav">
  	<div class="leftnav-title">
  		<strong>
  			<span class="icon-list"></span>菜单列表
  		</strong>
  	</div>
  	<h2><span class="icon-user"></span>用户管理</h2>
  	<!--<ul style="display:block">-->
	<ul>
	    <li>
	    	<a href="<?php echo url('admin/user/index'); ?>" target="right">
	    		<span class="icon-caret-right"></span>个人中心
	    	</a>
	    </li>
		
	    <li>
	    	<a href="<?php echo url('admin/user/pass'); ?>" target="right">
	    		<span class="icon-caret-right"></span>修改密码
	    	</a>
	    </li>
	   
	</ul>   
	<h2><span class="icon-pencil-square-o"></span>分类管理</h2>
	<ul>
	    <li>
	    	<a href="<?php echo url('admin/cate/create'); ?>" target="right">
	    		<span class="icon-caret-right"></span>添加分类
	    	</a>
	    </li>
	    <li>
	    	<a href="<?php echo url('admin/cate/index'); ?>" target="right">
	    		<span class="icon-caret-right"></span>分类列表
	    	</a>
	    </li>
	</ul>
	<h2><span class="icon-pencil-square-o"></span>博文管理</h2>
	<ul>
	    <li>
	    	<a href="<?php echo url('admin/article/create'); ?>" target="right">
	    		<span class="icon-caret-right"></span>添加博文
	    	</a>
	    </li>
	    <li>
	    	<a href="<?php echo url('admin/article/index'); ?>" target="right">
	    		<span class="icon-caret-right"></span>博文列表
	    	</a>
	    </li>
	    <li>
	    	<a href="<?php echo url('admin/article/recycle'); ?>" target="right">
	    		<span class="icon-caret-right"></span>回收站
	    	</a>
	    </li>
	</ul>
	<h2><span class="icon-pencil-square-o"></span>标签管理</h2>
	<ul>
	    <li>
	    	<a href="<?php echo url('admin/tag/create'); ?>" target="right">
	    		<span class="icon-caret-right"></span>添加标签
	    	</a>
	    </li>
	    <li>
	    	<a href="<?php echo url('admin/tag/index'); ?>" target="right">
	    		<span class="icon-caret-right"></span>标签列表
	    	</a>
	    </li>
	</ul> 
</div>
<script type="text/javascript">
$(function(){
   $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
 	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
 	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
   })
});
</script>
<ul class="bread">
  <li><a href="" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </li>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="<?php echo url('admin/index/info'); ?>" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html>