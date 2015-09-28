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

class Service extends EntityManager {

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
	function __construct( $id = 0, $templateType = 'list', $pageSize = 25, $currentPage = 1, $sortBy = '', $filters = array(), $getVariables = array() ) {
	
		parent::__construct();

		/*****************************/
		/* START: Edit per class file 
		/*****************************/
		$this->id = $id;		
		$this->tableName = 'med_service';
		$this->idName = 'id_service';
		
		//Web variables
		$this->webUrl = "";

		//List page variables
		$this->listFileName = 'service-list';		
		$this->listContentTemplate = 'service-list.tpl';
		$this->listHtmlPageTitle = 'Liste des Services';
		$this->listPageTitle = 'Liste des Services';
		$this->listDefaultSort = "1";
		
		$this->entityName = 'Service';
		$this->entityAliasName = 'service';
		$this->entityStatusFieldName = 'service_status';
		$this->insertButtonName = 'Insert new Service';
				
		//Edit page variables		
		$this->editFileName = 'service-edit';										
		$this->editHtmlPageTitle = 'Modifier un Service';
		$this->editPageTitle = 'Modifier un Service';
		$this->editContentTemplate = 'service-edit.tpl';
		$this->insertHtmlPageTitle = 'Ajout d\'un Service';
		$this->insertPageTitle = 'Ajout d\'un Service';
		$this->editPanelHeading	= 'Service Details';
		
		//Export Data
		$this->enableExportToCSV = false;
		$this->exportPageTitle = "Service";
		$this->exportColumns = array(
			'ID', 
			'Désignation',		
			'Status',
			'Creation Date',
			'Modified Date'
		);		
		$this->exportListSql = 
			"SELECT DISTINCT
				$this->tableName.id_service AS 'id',
				$this->tableName.service_designation AS 'service_designation',
				$this->tableName.service_status AS 'service_status',
				$this->tableName.cdate AS 'cdate',
				$this->tableName.mdate AS 'mdate'
			FROM 
				$this->tableName";
		
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
			'Désignation',
			'Status',
			'Creation Date',
			'Modified Date'
			);		

		//List query		
		$this->listSql = 
			"SELECT DISTINCT
				$this->tableName.id_service AS 'id',
				$this->tableName.service_designation AS 'service_designation',
				$this->tableName.service_status AS 'service_status',
				$this->tableName.cdate AS 'cdate',
				$this->tableName.mdate AS 'mdate'
			FROM 
				$this->tableName";
					
		//Edit form fields	
		$this->formFieldNames = array(
			'id_service',
			'service_designation',			
			'service_status'
			);				

		//Page size			
		$this->pageSize = ( isset( $pageSize ) && $pageSize != '') ? $pageSize : 50;

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
		
		$this->listFilterData = $filters;
		$this->addGetVariables( $getVariables );
				
	}		
	
	/************************************************/
	/************************************************/
	function getEditData( &$recordSet ) {		
		
		$sql = "SELECT DISTINCT
					$this->tableName.id_service AS 'id',
					$this->tableName.service_designation AS 'service_designation',
					$this->tableName.service_status AS 'service_status',
					$this->tableName.cdate AS 'cdate',
					$this->tableName.mdate AS 'mdate'
				FROM 
					$this->tableName
				WHERE
					$this->tableName.id_service =".mysql_escape_string( $this->id );
	
		DB::getInstance()->query( $querySuccess, $sql, $recordSet );
	}		

	/************************************************/
	/************************************************/
}
?>
