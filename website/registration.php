<?php
/*  ======================================================
  Diderson Baka Web Developer Developer - www.diderson.com
  ------------------------------------------------------
  NOTE: This code is intellectual property of
  Diderson Baka  and may not be
  reproduced or used without prior permission.
  ------------------------------------------------------
  Copyright 2015 Diderson Baka Web Developer 
  ======================================================  */
  
/******************************************************************************/
// Define includes
/******************************************************************************/
require_once( 'includes/bootstrap.php' );

/******************************************************************************/
// Variables
/******************************************************************************/

$p = ( isset($_GET['p']) && $_GET['p'] != '')? trim( $_GET['p'] ) : '';
$smarty->assign( 'p', $p );

$submit = ( isset($_POST['button-insert']) && $_POST['button-insert'] != '')? trim( $_POST['button-insert'] ) : '';	

if ( isset($_SESSION['BACKEND_ADMIN']['ADMIN_ID'])) {
	header( 'Location: /' );
}
/******************************************************************************/
// object and content
/******************************************************************************/

/******************************************************************************/
//Process Form
/******************************************************************************/
if( 'Insert' == $submit ) {
	//Server side validation

	$validatorObj = new Validator( $_POST );
	$validatorObj->Required( 'text', 'first_name', 'Please enter your first name' );	
	$validatorObj->Required( 'text', 'last_name', 'Please enter your last name' );	
	$validatorObj->Required( 'email', 'email_address', 'Please enter a valid email address' );	
	$validatorObj->Required( 'text', 'password', 'Please enter your password' );	
	$validatorObj->Required( 'equalTo', array('first_element'=>'password','second_element'=>'confirm_password'), 'Your password and confirmation password must match' );


	if ( false == $validatorObj->foundErrors()) {

		$registerObj = new Register();
		$newUserData = array();
		$newUserData[ 'first_name' ] = ( isset($_POST['first_name']) && $_POST['first_name'] != '')? trim( $_POST['first_name'] ) : '';
		$newUserData[ 'last_name' ] = ( isset($_POST['last_name']) && $_POST['last_name'] != '')? trim( $_POST['last_name'] ) : '';
		$newUserData[ 'email_address' ] = ( isset($_POST['email_address']) && $_POST['email_address'] != '')? trim( $_POST['email_address'] ) : '';
		$newUserData[ 'amdlink' ] = md5($newUserData[ 'email_address' ].$newUserData[ 'first_name' ].$newUserData[ 'last_name' ]);
		//$newUserData[ 'annonce_user_telephone' ] = ( isset($_POST['annonce_user_telephone']) && $_POST['annonce_user_telephone'] != '')? trim( $_POST['annonce_user_telephone'] ) : '';
		
		$newUserData[ 'id_administratortype' ] = '5';
		$newUserData[ 'cdate' ] = date( 'Y-m-d H:i:s' );
		$newUserData[ 'administrator_status' ] = '0';
		//$newUserData[ 'annonce_user_ip' ] = $annonceObj->get_client_ip();


    #encryption password        
    if ( isset( $_POST['password'] ) && trim( $_POST['password'] ) != '' ) {
     
        $password = $_POST['password'];
        $_POST['password'] = $registerObj->encrypt( $_POST['password'] );
         
    } else {
            unset( $_POST['password'] );
    }
//exit('diderson here works');
    $newUserData[ 'password' ] = $_POST['password'];
    //print_r($newUserData);
     #check if user exist
    $isUserExist = $registerObj->IsUserExist( $newUserData[ 'email_address' ]);

     
    if ( $isUserExist == 0 ) {
         
        $idUser = $registerObj->saveNewUser($newUserData[ 'email_address' ], $newUserData);
 
        } else {
            $smarty->assign( 'registrationFormErrormsg', 'Email already in use, try again with different information.' );
    }
	
		//$idUser = $registerObj->saveNewUser($newUserData);
		//$idUser = 1;
		if ( isset( $idUser ) &&  $idUser > 0  ) {
			// if (isset($_FILES) && sizeof($_FILES) > 0) {
			// 	if ($_FILES['imageUpload']['error'] == 0 ){
			// 		$image_name = $_FILES['imageUpload']['name']; //file name
			// 		$image_size = $_FILES['imageUpload']['size']; //file size
			// 		$image_temp = $_FILES['imageUpload']['tmp_name']; //file temp
			// 		$registerObj->resizeAndUploadImage($idUser, $image_name, $image_size, $image_temp);
			// 	}
			// }

			header( 'Location: /admin/?p=s' );
		}

	} else { // Found errors
		$validation_errors = $validatorObj->listErrors();
		$smarty->assign( 'validation_errors', $validation_errors );	
		//print_r($validation_errors);	
	}
}

//print_r($newsData);

/******************************************************************************/
/******************************************************************************/
$smarty->assign( 'contentTemplate', 'templates/content/registration.tpl' );
$smarty->assign( 'sectiop', 'news' ); 
$smarty->assign( 'pageid', 'news' );
$smarty->assign( 'htmlpagetitle', 'ANC cancellor\'s Registration' );
$smarty->assign( 'pagetitle', 'ANC cancellor\'s Registration' );

/******************************************************************************/
// Display the template
/******************************************************************************/
$smarty->display( 'templates/container.tpl');

/******************************************************************************/
// Clear up
/******************************************************************************/
unset($smarty);

?>