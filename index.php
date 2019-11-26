	<!-- 调用页首 -->
	<?php echo get_header();?>

<main id="index">
	<!-- 主体区 -->
	<article >
		<!-- 轮播图区 -->
		<section class="slider">
			<ul>
				<!-- 限定文章数目 -->
				<?php query_posts($query_string . 'tag=top'.'$showposts='. $limit = 7)?>
				<!-- 筛选文章 -->					<?php while( have_posts()): the_post();?><!-- 遍历文章 -->
				<li>
					<!-- 缩略图区 -->
					<div class="slider-thumb">
						<a href="<?php the_permalink();?>" target="_blank">
							<!-- 对缩略图进行判断，若有，输出中等尺寸图片，若无，则输出images里的预存图片 -->
							<?php if( has_post_thumbnail() ){?>
								<?php the_post_thumbnail('mediun');?>									<?php }else{ ?>
									<img src="<?php echo get_stylesheet_directory_uri()?>/images/thumb.png">
								<?php }?>
						</a>
					</div>
					<div class="slider-preview">
						<h2>
							<a href="<?php the_permalink();?>" target="_blank">
							<!-- 对预览文章标题进行裁剪，超出部分用‘...’代替 -->
								<?php echo mb_strimwidth(get_the_title(),0,50,'...');?>
							</a>
						</h2>
						<p class="slider-summary">
							<?php echo mb_strimwidth(get_the_content(),0,160,'...');?>
						</p>
						<a class="more" href="<?php get_permalink();?>">查看详情</a>
					</div>
				</li>
				<?php endwhile;?>
			</ul>
			<div class="pre"><</div>
			<div class="next">></div>
		</section>
			<!-- 文章区 -->
		<section class="grid">
			<!-- 区块一 -->
			<div class="left">
					<!-- 调用后台主题设置的目录ID	 -->
				<?php $display_categoies = array(get_option('index_cat1')); foreach($display_categoies as $category) {?>
					<!-- 限制文章区显示文章数量 -->
					<?php query_posts("showposts=7&cat=$category")?>
						<!-- 分类目录名称 -->
						<div class="grid-name">
							<a href="<?php echo get_categroy_link($category);?>">
								<?php single_cat_title();?>
							</a>
						</div>
						<ul>
							<?php while(have_posts()) : the_post(); ?>
							<li>
								<a href="<?php get_permalink();?>" target="_blank">
									<!-- 文章缩略图 -->
									<div class="thumb">
										<?php if( has_post_thumbnail() ){?>
											<?php the_post_thumbnail('mediun');?>
											<?php }else{ ?>
													<img src="<?php echo get_stylesheet_directory_uri()?>/images/thumb.png">
										<?php }?>
									</div>
									<!-- 文章预览 -->
									<div class="preview">
										<div class="title">
											<!-- 文章标题限制 -->
											<?php echo mb_strimwidth(get_the_title(),0,95,'...'); ?>
										</div>
											<div class="time"><?php the_time('Y-n-j') ?></div>
											<div class="summary">
												<!-- 预览文章字数限制 -->
												<?php echo mb_strimwidth(get_the_content(),0,150,'...');?>
											</div>
									</div>
								</a>
							</li>
							<?php endwhile; ?>
						</ul>
						<!-- 更多内容 -->
						<a class="more" href="<?php echo get_categroy_link() ;?>">
							查看更多&gt;&gt;
						</a>
					<?php wp_reset_query(); ?>
			</div>

				<!-- 区块二 -->
			<div class="right">
					<?php $display_categoies = array(get_option('index_cat2')); foreach($display_categoies as $category) {?>
						<?php query_posts("showposts=7&cat=$category")?>
							<div class="grid-name">
								<a href="<?php echo get_categroy_link($category);?>">
									<?php single_cat_title();?>
								</a>
							</div>
						<ul>
						<?php while(have_posts()) : the_post(); ?>
							<li>
								<a href="<?php get_permalink();?>" target="_blank">
								<div class="thumb">
									<?php if( has_post_thumbnail() ){?>
										<?php the_post_thumbnail('mediun');?>
										<?php }else{ ?>
											<img src="<?php echo get_stylesheet_directory_uri()?>/images/thumb.png">
									<?php }?>
								</div>
								<div class="preview">
									<div class="title">
										<?php echo mb_strimwidth(get_the_title(),0,95,'...'); ?>
									</div>
										<div class="time"><?php the_time('Y-n-j') ?></div>
										<div class="summary">
											<?php echo mb_strimwidth(get_the_content(),0,150,'...');?>
										</div>
									</div>
								</a>
							</li>
						<?php endwhile; ?>
						</ul>
						<a class="more" href="<?php echo get_categroy_link() ;?>">
							查看更多&gt;&gt;
						</a>
					<?php wp_reset_query(); ?>
			</div>

			</section>

	</article>
</main>

<!--页脚区: 调用footer.php -->
<?php get_footer(); ?>