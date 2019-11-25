<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>留言板登录界面</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" href="/dazuoye/Public/css/style.css" />
<style>
body{
	background:url(/dazuoye/Public/images/1.jpg);
	}
</style>
<body >

<div class="login-container" background="/dazuoye/Public/images/bg1.jpg">
	<h1>留言板登录界面</h1>
	
	<div class="connect">
		<p>请登录</p>
	</div>
	
	<form  method="post" id="loginForm" action="loginCheck">
		<div>
			<input type="text" name="username" class="username" placeholder="用户名" autocomplete="off"/>
		</div>
		<div>
			<input type="password" name="password" class="password" placeholder="密码" oncontextmenu="return false" onpaste="return false" />
		</div>
		<button id="submit" type="submit">登 录</button>
	</form>

	<a href="register.html">
		<button type="button" class="register-tis">还有没有账号？</button>
	</a>

</div>

<script src="/dazuoye/Public/js/jquery.min.js"></script>
<script src="/dazuoye/Public/js/common.js"></script>
<!--表单验证-->
<script src="/dazuoye/Public/js/jquery.validate.min.js?var1.14.0"></script>

</body>
</html>