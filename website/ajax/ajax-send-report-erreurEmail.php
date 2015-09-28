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

$email_data['report_nom'] = ( isset( $_REQUEST['report_nom'] ) && $_REQUEST['report_nom'] != '')? trim( $_REQUEST['report_nom'] ) :'';
$email_data['report_email'] = ( isset( $_REQUEST['report_email'] ) && $_REQUEST['report_email'] != '')? trim( $_REQUEST['report_email'] ) :'';
$email_data['report_sujet'] = ( isset( $_REQUEST['report_sujet'] ) && $_REQUEST['report_sujet'] != '')? trim( $_REQUEST['report_sujet'] ) :'';
$email_data['report_message'] = ( isset( $_REQUEST['report_message'] ) && $_REQUEST['report_message'] != '')? trim( $_REQUEST['report_message'] ) :'';
$email_data['report_medoc'] = ( isset( $_REQUEST['report_medoc'] ) && $_REQUEST['report_medoc'] != '')? trim( $_REQUEST['report_medoc'] ) :'';
$email_data['report_linkmedoc'] = ( isset( $_REQUEST['report_linkmedoc'] ) && $_REQUEST['report_linkmedoc'] != '')? trim( $_REQUEST['report_linkmedoc'] ) :'';

/******************************************************************************/
// object and content
/******************************************************************************/
$reportErorObj = new AjaxSendEmail();

$reportErorObj->SendSignalErreurOmissionEmail($email_data['report_email'], $email_data['report_sujet'], $email_data );


?>