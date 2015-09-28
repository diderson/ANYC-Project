<?php
//check user is authenticated

if ( !isset( $_SESSION[$backend_ID]['ADMIN_ID'] ) ) {
	$fileUrl = "?referrer=".$_SERVER['SCRIPT_NAME'].(isset( $_SERVER['QUERY_STRING'] ) && trim( $_SERVER['QUERY_STRING'] ) != ''? '?'.trim( $_SERVER['QUERY_STRING'] ) : '' );
	header( "Location: ".Configurator::getInstance()->getSettings( "site_url" )."/admin/index".$fileUrl ); 
	exit();
}

if( $entity != 'dashboard' && $adminUserObj->accessControl( $entity ) == false ) { header( "Location: /admin/dashboard" ); exit(); }

//print_r($_SESSION);
?>
