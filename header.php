<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<!-- 为不同页面显示相应的title -->
		<?php
			if(is_home()){
				// 显示网站名称（主标题）
				bloginfo("name");
				echo "-";
				// 网站副标题
				bloginfo("description");
				// 分类目录显示
			}elseif(is_category){
				single_cat_title();
			}elseif(is_single){
				single_post_title;
			}
		?>
	</title>
	
	<!-- 网标 -->
	<link rel="shortcut icon" type="images/ico" href="<?php echo get_style_diretory_url() ?>/iamges/favicon.ico">
	
	<!-- 引入CSS -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
	
	<!-- 输出头部信息供调用 -->
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div id="site-title">
			<!-- 主标题 -->
			<h1 id="logo">
				<!-- 链接到主页 -->
				<a href="<?php echo get_option('home'); ?>">
					<!-- 网站名称 -->
					<?php bloginfo('name');?>
				</a>
			</h1>
		</div>
		<!-- 导航栏 -->
		<nav>
			<?php wp_nav_menu(array(
				// 菜单别名指向
				'theme_location' => 'nav-top',
				// 自定义ul父节点div的id值
				'container_id' => 'top-menu-box',
				// 自定义ul节点的id值
				'menu_id' => 'top-menu',
				// 菜单深度
				'depth' => 1
			))?>
		</nav>
	</header>
