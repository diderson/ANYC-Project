{if $pageObject->tinyMCEEnabled ne ''}
{$pageObject->enableTinyMCE()}
{/if}
<div class="uploadbuttons">
	<input onclick="javascript: tinymce_setupFileManager( '{$folder}' ); mcFileManager.open( 'editform', '{$fileId}', '', 'tinymce_updateFileSrc{$fileId}' );" type="button" class="small-button" id="insert-file-button-{$fileId}" name="insert-file-button-{$fileId}" value="Insert / Upload File" />
	<input onclick="javascript: tinymce_clearFile( '{$fileId}' );" type="button" class="small-button" id="clear-file-button-{$fileId}" name="clear-file-button-{$fileId}" value="Clear File" />	
</div>

<div class="filecontainer">
	<div id="file-{$fileId}">
		{if $uploadFile ne ''}
		<a href="javascript://" onclick="javascript: window.open('{$siteUrl}{$uploadFile|escape:"html"}')" title="Click to view file"><img src="img/ico-file.gif" alt="Click to view file" /></a>
		{/if}
	</div>
</div>


<script type="text/javascript">
<!--				
function tinymce_updateFileSrc{$fileId}( url, data ) {literal} { {/literal}
	if( url != '' ) {literal} { {/literal}				
		$('#{$fileId}').val( url );
		$('#file-{$fileId}').html();
		$('#file-{$fileId}').html( "<a href=\"javascript://\" onclick=\"javascript: window.open('{$siteUrl}"+url+"')\" title=\"Click to view file\"><img src=\"img/ico-file.gif\" alt=\"Click to view file\" /></a>" );
	{literal} } {/literal}
{literal} } {/literal}
-->
</script>