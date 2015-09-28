<?php

/*******************************************************/
/*******************************************************/
class PDODB {		

	private $mConnection;
	private static $mInstance;
	private $mConnenctionType;
	private $mDatabaseName;	
	private $mDbCredentials;
	
	/************************************************/
	/************************************************/	
	private function __clone() { } // block cloning of the object	
	
	/*******************************************************/
	/*******************************************************/	
	function __construct( $connenctionType = 'readonly', $databaseName = '' ) {
		 	
		try {		

			/* database connection details */
			$this->mConnection = null;	
			if( $connenctionType != 'readonly' && $connenctionType != 'readwrite' && $connenctionType != 'full' && $connenctionType != 'super') $connenctionType = 'readonly';
			$this->mConnenctionType = $connenctionType;			
			$this->mDatabaseName = $databaseName;						
			
			$persistantConnection = true;			
			if( Configurator::GetInstance()->GetSettings( 'unit_testing' ) == 'true' ) {
				$persistantConnection = false;
			}
			$this->GetConnectionCredentials( $this->mDatabaseName );
			
			//echo "PDO connenctionType: ".$connenctionType.", db: ".$this->mDbCredentials['database_database'].", user:".$this->mDbCredentials['database_user'].", pwd:".$this->mDbCredentials['database_password']."<br />";

			$this->mConnection = new PDO(
				"mysql:host=".$this->mDbCredentials['database_host'].";dbname=".$this->mDbCredentials['database_database']."",
				$this->mDbCredentials['database_user'],
				$this->mDbCredentials['database_password'],
				array(PDO::ATTR_PERSISTENT => $persistantConnection)
			);  

			$this->mConnection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  

		} catch (PDOException  $e) { 
			$this->mConnection = null;		
			//exit('..');
		}					
	}		
	/*******************************************************/
	/*******************************************************/	
	function __destruct () {
		if( $this->mConnection ) {
			$this->mConnection = null;
		}
	}	
	
	/*******************************************************/
	/*******************************************************/	
	public function GetConnection() {	
		return $this->mConnection;
	}		
		
	/*******************************************************/
	/*******************************************************/	
	private function GetConnectionCredentials( $databaseName = '' ) {
		
		$this->mDbCredentials[ 'database_host' ] = Configurator::GetInstance()->GetSettings( 'database_host_'.$this->mConnenctionType );
		$this->mDbCredentials[ 'database_user' ] = Configurator::GetInstance()->GetSettings( 'database_user_'.$this->mConnenctionType );
		$this->mDbCredentials[ 'database_password' ] = Configurator::GetInstance()->GetSettings( 'database_password_'.$this->mConnenctionType );		
		$this->mDbCredentials[ 'database_database' ] = ( $databaseName == '' ) ? Configurator::GetInstance()->GetSettings( 'database_name_'.$this->mConnenctionType ) : $databaseName;
	
	}
		
	/*******************************************************/
	/*******************************************************/	
	public static function GetInstance( $connenctionType = 'readonly', $databaseName = '' ) {								
						
		if( !isset( self::$mInstance ) || self::$mInstance->mConnenctionType != $connenctionType || self::$mInstance->mDatabaseName != $databaseName ) {	
			$thisClass = __CLASS__;
			self::$mInstance = new $thisClass( $connenctionType, $databaseName );
		}		
		return self::$mInstance;
	}
	/*******************************************************/
	/*******************************************************/
	public function Query( &$querySuccess, $sql, &$recordSet, &$recordSetSize = 0, $param = array() ) {

		$recordSet = array();
		$recordSetSize = 0;
		$error_messsages = array();
		$querySuccess = true;

		try {

			if( is_null( $this->mConnection ) ) throw new Exception();
			
			$statement_handler = $this->mConnection->prepare( $sql );
			if( is_array( $param) &&  sizeof( $param ) > 0 ) {
				$statement_handler->execute( $param );
			} else {
				$statement_handler->execute();
			}
			$statement_handler->setFetchMode(PDO::FETCH_ASSOC);
			$recordSet = $statement_handler->fetchAll();
			
			if( sizeof($recordSet) > 0 ) {			
				$recordSetSize = sizeof($recordSet);
			}

		} catch( PDOException $e ) { 
			$querySuccess = false;
			$error_messsages[ 'message' ] = $e->getMessage();
			$error_messsages[ 'code' ] = $e->getCode();
		} catch( Exception $e ) { 
			$querySuccess = false;
			$error_messsages[ 'message' ] = 'Database Connection Failure';
			$error_messsages[ 'code' ] = '-10';			
		}	
		return $error_messsages;
	}
	/*******************************************************/
	/*******************************************************/	
	function QueryPage( &$querySuccess, $sql, $pageSize, $currentPage, &$recordSet, &$recordSetSize = 0  ) {

		$returnData = array();
		$returnData['AtFirstPage'] = 0;
		$returnData['AtLastPage'] = 0;
		$returnData['totalEntities'] = 0;
		$returnData['numberOfPages'] =  0;
		if( !isset( $currentPage) ) $currentPage = 1;
		$countSql = $sql;
		$limit_start = ( ($currentPage * $pageSize) - $pageSize );
		$limit = " LIMIT ".intval( addslashes( $limit_start ) ).", ".intval( addslashes( $pageSize ) );
		$sql  .= $limit;
		
		$querySuccess = true;
		$recordSet = array();
		$recordSetSize = 0;
		$error_messages = array();

		try {
			if( is_null( $this->mConnection ) ) throw new Exception();
			
			$count_statement_handler = $this->mConnection->prepare( $countSql );
			$count_statement_handler->execute();
			$total_records = array();
			$totalEntities = 0;
			
			$total_records =  $count_statement_handler->fetchAll();
			if( sizeof($total_records) > 0 ) {
				$totalEntities = sizeof( $total_records);
			}
			
			$numberOfPages = ceil( $totalEntities / $pageSize );
			
			$statement_handler = $this->mConnection->prepare( $sql );
			$statement_handler->execute();
			$recordSet = $statement_handler->fetchAll();

			if( sizeof($recordSet) > 0 ) {			
				$recordSetSize = sizeof($recordSet);
			}

			if( $currentPage == 1 ) {
				$returnData['AtFirstPage'] = 1;
			} 
			if( $currentPage == $numberOfPages ) {
				$returnData['AtLastPage'] = 1;
			}
			
			$returnData['totalEntities'] = $totalEntities;
			$returnData['numberOfPages'] = $numberOfPages;


		} catch( PDOException $e ) { 
			$querySuccess = false;
			$error_messsages[ 'message' ] = $e->getMessage();
			$error_messsages[ 'code' ] = $e->getCode();
		} catch( Exception $e ) { 
			$querySuccess = false;
			$error_messsages[ 'message' ] = 'Database Connection Failure';
			$error_messsages[ 'code' ] = '-10';			
		}

		return $returnData;
	}
	/*******************************************************/
	/*******************************************************/	
	public function QueryNoRecordSet( &$querySuccess, $sql ) { 
	
		$querySuccess = true;
		$error_messsages = array();
		try {
			
			if( is_null( $this->mConnection ) ) throw new Exception();
			
			$this->mConnection->exec($sql);

		} catch( PDOException $e ) { 
			$querySuccess = false;
			$error_messsages[ 'message' ] = $e->getMessage();
			$error_messsages[ 'code' ] = $e->getCode();
		} catch( Exception $e ) { 
			$querySuccess = false;
			$error_messsages[ 'message' ] = 'Database Connection Failure';
			$error_messsages[ 'code' ] = '-10';			
		}
		return $error_messsages;
	}			
	
	/*******************************************************/
	/*******************************************************/
	public function InsertQuery( &$querySuccess, $insertValues, $tableName, &$row_inserted = 0 ) {
		
		$row_inserted = 0;		
		$querySuccess = true;
		$error_messsages = array();

		try {		
			
			if( is_null( $this->mConnection ) ) throw new Exception();
			
			if(  is_array( $insertValues ) &&  sizeof( $insertValues )  > 0 && $tableName != '' ) {

				if( !isset( $insertValues['cdate'] ) ) $insertValues['cdate'] = date( 'Y-m-d H:i:s' );
				
				$parameters =  implode(', ',array_keys( $insertValues ));
				$place_holders = '';
				$place_holders = ':'.$parameters;
				$place_holders = str_replace(', ', ', :', $place_holders);

				$insert_statement = "INSERT INTO ".addslashes( $tableName )." ( ".$parameters." ) value ( ".$place_holders." )";
				$statement_handler = $this->mConnection->prepare( $insert_statement );
				$statement_handler->execute( $insertValues );
				$row_inserted = $statement_handler->rowCount();
				
			} else {
				$querySuccess = false;
				$error_messsages[ 'message' ] = 'insert values or tablename missing';
				$error_messsages[ 'code' ] = '-1';
			}	

		} catch( PDOException $e ) { 
			$querySuccess = false;
			$error_messsages[ 'message' ] = $e->getMessage();
			$error_messsages[ 'code' ] = $e->getCode();
		} catch( Exception $e ) { 
			$querySuccess = false;
			$error_messsages[ 'message' ] = 'Database Connection Failure';
			$error_messsages[ 'code' ] = '-10';			
		}
		return $error_messsages;
	}
	
	/*******************************************************/
	/*******************************************************/
	public function InsertQueryReturnId( &$insertId, $insertValues, $tableName ) {		

		$insertId = 0;		
		$querySuccess = true;
		$error_messsages = array();
		try {		
			
			if( is_null( $this->mConnection ) ) throw new Exception();
			
			if(  is_array( $insertValues ) &&  sizeof( $insertValues )  > 0 && $tableName != '' ) {

				if( !isset( $insertValues['cdate'] ) ) $insertValues['cdate'] = date( 'Y-m-d H:i:s' );
				
				$parameters =  implode(', ',array_keys( $insertValues ));
				$place_holders = '';
				$place_holders = ':'.$parameters;
				$place_holders = str_replace(', ', ', :', $place_holders);

				$insert_statement = "INSERT INTO ".addslashes( $tableName )." ( ".$parameters." ) value ( ".$place_holders." )";
				$statement_handler = $this->mConnection->prepare( $insert_statement );
				$statement_handler->execute( $insertValues );
				$insertId =  $this->mConnection->lastInsertId();
				
			} else {
				$querySuccess = false;
				$error_messsages[ 'message' ] = 'insert values or tablename missing';
				$error_messsages[ 'code' ] = '-1';
			}	

		} catch( PDOException $e ) { 
			$querySuccess = false;
			$error_messsages[ 'message' ] = $e->getMessage();
			$error_messsages[ 'code' ] = $e->getCode();
		} catch( Exception $e ) { 
			$querySuccess = false;
			$error_messsages[ 'message' ] = 'Database Connection Failure';
			$error_messsages[ 'code' ] = '-10';			
		}
		return $error_messsages;
	}
	
	/*******************************************************/
	/*******************************************************/
	public function UpdateQuery( &$querySuccess, $updateValues, $tableName, $keyValues, &$rowsAffected = 0 ) {
			
		$errno = 0;
		$querySuccess = true;					
		$error_messsages = array();
		$rowsAffected = 0;
		try {	

			if( is_null( $this->mConnection ) ) throw new Exception();
			
			if( is_array( $updateValues ) && is_array( $keyValues ) && $tableName != '')  {
				
				$updateValues['mdate'] = date( 'Y-m-d H:i:s');//keep track on update date
				$update_array_keys = array(); /* Used to get the array keys of the values being updated */
				$update_array = array(); /* Used to create the prepared fieldsfor the values being updates */
				$where_array_keys = array(); /* Uset to get the array keys of the values in the where statement */
				$where_array = array();	/* Array that prepares the fields for the where clause */
				$update_string =''; /* string used to convert the array into string using implode() */
				$where_statement = ''; /* string used to convert the where_array into a string using implode() */
				$update_statement = ''; /* The actual Prepared statements */

				$update_array_keys = array_keys( $updateValues );
				for( $x=0; $x < sizeof( $update_array_keys); $x++ ) {
					$update_array[$x] = $update_array_keys[$x]."=:".$update_array_keys[$x];
				}
				$update_string = implode(', ',$update_array);

				
				$where_array_keys = array_keys( $keyValues );
				for( $y=0; $y < sizeof( $where_array_keys); $y++) {
					$where_array[$y] = $where_array_keys[$y]."=:w__".$where_array_keys[$y];
				}
				
				$where_statement = implode(' AND ',$where_array );

				if( $where_statement != '' ) {
					$where_statement = 'WHERE '.$where_statement;
				}
				
				foreach ( $keyValues as $key => $value ) {
					$updateValues['w__'.$key]	= $value;
				}
				
				$update_statement =  "UPDATE ".addslashes( $tableName )." SET ".$update_string." ".$where_statement;
				
				$statement_handler = $this->mConnection->prepare( $update_statement );

				$statement_handler->execute( $updateValues );
				$rowsAffected = $statement_handler->rowCount();

			} else {
				$querySuccess = false;
				$error_messsages[ 'message' ] = 'Incorrect Parameters';
				$error_messsages[ 'code' ] = '-1';

			}			

		} catch (PDOException $e) { 
			$querySuccess = false;
			$error_messsages[ 'message' ] = $e->getMessage();
			$error_messsages[ 'code' ] = $e->getCode();
		} catch( Exception $e ) { 
			$querySuccess = false;
			$error_messsages[ 'message' ] = 'Database Connection Failure';
			$error_messsages[ 'code' ] = '-10';			
		}	

		return $error_messsages;	
	}		
	
	/*******************************************************/
	/*******************************************************/
	public function Delete( &$querySuccess, $tableName, $keyValues, &$rowsAffected = 0 ) {

		$querySuccess = true;
		$error_messsages = array();
		$rowsAffected = 0;

		try {				

			if( is_null( $this->mConnection ) ) throw new Exception();
			
			if( '' != $tableName && is_array($keyValues) && 0 < sizeof($keyValues)  ) {

				$where_statement = '';
				$delete_statement = '';
				$where_array_keys = array();
					
				$where_array_keys = array_keys( $keyValues );

				for( $y=0; $y < sizeof( $where_array_keys); $y++) {
					$where_array[$y] = $where_array_keys[$y]."=:".$where_array_keys[$y];
				}
				
				$where_statement = implode(' AND ',$where_array );

				if( $where_statement != '' ) {
					$where_statement = 'WHERE '.$where_statement;
				}

				$delete_statement = "DELETE FROM ".addslashes( $tableName)." ".$where_statement;
				$statement_handler = $this->mConnection->prepare( $delete_statement );

				if( is_array( $keyValues ) && 0 < sizeof($keyValues) ) {
					$statement_handler->execute( $keyValues );
				} else{
					$statement_handler->execute();
				}
				$rowsAffected = $statement_handler->rowCount();
			} else {
				$querySuccess = false;
				$error_messsages['message'] = 'Incorrect Parameters';
				$error_messsages['code'] = '-1';
			}
						
		} catch ( PDOException $e ) {
			$querySuccess = false;
			$error_messsages[ 'message' ] = $e->getMessage();
			$error_messsages[ 'code' ] = $e->getCode();
		} catch( Exception $e ) { 
			$querySuccess = false;
			$error_messsages[ 'message' ] = 'Database Connection Failure';
			$error_messsages[ 'code' ] = '-10';			
		}
		return $error_messsages;
	}	
	
	/*******************************************************/
	/*******************************************************/
	public function BulkInsertQuery( &$querySuccess, $insertValues, $tableName, $fieldNames, &$row_count = 0 ) {
		
		$querySuccess = true;
		$error_messsages = array();
		try {
			
			if( is_null( $this->mConnection ) ) throw new Exception();
			
			if( is_array( $insertValues ) &&  sizeof( $insertValues )  > 0 && is_array( $fieldNames ) && sizeof( $fieldNames) > 0 && $tableName != '' ) {
															
				$parameters =  implode(', ', $fieldNames);
				$place_holders = '';
				$place_holders = ':'.$parameters;
				$place_holders = str_replace(', ', ', :', $place_holders);
				$row_count = 0;

				$insert_statement = "INSERT INTO ".$tableName." ( ".$parameters." ) value ( ".$place_holders." )";
				$statement_handler = $this->mConnection->prepare( $insert_statement );

				for( $x=0; $x < sizeof( $insertValues); $x++) {
					if( !isset( $insertValues[$x]['cdate'] ) ) $insertValues[$x]['cdate'] = date( 'Y-m-d H:i:s' );
					$statement_handler->execute( $insertValues[$x] );
					$row_inserted = $statement_handler->rowCount();
					if( $row_inserted > 0 ) {
						$row_count++;
					}
				}
			} else {

				$querySuccess = false;
				$error_messsages[ 'message' ] = 'Incorrect Parameters';
				$error_messsages[ 'code' ] = '-1';

			}

		} catch( PDOException $e ) { 
			$querySuccess = false;
			$error_messsages[ 'message' ] = $e->getMessage();
			$error_messsages[ 'code' ] = $e->getCode();
		} catch( Exception $e ) { 
			$querySuccess = false;
			$error_messsages[ 'message' ] = 'Database Connection Failure';
			$error_messsages[ 'code' ] = '-10';			
		}
		return $error_messsages;
	}

	/*******************************************************/
	/*******************************************************/
	private function CustomErrorMessage($code ) {
		$result = '';

		switch ($code) {
			case '23000':
				$result = 'Error: Integrity constraint violation: Duplicate entry found';
				break;
			case '42S22':
				$result = 'Error: Column not found in field list.';
				break;
			case '42S02':
				$result = 'Error: Table does not exist.';
				break;
			default:
				$result = 'Error found';
				break;
		}

		return $result;
	}
	/*******************************************************/
	/*******************************************************/
	
}
?>
