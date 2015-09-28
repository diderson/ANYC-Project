<div class="form-group">
    <label>First Name</label>
     <input class="form-control" placeholder="First Name" id="first_name" name="first_name" type="text" value="{$editData[0].first_name|escape:"html"}" autofocus>
     <span class="validate-error">{$validation_error_messages.first_name}</span>
</div>

<div class="form-group">
    <label>Last Name</label>
     <input class="form-control" placeholder="Last Name" id="last_name" name="last_name" type="text" value="{$editData[0].last_name|escape:"html"}">
     <span class="validate-error">{$validation_error_messages.last_name}</span>
</div>

<div class="form-group">
    <label>Email Address</label>
     <input class="form-control" placeholder="Email Address" id="email_address" name="email_address" type="text" value="{$editData[0].email_address|escape:"html"}">
     <span class="validate-error">{$validation_error_messages.email_address}</span>
</div>
{*
<div class="form-group">
    <label>Administrator Type</label>
 		<select class="form-control" id="id_administratortype" name="id_administratortype" >
          <option value="">Select Administrator Type</option>
			{html_options options=$administratorType selected=$editData[0].id_administratortype}
		</select>
     <span class="validate-error">{$validation_error_messages.id_administratortype}</span>
</div>

<div class="form-group">
    <label>Administrator Access</label>
     <div id="administratoraccess_container">
				{html_checkboxes name="id_administratoraccess" options=$administratorAccess selected=$adminAcceessData separator="" class="input-checkbox"}           
     </div>
</div>
*}

<div class="form-group">
    <label>Password</label>
     <input class="form-control" id="password" name="password" type="password">
     <span class="validate-error">{$validation_error_messages.password}</span>
</div>

<div class="form-group">
    <label>Confirm Password</label>
     <input class="form-control" id="confirm_password" name="confirm_password" type="password">
     <span class="validate-error">{$validation_error_messages.confirm_password}</span>
</div>
{*
<div class="form-group">
    <label>Admin Status</label>
    <select id="administrator_status" name="administrator_status" class="form-control">
      <option value="1" {if $editData[0].administrator_status eq '1' || $editData[0].id eq ''} selected="selected"{/if}>Activer / Montrer&nbsp;&nbsp;&nbsp;</option>
      <option value="0" {if $editData[0].administrator_status eq '0'} selected="selected"{/if}>Désactiver / Cacher</option>
    </select>
</div>

{include file="templates-admin/block/submit-buttons.tpl"}*}
<button type="submit" id="button-update" name="button-update" value="update" class="btn btn-info">Update</button>

<script type="text/javascript">
/* <![CDATA[ */
	$(document).ready(function() {
  	
	  $('#editform').validate({
			rules: {			
				first_name: { required: true },
				last_name: { required: true },
				email_address: { email:true },			
				id_administratortype: { required: true },
				password: { required: false, minlength: 6 },
				confirm_password: { required: false, minlength: 6, equalTo: '#password'}
			},

			messages: {			
				first_name: { required: 'Please enter your First Name' },
				last_name: { required: 'Please enter your Last Name' },
				email_address: { required: 'Please enter your Email Address' },					
				id_administratortype: { required: 'Please select Adminstrator Type' },
				password: { required: 'Please enter your Password' },
				confirm_password: { required: 'Please confirm your Password', equalTo: 'Your password and confirmation password must match' }
			}
		});

		$("#id_administratortype").change( function() {
			
			if( $("#id_administratortype").val() == 1 ) $("input[name='id_administratoraccess[]']").each(function() { this.checked = true; });  
			else $("input[name='id_administratoraccess[]']").each(function() { this.checked = false; });
		});

		{if $pageObject->id eq ''}
			$("#password").rules("add", { required:true,minlength:6 });
			$("#confirm_password").rules("add", { required:true,minlength:6,equalTo: "#password" });
		{/if}

		{if $editData[0].id_administratortype eq '1'}
			$("input[name='id_administratoraccess[]']").each(function() { this.checked = true; });
		{/if}

		
		$('#button-insertasnew, #button-insertasnew_a, #button-insertasnew_b').click(function() {  
			$("#password").rules("add", { required:true,minlength:6 });
			$("#confirm_password").rules("add", { required:true,minlength:6,equalTo: "#password" });
		});	
		
		$('#button-update, #button-update_a, #button-update_b').click(function() {
			if( $("#password").val() == '' && $("#confirm_password").val() == '' ) {
				$("#password").rules("remove");
				$("#confirm_password").rules("remove");		
			}			
		});

	});
/* ]]> */
</script>