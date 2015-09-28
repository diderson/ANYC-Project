<?php /* Smarty version Smarty-3.1.19, created on 2015-05-08 10:23:33
         compiled from "./templates-admin/content/member-info-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8787732155527d65f6562d3-45099180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6e6f58654099f8c6d56bca97daede59ad02c156' => 
    array (
      0 => './templates-admin/content/member-info-edit.tpl',
      1 => 1430752947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8787732155527d65f6562d3-45099180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5527d65f8b0e38_81620091',
  'variables' => 
  array (
    'editData' => 0,
    'validation_error_messages' => 0,
    'provinceData' => 0,
    'pageObject' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5527d65f8b0e38_81620091')) {function content_5527d65f8b0e38_81620091($_smarty_tpl) {?><a href="profile-edit" title="click to edit"><h3>Fullname : <?php echo htmlspecialchars($_SESSION['BACKEND_ADMIN']['ADMIN_FIRSTNAME'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_SESSION['BACKEND_ADMIN']['ADMIN_LASTNAME'], ENT_QUOTES, 'UTF-8', true);?>
</h3></a>
<div class="row">
	<div class="col-lg-4">
	</div>
	<div class="col-lg-4">
	</div>
</div>
<br>

<div class="row">
	<div class="col-lg-4">
		<label>Gender</label>
    <select id="profile_gender" name="profile_gender" class="form-control">
    	<option value="">Please select</option>
      <option value="M" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['profile_gender']=='M') {?> selected="selected"<?php }?>>Male&nbsp;&nbsp;&nbsp;</option>
      <option value="F" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['profile_gender']=='F') {?> selected="selected"<?php }?>>Female</option>
      <option value="O" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['profile_gender']=='O') {?> selected="selected"<?php }?>>Other</option>
    </select>
	</div>
	<div class="col-lg-4">
		<label>Postal Code</label>
     <input class="form-control" placeholder="Postal Code" id="profile_postalcode" name="profile_postalcode" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['editData']->value[0]['profile_postalcode'], ENT_QUOTES, 'UTF-8', true);?>
">
     <span class="validate-error"><?php if (isset($_smarty_tpl->tpl_vars['validation_error_messages']->value)) {?><?php echo $_smarty_tpl->tpl_vars['validation_error_messages']->value['last_name'];?>
<?php }?></span>
	</div>
</div><br>

<div class="form-group">
    <label>Home Address</label>
     <input class="form-control" placeholder="Home Address" id="profile_home_address" name="profile_home_address" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['editData']->value[0]['profile_home_address'], ENT_QUOTES, 'UTF-8', true);?>
">
     <span class="validate-error"><?php if (isset($_smarty_tpl->tpl_vars['validation_error_messages']->value)) {?><?php echo $_smarty_tpl->tpl_vars['validation_error_messages']->value['last_name'];?>
<?php }?></span>
</div>

<div class="form-group">
    <label>Work Address</label>
     <input class="form-control" placeholder="Work Address" id="profile_work_address" name="profile_work_address" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['editData']->value[0]['profile_work_address'], ENT_QUOTES, 'UTF-8', true);?>
">
     <span class="validate-error"><?php if (isset($_smarty_tpl->tpl_vars['validation_error_messages']->value)) {?><?php echo $_smarty_tpl->tpl_vars['validation_error_messages']->value['last_name'];?>
<?php }?></span>
</div>

<div class="form-group">
    <label>Postal Address</label>
     <input class="form-control" placeholder="Postal Address" id="profile_postal_address" name="profile_postal_address" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['editData']->value[0]['profile_postal_address'], ENT_QUOTES, 'UTF-8', true);?>
">
     <span class="validate-error"><?php if (isset($_smarty_tpl->tpl_vars['validation_error_messages']->value)) {?><?php echo $_smarty_tpl->tpl_vars['validation_error_messages']->value['last_name'];?>
<?php }?></span>
</div>
<h4>Contact Details</h4>
<div class="row">
	<div class="col-lg-4">
		<label>Home Telephone</label>
		<input class="form-control col-lg-4" placeholder="Home Telephone" id="profile_home_telephone" name="profile_home_telephone" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['editData']->value[0]['profile_home_telephone'], ENT_QUOTES, 'UTF-8', true);?>
">
	</div>
	<div class="col-lg-4">
		<label>Work Telephone</label>
		<input class="form-control col-lg-4" placeholder="Work Telephone" id="profile_work_telephone" name="profile_work_telephone" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['editData']->value[0]['profile_work_telephone'], ENT_QUOTES, 'UTF-8', true);?>
">
	</div>

	<div class="col-lg-4">
		<label>Mobile</label>
		<input class="form-control col-lg-4" placeholder="Mobile" id="profile_mobile" name="profile_mobile" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['editData']->value[0]['profile_mobile'], ENT_QUOTES, 'UTF-8', true);?>
">
	</div>
</div>
<br>



<div class="row">
	<div class="col-lg-4">
		<label>BBM PIN</label>
		<input class="form-control col-lg-4" placeholder="BBM PIN" id="profile_bbm" name="profile_bbm" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['editData']->value[0]['profile_bbm'], ENT_QUOTES, 'UTF-8', true);?>
">
	</div>
	<div class="col-lg-4">
		<label>Twitter</label>
		<input class="form-control col-lg-4" placeholder="Twitter" id="profile_twitter" name="profile_twitter" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['editData']->value[0]['profile_twitter'], ENT_QUOTES, 'UTF-8', true);?>
">
	</div>

	<div class="col-lg-4">
		<label>Facebook</label>
		<input class="form-control col-lg-4" placeholder="Facebook" id="profile_facebook" name="profile_facebook" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['editData']->value[0]['profile_facebook'], ENT_QUOTES, 'UTF-8', true);?>
">
	</div>
</div>
<br>

<h4>Members of Parliament</h4>
<div class="row">
	<div class="col-lg-3">
		<div class="radio">
	    <label>
	        <input type="radio" name="profile_parliament" id="profile_parliament1" value="National Assembly" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['profile_parliament']=='National Assembly') {?> checked="checked"<?php }?>>National Assembly
	    </label>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="radio">
	    <label>
	        <input type="radio" name="profile_parliament" id="profile_parliament2" value="National Council of Provinces" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['profile_parliament']=='National Council of Provinces') {?> checked="checked"<?php }?>>National Council of Provinces
	    </label>
		</div>
	</div>
</div>
<br>

<?php if ($_smarty_tpl->tpl_vars['provinceData']->value) {?>

<div class="row">
	<div class="col-lg-6">
		<label>Member of the Provincial Legislature</label>
		<select id="id_provincial_legislature" name="id_provincial_legislature" class="form-control">
			<option value="">Please select</option>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['provinceData']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total']);
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['provinceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_province'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['provinceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_province'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['id_provincial_legislature']==$_tmp1) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['provinceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['province_name'];?>
</option>
			<?php endfor; endif; ?>
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
<?php }?>
<br>
<?php if ($_SESSION['BACKEND_ADMIN']['ADMIN_TYPE']=='councillor') {?>
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
<?php } else { ?>
<input type="hidden" id="id_chiefwhip" name="id_chiefwhip" value="0">
<?php }?>
<!-- start of academic qualification-->
<h4>Academic Qualification</h4>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['saqa'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['name'] = 'saqa';
$_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['saqa']['total']);
?>
<div class="row">
	<div class="col-lg-4">
		<label>Year</label>
		<select name="academic_year[]" class="form-control">
			<option value="">Please select</option>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['year'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['year']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['name'] = 'year';
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = (int) 1950;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] = is_array($_loop=2015) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total']);
?>
			<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['year']['index'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['year']['index'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['academic'][$_smarty_tpl->getVariable('smarty')->value['section']['saqa']['index']]['academic_year']==$_tmp2) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['year']['index'];?>
</option>
			<?php endfor; endif; ?>
		</select>
	</div>
	<div class="col-lg-4">
		<label>Institut</label>
		<select name="academic_institut[]" class="form-control">
			<option value="">Please select</option>
			<option value="University" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['academic'][$_smarty_tpl->getVariable('smarty')->value['section']['saqa']['index']]['academic_institut']=='University') {?> selected="selected"<?php }?>>University</option>
			<option value="College" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['academic'][$_smarty_tpl->getVariable('smarty')->value['section']['saqa']['index']]['academic_institut']=='College') {?> selected="selected"<?php }?>>College</option>
			<option value="FET" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['academic'][$_smarty_tpl->getVariable('smarty')->value['section']['saqa']['index']]['academic_institut']=='FET') {?> selected="selected"<?php }?>>FET</option>
			<option value="Secondary school" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['academic'][$_smarty_tpl->getVariable('smarty')->value['section']['saqa']['index']]['academic_institut']=='Secondary school') {?> selected="selected"<?php }?>>Secondary school</option>
			<option value="Other" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['academic'][$_smarty_tpl->getVariable('smarty')->value['section']['saqa']['index']]['academic_institut']=='Other') {?> selected="selected"<?php }?>>Other</option>
		</select>
	</div>

	<div class="col-lg-4">
		<label>Qualification</label>
		<select name="academic_qualification[]" class="form-control">
			<option value="">Please select</option>
			<option value="Matric" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['academic'][$_smarty_tpl->getVariable('smarty')->value['section']['saqa']['index']]['academic_qualification']=='Matric') {?> selected="selected"<?php }?>>Matric</option>
			<option value="Degree" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['academic'][$_smarty_tpl->getVariable('smarty')->value['section']['saqa']['index']]['academic_qualification']=='Degree') {?> selected="selected"<?php }?>>Degree</option>
			<option value="Diploma" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['academic'][$_smarty_tpl->getVariable('smarty')->value['section']['saqa']['index']]['academic_qualification']=='Diploma') {?> selected="selected"<?php }?>>Diploma</option>
			<option value="Certificate" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['academic'][$_smarty_tpl->getVariable('smarty')->value['section']['saqa']['index']]['academic_qualification']=='Certificate') {?> selected="selected"<?php }?>>Certificate</option>
			<option value="Master" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['academic'][$_smarty_tpl->getVariable('smarty')->value['section']['saqa']['index']]['academic_qualification']=='Master') {?> selected="selected"<?php }?>>Master</option>
			<option value="PHD" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['academic'][$_smarty_tpl->getVariable('smarty')->value['section']['saqa']['index']]['academic_qualification']=='PHD') {?> selected="selected"<?php }?>>PHD</option>
			<option value="Other" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['academic'][$_smarty_tpl->getVariable('smarty')->value['section']['saqa']['index']]['academic_qualification']=='Other') {?> selected="selected"<?php }?>>Other</option>
		</select>
	</div>
</div>
<br>
<?php endfor; endif; ?>
<!-- end of academic qualification-->
<br>
<!-- start of employment -->
<h4>Employment Record</h4>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['job'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['job']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['job']['name'] = 'job';
$_smarty_tpl->tpl_vars['smarty']->value['section']['job']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['job']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['job']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['job']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['job']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['job']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['job']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['job']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['job']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['job']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['job']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['job']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['job']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['job']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['job']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['job']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['job']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['job']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['job']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['job']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['job']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['job']['total']);
?>
<div class="row">
	<div class="col-lg-4">
		<label>Company</label>
		<select name="employment_institut[]" class="form-control">
			<option value="">Please select</option>
			<option value="Public" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['employment'][$_smarty_tpl->getVariable('smarty')->value['section']['job']['index']]['employment_institut']=='Public') {?> selected="selected"<?php }?>>Public</option>
			<option value="Private" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['employment'][$_smarty_tpl->getVariable('smarty')->value['section']['job']['index']]['employment_institut']=='Private') {?> selected="selected"<?php }?>>Private</option>
			<option value="NGO" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['employment'][$_smarty_tpl->getVariable('smarty')->value['section']['job']['index']]['employment_institut']=='NGO') {?> selected="selected"<?php }?>>NGO</option>
			
			<option value="Self-employed" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['employment'][$_smarty_tpl->getVariable('smarty')->value['section']['job']['index']]['employment_institut']=='Self-employed') {?> selected="selected"<?php }?>>Self-employed</option>
			<option value="Other" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['employment'][$_smarty_tpl->getVariable('smarty')->value['section']['job']['index']]['employment_institut']=='Other') {?> selected="selected"<?php }?>>Other</option>
		</select>
	</div>

	<div class="col-lg-4">
		<label>Position</label>
		<select name="employment_position[]" class="form-control">
			<option value="">Please select</option>
			<option value="Sen Exec" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['employment'][$_smarty_tpl->getVariable('smarty')->value['section']['job']['index']]['employment_position']=='Sen Exec') {?> selected="selected"<?php }?>>Sen Exec</option>
			<option value="Sen Manager" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['employment'][$_smarty_tpl->getVariable('smarty')->value['section']['job']['index']]['employment_position']=='Sen Manager') {?> selected="selected"<?php }?>>Sen Manager</option>
			<option value="Manager" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['employment'][$_smarty_tpl->getVariable('smarty')->value['section']['job']['index']]['employment_position']=='Manager') {?> selected="selected"<?php }?>>Manager</option>
			<option value="Administrator" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['employment'][$_smarty_tpl->getVariable('smarty')->value['section']['job']['index']]['employment_position']=='Administrator') {?> selected="selected"<?php }?>>Administrator</option>
			<option value="Organiser" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['employment'][$_smarty_tpl->getVariable('smarty')->value['section']['job']['index']]['employment_position']=='Organiser') {?> selected="selected"<?php }?>>Organiser</option>
			<option value="Other" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['employment'][$_smarty_tpl->getVariable('smarty')->value['section']['job']['index']]['employment_position']=='Other') {?> selected="selected"<?php }?>>Other</option>
		</select>
	</div>
	<div class="col-lg-2">
		<label>Start</label>
		<select name="employment_startyear[]" class="form-control">
			<option value="">select</option>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['year'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['year']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['name'] = 'year';
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = (int) 1950;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] = is_array($_loop=2015) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total']);
?>
			<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['year']['index'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['year']['index'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['employment'][$_smarty_tpl->getVariable('smarty')->value['section']['job']['index']]['employment_startyear']==$_tmp3) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['year']['index'];?>
</option>
			<?php endfor; endif; ?>
		</select>
	</div>
	<div class="col-lg-2">
		<label>End</label>
		<select name="employment_endyear[]" class="form-control">
			<option value="">select</option>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['year'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['year']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['name'] = 'year';
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = (int) 1950;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] = is_array($_loop=2015) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total']);
?>
			<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['year']['index'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['year']['index'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['employment'][$_smarty_tpl->getVariable('smarty')->value['section']['job']['index']]['employment_endyear']==$_tmp4) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['year']['index'];?>
</option>
			<?php endfor; endif; ?>
		</select>
	</div>
</div>
<br>
<?php endfor; endif; ?>

<!-- end of employment-->
<br>
<h4>ANC Membership</h4>
<div class="row">
	<div class="col-lg-3">
		<label>Number</label>
		<input class="form-control" placeholder="Membership Number" id="ancmember_number" name="ancmember_number" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['editData']->value[0]['ancmember_number'], ENT_QUOTES, 'UTF-8', true);?>
">
	</div>

	<div class="col-lg-3">
		<label>Branch Name</label>
		<input class="form-control" placeholder="Branch Name" id="ancmember_branch" name="ancmember_branch" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['editData']->value[0]['ancmember_branch'], ENT_QUOTES, 'UTF-8', true);?>
">
	</div>

	<?php if ($_smarty_tpl->tpl_vars['provinceData']->value) {?>
	<div class="col-lg-3">
		<label>Province</label>
		<select id="ancmember_province" name="ancmember_province" class="form-control">
			<option value="">Please select</option>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['provinceData']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total']);
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['provinceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['province_name'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['provinceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['province_name'];?>
<?php $_tmp5=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['ancmember_province']==$_tmp5) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['provinceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['province_name'];?>
</option>
			<?php endfor; endif; ?>
		</select>
	</div>
	<?php }?>
	

</div>

<br>
<h4>Leadership Positions</h4>
<div class="row">
	<div class="col-lg-4">
		<label>ANC</label>
		<select name="leadership_anc" class="form-control">
			<option value="">Please select</option>
			<option value="NEC" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_anc']=='NEC') {?> selected="selected"<?php }?>>NEC</option>
			<option value="PEC" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_anc']=='PEC') {?> selected="selected"<?php }?>>PEC</option>
			<option value="REC" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_anc']=='REC') {?> selected="selected"<?php }?>>REC</option>
		</select>
	</div>
	<div class="col-lg-4">
		<label>Womens League</label>
		<select name="leadership_womenleague" class="form-control">
			<option value="">Please select</option>
			<option value="NEC" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_womenleague']=='NEC') {?> selected="selected"<?php }?>>NEC</option>
			<option value="PEC" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_womenleague']=='PEC') {?> selected="selected"<?php }?>>PEC</option>
			<option value="REC" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_womenleague']=='REC') {?> selected="selected"<?php }?>>REC</option>
		</select>
	</div>

	<div class="col-lg-4">
		<label>Youth League</label>
		<select name="leadership_youthleague" class="form-control">
			<option value="">Please select</option>
			<option value="NEC" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_youthleague']=='NEC') {?> selected="selected"<?php }?>>NEC</option>
			<option value="PEC" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_youthleague']=='PEC') {?> selected="selected"<?php }?>>PEC</option>
			<option value="REC" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_youthleague']=='REC') {?> selected="selected"<?php }?>>REC</option>
		</select>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-6">
		<label>SACP</label>
		<select name="leadership_sacp" class="form-control">
			<option value="">Please select</option>
			<option value="National" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_sacp']=='National') {?> selected="selected"<?php }?>>National</option>
			<option value="Provincial" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_sacp']=='Provincial') {?> selected="selected"<?php }?>>Provincial</option>
			<option value="Regional" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_sacp']=='Regional') {?> selected="selected"<?php }?>>Regional</option>
		</select>
	</div>
	<div class="col-lg-6">
		<label>COSATU</label>
		<select name="leadership_cosatu" class="form-control">
			<option value="">Please select</option>
			<option value="National" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_cosatu']=='National') {?> selected="selected"<?php }?>>National</option>
			<option value="Provincial" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_cosatu']=='Provincial') {?> selected="selected"<?php }?>>Provincial</option>
			<option value="Regional" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_cosatu']=='Regional') {?> selected="selected"<?php }?>>Regional</option>
		</select>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-4">
		<label>SANCO</label>
		<select name="leadership_sanco" class="form-control">
			<option value="">Please select</option>
			<option value="National" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_sanco']=='National') {?> selected="selected"<?php }?>>National</option>
			<option value="Provincial" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_sanco']=='Provincial') {?> selected="selected"<?php }?>>Provincial</option>
			<option value="Regional" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_sanco']=='Regional') {?> selected="selected"<?php }?>>Regional</option>
		</select>
	</div>
	<div class="col-lg-4">
		<label>MKMVA</label>
		<select name="leadership_mkmva" class="form-control">
			<option value="">Please select</option>
			<option value="National" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_mkmva']=='National') {?> selected="selected"<?php }?>>National</option>
			<option value="Provincial" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_mkmva']=='Provincial') {?> selected="selected"<?php }?>>Provincial</option>
			<option value="Regional" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_mkmva']=='Regional') {?> selected="selected"<?php }?>>Regional</option>
		</select>
	</div>
	<div class="col-lg-4">
		<label>Veterans</label>
		<select name="leadership_veterans" class="form-control">
			<option value="">Please select</option>
			<option value="National" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_veterans']=='National') {?> selected="selected"<?php }?>>National</option>
			<option value="Provincial" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_veterans']=='Provincial') {?> selected="selected"<?php }?>>Provincial</option>
			<option value="Regional" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['leadership_veterans']=='Regional') {?> selected="selected"<?php }?>>Regional</option>
		</select>
	</div>
</div>


<br>
<?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['id_profile']!='') {?>
<button type="submit" id="button-update" name="button-update" value="update" class="btn btn-info">Update</button>
<?php } else { ?>
<button type="submit" id="button-insert" name="button-insert" value="Insert" class="btn btn-info">Update</button>
<?php }?>

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

		<?php if ($_smarty_tpl->tpl_vars['pageObject']->value->id=='') {?>
			$("#password").rules("add", { required:true,minlength:6 });
			$("#confirm_password").rules("add", { required:true,minlength:6,equalTo: "#password" });
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['id_administratortype']=='1') {?>
			$("input[name='id_administratoraccess[]']").each(function() { this.checked = true; });
		<?php }?>

		
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

		<?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['id_provincial_legislature']!='') {?>
				var provinceid = '<?php echo $_smarty_tpl->tpl_vars['editData']->value[0]['id_provincial_legislature'];?>
';
				var idMunicipality = '<?php echo $_smarty_tpl->tpl_vars['editData']->value[0]['id_municipality'];?>
';
				var idChiefwhip = '<?php echo $_smarty_tpl->tpl_vars['editData']->value[0]['id_chiefwhip'];?>
';
				getMunicipalityByProvinceId(provinceid, idMunicipality, idChiefwhip);
				getChiefwhipByMunicipalityId(idMunicipality, idChiefwhip) 
		<?php }?>

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
</script><?php }} ?>
