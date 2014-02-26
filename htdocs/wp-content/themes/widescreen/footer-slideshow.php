<?php 
$gpp = get_option( 'widescreen_options' ); ?>
</div>
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
});
</script>
</body>
</html>