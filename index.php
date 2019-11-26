<!-- 调用页首 -->
<?php echo get_header();?>

<!-- 主体区 -->
<article id="index">
	<main>
		<!-- 轮播图区 -->
		<section class="slider">
			<ul>
				<!-- 限定文章数目 -->
				<?php query_posts($query_string . 'tag=top'.'$showposts='. $limit = 7)?>
				<!-- 筛选文章 -->
				<?php while( have_posts()): the_post();?><!-- 遍历文章 -->
				<li>
					<!-- 缩略图区 -->
					<div class="slider-thumb">
						<a href="<?php the_permalink();?>" target="_blank">
							<!-- 对缩略图进行判断，若有，输出中等尺寸图片，若无，则输出images里的预存图片 -->
							<?php if( has_post_thumbnail() ){?>
								<?php the_post_thumbnail('mediun')?>
								<?php }else{ ?>
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
						<a class="more" href="<?php get_pernalink();?>">查看详情</a>
					</div>
				</li>
				<?php endwhile;?>
			</ul>
		</section>
		<section class="grid">
			<div id="right">
				
			</div>
			<div id="left">
				
			</div>
		</section>
	</main>
	
</article>