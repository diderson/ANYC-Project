<select class="input-select" id="{$elementId}" name="{$elementId}">
    <option value="">Select Display Order&nbsp;</option>
    {section name=d loop=101 start=1}
    <option value="{$smarty.section.d.index}" {if $elementValue eq $smarty.section.d.index}selected="selected"{/if} >{$smarty.section.d.index}</option>
    {/section}
</select>