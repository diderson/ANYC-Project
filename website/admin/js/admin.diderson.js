
$(document).ready(function() {	
/*bootbox.confirm("Are you sure?", function(result) {
});*/ 		
	$('#notification').hide(); //hidding notification div in list page to be displayed only something happened

	//launch file manager ------------- 
	 $('#iframe-btn-file-manager').fancybox({  
	 		'width'  : 900,
			'height'  : 600,
			'type'    : 'iframe',
			'autoScale'     : false
    });
	 
});//end document ready


/******************************************************/
/******************************************************/
function DataTableJavascriptClass(defaultSortColumn){
	//this.defaultSortColumn = defaultSortColumn; 
	var oTable = $('#dataTables-list-page').dataTable({
			// "sPaginationType": "full_numbers",
			// "bJQueryUI": false,
			// "bAutoWidth": false,
			// "bLengthChange": true,
			// "fnInitComplete": function(oSettings, json) {
		 //      $('.dataTables_filter>label>input').attr('id', 'search');
		 //    },
			// //"aaSorting": [[1,'asc'], [2,'desc']],
			// "aaSorting": this.defaultSortColumn,

			
				"bStateSave": true, // presumably saves state for reloads
				"fnDrawCallback": function() {
				  //bind the click handler script to the newly created elements held in the table
					$('.entry-status').bind('click', updateStatusField);
					$('.delete-button').unbind('click');
					$('.delete-button').bind('click', deleteRowFromTable);
				}
			
		});
	//var oSettings = oTable.fnSettings();
	//oSettings.oApi._fnDraw(oSettings);
}

/* ==========================================================================
		Update status Field in data table
	 ========================================================================== */		
function updateStatusField(){
	var idValue = $(this).data('identity');
	var entityAlias = $(this).data('entityalias');
	var entityName = $(this).data('entityname');
	var statusFieldName = $(this).data('statusfieldname');
	var statusFieldValue = $(this).data('statusfieldvalue');
	var statusImage = $(this).data('statusimage');
	var statusCurrentImage = $(this).data('statuscurrentimage');
	var Action = 'update';

	//sent request to Update with given id
	$.ajax({
		type: 'post',
		url: 'ajax/ajax-list.php',
		data: {idValue: idValue, entityAlias: entityAlias, Action: Action, statusFieldName: statusFieldName, statusFieldValue: statusFieldValue},
		success: function(updateResult) {
			if( updateResult == 1 ) {	
				if(statusFieldValue == 1){
					$('#statusDis'+idValue).hide();
					$('#statusEn'+idValue).show();
				}
				else{
					$('#statusDis'+idValue).show();
					$('#statusEn'+idValue).hide();
				}
				/*
				'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>'+entityName+'</strong> with ID '+idValue+' has been UPDATED with Success'
         '<strong>'+entityName+'</strong> with ID '+idValue+' has been UPDATED with Success'       
				*/
				$('#notification').html( '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>'+entityName+'</strong> with ID '+idValue+' has been UPDATED with Success');
				$('#notification').addClass('alert alert-success alert-dismissable');
				if( !$('#notification').is(":visible") ) $('#notification').show();	
			} else {
				//failed to update, sent noty in
				$('#notification').html('<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>ERROR</strong> UPDATING '+entityName+' with ID = '+idValue);
				$('#notification').addClass('alert alert-danger alert-dismissable');
				if( !$('#notification').is(":visible") ) $('#notification').show();	
			}
		}
	});

}

/* ==========================================================================
		Delete Action from data table
		========================================================================== */

function deleteRowFromTable(){
	var oTable = $('#dataTables-list-page').dataTable();
	var idValue = $(this).data('identity');
	var entityAlias = $(this).data('entityalias');
	var entityName = $(this).data('entityname');
	var Action = 'delete';

		//var id = $(this).attr('id').substr(4);
		//e.preventDefault();
		bootbox.confirm('<h3 class="title">Warning!</h3>Are you sure you want to delete <strong>'+entityName+'</strong> entry with ID = '+idValue+'?<br><br>Note that There is no undelete!', function(r) {
			if (r) {
				//sent request to delete order with given id
				$.ajax({
					type: 'post',
					url: 'ajax/ajax-list.php',
					data: {idValue: idValue, entityAlias: entityAlias, Action: Action},
					success: function(deleteResult) {
						if (deleteResult == 1 ) {
							//delete row
							//oTable.fnDraw(false)

							//oTable.bStateSave =  true; // presumably saves state for reloads
							/* when updating the table */
						
							//oTable.fnDeleteRow($('tr#tr' + idValue)[0]);
							var page_number = oTable.fnPagingInfo().iPage;

							oTable.fnDeleteRow(oTable.fnGetPosition($('tr#tr' + idValue)[0]), function(){oTable.fnPageChange(page_number);}, false);
							
							$('#notification').html('<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>'+entityName+'</strong> with ID '+idValue+' has been DELETED with Success');
							$('#notification').addClass('alert alert-success');
							if( !$('#notification').is(":visible") ) $('#notification').show();	
						} else {
							//failed to delete, sent noty in
							$('#notification').html('<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <strong>ERROR</strong> DELETING '+entityName+' entry with ID = '+idValue);
							$('#notification').addClass('alert alert-error');
							if( !$('#notification').is(":visible") ) $('#notification').show();	
						}
					}
				});
			}
		});
}


