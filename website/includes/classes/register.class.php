<?php
/*  ======================================================
  Diderson Baka - www.diderson.com
  ------------------------------------------------------
  NOTE: This code is intellectual property of
  Diderson Baka and may not be
  reproduced or used without prior permission.
  ------------------------------------------------------
  Copyright 2015
  ======================================================  */
  
class Register {

  /*******************************************************/
  /*******************************************************/ 
  function __construct( ){
      $this->encrypt_key = '4F4DhS2ardmore3DHekS9r4d';
  }

  function saveNewUser($administrator_email, $newUserData){
    $id_administrator = 0;
    if (sizeof($newUserData) > 0 ) {
      DB::getInstance("readwrite")->insertQueryReturnId( $id_administrator, $newUserData, 'anc_administrator', $rowsAffected);
    }

    if ( $id_administrator > 0 ) {

      $newUserData['activationlink'] = Configurator::getInstance()->getSettings( "site_url" ).'/activation-account?data='. $newUserData['amdlink'] ;
      $this->SendActivationAccountEmail($administrator_email, $newUserData);
    }
    return $id_administrator;
  }

  /*******************************************************/
  /*******************************************************/
  public function IsValidEmailUser( $annonce_user_email ) {
    $isValidEmailUser = 0;
    if( $annonce_user_email != ''  ) {
      
      $sql = "SELECT
            anc_administrator.id_administrator AS 'id_administrator',
            anc_administrator.first_name AS 'first_name',
            anc_administrator.last_name AS 'last_name',
            anc_administrator.password AS 'password'
                      
          FROM  
            anc_administrator 
          WHERE
            anc_administrator.email_address = '".mysql_escape_string( $annonce_user_email )."' 
          AND
            anc_administrator.administrator_status = 1";
            

      DB::getInstance('readonly')->query( $querySuccess, $sql, $recordSet, $recordSetSize );

      if( $querySuccess && $recordSetSize > 0 ) {
        $recordSet[0]['password'] = $this->decrypt( $recordSet[0]['password'] );
        //echo $recordSet[0]['password']; exit;
        $recordSet[0]['loginlink'] = Configurator::getInstance()->getSettings( "site_url" );
        $isValidEmailUser = $this->SendForgotPasswordEmail($annonce_user_email, $recordSet);
      }
      
    }
    
    return $isValidEmailUser;
    
  }
   /*******************************************************/
  /*******************************************************/
  public function IsValidAmdLink( $amdlink ) {
    $isValidEmailUser = 0;
    if( $amdlink != ''  ) {
      
      $sql = "SELECT
            anc_administrator.id_administrator AS 'id_administrator',
            anc_administrator.first_name AS 'first_name',
            anc_administrator.last_name AS 'last_name'
                      
          FROM  
            anc_administrator 
          WHERE
            anc_administrator.amdlink = '".mysql_escape_string( $amdlink )."' 
          AND
            anc_administrator.administrator_status = 0";
            

      DB::getInstance('readonly')->query( $querySuccess, $sql, $recordSet, $recordSetSize );

      if ( $querySuccess && $recordSetSize > 0 ) {
        $sql = "UPDATE
          anc_administrator
        SET
          anc_administrator.administrator_status = 1
        WHERE
          anc_administrator.id_administrator = ".$recordSet[0]['id_administrator'] 
        ;
        //echo $sql; exit;
        DB::getInstance('readwrite')->queryNoRecordSet( $querySuccess, $sql, $rowsAffected );

        if ($querySuccess) {
          $isValidEmailUser = 1;
        }
        
        //$isValidEmailUser = $this->SendForgotPasswordEmail($annonce_user_email, $recordSet);
      }
      
    }
    
    return $isValidEmailUser;
    
  }

  /*******************************************************/
  /*******************************************************/
  public function IsUserExist( $email_address ) {
    $isUserExist = 0;
    if( $email_address != '' ) {
      
      $sql = "SELECT
            anc_administrator.email_address AS 'email_address'
                      
          FROM  
            anc_administrator 
          WHERE
            anc_administrator.email_address = '".mysql_escape_string( $email_address )."' ";
            

      DB::getInstance('readonly')->query( $querySuccess, $sql, $recordSet, $recordSetSize );
      
      if ($recordSetSize > 0){
        $isUserExist = 1;
      }
      
    }
    
    return $isUserExist;
    
  }

  /*******************************************************/
  /*******************************************************/
  public function GetUserEditData( $idUser, &$recordSet ) {
    if( $idUser != '') {
      
      $sql = "SELECT
            anc_administrator.id_administrator AS 'id_administrator',
            anc_administrator.first_name AS 'first_name',
            anc_administrator.last_name AS 'last_name',
            anc_administrator.annonce_user_telephone AS 'annonce_user_telephone',
            anc_administrator.email_address AS 'email_address',
            anc_administrator.password AS 'password',
            anc_administrator.annonce_user_image AS 'annonce_user_image'
                      
          FROM  
            anc_administrator 
          WHERE
            anc_administrator.id_administrator = '".mysql_escape_string( $idUser )."' 
          AND
            anc_administrator.annonce_user_status = 1";
            

      DB::getInstance('readonly')->query( $querySuccess, $sql, $recordSet, $recordSetSize );
      
      if ($recordSetSize > 0){
        $recordSet[0]['password'] = $this->decrypt( $recordSet[0]['password'] );
      } else {

      }
      
    } 
  }

  /*******************************************************/
  /*******************************************************/

  function updateUserProfile($id_administrator, $editUserData) {
    $updateSuccess = 0;
    if (sizeof($editUserData) > 0 ) {
       DB::getInstance("readwrite")->updateQuery( $querySuccess, $userProfileImageData, 'anc_administrator', 'id_administrator', $id_administrator, $rowsAffected, 'number', false);
       DB::getInstance("readwrite")->updateQuery( $querySuccess, $editUserData, 'anc_administrator', 'id_administrator', $id_administrator );

      if ($querySuccess) {

        $updateSuccess = 1;
      }
    }

    return $updateSuccess;
  }

  /***************************************************************/
  /***************************************************************/
  public function DeleteProdileImageById( $idUser ) {
    $success = 'no';
    $sql = "SELECT DISTINCT
        anc_administrator.id_administrator AS 'id_administrator',
        anc_administrator.annonce_user_image AS 'annonce_user_image'
      FROM 
        anc_administrator
      WHERE
        anc_administrator.id_administrator =".mysql_escape_string( $idUser )."
      LIMIT 1";
    //echo $sql;
    DB::getInstance('readonly')->query( $querySuccess, $sql, $tempRecordSet, $tempRecordSetSize );

    if ( $querySuccess && $tempRecordSetSize > 0 ) {
      $image_path = $tempRecordSet[0][ 'annonce_user_image' ];
      
      if (file_exists('..'.$image_path)) {
        unlink('..'.$image_path); 
        //echo 'file deleted';
        $sql = "UPDATE anc_administrator SET anc_administrator.annonce_user_image='' WHERE anc_administrator.id_administrator = ".mysql_escape_string( $idUser );
        DB::getInstance('readwrite')->queryNoRecordSet( $querySuccess, $sql, $rowsAffected );
        $success = 'yes';
      }
        
    }

    return $success;
  }
  /*******************************************************/
  /*******************************************************/

  function updateUserProfileImage($id_administrator, $userProfileImageData){
    if (sizeof($userProfileImageData) > 0 ) {
      $_SESSION['annonce_user_image'] = $userProfileImageData['annonce_user_image'];
       DB::getInstance("readwrite")->updateQuery( $querySuccess, $userProfileImageData, 'anc_administrator', 'id_administrator', $id_administrator, $rowsAffected, 'number', false);
      DB::getInstance("readwrite")->updateQuery( $querySuccess, $userProfileImageData, 'anc_administrator', 'id_administrator', $id_administrator );
    }
  }
  /*******************************************************/
  /*******************************************************/
  function resizeAndUploadImage($idUser, $image_name, $image_size, $image_temp){
    $max_image_size     = 200; //Maximum image size (height and width)
    $destination_folder   = 'uploads/profile/'; //upload directory ends with / (slash)
    $jpeg_quality       = 100; //jpeg quality

    if (!file_exists('uploads/profile/'.$idUser)) {
        $destination_folder = mkdir('uploads/profile/'.$idUser, 0777, true);
        $destination_folder = 'uploads/profile/'.$idUser.'/';
    } else {
      $destination_folder = 'uploads/profile/'.$idUser.'/';
    }

    $image_size_info  = getimagesize($image_temp); //get image size

    if($image_size_info){
      $image_width    = $image_size_info[0]; //image width
      $image_height     = $image_size_info[1]; //image height
      $image_type     = $image_size_info['mime']; //image type
    }else{
      die("Make sure image file is valid!");
    }

    //switch statement below checks allowed image type 
    //as well as creates new image from given file 
    switch($image_type){
      case 'image/png':
        $image_res =  imagecreatefrompng($image_temp); break;
      case 'image/gif':
        $image_res =  imagecreatefromgif($image_temp); break;     
      case 'image/jpeg': case 'image/pjpeg':
        $image_res = imagecreatefromjpeg($image_temp); break;
      default:
        $image_res = false;
    }

    if ($image_res){
      //Get file extension and name to construct new file name 
      $image_info = pathinfo($image_name);
      $image_extension = strtolower($image_info["extension"]); //image extension
      $image_name_only = strtolower($image_info["filename"]);//file name only, no extension
      
      //create a random name for new image (Eg: fileName_293749.jpg) ;
      $new_file_name = 'profile_' .  $idUser . '.' .$image_extension;
       
      $image_save_folder  = $destination_folder . $new_file_name;
      //call normal_resize_image() function to proportionally resize image
      if ($this->normal_resize_image($image_res, $image_save_folder, $image_type, $max_image_size, $image_width, $image_height, $jpeg_quality)){
        //save image destination in the database
        $userProfileImageData = array();
        $userProfileImageData['annonce_user_image'] = '/'.$image_save_folder;

        $this->updateUserProfileImage($idUser, $userProfileImageData);
      }
      imagedestroy($image_res); //freeup memory
    }
  }

  /*******************************************************/
  /*******************************************************/ 
  #####  This function will proportionally resize image ##### 
  function normal_resize_image($source, $destination, $image_type, $max_size, $image_width, $image_height, $quality){
    
    if($image_width <= 0 || $image_height <= 0){return false;} //return false if nothing to resize
    
    //do not resize if image is smaller than max size
    if($image_width <= $max_size && $image_height <= $max_size){
      if($this->save_image($source, $destination, $image_type, $quality)){
        return true;
      }
    }
    
    //Construct a proportional size of new image
    $image_scale  = min($max_size/$image_width, $max_size/$image_height);
    $new_width    = ceil($image_scale * $image_width);
    $new_height   = ceil($image_scale * $image_height);
    
    $new_canvas   = imagecreatetruecolor( $new_width, $new_height ); //Create a new true color image
    
    //Copy and resize part of an image with resampling
    if(imagecopyresampled($new_canvas, $source, 0, 0, 0, 0, $new_width, $new_height, $image_width, $image_height)){
      $this->save_image($new_canvas, $destination, $image_type, $quality); //save resized image
    }

    return true;
  }

  /*******************************************************/
  /*******************************************************/ 
  ##### Saves image resource to file ##### 
  function save_image($source, $destination, $image_type, $quality){
    switch(strtolower($image_type)){//determine mime type
      case 'image/png': 
        imagepng($source, $destination); return true; //save png file
        break;
      case 'image/gif': 
        imagegif($source, $destination); return true; //save gif file
        break;          
      case 'image/jpeg': case 'image/pjpeg': 
        imagejpeg($source, $destination, $quality); return true; //save jpeg file
        break;
      default: return false;
    }
  }

  /*******************************************************/
  /*******************************************************/
  public function setLastLoginDate( &$ip, &$id_customer ) {
    
    $updateValues = array();
    if( isset($id_customer ) && $id_customer != '' ) {
      $updateValues['ldate'] = date( 'Y-m-d H:i:s');
      $updateValues['lip'] = $ip;
      DB::getInstance( 'readwrite' )->updateQuery( $querySuccess, $updateValues, mysql_escape_string('sq_customer'), 'id_customer', $id_customer);
    } 
  }


  /*******************************************************/
  /*******************************************************/
  public function IsLoginSessionOn() {
    
    if( isset ( $_SESSION['id_customer'] ) ){
    
      $_SESSION['id_customer'] = $_SESSION['id_customer'];
      $_SESSION['customer_fullname'] = $_SESSION['customer_fullname'];
      $_SESSION['customer_email'] = $_SESSION['customer_email'];
    
      }else{
        session_start();
        if( ( !isset($_SESSION['id_customer'] ) ) || ( empty( $_SESSION['id_customer'] ) ) ){
    
            header( 'Location: /sign-in' );
            exit();
          } else {
          $_SESSION['id_customer'] = $_SESSION['id_customer'];
          $_SESSION['customer_fullname'] = $_SESSION['customer_fullname'];
          $_SESSION['customer_email'] = $_SESSION['customer_email'];  
        }
    }
  
  }

  /*******************************************************/
  /*******************************************************/ 
  public function SendForgotPasswordEmail($email_address_to, $email_data) {
    
    $email_result = 0;

    if( '' != trim( $email_address_to ) && sizeof( $email_data ) > 0 ) {
    
      $subject = utf8_decode('Requesting of your password at ANC research System');
      $template = 'templates/mailer/send-request-password.tpl';
      $from_email = Configurator::getInstance()->getSettings( "mailer_address_from" );
      $from_name = Configurator::getInstance()->getSettings( "mailer_address_servername" );
      
      $email_address_array = array($email_address_to );
      $email_result = $this->SendEmail( $email_address_array, $from_email, $from_name, $email_data, $subject, $template, $send_message);
      
      //echo 'email resul: '.$email_result; 
    }
    //echo 'email addres to: '.$email_address_to; exit;
    return $email_result;
    
  }

  /*******************************************************/
  /*******************************************************/ 
  public function SendActivationAccountEmail($email_address_to, $email_data) {
    
    $email_result = 0;

    if( '' != trim( $email_address_to ) && sizeof( $email_data ) > 0 ) {
    
      $subject = utf8_decode('Request Activation of your Account at ANC research System');
      $template = 'templates/mailer/send-activation-account.tpl';
      $from_email = Configurator::getInstance()->getSettings( "mailer_address_from" );
      $from_name = Configurator::getInstance()->getSettings( "mailer_address_servername" );
      
      $email_address_array = array($email_address_to );
      $email_result = $this->SendEmail( $email_address_array, $from_email, $from_name, $email_data, $subject, $template, $send_message);
      
      //echo 'email resul: '.$email_result; 
    }
    //echo 'email addres to: '.$email_address_to; exit;
    return $email_result;
    
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
          $mail->SMTPAuth = true; 
          $mail->Username = Configurator::getInstance()->getSettings( "mailer_username" );  
          $mail->Password   = Configurator::getInstance()->getSettings( "mailer_password" );  

          //$mail->AddAttachment('images/phpmailer.gif');      // attachment
          //$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
          
          $mail->ClearAddresses();
          for( $x = 0;$x < sizeof($email_address_array);$x++ ){
            $mail->AddAddress( trim($email_address_array[$x]) );
          }     

          $smarty->assign( 'site_url', Configurator::getInstance()->getSettings( "site_url" ));
          $smarty->assign( 'email_data', $email_data );

          $mail->From   = $from_email;
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
          //$send_message = $e->errorMessage(); 
          
        } catch (Exception $e) {
          $send_message = $e->getMessage();
          
        }
    } else {
      $send_message = 'Data missing';
    }
    echo '  error message=>:  '.$send_message; //exit;
    return $send_result;
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