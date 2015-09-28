<?php

/*	======================================================
	Diderson Baka - www.diderson.com
	------------------------------------------------------
	NOTE: This code is intellectual property of
	Diderson Baka and may not be
	reproduced or used without prior permission.
	------------------------------------------------------
	Copyright 2013
	======================================================	*/

require_once( 'includes/classes/administrator.admin.class.php' );

//This variable is used as a postfix for all session variables (in order to allow mutliple backends to run off the same site)
global $backend_ID;
$backend_ID = 'BACKEND_ADMIN';

$adminUserObj = new Administrator( $_SESSION[$backend_ID]['ADMIN_ID'] );
$adminUserObj->adminType = $_SESSION[$backend_ID]['ADMIN_TYPE'];
$smarty->assign( 'adminType', $adminUserObj->adminType );

$smarty->assignByRef( 'adminUserObj', $adminUserObj );
$pageObject = new EntityManager();
$smarty->assignByRef( 'pageObject', $pageObject );


//print_r( $_SESSION );
	
?>