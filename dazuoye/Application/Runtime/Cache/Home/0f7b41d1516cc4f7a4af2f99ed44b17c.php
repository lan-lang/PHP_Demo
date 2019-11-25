<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/dazuoye/Public/css/pintuer.css">
	<style type="text/css">
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
	<div class="panel-head" align="center" >
		<strong> 留言内容显示</strong>
	</div> 
<table class="table table-hover text-center">
<tr>
<td>留言人</td>
<td>留言内容</td>
<td>留言时间</td>
</tr>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rs): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($rs['username']); ?></td>
<td id="a1"><?php echo ($rs['liuyan']); ?></td>
<script type="text/javascript">
var a1=document.getElementById("a1");
a1=a1.innerHTMl;

</script>
<td><!--<?php echo (date('Y-m-d H:i:s',$time)); ?>--><?php echo (date("Y-m-d H:i:s",$rs['time'])); ?><!--<?php echo (date('Y-m-d H:i:s',$time)); ?>--></td>
<td><a href="<?php echo U('liuyan_delete?id='.$rs['id']);?>" class="button button-little bg-blue"> 删除</a> </td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr>
<td  colspan="13" align="center" class="pages"><?php echo ($page); ?></td>
</tr>
</table>
</div>
</body>
</html>