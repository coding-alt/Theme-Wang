<!-- 页脚区 -->
		<footer>
			<span>
				版权所有&copy;
				<!-- 输出年份 -->
				<?php echo date("Y"); ?>
				<!-- 输出网站名 -->
				<b><?php echo bloginfo("nanme"); ?></b>
				Design By 
				<!-- 站长信息 (主题设置)-->
				<b><?php echo get_option("site_admin");?></b>
			</span>
			<?php wp_footer()?>   <!-- 输出尾部信息供调用-->
		</footer>
		<script src="<?php echo get_stylesheet_directoru_uri();?>/Theme-Wang.js" type="text/javascript"></script>
	</body>
</html>