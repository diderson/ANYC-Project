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
$entity = 'support';
require_once( 'includes/admin.authentication.php' );

//require_once( 'includes/isprofilecompleted.php' );

/******************************************************************************/
/******************************************************************************/
$smarty->assign( 'contentTemplate', 'templates-admin/content/support.tpl' );
$smarty->assign( 'sectionid', 'support' ); 
$smarty->assign( 'pageid', 'support' );
$smarty->assign( 'htmlpagetitle', 'Support Page' );
$smarty->assign( 'pagetitle', 'Support Page' );
//echo $_SESSION['BACKEND_ADMIN']['ADMIN_TYPE'];

/******************************************************************************/
// Display the template
/******************************************************************************/
$smarty->display( 'templates-admin/container.tpl', '', $backend_ID );

/******************************************************************************/
// Clear up
/******************************************************************************/
unset($smarty);

?>