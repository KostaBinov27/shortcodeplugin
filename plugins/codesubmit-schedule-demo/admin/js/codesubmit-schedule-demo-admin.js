(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	$( document ).ready(function() {
		$( ".timeavaliablehoursfrom" ).keyup(function() {
			this.value = this.value.replace(/[^0-9]/g, '');
			if ( $(this).val() <= 0 || $(this).val() > 12  ) {
				$('#errorMessage').html('');
				$('#errorMessage').html('Value must not be greater than 12 or lower than 1');
				$('#errorMessage').removeClass('d-none');
				$(this).val('');
			}
		} );
		$( ".timeavaliablehoursto" ).keyup(function() {
			this.value = this.value.replace(/[^0-9]/g, '');
			if ( $(this).val() <= 0 || $(this).val() > 12  ) {
				$('#errorMessage').html('');
				$('#errorMessage').html('Value must not be greater than 12 or lower than 1');
				$('#errorMessage').removeClass('d-none');
				$(this).val('');
			}
		} );
		$( ".timeavaliableminutesfrom" ).keyup(function() {
			this.value = this.value.replace(/[^0-9]/g, '');
			if ( $(this).val() < 0 || $(this).val() > 60 ) {
				$('#errorMessage').html('');
				$('#errorMessage').html('Value must not be greater than 60 or lower than 1');
				$('#errorMessage').removeClass('d-none');
				$(this).val('');
			}
		} );
		$( ".timeavaliableminutesto" ).keyup(function() {
			this.value = this.value.replace(/[^0-9]/g, '');
			if ( $(this).val() < 0 || $(this).val() > 60  ) {
				$('#errorMessage').html('');
				$('#errorMessage').removeClass('d-none');
				$('#errorMessage').html('Value must not be greater than 60 or lower than 1');
				$(this).val('');
			}
		} );
	});

})( jQuery );
