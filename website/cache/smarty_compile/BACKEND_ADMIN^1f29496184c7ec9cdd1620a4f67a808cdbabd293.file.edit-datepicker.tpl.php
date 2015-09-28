<?php /* Smarty version Smarty-3.1.19, created on 2015-04-15 12:55:17
         compiled from "./templates-admin/block/edit-datepicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:948923751552e3f42120209-43700299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f29496184c7ec9cdd1620a4f67a808cdbabd293' => 
    array (
      0 => './templates-admin/block/edit-datepicker.tpl',
      1 => 1429095315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '948923751552e3f42120209-43700299',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552e3f4213bd97_95896726',
  'variables' => 
  array (
    'pageObject' => 0,
    'elementId' => 0,
    'dateformat' => 0,
    'entry_date' => 0,
    'setDate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552e3f4213bd97_95896726')) {function content_552e3f4213bd97_95896726($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['pageObject']->value->enabledatePicker();?>

<a href="javascript://" id="<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
_clear" >Clear</a>

<script type="text/javascript">
/* <![CDATA[ */
$(document).ready(function() {	
	Date.firstDayOfWeek = 1;
	
	$('#<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
_clear').click(function(){$('#<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
').val('');});
	<?php if ($_smarty_tpl->tpl_vars['dateformat']->value!='') {?>Date.format = '<?php echo $_smarty_tpl->tpl_vars['dateformat']->value;?>
';<?php } else { ?>Date.format = 'yyyy-mm-dd';<?php }?>	
	<?php if ($_smarty_tpl->tpl_vars['entry_date']->value==''&&$_smarty_tpl->tpl_vars['setDate']->value&&$_POST['start_date']==''&&$_POST['end_date']=='') {?>$('#<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
').datePicker().val(new Date().asString()).trigger('change')<?php }?>;	
	//$('#<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
').datePicker( {startDate:'1950-01-01'} );	
	$('#<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
').change( function() { $('#<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
').blur(); } );
	
});
/* ]]> */
</script>
		<?php }} ?>
