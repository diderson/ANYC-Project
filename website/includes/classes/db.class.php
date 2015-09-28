<?php

require_once( 'components/adodb5/adodb.inc.php' );
require_once( 'components/adodb5/adodb-exceptions.inc.php' );

/*******************************************************/
/*******************************************************/
class DB {		

	private $mConnection;
	private static $mInstance;
	private $mConnenctionType;
	private $mDbCredentials;
	
	/************************************************/
	/************************************************/	
	private function __clone() { } // block cloning of the object	
	
	/*******************************************************/
	/*******************************************************/	
	function __construct( $connenctionType = 'readonly' ) {
	
		global $ADODB_CACHE_DIR, $ADODB_FORCE_TYPE;
		
		try {		
		
			$ADODB_CACHE_DIR = Configurator::GetInstance()->GetSettings( 'site_root' ).'components/adodb5/adodb_cache';									
			$ADODB_FORCE_TYPE = ADODB_FORCE_NULL;
			
			$this->mConnenctionType = $connenctionType;
						
			
			/* database connection details */
			$this->getConnectionCredentials();
			$this->mConnection = ADONewConnection( 'mysql' );

			$this->mConnection->Connect( $this->mDbCredentials['database_host'], $this->mDbCredentials['database_user'], $this->mDbCredentials['database_password'], $this->mDbCredentials['database_database'] );
			
			$this->mConnection->debug = false;
							
		} catch (exception $e) { 
			//exit( 'Database connection failed.');
			exit('..');
		}						
	}		
	/*******************************************************/
	/*******************************************************/	
	function __destruct () {
		if( $this->mConnection ) {
			$this->mConnection->Close();
		}
	}	
	/*******************************************************/
	/*******************************************************/	
	private function getConnectionCredentials() {
				
		$this->mDbCredentials[ 'database_host' ] = Configurator::GetInstance()->GetSettings( 'database_host_'.$this->mConnenctionType );
		$this->mDbCredentials[ 'database_user' ] = Configurator::GetInstance()->GetSettings( 'database_user_'.$this->mConnenctionType );
		$this->mDbCredentials[ 'database_password' ] = Configurator::GetInstance()->GetSettings( 'database_password_'.$this->mConnenctionType );
		$this->mDbCredentials[ 'database_database' ] = Configurator::GetInstance()->GetSettings( 'database_name_'.$this->mConnenctionType );				
	
	}
	/*******************************************************/
	/*******************************************************/	
	public function getConnection() {	
		return $this->mConnection;
	}
	
	/*******************************************************/
	/*******************************************************/	
	public static function GetInstance( $connenctionType = 'readonly' ) {
		if( !isset( self::$mInstance ) || self::$mInstance->mConnenctionType != $connenctionType ) {	
			$thisClass = __CLASS__;
			self::$mInstance = new $thisClass( $connenctionType );
		}		
		return self::$mInstance;
	}

	/*******************************************************/
	/*******************************************************/	
	function query( &$querySuccess, $sql, &$recordSet, &$recordSetSize = 0, $debug = false  ) {
	
		global $ADODB_FETCH_MODE;			
		
		$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;	
		$querySuccess = true;
		$recordSet = array();
		$recordSetSize = 0;															
		
		if( $debug ) $this->mConnection->debug=true;

		try {
			mysql_set_charset("utf8");
			$recordSet = $this->mConnection->getArray( $sql );						
	
			if( $recordSet !== false ) {
				$recordSetSize = sizeof($recordSet);			
				$querySuccess = true;
			}
		} catch( exception $e ) { 
			$querySuccess = false;
		}

	}	
	/*******************************************************/
	/*******************************************************/	
	function queryPage( &$querySuccess, $sql, $pageSize, $currentPage, &$recordSet, &$recordSetSize = 0) {
	
		global $ADODB_FETCH_MODE;			
		
		$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;	
		$querySuccess = true;
		$recordSet = array();

		$recordSetSize = 0;											
		
		try {
			mysql_set_charset("utf8");
			$recordSetObj = $this->mConnection->PageExecute( $sql, $pageSize, $currentPage );
			$recordSet = $recordSetObj->getArray();
			
			if( $recordSet !== false ) {
				$recordSetSize = sizeof( $recordSet );
				$querySuccess = true;
			}
		} catch( exception $e ) { 
			$querySuccess = false;
		}

	}		
	
	/*******************************************************/
	/*******************************************************/	
	function queryCache( &$querySuccess, $sql, &$recordSet, &$recordSetSize = 0  ) {
	
		global $ADODB_FETCH_MODE;			
		
		$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;	
		$querySuccess = true;
		$recordSet = array();
		$recordSetSize = 0;											
		
		try {
			$ADODBrecordSet = $this->mConnection->CacheExecute( $sql );
			$recordSet = $ADODBrecordSet->_array;
			
			if( $recordSet !== false ) {
				$recordSetSize = sizeof( $recordSet );
				$querySuccess = true;
			}
		} catch( exception $e ) {
			$querySuccess = false;
		}

	}			
	
	/*******************************************************/
	/*******************************************************/	
	function queryNoRecordSet( &$querySuccess, $sql, &$rowsAffected = 0 ) { //done
	
		global $ADODB_FETCH_MODE;			
		
		$querySuccess = true;
		
		try {
			mysql_set_charset("utf8");							
			$this->mConnection->execute( $sql );									
			$rowsAffected = $this->mConnection->Affected_Rows();
		} catch( exception $e ) {
			$rowsAffected = 0;
			$querySuccess = false;
		}

	}			
	
	/*******************************************************/
	/*******************************************************/	
	function insertQuery( &$querySuccess, $insertValues, $tableName, &$rowsAffected = 0, $debug = false  ) {		
		
		$querySuccess = true;
		
		if( $debug ) $this->mConnection->debug=true;
		
		try {		
			if( !isset( $insertValues['cdate'] ) ) $insertValues['cdate'] = date( 'Y-m-d H:i:s' );
			mysql_set_charset("utf8");
    		$this->mConnection->AutoExecute( $tableName, $insertValues, 'INSERT' ); 		
			$rowsAffected = $this->mConnection->Affected_Rows();
		} catch( exception $e ) {
			$rowsAffected = 0;
			$querySuccess = false;
		}
			
	}	
	
	/*******************************************************/
	/*******************************************************/	
	function insertQueryReturnId( &$insertId, $insertValues, $tableName, &$rowsAffected=0 ) {		
				
		$insertId = 0;		
		$errno = 0;
		
		//$this->mConnection->debug=true;
		
		try {		

			if( !isset( $insertValues['cdate'] ) ) $insertValues['cdate'] = date( 'Y-m-d H:i:s' );
			mysql_set_charset("utf8");
			$this->mConnection->AutoExecute( $tableName, $insertValues, 'INSERT' ); 			
			$insertId = $this->mConnection->Insert_ID();		
		} catch (exception $e) { 
			$errno = $e->errno;
			$insertId = 0;
			$rowsAffected = 0;
		}				
					
		return $errno;
	}	
	
	/*******************************************************/
	/*******************************************************/	
	function bulkInsertQuery( &$querySuccess, $insertValues, $tableName, $fieldNames, $debug = false ) {
		
		$querySuccess = true;	
		mysql_set_charset("utf8");			
		$this->mConnection->bulkBind = true;
		
		try {		
					
			if( $debug ) $this->mConnection->debug=true;
			
			$query_question_marks = array();
			
			for($q=0;$q<sizeof($fieldNames);$q++) $query_question_marks[$q] = '?';
								
			$bulk_insert_sql = "INSERT INTO ".mysql_escape_string( $tableName )." (".implode(",", $fieldNames).") VALUES (".implode(",", $query_question_marks).")";
		
			$this->mConnection->execute( $bulk_insert_sql, $insertValues );		
		
		} catch( exception $e ) { 
			$querySuccess = false;
		}

	}				
	/*******************************************************/
	/*******************************************************/	
	function updateQuery( &$querySuccess, $updateValues, $tableName, $keyName, $keyValue, &$rowsAffected = 0, $keyValueType = 'number', $debug=false ) {
				
		$errno = 0;				
		$querySuccess = true;					
		mysql_set_charset("utf8");
		if( $debug ) $this->mConnection->debug=true;
		
		try {	
							
			if( isset( $tableName ) && is_array( $keyName ) && is_array( $keyValue ) ) {				
			
				for($k=0;$k<sizeof($keyName);$k++) {
				
					if( $keyValueType == 'number' ) {
						$whereClause .= mysql_escape_string( $tableName ) . ".".mysql_escape_string( $keyName[$k] ) . " = ".mysql_escape_string( $keyValue[$k] )." AND ";
					} else {
						$whereClause .= mysql_escape_string( $tableName ) . ".".mysql_escape_string( $keyName[$k] ) . " = '".mysql_escape_string( $keyValue[$k] )."' AND ";
					}							
				}
				
				$whereClause = trim( $whereClause , '');
				$whereClause = trim( $whereClause , ' AND ');
				
			} elseif( isset( $tableName ) && isset( $keyName ) && isset( $keyValue ) && sizeof( $updateValues ) > 0 ) {
				
				
				$updateValues['mdate'] = date( 'Y-m-d H:i:s');
				if( $keyValueType == 'number' ) {
	    			$whereClause = mysql_escape_string( $tableName ) . ".".mysql_escape_string( $keyName ) . " = ".mysql_escape_string( $keyValue );
				} else {
					$whereClause = mysql_escape_string( $tableName ) . ".".mysql_escape_string( $keyName ) . " = '".mysql_escape_string( $keyValue )."'";
				}								
				

			}
			
			if( $whereClause != '' ) {							
				$this->mConnection->AutoExecute( $tableName, $updateValues, 'UPDATE', $whereClause );				
				$rowsAffected = $this->mConnection->Affected_Rows();
			}
				
		} catch (exception $e) { 
			$errno = $e->errno;
			$querySuccess = false;
			$rowsAffected = 0;
		}		
		return $errno;
	}		
	
	/*******************************************************/
	/*******************************************************/	
	function delete( &$querySuccess, $tableName, $keyName, $keyValue, $keyValueType = 'number' ) {			

		$querySuccess = true;		
		
		try {				
			
			if( isset( $tableName ) && isset( $keyName ) && isset( $keyValue ) ) {
				if( $keyValueIsString == 'number' ) {
	    			$whereClause = mysql_escape_string( $tableName ) . "." . mysql_escape_string( $keyName ) . " = " . mysql_escape_string( $keyValue );
				} else {
					$whereClause = mysql_escape_string( $tableName ) . "." . mysql_escape_string( $keyName ) . " = '" . mysql_escape_string( $keyValue )."'";
				}			

				$sql = "DELETE FROM " . mysql_escape_string( $tableName ) . " WHERE ". $whereClause;
				$rs = $this->mConnection->execute($sql);
				
				//if ( $rs === false) $querySuccess = true;
			}			
		} catch (exception $e) {
			$querySuccess = false;
		}
			
	}				

	/*******************************************************/
	/*******************************************************/
}
?>
