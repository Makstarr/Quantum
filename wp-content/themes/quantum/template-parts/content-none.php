<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Quantum
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Ничего не найдено', 'quantum' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Готовы опубликовать свой первый пост? <a href="%1$s">Начните здесь</a>.', 'quantum' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Извините, ничего не найдено! Попробуйте поискать еще, используя другие ключевые слова.', 'quantum' ); ?></p>
			<div class="search"><?php
			get_search_form();?>
			</div><?php
			
		else :
			?>

			<p><?php esc_html_e( 'Похохоже мы не можем найти то, что Вы хотите. Возможно поиск может помочь.', 'quantum' ); ?></p>
			<div class="search"><?php
			get_search_form();?>
			</div><?php
		endif;
		?>
		<img class="search-img" src="./wp-content/themes/quantum/assets/images/search.jpg" />
		<a href='https://www.freepik.com/vectors/technology' class="site-copy forgein-copy">Technology vector created by freepik - www.freepik.com</a>
	</div><!-- .page-content -->
</section><!-- .no-results -->
