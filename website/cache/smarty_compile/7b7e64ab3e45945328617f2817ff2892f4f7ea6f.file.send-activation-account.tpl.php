<?php /* Smarty version Smarty-3.1.19, created on 2015-04-22 21:02:52
         compiled from ".\templates\mailer\send-activation-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156465537f05c2014d8-63893537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b7e64ab3e45945328617f2817ff2892f4f7ea6f' => 
    array (
      0 => '.\\templates\\mailer\\send-activation-account.tpl',
      1 => 1428662306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156465537f05c2014d8-63893537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'email_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5537f05c2bb684_44410397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5537f05c2bb684_44410397')) {function content_5537f05c2bb684_44410397($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>Request password</title>
</head>

<body>
<p><?php echo $_smarty_tpl->tpl_vars['email_data']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['email_data']->value['last_name'];?>
,<br><br>
	We confirm the opening of your ANC research account at ANC research System and we thank you. <br><br>
	Please click on the link below to confirm your email address and complete the registration process: <br><br>

<strong><a href="<?php echo $_smarty_tpl->tpl_vars['email_data']->value['activationlink'];?>
"><?php echo $_smarty_tpl->tpl_vars['email_data']->value['activationlink'];?>
</a><br><br></strong>
P.S: if the link doesn't open please copy and paste into your browser<br><br>
</p>
<p>=======================================================================================</p>

<p><strong>ANC Research Staff</strong></p>
</body>
</html>

<?php }} ?>
