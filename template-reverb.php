<?php
/**
 *
 * Template Name: Custom-Reverb
 *
 * The template for the blank PJC pages.
 *
 * @package Custom PJC
 */

get_header(custom2); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', 'page' ); ?>
<?php endwhile; wp_reset_query(); ?>

  <link rel="stylesheet" href="<?php get_template_directory_uri()?>/wp-content/themes/Consulting_Pro-child/styles/style-reverb.css">

  <style>
    body{
      background-color: transparent;
      margin: 0px
    }
    #oscilliscope{
      width: 100%;
      line-height: 0;
    }
		#masterVolume{
			display: none;
		}
  </style>

	<script type='text/javascript'>
		window.addEventListener('resize', function () {
      //debugger;
      window.location.reload();
    });
	</script>

  <form>
    <fieldset>
      <legend>Oscilliscope</legend>
      <div id='oscilliscope'>
        <canvas id='oscilliscopeVisualiser'></canvas>
      </div>
    </fieldset>
    <fieldset id='masterVolume'>
      <legend>Master volume</legend>
      <div class='control-group'>
        <label for='volume'>Volume</label>
        <input type='range' min='0' max='10' step='0.1' value='1' id='volume'>
      </div>
      <div class='control-group'>
        <label for='pan'>Pan</label>
        <input type='range' min='-1' max='1' step='0.01' value='0' id='pan'>
      </div>
    </fieldset>
    <reverb-unit wetfilter='1000'>
        <legend>Reverb</legend> 
    </reverb-unit>
  </form>

  <template class='reverbUnit'>
    <style>
      .control-group input{
        width: 100%;
      }
      .control-group label{
        display: none;
      }
      .control-group input[type=checkbox]{
        width: auto;
      }
      legend, fieldset{
        border: 1px solid steelblue;
        border-radius: 5px;
				display: none;
      }
      fieldset{
        margin-top: 1em;
        background-color: lightgrey;
      }
			.masterVolume{
					display: none;
				}
    </style>
    <fieldset id='reverbUnit' class='fieldset-group'>
      <content select='legend'></content>
      <div class='control-group'>
        <label for='reverbUnitBypass'>
          <input type='checkbox' id='reverbUnitBypass'>Bypass
        </label>
      </div>
      <div class='control-group'>
        <label for='reverbUnitWetFilter'>Wet filter frequency</label>
        <input type='range' min='50' max='15000' value='1000' id='reverbUnitWetFilter'>
      </div>
      <div class='control-group'>
        <content select='.selectLabel'></content>
        <content select='select'></content>
      </div>
    </fieldset>
  </template>

  <script type="text/javascript"
    src="<?php get_template_directory_uri()?>/wp-content/themes/Consulting_Pro-child/js/audioContextNoModule.js">
  </script>
  <script type="text/javascript"
    src="<?php get_template_directory_uri()?>/wp-content/themes/Consulting_Pro-child/js/reverb18.js">
  </script>
  <script  type="text/javascript"
    src="<?php get_template_directory_uri()?>/wp-content/themes/Consulting_Pro-child/js/resize-oscilliscope.js">
  </script>
<?php get_footer(landing); ?>
