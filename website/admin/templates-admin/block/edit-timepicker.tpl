<select id="{$elementId}_hrs" name="{$elementId}_hrs" class="input-select">
	<option value="">&nbsp;--</option>
    {section name=k loop=13 start=0}
    <option value="{if $smarty.section.k.index < 10}0{/if}{$smarty.section.k.index}" {if  $selected_hours neq '' && $selected_hours|string_format:"%d" eq $smarty.section.k.index} selected="selected"{/if}>{if $smarty.section.k.index < 10}0{/if}{$smarty.section.k.index}</option>
    {/section}
</select>:
<select id="{$elementId}_min" name="{$elementId}_min" class="input-select">
	<option value="">&nbsp;--</option>
    {section name=v loop=60 start=0 step=5}
    <option value="{if $smarty.section.v.index < 10}0{/if}{$smarty.section.v.index}" {if $selected_minutes neq '' && $selected_minutes|string_format:"%d" eq $smarty.section.v.index} selected="selected"{/if}>{if $smarty.section.v.index < 10}0{/if}{$smarty.section.v.index}</option>
    {/section}
</select>
&nbsp;
<select id="{$elementId}_timeofday" name="{$elementId}_timeofday" class="input-select">
		<option value="">&nbsp;--</option>
   		<option value="am" {if $selected_timeofday eq 'AM'} selected="selected"{/if}>am</option>
        <option value="pm" {if $selected_timeofday eq 'PM'} selected="selected"{/if}>pm</option>
</select>
<input type="hidden" id="{$elementId}" name="{$elementId}" value="" />

{literal}
<script type="text/javascript">
//<![CDATA[
{/literal}	
	$('#{$elementId}_hrs, #{$elementId}_min, #{$elementId}_timeofday').change(function()
{literal}		
	{
{/literal}	
		$('#{$elementId}').val( $('#{$elementId}_hrs').val()+':'+$('#{$elementId}_min').val()+' '+$('#{$elementId}_timeofday').val() );
{literal}			
	});
//]]>
</script>
{/literal}	