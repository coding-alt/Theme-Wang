<!-- 小工具 -->
<h4>通知公告</h4>
<ul id="notice">
	<?php $display_categories = array(get_option('notice_cat')); foreach($display_categories as $category) { ?>
	<!-- 用户自行查询通知公告栏id  将其填入 showposts== 'id'-->
		<?php query_posts("showposts==8&cat=$category") ?>
			<?php while(have_posts()) : the_posts(); ?>
				<li>
					<a href="<?php the_permalink();?>" target="_blank">
						<!-- 限制公告栏题目字数 -->
						<?php echo mb_strimwidth(get_the_title(),0,46,'...'); ?>
					</a>
				</li>
			<?php endwhile; ?>
			<a class="right more" href="<?php echo get_category_link($category); ?>">
				查看更多&gt;&gt;
			</a>
			<!-- 重置查询数据,一般与query_posts()配对出现 -->
		<?php wp_reset_query(); ?>
	<?php } ?>	
</ul>