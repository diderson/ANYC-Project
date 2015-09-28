<?php /* Smarty version Smarty-3.1.19, created on 2015-04-14 14:35:47
         compiled from "./templates-admin/block/submit-buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:555987340552d09a3e566d9-98374345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8dc9bebd8af0158656b65977abb60b394577bca' => 
    array (
      0 => './templates-admin/block/submit-buttons.tpl',
      1 => 1410982082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '555987340552d09a3e566d9-98374345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageObject' => 0,
    'postfix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552d09a3eeb833_48019694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552d09a3eeb833_48019694')) {function content_552d09a3eeb833_48019694($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cleanurl')) include '/home/diderson/webdev/PHP5/diderson.dev/anc-research/website/components/smarty/plugins-diderson/function.cleanurl.php';
?><?php if ($_smarty_tpl->tpl_vars['pageObject']->value->id!='') {?>
    <?php if ($_smarty_tpl->tpl_vars['pageObject']->value->templateType=='view'&&$_smarty_tpl->tpl_vars['pageObject']->value->enableEdit) {?> 
    <button type="submit" id="button-edit<?php echo $_smarty_tpl->tpl_vars['postfix']->value;?>
" name="button-edit" value="edit" class="btn btn-info">Edit</button>               
    <?php } elseif ($_smarty_tpl->tpl_vars['pageObject']->value->enableEdit) {?>
    <button type="submit" id="button-update<?php echo $_smarty_tpl->tpl_vars['postfix']->value;?>
" name="button-update" value="update"  class="btn btn-info">Update</button>
        <?php if ($_smarty_tpl->tpl_vars['pageObject']->value->insertAsNewEnabled=='1') {?>
        <button type="submit" id="button-insertasnew<?php echo $_smarty_tpl->tpl_vars['postfix']->value;?>
" name="button-insertasnew" value="insertasnew"  class="btn btn-info">Insert As New</button>       
        <?php }?>
    <?php }?>       	
<?php } else { ?>
<button type="submit" id="button-insert<?php echo $_smarty_tpl->tpl_vars['postfix']->value;?>
" name="button-insert" value="Insert"  class="btn btn-info">Insert</button>
<?php }?>
 <a href="<?php echo smarty_function_cleanurl(array('url'=>$_smarty_tpl->tpl_vars['pageObject']->value->listFileName),$_smarty_tpl);?>
" id="button-back" class="btn btn-warning">Back to List</a><?php }} ?>
