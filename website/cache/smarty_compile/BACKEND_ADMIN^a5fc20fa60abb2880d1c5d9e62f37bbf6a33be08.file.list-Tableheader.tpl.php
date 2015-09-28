<?php /* Smarty version Smarty-3.1.19, created on 2015-04-22 13:16:59
         compiled from "./templates-admin/block/list-Tableheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20678957375537832ba9e764-62557036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5fc20fa60abb2880d1c5d9e62f37bbf6a33be08' => 
    array (
      0 => './templates-admin/block/list-Tableheader.tpl',
      1 => 1408521256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20678957375537832ba9e764-62557036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageObject' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5537832bad7f94_09880205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5537832bad7f94_09880205')) {function content_5537832bad7f94_09880205($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/diderson/webdev/PHP5/diderson.dev/anc-research/website/components/smarty/plugins/function.math.php';
if (!is_callable('smarty_modifier_replace')) include '/home/diderson/webdev/PHP5/diderson.dev/anc-research/website/components/smarty/plugins/modifier.replace.php';
?>
<?php if ($_smarty_tpl->tpl_vars['pageObject']->value->listColumns&&$_smarty_tpl->tpl_vars['list']->value) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['c'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pageObject']->value->listColumns) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total']);
?>
        <?php echo smarty_function_math(array('equation'=>"x + 1",'x'=>$_smarty_tpl->getVariable('smarty')->value['section']['c']['index'],'assign'=>"currentIndex"),$_smarty_tpl);?>
			
        <?php if ($_smarty_tpl->tpl_vars['pageObject']->value->listColumns[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]!='') {?>
        <th class="header"><?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['pageObject']->value->listColumns[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']],"|nosort",''), ENT_QUOTES, 'UTF-8', true);?>
</th>
        <?php } else { ?>
        <th>&nbsp;</th>
        <?php }?>    
    <?php endfor; endif; ?>
    <?php if ($_smarty_tpl->tpl_vars['pageObject']->value->enableDelete||$_smarty_tpl->tpl_vars['pageObject']->value->enableEdit||$_smarty_tpl->tpl_vars['pageObject']->value->enableView) {?>
    <th class="header actionheader">&nbsp;&nbsp;Actions</th>
    <?php }?>
<?php }?>
<?php }} ?>
