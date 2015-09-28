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
require_once( 'includes/classes/administrator.admin.class.php' );

$p = ( isset($_GET['p']) && $_GET['p'] != '')? trim( $_GET['p'] ) : '';
$smarty->assign( 'p', $p );

/******************************************************************************/
/* Get variables
/******************************************************************************/
$submitloginform = ( isset( $_POST['submitloginform'] ) && $_POST['submitloginform'] != '' ) ? $_POST['submitloginform'] : '';
$loginemail = ( isset( $_POST['loginemail'] ) && $_POST['loginemail'] != '' ) ? $_POST['loginemail'] : '';
$loginpassword = ( isset( $_POST['loginpassword'] ) && $_POST['loginpassword'] != '' ) ? $_POST['loginpassword'] : '';
$action = ( isset( $_GET['action'] ) && $_GET['action'] != '' ) ? $_GET['action'] : '';
$referrer = ( isset( $_GET['referrer'] ) && $_GET['referrer'] != '' ) ? $_GET['referrer'] : '';
$referrer = ( isset( $_POST['referrer'] ) && $_POST['referrer'] != '' ) ? $_POST['referrer'] : $referrer;

$smarty->assign( 'referrer', $referrer );

/******************************************************************************/
/* Process Login / Logout
/******************************************************************************/
if( $submitloginform == 'true' && $loginemail != '' && $loginpassword != '' ) {

	$adminUserObj = new Administrator();
	$adminUserObj->login( $loginSuccess, $loginemail, $loginpassword );	
	
	if( $loginSuccess && isset( $adminUserObj->id_administrator ) && $adminUserObj->id_administrator != '' && isset( $_SESSION[$backend_ID]['ADMIN_ID'] ) && trim( $_SESSION[$backend_ID]['ADMIN_ID'] ) != '' ) {		
		$smarty->assign( 'loginSuccess', 'true' );
		if( $referrer != '' ) {
			header( 'Location:'.$referrer );
			exit();			
		} else {
			$adminUserObj->redirectLogin();
		}
	} else {
		$smarty->assign( 'loginemail', $loginemail );	
		$smarty->assign( 'loginSuccess', 'false' );	
	}
	
} elseif( $action == 'logout' ) {

	$adminUserObj = new Administrator();
	$adminUserObj->logout();	
	unset( $adminUserObj );

} elseif ( isset( $_SESSION[$backend_ID]['ADMIN_ID'] ) && intval( trim( $_SESSION[$backend_ID]['ADMIN_ID' ] ) ) > 0 ) {
	header( 'Location: dashboard' );
	exit();
}

/******************************************************************************/
// Display the template
/******************************************************************************/
$smarty->assign( 'pageid', 'index' ); 
$smarty->display( 'templates-admin/index.tpl', '', $backend_ID );

/******************************************************************************/
// Clear up
/******************************************************************************/
unset($smarty);

?>