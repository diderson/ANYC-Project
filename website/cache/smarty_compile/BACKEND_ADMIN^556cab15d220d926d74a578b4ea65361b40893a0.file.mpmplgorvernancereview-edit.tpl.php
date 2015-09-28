<?php /* Smarty version Smarty-3.1.19, created on 2015-05-08 11:35:13
         compiled from "./templates-admin/content/mpmplgorvernancereview-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195665965552cce11265e30-23398745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '556cab15d220d926d74a578b4ea65361b40893a0' => 
    array (
      0 => './templates-admin/content/mpmplgorvernancereview-edit.tpl',
      1 => 1431077711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195665965552cce11265e30-23398745',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552cce114a4083_07467517',
  'variables' => 
  array (
    'ratingMatrixData' => 0,
    'rating_def' => 0,
    'ratingMatrixDef' => 0,
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
    'mpMplConstituencyData' => 0,
    'constreviewid' => 0,
    'constreview_id' => 0,
    'mp_mpl_constreview' => 0,
    'pageObject' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552cce114a4083_07467517')) {function content_552cce114a4083_07467517($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['ratingMatrixData']->value) {?>
<h3>Rating Matrix</h3>
<div class="row">
	<div class="col-lg-12">
	  <div class="panel panel-default">
	      <div class="panel-heading">
	          Rate yourself  on a scale of 1 ( lowest) to 5 (highest) using the rating matrix below
	          <br> <span class="error">Please Read the Matrix criteria carefully</span>
	      </div>
	      <!-- /.panel-heading -->
	      <div class="panel-body">
	          <div class="table-responsive">
	              <table class="table">
	                  <thead>
	                      <tr>
	                          <th></th>
	                          <th></th>
	                          <th></th>
	                      </tr>
	                  </thead>
	                  <tbody>
	                  	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ratingMatrixData']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
	                      <tr <?php if ($_smarty_tpl->tpl_vars['ratingMatrixData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_rating_matrix']=='1') {?>
	                      class="danger"
	                      <?php } elseif ($_smarty_tpl->tpl_vars['ratingMatrixData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_rating_matrix']=='2') {?>
	                      class="warning"
	                      <?php } elseif ($_smarty_tpl->tpl_vars['ratingMatrixData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_rating_matrix']=='3') {?>
	                      style="background-color:#FFFF00;"
	                      <?php } elseif ($_smarty_tpl->tpl_vars['ratingMatrixData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_rating_matrix']=='4') {?>
	                      class="info"
	                      <?php } elseif ($_smarty_tpl->tpl_vars['ratingMatrixData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_rating_matrix']=='5') {?>
	                      class="success"
	                      <?php }?>>
	                          <td><?php echo $_smarty_tpl->tpl_vars['ratingMatrixData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_rating_matrix'];?>
</td>
	                          <td><?php echo $_smarty_tpl->tpl_vars['ratingMatrixData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['rating_matrix_libele'];?>
</td>
	                          <td><?php $_smarty_tpl->tpl_vars["rating_def"] = new Smarty_variable($_smarty_tpl->tpl_vars['ratingMatrixData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['rating_def'], null, 0);?>
	                          	<ul>
	                          	<?php  $_smarty_tpl->tpl_vars['ratingMatrixDef'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ratingMatrixDef']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rating_def']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ratingMatrixDef']->key => $_smarty_tpl->tpl_vars['ratingMatrixDef']->value) {
$_smarty_tpl->tpl_vars['ratingMatrixDef']->_loop = true;
?>
	                          	<li><?php echo $_smarty_tpl->tpl_vars['ratingMatrixDef']->value;?>
</li>
	                          	<?php } ?>
	                          </ul>
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

<h3>A. Governance Review</h3>
<h4>Part 1</h4>
<h5>ASSESSMENT: TO BE COMPLETED BY THE COUNCILLOR (Compulsory)<h5>
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
	<h4>Part 2</h4>
	<h5>ASSESSMENT: TO BE COMPLETED BY THE COUNCILLOR (Compulsory)<h5>
	<h4>Field 1: <?php echo $_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['mp_mpl_govpr_libele'];?>
</h4>
	<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            1.1 <?php echo $_smarty_tpl->tpl_vars['sous_section']->value[0];?>

	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                            <th>Committee</th>
	                            
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
	                            <td>
													  <select name="committee[]" id="committee[]" class="form-control">
															<option value="">Please select</option>
															<option value="Safety and Security" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp2]['committee']=='Safety and Security') {?> selected="selected"<?php }?>>Safety and Security</option>
															<option value="Tourism" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp3]['committee']=='Tourism') {?> selected="selected"<?php }?>>Tourism</option>
															<option value="LED" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp4]['committee']=='LED') {?> selected="selected"<?php }?>>LED</option>
															<option value="Housing" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp5=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp5]['committee']=='Housing') {?> selected="selected"<?php }?>>Housing</option>
															<option value="Health" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp6=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp6]['committee']=='Health') {?> selected="selected"<?php }?>>Health</option>
															<option value="Water and Sanitation" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp7=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp7]['committee']=='Water and Sanitation') {?> selected="selected"<?php }?>>Water and Sanitation</option>
															<option value="Electricity" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp8=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp8]['committee']=='Electricity') {?> selected="selected"<?php }?>>Electricity</option>
															<option value="Transport" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp9=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp9]['committee']=='Transport') {?> selected="selected"<?php }?>>Transport</option>
															<option value="Mayoral" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp10=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp10]['committee']=='Mayoral') {?> selected="selected"<?php }?>>Mayoral</option>
														</select>
	                            	
	                           

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
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
<?php $_tmp12=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp11]['rate_commitee']==$_tmp12) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
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
	            1.2 <?php echo $_smarty_tpl->tpl_vars['sous_section']->value[1];?>

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
<?php $_tmp13=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['section_1']->value[$_tmp13]['topic'];?>
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
<?php $_tmp14=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
<?php $_tmp15=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_1']->value[$_tmp14]['rate_topic']==$_tmp15) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
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
	                            <td>1.3 <?php echo $_smarty_tpl->tpl_vars['sous_section']->value[2];?>
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
<?php $_tmp16=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_govpr_review']['mp_mpl_govpr_libele_1']['section_2']==$_tmp16) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
</option>
																	<?php endfor; endif; ?>
																</select>
	                            </td> 
	                        </tr>
	                        <tr>
	                            <td>1.4 <?php echo $_smarty_tpl->tpl_vars['sous_section']->value[3];?>
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
<?php $_tmp17=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_govpr_review']['mp_mpl_govpr_libele_1']['section_3']==$_tmp17) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
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
	            1.5 <?php echo $_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['mp_mpl_govpr_libele'];?>

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
<?php $_tmp18=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['competencySection']->value[$_smarty_tpl->tpl_vars['section_id']->value]==$_tmp18) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
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
	<h4>Field 2: Self Development as a Public Representative</h4>
		<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            2.1 <?php echo $_smarty_tpl->tpl_vars['sous_section3']->value[0];?>

	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                        
	                            <th>Courses</th>
	                            <th>Year</th>
	                            
	                         
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
	                            <td>
			                          <select name="course[]" id="course[]" class="form-control">
																	<option value="">Please select</option>
																	<option value="Municipal Finance" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp19=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp19]['course']=='Municipal Finance') {?> selected="selected"<?php }?>>Municipal Finance</option>
																	<option value="Legislation" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp20=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp20]['course']=='Legislation') {?> selected="selected"<?php }?>>Legislation</option>
																	<option value="Oversight" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp21=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp21]['course']=='Oversight') {?> selected="selected"<?php }?>>Oversight</option>
																	<option value="Public Participation" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp22=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp22]['course']=='Public Participation') {?> selected="selected"<?php }?>>Public Participation</option>
																	<option value="Public Speaking" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp23=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp23]['course']=='Public Speaking') {?> selected="selected"<?php }?>>Public Speaking</option>
																	<option value="Project Management" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp24=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp24]['course']=='Project Management') {?> selected="selected"<?php }?>>Project Management</option>
																	<option value="Drafting and Report Writing" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp25=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp25]['course']=='Drafting and Report Writing') {?> selected="selected"<?php }?>>Drafting and Report Writing</option>
																</select>
	                            	</td>
	                            <td class="col-lg-3">
	                            	<select name="date[]" id="date[]" class="form-control">
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
" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp26=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['year']['index'];?>
<?php $_tmp27=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['section_0']->value[$_tmp26]['date']==$_tmp27) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['year']['index'];?>
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
	            2.2 <?php echo $_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['mp_mpl_govpr_libele'];?>

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
	                            <td>
	                            	<select name="strength[]" id="strength[]" class="form-control">
																	<option value="">Please select</option>
																	<option value="Public Speaking" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp28=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['strengthAndWeakness']->value[$_tmp28]['strength']=='Public Speaking') {?> selected="selected"<?php }?>>Public Speaking</option>
																	<option value="Understanding Municipal" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp29=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['strengthAndWeakness']->value[$_tmp29]['strength']=='Understanding Municipal') {?> selected="selected"<?php }?>>Understanding Municipal</option>
																	<option value="Comment engagement" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp30=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['strengthAndWeakness']->value[$_tmp30]['strength']=='Comment engagement') {?> selected="selected"<?php }?>>Comment engagement</option>
																	<option value="Draft Reporting" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp31=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['strengthAndWeakness']->value[$_tmp31]['strength']=='Draft Reporting') {?> selected="selected"<?php }?>>Draft Reporting</option>
																	<option value="Computer Literacy" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp32=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['strengthAndWeakness']->value[$_tmp32]['strength']=='Computer Literacy') {?> selected="selected"<?php }?>>Computer Literacy</option>
																</select>
	                            	</td>
	                            <td >
	                            	<select name="weakness[]" id="weakness[]" class="form-control">
																	<option value="">Please select</option>
																	<option value="Lack of Computer Literacy" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp33=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['strengthAndWeakness']->value[$_tmp33]['weakness']=='Lack of Computer Literacy') {?> selected="selected"<?php }?>>Lack of Computer Literacy</option>
																	<option value="Lack of constituency" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp34=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['strengthAndWeakness']->value[$_tmp34]['weakness']=='Lack of constituency') {?> selected="selected"<?php }?>>Lack of constituency</option>
																	<option value="Failure to participate in ANC Branch works" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp35=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['strengthAndWeakness']->value[$_tmp35]['weakness']=='Failure to participate in ANC Branch works') {?> selected="selected"<?php }?>>Failure to participate in ANC Branch works</option>
																	<option value="Lack of self-development" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp36=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['strengthAndWeakness']->value[$_tmp36]['weakness']=='Lack of self-development') {?> selected="selected"<?php }?>>Lack of self-development</option>
																	<option value="Failure to" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['meeting']['index'];?>
<?php $_tmp37=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['strengthAndWeakness']->value[$_tmp37]['weakness']=='Failure to') {?> selected="selected"<?php }?>>Failure to</option>
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

	<?php if ($_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['id_mp_mpl_govpr']=='5') {?>
	<?php $_smarty_tpl->tpl_vars["skillRate"] = new Smarty_variable($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_govpr_review']['mp_mpl_govpr_libele_5'], null, 0);?>
		<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            2.3 <?php echo $_smarty_tpl->tpl_vars['mpMplGovernancePRData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['mp_mpl_govpr_libele'];?>

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
<?php $_tmp38=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['skillRate']->value[$_tmp38]['skill'];?>
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

<h3>B. Constituency Review</h3>
<h5>ASSESSMENT: TO BE COMPLETED BY THE COUNCILLOR (Compulsory)<h5>
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
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mpMplConstituencyData']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                              <td><input type="hidden" name="mp_mpl_constituency_size[]"><?php echo $_smarty_tpl->tpl_vars['mpMplConstituencyData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['id_mpl_constreview'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['mpMplConstituencyData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['mpl_constreview_libele'];?>
</td>
                              <td class="col-lg-2">
                                <?php $_smarty_tpl->tpl_vars["mp_mpl_constreview"] = new Smarty_variable($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_constreview'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars["constreviewid"] = new Smarty_variable($_smarty_tpl->tpl_vars['mpMplConstituencyData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['id_mpl_constreview'], null, 0);?>
                                <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'constreview_id', null); ob_start(); ?>constreview_<?php echo $_smarty_tpl->tpl_vars['constreviewid']->value;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                <select name="constreview_<?php echo $_smarty_tpl->tpl_vars['mpMplConstituencyData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['id_mpl_constreview'];?>
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
<?php $_tmp39=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['mp_mpl_constreview']->value[$_smarty_tpl->tpl_vars['constreview_id']->value]==$_tmp39) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
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

<div class="row">
    <div class="col-lg-4">
			<select name="mp_mpl_status" class="form-control col-lg-2">
				<option value="">Select Status</option>
				<option value="incomplete" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_status']=='incomplete') {?>selected="selected"<?php }?>>incomplete</option>
				<option value="pending" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_status']=='pending') {?>selected="selected"<?php }?>>pending</option>
				<option value="completed" <?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_status']=='completed') {?>selected="selected"<?php }?>>complete</option>
			</select>
    </div>
</div>


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
