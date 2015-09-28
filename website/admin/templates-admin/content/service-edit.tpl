<div class="form-group">
    <label>Désignation</label>
     <input class="form-control" placeholder="Désignation" id="service_designation" name="service_designation" type="text" value="{$editData[0].service_designation|escape:"html"}" autofocus>
     <span class="validate-error">{$validation_error_messages.service_designation}</span>
</div>
<div class="form-group">
    <label>Status</label>
    <select id="service_status" name="service_status" class="form-control">
      <option value="1" {if $editData[0].service_status eq '1' || $editData[0].id eq ''} selected="selected"{/if}>Activer / Montrer&nbsp;&nbsp;&nbsp;</option>
      <option value="0" {if $editData[0].service_status eq '0'} selected="selected"{/if}>Désactiver / Cacher</option>
    </select>
</div>
{include file="templates-admin/block/submit-buttons.tpl"}

<script type="text/javascript">
/* <![CDATA[ */
	$(document).ready(function() {
  	
	  $('#editform').validate({
			rules: {
				service_designation: { required: true }
			},
			messages: {		
				service_designation: { required: 'Veuillez renseigner une Désignation' }
			}
		});

	});
/* ]]> */
</script>