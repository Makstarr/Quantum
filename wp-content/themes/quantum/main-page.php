<?php

/*Template Name: Главная страница*/

get_header();
?>
<div class="page-layout">
	<main id="primary" class="site-main" style="padding: 0; margin-top:-30px;">
		<!-- SLIDER -->
			<?php
			if (have_posts()) :

				if (is_home() && !is_front_page()) :
			?>

					<div class="posts">
				<?php
				endif;

				/* Start the Loop */
				while (have_posts()) :
					the_post();

					/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
					get_template_part('template-parts/content', 'mainpage');

				endwhile;

				the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

			endif;
				?>
					</div>
	</main><!-- #main -->
</div>
<?php
get_footer();
