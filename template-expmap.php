<?php
/**
 *
 * Template Name: Custom Page Experience Map
 *
 * The template for the custom PJC pages.
 *
 * This is the template that displays custom PJC pages--not default.
 *
 * @package Custom PJC
 */

get_header(custom2); ?>

	<style>
		div#content-core {
			padding-top: 0px;
		}
		div#content {
			padding-top: 0px;
			background-color: #000d30 !important;
			color: #ffffff !important;
		}		
		img.img-responsive {
			width: 97%;
			height: auto;
		}
	</style>

	<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content', 'page' ); ?>
	<?php endwhile; wp_reset_query(); ?>

	<div style="text-align: center;"><span style="font-family: georgia, palatino, serif;"><em><span style="font-size: 20pt;">Click an Icon to View Additional Details...</span></em></span></div>

	<center><img class="img-responsive" usemap="#image-map" src="<?php get_template_directory_uri()?>/wp-content/uploads/2017/11/sat-map-v3.png"/></center>
	
	<map name="image-map">
    <area target="carpentiertech.com" alt="ACN" title="ACN" href="ACN" coords="579,154,658,189" shape="rect">
    <area target="carpentiertech.com" alt="PSI" title="PSI" href="PSI" coords="606,109,657,144" shape="rect">
    <area target="carpentiertech.com" alt="TMHP" title="TMHP" href="TMHP" coords="397,443,469,492" shape="rect">
    <area target="carpentiertech.com" alt="JEN" title="JEN" href="JEN" coords="553,492,617,534" shape="rect">
    <area target="carpentiertech.com" alt="CAT" title="CAT" href="CAT" coords="592,212,659,261" shape="rect">
    <area target="carpentiertech.com" alt="XRX" title="XRX" href="XRX" coords="560,423,625,468" shape="rect">
    <area target="carpentiertech.com" alt="UM" title="UM" href="UM" coords="742,144,781,180" shape="rect">
    <area target="carpentiertech.com" alt="MFP" title="MFP" href="MFP" coords="648,273,724,297" shape="rect">
    <area target="carpentiertech.com" alt="FRAN" title="FRAN" href="FRAN" coords="726,193,813,215" shape="rect">
    <area target="carpentiertech.com" alt="EXEL" title="EXEL" href="EXEL" coords="710,228,788,251" shape="rect">
    <area target="carpentiertech.com" alt="WEY" title="WEY" href="WEY" coords="743,398,808,440" shape="rect">
    <area target="carpentiertech.com" alt="AUSR" title="AUSR" href="AUSR" coords="481,543,546,576" shape="rect">
    <area target="carpentiertech.com" alt="DC" title="DC" href="DC" coords="658,54,700,93" shape="rect">
    <area target="carpentiertech.com" alt="GRID" title="GRID" href="GRID" coords="802,79,898,100" shape="rect">
    <area target="carpentiertech.com" alt="NIMO" title="NIMO" href="NIMO" coords="853,470,943,491" shape="rect">
    <area target="carpentiertech.com" alt="ALLT" title="ALLT" href="ALLT" coords="827,315,905,346" shape="rect">
    <area target="carpentiertech.com" alt="CNG" title="CNG" href="CNG" coords="991,167,1060,199" shape="rect">
    <area target="carpentiertech.com" alt="CTDRS" title="CTDRS" href="CTDRS" coords="1013,83,1078,122" shape="rect">
    <area target="carpentiertech.com" alt="NV" title="NV" href="NV" coords="191,152,32" shape="circle">
    <area target="carpentiertech.com" alt="CO" title="CO" href="CO" coords="447,171,32" shape="circle">
    <area target="carpentiertech.com" alt="TX" title="TX" href="TX" coords="506,399,32" shape="circle">
    <area target="carpentiertech.com" alt="LA" title="LA" href="LA" coords="648,359,32" shape="circle">
    <area target="carpentiertech.com" alt="WBH" title="WBH" href="WBH" coords="446,520,22" shape="circle">
    <area target="carpentiertech.com" alt="DR" title="DR" href="DR" coords="729,87,753,111,731,135,708,111" shape="poly">
    <area target="carpentiertech.com" alt="NY" title="NY" href="NY" coords="952,62,33" shape="circle">
	</map>

<?php get_footer(); ?>
