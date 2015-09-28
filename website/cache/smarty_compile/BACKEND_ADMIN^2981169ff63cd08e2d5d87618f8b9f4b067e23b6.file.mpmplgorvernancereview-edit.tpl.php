<?php /* Smarty version Smarty-3.1.19, created on 2015-04-16 00:08:47
         compiled from ".\templates-admin\content\mpmplgorvernancereview-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20738552ea94d78f3c4-22420855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2981169ff63cd08e2d5d87618f8b9f4b067e23b6' => 
    array (
      0 => '.\\templates-admin\\content\\mpmplgorvernancereview-edit.tpl',
      1 => 1429134154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20738552ea94d78f3c4-22420855',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552ea94dac76b2_72980642',
  'variables' => 
  array (
    'mpMplGovernanceData' => 0,
    'editData' => 0,
    'govreviewid' => 0,
    'govreview_id' => 0,
    'mp_mpl_govreview' => 0,
    'mpMplGovernancePRData' => 0,
    'sous_section' => 0,
    'section_0' => 0,
    'section_1' => 0,
    'sous_section2' => 0,
    'k' => 0,
    'competency' => 0,
    'section_id' => 0,
    'competencySection' => 0,
    'sous_section3' => 0,
    'strengthAndWeakness' => 0,
    'skillRate' => 0,
    'pageObject' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552ea94dac76b2_72980642')) {function content_552ea94dac76b2_72980642($_smarty_tpl) {?>
<h3>Governance Review</h3>
<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            Use Rating Matrix 1 to 5 to Access Performance
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                            <th>#</th>
	                            <th>KEY PERFORMANCE AREAS</th>
	                            <th>RATE</th>
	                         
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['y'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['y']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['name'] = 'y';
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mpMplGovernanceData']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total']);
?>
	                        <tr>
	                            <td><input type="hidden" name="mp_mpl_govreview_size[]"><?php echo $_smarty_tpl->tpl_vars['mpMplGovernanceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['id_mp_mpl_govreview'];?>
</td>
	                            <td><?php echo $_smarty_tpl->tpl_vars['mpMplGovernanceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['mp_mpl_govreview_libele'];?>
</td>
	                            <td>
	                            	<?php $_smarty_tpl->tpl_vars["mp_mpl_govreview"] = new Smarty_variable($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_govreview'], null, 0);?>
	                            	<?php $_smarty_tpl->tpl_vars["govreviewid"] = new Smarty_variable($_smarty_tpl->tpl_vars['mpMplGovernanceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['id_mp_mpl_govreview'], null, 0);?>
	                            	<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'govreview_id', null); ob_start(); ?>govreview_<?php echo $_smarty_tpl->tpl_vars['govreviewid']->value;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	                            	<select name="govreview_<?php echo $_smarty_tpl->tpl_vars['mpMplGovernanceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['id_mp_mpl_govreview'];?>
" class="form-control">
																	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['name'] = 'rate';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total']);
?>
																		<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['mp_mpl_govreview']->value[$_smarty_tpl->tpl_vars['govreview_id']->value]==$_tmp1) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
</option>
																	<?php endfor; endif; ?>
																</select>
	                            </td> 
	                        </tr>
	                      <?php endfor; endif; ?> 
	                    </tbody>
	                </table>
	            </div>
	            <!-- /.table-responsive -->
	        </div>
	        <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
		</div>
</div>
<br>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['x'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['x']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['name'] = 'x';
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total']);
?>

	<?php if ($_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['id_mp_mpl_govpr']=='1') {?>
	<?php $_smarty_tpl->tpl_vars["sous_section"] = new Smarty_variable($_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['mp_mpl_pr_section'], null, 0);?>
	<h4><?php echo $_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['mp_mpl_govpr_libele'];?>
</h4>
	<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <?php echo $_smarty_tpl->tpl_vars['sous_section']->value[0];?>

	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                            <th>Committee</th>
	                            <th>No. of meetings</th>
	                            <th>No. of attendance</th>
	                            <th>Rate</th>	                         
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php $_smarty_tpl->tpl_vars["section_0"] = new Smarty_variable($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_govpr_review']['mp_mpl_govpr_libele_1']['section_0'], null, 0);?>
	                    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['name'] = 'meeting';
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total']);
?>
	                 
	                        <tr>
	                            <td><input class="form-control col-lg-8" placeholder="Committee" id="committee[]" name="committee[]" type="text" value="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['section_0']->value[$_tmp2]['committee'];?>
"></td>
	                            <td>
	                            	<select name="meetings[]" class="form-control">
																	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['name'] = 'rate';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] = is_array($_loop=101) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total']);
?>
																		<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp3]['meetings']==$_tmp4) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
</option>
																	<?php endfor; endif; ?>
																</select>
	                            </td> 

	                            <td>
	                            	<select name="attendance[]" class="form-control">
																	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['name'] = 'rate';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] = is_array($_loop=101) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total']);
?>
																		<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
<?php $_tmp6=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp5]['attendance']==$_tmp6) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
</option>
																	<?php endfor; endif; ?>
																</select>
	                            </td> 

	                            <td>
	                            	<select name="rate_commitee[]" class="form-control">
																	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['name'] = 'rate';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total']);
?>
																		<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
<?php $_tmp8=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp7]['rate_commitee']==$_tmp8) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
</option>
																	<?php endfor; endif; ?>
																</select>
	                            </td> 
	                        </tr>
	                      <?php endfor; endif; ?> 
	                    </tbody>
	                </table>
	            </div>
	            <!-- /.table-responsive -->
	        </div>
	        <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <?php echo $_smarty_tpl->tpl_vars['sous_section']->value[1];?>

	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                        
	                            <th>Topics</th>
	                            <th>Rate</th>
	                         
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php $_smarty_tpl->tpl_vars["section_1"] = new Smarty_variable($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_govpr_review']['mp_mpl_govpr_libele_1']['section_1'], null, 0);?>
	                    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['topic'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['name'] = 'topic';
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['total']);
?>
	                        <tr>
	                            <td><input class="form-control col-lg-10" placeholder="Topic" id="topic[]" name="topic[]" type="text"  value="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['topic']['index'];?>
<?php $_tmp9=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['section_1']->value[$_tmp9]['topic'];?>
"></td>
	                            

	                            <td class="col-lg-2">
	                            	<select name="rate_topic[]" class="form-control">
																	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['name'] = 'rate';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total']);
?>
																		<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['topic']['index'];?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
<?php $_tmp11=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_1']->value[$_tmp10]['rate_topic']==$_tmp11) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
</option>
																	<?php endfor; endif; ?>
																</select>
	                            </td> 
	                        </tr>
	                      <?php endfor; endif; ?> 
	                    </tbody>
	                </table>
	            </div>
	            <!-- /.table-responsive -->
	        </div>
	        <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	       
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                        
	                            <th>Caucus Work</th>
	                            <th>Rate</th>
	                         
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <td><?php echo $_smarty_tpl->tpl_vars['sous_section']->value[2];?>
</td>
	                            

	                            <td>
	                            	<select name="caucus_1" class="form-control">
																	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['name'] = 'rate';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total']);
?>
																		<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
<?php $_tmp12=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_govpr_review']['mp_mpl_govpr_libele_1']['section_2']==$_tmp12) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
</option>
																	<?php endfor; endif; ?>
																</select>
	                            </td> 
	                        </tr>
	                        <tr>
	                            <td><?php echo $_smarty_tpl->tpl_vars['sous_section']->value[3];?>
</td>
	                            

	                            <td>
	                            	<select name="caucus_2" class="form-control">
																	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['name'] = 'rate';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total']);
?>
																		<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
<?php $_tmp13=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_govpr_review']['mp_mpl_govpr_libele_1']['section_3']==$_tmp13) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
</option>
																	<?php endfor; endif; ?>
																</select>
	                            </td> 
	                        </tr>
	                    
	                    </tbody>
	                </table>
	            </div>
	            <!-- /.table-responsive -->
	        </div>
	        <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
		</div>
	</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['id_mp_mpl_govpr']=='2') {?>
	<?php $_smarty_tpl->tpl_vars["sous_section2"] = new Smarty_variable($_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['mp_mpl_pr_section'], null, 0);?>
	
		<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <?php echo $_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['mp_mpl_govpr_libele'];?>

	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                        
	                            <th>Competency</th>
	                            <th>Rate</th>
	                         
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php $_smarty_tpl->tpl_vars["competencySection"] = new Smarty_variable($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_govpr_review']['mp_mpl_govpr_libele_2'], null, 0);?>
	                    	<?php  $_smarty_tpl->tpl_vars['competency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['competency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sous_section2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['competency']->key => $_smarty_tpl->tpl_vars['competency']->value) {
$_smarty_tpl->tpl_vars['competency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['competency']->key;
?>
	                    	<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'section_id', null); ob_start(); ?>section_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	                        <tr>
	                            <td><?php echo $_smarty_tpl->tpl_vars['competency']->value;?>
</td>
	                            

	                            <td class="col-lg-2">
	                            	<select name="competency[]" class="form-control col-lg-2">
																	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['name'] = 'rate';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total']);
?>
																		<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
<?php $_tmp14=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['competencySection']->value[$_smarty_tpl->tpl_vars['section_id']->value]==$_tmp14) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
</option>
																	<?php endfor; endif; ?>
																</select>
	                            </td> 
	                        </tr>
	                      <?php } ?> 
	                    </tbody>
	                </table>
	            </div>
	            <!-- /.table-responsive -->
	        </div>
	        <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
		</div>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['id_mp_mpl_govpr']=='3') {?>
	<?php $_smarty_tpl->tpl_vars["sous_section3"] = new Smarty_variable($_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['mp_mpl_pr_section'], null, 0);?>
	<?php $_smarty_tpl->tpl_vars["section_0"] = new Smarty_variable($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_govpr_review']['mp_mpl_govpr_libele_3']['section_0'], null, 0);?>
		<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <?php echo $_smarty_tpl->tpl_vars['sous_section3']->value[0];?>

	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                        
	                            <th>Courses</th>
	                            <th>Date</th>
	                            <th>Rate</th>
	                         
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['name'] = 'meeting';
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total']);
?>
	                        <tr>
	                            <td><input class="form-control col-lg-10" placeholder="Course" id="course[]" name="course[]" type="text" value="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp15=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['section_0']->value[$_tmp15]['course'];?>
"></td>
	                            <td class="col-lg-3"><input class="form-control col-lg-10" placeholder="yyyy-mm-dd" id="date[]" name="date[]" type="text"></td>
	                            

	                            <td class="col-lg-2">
	                            	<select name="rate_course[]" class="form-control">
																	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['name'] = 'rate';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total']);
?>
																		<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp16=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
<?php $_tmp17=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp16]['rate_course']==$_tmp17) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
</option>
																	<?php endfor; endif; ?>
																</select>
	                            </td> 
	                        </tr>
	                      <?php endfor; endif; ?> 
	                    </tbody>
	                </table>
	            </div>
	            <!-- /.table-responsive -->
	        </div>
	        <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
		</div>
	</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['id_mp_mpl_govpr']=='4') {?>
	<?php $_smarty_tpl->tpl_vars["sous_section4"] = new Smarty_variable($_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['mp_mpl_pr_section'], null, 0);?>
	<?php $_smarty_tpl->tpl_vars["strengthAndWeakness"] = new Smarty_variable($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_govpr_review']['mp_mpl_govpr_libele_4'], null, 0);?>
		<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <?php echo $_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['mp_mpl_govpr_libele'];?>

	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                        
	                            <th>Strengths</th>
	                            <th>Weaknesses</th>
	                           
	                         
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['name'] = 'meeting';
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total']);
?>
	                        <tr>
	                            <td><input class="form-control col-lg-10" placeholder="Strength" id="strength[]" name="strength[]" type="text" value="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp18=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['strengthAndWeakness']->value[$_tmp18]['strength'];?>
"></td>
	                            <td ><input class="form-control col-lg-10" placeholder="Weakness" id="weakness[]" name="weakness[]" type="text" value="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp19=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['strengthAndWeakness']->value[$_tmp19]['weakness'];?>
"></td>
	                        </tr>
	                      <?php endfor; endif; ?> 
	                    </tbody>
	                </table>
	            </div>
	            <!-- /.table-responsive -->
	        </div>
	        <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
		</div>
	</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['id_mp_mpl_govpr']=='5') {?>
	<?php $_smarty_tpl->tpl_vars["skillRate"] = new Smarty_variable($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_govpr_review']['mp_mpl_govpr_libele_5'], null, 0);?>
		<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <?php echo $_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['mp_mpl_govpr_libele'];?>

	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>	                        
	                            <th>Skills</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['name'] = 'meeting';
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['meeting']['total']);
?>
	                        <tr>
	                            <td><input class="form-control col-lg-10" placeholder="Skill" id="Skill[]" name="skill[]" type="text" value="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp20=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['skillRate']->value[$_tmp20]['skill'];?>
"></td>
	                        </tr>
	                      <?php endfor; endif; ?> 
	                    </tbody>
	                </table>
	            </div>
	            <!-- /.table-responsive -->
	        </div>
	        <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
		</div>
	</div>
	<?php }?>
<?php endfor; endif; ?>



<br>
<?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['id_mp_mpl_govreview_ass']!='') {?>
<button type="submit" id="button-update" name="button-update" value="update" class="btn btn-info">Update</button>
<?php } else { ?>
<button type="submit" id="button-insert" name="button-insert" value="Insert" class="btn btn-info">Insert</button>
<?php }?>

<script type="text/javascript">

/* <![CDATA[ */

	$(document).ready(function() {
  	
	  $('#editform').validate({
			rules: {			
				"committee[]": { required: true },
				"topic[]": { required: true },
				"strength[]": { required: true },
				"weaknesses[]": { required: true },
				profile_parliament: { required: true },
				id_provincial_legislature: { required: true },
				ancmember_branch: { required: true },
				ancmember_number: { required: true },
				ancmember_province: { required: true },
				ancmember_region: { required: true },
				first_name: { required: true },
				last_name: { required: true },
				email_address: { email:true },			
				id_administratortype: { required: true },
				password: { required: false, minlength: 6 },
				confirm_password: { required: false, minlength: 6, equalTo: '#password'}
			},

			messages: {			
				"committee[]": { required: 'Enter a Committee... at least one' },
				"topic[]": { required: 'Enter a topic... at least one' },
				"strength[]": { required: 'Please enter a your strength... at least one' },
				"weaknesses[]": { required: 'Please enter your weaknesses... at least one' },
				profile_parliament: { required: 'Please tick parliament member' },
				id_provincial_legislature: { required: 'please select your Provincial Legislature' },
				ancmember_number: { required: 'please enter your Membership Number' },
				ancmember_branch: { required: 'please enter your Branch name' },
				ancmember_province: { required: 'please select your member province' },
				ancmember_region: { required: 'please enter your Region' },
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

	});
/* ]]> */
</script><?php }} ?>
