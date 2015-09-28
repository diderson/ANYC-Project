{* <!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajax Upload and Resize with jQuery and PHP - Demo</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>*}
<script type="text/javascript" src="js/jquery.form.min.js"></script>

<script type="text/javascript">
$(document).ready(function() { 
	var options = { 
			target: '#output',   // target element(s) to be updated with server response 
			beforeSubmit: beforeSubmit,  // pre-submit callback 
			success: afterSuccess,  // post-submit callback 
			url:'ajax/ajax-image-upload.php' 
			//resetForm: true        // reset the form after successful submit 
		}; 

	$('#submit-btn').click(function() {
		$('#editform').ajaxSubmit(options);
		return false;
	});

	$('#imageInput').change(function(){

	});
		
	 /*$('#editform').submit(function() { 
	 	console.log('clicked submmit');
			$(this).ajaxSubmit(options);  			
			// always return false to prevent standard browser submit and page navigation 
			return false; 
		}); */
}); 

function afterSuccess()
{
	$('#submit-btn').show(); //hide submit button
	$('#loading-img').hide(); //hide submit button

	var str = $('#imageInput').val();
	var pieces = str.split('\\');
	var filename = pieces[pieces.length-1];
	var realFilename = filename.toLowerCase();
	var folderImage = '/{$imageFolder}/';
	var elementId = '{$elementId}';
	var savedImagePath = folderImage + realFilename
	$('#'+elementId).val(savedImagePath);
	$("#currentImage").html("");
	//console.log('le nom de l image', realFilename, ': folder=> ', savedImagePath);

}

//function to check file size before uploading.
function beforeSubmit(){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{
		
		if( !$('#imageInput').val()) //check empty input filed
		{
			$("#output").html("Are you kidding ? Please Select an image");
			return false
		}
		
		var fsize = $('#imageInput')[0].files[0].size; //get file size
		var ftype = $('#imageInput')[0].files[0].type; // get file type
		

		//allow only valid image file types 
		switch(ftype)
        {
            case 'image/png': case 'image/gif': case 'image/jpeg': case 'image/pjpeg':
                break;
            default:
                $("#output").html("<b>"+ftype+"</b> Unsupported file type!");
				return false
        }
		
		//Allowed file size is less than 1 MB (1048576)
		if(fsize>1048576) 
		{
			$("#output").html("<b>"+bytesToSize(fsize) +"</b> Too big Image file! <br />Please reduce the size of your photo using an image editor.");
			return false
		}
				
		$('#submit-btn').hide(); //hide submit button
		$('#loading-img').show(); //hide submit button
		$("#output").html("");  
	}
	else
	{
		//Output error to older browsers that do not support HTML5 File API
		$("#output").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

</script>

<div id="upload-wrapper">
<div align="center">
<h3>{$widgetTitle}</h3>
<input name="image_file" id="imageInput" type="file" />
<input type="hidden" name="foldertoUpload" id="foldertoUpload" value="{$siteRoot}/{$imageFolder}/">
<input type="hidden" name="displayFolder" id="displayFolder" value="/{$imageFolder}/">
<input type="hidden" name="maxImagesize" id="maxImagesize" value="{$maxImagesize}">
<input type="hidden" name="thumbsize" id="thumbsize" value="{$thumbsize}">
{* <input type="button"  id="submit-btn" value="Upload" />*}
<button type="button" id="submit-btn" name="submit-btn" value="Upload" class="btn btn-success">Upload</button>
<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
<div id="output"></div>
{if $currentImage neq ''}<div id="currentImage"><img src="{$currentImage}" alt="Current Image" style="width:40%;"/></div>{/if}
</div>
</div>
