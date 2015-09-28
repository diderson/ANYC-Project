{strip}
<div class="buttons">
    {if $pageObject->updateOnly eq '1'}
	<input type="submit" class="input-submit button" id="button-update{$postfix}" name="button-update" value="Update" disabled="disabled" />    
	{else}
        {if $pageObject->id ne ''}
            {if $pageObject->templateType eq 'view' && $pageObject->enableEdit}
            <input type="submit" class="input-submit button" id="button-edit{$postfix}" name="button-edit" value="Edit" disabled="disabled" />                
            {elseif $pageObject->enableEdit}
            <input type="submit" class="input-submit button" id="button-update{$postfix}" name="button-update" value="Update" disabled="disabled" />
                {if $pageObject->insertAsNewEnabled eq '1'}
                <input type="submit" class="input-submit button" id="button-insertasnew{$postfix}" name="button-insertasnew" value="Insert As New" disabled="disabled" />        
                {/if}
            {/if}       	
        {else}
        <input type="submit" class="input-submit button" id="button-insert{$postfix}" name="button-insert" value="Insert" disabled="disabled" />
        {/if}
        <input type="submit" class="input-submit button" id="button-back{$postfix}" name="button-back" onclick="$('#editform').unbind('submit');" value="Back" />
	{/if}       
</div>
{/strip}