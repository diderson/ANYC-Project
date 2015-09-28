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

/******************************************************************************/
// Define includes
/******************************************************************************/
require_once( 'includes/bootstrap.php' );

/******************************************************************************/
// Variables
/******************************************************************************/

$email_data = array();

//$email_data['wmessage'] = ( isset( $_REQUEST['wmessage'] ) && $_REQUEST['wmessage'] != '')? trim( $_REQUEST['wmessage'] ) :'';
$email_data['newsletter_email'] = ( isset( $_REQUEST['wemail'] ) && $_REQUEST['wemail'] != '')? trim( $_REQUEST['wemail'] ) :'';

/******************************************************************************/
// object and content
/******************************************************************************/
$reportErorObj = new AjaxSendEmail();

//$reportErorObj->SendQuickContactEmail($email_data['wemail'], $email_data );
$reportErorObj->registerForNewsletter( $email_data ) ;


?>