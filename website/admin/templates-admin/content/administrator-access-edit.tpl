<div class="form-group">
    <label>Access</label>
     <input class="form-control" placeholder="Access" id="access_name" name="access_name" type="text" value="{$editData[0].access_name|escape:"html"}" autofocus>
     <span class="validate-error">{$validation_error_messages.access_name}</span>
</div>

<div class="form-group">
    <label>Access Alias</label>
     <input class="form-control" placeholder="Access Alias" id="access_alias" name="access_alias" type="text" value="{$editData[0].access_alias|escape:"html"}">
     <span class="validate-error">{$validation_error_messages.access_alias}</span>
</div>

<div class="form-group">
    <label>Access Status</label>
    <select id="access_status" name="access_status" class="form-control">
      <option value="1" {if $editData[0].access_status eq '1' || $editData[0].id eq ''} selected="selected"{/if}>Activer / Montrer&nbsp;&nbsp;&nbsp;</option>
      <option value="0" {if $editData[0].access_status eq '0'} selected="selected"{/if}>Désactiver / Cacher</option>
    </select>
</div>
{include file="templates-admin/block/submit-buttons.tpl"}

<script type="text/javascript">
/* <![CDATA[ */
	$(document).ready(function() {
  	
	  $('#editform').validate({
			rules: {
				access_name: { required: true },
				access_alias: { required: true }
			},
			messages: {
				access_name: { required: 'Please enter a access name' },
				access_alias: { required: 'Please enter a access alias' }
			}
		});

	});
/* ]]> */
</script>