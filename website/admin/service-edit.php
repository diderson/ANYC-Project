<?php
/*	======================================================
	Diderson Baka Web Developer Developer - www.diderson.com
	------------------------------------------------------
	NOTE: This code is intellectual property of
	Diderson Baka  and may not be
	reproduced or used without prior permission.
	------------------------------------------------------
	Copyright 2014 Diderson Baka Web Developer 
	======================================================	*/
	
/******************************************************************************/
// Define includes
/******************************************************************************/
require_once( 'includes/bootstrap.php' );
require_once( 'config/config.admin.php' );
$entity = '"Service"';
$search_session_id = 'service';
require_once( 'includes/admin.authentication.php' );
// Edit per file
require_once( 'includes/classes/service.admin.class.php' );

/******************************************************************************/
/* Get variables
/******************************************************************************/
require_once( 'includes/edit.variables.php' );
/******************************************************************************/
// Edit per file
/******************************************************************************/
$pageObject = new Service( $id, 'edit' );
$smarty->assign( 'contentTemplate', 'templates-admin/content/'.$pageObject->editContentTemplate );
$smarty->assign( 'htmlpagetitle', $pageObject->editHtmlPageTitle );
$smarty->assign( 'sectionid', 'manage-service' ); 
$smarty->assign( 'pageid', 'service-edit' ); 

/******************************************************************************/
/* Update / Add / AddAsNew functionality
/******************************************************************************/
if( $formAction != '' ) {

	$processResult = $pageObject->processForm( $formAction, $_POST);	
	$smarty->assign( 'processResult', $processResult );

}
/******************************************************************************/
/* Get edit data
/******************************************************************************/
if( $pageObject->id != '' ) {
	$pageObject->getEditData( $editData );
	$smarty->assign( 'editData', $editData );
}
/******************************************************************************/
/******************************************************************************/
$smarty->assign( 'formAction', $formAction ); 
$smarty->assign( 'formUrl', $pageObject->getEditFormUrl() ); 
	
/******************************************************************************/
// Display the template
/******************************************************************************/
$smarty->display( 'templates-admin/container.tpl', '', $backend_ID );

/******************************************************************************/
// Clear up
/******************************************************************************/
unset($smarty);

?>