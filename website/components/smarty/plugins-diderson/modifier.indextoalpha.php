<?php

function smarty_modifier_indextoalpha($asciivalue)
{
	return chr( 97 + intval($asciivalue) );
}

?>
