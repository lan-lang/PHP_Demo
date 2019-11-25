<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人信息修改</title>
<link rel="stylesheet" href="/zsh/Public/css/pintuer.css">
<link rel="stylesheet" href="/zsh/Public/css/admin.css">
<style>
table{border:1px #C1C1C1 solid;  border-collapse:collapse}
	td{border:1px #C1C1C1 solid; border-right:none;border-left:none;
vertical-align:middle;/*设置垂直居中*/
}
	input,select,textarea{
		margin-top:15px;
		}
	textarea{
	width: 200px;
	height: 100px;
	max-width: 200px;
	max-height: 100px;
	text-height:100px;	
		}</style>
</head>
<body>
<form method="post" action="/zsh/index.php/Home/Lyb/info_modify_pass">
<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>" />
<table border="1" align="center"  width="538" height="742">
<tr><td align="center" colspan="2">个人信息修改</td></tr>
<tr>
<td align="center">用户名</td>
<td><input type="text" name="username" value="<?php echo ($_SESSION['username']); ?>" disabled="disabled"></td>
</tr>
<tr>
<td align="center">姓名</td>
<td><input type="text" name="name" value="<?php echo ($data["name"]); ?>"></td>
</tr>
<tr>
	<td align="center">qq</td>
	<td>
		<input type="text" name="qq" value="<?php echo ($data["qq"]); ?>">
	</td>
</tr>
<tr>
<td align="center">联系电话</td>
<td><input type="text" name="iphone" value="<?php echo ($data["iphone"]); ?>"></td>
</tr>
<tr>
<td align="center">性别</td>
<td>
<input type="hidden" id="gender"  value="<?php echo ($data["gender"]); ?>"/>
<input type="radio" name="gender" value="男" id="gender2"/>男
<input type="radio" name="gender" value="女" id="gender3"/>女
<script>
var gender=document.getElementById('gender').value;
var gender2=document.getElementById('gender2');
var gender3=document.getElementById("gender3");
if(gender=="男"){
	gender2.checked=true;
	}
	else{
		gender3.checked=true;
		}
</script>
</td>
</tr>
<tr>
<td align="center">年龄</td>
<td><input type="text" name="age" value="<?php echo ($data["age"]); ?>"></td>
</tr>
<tr>
<td align="center">地址</td>
<td><input type="text" name="add" value="<?php echo ($data["add"]); ?>"></td>
</tr>
<tr>
<td align="center">个性签名</td>
<td><textarea name="signature"><?php echo ($data["signature"]); ?></textarea></td>
</tr>
<tr>
	<td colspan="2" align="center" style="padding-top:10px; ">  <button class="button bg-main icon-check-square-o" type="submit"> 提交</button></td>
</tr>
</table>
</form>
</body>
</html>