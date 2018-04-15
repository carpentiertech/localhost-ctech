<?php
/**
 * Template Name Posts: Learning
 * 
 * The Template for displaying all single posts.
 *
 * @package ctech
 */

get_header(custom2); ?>

			<?php while ( have_posts() ) : the_post(); ?>
			
<?php if ( has_post_thumbnail() ) : ?>
<div>
		<?php the_post_thumbnail( 'full', array( 'style' => 'width: 150px;' ) ); ?></div>
	<?php else :	?>
	<div class="image">
		<img src="http://ctech/wp-content/uploads/2018/03/Phi-B.png" style="width: 150px;"  />
	</div>
<?php endif; ?>

				<?php get_template_part( 'content', 'singlecustom' ); ?>

				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'consulting' ), 'after'  => '</div>', ) ); ?>

				<?php thinkup_input_nav( 'nav-below' ); ?>

				<?php /* Add Author Bio */ thinkup_input_postauthorbio(); ?>

				<?php /* Add comments */ thinkup_input_allowcomments(); ?>

			<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>