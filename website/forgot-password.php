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

/******************************************************************************/
// Variables
/******************************************************************************/
$forgot = ( isset($_POST['button-forgot']) && $_POST['button-forgot'] != '')? trim( $_POST['button-forgot'] ) : '';

if ( isset($_SESSION['BACKEND_ADMIN']['ADMIN_ID'])) {
	header( 'Location: /' );
}
/*
/*****************************************************************************/
// object and content
/******************************************************************************/
$registerObj = new Register();
/******************************************************************************/
//Process Sign in
/******************************************************************************/
if ('forgot' == $forgot) {
	//Server side validation
	$validatorObj = new Validator( $_POST );
	$validatorObj->Required( 'email', 'email_address', 'Please enter a valid email address' );

	if ( false == $validatorObj->foundErrors()) {
		$email_address = ( isset($_POST['email_address']) && $_POST['email_address'] != '')? trim( $_POST['email_address'] ) : '';	

		//check if user is valid
		//$isUserValid = $registerObj->IsValidUser( $email_address, $annonce_user_password, $validUserData ) ;
		$isUserValid = $registerObj->IsValidEmailUser( $email_address );

		if ($isUserValid  > 0 ){

			//session variable    
			
			header( 'Location: /admin/?p=f' );
			exit();

		} else {
			$smarty->assign( 'registrationFormErrormsg', 'Please verify your information and try again... <br> P.S: use the email that you registered with.' );
		}

	} else { // Found errors
		$validation_errors = $validatorObj->listErrors();
		$smarty->assign( 'validation_errors', $validation_errors );	
		//print_r($validation_errors);	
	}
} else {
	//$smarty->assign( 'errormsgLogin', 'S.V.P vérifier vos informations et réessayer.' );
}

//echo'<br>';
//print_r($_GET);
//print_r($_SESSION);
//print_r($_POST);



/******************************************************************************/
/******************************************************************************/
$smarty->assign( 'contentTemplate', 'templates/content/forgot-password.tpl' );
$smarty->assign( 'sectionid', 'index' ); 
$smarty->assign( 'pageid', 'index' );
$smarty->assign( 'htmlpagetitle', '243.cd' );
$smarty->assign( 'pagetitle', 'Connection' );
$smarty->assign( 'breadcrumbs', 'Connection' );

/******************************************************************************/
// Display the template
/******************************************************************************/
$smarty->display( 'templates/container.tpl');

/******************************************************************************/
// Clear up
/******************************************************************************/
unset($smarty);

?>