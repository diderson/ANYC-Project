<?php
/**
 * Skipjack Smarty plugin
 */


function smarty_function_in_array($params, &$smarty) {

	$search = '';
	$searchArray = ''
	
	if( empty( $params['inputArray'] )) {
		return false;
    }		
	
	if( !is_array( $params['inputArray'] )) {
		return false;
    } else {
		$searchArray = 	$params['inputArray'];
	}
	
	if( !empty( $params['inputArray'] )) {
		$search = $params['search'];
    }			
	
	if( $search != '' ) {
		return in_array( $search, $searchArray );
	}	
    
}


?>
