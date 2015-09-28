<?php
/*	======================================================
	Diderson Baka Web Developer Developer - www.diderson.com
	------------------------------------------------------
	NOTE: This code is intellectual property of
	Diderson Baka  and may not be
	reproduced or used without prior permission.
	------------------------------------------------------
	Copyright 2013 Diderson Baka Web Developer 
	======================================================	*/
	
require_once( 'includes/classes/entitymanager.class.php' );	
require_once( 'includes/classes/pager.class.php' );

class Profile extends EntityManager {
	
	private $adminId; 
	public $backend_ID;
	
	public $listHtmlPageTitle;
	public $listPageTitle;	
	public $listContentTemplate;	
	public $listDefaultSort;
	
	public $pageSize;
	public $currentPage;
	
	public $entityAccess;
		
	public $webUrl;
	
	public $editHtmlPageTitle;
	public $editPageTitle;
	public $editPanelHeading;		
	public $editContentTemplate;		
	public $insertHtmlPageTitle;
	public $insertPageTitle;	
	public $entityName;
	public $entityAliasName;
	public $entityStatusFieldName;
	public $insertButtonName;		
	
	public $templateType;	
	public $enableDelete;
	public $enableEdit;

	public $listPagerObject;	
	
	/*******************************************************/
	/*******************************************************/
	function __construct( $id = 0, $templateType = 'list', $pageSize = 10, $currentPage = 1, $sortBy = '' ) {
	
		parent::__construct();
		
		global $backend_ID;
		$this->backend_ID = $backend_ID;

		/*****************************/
		/* START: Edit per class file 
		/*****************************/
		$this->encrypt_key = '4F4DhS2ardmore3DHekS9r4d';
		
		$this->adminId = $id;		
		$this->id = $id;		
		$this->tablePrefix = 'anc_';
		$this->tableName = $this->tablePrefix.'administrator';
		$this->idName = 'id_administrator';
		
		//Web variables
		$this->webUrl = "";		

		//List page variables
		$this->listFileName = 'administrator-list';		
		$this->listContentTemplate = 'administrator-list.tpl';
		$this->listHtmlPageTitle = 'Administrators';
		$this->listPageTitle = 'Administrators';
		$this->listDefaultSort = "2";
		
		$this->entityName = 'Administrator';
		$this->entityAliasName = 'administrator';
		$this->entityStatusFieldName = 'administrator_status';
		$this->insertButtonName = 'Insert new Administrator';		

		//Edit page variables		
		$this->editFileName = 'profile-edit';										
		$this->editHtmlPageTitle = 'Edit Your profile';
		$this->editPageTitle = 'Edit Your profile';
		$this->editContentTemplate = 'profile-edit.tpl';
		$this->insertHtmlPageTitle = 'Insert Administrator';
		$this->insertPageTitle = 'Insert Administrator';
		$this->editPanelHeading	= 'Profile Details';	
		
		//Edit buttons
		$this->insertAsNewEnabled = 1;
		
		//Search
		$this->searchEnabled = 1;		
		
		//List action variables	
		$this->enableDelete = true;	
		$this->enableEdit = true;	
		
		//List Column Names
		$this->listColumns = array(
			'ID', 
			'Email Address', 			
			'First Name', 
			'Last Name', 
			'Admin Type',
			'Admin Status', 			
			'Creation Date',
			'Last Login Date'			
			);		
		
		//List query	
		$this->listSql =
			"SELECT DISTINCT
				".mysql_escape_string( $this->tableName) .".id_administrator as 'id',
				".mysql_escape_string( $this->tableName) .".email_address as 'email_address',				
				".mysql_escape_string( $this->tableName) .".first_name as 'first_name',
				".mysql_escape_string( $this->tableName) .".last_name as 'last_name',
				".mysql_escape_string( $this->tablePrefix) ."administratortype.administratortype_name as 'administratortype_name',
 				".mysql_escape_string( $this->tableName) .".administrator_status as 'administrator_status',
				".mysql_escape_string( $this->tableName) .".cdate as 'cdate',
				".mysql_escape_string( $this->tableName) .".ldate as 'ldate'
			FROM
				".mysql_escape_string( $this->tableName) ." INNER JOIN ".mysql_escape_string( $this->tablePrefix )."administratortype ON ".mysql_escape_string( $this->tableName) .".id_administratortype = ".mysql_escape_string( $this->tablePrefix )."administratortype.id_administratortype
			WHERE
				".mysql_escape_string( $this->tableName) .".id_administrator != 1";
				
		//Allow the (normal) user to view all non super users only by setting where clause
		if( $_SESSION[$backend_ID]['ADMIN_TYPE'] == 'user' ) {
			$this->setListFilter( 'user' );											
		}				
		
		//Edit form fields		
		$this->formFieldNames = array(
			'id_administrator',
			'id_administratortype',
			'first_name', 
			'last_name', 
			'email_address',
			'password',
			'administrator_status'
			);			
			
		//Page size			
		$this->pageSize = ( isset( $pageSize ) && $pageSize != '') ? $pageSize : 25;

		/*****************************/
		/* END: Edit per class file 
		/*****************************/								
		
		//Pagination variables		
		$this->currentPage = $currentPage;

		//Template type variables		
		$this->templateType = $templateType;		
		
		//Sort variables
		$this->listCurrentSort = ( isset( $sortBy ) && trim( $sortBy ) != '')?trim( $sortBy ) : $this->listDefaultSort;
		$this->listCurrentSortAbs = abs( $this->listCurrentSort );
		$this->listNewCurrentSort = - $this->listCurrentSort;	
		
		//Get access entities
		
		$this->setupEntityAccess();								

	}			
	
	/************************************************/
	/************************************************/
	function setListFilter( $usertype ) {
		$this->listFilterData = array();
		if( trim( $usertype ) != '' ) {
			$this->listFilterData[mysql_escape_string( $this->tablePrefix ).'administratortype.administratortype_alias'] = $usertype;
		}			
	}		
	
	/************************************************/
	/************************************************/
	function getEditData( &$recordSet ) {		
		
		$sql = "SELECT DISTINCT
					".mysql_escape_string( $this->tableName) .".id_administrator as 'id',
					".mysql_escape_string( $this->tableName) .".id_administratortype as 'id_administratortype',
					".mysql_escape_string( $this->tableName) .".first_name as 'first_name',
					".mysql_escape_string( $this->tableName) .".last_name as 'last_name',										
					".mysql_escape_string( $this->tableName) .".email_address as 'email_address',
					".mysql_escape_string( $this->tableName) .".password as 'password',
					".mysql_escape_string( $this->tableName) .".cdate as 'cdate',
					".mysql_escape_string( $this->tableName) .".mdate as 'mdate'
				FROM
					".mysql_escape_string( $this->tableName) ." 
				WHERE
					".mysql_escape_string( $this->tableName) .".id_administrator = ".mysql_escape_string( $this->id );					

		DB::getInstance()->query( $querySuccess, $sql, $recordSet );
	}
	/************************************************/
	/************************************************/
	function login( &$loginSuccess, $emailaddress, $password ) {
		
		$loginSuccess = false;
		
		try {
		
			if( strlen( $password ) <= 32 ) {
				$sql = 
					"SELECT  
						".mysql_escape_string( $this->tableName) .".id_administrator as 'id_administrator',
						".mysql_escape_string( $this->tableName) .".first_name as 'first_name',
						".mysql_escape_string( $this->tableName) .".last_name as 'last_name',
						".mysql_escape_string( $this->tableName) .".email_address as 'email_address',
						".mysql_escape_string( $this->tableName) .".password as 'password',
						".mysql_escape_string( $this->tableName) .".ldate as 'ldate',
						".mysql_escape_string( $this->tablePrefix )."administratortype.administratortype_alias as 'administratortype_alias'						
					FROM
						".mysql_escape_string( $this->tableName) ." INNER JOIN ".mysql_escape_string( $this->tablePrefix )."administratortype ON ".mysql_escape_string( $this->tableName) .".id_administratortype = ".mysql_escape_string( $this->tablePrefix )."administratortype.id_administratortype
					WHERE 
						".mysql_escape_string( $this->tableName) .".email_address = '".mysql_escape_string( $emailaddress )."' 
						AND ".mysql_escape_string( $this->tableName) .".administrator_status = '1'
					ORDER BY ".mysql_escape_string( $this->tableName) .".id_administrator";					
					
				
				DB::getInstance()->query( $querySuccess, $sql, $recordSet );
				
				if( $querySuccess && sizeof( $recordSet ) > 0 && strcmp ( $recordSet[0]['password'] , $this->encrypt( mysql_escape_string( $password ) ) ) == 0  ) {					
					
					if( $recordSet[0]['id_administrator'] != '' 
						&& $recordSet[0]['first_name'] != ''
						&& $recordSet[0]['last_name'] != ''
						&& $recordSet[0]['email_address'] != ''
						&& $recordSet[0]['password'] != '' ) {
						
						$this->id_administrator = $recordSet[0]['id_administrator'];
						$this->firstName = $recordSet[0]['first_name'];
						$this->lastName = $recordSet[0]['last_name'];
						$this->emailAddress = $recordSet[0]['email_address'];
						$this->ldate = $recordSet[0]['ldate'];
						$this->administratorType = $recordSet[0]['administratortype_alias'];						
											
						$this->setLastLoginDate();
						$this->setSessionVariables();
						
						$loginSuccess = true;
					}												
				}
			}
		} catch( exception $e ) {
			$loginSuccess = false;
		}		
	}
	
	/************************************************/
	/************************************************/
	function redirectLogin( ) {	
		header( 'Location: dashboard' );
		exit();
	}
	
	/************************************************/
	/************************************************/
	function logout( ) {	
		
		unset( $this->id_administrator );
		unset( $this->firstName );
		unset( $this->lastName );
		unset( $this->emailAddress );
		unset( $this->ldate );
		unset( $this->administratorType );		
		
		unset( $_SESSION[$this->backend_ID] ) ;	
		unset( $_SESSION['isLoggedIn'.$this->backend_ID] );
		unset( $_SESSION['user'.$this->backend_ID] );
	}
	
	/************************************************/
	/************************************************/	
	function setSessionVariables() {
	
		$_SESSION[$this->backend_ID]['ADMIN_ID'] = $this->id_administrator;
		$_SESSION[$this->backend_ID]['ADMIN_FIRSTNAME'] = $this->firstName;
		$_SESSION[$this->backend_ID]['ADMIN_LASTNAME'] = $this->lastName;
		$_SESSION[$this->backend_ID]['ADMIN_EMAILADDRESS'] = $this->emailAddress;
		$_SESSION[$this->backend_ID]['ADMIN_LASTLOGINDATE'] = $this->ldate;
		$_SESSION[$this->backend_ID]['ADMIN_TYPE'] = $this->administratorType;		
		
		//session variables for tinymce
		$_SESSION['isLoggedIn'.$this->backend_ID] = true;
		$_SESSION['user'.$this->backend_ID] = $_POST['login'];		
		
		session_write_close ();		
		
	}
	
	/************************************************/
	/************************************************/
	function setLastLoginDate() {
		
		if( isset( $this->id_administrator ) && $this->id_administrator != '' ) {
			$updateValues['ldate'] = time();
			DB::getInstance( 'readwrite' )->updateQuery( $querySuccess, $updateValues, mysql_escape_string( $this->tableName), 'id_administrator', $this->id_administrator );
		}	
	}				
	
	/************************************************/
	/************************************************/
	function getAdministratorType( &$recordSet ) {
	
		$sql = "SELECT DISTINCT
					".mysql_escape_string( $this->tablePrefix )."administratortype.id_administratortype as 'id_administratortype',
					".mysql_escape_string( $this->tablePrefix )."administratortype.administratortype_name as 'administratortype_name'
				FROM
					".mysql_escape_string( $this->tablePrefix )."administratortype";
					
		//Allow the (normal) user to view all non super users only by setting where clause								
		if( $_SESSION[$this->backend_ID]['ADMIN_TYPE'] == 'user' ) {
			$sql .= " WHERE ".mysql_escape_string( $this->tablePrefix )."administratortype.administratortype_alias = 'user'";
		}
							
		$sql .= " ORDER BY 
					".mysql_escape_string( $this->tablePrefix )."administratortype.administratortype_name ASC";					
				
		DB::getInstance()->query( $querySuccess, $sql, $tempRecordSet );
		
			if( $querySuccess && sizeof( $tempRecordSet ) > 0 ) {
			$recordSet = array();
			
				for( $t = 0 ;$t < sizeof( $tempRecordSet ); $t++ ) {
					$recordSet[$tempRecordSet[$t][ 'id_administratortype' ] ] = $tempRecordSet[$t][ 'administratortype_name' ]."&nbsp;&nbsp;&nbsp;";
				}
			}
	
	}
	
	/************************************************/
	/************************************************/
	function getAdministratorAccess( &$recordSet ) {
	
		$sql = "SELECT DISTINCT
					".mysql_escape_string( $this->tablePrefix )."administratoraccess.id_administratoraccess as 'id_administratoraccess',
					".mysql_escape_string( $this->tablePrefix )."administratoraccess.access_name as 'access_name'
				FROM
					".mysql_escape_string( $this->tablePrefix )."administratoraccess
				WHERE
					".mysql_escape_string( $this->tablePrefix )."administratoraccess.access_status = 1";
					
		//Exclude the administrator access checkbox for normal users
		if( $_SESSION[$this->backend_ID]['ADMIN_TYPE'] == 'user' ) {
			$sql .= " AND ".mysql_escape_string( $this->tablePrefix )."administratoraccess.access_alias <> 'administrator-access'";
		}					
		
		$sql .= " ORDER BY 
					".mysql_escape_string( $this->tablePrefix )."administratoraccess.access_name ASC";					
		
			DB::getInstance()->query( $querySuccess, $sql, $tempRecordSet );
		
			if( $querySuccess && sizeof( $tempRecordSet ) > 0 ) {
			$recordSet = array();
			
				for( $t = 0 ;$t < sizeof( $tempRecordSet ); $t++ ) {
					$recordSet[$tempRecordSet[$t][ 'id_administratoraccess' ] ] = $tempRecordSet[$t][ 'access_name' ];
				}
			}
	
	}

	/************************************************/
	/************************************************/
	function setAdministratorAccess( $accessIds, $formAction ) {

		try {							
			if( sizeof( $accessIds ) > 0 ) {
			
				if( $formAction == 'update') {
					DB::getInstance( 'full' )->delete( $querySuccess, mysql_escape_string( $this->tablePrefix ).'administrator_administratoraccess', 'id_administrator', $this->id );	
				}

				 $insertArray = array();
				 for($x = 0 ; $x < sizeof( $accessIds );$x++ ) {
					$insertArray[$x] = array( $this->id, $accessIds[$x] );
				 }							 
				
				DB::getInstance( 'readwrite' )->bulkInsertQuery( $querySuccess, $insertArray, mysql_escape_string( $this->tablePrefix ).'administrator_administratoraccess', array( 'id_administrator', 'id_administratoraccess' ), false );
						 
			}
		} catch ( exception $e ) { 
			$querySuccess = false;
		}
		
	}
	
	/************************************************/
	/************************************************/
	function getAdministratorAccessIds( &$recordSet )  {
	
		$sql = "SELECT DISTINCT
					".mysql_escape_string( $this->tablePrefix )."administrator_administratoraccess.id_administratoraccess as 'id_administratoraccess'
				FROM	
					".mysql_escape_string( $this->tablePrefix )."administrator_administratoraccess
				WHERE
					".mysql_escape_string( $this->tablePrefix )."administrator_administratoraccess.id_administrator = ".mysql_escape_string($this->id);
					
	
			DB::getInstance()->query( $querySuccess, $sql, $tempRecordSet );
		
			if( $querySuccess && sizeof( $tempRecordSet ) > 0 ) {		
			$recordSet = array();
			
			for($t=0;$t<sizeof($tempRecordSet);$t++) {
				$recordSet[$t] = $tempRecordSet[$t]['id_administratoraccess'];
			}		
		}

	}

	/************************************************/
	/************************************************/		
	function checkAccessByEntities( $entities ) {
	
		$sql = "SELECT DISTINCT
						".mysql_escape_string( $this->tablePrefix )."administratoraccess.access_alias as 'access_alias'
				 FROM
						".mysql_escape_string( $this->tablePrefix )."administratoraccess INNER JOIN ".mysql_escape_string( $this->tablePrefix )."administrator_administratoraccess ON ".mysql_escape_string( $this->tablePrefix )."administratoraccess.id_administratoraccess = ".mysql_escape_string( $this->tablePrefix )."administrator_administratoraccess.id_administratoraccess
				WHERE
						".mysql_escape_string( $this->tablePrefix )."administratoraccess.access_status = '1'
						AND ".mysql_escape_string( $this->tablePrefix )."administrator_administratoraccess.id_administrator = ".mysql_escape_string( $this->adminId )."
						AND ".mysql_escape_string( $this->tablePrefix )."administratoraccess.access_alias IN (".$entities.")";	
	
		DB::getInstance()->query( $querySuccess, $sql, $recordSet );

		if( $querySuccess && sizeof( $recordSet ) > 0 ) {
			return 'true';
		} else {
			return 'false';
		}
		
	}
	
	/************************************************/
	/************************************************/		
	function setupEntityAccess() {
	
		if( isset( $this->adminId ) && $this->adminId != 0 ) {
			$sql = "SELECT DISTINCT
							".mysql_escape_string( $this->tablePrefix )."administratoraccess.access_alias as 'access_alias',
							".mysql_escape_string( $this->tablePrefix )."administratortype.administratortype_alias as 'administratortype_alias'
					 FROM
							".mysql_escape_string( $this->tableName) ." INNER JOIN ".mysql_escape_string( $this->tablePrefix )."administratortype ON ".mysql_escape_string( $this->tableName) .".id_administratortype = ".mysql_escape_string( $this->tablePrefix )."administratortype.id_administratortype
							INNER JOIN ".mysql_escape_string( $this->tablePrefix )."administrator_administratoraccess ON ".mysql_escape_string( $this->tablePrefix )."administrator_administratoraccess.id_administrator = ".mysql_escape_string( $this->tableName) .".id_administrator
							INNER JOIN ".mysql_escape_string( $this->tablePrefix )."administratoraccess ON ".mysql_escape_string( $this->tablePrefix )."administratoraccess.id_administratoraccess = ".mysql_escape_string( $this->tablePrefix )."administrator_administratoraccess.id_administratoraccess
					WHERE
							".mysql_escape_string( $this->tablePrefix )."administratoraccess.access_status = '1'
							AND ".mysql_escape_string( $this->tablePrefix )."administrator_administratoraccess.id_administrator = ".mysql_escape_string( $this->adminId );																														
		
			DB::getInstance()->query( $querySuccess, $sql, $recordSet );			
	
			$this->entityAccess = array();		
			if( $querySuccess && sizeof( $recordSet ) > 0 ) {
				for($r=0;$r<sizeof($recordSet);$r++) {
					$this->entityAccess[$r] = trim( $recordSet[$r]['access_alias'] );
					//$this->entityAccess[$r] .= trim( $recordSet[$r]['access_alias'] );
				}
			}
			//print_r($this->entityAccess);
		}
	}			
	
	/************************************************/
	/************************************************/
	function accessControl( $entity1, $entity2='', $entity3='', $entity4='', $entity5='' ) {
	
		if( $_SESSION[$this->backend_ID]['ADMIN_TYPE'] == 'superuser' ) {		
			return true;
		}
		$accessAllowResult1 = false;
		$accessAllowResult2 = false;
		$accessAllowResult3 = false;		
		$accessAllowResult4 = false;		
		$accessAllowResult5 = false;				

		$accessAllowResult1 = in_array( strtolower( $entity1 ), $this->entityAccess );
		
		if( $entity2 != '' ) $accessAllowResult2 = in_array( strtolower( $entity2 ), $this->entityAccess );
		if( $entity3 != '' ) $accessAllowResult3 = in_array( strtolower( $entity3 ), $this->entityAccess );
		if( $entity4 != '' ) $accessAllowResult4 = in_array( strtolower( $entity4 ), $this->entityAccess );
		if( $entity5 != '' ) $accessAllowResult5 = in_array( strtolower( $entity5 ), $this->entityAccess );
		
		if( $accessAllowResult1 || $accessAllowResult2 || $accessAllowResult3 || $accessAllowResult4 || $accessAllowResult5) return 'true';
		else return 'false';
		
	}
	
	/***************************************************************/
	/***************************************************************/	
	function encrypt( $text ) {

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
	function decrypt( $encrypted_text ){
		
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