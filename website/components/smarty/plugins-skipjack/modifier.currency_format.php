<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty string_format modifier plugin
 *
 * Type:     modifier<br>
 * Name:     string_format<br>
 * Purpose:  format strings via sprintf
 * @link http://smarty.php.net/manual/en/language.modifier.string.format.php
 *          string_format (Smarty online manual)
 * @author   Monte Ohrt <monte at ohrt dot com>
 * @param string
 * @param string
 * @return string
 */
function smarty_modifier_currency_format( $price )
{
	//$format = "%01.2f";
    //return sprintf($format, $price);
	if( is_numeric($price ) ) {
		return number_format($price);
	} else {
		return $price;
	}
	//return "$ ".number_format($price,2);
}

/* vim: set expandtab: */

?>
