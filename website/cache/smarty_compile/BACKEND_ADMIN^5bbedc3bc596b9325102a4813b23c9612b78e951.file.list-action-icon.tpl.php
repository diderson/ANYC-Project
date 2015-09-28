<?php /* Smarty version Smarty-3.1.19, created on 2015-04-22 13:16:59
         compiled from "./templates-admin/block/list-action-icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20937840175537832badc1f2-89962349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bbedc3bc596b9325102a4813b23c9612b78e951' => 
    array (
      0 => './templates-admin/block/list-action-icon.tpl',
      1 => 1408495586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20937840175537832badc1f2-89962349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageObject' => 0,
    'listData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5537832bafd122_87546901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5537832bafd122_87546901')) {function content_5537832bafd122_87546901($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cleanurl')) include '/home/diderson/webdev/PHP5/diderson.dev/anc-research/website/components/smarty/plugins-diderson/function.cleanurl.php';
?>
<div class="action_icons">
<?php if ($_smarty_tpl->tpl_vars['pageObject']->value->enableView) {?>
	<a href="<?php echo smarty_function_cleanurl(array('url'=>(((($_smarty_tpl->tpl_vars['pageObject']->value->editViewFileName).("?id=")).($_smarty_tpl->tpl_vars['listData']->value['id'])).("&")).($_smarty_tpl->tpl_vars['pageObject']->value->getFormQueryString())),$_smarty_tpl);?>
" title="View"><img src="design/ico-list.gif" class="ico" alt="View" /></a> 
<?php }?>	
<?php if ($_smarty_tpl->tpl_vars['pageObject']->value->enableEdit) {?>
	<a href="<?php echo smarty_function_cleanurl(array('url'=>(((($_smarty_tpl->tpl_vars['pageObject']->value->editFileName).("?id=")).($_smarty_tpl->tpl_vars['listData']->value['id'])).("&")).($_smarty_tpl->tpl_vars['pageObject']->value->getFormQueryString())),$_smarty_tpl);?>
" title="Edit"><img src="design/ico-edit.gif" class="ico" alt="Edit" /></a> 
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['pageObject']->value->enableDelete) {?>
    	<a href="javascript:void(0);" id="del<?php echo $_smarty_tpl->tpl_vars['listData']->value['id'];?>
" title="Delete" class="delete-button" data-identity="<?php echo $_smarty_tpl->tpl_vars['listData']->value['id'];?>
" data-entityname="<?php echo $_smarty_tpl->tpl_vars['pageObject']->value->entityName;?>
" data-entityalias="<?php echo $_smarty_tpl->tpl_vars['pageObject']->value->entityAliasName;?>
"><img src="design/ico-delete.gif" class="ico" alt="Delete" /></a>
<?php }?>
</div>
<?php }} ?>
