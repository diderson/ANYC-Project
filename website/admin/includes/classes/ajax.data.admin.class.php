<?php
/*	======================================================
	Diderson Baka - www.diderson.com
	------------------------------------------------------
	NOTE: This code is intellectual property of
	Diderson Baka and may not be
	reproduced or used without prior permission.
	------------------------------------------------------
	Copyright 2013
	======================================================	*/

/******************************************************************************/
// Define includes
/******************************************************************************/

class AjaxData {	

	/******************************************************************************/
	/******************************************************************************/
	 /************************************************/
  /************************************************/
	function GetMunicipalityByIdProvince( $Idprovince) {
		
		$sql = "SELECT DISTINCT
					anc_municipality.id_municipality AS 'id_municipality',
					anc_municipality.municipality_name AS 'municipality_name'
				FROM 
					anc_municipality 
				WHERE
					anc_municipality.id_province ='".$Idprovince."' 
				 AND anc_municipality.municipality_status='1'";
					
		DB::getInstance()->query( $querySuccess, $sql, $recordSet );
		
		return $recordSet;
			
	}

	/************************************************/
  /************************************************/
	function GetChiefwhipByMunicipalityId( $idMunicipality) {
		
		$sql = "SELECT DISTINCT
					anc_administrator.id_administrator AS 'id_chiefwhip',
					CONCAT(anc_administrator.first_name, ' ', anc_administrator.last_name) AS 'chiefwhip_name'
				FROM 
					anc_administrator 
				WHERE
					anc_administrator.id_municipality ='".$idMunicipality."' 
				AND
					anc_administrator.id_administratortype='4' 
				AND 
				 anc_administrator.administrator_status='1'";
					
					//echo $sql; exit;
		DB::getInstance()->query( $querySuccess, $sql, $recordSet );
		
		return $recordSet;
			
	}
	/************************************************/
	/************************************************/	
	function simpleExportToCSV( $exportData, $exportColumns, $exportPageTitle ){
		
		$this->exportColumns = $exportColumns;
		$this->exportPageTitle = $exportPageTitle;
		
			//$this->getExportData( $exportData, $searchData);
			$export_data_string = '';
			$line_break = "\n";
			$filename = $this->exportPageTitle.'_('.date("Y-m-j").')' ;
			
			//$export_data_string .= $this->exportPageTitle.$line_break;
			$export_data_string .= $this->exportPageTitle.','.date("Y-m-j h:i:s A").$line_break;
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
				
				//header("Content-type: application/x-msdownload");
				header("Content-type: application/vnd.ms-excel");
				header("Content-Disposition: attachment; filename=".$filename.".csv");
				header("Pragma: no-cache");
				header("Expires: 0");
				echo $export_data_string;
				exit();
			
		}
	}	
	
	
	/************************************************/
	/************************************************/
	
	
	/************************************************/
	/************************************************/
	
}