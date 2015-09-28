{if $pageObject->tinyMCEEnabled ne ''}
{$pageObject->enableTinyMCE()}
{/if}
<div class="uploadbuttons">
	<input onclick="javascript: tinymce_setupImageManager( '{$folder}' ); mcImageManager.open( 'editform', '{$imageId}', '', 'tinymce_updateImageSrc{$imageId}' );" type="button" class="small-button" id="insert-image-button-{$imageId}" name="insert-image-button-{$imageId}" value="Insert / Upload Image" />
	<input onclick="javascript: tinymce_clearImage( '{$imageId}' );" type="button" class="small-button" id="clear-image-button-{$imageId}" name="clear-image-button-{$imageId}" value="Clear Image" />	
	{if $imageFile ne ''}    
	<input onclick="javascript: window.open('{$imageFile}');" type="button" class="small-button" id="view-image-button-{$imageId}" name="view-image-button-{$imageId}" value="View Image" />	    
    {/if}
</div>


<div class="imagecontainer">
	{if $imageFile ne ''}
	<a href="javascript://" onclick="javascript: window.open('{$siteUrl}{$imageFile|escape:"html"}')" id="{$imageId}-src_asset"><img id="{$imageId}-src" src="{$imageFile|escape:"html"}" alt="Click to view image" class="tinymce_image" width="{$defaultWidth|default:"200"}" /></a><br />
	{else}
	<img id="{$imageId}-src" src="img/spacer.gif" alt="" class="tinymce_image" width="5" />	
	{/if}
</div>


<script type="text/javascript">
<!--				
function tinymce_updateImageSrc{$imageId}( url, data ) {literal} { {/literal}
	if( url != '' ) {literal} { {/literal}				
		$('#{$imageId}').val( url );
		$('#{$imageId}-src').attr( {literal} { {/literal}'src' : url, width: {$defaultWidth|default:200} {literal} } {/literal} );		
	{literal} } {/literal}
{literal} } {/literal}
-->
</script>