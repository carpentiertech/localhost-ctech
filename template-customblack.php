<?php
/**
 *
 * Template Name: Custom-PageBlack
 *
 * The template for the custom PJC pages.
 *
 * This is the template that displays custom PJC pages--not default.
 *
 * @package Custom PJC
 */

get_header(customblack); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>
