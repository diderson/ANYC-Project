{if $pageObject->id ne ''}
    {if $pageObject->templateType eq 'view' && $pageObject->enableEdit} 
    <button type="submit" id="button-edit{$postfix}" name="button-edit" value="edit" class="btn btn-info">Edit</button>               
    {elseif $pageObject->enableEdit}
    <button type="submit" id="button-update{$postfix}" name="button-update" value="update"  class="btn btn-info">Update</button>
        {if $pageObject->insertAsNewEnabled eq '1'}
        <button type="submit" id="button-insertasnew{$postfix}" name="button-insertasnew" value="insertasnew"  class="btn btn-info">Insert As New</button>       
        {/if}
    {/if}       	
{else}
<button type="submit" id="button-insert{$postfix}" name="button-insert" value="Insert"  class="btn btn-info">Insert</button>
{/if}
 <a href="{cleanurl url=$pageObject->listFileName}" id="button-back" class="btn btn-warning">Back to List</a>