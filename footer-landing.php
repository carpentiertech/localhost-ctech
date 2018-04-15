<?php
/**
 * The template for displaying the landing page footer.
 *
 * Contains the closing of the id="main-core".
 *
 * @package ThinkUpThemes
 */
?>
          <!-- Include footersize.js 
	  <script type="text/javascript"
		src="<?php get_template_directory_uri()?>/wp-content/themes/Consulting_Pro-child/js/footersize.js">
          </script>-->

		</div><!-- #main-core -->
		</div><!-- #main -->
		<?php /* Sidebar */ thinkup_sidebar_html(); ?>
	</div>
	</div><!-- #content -->

	<?php /* Call To Action - Outro */ thinkup_input_ctaoutro(); ?>

	<footer>
		<?php /* Custom Footer Layout */ thinkup_input_footerlayout();
		echo	'<!-- #footer -->';  ?>
		
		<div id="sub-footer">

		<?php /* Custom Sub-Footer Layout */ thinkup_input_subfooterlayout(); ?>

		<div id="sub-footer-core">
		
			<div class="copyright">
			<?php /* === Add custom footer === */ thinkup_input_copyright(); ?>
			</div>
			<!-- .copyright -->

			<?php if ( has_nav_menu( 'sub_footer_menu' ) ) : ?>
			<?php wp_nav_menu( array( 'depth' => 1, 'container_class' => 'sub-footer-links', 'container_id' => 'footer-menu', 'theme_location' => 'sub_footer_menu' ) ); ?>
			<?php endif; ?>
			<!-- #footer-menu -->

			<?php if ( ! has_nav_menu( 'sub_footer_menu' ) ) : ?>
			<?php /* Social Media Icons */ thinkup_input_socialmediafooter(); ?>
			<?php endif; ?>

		</div>
		</div>
	</footer><!-- footer -->

</div><!-- #body-core -->

<?php wp_footer(); ?>
<!--Call size_footer()-->
<script type='text/javascript'>
    //debugger;
    var h_header, h_main, h_footer, h_full, footer_ht,
        win_header, win_main, win_footer;
    win_header = document.getElementById("site-header");
    win_main = document.getElementById("content-core");
    win_footer = document.getElementById("sub-footer");
    h_header = win_header.offsetHeight;
    h_main = win_main.offsetHeight;
    h_footer = win_footer.offsetHeight;
    h_full = window.innerHeight;
    footer_ht = h_full - h_main - h_header;
    win_footer.setAttribute("style", "height: " + footer_ht + "px");
    //win_footer.offsetHeight = footer_ht;
</script>
</body>
</html>