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
require_once( 'includes/classes/provsecgovernancereview.admin.class.php' );
$smarty->assign( 'sectionid', 'provsec' ); 
$smarty->assign( 'pageid', 'pr-review' ); 

if ($_SESSION['BACKEND_ADMIN']['ADMIN_TYPE'] != 'provincialsec') {
  header( "Location: /admin" ); 
}  

/******************************************************************************/
/* Get variables
/******************************************************************************/
require_once( 'includes/edit.variables.php' );
$id_administratoraccess = ( isset( $_POST['id_administratoraccess'] ) && $_POST['id_administratoraccess'] != '' ) ? $_POST['id_administratoraccess']: '';
//$id = $_SESSION['BACKEND_ADMIN']['ADMIN_ID'];
/******************************************************************************/
// Edit per file
/******************************************************************************/
$pageObject = new Provsecgovernancereview( $id, 'edit' );
$smarty->assign( 'contentTemplate', 'templates-admin/content/'.$pageObject->editContentTemplate );
$smarty->assign( 'htmlpagetitle', $pageObject->editHtmlPageTitle ); 


$pageObject->getProsecGovernanceReview ($prosecGovernanceData);
$smarty->assign( 'prosecGovernanceData', $prosecGovernanceData );

$pageObject->getOverPerformanceReview ($OverPerformanceData);
$smarty->assign( 'OverPerformanceData', $OverPerformanceData );

$pageObject->getRatingMatrix( $ratingMatrixData );
$smarty->assign( 'ratingMatrixData', $ratingMatrixData );

$pageObject->getMpMplGovernanceReview($mpMplGovernanceData);
$smarty->assign( 'mpMplGovernanceData', $mpMplGovernanceData );

$pageObject->getMpMplGovernanceWorkAndPR ( $mpMplGovernancePRData);
$smarty->assign( 'mpMplGovernancePRData', $mpMplGovernancePRData );
//print_r($mpMplGovernancePRData);

$pageObject->getMpMplConstituencyReview ($mpMplConstituencyData);
$smarty->assign( 'mpMplConstituencyData', $mpMplConstituencyData );

//print_r($mpMplGovernancePRData);

$idCouncillorAss = ( isset( $_GET['id'] ) && $_GET['id'] != '' ) ? $_GET['id']: '';
$pageObject->getCouncillorReview($idCouncillorAss, $editCouncillorAssData);
$smarty->assign( 'editCouncillorAssData', $editCouncillorAssData );

if (sizeof($editCouncillorAssData) == 0) {
  header( "Location: /admin/provsecreview-list" ); 
}
  
/******************************************************************************/
/* Update / Add / AddAsNew functionality
/******************************************************************************/

if( $formAction != '' ) {
 // $pageObject->id = $_SESSION['BACKEND_ADMIN']['ADMIN_ID'];
  $redirect = false;
  $preview = array();
  $provsec_preview_size = sizeof($_POST['provsec_preview_size']) + 1;

  for ($i=1; $provsec_preview_size > $i; $i++) {
    $preview['preview_'.$i] = $_POST['preview_'.$i] ;
  }
  
  $_POST['provsec_preview'] = json_encode($preview);

  $ovpefrating = array();
  $ovpefrating_size = sizeof($_POST['ovpefrating_size']) + 1;

  for ($i=1; $ovpefrating_size > $i; $i++) {
    $ovpefrating['ovpefrating_'.$i] = $_POST['ovpefrating_'.$i] ;
  }

  $_POST['provsec_ovpefrating'] = json_encode($ovpefrating);

  

  $_POST['id_administrator'] = $_SESSION['BACKEND_ADMIN']['ADMIN_ID'];
 // $_POST['mp_mpl_govpr_review'] = json_encode($mp_mpl_govpr_review);
  //$_POST['mp_mpl_govpr_review'] = $mp_mpl_govpr_review;

  //print_r($_POST); 
  //exit;

  //print_r($_POST);

  $processResult = $pageObject->processForm( $formAction, $_POST, $redirect );  
  $smarty->assign( 'processResult', $processResult );
      
  if( $processResult  != 0 ) {
    //$pageObject->updateProfileCompleted();  
  }
  
  $pageObject->redirect( $formAction );

}

/******************************************************************************/
/* Get edit data
/******************************************************************************/
if( $pageObject->id != '' ) {

  $pageObject->getEditData( $editData );
  
  //print_r($editData);
  $smarty->assign( 'editData', $editData );   
}

/******************************************************************************/
/******************************************************************************/
$smarty->assign( 'formAction', $formAction ); 
$smarty->assign( 'formUrl', $pageObject->getEditFormUrl() ); 

/******************************************************************************/
// Display the template
/******************************************************************************/
$smarty->display( 'templates-admin/container.tpl', '', $backend_ID );

/******************************************************************************/
// Clear up
/******************************************************************************/
unset($smarty);

?>