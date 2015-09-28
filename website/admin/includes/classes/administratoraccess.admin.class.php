<?php
/*	======================================================
	Diderson Baka Web Developer Developer - www.diderson.com
	------------------------------------------------------
	NOTE: This code is intellectual property of
	Diderson Baka  and may not be
	reproduced or used without prior permission.
	------------------------------------------------------
	Copyright 2014 Diderson Baka Web Developer 
	======================================================	*/

require_once( 'includes/classes/entitymanager.class.php' );
require_once( 'includes/classes/pager.class.php' );

class AdministratorAccess extends EntityManager {

	public $listHtmlPageTitle;
	public $listPageTitle;	
	public $listContentTemplate;	
	public $listDefaultSort;
	
	public $pageSize;
	public $currentPage;
		
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
		
	/************************************************/
	/************************************************/
	function __construct( $id = 0, $templateType = 'list', $pageSize = 25, $currentPage = 1, $sortBy = '' ) {
	
		parent::__construct();

		/*****************************/
		/* START: Edit per class file 
		/*****************************/
		$this->id = $id;	
		$this->tablePrefix = 'anc_';
		$this->tableName = $this->tablePrefix.'administratoraccess';
		$this->idName = 'id_administratoraccess';
		
		//Web variables
		$this->webUrl = "";

		//List page variables
		$this->listFileName = 'administrator-access-list.php';		
		$this->listContentTemplate = 'administrator-access-list.tpl';
		$this->listHtmlPageTitle = 'Administrator Access';
		$this->listPageTitle = 'Administrator Access';
		$this->listDefaultSort = "2";
		
		$this->entityName = 'Administrator Access';
		$this->entityAliasName = 'administratoraccess';
		$this->entityStatusFieldName = 'access_status';
		$this->insertButtonName = 'Insert new Access';		
		
		//Edit page variables		
		$this->editFileName = 'administrator-access-edit.php';										
		$this->editHtmlPageTitle = 'Edit Administrator Access';
		$this->editPageTitle = 'Edit Administrator Access';
		$this->editContentTemplate = 'administrator-access-edit.tpl';
		$this->insertHtmlPageTitle = 'Insert Administrator Access';
		$this->insertPageTitle = 'Insert Administrator Access';
		$this->editPanelHeading	= 'Access Details';	
		
		//Edit buttons
		$this->insertAsNewEnabled = 1;
		
		//Search
		$this->searchEnabled = 0;		

		//List action variables		
		$this->enableDelete = true;	
		$this->enableEdit = true;	

		//List Column Names
		$this->listColumns = array(
			'ID', 
			'Access',
			'Alias',
			'Access Status',
			'Creation Date'			
			);		

		//List query		
		$this->listSql = 
			"SELECT DISTINCT
				".mysql_escape_string($this->tablePrefix)."administratoraccess.id_administratoraccess as 'id',
				".mysql_escape_string($this->tablePrefix)."administratoraccess.access_name as 'access_name',
				".mysql_escape_string($this->tablePrefix)."administratoraccess.access_alias as 'access_alias',
				".mysql_escape_string($this->tablePrefix)."administratoraccess.access_status as 'access_status',
				".mysql_escape_string($this->tablePrefix)."administratoraccess.cdate as 'cdate',
				".mysql_escape_string($this->tablePrefix)."administratoraccess.mdate as 'mdate'									
			FROM
				".mysql_escape_string($this->tablePrefix)."administratoraccess"; 
					
		//Edit form fields	
		$this->formFieldNames = array(
			'id_administratoraccess',
			'access_name',
			'access_alias',
			'access_status',
			'cdate',			
			'mdate'
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
				
	}		
	
	/************************************************/
	/************************************************/
	function getEditData( &$recordSet ) {		
		
		$sql = "SELECT DISTINCT
						".mysql_escape_string($this->tablePrefix)."administratoraccess.id_administratoraccess as 'id',
						".mysql_escape_string($this->tablePrefix)."administratoraccess.access_name as 'access_name',
						".mysql_escape_string($this->tablePrefix)."administratoraccess.access_alias as 'access_alias',
						".mysql_escape_string($this->tablePrefix)."administratoraccess.access_status as 'access_status',
						".mysql_escape_string($this->tablePrefix)."administratoraccess.cdate as 'cdate',
						".mysql_escape_string($this->tablePrefix)."administratoraccess.mdate as 'mdate'						
				FROM
					".mysql_escape_string($this->tablePrefix)."administratoraccess 
				WHERE
					".mysql_escape_string($this->tablePrefix)."administratoraccess.id_administratoraccess = ".mysql_escape_string( $this->id );
	
		DB::getInstance()->query( $querySuccess, $sql, $recordSet );
	}	
	
	/************************************************/
	/************************************************/		

}
?>