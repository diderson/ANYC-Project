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
require_once( 'includes/classes/mpmplconstituencyreview.admin.class.php' );
$smarty->assign( 'sectionid', 'mp-mpl' ); 
$smarty->assign( 'pageid', 'constituency-review' );   

/******************************************************************************/
/* Get variables
/******************************************************************************/
require_once( 'includes/edit.variables.php' );
$id_administratoraccess = ( isset( $_POST['id_administratoraccess'] ) && $_POST['id_administratoraccess'] != '' ) ? $_POST['id_administratoraccess']: '';
$id = $_SESSION['BACKEND_ADMIN']['ADMIN_ID'];
/******************************************************************************/
// Edit per file
/******************************************************************************/
$pageObject = new Mpmplconstituencyreview( $id, 'edit' );
$smarty->assign( 'contentTemplate', 'templates-admin/content/'.$pageObject->editContentTemplate );
$smarty->assign( 'htmlpagetitle', $pageObject->editHtmlPageTitle ); 


$pageObject->getMpMplConstituencyReview ($mpMplConstituencyData);
$smarty->assign( 'mpMplConstituencyData', $mpMplConstituencyData );
//print_r($mpMplGovernancePRData);
  
/******************************************************************************/
/* Update / Add / AddAsNew functionality
/******************************************************************************/

if( $formAction != '' ) { 
  $redirect = false;
  $constreview = array();
  $mp_mpl_constituency_size = sizeof($_POST['mp_mpl_constituency_size']) + 1;

  for ($i=1; $mp_mpl_constituency_size > $i; $i++) {
    $constreview['constreview_'.$i] = $_POST['constreview_'.$i] ;
  }
  
  $_POST['mp_mpl_constreview'] = json_encode($constreview);

  

  $_POST['id_administrator'] = $id;
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