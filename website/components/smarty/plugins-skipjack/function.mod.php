<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

function smarty_function_mod($params, &$smarty) {

	$mod_result = $params['value'] % $params['modby'];
	
	if (empty($params['assign'])) {
		return $mod_result;
	} else {
		$smarty->assign($params['assign'],$mod_result);
	}
}

/* vim: set expandtab: */

?>
