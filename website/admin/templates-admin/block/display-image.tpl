<div id="upload-wrapper">
<div align="left;">
<h3>{$widgetTitle}</h3>
<input class="form-control" placeholder="Image" id="pickerImage" name="pickerImage" type="text" value="{$currentImage}" style="width:50%;" disabled> <a href="/filemanager/dialog.php?type=1&amp;field_id=pickerImage" id="select-btn" class="btn btn-success iframe-input-filemanager-btn" type="button">Select</a>
<input type="button"  id="cancel-btn" class="btn btn-warning" value="cancel" />
<input type="hidden" name="oldImage" id="oldImage" value="{$currentImage}">
<input type="hidden" name="{$elementId}" id="{$elementId}" value="{$currentImage}">
<div id="currentImage">{if $currentImage neq ''}<img src="{$currentImage}" alt="" style="width:40%;"/>{/if}</div>
</div>
</div>


<script type="text/javascript">
$(document).ready(function() {

//this is forcing to validate hidden file.
$.validator.setDefaults({
    ignore: ''
});	

	$('#cancel-btn').hide();
	var currentImage = '{$currentImage}';

	if (currentImage !== '') {
		$('#select-btn').html('Change');
	}
	//launch file manager ------------- 
	 $('.iframe-input-filemanager-btn').fancybox({  
	 		'width'  : 900,
			'height'  : 600,
			'type'    : 'iframe',
			'autoScale'     : false,
			afterClose: afterImageSelected
    });

	 $('#cancel-btn').click(function() {
		var oldImage = $('#oldImage').val();
		var elementId = '{$elementId}';
		var currentImage = '{$currentImage}';

		$('#'+elementId).val(oldImage);
		$('#pickerImage').val(oldImage);

		if (currentImage !== '') {
			$('#currentImage').html('<img src="'+oldImage+'" alt="" style="width:40%;"/>');
		} else {
			$('#currentImage').html('')
			$('#select-btn').html('Select');
		}
		
		$('#cancel-btn').fadeOut();
	});
	 
});

function afterImageSelected(){
	var oldImage = $('#oldImage').val();
	var elementId = '{$elementId}';
	var siteUrl = '{$siteUrl}'
	var newSelectedImage = $('#pickerImage').val();
	var cleanImageName = newSelectedImage.replace(siteUrl, "");

	$('#select-btn').html('Change');
	$('#'+elementId).val(cleanImageName);
	$('#pickerImage').val(cleanImageName);
	$('#currentImage').html('<img src="'+cleanImageName+'" alt="" style="width:40%;"/>');

	if (oldImage !== cleanImageName){
		$('#cancel-btn').show();
	}
}
</script>