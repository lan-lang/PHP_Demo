<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人信息查询</title>
<link rel="stylesheet" href="/dazuoye/Public/css/pintuer.css">
    <link rel="stylesheet" href="/dazuoye/Public/css/admin.css">
</head>
<style>
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
	table{border:0px #50a8e6 solid;}
	td{border:0px #50a8e6 solid;}
</style>
<body >
<div class="panel-head"><strong class="icon-reorder"> 个人信息查询</strong></div>
 <table class="table table-hover text-center">
 <tr>
 <td align="center">用户名</td>
<td align="center">姓名</td>
<td align="center">qq</td>
<td align="center">联系电话</td>
<td align="center">性别</td>
<td align="center">年龄</td>
<td align="center">地址</td>
<td align="center">个性签名</td>
<td align="center">操作</td>
</tr>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rs): $mod = ($i % 2 );++$i;?><tr>
<td align="center"><?php echo ($_SESSION['username']); ?></td>
<td align="center"><?php echo ($rs['name']); ?></td>
<td align="center"><?php echo ($rs['qq']); ?></td>
<td align="center"><?php echo ($rs['iphone']); ?></td>
<td align="center"><?php echo ($rs['gender']); ?></td>
<td align="center"><?php echo ($rs['age']); ?></td>
<td align="center"><?php echo ($rs['add']); ?></td>
<td align="center"><?php echo ($rs['signature']); ?></td>
<td>
<a class="button button-little bg-green" href="<?php echo U('info_modify?id='.$rs['id']);?>" target="_blank"> 修改</a>
<a href="<?php echo U('info_delete?id='.$rs['id']);?>" class="button button-little bg-blue"> 删除</a> 
</td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</body>
</html>