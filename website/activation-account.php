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
$data = ( isset($_GET['data']) && $_GET['data'] != '')? trim( $_GET['data'] ) : '';

if ( isset($_SESSION['BACKEND_ADMIN']['ADMIN_ID'])) {
	header( 'Location: /' );
}

/*****************************************************************************/
// object and content
/******************************************************************************/
$registerObj = new Register();

if ($data != '') {
	$isUserValid = $registerObj->IsValidAmdLink( $data );

	if ($isUserValid  > 0 ){
		header( 'Location: /admin/?p=acts' );
	} else {
		header( 'Location: /admin/?p=acty' );
	}
} else {
	header( 'Location: /admin/?p=actf' );
}

?>