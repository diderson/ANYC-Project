<?php

//*******************************************************/
/*******************************************************/
	function diderson_autoload( $className ) {	
		
		switch( $className ) {
			case "PHPMailer":
			case "phpmailer":			
				require_once( 'components/phpmailer/class.phpmailer.php' );	
				break;
			case "Securimage":
			case "securimage":			
				require_once( 'components/securimage/securimage.php' );	
				break;				
			default:
				require_once( strtolower( $className ).'.class.php' );					
		}
	}

spl_autoload_register( 'diderson_autoload' );	

?>