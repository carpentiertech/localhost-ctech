<?php
/**
 *
 * Template Name: Custom-Page
 *
 * The template for the custom PJC pages.
 *
 * This is the template that displays custom PJC pages--not default.
 *
 * @package Custom PJC
 */

get_header(custom2); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; wp_reset_query(); ?>

<?php get_footer(landing); ?>
