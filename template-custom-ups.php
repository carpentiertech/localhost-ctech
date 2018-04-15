<?php
/**
 *
 * Template Name: Custom-Page-UPS
 *
 * The template for the custom UPS page.
 *
 * This is the template that displays custom UPS pages--not default.
 *
 * @package Custom PJC
 */

get_header(custom_ups); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; wp_reset_query(); ?>

<?php get_footer(landing); ?>
