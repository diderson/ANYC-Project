<?php

/*	======================================================
	Skipjack IT Solutions CC - www.skipjack.co.za
	------------------------------------------------------
	NOTE: This code is intellectual property of
	Skipjack IT Solutions CC and may not be
	reproduced or used without prior permission.
	------------------------------------------------------
	Copyright 2009 Skipjack IT Solutions CC
	======================================================	*/

// Smarty is enabled by default. 
// Set $adodbEnabled = false in the page to deactivate the database connection
if( isset( $smartyEnabled ) && $smartyEnabled === false ) $smartyEnabled = false;
else $smartyEnabled = true;	

global $smarty;

if( $smartyEnabled ) {

	// Setup Smarty
	require_once( 'components/smarty/Smarty.class.php' );	
	
	$smarty = new Smarty;
	
	// Config smarty debug build setup.
	$smarty->debugging = false;

	// Set smarty cache settings
	$smarty->caching = false;
	$smarty->compile_check = true; //don't check for dependent file changes

	// Set smarty folders
	$smarty->template_dir = array( './templates/', '.', Configurator::getInstance()->getSettings( 'site_root' ).'/templates/' );	
	$smarty->compile_dir = ( Configurator::getInstance()->getSettings( 'site_root' ).'/cache/smarty_compile/' );
	$smarty->config_dir = array( '.', Configurator::getInstance()->getSettings( 'site_root' ).'/components/smarty/config/');
	$smarty->cache_dir = Configurator::getInstance()->getSettings( 'site_root' ).'/cache/smarty_cache/';	
	
	$smarty->plugins_dir = array(
			 Configurator::getInstance()->getSettings( 'site_root' ).'/components/smarty/plugins/',
			 Configurator::getInstance()->getSettings( 'site_root' ).'/components/smarty_plugins/',
			 Configurator::getInstance()->getSettings( 'site_root' ).'/components/smarty/plugins-diderson/' );			 
	
	// Set in compile always more for dev only!!
	if ( strpos( $_SERVER['HTTP_HOST'],'diderson' ) !== false ) {
		//$smarty->force_compile = true;
	}
	
	// Generic variables assisgned in smarty
	$smarty->assign( 'siteUrl', Configurator::getInstance()->getSettings( 'site_url' ) );
	$smarty->assign( 'siteRoot', Configurator::getInstance()->getSettings( 'site_root' ) );
	$smarty->assign( 'googleAnalytics', Configurator::getInstance()->getSettings( 'google_analytics' ));
	$smarty->assign( 'siteType', Configurator::getInstance()->getSettings( 'site_type' ) );	
	$smarty->assign( 'fileUrl', basename($_SERVER['SCRIPT_NAME']).(isset( $_SERVER['QUERY_STRING'] ) && trim( $_SERVER['QUERY_STRING'] ) != ''? '?'.trim( $_SERVER['QUERY_STRING'] ) : '' ) );	
	
}

?>