
<select id="{$elementId}_day" name="{$elementId}_day" class="select_day">
    <option value="">DAY</option>
    {section name=d loop=32 start=1}
    <option value="{$smarty.section.d.index|string_format:"%02d"}" {if $smarty.section.d.index eq $selectedDay} selected="selected"{/if}>{$smarty.section.d.index|string_format:"%02d"}</option>
    {/section}                    
</select>
<select id="{$elementId}_month" name="{$elementId}_month" class="select_month">
    <option value="">MONTH</option>
    <option value="01" {if $selectedMonth eq '01'} selected="selected"{/if}>January</option>
    <option value="02" {if $selectedMonth eq '02'} selected="selected"{/if}>February</option>
    <option value="03" {if $selectedMonth eq '03'} selected="selected"{/if}>March</option>
    <option value="04" {if $selectedMonth eq '04'} selected="selected"{/if}>April</option>
    <option value="05" {if $selectedMonth eq '05'} selected="selected"{/if}>May</option>
    <option value="06" {if $selectedMonth eq '06'} selected="selected"{/if}>June</option>
    <option value="07" {if $selectedMonth eq '07'} selected="selected"{/if}>July</option>
    <option value="08" {if $selectedMonth eq '08'} selected="selected"{/if}>August</option>
    <option value="09" {if $selectedMonth eq '09'} selected="selected"{/if}>September</option>
    <option value="10" {if $selectedMonth eq '10'} selected="selected"{/if}>October</option>
    <option value="11" {if $selectedMonth eq '11'} selected="selected"{/if}>November</option>
    <option value="12" {if $selectedMonth eq '12'} selected="selected"{/if}>December</option>                                                                                                                        
</select>
<select id="{$elementId}_year" name="{$elementId}_year" class="select_year">
    <option value="">YEAR</option>
    {section name=d max=100 loop=$smarty.now|date_format:"%Y" step=-1}
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

		$('#{$elementId}_dob').val( $('#{$elementId}_dob_year').val()+'-'+$('#{$elementId}_dob_month').val()+'-'+$('#{$elementId}_dob_day').val() ) ;		
		if( $('#{$elementId}_dob').val() == "--") $('#{$elementId}_dob').val('');
{literal}			
	});
//]]>
</script>
{/literal}	