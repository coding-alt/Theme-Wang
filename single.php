<!-- 页首区 -->
<?php get_header();?>

<!-- 主体区 -->
<main id="single">
	<!-- 正文区 -->
	<article>
		<?php if(have_posts()) : the_posts(); update_post_caches($posts);?>
			<!-- 加载文章 -->
			<div class="post">
				<!-- 加载标题 -->
				<h3 class="title">
					<?php the_title();?>
				</h3>
				<!-- 文章信息 -->
				<p class="sub">
					<?php the_tags('标签:',',',''); ?>
					&bull;
					发布时间:<?php the_time('Y年n月j日'); ?>
					&bull;
					评论数:<?php comments_popups_link('0条评论','1条评论','%条评论','','评论以关闭'); ?>
					<?php edit_post_link('编辑','&bull;',''); ?>
				</p>
				<hr class="dot"/>
				<!-- 加载文章 -->
				<div class="content">
					<?php the_content(); ?>
				</div>
				<!-- 操作按钮 -->
				<p class="psot-button">
					<!-- 返回首页 -->
					<a href="<?php echo get_option('home');?>" class="button">&lt;&lt;返回首页</a>
					<!-- 发表评论 -->
					<a href="#commetform" class="button">发表评论</a>
				</p>
			</div>
			<hr class="dot"/>
			<!-- 加载评论 -->
			<?php comments_template(); ?>
		<?php else : ?>
			<p>没有文章</p>
		<?php endif ?>
	</article>
	
	<!-- 侧边栏	 -->
	<?php get_sidebar('single'); ?>  <!-- 引入sidebar-single.php -->
</main>

<!-- 页脚区 -->
<?php get_footer(); ?>