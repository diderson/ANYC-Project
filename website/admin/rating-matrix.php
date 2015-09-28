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
require_once( 'config/config.admin.php' );
$entity = 'administrator';
require_once( 'includes/admin.authentication.php' );

// Edit per file
//$search_session_id = 'administrator';
require_once( 'includes/classes/mpmplgovernancereview.admin.class.php' );
$smarty->assign( 'sectionid', 'mp-mpls' ); 
$smarty->assign( 'pageid', 'governance-reviews' );   

/******************************************************************************/
/* Get variables
/******************************************************************************/
require_once( 'includes/edit.variables.php' );
$id_administratoraccess = ( isset( $_POST['id_administratoraccess'] ) && $_POST['id_administratoraccess'] != '' ) ? $_POST['id_administratoraccess']: '';
$id = $_SESSION['BACKEND_ADMIN']['ADMIN_ID'];
/******************************************************************************/
// Edit per file
/******************************************************************************/
$pageObject = new Mpmplgovernancereview( $id, 'edit' );
$smarty->assign( 'contentTemplate', 'templates-admin/content/rating-matrix.tpl' );
$smarty->assign( 'htmlpagetitle', $pageObject->editHtmlPageTitle ); 

$pageObject->getProvince ( $provinceData );
$smarty->assign( 'provinceData', $provinceData ); 

$pageObject->getRatingMatrix( $ratingMatrixData );
$smarty->assign( 'ratingMatrixData', $ratingMatrixData );

$pageObject->editHtmlPageTitle = 'Rating Matrix';
$pageObject->insertPageTitle = 'Rating Matrix';
$pageObject->editPanelHeading = ' ';

//print_r($mpMplGovernancePRData);
  
/******************************************************************************/
/* Update / Add / AddAsNew functionality
/******************************************************************************/

if( $formAction != '' ) { 

}

/******************************************************************************/
/* Get edit data
/******************************************************************************/


/******************************************************************************/
/******************************************************************************/
$smarty->assign( 'formAction', $formAction ); 
$smarty->assign( 'formUrl', $pageObject->getEditFormUrl() ); 

$smarty->assign( 'htmlpagetitle', 'Rating Matrix' );
$smarty->assign( 'pagetitle', 'Rating Matrix' );

/******************************************************************************/
// Display the template
/******************************************************************************/
$smarty->display( 'templates-admin/container.tpl', '', $backend_ID );

/******************************************************************************/
// Clear up
/******************************************************************************/
unset($smarty);

?>