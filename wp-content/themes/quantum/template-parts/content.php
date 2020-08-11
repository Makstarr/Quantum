<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Quantum
 */

?>
<div class="post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php
			if (is_singular()) :
				the_title('<h1 class="entry-title">', '</h1>');
			else :
				the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			endif;

			if ('post' === get_post_type()) :
			?>
				<div class="entry-meta">
					Опубликовано: <?php the_date(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
		<div class="entry-content post-content">
			<?php quantum_post_thumbnail(); ?>
			<div class="entry-text">
				<?php
				the_excerpt(
					// Translators: %s: Name of current post. Only visible to screen readers.
					sprintf(esc_html__('Продолжить чтение %s', 'customify'), '<span class="screen-reader-text">' . the_title('', '', false) . '</span>')
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__('Страницы:', 'quantum'),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
		</div>
		<footer class="entry-footer">
			<?php quantum_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>