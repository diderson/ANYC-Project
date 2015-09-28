$(document).ready(function() {	
	
	$(window).keypress(function(event) {
		if (!(event.which == 115 && event.ctrlKey)) return true;
			event.preventDefault();
			if($('#id_form').val() == '' ) {
			$('#editform-action').val( 'insert' );
			} else {
			$('#editform-action').val( 'update' );
			}
			
		$('#editform').submit();
		return false;
	});
});
/* common fuctions for edit pages */

/***************************************************/
function tinymce_setupImageManager( folderPath ) {
	if( folderPath != '' ) {
		mcImageManager.init(
			{ 
				path : '../../../../..'+folderPath,
				rootpath : '../../../../..'+folderPath,
				remove_script_host : true, 
				remember_last_path : false
			}
		);
	} else {
		mcImageManager.init(
			{ 
				remove_script_host : true, 
				remember_last_path : false
			}
		);		
	}
}

/***************************************************/
function tinymce_clearImage( elementId ) {
	if( elementId != '' ) {
		$('#'+elementId).val( '' );
		$('#'+elementId+'-src').attr( {'src' : 'img/spacer.gif', 'width':'5'} );		
		$('#view-image-button-'+elementId).hide();		
	}
}

/***************************************************/
function tinymce_setupFileManager( folderPath ) {
	if( folderPath != '' ) {
		mcFileManager.init(
			{ 
				path : '../../../../..'+folderPath,
				rootpath : '../../../../..'+folderPath,				
				remove_script_host : true, 
				remember_last_path : false,
				dialog_type : 'modal'
			}
		);
	} else {
		mcFileManager.init(
			{ 
				remove_script_host : true, 
				remember_last_path : false,
				dialog_type : 'modal'
			}
		);		
	}
}

/***************************************************/
function tinymce_clearFile( elementId ) {
	if( elementId != '' ) {
		$('#'+elementId).val( '' );
		$('#file-'+elementId).html( '' );
	}
}