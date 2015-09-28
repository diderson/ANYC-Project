<?php
/*	======================================================
	Diderson Baka - www.diderson.com
	------------------------------------------------------
	NOTE: This code is intellectual property of
	Diderson Baka and may not be
	reproduced or used without prior permission.
	------------------------------------------------------
	Copyright 2013
	======================================================	*/
	
require_once( 'includes/classes/cpanel.class.php' );	
class SignUp {	
	
	
	/*******************************************************/
	/*******************************************************/	
	function __construct( ){
			$this->encrypt_key = '4F4DhS2ardmore3DHekS9r4d';

	}
	
	/***************************************************************/
	/***************************************************************/
	public function StoreNewClient( $newClientData ) {
				
			$insertId = 0;
			if( sizeof( $newClientData ) > 0 ) {
				//print_r( $newClientData ); exit;
				
				$errors = PDODB::getInstance( 'readwrite' )->InsertQueryReturnId( $insertId, $newClientData, 'tbl_client' );
				if( $insertId > 0){
					$emailResult = $this->SendConfirmationSignupEmail( $newClientData['client_email'], $newClientData );
					//echo $emailResult; exit;
				}
			}
			return $insertId;
	}
	
	/***************************************************************/
	/***************************************************************/
	public function StoreNewUserAndUpdateClient( $newUserData, $updateClientData, $id_client ) {
				
			$insertId = 0;
			$createdb_result = 0;
			//print_r( $newUserData ); exit;
			if( sizeof( $newUserData ) > 0 && sizeof( $updateClientData ) > 0  ) {
				
				
				$errors = PDODB::getInstance( 'readwrite' )->InsertQueryReturnId( $insertId, $newUserData, 'tbl_administrator' );
				//print_r( $errors ); exit;
				if( $insertId > 0){
					$sql = "INSER INTO tbl_administrator values($insertId, 0);";
					$errors = PDODB::getInstance( 'readwrite' )->QueryNoRecordSet( $querySuccess, $sql );
					//$emailResult = $this->SendConfirmationSignupEmail( $newClientData['client_email'], $newClientData );
					$db_prefix = Configurator::getInstance()->getSettings( "db_prefix" );
					if( $db_prefix == 'not' ){
						$database = $updateClientData['client_dbname'];
					}else{
						$database = $db_prefix.'_'.$updateClientData['client_dbname'];
					}
					$updateClientData['client_dbname'] = $database;
					$createdb_result = $this->CreateClientDataBase( $database ) ;
					
					$key_values = array();
					$key_values[ 'id_client' ] = $id_client;
					$errors = PDODB::getInstance( 'readwrite' )->UpdateQuery( $querySuccess, $updateClientData, 'tbl_client', $key_values );

				}
			}
			return $createdb_result;
	}
	

	/***************************************************************/
	/***************************************************************/
	public function CreateClientDataBase( $db_name ) {
		
		$createdb_result = 0;
		/*$db_prefix = Configurator::getInstance()->getSettings( "db_prefix" );
		
		if( $db_prefix == 'not' ){
			$database = $db_name;
		}else{
			$database = $db_prefix.'_'.$db_name;
		}*/
		
		$host = Configurator::getInstance()->getSettings( "database_host_full" );
		$root = Configurator::getInstance()->getSettings( "database_user_full" ); 
		$root_password = Configurator::getInstance()->getSettings( "database_password_full" );
		
		$user = Configurator::getInstance()->getSettings( "database_user_full" );
		$db = $db_name; 
	
		try {
			$dbh = new PDO("mysql:host=$host", $root, $root_password);
	
			$dbh->exec("CREATE DATABASE `$db`;
					GRANT ALL ON `$db`.* TO '$user'@'$host';
					FLUSH PRIVILEGES;") 
			or die(print_r($dbh->errorInfo(), true));
			$createdb_result = 1;
	
		} catch (PDOException $e) {
			die("DB ERROR: ". $e->getMessage());
		}
		$this->CopyTemplateDataBaseToClientDataBase( $db_name );
		return $createdb_result;
	}
	
	/***************************************************************/
	/***************************************************************/
	public function CopyTemplateDataBaseToClientDataBase( $db_name ) {
		
		$host = Configurator::getInstance()->getSettings( "database_host_full" );
		$root = Configurator::getInstance()->getSettings( "database_user_full" ); 
		$root_password = Configurator::getInstance()->getSettings( "database_password_full" );
		
		$connect2 = mysql_connect( $host, $root, $root_password );
		$database1 = $db_name; // destination database
		mysql_select_db($database1, $connect2);
		set_time_limit(0);
		
		$database = Configurator::getInstance()->getSettings( "db_template" ); //original database
		$connect = mysql_connect( $host, $root, $root_password );
		
		mysql_select_db($database, $connect);
		
		$tables = mysql_query("SHOW TABLES FROM $database");
		
		while ( $line = mysql_fetch_row( $tables ) ) {
				$tab = $line[0];
				mysql_query("DROP TABLE IF EXISTS $database1.$tab");
				mysql_query("CREATE TABLE $database1.$tab LIKE $database.$tab") or die(mysql_error());
				mysql_query("INSERT INTO $database1.$tab SELECT * FROM $database.$tab");
				echo "Table: <b>" . $line[0] . " </b>Done<br>";
		}
	}
	/*******************************************************/
	/*******************************************************/
	public function IsClientExist( $client_email ) {
		
		if( $client_email != '' ) {
			
			$sql = "SELECT
						tbl_client.client_email AS 'client_email'
											
					FROM	
						tbl_client 
					WHERE
						tbl_client.client_email = '".mysql_escape_string( $client_email )."' ";
						

			$errors = PDODB::getInstance()->Query( $querySuccess, $sql, $recordSet, $recordSetSize );
			
			if( $recordSetSize > 0 ){
				$isclientExist = 1;
			}
			else{
				$isclientExist = 0;
			}
		}
		
		return $isclientExist;
		
	}
	
	/*******************************************************/
	/*******************************************************/
	public function IsUsernameExist( $username ) {
		
		if( $username != '' ) {
			
			$sql = "SELECT
						tbl_administrator.username AS 'username'
											
					FROM	
						tbl_administrator 
					WHERE
						tbl_administrator.username = '".mysql_escape_string( $username )."' ";
						

			$errors = PDODB::getInstance()->Query( $querySuccess, $sql, $recordSet, $recordSetSize );
			
			if( $recordSetSize > 0 ){
				$isclientExist = 1;
			}
			else{
				$isclientExist = 0;
			}
		}
		
		return $isclientExist;
		
	}
	
	/*******************************************************/
	/*******************************************************/
	public function IsClienthasWorkingAccount( $client_email ) {
		
		
		if( $client_email != '' ) {
			
			$sql = "SELECT
						tbl_client.client_email AS 'client_email',
						tbl_client.client_status AS 'client_status'
											
					FROM	
						tbl_client 
					WHERE
						tbl_client.client_email = '".mysql_escape_string( $client_email )."' 
					AND
						tbl_client.client_dbname IS NULL
						
					LIMIT 1";
						

			$errors = PDODB::getInstance()->Query( $querySuccess, $sql, $recordSet, $recordSetSize );
			
			if($recordSetSize > 0){
			$isclientExist = 1;
			}
			else{
			$isclientExist = 0;
				}
		}
		
		return $isclientExist;
		
	}
	
	/*******************************************************/
	/*******************************************************/
	public function GetBasicClientDetailByClientHash( &$recordSet, $clh ){
		
		if( $clh != '' ) {
			
			$sql = "SELECT
						tbl_client.id_client AS 'id_client',
						tbl_client.client_name AS 'client_name',
						tbl_client.client_email AS 'client_email'
											
					FROM	
						tbl_client 
					WHERE
						tbl_client.client_hash = '".mysql_escape_string( $clh )."' 
					LIMIT 1";
						

			$errors = PDODB::getInstance()->Query( $querySuccess, $sql, $recordSet, $recordSetSize );
		}
	}
	
	/*******************************************************/
	/*******************************************************/
	public function SendEmail( $email_address_array, $from_email, $from_name, $email_data, $subject, $template, &$send_message) {
		
		global $smarty;

		$send_result = 0;
		$send_message  = '';

		if( is_array( $email_address_array ) && sizeof( $email_address_array ) > 0 && '' != trim( $from_email ) && '' != trim( $from_name ) && '' != trim( $subject ) 
			&& '' != $template ) {

				try { 

					$mail = new PHPMailer( true );		
					$mail->IsSMTP( true );  
					$mail->SMTPDebug = false;
					$mail->IsHTML( true );
				    $mail->Host = Configurator::getInstance()->getSettings( "phpmailer_smtp" );	
					
					$mail->ClearAddresses();
					for( $x = 0;$x < sizeof($email_address_array);$x++ ){
						$mail->AddAddress( trim($email_address_array[$x]) );
					}			

					$smarty->assign( 'site_url', Configurator::getInstance()->getSettings( "site_url" ));
					$smarty->assign( 'email_data', $email_data );

					$mail->From 	= $from_email;
					$mail->FromName = $from_name;
					$mail->Subject  = $subject;
					
					$mail->Body     = $smarty->fetch( $template );			
                   // echo $smarty->fetch( $template );
					//exit();
					if(!$mail->Send()) {
					} else {
						$send_result = 1;
					}
				} catch (phpmailerException $e) {
					$send_message = $e->errorMessage(); 
					
				} catch (Exception $e) {
					$send_message = $e->getMessage();
					
				}
		} else {
			$send_message = 'Data missing';
		}
		//echo $send_message; exit;
		return $send_result;
	}	
	
	/*******************************************************/
	/*******************************************************/	
	public function SendConfirmationSignupEmail( $email_address, $email_data ) {
		
		$email_result = 0;

		if( '' != trim( $email_address ) && sizeof( $email_data ) > 0 ) {
		
			$subject = "Sign up Confirmation";
			$template = 'templates/mailer/send_confirmation_register.tpl';	
			$from_email = Configurator::getInstance()->getSettings( "mailer_address_from" );
			$from_name = Configurator::getInstance()->getSettings( "mailer_address_servername" );
			$email_address_array = array( $email_address );
			$email_result = $this->SendEmail( $email_address_array, $from_email, $from_name, $email_data, $subject, $template, $send_message);
		
		}
		return $email_result;
		
	}



	/***************************************************************/
	/***************************************************************/	
	public function encrypt( $text ) {
		
	

		$key = $this->encrypt_key;// 24 bit Key
		$iv = "f3xt6vzm";// 8 bit IV
		$bit_check=8;// bit amount for diff algor.

		$text_num =str_split($text,$bit_check);
		$text_num = $bit_check-strlen($text_num[count($text_num)-1]);
		
		for ($i=0;$i<$text_num; $i++) {
			$text = $text . chr($text_num);
		}
		
		$cipher = mcrypt_module_open(MCRYPT_TRIPLEDES,'','cbc','');
		
		mcrypt_generic_init($cipher, $key, $iv);
		
		$decrypted = mcrypt_generic($cipher,$text);
		mcrypt_generic_deinit($cipher);
		
		return base64_encode($decrypted);
	}
	
	/***************************************************************/
	/***************************************************************/
	public function decrypt( $encrypted_text ){
		
		$key = $this->encrypt_key;// 24 bit Key
		$iv = "f3xt6vzm";// 8 bit IV
		$bit_check=8;// bit amount for diff algor.
		
		$cipher = mcrypt_module_open(MCRYPT_TRIPLEDES,'','cbc','');
		mcrypt_generic_init($cipher, $key, $iv);
		
		$decrypted = mdecrypt_generic($cipher,base64_decode($encrypted_text));
		mcrypt_generic_deinit($cipher);
		
		$last_char=substr($decrypted,-1);
		
		for($i=0;$i<$bit_check-1; $i++) {
			
			if(chr($i)==$last_char){
				
				$decrypted=substr($decrypted,0,strlen($decrypted)-$i);
				break;
				
			}
		}
		
		return $decrypted;
	}
			
}
?>