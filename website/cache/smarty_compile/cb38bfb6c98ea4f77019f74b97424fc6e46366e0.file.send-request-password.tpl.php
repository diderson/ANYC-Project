<?php /* Smarty version Smarty-3.1.19, created on 2015-04-22 22:13:36
         compiled from ".\templates\mailer\send-request-password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31135553800f00fb062-34514163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb38bfb6c98ea4f77019f74b97424fc6e46366e0' => 
    array (
      0 => '.\\templates\\mailer\\send-request-password.tpl',
      1 => 1428662890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31135553800f00fb062-34514163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'email_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_553800f01bc3e6_59167859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553800f01bc3e6_59167859')) {function content_553800f01bc3e6_59167859($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>Request password</title>
</head>

<body>
<p><?php echo $_smarty_tpl->tpl_vars['email_data']->value[0]['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['email_data']->value[0]['last_name'];?>
,<br><br>This is a request concerning your password at ANC research System <br><br>

<strong>Password:</strong> <?php echo $_smarty_tpl->tpl_vars['email_data']->value[0]['password'];?>
<br><br>

<strong>Link to login :</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['email_data']->value[0]['loginlink'];?>
"><?php echo $_smarty_tpl->tpl_vars['email_data']->value[0]['loginlink'];?>
</a><br><br>
</p>
<p>=======================================================================================</p>

<p><strong>ANC Research Staff</strong></p>
</body>
</html>

<?php }} ?>
