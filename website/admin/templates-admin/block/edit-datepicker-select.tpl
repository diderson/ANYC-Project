<select id="{$elementId}_day" name="{$elementId}_day" class="select_day select_text">
    <option value="">DAY</option>
    {section name=d loop=32 start=1}
    <option value="{$smarty.section.d.index|string_format:"%02d"}" {if $smarty.section.d.index eq $selectedDay} selected="selected"{/if}>{$smarty.section.d.index|string_format:"%02d"}</option>
    {/section}                    
</select>
<select id="{$elementId}_month" name="{$elementId}_month" class="select_month select_text">
    <option value="">MONTH</option>
    <option value="01" {if $selectedMonth eq '01'} selected="selected"{/if}>01</option>
    <option value="02" {if $selectedMonth eq '02'} selected="selected"{/if}>02</option>
    <option value="03" {if $selectedMonth eq '03'} selected="selected"{/if}>03</option>
    <option value="04" {if $selectedMonth eq '04'} selected="selected"{/if}>04</option>
    <option value="05" {if $selectedMonth eq '05'} selected="selected"{/if}>05</option>
    <option value="06" {if $selectedMonth eq '06'} selected="selected"{/if}>06</option>
    <option value="07" {if $selectedMonth eq '07'} selected="selected"{/if}>07</option>
    <option value="08" {if $selectedMonth eq '08'} selected="selected"{/if}>08</option>
    <option value="09" {if $selectedMonth eq '09'} selected="selected"{/if}>09</option>
    <option value="10" {if $selectedMonth eq '10'} selected="selected"{/if}>10</option>
    <option value="11" {if $selectedMonth eq '11'} selected="selected"{/if}>11</option>
    <option value="12" {if $selectedMonth eq '12'} selected="selected"{/if}>12</option>                                                                                                                        
</select>
<select id="{$elementId}_year" name="{$elementId}_year" class="select_year select_text">
    <option value="">YEAR</option>
    {section name=d max=100 loop=2040 start=$smarty.now|date_format:"%Y"}
    <option value="{$smarty.section.d.index}" {if $selectedYear eq $smarty.section.d.index} selected="selected"{/if}>{$smarty.section.d.index}</option>
    {/section}                    
</select>

<input type="hidden" id="{$elementId}" name="{$elementId}" value="" />

{literal}
<script type="text/javascript">
//<![CDATA[
{/literal}	
	$('#{$elementId}_day, #{$elementId}_month, #{$elementId}_year').change(function()
{literal}		
	{
{/literal}	

		$('#{$elementId}').val( $('#{$elementId}_year').val()+'-'+$('#{$elementId}_month').val()+'-'+$('#{$elementId}_day').val() ) ;		
		if( $('#{$elementId}').val() == "--") $('#{$elementId}').val('');

{literal}			
	});
//]]>
</script>
{/literal}	