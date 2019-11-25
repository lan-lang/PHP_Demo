<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<link rel="stylesheet" href="/dazuoye/Public/css/index.css" type="text/css" media="screen" />

<script type="text/javascript" src="/dazuoye/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/dazuoye/Public/js/tendina.min.js"></script>
<script type="text/javascript" src="/dazuoye/Public/js/common.js"></script>

</head>
<body>
    <!--顶部-->
    <div class="layout_top_header">
            <div style="float: left"><span style="font-size: 16px;line-height: 45px;padding-left: 20px;color: #8d8d8d">留言板</h1></span></div>
     </div>
    <!--顶部结束-->
    <!--菜单-->
    <div class="layout_left_menu">
        <ul id="menu">
            <li class="childUlLi">
               <a href="liuyan_select.html"  target="menuFrame"><i class="glyph-icon icon-home"></i>首页</a>
                    <a style="background:#FFFFFF"> <i class="glyph-icon icon-reorder"></i>用户名：<?php echo ($_SESSION['username']); ?></a>
            </li>
            <li class="childUlLi">
                <a href="info_select.html"  target="menuFrame"> <i class="glyph-icon icon-reorder"></i>个人信息查询</a>
            </li>
            <li class="childUlLi">
                <a href="info_add.html"  target="menuFrame"> <i class="glyph-icon icon-reorder"></i>个人信息添加</a>
            </li>
             <li class="childUlLi">
                <a href="liuyan.html" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>添加留言</a>
            </li>
            <li class="childUlLi">
                <a href="liuyan_select.html" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>留言板</a>
            </li>
            <li class="childUlLi">
                <a href="<?php echo U('Lyb/logout');?>"> <i class="glyph-icon  icon-location-arrow"></i>安全退出</a>
            </li>
        </ul>
    </div>
    <!--菜单-->
    <div id="layout_right_content" class="layout_right_content">

        <div class="route_bg">
            <a href="#">主页</a><i class="glyph-icon icon-chevron-right"></i>
            <a href="#">编辑个人信息</a>
        </div>
        <div class="mian_content">
            <div id="page_content">
                <iframe id="menuFrame" name="menuFrame" src="info_select.html" style="overflow:visible;"
                        scrolling="yes" frameborder="no" width="100%" height="100%"></iframe>
            </div>
        </div>
    </div>
    <div class="layout_footer">
        <p></p>
    </div>
</body>
</html>