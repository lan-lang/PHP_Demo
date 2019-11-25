<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>留言板注册界面</title>
<link rel="stylesheet" href="/dazuoye/Public/css/style.css" />
<style>
body{
	background:url(/dazuoye/Public/images/1.jpg);
	}
</style>
<body>

<div class="register-container">
	<h1>留言板注册界面</h1>
	
	<div class="connect">
		<p>请注册</p>
	</div>
	
	<form method="post" id="registerForm" action="register_pass">
		<div>
			<input type="text" name="username" class="username" placeholder="您的用户名" />
		</div>
		<div>
			<input type="password" name="password" class="password" placeholder="输入密码" />
		</div>

		<button id="submit" type="submit">注 册</button>
	</form>
	<a href="login.html">
		<button type="button" class="register-tis">已经有账号？</button>
	</a>

</div>


<script src="/dazuoye/Public/js/jquery.min.js"></script>
<script src="/dazuoye/Public/js/common.js"></script>
<!--背景图片自动更换-->
<script src="/dazuoye/Public/js/supersized.3.2.7.min.js"></script>
<script src="/dazuoye/Public/js/supersized-init.js"></script>
<!--表单验证-->
<!--<script src="/dazuoye/Public/js/jquery.validate.min.js?var1.14.0"></script>-->

</body>
</html>