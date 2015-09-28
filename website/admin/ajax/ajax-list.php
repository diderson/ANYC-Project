<?php
/*	======================================================
	Diderson Baka - www.diderson.com
	------------------------------------------------------
	NOTE: This code is intellectual property of
	Diderson Baka and may not be
	reproduced or used without prior permission.
	------------------------------------------------------
	Copyright 2014
	======================================================	*/
	
/******************************************************************************/
// Define includes
/******************************************************************************/
require_once( 'includes/bootstrap.php' );
//require_once( 'admin/includes/classes/ajax.data.admin.class.php' );
 //require_once('admin/includes/classes/entitymanager.class.php');

$entityAlias = ( isset( $_REQUEST[ 'entityAlias' ] ) && $_REQUEST[ 'entityAlias' ] != '' ) ? $_REQUEST[ 'entityAlias' ]: '';
$id  = ( isset( $_REQUEST['idValue'] ) && $_REQUEST['idValue'] != '' ) ? $_REQUEST['idValue']: '';
$Action = ( isset( $_REQUEST[ 'Action' ] ) && $_REQUEST[ 'Action' ] != '' ) ? $_REQUEST[ 'Action' ]: '';

$statusFieldValue = ( isset( $_REQUEST[ 'statusFieldValue' ] ) && $_REQUEST[ 'statusFieldValue' ] != '' ) ? $_REQUEST[ 'statusFieldValue' ]: '';
$statusFieldName = ( isset( $_REQUEST[ 'statusFieldName' ] ) && $_REQUEST[ 'statusFieldName' ] != '' ) ? $_REQUEST[ 'statusFieldName' ]: '';

//print_r($_REQUEST); exit;

if( isset( $entityAlias ) && '' != trim( $entityAlias ) ){
	require_once( 'admin/includes/classes/'.$entityAlias.'.admin.class.php' );
	//require_once( 'admin/includes/classes/todo.admin.class.php' );
	$ajaxObject = new $entityAlias( $id );
	if( $Action == 'delete'){
		$deleteResult = $ajaxObject->processDelete( $id );
		echo $deleteResult;
	}elseif( $Action == "update" ) {
	$data[ $statusFieldName ] = $statusFieldValue;
	$updateResult = $ajaxObject->processUpdate( $data );
	echo $updateResult;
	}
}
?>