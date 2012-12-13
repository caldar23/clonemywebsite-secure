// Hide and show the 'add new' fields
jQuery(document).ready(function(){
	jQuery(".cmwsecure_expandable").click(function(){
		var divId = jQuery(this).attr("id");
		jQuery( '#' + divId + '-html' ).show('slow');
		//jQuery( '#' + divId + '-html' ).hide('fast');
	});
});   