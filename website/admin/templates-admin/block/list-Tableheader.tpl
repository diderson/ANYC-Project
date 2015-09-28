
{if $pageObject->listColumns && $list}
	{section name=c loop=$pageObject->listColumns}
        {math equation="x + 1" x=$smarty.section.c.index assign="currentIndex"}			
        {if $pageObject->listColumns[c] neq ''}
        <th class="header">{$pageObject->listColumns[c]|replace:"|nosort":""|escape:"html"}</th>
        {else}
        <th>&nbsp;</th>
        {/if}    
    {/section}
    {if $pageObject->enableDelete || $pageObject->enableEdit || $pageObject->enableView}
    <th class="header actionheader">&nbsp;&nbsp;Actions</th>
    {/if}
{/if}
