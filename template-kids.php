<?php
/**
 *
 * Template Name: Custom-Kids
 *
 * The template for the kids page.
 *
 * @package Custom PJC
 */

get_header(custom2); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page' ); ?>
	<?php endwhile; wp_reset_query(); ?>

	<style>
		body{
			background: #C0C0C0;
		}
	</style>

	<html lang="en" >
		<head>
			<meta charset="UTF-8">
  			<title>Lena & Tommy</title>
		</head>
		<body>
			

		</body>
	</html>

	<?php get_footer(landing); ?>
