{$pageObject->enabledatePicker()}
<a href="javascript://" id="{$elementId}_clear" >Clear</a>
{literal}
<script type="text/javascript">
/* <![CDATA[ */
$(document).ready(function() {	
	Date.firstDayOfWeek = 1;
{/literal}	
	$('#{$elementId}_clear').click(function(){literal}{{/literal}$('#{$elementId}').val('');{literal}}{/literal});
	{if $dateformat ne ''}Date.format = '{$dateformat}';{else}Date.format = 'yyyy-mm-dd';{/if}	
	{if $entry_date eq '' && $setDate && $smarty.post.start_date eq '' && $smarty.post.end_date eq ''}$('#{$elementId}').datePicker().val(new Date().asString()).trigger('change'){/if};	
	$('#{$elementId}').datePicker( {literal}{{/literal}startDate:'1950-01-01'{literal}}{/literal} );	
	$('#{$elementId}').change( function() {literal}{{/literal} $('#{$elementId}').blur(); {literal}}{/literal} );
{literal}	
});
/* ]]> */
</script>
{/literal}		