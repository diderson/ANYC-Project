
<div class="action_icons">
{if $pageObject->enableView}
	<a href="{cleanurl url=$pageObject->editViewFileName|cat:"?id="|cat:$listData.id|cat:"&"|cat:$pageObject->getFormQueryString()}" title="View"><img src="design/ico-list.gif" class="ico" alt="View" /></a> 
{/if}	
{if $pageObject->enableEdit}
	<a href="{cleanurl url=$pageObject->editFileName|cat:"?id="|cat:$listData.id|cat:"&"|cat:$pageObject->getFormQueryString()}" title="Edit"><img src="design/ico-edit.gif" class="ico" alt="Edit" /></a> 
{/if}
{if $pageObject->enableDelete}
    	<a href="javascript:void(0);" id="del{$listData.id}" title="Delete" class="delete-button" data-identity="{$listData.id}" data-entityname="{$pageObject->entityName}" data-entityalias="{$pageObject->entityAliasName}"><img src="design/ico-delete.gif" class="ico" alt="Delete" /></a>
{/if}
</div>
