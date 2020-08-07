<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Quantum
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'quantum'); ?></a>

		<header id="masthead" class="site-header">
			<div class="container">
				<div class="site-header__branding">
					<?php the_custom_logo(); ?>
					<div class="site-header__branding-text">
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
						$quantum_description = get_bloginfo('description', 'display');
						if ($quantum_description || is_customize_preview()) :
						?>
							<p class="site-description"><?php echo $quantum_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
														?></p>
						<?php endif; ?>
					</div>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="site-header__navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
					<a class="site-header__navigation-search" href='#search'>
						<i class="fa fa-search" aria-hidden="true"></i>
					</a>
					<?php echo do_shortcode('[bvi]'); ?>
				</nav><!-- #site-navigation -->
				<nav class="mobile-menu">
					<div class="container">
						<div class="menu-list">
						<label>МЕНЮ</label>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
							<div class="mobile-menu__widgets">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				</nav>
				<div class="site-header__contacts">
					<a class="site-header__contacts-phone" href='tel:<?php echo get_option('site_telephone-link', '#'); ?>'>
						<?php
						$tel = get_option('site_telephone');
						if ($tel != null) { ?>
							<div class="phone-number"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo get_option('site_telephone'); ?></div>
						<?php } ?>
					</a>
					<a class="site-header__contacts-phone" href='tel:<?php echo get_option('site_telephone-link-2', '#'); ?>'>
						<?php
						$tel = get_option('site_telephone-2');
						if ($tel != null) { ?>
							<div class="phone-number"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo get_option('site_telephone-2'); ?></div>
						<?php } ?>
					</a>
					<a class="site-header__contacts-mail" href='mailto:<?php echo get_option('site_mail', '#'); ?>'>
						<?php
						$mail = get_option('site_mail');
						if ($mail != null) { ?>
							<div class="mail"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo get_option('site_mail'); ?></div>
						<?php } ?>
					</a>
					<a class="site-header__contacts-mail" href='mailto:<?php echo get_option('site_mail-2', '#'); ?>'>
						<?php
						$mail = get_option('site_mail-2');
						if ($mail != null) { ?>
							<div class="mail"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo get_option('site_mail-2'); ?></div>
						<?php } ?>
					</a>
				</div>

				<!-- #site-contacts -->
				<div class="header-nav-btn">
					<div class="header-nav-btn__1"></div>
					<div class="header-nav-btn__2"></div>
					<div class="header-nav-btn__3"></div>
				</div>
			</div>
		</header><!-- #masthead -->