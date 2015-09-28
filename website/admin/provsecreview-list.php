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
$entity = '"Councillor Assessment"';
$search_session_id = 'Councillor Assessment';
require_once( 'includes/admin.authentication.php' );
// Edit per file
require_once( 'includes/classes/provsecgovernancereview.admin.class.php' );

if ($_SESSION['BACKEND_ADMIN']['ADMIN_TYPE'] == 'councillor' || $_SESSION['BACKEND_ADMIN']['ADMIN_TYPE'] == 'user' || $_SESSION['BACKEND_ADMIN']['ADMIN_TYPE'] == 'chiefwhip') {
 header( "Location: /admin" ); 
}

/******************************************************************************/
/* Get variables
/******************************************************************************/
require_once( 'includes/list.variables.php' );
$id = $_SESSION['BACKEND_ADMIN']['ADMIN_ID'];
/******************************************************************************/
// Edit per file
/******************************************************************************/
$pageObject = new Provsecgovernancereview( $id, 'list', $pageSize, $currentPage, $sort, $filters, $getVariables );

$smarty->assign( 'contentTemplate', 'templates-admin/content/'.$pageObject->listContentTemplate );
$smarty->assign( 'htmlpagetitle', $pageObject->listHtmlPageTitle );	
$smarty->assign( 'sectionid', 'provincialsec' ); 
$smarty->assign( 'pageid', 'pr-review' ); 

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