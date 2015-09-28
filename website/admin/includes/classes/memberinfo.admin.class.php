<?php
/*	======================================================
	Diderson Baka Web Developer Developer - www.diderson.com
	------------------------------------------------------
	NOTE: This code is intellectual property of
	Diderson Baka  and may not be
	reproduced or used without prior permission.
	------------------------------------------------------
	Copyright 2015 Diderson Baka Web Developer 
	======================================================	*/
	
require_once( 'includes/classes/entitymanager.class.php' );	
require_once( 'includes/classes/pager.class.php' );

class Memberinfo extends EntityManager {
	
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
		$this->tableName = $this->tablePrefix.'profile';
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
		$this->editFileName = 'member-info-edit';										
		$this->editHtmlPageTitle = 'Personal Information';
		$this->editPageTitle = 'Personal Information';
		$this->editContentTemplate = 'member-info-edit.tpl';
		$this->insertHtmlPageTitle = 'Insert Administrator';
		$this->insertPageTitle = 'Personal Information';
		$this->editPanelHeading	= 'Edit Your Personal Information';	
		
		//Edit buttons
		$this->insertAsNewEnabled = 0;
		
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
			'id_chiefwhip',
			'profile_gender',
			'profile_postalcode', 
			'profile_work_address', 
			'profile_home_address',
			'profile_postal_address',
			'profile_phone',
			//'profile_email',
			'profile_socialnetwork',
			'profile_parliament',
			'id_provincial_legislature',
			'id_municipality',
			'profile_academic',
			'profile_employement',
			'profile_ancmember',
			'profile_leaderposition'
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
					".mysql_escape_string( $this->tableName) .".id_administartor_profile as 'id_profile',
					".mysql_escape_string( $this->tableName) .".id_chiefwhip as 'id_chiefwhip',
					".mysql_escape_string( $this->tableName) .".id_administrator as 'id',
					".mysql_escape_string( $this->tableName) .".profile_gender as 'profile_gender',
					".mysql_escape_string( $this->tableName) .".profile_postalcode as 'profile_postalcode',
					".mysql_escape_string( $this->tableName) .".profile_work_address as 'profile_work_address',										
					".mysql_escape_string( $this->tableName) .".profile_home_address as 'profile_home_address',
					".mysql_escape_string( $this->tableName) .".profile_postal_address as 'profile_postal_address',
					".mysql_escape_string( $this->tableName) .".profile_phone as 'profile_phone',
					".mysql_escape_string( $this->tableName) .".profile_email as 'profile_email',
					".mysql_escape_string( $this->tableName) .".profile_socialnetwork as 'profile_socialnetwork',
					".mysql_escape_string( $this->tableName) .".profile_parliament as 'profile_parliament',
					".mysql_escape_string( $this->tableName) .".id_provincial_legislature as 'id_provincial_legislature',
					".mysql_escape_string( $this->tableName) .".id_municipality as 'id_municipality',
					".mysql_escape_string( $this->tableName) .".profile_academic as 'profile_academic',
					".mysql_escape_string( $this->tableName) .".profile_employement as 'profile_employement',
					".mysql_escape_string( $this->tableName) .".profile_ancmember as 'profile_ancmember',
					".mysql_escape_string( $this->tableName) .".profile_leaderposition as 'profile_leaderposition',
					".mysql_escape_string( $this->tableName) .".cdate as 'cdate',
					".mysql_escape_string( $this->tableName) .".mdate as 'mdate'
				FROM
					".mysql_escape_string( $this->tableName) ." 
				WHERE
					".mysql_escape_string( $this->tableName) .".id_administrator = ".mysql_escape_string( $this->id );					

		DB::getInstance()->query( $querySuccess, $sql, $recordSet );

		if ($querySuccess && sizeof($recordSet) > 0) {
			$profile_phone = array();
			$profile_socialnetwork = array();
			$profile_academic = array();
			$profile_employement = array();
			$profile_leaderposition = array();
			$profile_ancmember = array();

			if ($recordSet[0]['profile_phone'] !='') $profile_phone = json_decode($recordSet[0]['profile_phone'], true);
			if ($recordSet[0]['profile_socialnetwork'] !='') $profile_socialnetwork = json_decode($recordSet[0]['profile_socialnetwork'], true);
			if ($recordSet[0]['profile_academic'] !='') $profile_academic = json_decode($recordSet[0]['profile_academic'], true);
			if ($recordSet[0]['profile_employement'] !='') $profile_employement = json_decode($recordSet[0]['profile_employement'], true);
			if ($recordSet[0]['profile_leaderposition'] !='') $profile_leaderposition = json_decode($recordSet[0]['profile_leaderposition'], true);
			if ($recordSet[0]['profile_ancmember'] !='') $profile_ancmember = json_decode($recordSet[0]['profile_ancmember'], true);

			if (sizeof($profile_phone) > 0) {
				if (isset($profile_phone['profile_home_telephone'])) $recordSet[0]['profile_home_telephone'] = $profile_phone['profile_home_telephone'];
				if (isset($profile_phone['profile_work_telephone'])) $recordSet[0]['profile_work_telephone'] = $profile_phone['profile_work_telephone'];
				if (isset($profile_phone['profile_mobile'])) $recordSet[0]['profile_mobile'] = $profile_phone['profile_mobile'];
			}

			if (sizeof($profile_socialnetwork) > 0) {
				if (isset($profile_socialnetwork['profile_bbm'])) $recordSet[0]['profile_bbm'] = $profile_socialnetwork['profile_bbm'];
				if (isset($profile_socialnetwork['profile_twitter'])) $recordSet[0]['profile_twitter'] = $profile_socialnetwork['profile_twitter'];
				if (isset($profile_socialnetwork['profile_facebook'])) $recordSet[0]['profile_facebook'] = $profile_socialnetwork['profile_facebook'];
			}

			if (sizeof($profile_academic) > 0) {
				for ($i=0; sizeof($profile_academic['academic']) > $i; $i++) {
					if (isset($profile_academic['academic'][$i]['academic_year'])) $recordSet[0]['academic'][$i]['academic_year'] = $profile_academic['academic'][$i]['academic_year'];
					if (isset($profile_academic['academic'][$i]['academic_institut'])) $recordSet[0]['academic'][$i]['academic_institut'] = $profile_academic['academic'][$i]['academic_institut'];
					if (isset($profile_academic['academic'][$i]['academic_qualification'])) $recordSet[0]['academic'][$i]['academic_qualification'] = $profile_academic['academic'][$i]['academic_qualification'];
				}
			}

			if (sizeof($profile_employement) > 0) {
				for ($i=0; sizeof($profile_employement['employment']) > $i; $i++) {
					if (isset($profile_employement['employment'][$i]['employment_institut'])) $recordSet[0]['employment'][$i]['employment_institut'] = $profile_employement['employment'][$i]['employment_institut'];
					if (isset($profile_employement['employment'][$i]['employment_position'])) $recordSet[0]['employment'][$i]['employment_position'] = $profile_employement['employment'][$i]['employment_position'];
					
					if (isset($profile_employement['employment'][$i]['employment_year'])) {
						$employment_year = explode('-', $profile_employement['employment'][$i]['employment_year']);
						if (isset($employment_year[0])) $recordSet[0]['employment'][$i]['employment_startyear'] = $employment_year[0];
						if (isset($employment_year[1])) $recordSet[0]['employment'][$i]['employment_endyear'] = $employment_year[1];
					} 
				}
			}

			if (sizeof($profile_ancmember) > 0) {
				if (isset($profile_ancmember['ancmember_number'])) $recordSet[0]['ancmember_number'] = $profile_ancmember['ancmember_number'];
				if (isset($profile_ancmember['ancmember_branch'])) $recordSet[0]['ancmember_branch'] = $profile_ancmember['ancmember_branch'];
				if (isset($profile_ancmember['ancmember_province'])) $recordSet[0]['ancmember_province'] = $profile_ancmember['ancmember_province'];
				if (isset($profile_ancmember['ancmember_region'])) $recordSet[0]['ancmember_region'] = $profile_ancmember['ancmember_region'];
			}


			if (sizeof($profile_leaderposition) > 0) {
				if (isset($profile_leaderposition['leadership_anc'])) $recordSet[0]['leadership_anc'] = $profile_leaderposition['leadership_anc'];
				if (isset($profile_leaderposition['leadership_womenleague'])) $recordSet[0]['leadership_womenleague'] = $profile_leaderposition['leadership_womenleague'];
				if (isset($profile_leaderposition['leadership_youthleague'])) $recordSet[0]['leadership_youthleague'] = $profile_leaderposition['leadership_youthleague'];
				if (isset($profile_leaderposition['leadership_cosatu'])) $recordSet[0]['leadership_cosatu'] = $profile_leaderposition['leadership_cosatu'];
				if (isset($profile_leaderposition['leadership_sacp'])) $recordSet[0]['leadership_sacp'] = $profile_leaderposition['leadership_sacp'];
				if (isset($profile_leaderposition['leadership_sanco'])) $recordSet[0]['leadership_sanco'] = $profile_leaderposition['leadership_sanco'];
				if (isset($profile_leaderposition['leadership_mkmva'])) $recordSet[0]['leadership_mkmva'] = $profile_leaderposition['leadership_mkmva'];
				if (isset($profile_leaderposition['leadership_veterans'])) $recordSet[0]['leadership_veterans'] = $profile_leaderposition['leadership_veterans'];
			}
		}
	}			
	
	/************************************************/
	/************************************************/
	function getProvince ( &$recordSet) {
		$sql = "SELECT DISTINCT
						anc_province.id_province as 'id_province',
						anc_province.province_name as 'province_name'
					FROM 
						anc_province 
					ORDER BY anc_province.id_province";

					DB::getInstance()->query( $querySuccess, $sql, $recordSet );

	}

	/************************************************/
	/************************************************/
	function updateProfileCompleted ($idMunicipality) {
		$sql = "UPDATE
					anc_administrator
				SET
					anc_administrator.administrator_profile_status = 1,
					anc_administrator.id_municipality = $idMunicipality
				WHERE
					anc_administrator.id_administrator = $this->id 
			";
			//echo $sql; exit;
			DB::getInstance('readwrite')->queryNoRecordSet( $querySuccess, $sql, $rowsAffected );

			if ($querySuccess) {
				$_SESSION[$this->backend_ID]['ADMIN_PROFILESTATUS'] = 1;
				$_SESSION[$this->backend_ID]['ADMIN_MUNICIPALITY'] = $idMunicipality;
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