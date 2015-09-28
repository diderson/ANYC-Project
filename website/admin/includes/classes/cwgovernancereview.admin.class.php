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

class Cwgovernancereview extends EntityManager {
  
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
  function __construct( $id = 0, $templateType = 'list', $pageSize = 10, $currentPage = 1, $sortBy = '3' ) {
  
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
    $this->tableName = $this->tablePrefix.'cw_preview_ass';
    $this->idName = 'id_mp_mpl_govreview_ass';
    
    //Web variables
    $this->webUrl = "";   

    //List page variables
    $this->listFileName = 'cwgovernancereview-list';   
    $this->listContentTemplate = 'cwgovernancereview-list.tpl';
    $this->listHtmlPageTitle = 'Chief Whip Governance review';
    $this->listPageTitle =' Chief Whip Governance review';
    $this->listDefaultSort = "2";
    
    $this->entityName = 'Councillor Assessment';
    $this->entityAliasName = 'Councillor Assessment';
    $this->entityStatusFieldName = 'administrator_status';
    $this->insertButtonName = '';   

    //Edit page variables   
    $this->editFileName = 'cwgovernancereview-edit';                    
    $this->editHtmlPageTitle = 'Chief Whip Governance review';
    $this->editPageTitle = 'Chief Whip Governance review';
    $this->editContentTemplate = 'cwpreview-edit.tpl';
    $this->insertHtmlPageTitle = 'Chief Whip Governance review';
    $this->insertPageTitle = 'Chief Whip Governance review';
    $this->editPanelHeading = 'To be Completed by the Chief Whip (Compulsory)'; 
    $this->enabledatePicker = true;
    
    //Edit buttons
    $this->insertAsNewEnabled = 0;
    
    //Search
    $this->searchEnabled = 1;   
    
    //List action variables 
    $this->enableDelete = false;
    $this->enableView = false; 
    $this->enableEdit = true; 
    
    //List Column Names
    $this->listColumns = array(
      'ID', 
      'Councillor Name',      
      'Municipality', 
      'Status',
      'Score',       
      'Assessment Date',
      'Last Modification Date'     
      );    
    
    //List query  
    $this->listSql =
      "SELECT DISTINCT
          anc_mp_mpl_govreview_ass.id_mp_mpl_govreview_ass as 'id',
          CONCAT(anc_administrator.first_name, ' ', anc_administrator.last_name) AS councillor_name,
          anc_municipality.municipality_name AS 'municipality_name',
          anc_mp_mpl_govreview_ass.mp_mpl_status as 'mp_mpl_status',
          anc_mp_mpl_govreview_ass.mp_mpl_score 'mp_mpl_score',
          anc_mp_mpl_govreview_ass.cdate as 'cdate',
          anc_mp_mpl_govreview_ass.mdate as 'mdate'
        FROM
          anc_mp_mpl_govreview_ass INNER JOIN anc_profile ON anc_profile.id_administrator =  anc_mp_mpl_govreview_ass.id_administrator
          INNER JOIN anc_administrator ON anc_profile.id_administrator =  anc_administrator.id_administrator
          INNER JOIN anc_municipality ON anc_profile.id_municipality =  anc_municipality.id_municipality
        WHERE
          anc_profile.id_chiefwhip = ".mysql_escape_string( $this->id );
        //echo $this->listSql;
    //Allow the (normal) user to view all non super users only by setting where clause
   /* if( $_SESSION[$backend_ID]['ADMIN_TYPE'] == 'user' ) {
      $this->setListFilter( 'user' );  
                        
    }  */     
    
    //Edit form fields    
    $this->formFieldNames = array(
      'id_administrator',
      'id_mp_mpl_govreview_ass',
      'cw_preview',
      'cw_ovpefrating' 
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
          ".mysql_escape_string( $this->tableName) .".id_cw_preview_ass as 'id_cw_preview_ass',
          ".mysql_escape_string( $this->tableName) .".id_administrator as 'id_administrator',
          ".mysql_escape_string( $this->tableName) .".id_mp_mpl_govreview_ass as 'id',
          ".mysql_escape_string( $this->tableName) .".cw_preview as 'cw_preview_json',
          ".mysql_escape_string( $this->tableName) .".cw_ovpefrating as 'cw_ovpefrating_json',
          ".mysql_escape_string( $this->tableName) .".cdate as 'cdate',
          ".mysql_escape_string( $this->tableName) .".mdate as 'mdate'
        FROM
          ".mysql_escape_string( $this->tableName) ."
        WHERE
          ".mysql_escape_string( $this->tableName) .".id_mp_mpl_govreview_ass = ".mysql_escape_string( $this->id);          

    DB::getInstance()->query( $querySuccess, $sql, $recordSet );

    if ($querySuccess && sizeof($recordSet) > 0) {
      if ($recordSet[0]['cw_preview_json'] !='') $recordSet[0]['cw_preview'] = json_decode($recordSet[0]['cw_preview_json'], true);
      if ($recordSet[0]['cw_ovpefrating_json'] !='') $recordSet[0]['cw_ovpefrating'] = json_decode($recordSet[0]['cw_ovpefrating_json'], true);
     
    }
  }

  function getCouncillorReview($id_mp_mpl_govreview_ass, &$recordSet){

     $sql = "SELECT DISTINCT
              anc_mp_mpl_govreview_ass.id_mp_mpl_govreview_ass as 'id_mp_mpl_govreview_ass',
              anc_mp_mpl_govreview_ass.id_administrator as 'id',
              CONCAT(anc_administrator.first_name, ' ', anc_administrator.last_name) AS councillor_name,
              anc_mp_mpl_govreview_ass.mp_mpl_govreview as 'mp_mpl_govreview_json',
              anc_mp_mpl_govreview_ass.mp_mpl_govpr_review as 'mp_mpl_govpr_review_json',
              anc_mp_mpl_govreview_ass.mp_mpl_constreview as 'mp_mpl_constreview_json',
              anc_mp_mpl_govreview_ass.mp_mpl_status as 'mp_mpl_status',
              anc_mp_mpl_govreview_ass.mp_mpl_score 'mp_mpl_score',
              anc_mp_mpl_govreview_ass.cdate as 'cdate',
              anc_mp_mpl_govreview_ass.mdate as 'mdate'
            FROM
              anc_mp_mpl_govreview_ass  INNER JOIN anc_profile ON anc_profile.id_administrator =  anc_mp_mpl_govreview_ass.id_administrator
              INNER JOIN anc_administrator ON anc_profile.id_administrator =  anc_administrator.id_administrator
            WHERE
              anc_mp_mpl_govreview_ass.id_mp_mpl_govreview_ass = $id_mp_mpl_govreview_ass
            AND anc_profile.id_chiefwhip = ".$_SESSION['BACKEND_ADMIN']['ADMIN_ID'];

     DB::getInstance()->query( $querySuccess, $sql, $recordSet );

     if ($querySuccess && sizeof($recordSet) > 0) {
      $profile_phone = array();
      $profile_socialnetwork = array();
      $profile_academic = array();
      $profile_employement = array();
      $profile_leaderposition = array();
      $profile_ancmember = array();

      if ($recordSet[0]['mp_mpl_govreview_json'] !='') $recordSet[0]['mp_mpl_govreview'] = json_decode($recordSet[0]['mp_mpl_govreview_json'], true);
      if ($recordSet[0]['mp_mpl_govpr_review_json'] !='') $recordSet[0]['mp_mpl_govpr_review'] = json_decode($recordSet[0]['mp_mpl_govpr_review_json'], true);
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
  function getCwGovernanceReview ( &$recordSet) {
    $sql = "SELECT DISTINCT
            anc_chiefwhip_preview.id_chiefwhip_preview as 'id_chiefwhip_preview',
            anc_chiefwhip_preview.chiefwhip_preview_libele as 'chiefwhip_preview_libele'
          FROM 
            anc_chiefwhip_preview 
          ORDER BY anc_chiefwhip_preview.id_chiefwhip_preview";

          DB::getInstance()->query( $querySuccess, $sql, $recordSet );
  }

  /************************************************/
  /************************************************/
  function getOverPerformanceReview ( &$recordSet) {
    $sql = "SELECT DISTINCT
            anc_ovpefrating.id_ovpefrating as 'id_ovpefrating',
            anc_ovpefrating.ovpefrating_libele as 'ovpefrating_libele'
          FROM 
            anc_ovpefrating 
          ORDER BY anc_ovpefrating.id_ovpefrating";

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