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

// Edit per file
//$search_session_id = 'administrator';
require_once( 'includes/classes/memberinfo.admin.class.php' );
$smarty->assign( 'sectionid', 'manage-administrators' ); 
$smarty->assign( 'pageid', 'administrator-edit' ); 	

/******************************************************************************/
/* Get variables
/******************************************************************************/
require_once( 'includes/edit.variables.php' );
$id_administratoraccess = ( isset( $_POST['id_administratoraccess'] ) && $_POST['id_administratoraccess'] != '' ) ? $_POST['id_administratoraccess']: '';
$id = $_SESSION['BACKEND_ADMIN']['ADMIN_ID'];
/******************************************************************************/
// Edit per file
/******************************************************************************/
$pageObject = new Memberinfo( $id, 'edit' );
$smarty->assign( 'contentTemplate', 'templates-admin/content/'.$pageObject->editContentTemplate );
$smarty->assign( 'htmlpagetitle', $pageObject->editHtmlPageTitle );	

$smarty->assign( 'sectionid', 'member-info-edit' ); 
$smarty->assign( 'pageid', 'member-info-edit' ); 

$pageObject->getProvince ( $provinceData );
$smarty->assign( 'provinceData', $provinceData );	
	
/******************************************************************************/
/* Update / Add / AddAsNew functionality
/******************************************************************************/

if( $formAction != '' ) {	
	$redirect = false;
	$profile_phone = array();
	$profile_phone[ 'profile_home_telephone' ] = ( isset($_POST['profile_home_telephone']) && $_POST['profile_home_telephone'] != '')? trim( $_POST['profile_home_telephone'] ) : '';
	$profile_phone[ 'profile_work_telephone' ] = ( isset($_POST['profile_work_telephone']) && $_POST['profile_work_telephone'] != '')? trim( $_POST['profile_work_telephone'] ) : '';
	$profile_phone[ 'profile_mobile' ] = ( isset($_POST['profile_mobile']) && $_POST['profile_mobile'] != '')? trim( $_POST['profile_mobile'] ) : '';
	$_POST['profile_phone'] = json_encode($profile_phone);

	$profile_socialnetwork = array();
	$profile_socialnetwork[ 'profile_bbm' ] = ( isset($_POST['profile_bbm']) && $_POST['profile_bbm'] != '')? trim( $_POST['profile_bbm'] ) : '';
	$profile_socialnetwork[ 'profile_twitter' ] = ( isset($_POST['profile_twitter']) && $_POST['profile_twitter'] != '')? trim( $_POST['profile_twitter'] ) : '';
	$profile_socialnetwork[ 'profile_facebook' ] = ( isset($_POST['profile_facebook']) && $_POST['profile_facebook'] != '')? trim( $_POST['profile_facebook'] ) : '';
	$_POST['profile_socialnetwork'] = json_encode($profile_socialnetwork);

	$profile_academic = array();

	if (sizeof($_POST['academic_year']) > 0) {
		for ($i=0; sizeof($_POST['academic_year']) > $i; $i++) {
			if ( isset($_POST['academic_year'][$i]) && $_POST['academic_year'][$i] != '') $profile_academic[$i]['academic_year'] = trim( $_POST['academic_year'][$i] );
			if ( isset($_POST['academic_institut'][$i]) && $_POST['academic_institut'][$i] != '') $profile_academic[$i]['academic_institut'] = trim( $_POST['academic_institut'][$i] );
			if ( isset($_POST['academic_qualification'][$i]) && $_POST['academic_qualification'][$i] != '') $profile_academic[$i]['academic_qualification'] = trim( $_POST['academic_qualification'][$i] );
		}
	}

	$academic['academic'] = $profile_academic;
	$_POST['profile_academic'] = json_encode($academic);

	$profile_employement = array();

	if (sizeof($_POST['employment_institut']) > 0) {
		for ($i=0; sizeof($_POST['employment_institut']) > $i; $i++) {
			if ( isset($_POST['employment_institut'][$i]) && $_POST['employment_institut'][$i] != '') $profile_employement[$i]['employment_institut'] = trim( $_POST['employment_institut'][$i] );
			if ( isset($_POST['employment_position'][$i]) && $_POST['employment_position'][$i] != '') $profile_employement[$i]['employment_position'] = trim( $_POST['employment_position'][$i] );
			if ( isset($_POST['employment_startyear'][$i]) && $_POST['employment_startyear'][$i] != '') {
				$profile_employement[$i]['employment_year'] = trim( $_POST['employment_startyear'][$i] );
			}

			if ( isset($_POST['employment_endyear'][$i]) && $_POST['employment_endyear'][$i] != '') {
				$profile_employement[$i]['employment_year'] .='-';
				$profile_employement[$i]['employment_year'] .= trim( $_POST['employment_endyear'][$i] );
			}
		}
	}

	$employment['employment'] = $profile_employement;
	$_POST['profile_employement'] = json_encode($employment);

	$profile_ancmember = array();
	$profile_ancmember[ 'ancmember_number' ] = ( isset($_POST['ancmember_number']) && $_POST['ancmember_number'] != '')? trim( $_POST['ancmember_number'] ) : '';
	$profile_ancmember[ 'ancmember_branch' ] = ( isset($_POST['ancmember_branch']) && $_POST['ancmember_branch'] != '')? trim( $_POST['ancmember_branch'] ) : '';
	$profile_ancmember[ 'ancmember_province' ] = ( isset($_POST['ancmember_province']) && $_POST['ancmember_province'] != '')? trim( $_POST['ancmember_province'] ) : '';
	$profile_ancmember[ 'ancmember_region' ] = ( isset($_POST['ancmember_region']) && $_POST['ancmember_region'] != '')? trim( $_POST['ancmember_region'] ) : '';
	$_POST['profile_ancmember'] = json_encode($profile_ancmember);

	$profile_leaderposition = array();
	if ( isset($_POST['leadership_anc']) && $_POST['leadership_anc'] != '') $profile_leaderposition[ 'leadership_anc' ] = trim( $_POST['leadership_anc'] );
	if ( isset($_POST['leadership_womenleague']) && $_POST['leadership_womenleague'] != '') $profile_leaderposition[ 'leadership_womenleague' ] = trim( $_POST['leadership_womenleague'] );
	if ( isset($_POST['leadership_youthleague']) && $_POST['leadership_youthleague'] != '') $profile_leaderposition[ 'leadership_youthleague' ] = trim( $_POST['leadership_youthleague'] );
	if ( isset($_POST['leadership_sacp']) && $_POST['leadership_sacp'] != '') $profile_leaderposition[ 'leadership_sacp' ] = trim( $_POST['leadership_sacp'] );
	if ( isset($_POST['leadership_cosatu']) && $_POST['leadership_cosatu'] != '') $profile_leaderposition[ 'leadership_cosatu' ] = trim( $_POST['leadership_cosatu'] );
	if ( isset($_POST['leadership_sanco']) && $_POST['leadership_sanco'] != '') $profile_leaderposition[ 'leadership_sanco' ] = trim( $_POST['leadership_sanco'] );
	if ( isset($_POST['leadership_mkmva']) && $_POST['leadership_mkmva'] != '') $profile_leaderposition[ 'leadership_mkmva' ] = trim( $_POST['leadership_mkmva'] );
	if ( isset($_POST['leadership_veterans']) && $_POST['leadership_veterans'] != '') $profile_leaderposition[ 'leadership_veterans' ] = trim( $_POST['leadership_veterans'] );


	$_POST['profile_leaderposition'] = json_encode($profile_leaderposition);
	$_POST['id_administrator'] = $_SESSION['BACKEND_ADMIN']['ADMIN_ID'];

	//print_r($_POST);

	$processResult = $pageObject->processForm( $formAction, $_POST, $redirect );	
	$smarty->assign( 'processResult', $processResult );
	 		
	if( $processResult  != 0 ) {
		$pageObject->updateProfileCompleted($_POST['id_municipality']);	
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