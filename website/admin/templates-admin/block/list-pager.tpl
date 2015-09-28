{strip}
<div class="pagination box">
	
    {if $pageObject->listColumns && $list && $pagerObject->totalEntities > 0}
	<p class="f-right select-pagesize">
    	Page size&nbsp;
        <select id="select-pagesize" name="select-pagesize">
        	<option value="all" {if $pageObject->pageSize eq 'all'}selected="selected"{/if}>All</option>        
        	<option value="5" {if $pageObject->pageSize eq '5'}selected="selected"{/if}>5</option>        
        	<option value="10" {if $pageObject->pageSize eq '10'}selected="selected"{/if}>10</option>        
        	<option value="25" {if $pageObject->pageSize eq '25'}selected="selected"{/if}>25</option>        
        	<option value="50" {if $pageObject->pageSize eq '50'}selected="selected"{/if}>50</option>        
        	<option value="75" {if $pageObject->pageSize eq '75'}selected="selected"{/if}>75</option>        
        	<option value="100" {if $pageObject->pageSize eq '100'}selected="selected"{/if}>100</option>
        </select>
	</p>        
	<p class="f-right">            
		{if $pagerObject->numberOfPages > 1}
			{section name=p loop=$pagerObject->pageLinks}
				{if $pagerObject->pageLinks[p].link neq ''}<a href="{if $pagerObject->pageLinks[p].link neq '0'}{cleanurl url=$pageObject->listFileName|cat:"?"|cat:$pagerObject->pageLinks[p].link|cat:"&"|cat:$pageObject->getPagerFormQueryString()}{/if}" {if $pagerObject->pageLinks[p].currentpage eq '1'} class="pagination-active"{/if}>{/if}
				{$pagerObject->pageLinks[p].linkName}
				{if $pagerObject->pageLinks[p].link neq ''}</a>{/if}
			{/section}		
		{/if}        	
	</p>    
    {/if}

	<p class="f-left">
	{if $pagerObject->totalEntities > 0}
		Showing&nbsp;<strong>{$pagerObject->startEntities}&nbsp;&ndash;&nbsp;{$pagerObject->endEntities}</strong>&nbsp;of&nbsp;<strong>{$pagerObject->totalEntities}</strong>&nbsp;{$pageObject->listPageTitle}
	{else}        
		Showing&nbsp;<strong>0</strong>&nbsp;{$pageObject->listPageTitle}    
	{/if}
    {if $pagerObject->totalEntities > 0 && $pageObject->searchEnabled eq '1'}
    <input type="submit" class="input-submit button-search-controller" id="search-button-controller" name="search-button-controller" value="Open Search" />
    {/if}
	</p>
    
    {if $pageObject->insertEnabled eq '1'}
    <div id="create_button"><a href="{$pageObject->editFileName}"><img src="design/create.gif" alt="" /></a> <a href="{$pageObject->editFileName}">Create a new <span style="text-transform:uppercase;">{$pageObject->entityName}</span></a></div>
    {/if}	
    
    {if $pageObject->enableExportToCSV && $listSize > 0}
	<div id="export_button"><a href="{cleanurl url=$pageObject->listFileName|cat:"?"|cat:$pageObject->getPagerFormQueryString()|cat:"&export=1"}"><img src="design/ico-list.gif" alt="" /></a> <a href="{cleanurl url=$pageObject->listFileName|cat:"?"|cat:$pageObject->getPagerFormQueryString()|cat:"&export=1"}">Export to CSV</a></div>
	{/if}
        
</div>
{/strip}