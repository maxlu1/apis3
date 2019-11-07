</div>
</div>
<footer class="site-footer">
	<div class="row">
		<?php
		$footer_linksbdages = wp_get_recent_posts(array(
			'numberposts' => 3,
			'category_name'     => 'for_footer',
			'order' => 'ASC',
			'post_status' => 'publish'
		));
		foreach ($footer_linksbdages as $post) : ?>
			<div class="col-lg-4 col-sm-12 col-md-4 footer-badge">
				<h3 class="footer-badge-title"><?php echo $post['post_title'] ?></h3>
			</div>
		<?php endforeach;
		wp_reset_query(); ?>
	</div>
	<div class="row footer-menuWrapper">
		<div class="footer-menuWrapper-companyData">
			<div class="footer-menuWrapper-companyData-brand"></div>
			<p class="footer-menuWrapper-companyData-address">Av. Cardoso de Melo, 828 - Vila Olímpia - São Paulo</p>
			<p class="footer-menuWrapper-companyData-contact">contato@apis3.com</p>
			<p class="footer-menuWrapper-companyData-contact phone">+55 11 23646921</p>
			<div class="footer-menuWrapper-companyData-socialMedia">
				<?php get_template_part('template-parts/social-media-footer', 'none') ?>
			</div>
		</div>

		<?php get_sidebar('newsletter'); ?>

		<nav id="siteNavigationFooter" class="footer-navigation" role="navigation">
			<?php
			$args = [
				'theme_location' => 'footer-menu',
			];
			wp_nav_menu($args);
			?>
		</nav>

	</div>








</footer>
<?php wp_footer(); ?>
<!-- <script type='text/javascript' src='./js/main.js'></script> -->
</body>

</html>