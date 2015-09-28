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
require_once( 'config/config.admin.php' );
$entity = 'administrator';
require_once( 'includes/admin.authentication.php' );
require_once( 'includes/isprofilecompleted.php' );

// Edit per file
//$search_session_id = 'administrator';
require_once( 'includes/classes/mpmplgovernancereview.admin.class.php' );
$smarty->assign( 'sectionid', 'mp-mpl' ); 
$smarty->assign( 'pageid', 'governance-review' ); 

if ($_SESSION['BACKEND_ADMIN']['ADMIN_TYPE'] != 'councillor') {
  header( "Location: /admin" ); 
}	

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
$smarty->assign( 'contentTemplate', 'templates-admin/content/'.$pageObject->editContentTemplate );
$smarty->assign( 'htmlpagetitle', $pageObject->editHtmlPageTitle );	

$pageObject->getProvince ( $provinceData );
$smarty->assign( 'provinceData', $provinceData );	

$pageObject->getRatingMatrix( $ratingMatrixData );
$smarty->assign( 'ratingMatrixData', $ratingMatrixData );

$pageObject->getMpMplGovernanceReview($mpMplGovernanceData);
$smarty->assign( 'mpMplGovernanceData', $mpMplGovernanceData );

$pageObject->getMpMplGovernanceWorkAndPR ( $mpMplGovernancePRData);
$smarty->assign( 'mpMplGovernancePRData', $mpMplGovernancePRData );
//print_r($mpMplGovernancePRData);

$pageObject->getMpMplConstituencyReview ($mpMplConstituencyData);
$smarty->assign( 'mpMplConstituencyData', $mpMplConstituencyData );
	
/******************************************************************************/
/* Update / Add / AddAsNew functionality
/******************************************************************************/

if( $formAction != '' ) {	
	$redirect = false;
	$govreview = array();
	$mp_mpl_govreview_size = sizeof($_POST['mp_mpl_govreview_size']) + 1;

	$mp_mpl_govreview_total = sizeof($_POST['mp_mpl_govreview_size']);

	$mp_mpl_caucus_total = 2;


	$mp_mpl_constituency_total = sizeof($_POST['mp_mpl_constituency_size']);

	$mp_mpl_max = $mp_mpl_govreview_total + $mp_mpl_caucus_total + $mp_mpl_constituency_total  ;
	$sum_rate = 0;
	for ($i=1; $mp_mpl_govreview_size > $i; $i++) {
		$govreview['govreview_'.$i] = $_POST['govreview_'.$i] ;
		$sum_rate+= $_POST['govreview_'.$i] ;
	}
	
	$_POST['mp_mpl_govreview'] = json_encode($govreview);

	$mp_mpl_govpr_review = array();
	$mp_mpl_govpr_libele_1 = array();
	$mp_mpl_govpr_libele_2 = array();
	$mp_mpl_govpr_libele_3 = array();
	$mp_mpl_govpr_libele_4 = array();


	if (sizeof($_POST['committee']) > 0) {
		$committee = array();
		for ($i=0; $i < sizeof($_POST['committee']); $i++) { 
			if ( isset($_POST['committee'][$i]) && $_POST['committee'][$i] != '') {
				$committee[$i]['committee'] = trim( $_POST['committee'][$i] );
				if ( isset($_POST['meetings'][$i]) && $_POST['meetings'][$i] != '') $committee[$i]['meetings'] = trim( $_POST['meetings'][$i] );
				if ( isset($_POST['attendance'][$i]) && $_POST['attendance'][$i] != '') $committee[$i]['attendance'] = trim( $_POST['attendance'][$i] );
				if ( isset($_POST['rate_commitee'][$i]) && $_POST['rate_commitee'][$i] != '') $committee[$i]['rate_commitee'] = trim( $_POST['rate_commitee'][$i] );
				$sum_rate+= trim( $_POST['rate_commitee'][$i] );
				$mp_mpl_max += 1;
			}
		}
		$mp_mpl_govpr_review['mp_mpl_govpr_libele_1']['section_0'] = $committee ;
	}

	if (sizeof($_POST['topic']) > 0) {
		$debate = array();
		for ($i=0; $i < sizeof($_POST['topic']); $i++) {
			if ( isset($_POST['topic'][$i]) && $_POST['topic'][$i] != '') {
				$debate[$i]['topic'] = trim( $_POST['topic'][$i] );
				if ( isset($_POST['rate_topic'][$i]) && $_POST['rate_topic'][$i] != '') $debate[$i]['rate_topic'] = trim( $_POST['rate_topic'][$i] ); 
				$sum_rate+= trim( $_POST['rate_topic'][$i] );
				$mp_mpl_max += 1; 
			}
		}

		$mp_mpl_govpr_review['mp_mpl_govpr_libele_1']['section_1'] = $debate ;
	}

	$mp_mpl_govpr_review['mp_mpl_govpr_libele_1']['section_2'] = $_POST['caucus_1'] ;
	$mp_mpl_govpr_review['mp_mpl_govpr_libele_1']['section_3'] = $_POST['caucus_2'];

	$sum_rate+= $_POST['caucus_1'];
	$sum_rate+= $_POST['caucus_2'];

	if (sizeof($_POST['competency']) > 0) {
		for ($i=0; $i < sizeof($_POST['competency']); $i++) {
			$mp_mpl_govpr_review['mp_mpl_govpr_libele_2']['section_'.$i] = $_POST['competency'][$i] ;
			$sum_rate+= $_POST['competency'][$i];
			$mp_mpl_max += 1;
		}
	}

	if (sizeof($_POST['course']) > 0) {
		$course = array();
		for ($i=0; $i < sizeof($_POST['course']); $i++) {
			if ( isset($_POST['course'][$i]) && $_POST['course'][$i] != '') {
				$course[$i]['course'] = trim( $_POST['course'][$i] );
				if ( isset($_POST['date'][$i]) && $_POST['date'][$i] != '') $course[$i]['date'] = trim( $_POST['date'][$i] ); 
				if ( isset($_POST['rate_course'][$i]) && $_POST['rate_course'][$i] != '') $course[$i]['rate_course'] = trim( $_POST['rate_course'][$i] ); 
				$sum_rate+= $_POST['rate_course'][$i];
				$mp_mpl_max += 1;
			}
		}

		$mp_mpl_govpr_review['mp_mpl_govpr_libele_3']['section_0'] = $course ;
	}

	if (sizeof($_POST['strength']) > 0) {
		$strengthAndWeakness = array();
		for ($i=0; $i < sizeof($_POST['strength']); $i++) {
			if ( isset($_POST['strength'][$i]) && $_POST['strength'][$i] != '') $strengthAndWeakness[$i]['strength'] = trim( $_POST['strength'][$i] ); 
			if ( isset($_POST['weakness'][$i]) && $_POST['weakness'][$i] != '') $strengthAndWeakness[$i]['weakness'] = trim( $_POST['weakness'][$i] ); 
		}
		$mp_mpl_govpr_review['mp_mpl_govpr_libele_4'] = $strengthAndWeakness ;
	}

	if (sizeof($_POST['skill']) > 0) {
		$skills = array();
		for ($i=0; $i < sizeof($_POST['skill']); $i++) {
			if ( isset($_POST['skill'][$i]) && $_POST['skill'][$i] != '') $skills[$i]['skill'] = trim( $_POST['skill'][$i] ); 
		}

		$mp_mpl_govpr_review['mp_mpl_govpr_libele_5'] = $skills ;
	}

	$constreview = array();
  $mp_mpl_constituency_size = sizeof($_POST['mp_mpl_constituency_size']) + 1;

  for ($i=1; $mp_mpl_constituency_size > $i; $i++) {
    $constreview['constreview_'.$i] = $_POST['constreview_'.$i] ;
    $sum_rate+= $_POST['constreview_'.$i] ;
  }
  
  $_POST['mp_mpl_constreview'] = json_encode($constreview);


	$_POST['id_administrator'] = $id;
	$_POST['mp_mpl_govpr_review'] = json_encode($mp_mpl_govpr_review);
	//$_POST['mp_mpl_govpr_review'] = $mp_mpl_govpr_review;
	$_POST['mp_mpl_score'] = round((($sum_rate * 100) / ($mp_mpl_max*5)), 0) ;

	//echo $sum_rate;
	//echo '<br>'.($mp_mpl_max *5);

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