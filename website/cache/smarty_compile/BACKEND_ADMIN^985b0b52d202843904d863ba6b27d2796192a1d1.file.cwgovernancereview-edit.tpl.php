<?php /* Smarty version Smarty-3.1.19, created on 2015-04-16 01:01:52
         compiled from ".\templates-admin\content\cwgovernancereview-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7926552ed982e359a2-88379136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '985b0b52d202843904d863ba6b27d2796192a1d1' => 
    array (
      0 => '.\\templates-admin\\content\\cwgovernancereview-edit.tpl',
      1 => 1429138897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7926552ed982e359a2-88379136',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552ed98318f5b7_01228794',
  'variables' => 
  array (
    'cwGovernanceData' => 0,
    'editData' => 0,
    'constreviewid' => 0,
    'preview_id' => 0,
    'cw_preview' => 0,
    'OverPerformanceData' => 0,
    'ovpefratingid' => 0,
    'ovpefrating_id' => 0,
    'cw_ovpefrating' => 0,
    'pageObject' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552ed98318f5b7_01228794')) {function content_552ed98318f5b7_01228794($_smarty_tpl) {?><div class="row">
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
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cwGovernanceData']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                              <td><input type="hidden" name="cw_preview_size[]"><?php echo $_smarty_tpl->tpl_vars['cwGovernanceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['id_chiefwhip_preview'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['cwGovernanceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['chiefwhip_preview_libele'];?>
</td>
                              <td class="col-lg-2">
                                <?php $_smarty_tpl->tpl_vars["cw_preview"] = new Smarty_variable($_smarty_tpl->tpl_vars['editData']->value[0]['cw_preview'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars["constreviewid"] = new Smarty_variable($_smarty_tpl->tpl_vars['cwGovernanceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['id_chiefwhip_preview'], null, 0);?>
                                <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'preview_id', null); ob_start(); ?>preview_<?php echo $_smarty_tpl->tpl_vars['constreviewid']->value;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                <select name="preview_<?php echo $_smarty_tpl->tpl_vars['cwGovernanceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['id_chiefwhip_preview'];?>
" class="form-control col-lg-2">
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
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['cw_preview']->value[$_smarty_tpl->tpl_vars['preview_id']->value]==$_tmp1) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
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
<h4>Overall Performance Rating</h4>
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
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['y'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['y']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['name'] = 'y';
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['OverPerformanceData']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                              <th><?php echo $_smarty_tpl->tpl_vars['OverPerformanceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['ovpefrating_libele'];?>
</th>
                            <?php endfor; endif; ?>
                          </tr>
                      </thead>
                      <tbody>
                        
                          <tr>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['k'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['k']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['name'] = 'k';
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['OverPerformanceData']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total']);
?>
                              <td class="">
                                <?php $_smarty_tpl->tpl_vars["cw_ovpefrating"] = new Smarty_variable($_smarty_tpl->tpl_vars['editData']->value[0]['cw_ovpefrating'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars["ovpefratingid"] = new Smarty_variable($_smarty_tpl->tpl_vars['OverPerformanceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['k']['index']]['id_ovpefrating'], null, 0);?>
                                <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'ovpefrating_id', null); ob_start(); ?>ovpefrating_<?php echo $_smarty_tpl->tpl_vars['ovpefratingid']->value;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                <input type="hidden" name="ovpefrating_size[]">
                                <select name="ovpefrating_<?php echo $_smarty_tpl->tpl_vars['OverPerformanceData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['k']['index']]['id_ovpefrating'];?>
" class="form-control col-lg-2">
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
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['cw_ovpefrating']->value[$_smarty_tpl->tpl_vars['ovpefrating_id']->value]==$_tmp2) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
</option>
                                  <?php endfor; endif; ?>
                                </select>
                              </td> 
                            <?php endfor; endif; ?>
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
<br>




<br>
<?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['id_cw_preview_ass']!='') {?>
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
