<?php

/*******************************************************/
/*******************************************************/
class Configurator {		

	private $settings;
	private static $instance;

	/************************************************/
	/************************************************/	
	private function __clone() { } // block cloning of the object	
	
	/*******************************************************/
	/*******************************************************/	
	function __construct( ) {
		
		$server_name = $_SERVER['SERVER_NAME'];				
		$database_host = 'localhost';
		$smtp_host = 'localhost';	
							
		switch( $server_name ) {
			
			/******************************************************************************************/
			/******************************************************************************************/			
			//Diderson development in local
			case "anc-research.local.diderson.com":	
				
					
				$database_host = 'localhost';
				$smtp_host = 'smtp.saix.net';
				$smtp_host = 'mail.diderson.com';
				
				if( false !== strpos( gethostbyname($_SERVER['SERVER_NAME']) , '192.168.0.1' )  || false !== strpos( gethostbyname($_SERVER['SERVER_NAME']) , '127.0.0.1' ) ) {
					$database_host = 'localhost';
					//$smtp_host = 'smtp.saix.net';					
				}
				
				$database_name = 'anc-research';
				$dbusername = 'didi';
				$dbpassword = 'didi';
								
				//server settings
				$this->settings[ "site_url" ] = "http://anc-research.local.diderson.com";
				$this->settings[ "site_root" ] = "D:/webdev/PHP5/diderson.dev/anc-research/website";
				
				//database settings
				//Full
				$this->settings[ "database_host_full" ] = $database_host;
				$this->settings[ "database_user_full" ] = $dbusername;
				$this->settings[ "database_password_full" ] = $dbpassword;
				$this->settings[ "database_name_full" ] =  $database_name;
				
				//readwrite
				$this->settings[ "database_host_readwrite" ] = $database_host;
				$this->settings[ "database_user_readwrite" ] = 'didi_rw';
				$this->settings[ "database_password_readwrite" ] = $dbpassword;
				$this->settings[ "database_name_readwrite" ] = $database_name;				
				
				//readonly
				$this->settings[ "database_host_readonly" ] = $database_host;
				$this->settings[ "database_user_readonly" ] = 'didi_ro';
				$this->settings[ "database_password_readonly" ] = $dbpassword;
				$this->settings[ "database_name_readonly" ] = $database_name;				
				
				//other settings				
				$this->settings[ "google_analytics" ] = 0;
				$this->settings[ "site_type" ] = 'dev';

				//php mailer			
				$this->settings['phpmailer_smtp'] = $smtp_host;
								
				//data base settings and templates copy
				$this->settings['db_prefix'] = 'not' ;
				$this->settings['db_template'] = 'anc-research_template' ;

				//target email address settings
				$this->settings['mailer_username'] = 'noreply@diderson.com';
				$this->settings['mailer_password'] = '12noreply34';
				$this->settings['mailer_address_from'] = 'noreply@diderson.com' ;
				$this->settings['mailer_address_to'] = 'ddiderson@gmail.com' ;
				$this->settings['mailer_address_servername'] = 'anc-research.cd Serveur Testing By Diderson' ;
				$this->settings['mailer_address_subscribe'] = array( 'diderson@diderson.com' );					
				
				//Date settings
				date_default_timezone_set( 'Africa/Johannesburg' );
								
				break;

				/******************************************************************************************/
			/******************************************************************************************/			
			//Diderson development in local
			case "anc-research.hsh.diderson.com":	
				
					
				$database_host = 'localhost';
				$smtp_host = 'smtp.saix.net';
				$smtp_host = 'mail.diderson.com';
				
				if( false !== strpos( gethostbyname($_SERVER['SERVER_NAME']) , '192.168.0.1' )  || false !== strpos( gethostbyname($_SERVER['SERVER_NAME']) , '127.0.0.1' ) ) {
					$database_host = 'localhost';
					//$smtp_host = 'mail.diderson.com';					
				}
				
				$database_name = 'anc-research';
				$dbusername = 'didi';
				$dbpassword = 'didi';
								
				//server settings
				$this->settings[ "site_url" ] = "http://anc-research.hsh.diderson.com";
				$this->settings[ "site_root" ] = "/home/diderson/webdev/PHP5/diderson.dev/anc-research/website";
				
				//database settings
				//Full
				$this->settings[ "database_host_full" ] = $database_host;
				$this->settings[ "database_user_full" ] = $dbusername;
				$this->settings[ "database_password_full" ] = $dbpassword;
				$this->settings[ "database_name_full" ] =  $database_name;
				
				//readwrite
				$this->settings[ "database_host_readwrite" ] = $database_host;
				$this->settings[ "database_user_readwrite" ] = 'didi_rw';
				$this->settings[ "database_password_readwrite" ] = $dbpassword;
				$this->settings[ "database_name_readwrite" ] = $database_name;				
				
				//readonly
				$this->settings[ "database_host_readonly" ] = $database_host;
				$this->settings[ "database_user_readonly" ] = 'didi_ro';
				$this->settings[ "database_password_readonly" ] = $dbpassword;
				$this->settings[ "database_name_readonly" ] = $database_name;				
				
				//other settings				
				$this->settings[ "google_analytics" ] = 0;
				$this->settings[ "site_type" ] = 'dev';

				//php mailer			
				$this->settings['phpmailer_smtp'] = $smtp_host;
								
				//data base settings and templates copy
				$this->settings['db_prefix'] = 'not' ;
				$this->settings['db_template'] = 'anc-research_template' ;

				//target email address settings
				$this->settings['mailer_username'] = 'noreply@diderson.com';
				$this->settings['mailer_password'] = '12noreply34';
				$this->settings['mailer_address_from'] = 'noreply@diderson.com' ;
				$this->settings['mailer_address_to'] = 'ddiderson@gmail.com' ;
				$this->settings['mailer_address_servername'] = 'anc-research.cd Serveur Testing By Diderson' ;
				$this->settings['mailer_address_subscribe'] = array( 'diderson@diderson.com' );				
				
				//Date settings
				date_default_timezone_set( 'Africa/Johannesburg' );
								
				break;


			/******************************************************************************************/
			/******************************************************************************************/			
			//STAGING
			case "anc-research.diderson.com":
			
			$database_host = 'localhost';
								
				//server settings
				$this->settings[ "site_url" ] = "http://anc-research.diderson.com";
				$this->settings[ "site_root" ] = "/home/diderson/public_html/anc-research/";
				
				//database settings
				//Full
				$this->settings[ "database_host_full" ] = $database_host;
				$this->settings[ "database_user_full" ] = 'diderson_f';
				$this->settings[ "database_password_full" ] = 'diderson';
				$this->settings[ "database_name_full" ] = 'diderson_anc-research';
				
				//readwrite
				$this->settings[ "database_host_readwrite" ] = $database_host;
				$this->settings[ "database_user_readwrite" ] = 'diderson_rw';
				$this->settings[ "database_password_readwrite" ] = 'diderson';
				$this->settings[ "database_name_readwrite" ] = 'diderson_anc-research';				
				
				//readonly
				$this->settings[ "database_host_readonly" ] = $database_host;
				$this->settings[ "database_user_readonly" ] = 'diderson_ro';
				$this->settings[ "database_password_readonly" ] = 'diderson';
				$this->settings[ "database_name_readonly" ] = 'diderson_anc-research';
				
				//other settings				
				$this->settings[ "google_analytics" ] = 0;
				$this->settings[ "site_type" ] = 'staging';

				//php mailer			
				$smtp_host = 'mail.diderson.com';	
				//$smtp_host = 'secure.emailsrvr.com';
							

				$this->settings['phpmailer_smtp'] = $smtp_host;
								
				//target email address settings
				$this->settings['mailer_username'] = 'noreply@diderson.com';
				$this->settings['mailer_password'] = '12noreply34';
				$this->settings['mailer_address_from'] = 'noreply@diderson.com' ;
				$this->settings['mailer_address_to'] = 'ddiderson@gmail.com' ;
				$this->settings['mailer_address_servername'] = 'anc-research.cd Serveur Testing By Diderson' ;
				$this->settings['mailer_address_subscribe'] = array( 'diderson@diderson.com' );				
				
				//Date settings
				date_default_timezone_set( 'Africa/Johannesburg' );
														

				break;

			/******************************************************************************************/
			/******************************************************************************************/			
			//STAGING
			case "anc-research.bourdak.cd":
			
			$database_host = 'localhost';
								
				//server settings
				$this->settings[ "site_url" ] = "http://anc-research.bourdak.cd";
				$this->settings[ "site_root" ] = "/home/bourdak8/public_html/anc-research/";
				
				//database settings
				//Full
				$this->settings[ "database_host_full" ] = $database_host;
				$this->settings[ "database_user_full" ] = 'bourdak8_didif';
				$this->settings[ "database_password_full" ] = 'didif';
				$this->settings[ "database_name_full" ] = 'bourdak8_anc-research';
				
				//readwrite
				$this->settings[ "database_host_readwrite" ] = $database_host;
				$this->settings[ "database_user_readwrite" ] = 'bourdak8_didirw';
				$this->settings[ "database_password_readwrite" ] = 'didif';
				$this->settings[ "database_name_readwrite" ] = 'bourdak8_anc-research';				
				
				//readonly
				$this->settings[ "database_host_readonly" ] = $database_host;
				$this->settings[ "database_user_readonly" ] = 'bourdak8_didiro';
				$this->settings[ "database_password_readonly" ] = 'didif';
				$this->settings[ "database_name_readonly" ] = 'bourdak8_anc-research';
				
				//other settings				
				$this->settings[ "google_analytics" ] = 0;
				$this->settings[ "site_type" ] = 'staging';

				//php mailer			
				$smtp_host = 'mail.bourdak.com';	
				//$smtp_host = 'secure.emailsrvr.com';
							

				$this->settings['phpmailer_smtp'] = $smtp_host;
								
				//target email address settings
				$this->settings['mailer_address_from'] = 'david@bourdak.cd' ;
				$this->settings['mailer_address_to'] = 'ddiderson@gmail.com' ;
				$this->settings['mailer_address_servername'] = 'anc-research.cd Serveur Testing By Diderson' ;
				$this->settings['mailer_address_subscribe'] = array( 'diderson@diderson.com' );					
				
				//Date settings
				date_default_timezone_set( 'Africa/Johannesburg' );
														

				break;

			/******************************************************************************************/
			/******************************************************************************************/			
			//BOURDAK DEV
			case "anc-research.local.bourdak.cd":
			
			$database_host = 'localhost';
								
				//server settings
				$this->settings[ "site_url" ] = "http://anc-research.local.bourdak.cd";
				$this->settings[ "site_root" ] = "/utilisateurs/davidkandi/Documents/webdev/anc-research/website/";
				
				//database settings
				$database_name = 'anc-research';
				$dbusername = 'root';
				$dbpassword = '';
								
				//Full
				$this->settings[ "database_host_full" ] = $database_host;
				$this->settings[ "database_user_full" ] = $dbusername;
				$this->settings[ "database_password_full" ] = $dbpassword;
				$this->settings[ "database_name_full" ] =  $database_name;
				
				//readwrite
				$this->settings[ "database_host_readwrite" ] = $database_host;
				$this->settings[ "database_user_readwrite" ] = 'root';
				$this->settings[ "database_password_readwrite" ] = $dbpassword;
				$this->settings[ "database_name_readwrite" ] = $database_name;				
				
				//readonly
				$this->settings[ "database_host_readonly" ] = $database_host;
				$this->settings[ "database_user_readonly" ] = 'root';
				$this->settings[ "database_password_readonly" ] = $dbpassword;
				$this->settings[ "database_name_readonly" ] = $database_name;				
				
				//other settings				
				$this->settings[ "google_analytics" ] = 0;
				$this->settings[ "site_type" ] = 'dev';

				//php mailer			
				$smtp_host = 'mail.bourdak.com';	
				//$smtp_host = 'secure.emailsrvr.com';
							

				$this->settings['phpmailer_smtp'] = $smtp_host;
								
				//target email address settings
				$this->settings['mailer_address_from'] = 'david@bourdak.cd' ;
				$this->settings['mailer_address_to'] = 'ddiderson@gmail.com' ;
				$this->settings['mailer_address_servername'] = 'anc-research.cd Serveur Testing By Bourdak' ;				
				
				//Date settings
				date_default_timezone_set( 'Africa/Johannesburg' );
														

				break;		
			/******************************************************************************************/
			/******************************************************************************************/				
			default:
				exit( '...' );
		}				
	}

	/*******************************************************/
	/*******************************************************/	
	function __destruct () {	
	}
	
	/*******************************************************/
	/*******************************************************/	
	public function GetSettings( $variable ) {	
		return $this->settings[$variable];
	}
	
	/*******************************************************/
	/*******************************************************/	
	public static function GetInstance() {
		if( !isset( self::$instance) ) {
			$thisClass = __CLASS__;
			self::$instance = new $thisClass();						
		}		
		return self::$instance;
	}
	
	/*******************************************************/
	/*******************************************************/
}
?>