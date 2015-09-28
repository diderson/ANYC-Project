<?php
$server_name = $_SERVER['SERVER_NAME'];	
$database_host = 'localhost';
switch( $server_name ) {
			
			/******************************************************************************************/
			/******************************************************************************************/			
			//LIVE skipjack server
			case "timesheet.skipjack.co.za":
				$database_host = 'sql1.cpt2.host-h.net';
				$host = $database_host;
				$user = 'skipjaq_1';
				$pass = 'iDwbtDr8';
				$dataBasename = 'skipjaq_db1';
				break;
				
				
			/******************************************************************************************/
			/******************************************************************************************/			
			//SKIPJACK vertigo dev				
			case "devtimesheet.skipjack.co.za":
				$database_host = 'vertigo';
				$host = $database_host;
				$user = 'sj_timesheet';
				$pass = 'sj_timesheet';
				$dataBasename = 'skipjack_timesheet';
				break;
	}

//backup_tables('vertigo','sj_timesheet','sj_timesheet','skipjack_timesheet');
backup_tables($host,$user,$pass,$dataBasename);




echo'DB Buckup file:<br>';
echo''.$dataBasename.'_backup-'.date('d-m-Y').'__'.date('H-i-s').'.sql<br>';
echo' with success';
/* backup the db OR just a table */
function backup_tables($host,$user,$pass,$dataBasename,$tables = '*')
{
	
	$link = mysql_connect($host,$user,$pass);
	mysql_select_db($dataBasename,$link);
	
	//get all of the tables
	if($tables == '*')
	{
		$tables = array();
		$result = mysql_query('SHOW TABLES');
		while($row = mysql_fetch_row($result))
		{
			$tables[] = $row[0];
		}
	}
	else
	{
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}
	
	//cycle through
	foreach($tables as $table)
	{
		$result = mysql_query('SELECT * FROM '.$table);
		$num_fields = mysql_num_fields($result);
		
		$return.= 'DROP TABLE '.$table.';';
		$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";
		
		for ($i = 0; $i < $num_fields; $i++) 
		{
			while($row = mysql_fetch_row($result))
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j<$num_fields; $j++) 
				{
					$row[$j] = addslashes($row[$j]);
					$row[$j] = ereg_replace("\n","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j<($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}
	
	//save file
	//$handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
	$handle = fopen(''.$dataBasename.'_backup-'.date('d-m-Y').'__'.date('H-i-s').'.sql','w+');
	fwrite($handle,$return);
	fclose($handle);
	
	
}
?>