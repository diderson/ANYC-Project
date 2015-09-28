<?php

function smarty_modifier_alphatoindex($alphavalue)
{
	return ord ( $alphavalue ) - 97;
}

?>
