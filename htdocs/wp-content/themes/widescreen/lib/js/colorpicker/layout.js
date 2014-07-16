(function($){
	var initLayout = function() {

		$('#gpp_background_color,#gpp_border_color,#gpp_footer_color,#gpp_logo_color,#gpp_text_shadow,#gpp_font_color,#gpp_link_color,#gpp_hover_color,#gpp_menu_bg_color,#gpp_menu_bg_hover_color,#gpp_menu_link_color,#gpp_menu_link_hover_color').ColorPicker({
			onSubmit: function(hsb, hex, rgb, el) {
				$(el).val(hex);
				$(el).ColorPickerHide();
			},
			onBeforeShow: function () {
				$(this).ColorPickerSetColor(this.value);
			}
		})
		.bind('keyup', function(){
			$(this).ColorPickerSetColor(this.value);
		});
	};
	
	EYE.register(initLayout, 'init');
})(jQuery)