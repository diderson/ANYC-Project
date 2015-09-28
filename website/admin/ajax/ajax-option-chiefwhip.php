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
$idMunicipality = ( isset( $_REQUEST['idMunicipality'] ) && $_REQUEST['idMunicipality'] != '' ) ? $_REQUEST['idMunicipality']: '';

//print_r($_REQUEST);

/******************************************************************************/
// object and content
/******************************************************************************/
$chiefwhipObj = new AjaxData();
$chiefwhipData = $chiefwhipObj->GetChiefwhipByMunicipalityId( $idMunicipality );

$returnData = array();
$returnData['chiefwhipData'] = $chiefwhipData;
echo json_encode( $chiefwhipData );		
exit();	



?>