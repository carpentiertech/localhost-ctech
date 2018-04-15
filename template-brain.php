<?php
/**
 *
 * Template Name: Custom-Brain
 *
 * The template for the brain ctech page.
 *
 * @package Custom ctech
 */

get_header(custom2); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page' ); ?>
	<?php endwhile; wp_reset_query(); ?>

	<style>
		body {
			background-color: #c0c0c0;
		}
		.div-description, .div-link {
			box-shadow: 4px 4px 12px 4px #000000;
		}
		.home-section {
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			width: 100%;
			min-width: 100%;
			margin-right: 0px;
			padding-right: 0px;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-webkit-flex-direction: column;
			-ms-flex-direction: column;
			flex-direction: column;
			-webkit-flex-wrap: nowrap;
			-ms-flex-wrap: nowrap;
			flex-wrap: nowrap;
		}	
		.div-desc-line {
			display: block;
			font-weight: normal;
			font-size: 22px;
			color: #e6e6e6;
			padding-left: 8px;
			padding-right: 8px;
			padding-top: 2px;
			padding-bottom: 2px;
			margin-left: 5px;
			margin-right: 5px;
			margin-top: 5px;
			margin-bottom: 5px;
			border: 2px solid #000000;
			border-radius: 8px;
			text-align: center;
			background-color: #00274c;
			line-height: 1.4;
		}	
		.container-link {
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
			-webkit-flex-direction: row;
			-ms-flex-direction: row;
			flex-direction: row;
			-webkit-box-pack: justify;
			-webkit-justify-content: space-between;
			-ms-flex-pack: justify;
			justify-content: space-between;
			font-weight: bold;
			font-size: 28px;
			color: #e6e6e6;
			text-shadow: 1px 1px 1px #000000;
			padding-left: 5px;
			padding-right: 5px;
			padding-top: 5px;
			padding-bottom: 5px;
			margin-left: 5px;
			margin-right: 5px;
			margin-top: 5px;
			margin-bottom: 5px;
			border: 2px solid #000000;
			border-radius: 8px;
			text-align: center;
			background-color: #00274c;
			line-height: 1.2;
			box-shadow: 4px 4px 12px 4px #000000;
		}					
		.div-link-L, .div-link-C, .div-link-R {
			-webkit-box-flex: 1;
			-webkit-flex: 1;
			-ms-flex: 1;
			flex: 1;
			display: block;
			font-weight: bold;
			font-size: 28px;
			color: #e6e6e6;
			text-shadow: 1px 1px 1px #000000;
		}
		.div-link-L {
			-webkit-box-flex: 1.00;
			-webkit-flex: 1.00;
			-ms-flex: 1.00;
			flex: 1.00;
		}
		.div-link-C {
			-webkit-box-flex: 8.00;
			-webkit-flex: 8.00;
			-ms-flex: 8.00;
			flex: 8.00;
			text-align: center;
		}
		.div-link-R {
			-webkit-box-flex: 1.00;
			-webkit-flex: 1.00;
			-ms-flex: 1.00;
			flex: 1.00;
		}				
		.container-description, .container-link {
			display: flex;
			flex-wrap: wrap;
			align-items: center;
			justify-content: center;
		}
  </style>

	<div class="home-section">
		<div class="container-description div-desc-line">
			Fibonacci / Golden Ratio
		</div>
	  </br>
	  <div class="container-link">
			<div class="div-link-L">
				<img class="lightbox" src="<?php get_template_directory_uri()?>/wp-content/uploads/2018/03/Phi-Y.png" style="width: 75px" align="left" alt="">
			</div> 
			<div class="div-link-C">
			  <a href="http://ctech/3d-books/"></a>
			</div> 
			<div class="div-link-R">
			</div>
	  </div>
		<br>
		<div class="container-description div-desc-line">
			Other
		</div>
	  </br>
	  <div class="container-link">
			<div class="div-link-L">
			  <img class="lightbox" src="<?php get_template_directory_uri()?>/wp-content/uploads/2018/03/Phi-Y.png" style="width: 75px" align="left" alt="">
			</div> 
			<div class="div-link-C">
			  <a href="http://ctech/globe3d/"></a>
			</div> 
			<div class="div-link-R">
			</div>
	  </div>
		<br>
		<div class="container-description div-desc-line">
			Games
		</div>
	  </br>
	  <div class="container-link">
			<div class="div-link-L">
				<img class="lightbox" src="<?php get_template_directory_uri()?>/wp-content/uploads/2018/03/Phi-Y.png" style="width: 75px" align="left" alt="">
			</div> 
			<div class="div-link-C">
			  <a href="http://ctech/game-2048/"></a>
			</div> 
			<div class="div-link-R">
			</div>
	  </div>
		<br>	</div>

	<?php get_footer(); ?>

	
	
	
	<div id="post-container" class="container">
  <div id=postAll" class="rowDiv">
	  <div id="postImage" class="post-img-div flexChild" style="flex: 1">

		</div>
		<div id="postContent" class="flexChild" style="flex: auto;">
		  <div id="ContentColumn" class="columnDiv">
		    <div id="postTitle" class="flexChild">

			  </div>
			  <div id="postExcerpt" class="flexChild">

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