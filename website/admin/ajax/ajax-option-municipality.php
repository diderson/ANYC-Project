<?php
/*	======================================================
	Diderson Baka - www.diderson.com
	------------------------------------------------------
	NOTE: This code is intellectual property of
	Diderson Baka and may not be
	reproduced or used without prior permission.
	------------------------------------------------------
	Copyright 2015
	======================================================	*/

/******************************************************************************/
// Define includes
/******************************************************************************/
require_once( 'includes/bootstrap.php' );
require_once( 'admin/includes/classes/ajax.data.admin.class.php' );

/******************************************************************************/
// Variables
/******************************************************************************/
$Idprovince = ( isset( $_REQUEST['Idprovince'] ) && $_REQUEST['Idprovince'] != '' ) ? $_REQUEST['Idprovince']: '';

//print_r($_REQUEST);

/******************************************************************************/
// object and content
/******************************************************************************/
$municipalityObj = new AjaxData();
$municipalityData = $municipalityObj->GetMunicipalityByIdProvince( $Idprovince );

$returnData = array();
$returnData['municipalityData'] = $municipalityData;
echo json_encode( $municipalityData );		
exit();	



?>