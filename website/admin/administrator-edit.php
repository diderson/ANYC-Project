<?php
/*	======================================================
	Diderson Baka Web Developer Developer - www.diderson.com
	------------------------------------------------------
	NOTE: This code is intellectual property of
	Diderson Baka  and may not be
	reproduced or used without prior permission.
	------------------------------------------------------
	Copyright 2015 Diderson Baka Web Developer 
	======================================================	*/
	
/******************************************************************************/
// Define includes
/******************************************************************************/
require_once( 'includes/bootstrap.php' );
require_once( 'config/config.admin.php' );
$entity = 'administrator';
require_once( 'includes/admin.authentication.php' );

// Edit per file
//$search_session_id = 'administrator';
require_once( 'includes/classes/administrator.admin.class.php' );
$smarty->assign( 'sectionid', 'manage-administrators' ); 
$smarty->assign( 'pageid', 'administrator-edit' ); 	

/******************************************************************************/
/* Get variables
/******************************************************************************/
require_once( 'includes/edit.variables.php' );
$id_administratoraccess = ( isset( $_POST['id_administratoraccess'] ) && $_POST['id_administratoraccess'] != '' ) ? $_POST['id_administratoraccess']: '';

/******************************************************************************/
// Edit per file
/******************************************************************************/
$pageObject = new Administrator( $id, 'edit' );
$smarty->assign( 'contentTemplate', 'templates-admin/content/'.$pageObject->editContentTemplate );
$smarty->assign( 'htmlpagetitle', $pageObject->editHtmlPageTitle );	

$pageObject->getAdministratorType( $administratorType );	
$smarty->assign( 'administratorType', $administratorType ); 		

$pageObject->getAdministratorAccess( $administratorAccess );	
$smarty->assign( 'administratorAccess', $administratorAccess ); 		
	
/******************************************************************************/
/* Update / Add / AddAsNew functionality
/******************************************************************************/

if( $formAction != '' ) {	
	$redirect = false;
	if( isset( $_POST['password'] ) && trim( $_POST['password'] ) != '' ) {
		$_POST['password'] = $pageObject->encrypt( $_POST['password'] );
	} else {
		unset( $_POST['password'] );
	}
	$processResult = $pageObject->processForm( $formAction, $_POST, $redirect );	
	$smarty->assign( 'processResult', $processResult );
	 		
	if( $processResult  != 0 ) {
		$pageObject->setAdministratorAccess( $id_administratoraccess ,$formAction );	
	}
	
	$pageObject->redirect( $formAction );

}

/******************************************************************************/
/* Get edit data
/******************************************************************************/
if( $pageObject->id != '' ) {

	$pageObject->getEditData( $editData );
	$smarty->assign( 'editData', $editData ); 
	
	$pageObject->getAdministratorAccessIds( $adminAcceessData );
	$smarty->assign( 'adminAcceessData', $adminAcceessData ); 	
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