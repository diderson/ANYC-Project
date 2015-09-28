<div id="formcontainer">
<form id="editform" action="{$formUrl}" method="post">

{strip}
<h1>
	{if $pageObject->id ne ''}
    	{if $pageObject->templateType eq 'view'}
			{if $pageObject->viewHtmlPageTitle ne ''}{$pageObject->viewHtmlPageTitle|escape:"html"}{/if}
		{else}
			{if $pageObject->editHtmlPageTitle ne ''}{$pageObject->editHtmlPageTitle|escape:"html"}{/if}        
		{/if}         
	{else}
		{if $pageObject->insertHtmlPageTitle ne ''}{$pageObject->insertHtmlPageTitle|escape:"html"}{/if}
	{/if}
{if $pageObject->id ne '' && $pageObject->templateType eq 'edit'}&nbsp;&nbsp;ID = {$pageObject->id|escape:"html"}{/if}
{if $pageObject->id ne '' && $pageObject->templateType eq 'view'}&nbsp;&nbsp;ID = {$pageObject->id|escape:"html"}{/if}
</h1>
{/strip}

{if $processResult gt '0' || $smarty.get.action ne ''}
	{if $formAction eq 'insert' || $smarty.get.action eq 'insert'}
	<p class="msg done">Insert successful</p>
	{elseif $formAction eq 'insertasnew' || $smarty.get.action eq 'insertasnew'}
	<p class="msg done">Insert As New successful</p>	
	{elseif $formAction eq 'update' || $smarty.get.action eq 'update'}
	<p class="msg done">Update successful</p>
	{/if}
{elseif $processResult eq '0'}
    {if $processResultMessage neq ''}
    <p class="msg error">{$processResultMessage}</p>
    {else}
    <p class="msg error">Operation failed</p>
	{/if}    
{elseif $processResultMessage neq ''}    
    <p class="msg error">{$processResultMessage}</p>    
{/if}

<div class="msg buttons">
{include file="templates-admin/block/edit-buttons.tpl" postfix="_a"}
</div>

{include file="templates-admin/block/edit-dates.tpl"}

{include file="$contentTemplate"}

<div class="msg buttons">
{include file="templates-admin/block/edit-buttons.tpl" postfix="_b"}
</div>

<div>
	<input type="hidden" id="editform-action" name="editform-action" value="" />    
	<input type="hidden" id="viewmode" name="viewmode" value="{if $pageObject->templateType eq 'view'}readonly{else}{$smarty.post.viewmode}{/if}" />
	<input type="hidden" id="id_form" name="id_form" value="{$editData[0].id}" />
</div>

</form>
<p>&nbsp;</p>
</div>
{literal}
<script type="text/javascript">
<!--
$(document).ready(function() {		

	$('#formcontainer').show();					   
	
	resizeEditElements();	
	
	$(".tablesorter tr").hover( 
		function() { $(this).addClass("rowhover");},
		function() { $(this).removeClass("rowhover"); }
  	);		
	
	// Start a polling loop with a counter.
  	$.doTimeout( 500, function(){
		$('input.button').removeAttr("disabled");
		return false;
  	});	
																						  
	$('#button-insert, #button-insert_a, #button-insert_b').click(function() {  $('#editform-action').val( 'insert' ); });
	$('#button-insertasnew, #button-insertasnew_a, #button-insertasnew_b').click(function() { $('#editform-action').val( 'insertasnew' ); });
	$('#button-update, #button-update_a, #button-update_b').click(function() {  $('#editform-action').val( 'update' ); });
	$('#button-edit, #button-edit_a, #button-edit_b').click(function() {  
	{/literal}
	$('#editform').attr( 'action', '{cleanurl url=$pageObject->editFileName|cat:"?id="|cat:$editData[0].id|cat:"&"|cat:$pageObject->getFormQueryString() htmlentities="false"}' ); 
	{literal}
	});		
	$('#button-back, #button-back_a, #button-back_b').click(function() {  
		{/literal}
		{if $pageObject->templateType eq 'view' && $smarty.get.action != 'update'}
		$('#editform').attr( 'action', '{cleanurl url=$pageObject->listFileName|cat:"?"|cat:$pageObject->getFormQueryString() htmlentities="false"}' ); 		
		{elseif $smarty.post.viewmode eq 'readonly'}
		$('#editform').attr( 'action', '{cleanurl url=$pageObject->editViewFileName|cat:"?id="|cat:$editData[0].id|cat:"&"|cat:$pageObject->getFormQueryString() htmlentities="false"}' ); 		
		{else}
		$('#editform').attr( 'action', '{cleanurl url=$pageObject->listFileName|cat:"?"|cat:$pageObject->getFormQueryString() htmlentities="false"}' ); 
		{/if}
		{literal}		
	});		
	
});	

$(window).resize(function() {
	resizeEditElements();
});
-->
</script>
{/literal}