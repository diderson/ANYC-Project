<?php
ob_start();
/*	======================================================
	Diderson Baka - www.diderson.com
	------------------------------------------------------
	NOTE: This code is intellectual property of
	Diderson Baka and may not be
	reproduced or used without prior permission.
	------------------------------------------------------
	Copyright 2013
	======================================================	*/

// Start session
session_start();
require_once( 'includes/config/configurator.class.php' );

//Include Smarty
require_once( 'includes/config/smarty.config.php' );
Configurator::getInstance()->smarty = $smarty;

//Common
if( strrpos( $_SERVER['SCRIPT_NAME'], '/admin/' ) === false ) {
	require_once( 'includes/common.php' );
} else {
	require_once( 'includes/common.admin.php' );	
}

?>
