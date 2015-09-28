<a href="profile-edit" title="click to edit"><h3>Fullname : {$smarty.session.BACKEND_ADMIN.ADMIN_FIRSTNAME|escape:"html"} {$smarty.session.BACKEND_ADMIN.ADMIN_LASTNAME|escape:"html"}</h3></a>
<div class="row">
	<div class="col-lg-4">
	</div>
	<div class="col-lg-4">
	</div>
</div>
<br>
{*<div class="form-group">
    <label>First Name</label>
     <input class="form-control" placeholder="First Name" id="first_name" name="first_name" type="text" value="{$editData[0].first_name|escape:"html"}" autofocus>
     <span class="validate-error">{if isset($validation_error_messages)}{$validation_error_messages.first_name}{/if}</span>
</div>

<div class="form-group">
    <label>Last Name</label>
     <input class="form-control" placeholder="Last Name" id="last_name" name="last_name" type="text" value="{$editData[0].last_name|escape:"html"}">
     <span class="validate-error">{if isset($validation_error_messages)}{$validation_error_messages.last_name}{/if}</span>
</div>
*}
<div class="row">
	<div class="col-lg-4">
		<label>Gender</label>
    <select id="profile_gender" name="profile_gender" class="form-control">
    	<option value="">Please select</option>
      <option value="M" {if $editData[0].profile_gender eq 'M'} selected="selected"{/if}>Male&nbsp;&nbsp;&nbsp;</option>
      <option value="F" {if $editData[0].profile_gender eq 'F'} selected="selected"{/if}>Female</option>
      <option value="O" {if $editData[0].profile_gender eq 'O'} selected="selected"{/if}>Other</option>
    </select>
	</div>
	<div class="col-lg-4">
		<label>Postal Code</label>
     <input class="form-control" placeholder="Postal Code" id="profile_postalcode" name="profile_postalcode" type="text" value="{$editData[0].profile_postalcode|escape:"html"}">
     <span class="validate-error">{if isset($validation_error_messages)}{$validation_error_messages.last_name}{/if}</span>
	</div>
</div><br>

<div class="form-group">
    <label>Home Address</label>
     <input class="form-control" placeholder="Home Address" id="profile_home_address" name="profile_home_address" type="text" value="{$editData[0].profile_home_address|escape:"html"}">
     <span class="validate-error">{if isset($validation_error_messages)}{$validation_error_messages.last_name}{/if}</span>
</div>

<div class="form-group">
    <label>Work Address</label>
     <input class="form-control" placeholder="Work Address" id="profile_work_address" name="profile_work_address" type="text" value="{$editData[0].profile_work_address|escape:"html"}">
     <span class="validate-error">{if isset($validation_error_messages)}{$validation_error_messages.last_name}{/if}</span>
</div>

<div class="form-group">
    <label>Postal Address</label>
     <input class="form-control" placeholder="Postal Address" id="profile_postal_address" name="profile_postal_address" type="text" value="{$editData[0].profile_postal_address|escape:"html"}">
     <span class="validate-error">{if isset($validation_error_messages)}{$validation_error_messages.last_name}{/if}</span>
</div>
<h4>Contact Details</h4>
<div class="row">
	<div class="col-lg-4">
		<label>Home Telephone</label>
		<input class="form-control col-lg-4" placeholder="Home Telephone" id="profile_home_telephone" name="profile_home_telephone" type="text" value="{$editData[0].profile_home_telephone|escape:"html"}">
	</div>
	<div class="col-lg-4">
		<label>Work Telephone</label>
		<input class="form-control col-lg-4" placeholder="Work Telephone" id="profile_work_telephone" name="profile_work_telephone" type="text" value="{$editData[0].profile_work_telephone|escape:"html"}">
	</div>

	<div class="col-lg-4">
		<label>Mobile</label>
		<input class="form-control col-lg-4" placeholder="Mobile" id="profile_mobile" name="profile_mobile" type="text" value="{$editData[0].profile_mobile|escape:"html"}">
	</div>
</div>
<br>

{*
<div class="row">
	<div class="col-lg-4">
		<label>Home Email Address</label>
		<input class="form-control col-lg-4" placeholder="Email Address" id="profile_home_email_address" name="profile_home_email_address" type="text" value="{$editData[0].profile_home_email_address|escape:"html"}">
	</div>
	<div class="col-lg-4">
		<label>Work Email Address</label>
		<input class="form-control col-lg-4" placeholder="Email Address" id="profile_work_email_address" name="profile_work_email_address" type="text" value="{$editData[0].profile_work_email_address|escape:"html"}">
	</div>

	<div class="col-lg-4">
		<label>other Email Address</label>
		<input class="form-control col-lg-4" placeholder="Email Address" id="profile_work_other_address" name="profile_work_other_address" type="text" value="{$editData[0].profile_work_other_address|escape:"html"}">
	</div>
</div>
<div class="form-group">
    <label>Email Address</label>
     <input class="form-control col-lg-4" placeholder="Email Address" id="email_address" name="email_address" type="text" value="{$editData[0].email_address|escape:"html"}">
     <input class="form-control col-lg-4" placeholder="Email Address" id="email_address" name="email_address" type="text" value="{$editData[0].email_address|escape:"html"}">
     <span class="validate-error">{if isset($validation_error_messages)}{$validation_error_messages.email_address}{/if}</span>
</div>
*}

<div class="row">
	<div class="col-lg-4">
		<label>BBM PIN</label>
		<input class="form-control col-lg-4" placeholder="BBM PIN" id="profile_bbm" name="profile_bbm" type="text" value="{$editData[0].profile_bbm|escape:"html"}">
	</div>
	<div class="col-lg-4">
		<label>Twitter</label>
		<input class="form-control col-lg-4" placeholder="Twitter" id="profile_twitter" name="profile_twitter" type="text" value="{$editData[0].profile_twitter|escape:"html"}">
	</div>

	<div class="col-lg-4">
		<label>Facebook</label>
		<input class="form-control col-lg-4" placeholder="Facebook" id="profile_facebook" name="profile_facebook" type="text" value="{$editData[0].profile_facebook|escape:"html"}">
	</div>
</div>
<br>

<h4>Members of Parliament</h4>
<div class="row">
	<div class="col-lg-3">
		<div class="radio">
	    <label>
	        <input type="radio" name="profile_parliament" id="profile_parliament1" value="National Assembly" {if $editData[0].profile_parliament eq 'National Assembly'} checked="checked"{/if}>National Assembly
	    </label>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="radio">
	    <label>
	        <input type="radio" name="profile_parliament" id="profile_parliament2" value="National Council of Provinces" {if $editData[0].profile_parliament eq 'National Council of Provinces'} checked="checked"{/if}>National Council of Provinces
	    </label>
		</div>
	</div>
</div>
<br>

{if $provinceData}

<div class="row">
	<div class="col-lg-6">
		<label>Member of the Provincial Legislature</label>
		<select id="id_provincial_legislature" name="id_provincial_legislature" class="form-control">
			<option value="">Please select</option>
			{section name=a loop=$provinceData}
			<option value="{$provinceData[a].id_province}" {if $editData[0].id_provincial_legislature eq {$provinceData[a].id_province}} selected="selected"{/if}>{$provinceData[a].province_name}</option>
			{/section}
		</select>
	</div>
	<div class="col-lg-6" id="municipalityRow">
		<label>Municipality</label>
		<div id="selectMunicipality">
			<select id="id_municipality" name="id_municipality" class="form-control">
			</select>
		</div>
	</div>

</div>
{/if}
<br>
{if $smarty.session.BACKEND_ADMIN.ADMIN_TYPE eq 'councillor'}
<h4>Chief whip</h4>
<div class="row">
	<div class="col-lg-6">
		<div id="selectChiefwhip">
			<select id="id_chiefwhip" name="id_chiefwhip" class="form-control">
			</select>
		</div>
	</div>
</div>
<br>
{else}
<input type="hidden" id="id_chiefwhip" name="id_chiefwhip" value="0">
{/if}
<!-- start of academic qualification-->
<h4>Academic Qualification</h4>
{section name=saqa start=0 loop=5 }
<div class="row">
	<div class="col-lg-4">
		<label>Year</label>
		<select name="academic_year[]" class="form-control">
			<option value="">Please select</option>
			{section name=year start=1950 loop=2015 }
			<option value="{$smarty.section.year.index}" {if $editData[0].academic[saqa].academic_year eq {$smarty.section.year.index}} selected="selected"{/if}>{$smarty.section.year.index}</option>
			{/section}
		</select>
	</div>
	<div class="col-lg-4">
		<label>Institut</label>
		<select name="academic_institut[]" class="form-control">
			<option value="">Please select</option>
			<option value="University" {if $editData[0].academic[saqa].academic_institut eq 'University'} selected="selected"{/if}>University</option>
			<option value="College" {if $editData[0].academic[saqa].academic_institut eq 'College'} selected="selected"{/if}>College</option>
			<option value="FET" {if $editData[0].academic[saqa].academic_institut eq 'FET'} selected="selected"{/if}>FET</option>
			<option value="Secondary school" {if $editData[0].academic[saqa].academic_institut eq 'Secondary school'} selected="selected"{/if}>Secondary school</option>
			<option value="Other" {if $editData[0].academic[saqa].academic_institut eq 'Other'} selected="selected"{/if}>Other</option>
		</select>
	</div>

	<div class="col-lg-4">
		<label>Qualification</label>
		<select name="academic_qualification[]" class="form-control">
			<option value="">Please select</option>
			<option value="Matric" {if $editData[0].academic[saqa].academic_qualification eq 'Matric'} selected="selected"{/if}>Matric</option>
			<option value="Degree" {if $editData[0].academic[saqa].academic_qualification eq 'Degree'} selected="selected"{/if}>Degree</option>
			<option value="Diploma" {if $editData[0].academic[saqa].academic_qualification eq 'Diploma'} selected="selected"{/if}>Diploma</option>
			<option value="Certificate" {if $editData[0].academic[saqa].academic_qualification eq 'Certificate'} selected="selected"{/if}>Certificate</option>
			<option value="Master" {if $editData[0].academic[saqa].academic_qualification eq 'Master'} selected="selected"{/if}>Master</option>
			<option value="PHD" {if $editData[0].academic[saqa].academic_qualification eq 'PHD'} selected="selected"{/if}>PHD</option>
			<option value="Other" {if $editData[0].academic[saqa].academic_qualification eq 'Other'} selected="selected"{/if}>Other</option>
		</select>
	</div>
</div>
<br>
{/section}
<!-- end of academic qualification-->
<br>
<!-- start of employment -->
<h4>Employment Record</h4>
{section name=job start=0 loop=5 }
<div class="row">
	<div class="col-lg-4">
		<label>Company</label>
		<select name="employment_institut[]" class="form-control">
			<option value="">Please select</option>
			<option value="Public" {if $editData[0].employment[job].employment_institut eq 'Public'} selected="selected"{/if}>Public</option>
			<option value="Private" {if $editData[0].employment[job].employment_institut eq 'Private'} selected="selected"{/if}>Private</option>
			<option value="NGO" {if $editData[0].employment[job].employment_institut eq 'NGO'} selected="selected"{/if}>NGO</option>
			{*<option value="SAP" {if $editData[0].employment[job].employment_institut eq 'SAP'} selected="selected"{/if}>SAP</option>*}
			<option value="Self-employed" {if $editData[0].employment[job].employment_institut eq 'Self-employed'} selected="selected"{/if}>Self-employed</option>
			<option value="Other" {if $editData[0].employment[job].employment_institut eq 'Other'} selected="selected"{/if}>Other</option>
		</select>
	</div>

	<div class="col-lg-4">
		<label>Position</label>
		<select name="employment_position[]" class="form-control">
			<option value="">Please select</option>
			<option value="Sen Exec" {if $editData[0].employment[job].employment_position eq 'Sen Exec'} selected="selected"{/if}>Sen Exec</option>
			<option value="Sen Manager" {if $editData[0].employment[job].employment_position eq 'Sen Manager'} selected="selected"{/if}>Sen Manager</option>
			<option value="Manager" {if $editData[0].employment[job].employment_position eq 'Manager'} selected="selected"{/if}>Manager</option>
			<option value="Administrator" {if $editData[0].employment[job].employment_position eq 'Administrator'} selected="selected"{/if}>Administrator</option>
			<option value="Organiser" {if $editData[0].employment[job].employment_position eq 'Organiser'} selected="selected"{/if}>Organiser</option>
			<option value="Other" {if $editData[0].employment[job].employment_position eq 'Other'} selected="selected"{/if}>Other</option>
		</select>
	</div>
	<div class="col-lg-2">
		<label>Start</label>
		<select name="employment_startyear[]" class="form-control">
			<option value="">select</option>
			{section name=year start=1950 loop=2015 }
			<option value="{$smarty.section.year.index}" {if $editData[0].employment[job].employment_startyear eq {$smarty.section.year.index}} selected="selected"{/if}>{$smarty.section.year.index}</option>
			{/section}
		</select>
	</div>
	<div class="col-lg-2">
		<label>End</label>
		<select name="employment_endyear[]" class="form-control">
			<option value="">select</option>
			{section name=year start=1950 loop=2015 }
			<option value="{$smarty.section.year.index}" {if $editData[0].employment[job].employment_endyear eq {$smarty.section.year.index}} selected="selected"{/if}>{$smarty.section.year.index}</option>
			{/section}
		</select>
	</div>
</div>
<br>
{/section}

<!-- end of employment-->
<br>
<h4>ANC Membership</h4>
<div class="row">
	<div class="col-lg-3">
		<label>Number</label>
		<input class="form-control" placeholder="Membership Number" id="ancmember_number" name="ancmember_number" type="text" value="{$editData[0].ancmember_number|escape:"html"}">
	</div>

	<div class="col-lg-3">
		<label>Branch Name</label>
		<input class="form-control" placeholder="Branch Name" id="ancmember_branch" name="ancmember_branch" type="text" value="{$editData[0].ancmember_branch|escape:"html"}">
	</div>

	{if $provinceData}
	<div class="col-lg-3">
		<label>Province</label>
		<select id="ancmember_province" name="ancmember_province" class="form-control">
			<option value="">Please select</option>
			{section name=a loop=$provinceData}
			<option value="{$provinceData[a].province_name}" {if $editData[0].ancmember_province eq {$provinceData[a].province_name}} selected="selected"{/if}>{$provinceData[a].province_name}</option>
			{/section}
		</select>
	</div>
	{/if}
	{*<div class="col-lg-3">
		<label>Region</label>
		<input class="form-control" placeholder="Region" id="ancmember_region" name="ancmember_region" type="text" value="{$editData[0].ancmember_region|escape:"html"}">
	</div>*}

</div>

<br>
<h4>Leadership Positions</h4>
<div class="row">
	<div class="col-lg-4">
		<label>ANC</label>
		<select name="leadership_anc" class="form-control">
			<option value="">Please select</option>
			<option value="NEC" {if $editData[0].leadership_anc eq 'NEC'} selected="selected"{/if}>NEC</option>
			<option value="PEC" {if $editData[0].leadership_anc eq 'PEC'} selected="selected"{/if}>PEC</option>
			<option value="REC" {if $editData[0].leadership_anc eq 'REC'} selected="selected"{/if}>REC</option>
		</select>
	</div>
	<div class="col-lg-4">
		<label>Womens League</label>
		<select name="leadership_womenleague" class="form-control">
			<option value="">Please select</option>
			<option value="NEC" {if $editData[0].leadership_womenleague eq 'NEC'} selected="selected"{/if}>NEC</option>
			<option value="PEC" {if $editData[0].leadership_womenleague eq 'PEC'} selected="selected"{/if}>PEC</option>
			<option value="REC" {if $editData[0].leadership_womenleague eq 'REC'} selected="selected"{/if}>REC</option>
		</select>
	</div>

	<div class="col-lg-4">
		<label>Youth League</label>
		<select name="leadership_youthleague" class="form-control">
			<option value="">Please select</option>
			<option value="NEC" {if $editData[0].leadership_youthleague eq 'NEC'} selected="selected"{/if}>NEC</option>
			<option value="PEC" {if $editData[0].leadership_youthleague eq 'PEC'} selected="selected"{/if}>PEC</option>
			<option value="REC" {if $editData[0].leadership_youthleague eq 'REC'} selected="selected"{/if}>REC</option>
		</select>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-6">
		<label>SACP</label>
		<select name="leadership_sacp" class="form-control">
			<option value="">Please select</option>
			<option value="National" {if $editData[0].leadership_sacp eq 'National'} selected="selected"{/if}>National</option>
			<option value="Provincial" {if $editData[0].leadership_sacp eq 'Provincial'} selected="selected"{/if}>Provincial</option>
			<option value="Regional" {if $editData[0].leadership_sacp eq 'Regional'} selected="selected"{/if}>Regional</option>
		</select>
	</div>
	<div class="col-lg-6">
		<label>COSATU</label>
		<select name="leadership_cosatu" class="form-control">
			<option value="">Please select</option>
			<option value="National" {if $editData[0].leadership_cosatu eq 'National'} selected="selected"{/if}>National</option>
			<option value="Provincial" {if $editData[0].leadership_cosatu eq 'Provincial'} selected="selected"{/if}>Provincial</option>
			<option value="Regional" {if $editData[0].leadership_cosatu eq 'Regional'} selected="selected"{/if}>Regional</option>
		</select>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-4">
		<label>SANCO</label>
		<select name="leadership_sanco" class="form-control">
			<option value="">Please select</option>
			<option value="National" {if $editData[0].leadership_sanco eq 'National'} selected="selected"{/if}>National</option>
			<option value="Provincial" {if $editData[0].leadership_sanco eq 'Provincial'} selected="selected"{/if}>Provincial</option>
			<option value="Regional" {if $editData[0].leadership_sanco eq 'Regional'} selected="selected"{/if}>Regional</option>
		</select>
	</div>
	<div class="col-lg-4">
		<label>MKMVA</label>
		<select name="leadership_mkmva" class="form-control">
			<option value="">Please select</option>
			<option value="National" {if $editData[0].leadership_mkmva eq 'National'} selected="selected"{/if}>National</option>
			<option value="Provincial" {if $editData[0].leadership_mkmva eq 'Provincial'} selected="selected"{/if}>Provincial</option>
			<option value="Regional" {if $editData[0].leadership_mkmva eq 'Regional'} selected="selected"{/if}>Regional</option>
		</select>
	</div>
	<div class="col-lg-4">
		<label>Veterans</label>
		<select name="leadership_veterans" class="form-control">
			<option value="">Please select</option>
			<option value="National" {if $editData[0].leadership_veterans eq 'National'} selected="selected"{/if}>National</option>
			<option value="Provincial" {if $editData[0].leadership_veterans eq 'Provincial'} selected="selected"{/if}>Provincial</option>
			<option value="Regional" {if $editData[0].leadership_veterans eq 'Regional'} selected="selected"{/if}>Regional</option>
		</select>
	</div>
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
<br>
{if $editData[0].id_profile neq ''}
<button type="submit" id="button-update" name="button-update" value="update" class="btn btn-info">Update</button>
{else}
<button type="submit" id="button-insert" name="button-insert" value="Insert" class="btn btn-info">Update</button>
{/if}

<script type="text/javascript">
/* <![CDATA[ */
	$(document).ready(function() {
  	
	  $('#editform').validate({
			rules: {			
				profile_gender: { required: true },
				profile_postalcode: { required: true },
				profile_home_address: { required: true },
				profile_mobile: { required: true },
				profile_parliament: { required: true },
				id_provincial_legislature: { required: true },
				id_municipality: { required: true },
				id_chiefwhip: { required: true },
				ancmember_branch: { required: true },
				ancmember_number: { required: true },
				ancmember_province: { required: true },
				ancmember_region: { required: true },
				last_name: { required: true },
				email_address: { email:true },			
				id_administratortype: { required: true },
				password: { required: false, minlength: 6 },
				confirm_password: { required: false, minlength: 6, equalTo: '#password'}
			},

			messages: {			
				profile_gender: { required: 'please select your gender' },
				profile_postalcode: { required: 'Please enter your Postal Code' },
				profile_home_address: { required: 'Please enter your Home address' },
				profile_mobile: { required: 'Please enter your Mobile Number' },
				profile_parliament: { required: 'Please tick parliament member' },
				id_provincial_legislature: { required: 'please select your Provincial Legislature' },
				id_municipality: { required: 'Please Select a municipality' },
				id_chiefwhip: { required: 'Please Select a chief whip' },
				ancmember_number: { required: 'please enter your Membership Number' },
				ancmember_branch: { required: 'please enter your Branch name' },
				ancmember_province: { required: 'please select your member province' },
				ancmember_region: { required: 'please enter your Region' },
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

		{if $editData[0].id_provincial_legislature neq ''}
				var provinceid = '{$editData[0].id_provincial_legislature}';
				var idMunicipality = '{$editData[0].id_municipality}';
				var idChiefwhip = '{$editData[0].id_chiefwhip}';
				getMunicipalityByProvinceId(provinceid, idMunicipality, idChiefwhip);
				getChiefwhipByMunicipalityId(idMunicipality, idChiefwhip) 
		{/if}

		//$('#municipalityRow').hide();

		$('#id_provincial_legislature').change(function(){
	
			var province = $('#id_provincial_legislature').val();
			var idMunicipality = '';
			var idChiefwhip = '';
			getMunicipalityByProvinceId(province, idMunicipality, idChiefwhip);
		});

	});

	function getMunicipalityByProvinceId(Idprovince, idMunicipality, idChiefwhip) {
		if (Idprovince !=='') {
			//$('#municipalityRow').show();

			$.getJSON('/admin/ajax/ajax-option-municipality.php?Idprovince='+Idprovince, null, function(data){
	      $('#selectMunicipality').empty();
	      $('#selectMunicipality').html('<select class="form-control" id="id_municipality" name="id_municipality"><option value="">Select Municipality</option></select>');
	      for (var i = 0; i < data.length; i++) {
	      	if (data[i].id_municipality === idMunicipality) {
	      		$("select#id_municipality").append('<option value="'+data[i].id_municipality+'" selected="selected">' + data[i].municipality_name + '</option>');
	      	} else {
	      		$("select#id_municipality").append('<option value="'+data[i].id_municipality+'">' + data[i].municipality_name + '</option>');
	      	}
      	}
      	$("#id_municipality").rules("add", { required:true });
    		$('#id_municipality').change(function(){

					var idMunicipality = $('#id_municipality').val();
					//var idMunicipality = '';
					getChiefwhipByMunicipalityId(idMunicipality, idChiefwhip);
				});
      	//$('#id_commune_ville').chosen();
	    });
		} else {
			$('#selectMunicipality').empty();
			//$('#municipalityRow').hide();
		}
	}

	function getChiefwhipByMunicipalityId(idMunicipality, idChiefwhip) {
		if (idMunicipality !=='') {
			//$('#municipalityRow').show();

			$.getJSON('/admin/ajax/ajax-option-chiefwhip.php?idMunicipality='+idMunicipality, null, function(data){
	      $('#selectChiefwhip').empty();
	      $('#selectChiefwhip').html('<select class="form-control" id="id_chiefwhip" name="id_chiefwhip"><option value="">Select Chief whip</option></select>');
	      for (var i = 0; i < data.length; i++) {
	      	if (data[i].id_chiefwhip === idChiefwhip) {
	      		$("select#id_chiefwhip").append('<option value="'+data[i].id_chiefwhip+'" selected="selected">' + data[i].chiefwhip_name + '</option>');
	      	} else {
	      		$("select#id_chiefwhip").append('<option value="'+data[i].id_chiefwhip+'">' + data[i].chiefwhip_name + '</option>');
	      	}
        	
      	}
      	$("#id_chiefwhip").rules("add", { required:true });
      	//$('#id_commune_ville').chosen();
	    });
		} else {
			$('#selectChiefwhip').empty();
			//$('#municipalityRow').hide();
		}
	}
/* ]]> */
</script>