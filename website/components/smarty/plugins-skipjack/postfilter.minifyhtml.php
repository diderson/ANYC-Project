<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     prefilter.pre01.php
 * Type:     prefilter
 * Name:     pre01
 * Purpose:  Convert html tags to be lowercase.
 * -------------------------------------------------------------
 */
 
 function smarty_postfilter_minifyhtml( $tpl_source, Smarty_Internal_Template $template ){
	 //echo 'asdfasdf';exit();
	 $minifiedHTML = preg_replace("/<!--.*?-->/ms","",$tpl_source);
	 $minifiedHTML = preg_replace("/\s+/", " ", $minifiedHTML);
	//$minifiedHTML = preg_replace("/a/","",$tpl_source);
	 return $minifiedHTML;
	 
 }

/* 
 function remove_dw_comments($tpl_source, &$smarty)
{
    return preg_replace("/<!--#.*-->/U",'',$tpl_source);
}
*/
?>