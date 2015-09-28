<?php
/*  ======================================================
  Diderson Baka Web Developer Developer - www.diderson.com
  ------------------------------------------------------
  NOTE: This code is intellectual property of
  Diderson Baka  and may not be
  reproduced or used without prior permission.
  ------------------------------------------------------
  Copyright 2015 Diderson Baka Web Developer 
  ======================================================  */
  
require_once( 'includes/classes/entitymanager.class.php' ); 
require_once( 'includes/classes/pager.class.php' );

class Mpmplconstituencyreview extends EntityManager {
  
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
    $this->tableName = $this->tablePrefix.'mp_mpl_constreview_ass';
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
    $this->editFileName = 'mpmplconstituencyreview-edit';                    
    $this->editHtmlPageTitle = 'MP/MPL Constituency review';
    $this->editPageTitle = 'MP/MPL Constituency review';
    $this->editContentTemplate = 'mpmplconstituencyreview-edit.tpl';
    $this->insertHtmlPageTitle = 'MP/MPL Constituency review';
    $this->insertPageTitle = 'MP/MPL Governance review';
    $this->editPanelHeading = 'ASSESSMENT: TO BE COMPLETED BY THE MP/MPL (Compulsory)'; 
    $this->enabledatePicker = true;
    
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
      'mp_mpl_constreview' 
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
    
    //$this->setupEntityAccess();               

  }       
  
  /************************************************/
  /************************************************/
  function getEditData( &$recordSet ) {   
    
    $sql = "SELECT DISTINCT
          ".mysql_escape_string( $this->tableName) .".id_mp_mpl_constreview_ass as 'id_mp_mpl_constreview_ass',
          ".mysql_escape_string( $this->tableName) .".id_administrator as 'id',
          ".mysql_escape_string( $this->tableName) .".mp_mpl_constreview as 'mp_mpl_constreview_json',
          ".mysql_escape_string( $this->tableName) .".cdate as 'cdate',
          ".mysql_escape_string( $this->tableName) .".mdate as 'mdate'
        FROM
          ".mysql_escape_string( $this->tableName) ." 
        WHERE
          ".mysql_escape_string( $this->tableName) .".id_administrator = ".mysql_escape_string( $this->id );          

    DB::getInstance()->query( $querySuccess, $sql, $recordSet );

    if ($querySuccess && sizeof($recordSet) > 0) {
      if ($recordSet[0]['mp_mpl_constreview_json'] !='') $recordSet[0]['mp_mpl_constreview'] = json_decode($recordSet[0]['mp_mpl_constreview_json'], true);
     
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
  function getMpMplConstituencyReview ( &$recordSet) {
    $sql = "SELECT DISTINCT
            anc_mp_mpl_constreview.id_mpl_constreview as 'id_mpl_constreview',
            anc_mp_mpl_constreview.mpl_constreview_libele as 'mpl_constreview_libele'
          FROM 
            anc_mp_mpl_constreview 
          ORDER BY anc_mp_mpl_constreview.id_mpl_constreview";

          DB::getInstance()->query( $querySuccess, $sql, $recordSet );
  }

  /************************************************/
  /************************************************/
  function getMpMplGovernanceReview ( &$recordSet) {
    $sql = "SELECT DISTINCT
            anc_mp_mpl_govreview.id_mp_mpl_govreview as 'id_mp_mpl_govreview',
            anc_mp_mpl_govreview.mp_mpl_govreview_libele as 'mp_mpl_govreview_libele'
          FROM 
            anc_mp_mpl_govreview 
          ORDER BY anc_mp_mpl_govreview.id_mp_mpl_govreview";

          DB::getInstance()->query( $querySuccess, $sql, $recordSet );
  }

  /************************************************/
  /************************************************/
  function getMpMplGovernanceWorkAndPR ( &$recordSet) {

    $sql = "SELECT DISTINCT
            anc_mp_mpl_govpr.id_mp_mpl_govpr as 'id_mp_mpl_govpr',
            anc_mp_mpl_govpr.mp_mpl_govpr_libele as 'mp_mpl_govpr_libele',
            anc_mp_mpl_govpr.mp_mpl_govpr_section as 'mp_mpl_govpr_section'
          FROM 
            anc_mp_mpl_govpr 
          ORDER BY anc_mp_mpl_govpr.id_mp_mpl_govpr";

          DB::getInstance()->query( $querySuccess, $sql, $recordSet );
      if ($querySuccess && sizeof($recordSet) > 0) {
        for ($i=0; sizeof($recordSet) > $i; $i++) {
          $recordSet[$i]['mp_mpl_pr_section'] = json_decode($recordSet[$i]['mp_mpl_govpr_section'], true);
        }
      }
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