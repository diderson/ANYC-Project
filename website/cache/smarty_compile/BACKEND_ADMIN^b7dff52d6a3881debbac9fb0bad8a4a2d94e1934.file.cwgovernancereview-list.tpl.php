<?php /* Smarty version Smarty-3.1.19, created on 2015-05-08 15:11:18
         compiled from "./templates-admin/content/cwgovernancereview-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17289087485537832ba489c8-87082376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7dff52d6a3881debbac9fb0bad8a4a2d94e1934' => 
    array (
      0 => './templates-admin/content/cwgovernancereview-list.tpl',
      1 => 1431090675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17289087485537832ba489c8-87082376',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5537832ba9c735_74151422',
  'variables' => 
  array (
    'list' => 0,
    'pageObject' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5537832ba9c735_74151422')) {function content_5537832ba9c735_74151422($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/diderson/webdev/PHP5/diderson.dev/anc-research/website/components/smarty/plugins/function.cycle.php';
?><div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Choose Councillor to complete the assessment
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-list-page">
                                    <thead>
                                        <tr>
                                          <?php echo $_smarty_tpl->getSubTemplate ("templates-admin/block/list-Tableheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                       <tr id="tr<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
                                          <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['councillor_name'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['municipality_name'];?>
</td>
                                            <td <?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['mp_mpl_status']=='completed') {?>class="success"<?php } elseif ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['mp_mpl_status']=='incomplete') {?>class="warning"<?php } elseif ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['mp_mpl_status']=='pending') {?>class="info"<?php }?>><strong><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['mp_mpl_status'];?>
</strong></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['mp_mpl_score'];?>
%</td>
                                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['cdate'], ENT_QUOTES, 'UTF-8', true);?>
</td>
            																<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['mdate'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                            <?php if ($_smarty_tpl->tpl_vars['pageObject']->value->enableDelete||$_smarty_tpl->tpl_vars['pageObject']->value->enableEdit||$_smarty_tpl->tpl_vars['pageObject']->value->enableView) {?>
                                              <td>
                                                <?php echo $_smarty_tpl->getSubTemplate ("templates-admin/block/list-action-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('showedit'=>"true",'listData'=>$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]), 0);?>

                                              </td>     
                                            <?php }?>
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
                <!-- /.col-lg-12 -->
            </div>

  <script type="text/javascript">
    /* <![CDATA[ */
    $(document).ready(function() {
    var defaultSortColumn = [[4,'desc']];
    var datatableObj = new DataTableJavascriptClass( defaultSortColumn ); //here where we bind datatable.  
    });
    /* ]]> */
    </script><?php }} ?>
