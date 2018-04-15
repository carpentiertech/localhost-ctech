<?php
/**
 * @package Posts_in_Page
 * @author Eric Amundson <eric@ivycat.com>
 * @copyright Copyright (c) 2017, IvyCat, Inc.
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */
?>

<!-- Post Wrap Start-->
<div id="post-container" class="container">
  <div id=postAll" class="rowDiv">
	  <div id="postImage" class="post-img-div flexChild" style="flex: 1">
		  <?php if ( has_post_thumbnail() ) : ?>
		  <?php the_post_thumbnail( 'full', array( 'style' => 'width: 150px;' ) ); ?>
	    <?php else :	?>
		  <img src="http://ctech/wp-content/uploads/2018/03/Phi-B.png" style="width: 150px;"  />
      <?php endif; ?>
		</div>
		<div id="postContent" class="flexChild" style="flex: auto;">
		  <div id="ContentColumn" class="columnDiv">
		    <div id="postTitle" class="flexChild">
			    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			  </div>
			  <div id="postExcerpt" class="flexChild">
			    <?php the_excerpt(); ?>
			  </div>
			  <div id="postMeta" class="flexChild entry-meta">
					<?php thinkup_input_blogauthor(); ?>
					<?php thinkup_input_blogdate(); ?>
					<?php thinkup_input_blogcategory(); ?>
			  </div>
			</div>
		</div>
	</div>
</div>
