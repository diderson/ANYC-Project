/*$.fn.dataTableExt.oApi.fnStandingRedraw = function(oSettings) {
    //redraw to account for filtering and sorting
    // concept here is that (for client side) there is a row got inserted at the end (for an add)
    // or when a record was modified it could be in the middle of the table
    // that is probably not supposed to be there - due to filtering / sorting
    // so we need to re process filtering and sorting
    // BUT - if it is server side - then this should be handled by the server - so skip this step
    if(oSettings.oFeatures.bServerSide === false){
        var before = oSettings._iDisplayStart;
        oSettings.oApi._fnReDraw(oSettings);
        //iDisplayStart has been reset to zero - so lets change it back
        oSettings._iDisplayStart = before;
        oSettings.oApi._fnCalculateEnd(oSettings);
    }
      
    //draw the 'current' page
    oSettings.oApi._fnDraw(oSettings);
};*/
/*============================================================
	The following code keep the state of the page after deleting a row or doing any updates
=============================================================================================*/
$.fn.dataTableExt.oApi.fnPagingInfo = function ( oSettings ) {

    return {

        "iStart": oSettings._iDisplayStart,

        "iEnd": oSettings.fnDisplayEnd(),

        "iLength": oSettings._iDisplayLength,

        "iTotal": oSettings.fnRecordsTotal(),

        "iFilteredTotal": oSettings.fnRecordsDisplay(),

        "iPage": Math.ceil( oSettings._iDisplayStart / oSettings._iDisplayLength ),

        "iTotalPages": Math.ceil( oSettings.fnRecordsDisplay() / oSettings._iDisplayLength )

    };

};