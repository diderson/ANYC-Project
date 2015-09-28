<?php

/******************************************************************************/
/* Process list actions
/******************************************************************************/
if( $action == "update" ) {
	$data[ $field ] = $value;
	$updateResult = $pageObject->processUpdate( $data );
	$smarty->assign( 'updateResult', $updateResult ); 	
} elseif( $action == "delete" ) {
	$deleteResult = $pageObject->processDelete( $id );
	$smarty->assign( 'deleteResult', $deleteResult ); 		
}

/******************************************************************************/
/* Get list and pagination data
/******************************************************************************/
$pageObject->getListData( $listData, $search_data, $filter );
if( $export == 1 && $pageObject->enableExportToCSV ) {
	
	$pageObject->exportPageTitleClients( $clientData, $search_data);
	ini_set('memory_limit','64M');
	$pageObject->exportToCSV( $search_data );
}
if( $pageObject->listFileName == 'entry-list.php') {
	if( is_array($search_data['id_client']) && sizeof($search_data['id_client']) == 1 ) {
		$display_invoice_checkbox = 1;
	} else{
		$display_invoice_checkbox = 0;
	}
	$smarty->assign('display_invoice_checkbox',$display_invoice_checkbox);
	
}
$smarty->assign( 'list', $listData ); 
$smarty->assign( 'listSize', sizeof($listData) ); 
$smarty->assign( 'search_data', $search_data ); 
$smarty->assign( 'search_dataSize', sizeof( $search_data ) ); 
$smarty->assignByRef( 'pageObject', $pageObject ); 
$pageObject->setupListPager( $search_data );
$smarty->assignByRef( 'pagerObject', $pageObject->listPagerObject ); 
$smarty->assign( 'formAction', $formAction ); 

?>