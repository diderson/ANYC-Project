{if $editData[0].cdate ne '' || $editData[0].mdate ne ''}
	<table class="edit">		
		{strip}
		<tr>			
			<td colspan="2" class="cdate">				
				{if $editData[0].cdate ne ''}<strong>Creation Date</strong>&nbsp;&nbsp;&nbsp;{$editData[0].cdate|escape:"html"}{/if}
				{if $editData[0].mdate ne ''}<br /><strong>Modified Date</strong>&nbsp;&nbsp;&nbsp;{$editData[0].mdate|escape:"html"}{/if}
			</td>
		</tr>
		{/strip}
	</table>    
{/if} 