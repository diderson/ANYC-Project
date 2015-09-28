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
//require_once( 'config/config.php' );
//require_once( 'includes/bootstrap.php' );

class EntityManager {
	
	//DB variables
	public $tableName;
	protected $idName;	
	public $listColumns;
	public $formFieldNames;			
	
	//List Variables
	public $listFileName;	
	public $listSql;
	
	//View Variables	
	public $editViewFileName;

	//template type	
	public $templateType;			
	
	//Edit Variables
	public $editFileName;		
	public $id;		
	
	//Edit Form Compoents
	public $tinyMCEEnabled;
	public $datePickerEnabled;
	
	public $allowAddEntity;
	
	//Edit Buttons
	public $insertAsNewEnabled;	
	public $updateOnly;		
	
	//MySQL variables
	public $db_error_number;
	public $db_error_message;	
	
	//Search
	public $searchEnabled;
	
	//Get Variables
	public $getVariables;
	
	//Filter varibles for list
	public $listFilterData;
	
	//Enable Export variable
	public $enableExportToCSV;
	
	//Export List
	public $exportListSql;
	
	//The Columns to be displayed in the CSV.
	public $exportColumns;
	
	public $exportPageTitle;		

	/************************************************/
	/************************************************/
	function __construct( ) {	
	
		$this->getVariables = array( 'page', 'sort', 'filter' );
		$this->tinyMCEEnabled = 0;
		$this->datePickerEnabled = 0;
		$this->insertAsNewEnabled = 1;
		$this->insertEnabled = 1;
		$this->updateOnly = 0;
		$this->searchEnabled = 1;		
		$this->addEntityEnabled = true;
		$this->enableExportToCSV = false;		

	}
	
	/************************************************/
	/************************************************/	
	function exportToCSV( $searchData ){
	
		if( $this->enableExportToCSV == true && sizeof( $this->exportColumns ) > 0 ) {
			
			$this->getExportData( $exportData, $searchData);
			$export_data_string = '';
			$line_break = "\n";
			$filename = str_replace( ' ', '_', $this->exportPageTitle.'-'.$this->listPageTitle.'_('.date("Y-m-j").')' );
			
			$export_data_string .= $this->exportPageTitle.$line_break;
			$export_data_string .= $this->listPageTitle.','.date("Y-m-j h:i:s A").$line_break;
			$export_data_string .= 'Number of Entries,'.sizeof( $exportData ).$line_break.$line_break;			
			$export_data_string .= implode(',',$this->exportColumns).$line_break;

			//Clean data
			for( $x = 0; $x < sizeof( $exportData ); $x++ ) {
				foreach ($exportData[$x] as $key => $value) {
					$exportData[$x][$key] = '"'.str_replace( '"', '\"', trim($value)).'"';
				}
			}
			
			for( $x = 0; $x < sizeof( $exportData ); $x++ ) {
				$export_data_string .= implode( ',', $exportData[$x]).$line_break;
			}

			if( '' != $export_data_string ) {
				
				header("Content-type: application/x-msdownload");
				header("Content-Disposition: attachment; filename=".$filename.".csv");
				header("Pragma: no-cache");
				header("Expires: 0");
				echo $export_data_string;
				exit();
			}
		}
	}	
	
	/************************************************/
	/************************************************/	
	function simpleExportToCSV( $exportData, $exportColumns, $listPageTitle ){
		
		$this->listPageTitle = $listPageTitle;
		$this->exportColumns = $exportColumns;
		
		if( $this->enableExportToCSV == true && sizeof( $this->exportColumns ) > 0 ) {
			
			$export_data_string = '';
			$line_break = "\n";
			$filename = str_replace( ' ', '_', $this->exportPageTitle.'-'.$this->listPageTitle.'_('.date("Y-m-j").')' );
			
			$export_data_string .= $this->exportPageTitle.$line_break;
			$export_data_string .= $this->listPageTitle.','.date("Y-m-j h:i:s A").$line_break;
			$export_data_string .= 'Number of Entries,'.sizeof( $exportData ).$line_break.$line_break;			
			$export_data_string .= implode(',',$this->exportColumns).$line_break;

			//Clean data
			for( $x = 0; $x < sizeof( $exportData ); $x++ ) {
				foreach ($exportData[$x] as $key => $value) {
					$exportData[$x][$key] = '"'.str_replace( '"', '\"', trim($value)).'"';
				}
			}
			
			for( $x = 0; $x < sizeof( $exportData ); $x++ ) {
				$export_data_string .= implode( ',', $exportData[$x]).$line_break;
			}

			if( '' != $export_data_string ) {
				
				header("Content-type: application/x-msdownload");
				header("Content-Disposition: attachment; filename=".$filename.".csv");
				header("Pragma: no-cache");
				header("Expires: 0");
				echo $export_data_string;
				exit();
			}
		}
	}	
	
	
	/************************************************/
	/************************************************/	
	function enableTinyMCE () {
		$this->tinyMCEEnabled = 1;
	}
	
	/************************************************/
	/************************************************/	
	function enabledatePicker () {
		$this->datePickerEnabled = 1;
	}		
	
	/************************************************/
	/************************************************/
	function getEditFormUrl() {	
	
		$formUrl = "";		
		
		if( isset( $_GET[ 'id'] ) && trim( $_GET[ 'id'] ) != '' ) {			
			$formUrl = $this->editFileName.'?id='.$_GET[ 'id'];			
			if( $this->getFormQueryString() != "" ) {
				$formUrl .= "&".str_replace( '?', '', $this->getFormQueryString() );
			}
		} else {
			$formUrl = $this->editFileName.$this->getFormQueryString();		
		}		
		
		return htmlentities( $formUrl );
	}
	
	
	/************************************************/
	/************************************************/
	function addGetVariables( $varArray ) {	
		for($v=0;$v<sizeof($varArray);$v++) {
			array_push($this->getVariables, $varArray[$v] );
		}
	}
		
	
	/************************************************/
	/************************************************/
	function getListFormUrl() {	
	
		$formUrl = "";		
		
		if( isset( $_GET[ 'id'] ) && trim( $_GET[ 'id'] ) != '' ) {
			$formUrl = $this->listFileName.'?id='.$_GET[ 'id'];
			if( $this->getFormQueryString() != "" ) {
				$formUrl .= "&".str_replace( '?', '', $this->getFormQueryString() );
			}
		} else {
			$formUrl = $this->listFileName.$this->getFormQueryString();		
		}		
		
		return $formUrl;
	}	

	/************************************************/
	/************************************************/
	function getSortFormQueryString( ) {
		
		return $this->getFormQueryString( 'sort' );

	}		
	
	/************************************************/
	/************************************************/
	function getPagerFormQueryString( ) {
		
		return $this->getFormQueryString( 'page' );

	}			
	
	/************************************************/
	/************************************************/
	function getFormQueryString( $exclude = '' ) {
	
		$queryString = '';
		

		for($g=0;$g<sizeof($this->getVariables);$g++) {

			if( $queryString == "" ) {
				if( isset( $this->getVariables[$g] ) && trim( $this->getVariables[$g] ) && isset( $_GET[ $this->getVariables[$g] ] ) && trim( $_GET[ $this->getVariables[$g] ] ) != '' && $this->getVariables[$g] != $exclude ) {
					$queryString = $this->getVariables[$g]."=".$_GET[ $this->getVariables[$g] ];
				}
			} else {
				if( isset( $this->getVariables[$g] ) && trim( $this->getVariables[$g] ) && isset( $_GET[ $this->getVariables[$g] ] ) && trim( $_GET[ $this->getVariables[$g] ] ) != '' && $this->getVariables[$g] != $exclude ) {
					$queryString .= "&".$this->getVariables[$g]."=".$_GET[ $this->getVariables[$g] ];
				}
			}
		}
		
		return $queryString;
	}	
	
	/************************************************/
	/************************************************/
	function processForm( $formAction, $postData, $redirect = true ) {
	
		$processResult = '';		

		$formData = $this->prepareData( $this->formFieldNames, $postData );						

		// Insert and Insert As New
		if( $formAction == 'insert' || $formAction == 'insertasnew' ) {
					
			$this->db_error_number = DB::getInstance( 'readwrite' )->insertQueryReturnId( $this->id, $formData, $this->tableName);
			$processResult = $this->id;
			
			if( $processResult != 0 && $redirect ) {
				$this->redirect( $formAction );
			}
			
		// Update
		} elseif( $formAction == 'update' ) {										

			if( $this->upateOnly == 1 ) $this->id = $postData['id_form'];
			
			if( $this->id == $postData['id_form'] ) {				
				
				$this->db_error_number = DB::getInstance( 'readwrite' )->updateQuery( $querySuccess, $formData, $this->tableName, $this->idName, $this->id, $rowsAffected, 'number', false );				
				if( $querySuccess ) $processResult = $this->id;
				else $processResult = 0;
					
				if( $processResult != 0 && $redirect ) {
					$this->redirect( $formAction, $postData['viewmode'] );
				}						
			} else {
				$processResult = 0;
			}			
		}
		
		return $processResult;
	
	}
	

	/************************************************/
	/************************************************/
	function redirect( $formAction, $viewmode = '' ) {

		if( $viewmode == 'readonly' ) {
			if( $this->editViewFileName != '' && $this->id != '' ) {			
				$redirectUrl = $this->editViewFileName.'?id='.$this->id.'&action='.$formAction."&".str_replace( '?', '', $this->getFormQueryString() );		
				header( 'Location: '. $this->cleanUrl( $redirectUrl, $htmlentities = false ) );
				exit();		
			}
		} elseif( $this->editFileName != '' && $this->id != '' ) {			
			$redirectUrl = $this->editFileName.'?id='.$this->id.'&action='.$formAction."&".str_replace( '?', '', $this->getFormQueryString() );		
			header( 'Location: '. $this->cleanUrl( $redirectUrl, $htmlentities = false ) );
			exit();
		}
		
	}

	/************************************************/
	/************************************************/
	function processUpdate( $updateData ) {

		DB::getInstance( 'readwrite' )->updateQuery( $querySuccess, $updateData, $this->tableName, $this->idName, $this->id );
		if( $querySuccess ) $processResult = 1;
		else $processResult = 0;
		
		return $processResult;
	}			
	
	/************************************************/
	/************************************************/
	function processDelete( $id ) {

		$processResult = DB::getInstance( 'full' )->delete( $querySuccess, $this->tableName, $this->idName, $id );
		if( $querySuccess ) $processResult = 1;
		else $processResult = 0;		
		
		return $processResult;
	}				
	
	/************************************************/
	/************************************************/
	function generateOrderBySql( $type = 'list' ) {
	
		$orderBySql = '';
		
		$orderByValue = '';
		
		if( $type == 'list' ) {
			 $orderByValue = $this->listCurrentSort;
		} elseif( $type == 'export' ) {
			 $orderByValue = $this->exportDefaultSort;			
		}
		
		if( $orderByValue != '' ) {
		
			$sortArray = explode( ',', $orderByValue );
			if( is_array( $sortArray ) && sizeof( $sortArray ) > 0 ) {
				for($s=0;$s<sizeof($sortArray);$s++) {
					if( $sortArray[$s] > 0 ) {		
						$orderBySql .= ','.abs($sortArray[$s])." ASC";
					} else {
						$orderBySql .= ','.abs($sortArray[$s])." DESC";					
					}	
				}					
			}
		}
		
		if( $orderBySql != '' ) {
			$orderBySql = ' ORDER BY '.trim( $orderBySql, ',' );
		}		
		
		return $orderBySql;
	}
	
	/************************************************/
	/************************************************/
	function generateWhereClauseSql( $whereClauseData ) {
	
		$filterSql = '';									
		if( is_array( $this->listFilterData ) && sizeof( $this->listFilterData ) > 0 ) {
			foreach ($this->listFilterData as $key => $value) {
				if( $value != '' ) {
					$key = str_replace( '__', '.', $key);
					if( $filterSql == '' ) {
						if( $value == 'NULL' ) $filterSql = " WHERE ".$key." IS NULL";
						else $filterSql = " WHERE ".$key." = '".mysql_escape_string( $value )."'";
					} else {
						if( $value == 'NULL' ) $filterSql .= " AND ".$key." IS NULL";
						else $filterSql .= " AND ".$key." = '".mysql_escape_string( $value ) ."'";
					}
				}									
			}
		}
			
		$whereSql = '';
		$whereSqlPrefix = ' ( ';
		$whereSqlPostfix = ' ) ';		
		if( is_array( $whereClauseData ) && sizeof( $whereClauseData ) > 0 ) {
		
			$search_boolean = $whereClauseData['search_boolean'];
			$search_equality = $whereClauseData['search_equality'];			
			
			if( $search_boolean != '' && $search_equality != '' ) {
			
				if( $whereSql != '') $append = true;
				else $append = false;
				
				foreach ($whereClauseData as $key => $value) {
					$key = str_replace( '__', '.', $key);							
					if( isset( $value ) && trim( $value ) != '' && $key != 'search_boolean' && $key != 'search_equality' && $key != 'perform_list_search' ) {
						if( $whereSql == '' ) {						
							if( $search_equality == 'equalto' ) 
								if( $filterSql != '' ) $whereSql = " AND " . $whereSqlPrefix."".$key." = '".mysql_escape_string( $value )."'";
								else $whereSql = " WHERE ".$whereSqlPrefix."".$key." = '".mysql_escape_string( $value )."'";
							else {
								if( $filterSql != '' ) $whereSql = " AND " . $whereSqlPrefix."".$key." LIKE '%".mysql_escape_string( $value )."%'";
								else $whereSql = " WHERE ".$whereSqlPrefix."".$key." LIKE '%".mysql_escape_string( $value )."%'";
							}
						} else {
							if( $search_equality == 'equalto' ) $whereSql .= " ".$search_boolean." ".$key." = '".mysql_escape_string( $value )."'";
							else $whereSql .= " ".$search_boolean." ".$key." LIKE '%".mysql_escape_string( $value )."%'";
						}
					}
				}	
				if( $whereSql != '' ) $whereSql.=$whereSqlPostfix;	
			}
		}		
		
		return $filterSql . $whereSql;
	}	
	
	/************************************************/
	/************************************************/
	function prepareData( $fieldNames, $postData ) {

		//print_r($postData); exit;
		
		$this->prepareTinyMCEInputFields( $postData );

		$formData = array();
		for( $p = 0; $p < sizeof( $fieldNames );$p++ ) {
			if( isset( $postData[ $fieldNames[$p] ] ) ) {
				$formData[ $fieldNames[$p] ] = $postData[ $fieldNames[$p] ];
			}
		}	

		return $formData;

	}	
	
	/************************************************/
	/************************************************/	
	function cleanUrl( $url, $htmlentities = true ) {

		if( empty( $url ) ) return "";				
			
		$tempUrl = $url;
		$len = strlen ($url);
	
		if( (strripos($tempUrl, "&")+1) == $len ) {
			$tempUrl = substr ( $tempUrl , 0, $len-1 );
		}
		
		if( (strripos($tempUrl, "?")+1) == $len ) {
			$tempUrl = substr ( $tempUrl , 0, $len-1 );
		}		
		
		$tempUrl = str_replace( "?&", "?", $tempUrl);		
		$tempUrl = str_replace( "??", "?", $tempUrl);
		$tempUrl = str_replace( "&&", "&", $tempUrl);
		
		if( $htmlentities ) {
			return htmlentities( $tempUrl );
		} else {
			return $tempUrl;		
		}
		
	}	
	
	/************************************************/
	/************************************************/
	function getDisplayOrderData( &$displayOrderArray, $limit = 100 ) {
	
		$displayOrderArray = array();
		for($k=0;$k<$limit;$k++) {
			$displayOrderArray[$k+1] = $k+1;
		}
		
	}
	
	/************************************************/
	/************************************************/
	function getListData( &$recordSet, $searchData = array() ) {
			
		$sql = $this->listSql.$this->generateWhereClauseSql( $searchData );
		if( isset( $this->listSqlPostfix ) ) $sql = $sql." ".$this->listSqlPostfix;						
		$sql = $sql.$this->generateOrderBySql();	
		
		DB::getInstance()->queryPage( $querySuccess, $sql, $this->pageSize, $this->currentPage, $recordSet );		
		
	}	
	
	/************************************************/
	//Added for export
	/************************************************/
	function getExportData( &$recordSet, $searchData = array() ) {
			
		$sql = $this->exportListSql.$this->generateWhereClauseSql( $searchData );
		if( isset( $this->listSqlPostfix ) ) $sql = $sql." ".$this->listSqlPostfix;						
		$sql = $sql.$this->generateOrderBySql( 'export' );		
		
		//DB::GetInstance("readonly")->QueryPage( $querySuccess, $sql, $this->pageSize, $this->currentPage, $recordSet );		
		DB::GetInstance("readonly")->Query( $querySuccess, $sql, $recordSet, $recordSetSize, false );		

	}		
	
	/************************************************/
	/************************************************/
	function setupListPager( $searchData = array() ) {			
						
		$countSql = $this->listSql.$this->generateWhereClauseSql( $searchData );		
		
		$this->listPagerObject = new Pager( $this->listSql.$this->generateWhereClauseSql( $searchData ), $countSql, $this->pageSize, $this->listFileName );

	}		
	
	/************************************************/
	/************************************************/
	function prepareTinyMCEInputField( &$data ) {
		
		if( isset( $data ) && trim( $data ) != '' ) {					
			$data = strip_tags( $data );			
			$data = str_replace( '\r', '', $data );
			$data = str_replace( '\n', '', $data );									
		}
	}	
	
	/************************************************/
	/************************************************/
	function prepareTinyMCEInputFields( &$data ) {				
		for($d=0;$d<sizeof($data['input_texfieldtarea']);$d++ ) {
			if( isset( $data[$data['input_texfieldtarea'][$d]] ) && trim( $data[$data['input_texfieldtarea'][$d]] ) != '' ) {								
				$data[$data['input_texfieldtarea'][$d]] = strip_tags( $data[$data['input_texfieldtarea'][$d]] );			
				$data[$data['input_texfieldtarea'][$d]] = str_replace( '\r', '', $data[$data['input_texfieldtarea'][$d]] );
				$data[$data['input_texfieldtarea'][$d]] = str_replace( '\n', '', $data[$data['input_texfieldtarea'][$d]] );									
			}
		}		
	}	

	/************************************************/
	/************************************************/
	function getRatingMatrix( &$recordSet ) {
		$sql = "SELECT DISTINCT
						anc_rating_matrix.id_rating_matrix as 'id_rating_matrix',
						anc_rating_matrix.rating_matrix_libele as 'rating_matrix_libele',
						anc_rating_matrix.rating_matrix_def as 'rating_matrix_def'
					FROM 
						anc_rating_matrix 
					ORDER BY anc_rating_matrix.id_rating_matrix";

					DB::getInstance()->query( $querySuccess, $sql, $recordSet );

		if ($querySuccess && sizeof($recordSet) > 0) {
			for ($i=0; sizeof($recordSet) > $i; $i++) {
				$recordSet[$i]['rating_def'] = json_decode($recordSet[$i]['rating_matrix_def'], true);
			}
		}
	}		
	
	/************************************************/
	/************************************************/	
	function encrypt( $text ) {

		$key = "4F4DhS2Lobsterink3DHekS3";// 24 bit Key
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
	
	
	/************************************************/
	/************************************************/
	function decrypt( $encrypted_text ){
		
		$key = "4F4DhS2Lobsterink3DHekS3";// 24 bit Key
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
	
	/************************************************/
	/************************************************/
	function formatFriendlyUrl( $alias_string ) {
		$alias_string = strip_tags( $alias_string );		
		$alias_string = strtolower( $alias_string );
		$alias_string = str_replace( '  ', ' ', $alias_string );
		$alias_string = str_replace( ' ', '-', $alias_string );		
		$alias_string = str_replace( '&', 'and', $alias_string );
		$alias_string = str_replace( "'", '', $alias_string );		
		$alias_string = str_replace( '"', '', $alias_string );				
		return $alias_string;
	}	
	
	/************************************************/
	/************************************************/
		function removeItemFromArrayByValue($array, $val = '', $preserve_keys = false) {
		
		
		if (empty($array) || !is_array($array)) return false;
		if (!in_array($val, $array)) return $array;
	
		foreach($array as $key => $value) {
			if ($value == $val) {
				unset($array[$key]);
			}
		}
	
		return ($preserve_keys === true) ? $array : array_values($array);
	}
	
	/************************************************/
	/************************************************/
	
	/************************************************/
	/************************************************/	

}

?>