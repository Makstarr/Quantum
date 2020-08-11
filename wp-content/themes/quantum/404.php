<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Quantum
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e('Ууупс! Такой страницы не существует.', 'quantum'); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php esc_html_e('Похохоже мы не можем найти то, что Вы хотите. Возможно поиск может помочь.', 'quantum'); ?></p>
			<div class="search"><?php
								get_search_form(); ?>
			</div>
		</div><!-- .page-content -->
	</section><!-- .error-404 -->
	<img class="search-img" src="./wp-content/themes/quantum/assets/images/404.jpg" />

</main><!-- #main -->

<?php
get_footer();
