// Hide and show the 'add new' fields
jQuery(document).ready(function(){
	jQuery(".cmwsecure_expand").click(function(){
		var expandDivId = jQuery(this).attr("id");
		
		jQuery( '#' + expandDivId + '-html' ).toggle('slow');
		jQuery('#' + expandDivId).toggleClass('cmwsecure_expand cmwsecure_minimize');
	});
});