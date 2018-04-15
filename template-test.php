<?php
/**
 *
 * Template Name: Test-Page
 *
 * This is a template for testing.
 * It includes header-test.php and footer-test.php
 *
 * @package Custom PJC
 */

get_header(test); ?>

/**
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', 'page' ); ?>
<?php endwhile; wp_reset_query(); ?>
**/

<?php get_footer(test); ?>
