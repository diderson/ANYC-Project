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
$entity = 'administrator-access';
$search_session_id = 'administrator-access';
require_once( 'includes/admin.authentication.php' );

// Edit per file
$search_session_id = 'administrator-access';
require_once( 'includes/classes/administratoraccess.admin.class.php' );
$smarty->assign( 'sectionid', 'manage-administrators' ); 
$smarty->assign( 'pageid', 'administrator-access-list' ); 

/******************************************************************************/
/* Get variables
/******************************************************************************/
require_once( 'includes/list.variables.php' );

/******************************************************************************/
// Edit per file
/******************************************************************************/
$pageObject = new AdministratorAccess( $id, 'list', $pageSize, $currentPage, $sort );
$smarty->assign( 'contentTemplate', 'templates-admin/content/'.$pageObject->listContentTemplate );
$smarty->assign( 'htmlpagetitle', $pageObject->listHtmlPageTitle );	

/******************************************************************************/
// Common list functionality
/******************************************************************************/
require_once( 'includes/list.common.php' );

/******************************************************************************/
// Display the template
/******************************************************************************/
$smarty->display( 'templates-admin/container.tpl', '', $backend_ID );

/******************************************************************************/
// Clear up
/******************************************************************************/
unset($smarty);
?>