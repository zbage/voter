<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>活动信息 - 创卫志愿</title>

<link type="text/css" rel="stylesheet" href="../Public/css/reset.css">
<link type="text/css" rel="stylesheet" href="../Public/css/style.css">
<link type="text/css" rel="stylesheet" href="../Public/css/font-awesome.css">
<link type="text/css" rel="stylesheet" href="../Public/css/list_v2.css">

</head>
<body>

<div id="web">
			<!-- 响应式设计标签 -->
	<!-- 在手机上不可放大缩小 -->
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
	<!-- 通过快捷方式打开时全屏显示 -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- 隐藏状态栏 -->
	<meta name="apple-mobile-web-app-status-bar-style" content="blank" />
	<!-- 忽略将数字识别为电话号码 -->
	<meta name="format-detection" content="telephone=no" />
	<!-- end 响应式设计标签 -->

	<div id="header">
	</div>
	<div class="nav"></div>

	<div id="menu">
<!-- 		活动信息<br />
		————<a href="__APP__/Active/active_form">活动项目</a><br />
		————<a href="__APP__/Active/active_jianbao">活动简报</a><br />
		————<a href="__APP__/Contents/item_desc">项目简介</a><br />
		————<a href="__APP__/Index/personal">个人信息</a><br />

		创卫监督<br />
		————<a href="__APP__/Contents/add_form?type=1">发布信息</a><br />
		————<a href="__APP__/Contents/article_list?type=1">卫生情况</a><br />

		群众路线<br />
		————<a href="__APP__/Contents/add_form?type=2">发布信息</a><br />
		————<a href="__APP__/Contents/article_list?type=2">活动简讯</a><br /> -->
		活动信息<br />
		————<a href="__APP__/Active/newest_active">最新活动</a><br />
		————<a href="__APP__/Active/active_info">活动信息</a><br />
		————<a href="__APP__/Active/active_form">发布活动</a><br />
		————<a href="__APP__/Index/register_form">注册信息</a><br />
		————<a href="__APP__/Contents/item_desc">常态项目简介</a><br />

		创卫监督<br />
		————<a href="__APP__/Contents/add_form?type=1">发布信息</a><br />
		————<a href="__APP__/Contents/article_list?type=1">创卫活动</a><br />

		群众路线党员志愿服务<br />
		————<a href="__APP__/Contents/add_form?type=2">发布信息</a><br />
		————<a href="__APP__/Contents/article_list?type=2">活动简讯</a><br />
	</div>

	<div class="nav"></div>

<!-- 
注册组织、发布简报、同意加入、取消加入、管理员界面
-->

	<div id="container">

		<?php if(!empty($my_content)): ?><center><b>我发布的项目</b></center>

			<?php if(is_array($my_content)): $i = 0; $__LIST__ = $my_content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- <hr class="hr1"> -->
				<div class="contents fl">
					<a href="__APP__/Active/active_detail?a_id=<?php echo ($vo['a_id']); ?>">
						<div class="title fl"><?php echo ($vo['title']); ?></div>
						<div class="pic fl"><img src="<?php echo pic_path('__PUBLIC__/Uploads/', $vo['pic']);?>"></div>
					</a>
				</div>
				<div class="nav"></div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
		
		<?php if(!empty($my_join_content)): ?><center><b>我报名的项目</b></center>

			<?php if(is_array($my_join_content)): $i = 0; $__LIST__ = $my_join_content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="contents fl">
					<a href="__APP__/Active/active_detail?a_id=<?php echo ($vo['a_id']); ?>">
						<div class="title fl"><?php echo ($vo['title']); ?></div>
						<div class="pic fr"><img src="<?php echo pic_path('__PUBLIC__/Uploads/', $vo['pic']);?>"></div>
					</a>
				</div>
				<div class="nav"></div><?php endforeach; endif; else: echo "" ;endif; endif; ?>

		<?php if(!empty($other_content)): ?><center><b>别人发布的项目列表</b></center>

			<?php if(is_array($other_content)): $i = 0; $__LIST__ = $other_content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="contents fl">
					<a href="__APP__/Active/active_detail?a_id=<?php echo ($vo['a_id']); ?>">
						<div class="title fl"><?php echo ($vo['title']); ?></div>
						<div class="pic fr"><img src="<?php echo pic_path('__PUBLIC__/Uploads/', $vo['pic']);?>"></div>
					</a>
				</div>
				<div class="nav"></div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
	</div>

	<div id="footer">
		<p><a href="__APP__">创卫志愿@蜀乐</a></p>

<?php if($vvv_id == ''): ?><p><a href="<?php echo U('Index/login_form');?>">登录</a></p>
<?php elseif($vvv_id != '' && $_SESSION['temp'] == 0 ): ?>
	<p><?php echo ($vvv_id); ?>，欢迎您！<a href="<?php echo U('Index/logout');?>">退出</a></p>
<?php elseif($vvv_id != '' && $_SESSION['temp'] == 1 ): ?>
	<p><?php echo ($vvv_id); ?>(游客账号)，请<a href="__APP__/Index/personal">绑定</a>或<a href="<?php echo U('Index/login_form');?>">登录</a>账号<?php endif; ?>
	</div>
</div>

</body>
</html>