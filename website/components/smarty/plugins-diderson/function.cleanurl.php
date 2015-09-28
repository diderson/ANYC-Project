<?php
/**
 * Skipjack Smarty plugin
 */


function smarty_function_cleanurl($params, &$smarty) {

    // be sure equation parameter is present
    if (empty($params['url'])) {
        $smarty->trigger_error("cleanurl: missing url parameter");
        return;
    }
	
	$url = "";
	$htmlentities = "true";
	
	if (!empty($params['url'])) {
		$url = $params['url'];
    }
	
	if (!empty($params['htmlentities']) && $params['htmlentities'] == "false") {
		$htmlentities = $params['htmlentities'];
    }	
	
	
//	exit($url);	
		
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

	if( $htmlentities == "true" ) {
		$tempUrl = htmlentities( $tempUrl );
	}
	
	if (empty($params['assign'])) {
		return $tempUrl;
	} else {
		$smarty->assign($params['assign'],$tempUrl);
	}	
    
}


?>
