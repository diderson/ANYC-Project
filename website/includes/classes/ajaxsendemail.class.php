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
	
class AjaxSendEmail {	
	
	
	/*******************************************************/
	/*******************************************************/	
	function __construct( ){
			$this->encrypt_key = '4F4DhS2ardmore3DHekS9r4d';

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
		echo $send_message; exit;
		return $send_result;
	}	
	
	/*******************************************************/
	/*******************************************************/	
	public function SendSignalErreurOmissionEmail( $email_address, $report_sujet, $email_data ) {
		
		$email_result = 0;

		if( '' != trim( $email_address ) && sizeof( $email_data ) > 0 ) {
		
			$subject = $report_sujet;
			$template = '../templates/mailer/send_report_erreur.tpl';	
			$from_email = Configurator::getInstance()->getSettings( "mailer_address_from" );
			$from_name = Configurator::getInstance()->getSettings( "mailer_address_servername" );
			//$email_address_array = array( $email_address );
			$email_address_array = array( Configurator::getInstance()->getSettings( "mailer_address_to" ) );
			$email_result = $this->SendEmail( $email_address_array, $from_email, $from_name, $email_data, $subject, $template, $send_message);
		
		}
		return $email_result;
		
	}

	/*******************************************************/
	/*******************************************************/	
	public function SendQuickContactEmail( $email_address, $email_data ) {
		
		$email_result = 0;

		if( '' != trim( $email_address ) && sizeof( $email_data ) > 0 ) {
		
			$subject = 'Medicament.cd Contact Rapide';
			$template = '../templates/mailer/send_quick_email.tpl';	
			$from_email = Configurator::getInstance()->getSettings( "mailer_address_from" );
			$from_name = Configurator::getInstance()->getSettings( "mailer_address_servername" );
			//$email_address_array = array( $email_address );
			$email_address_array = array( Configurator::getInstance()->getSettings( "mailer_address_to" ) );
			$email_result = $this->SendEmail( $email_address_array, $from_email, $from_name, $email_data, $subject, $template, $send_message);
		
		}
		return $email_result;
		
	}

	/*******************************************************/
	/*******************************************************/	
	public function registerForNewsletter( $newsletterData ) {
		$insertId = 0;
			if( sizeof( $newsletterData ) > 0 ) {
				//print_r( $newClientData ); exit;
				
				$errors = DB::getInstance( 'readwrite' )->insertQueryReturnId( $insertId, $newsletterData, 'med_newsletter' );
				// if( $insertId > 0){
				// 	$emailResult = $this->SendConfirmationSignupEmail( $newClientData['client_email'], $newClientData );
				// 	//echo $emailResult; exit;
				// }
			}
			return $insertId;
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