<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Quantum
 */

?>

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info">
			<?php the_custom_logo(); ?>
			<div class="site-copy">
				<?php
				printf(esc_html__('Создано %1$s', 'quantum'), '<a href="https://itlaunch.ru">ITLAUNCH</a>');
				?>
				<p>
					&copy; <?php echo date('Y'); ?> Все права защищены
				</p>
			</div>
		</div><!-- .site-info -->
		<nav class="footer-menu">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
		</nav><!-- #menu -->
		<!-- #widgets -->
		<div class="footer-widgets" id="search">
			<?php get_search_form(); ?>
			<?php echo do_shortcode('[bvi text="Версия для слабовидящих"]'); ?>
		</div><!-- #widgets -->
		<div class="footer-contacts">
			<?php
			$tel = get_option('site_telephone');
			if ($tel != null) { ?>
				<a class="site-header__contacts-phone" href='tel:<?php echo get_option('site_telephone-link', '#'); ?>'>
					<div class="phone-number"><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_option('site_telephone'); ?></div>
				</a>
			<?php } ?>
			<?php
			$tel = get_option('site_telephone-2');
			if ($tel != null) { ?>
				<a class="site-header__contacts-phone" href='tel:<?php echo get_option('site_telephone-link-2', '#'); ?>'>
					<div class="phone-number"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo get_option('site_telephone-2'); ?></div>
				</a>
			<?php } ?>
			<?php
			$mail = get_option('site_mail');
			if ($mail != null) { ?>
				<a class="site-header__contacts-mail" href='mailto:<?php echo get_option('site_mail', '#'); ?>'>
					<div class="mail"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo get_option('site_mail'); ?></div>
				</a>
			<?php } ?>
			<?php
			$mail = get_option('site_mail-2');
			if ($mail != null) { ?>
				<a class="site-header__contacts-mail" href='mailto:<?php echo get_option('site_mail-2', '#'); ?>'>
					<div class="mail"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo get_option('site_mail-2'); ?></div>
				</a>
			<?php } ?>
		</div><!-- #widgets -->
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>