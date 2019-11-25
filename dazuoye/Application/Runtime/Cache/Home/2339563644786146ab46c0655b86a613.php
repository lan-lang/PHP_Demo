<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
    <link rel="stylesheet" href="/dazuoye/Public/css/pintuer.css">
    <link rel="stylesheet" href="/dazuoye/Public/css/admin.css">
    <script type="text/javascript" src="/dazuoye/Public/baiduue/ueditor.config.js"></script>
    <script type="text/javascript" src="/dazuoye/Public/baiduue/ueditor.all.js"></script>
<style>
textarea{
	width:800px;
	height:250px;
	}
	a{
	text-decoration: none;
	color: #39C;
	}
.pages a,.pages span{
	display:inline-block;
	padding:2px 10px;
	margin:0 10px;;
	border:1px solid #f0f0f0;
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	border-radius:3px;
	}
.pages a,.pages li{
    display:inline-block;
	list-style:none;
	text-decoration:none;
	color:#58A0D3;
	}
.pages a.first,.pages a.prev,.pages a.next,.pages a.end{
	margin:0;
	}
.pages a:hover{
	border-color:#50a8e6;
	}
.pages span.current{
	background:#50a8e6;
	color:#fff;
	font-weight:700;
	border-color:#50a8e6;
	}
	table{border:0 #50a8e6 solid;}
	td{border:0 #50a8e6 solid;}
</style>

</head>

<body>
</script>
<form method="post" action="/dazuoye/index.php/Home/Lyb/liuyan_add_pass">
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 留言管理</strong></div>
<table class="table table-hover text-center">
<tr>
<td >留言内容<td>
</tr>
<tr>
<td align="center">
<textarea name="liuyan" cols="" rows="" id="liuyan"></textarea>

<script type="text/javascript">
	window.UEDITOR_CONFIG.initialFrameWidth=1000;
	window.UEDITOR_CONFIG.initialFrameHeight=240;
	var ue = UE.getEditor('liuyan');
</script>
</td>
</tr>
<tr>
<td><button  class="button bg-main icon-check-square-o" type="submit"> 提交</button>

</td>
</tr>
</table>
</form>
</body>
</html>