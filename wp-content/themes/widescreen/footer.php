<?php 
 
$gpp = get_option( 'widescreen_options' );
$author_link = "http://graphpaperpress.com"; ?>

<!-- BeginFooter -->

	<div id="footer">
			<?php if ($gpp['gpp_about'] != '' ) { ?><h3 class="fancy"><?php _e('About','gpp_i18n'); ?></h3>
			<p class="nomargin"><?php if($gpp['gpp_about'] != '') { echo stripslashes($gpp['gpp_about']); } else { _e('Add a little information about yourself here. It will appear in the footer of your site.','gpp_i18n'); } ?></p>
			<p><a href="<?php echo esc_attr( $gpp['gpp_about_link'] ); ?>" title="<?php _e('Read more about me','gpp_i18n'); ?>"><?php _e('Read more about me','gpp_i18n'); ?></a></p><?php } ?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
			<?php endif; ?>
			
			<?php gpp_ad_code('footer'); ?>
			
				<p class="credits">
						<?php printf(__('All content &copy; %1$s by %2$s','gpp_i18n'),date('Y'),__(get_bloginfo('name'))); ?>
				</p>
			
	</div><!-- #footer -->

<!-- EndFooter -->

</div><!-- .container -->

<?php wp_footer(); ?>

<script type="text/javascript">
	jQuery(document).ready(function(){
		// Menu Hide Effects 
		jQuery.fn.fadeToggle = function(speed, easing, callback) {
			return this.animate({opacity: 'toggle'}, speed, easing, callback);
		};
		jQuery('#hide').click(function(){
			jQuery('#menu').fadeToggle();
			jQuery(this).text(jQuery(this).text() == '<?php _e('+ Show menu','gpp_i18n'); ?>' ? '<?php _e('- Hide menu','gpp_i18n'); ?>' : '<?php _e('+ Show menu','gpp_i18n'); ?>');
			return false; 
		});
		
		<?php if (is_page_template('page_slideshow.php') || in_category('galleries') ) { ?>
		jQuery('.slideshow').cycle({
			fx:			'fade',
			speed:		'fast',
			timeout:	0,
			next:		'.next',
			prev:		'.prev',
			after:		onAfter
		});
		<?php } ?>
		
		jQuery('#toggle').click(function(){
			jQuery('div.project-info').fadeToggle();
			jQuery(this).text(jQuery(this).text() == '<?php _e('Show info','gpp_i18n'); ?>' ? '<?php _e('Hide info','gpp_i18n'); ?>' : '<?php _e('Show info','gpp_i18n'); ?>');
			return false;
		});
		
		function onAfter(curr,next,opts) {
			var caption = (opts.currSlide + 1) + ' of ' + opts.slideCount;
			jQuery('#info').html(caption);
			jQuery(".slideshow img").load(function() {
				var imageHeight = jQuery(".slideshow img").height() + 40;
				jQuery(".slideshow").css("height", imageHeight);
			});
		}
	});
</script>
</body>
</html>