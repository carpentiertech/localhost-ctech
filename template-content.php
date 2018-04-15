<?php
/**
 *
 * Template Name: Custom-Content
 *
 * The template for the custom PJC pages.
 *
 * This is the template that displays custom PJC pages--not default.
 *
 * @package Custom PJC
 */
 ?>
<style>
  div.custom-header {
    display: none;
  }
  textarea#comment {
    height: 90px !important;
    color: #000000 !important;
  }
  .commentlist .avatar {
    display: none;
  }
  div.comment-author {
    display: none !important;
  }
  .commentlist article header {
    margin-left: 0px !important;
  }
  .commentlist article footer {
    margin-left: 0px !important;
  }
  p.logged-in-as {
    display: none;
  }
  ol.commentlist {
    margin-bottom: 0px !important;
    margin-left: 20px !important;
  }
  #comments-title h3 {
    margin-top: 25px !important;
    margin-bottom: 10px !important;
  }
  .comment-meta {
    margin-bottom: 10px !important;
  }
 .comment-content {
    margin-bottom: 10px !important;
  }
  li.comment {
    margin-bottom: 10px !important;
  }
  #reply-title.comment-reply-title {
    margin-bottom: 15px !important;
  }
  article.comment {
    margin-bottom: 5px !important;
  }
  .comment-respond {
    margin-bottom: 10px !important;
  }
  p.comment-form-comment {
    margin-bottom: 7px !important;
  }
  .submit.submit {
    width: 100px !important;
    height: 35px !important;
    text-align: center !important;
    padding-left: 0px !important;
    padding-right: 0px !important;
    padding-top: 0px !important;
    padding-bottom: 0px !important;
    background: #00274c !important;
  }
</style>
<?php get_header(); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; wp_reset_query(); ?>
			
			<?php /* Add comments */ thinkup_input_allowcomments(); ?>

<?php get_footer(landing); ?>
