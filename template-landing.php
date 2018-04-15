<?php
/**
 *
 * Template Name: Custom-Landing
 *
 * The template for the custom PJC pages.
 *
 * This is the template that displays custom PJC pages--not default.
 *
 * @package Custom PJC
 */
get_header(landing); ?>

    <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'page' ); ?>
    <?php endwhile; wp_reset_query(); ?>

    <div class="containerBox">
      <a href="https://carpentiertech.com/"><img  class="burst" src="<?php get_template_directory_uri()?>/wp-content/uploads/2017/11/Home-Button-Burst1-v3.png" /></a>
      <img  class="text1" src="<?php get_template_directory_uri()?>/wp-content/uploads/2017/11/Landing-text1-v2.png" />
      <img  class="text2" src="<?php get_template_directory_uri()?>/wp-content/uploads/2017/11/Landing-text2-v3.png" />
      <img class="img-responsive" src="<?php get_template_directory_uri()?>/wp-content/uploads/2017/11/impact-v5.png"/>
    </div>

<?php get_footer(landing); ?>
