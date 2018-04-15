<?php
/**
 * @package Posts_in_Page
 * @author Eric Amundson <eric@ivycat.com>
 * @copyright Copyright (c) 2017, IvyCat, Inc.
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */
?>

<!-- NOTE: If you need to make changes to this file, copy it to your current theme's main
	directory so your changes won't be overwritten when the plugin is upgraded. -->

<!-- Post Wrap Start-->



<style>
.main#content.main {
	padding-top:10px}
div.box {
	padding:0px;
	border:0px solid #ffffff}
p {
  margin-bottom: 0px;}
h2 {
	line-height:100%;
  margin-bottom: 2px;}
hr {
    margin-bottom: 12px;
    margin-top: 4px;}
a:link, a:visited {
    height: 31px;
    padding: 0px 0px;}
.bl-wrapper {
        display: grid;
    	  grid-gap: 0px;
        grid-template-columns: 170px ;
        background-color: #fff;
        color: #fff;
    }
    .box {
        background-color: #fff;
        color: #444;
        border-radius: 0px;
        padding: 0px;
        font-size: 100%;
    }
    .bl-photo {
        grid-column: 1 ;
        grid-row: 1 / 4;
        margin-right: 0px;
        border-right-width: 0px;
        padding-right: 0px;
        height: 150px;
        padding-bottom: 0px;
        border-bottom-width: 0px;
        margin-bottom: 0px;
        width: 150px;
        margin-left: 10px;
        border-left-width: 0px;
        padding-left: 0px;
        border-top-width: 0px;
        padding-top: 0px;
    }
    .bl-title {
        grid-column: 2;
        grid-row: 1 ;
    }
    .bl-summary {
        grid-column: 2 ;
        grid-row: 2  ;
    }
    .bl-utiltiy {
        grid-column: 2 ;
        grid-row: 3 ;
    }
}
</style>

<div class="bl-wrapper">
<?php if ( has_post_thumbnail() ) : ?>
<div class="box bl-photo">
		<?php the_post_thumbnail( 'thumbnail' ); ?></div>
	<?php else :
		$category = get_the_category();
	?>
	<div class="box bl-photo">
		<img src="<?php bloginfo('url'); ?>/wp-content/uploads/category-images/LogoSquare-VowPost.png"  />
	</div>
<?php endif; ?>
<div class="box bl-title"><h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<div class="box bl-summary"><?php the_excerpt(); ?></div>
<div class="box bl-utility">	<?php if ( count( get_the_category() ) ) : ?>
    <span class="cat-links">
      <?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'posts-in-page' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
    </span>
    <span class="meta-sep">|</span>
    <span class="post-date"><?php the_date(); ?></span>
    <span class="meta-sep">|</span>
  <?php endif; ?>
  <?php
    $tags_list = get_the_tag_list( '', ', ' );
    if ( $tags_list ):	?>
    <span class="tag-links">
      <?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'posts-in-page' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
    </span>
    <span class="meta-sep">|</span>
  <?php endif; ?>
  <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'posts-in-page' ), __( '1 Comment', 'posts-in-page' ), __( '% Comments', 'posts-in-page' ) ); ?></span>
  <?php edit_post_link( __( 'Edit', 'posts-in-page' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?></div>
</div>
<hr>
