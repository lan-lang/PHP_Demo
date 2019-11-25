<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑个人信息</title>
<link rel="stylesheet" href="/dazuoye/Public/css/pintuer.css">
<link rel="stylesheet" href="/dazuoye/Public/css/admin.css">
</head>
<style>
table{border:1px #C1C1C1 solid;  border-collapse:collapse}
	td{border:1px #C1C1C1 solid; border-right:none;border-left:none;
vertical-align:middle;/*设置垂直居中*/}
	input,select,textarea{
		margin-top:15px;
		}
	textarea{
	width: 200px;
	height: 100px;
	max-width: 200px;
	max-height: 100px;
	text-height:100px;	
		}
</style>
<body>
<form method="post" action="/dazuoye/index.php/Home/Lyb/info_add_pass">
<table width="538" height="742" border="1" align="center">
<input type="hidden" name="username" value="<?php echo ($_SESSION['username']); ?>" />
<tr>
	<td colspan="2" align="center">编辑个人信息</td>
</tr>
<tr>
	<td align="center">用户名</td>
	<td><input type="text" name="username" value="<?php echo ($_SESSION['username']); ?>" disabled="disabled"/></td>
</tr>

<tr>
	<td align="center">姓名</td>
	<td><input type="text" name="name"  /></td>
</tr>
<tr>
	<td align="center">QQ</td>
	<td><input type="text" name="qq"  /></td>
</tr>
<tr>
	<td align="center">联系电话</td>
	<td><input type="text" name="iphone" /></td>
</tr>
<tr>
	<td align="center">性别</td>
	<td><input type="radio" name="gender"  value="男"/>男
    <input type="radio" name="gender"  value="女"/>女
    </td>
</tr>
<tr>
	<td align="center">年龄</td>
	<td><input type="text" name="age" /></td>
</tr>
<tr>
	<td align="center">所在地</td>
	<td><input type="text" name="add" /></td>
</tr>
<tr>
	<td align="center" style=" text-height:100px;" >个性签名</td>
	<td><textarea name="signature" cols="" rows=""></textarea></td>
</tr>
<tr>
	<td colspan="2" align="center" style="padding-top:10px; ">  <button class="button bg-main icon-check-square-o" type="submit"> 提交</button></td>
</tr>
</table>
</form>
</body>
</html>