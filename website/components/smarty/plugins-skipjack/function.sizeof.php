<?php
/**
 * Skipjack Smarty plugin
 */


function smarty_function_sizeof($params, &$smarty) {

	$sizeof = 0;
	$add = 0;
	
	if (!empty($params['add'])) {
		$add = $params['add'];
    }
		
	if( !empty( $params['array'] ) && ( is_array( $params['array'] ) || is_object( $params['array'] ) ) ) {
		$sizeof = sizeof( $params['array'] );
    }
	return $sizeof + $add;
    
}


?>
