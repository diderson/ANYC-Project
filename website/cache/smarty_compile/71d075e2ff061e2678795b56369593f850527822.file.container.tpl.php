<?php /* Smarty version Smarty-3.1.19, created on 2015-05-04 16:07:36
         compiled from "./templates/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22163473055477d28896d80-80699887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71d075e2ff061e2678795b56369593f850527822' => 
    array (
      0 => './templates/container.tpl',
      1 => 1427786521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22163473055477d28896d80-80699887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contentTemplate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55477d288c70f6_43386119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55477d288c70f6_43386119')) {function content_55477d288c70f6_43386119($_smarty_tpl) {?>
<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Backend</title>

    <!-- Core CSS - Include with every page -->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="/dadmin/css/sb-admin.css" rel="stylesheet">
    <script src="admin/js/jquery-1.10.2.js"></script>
    <style>
    input .form-control .error{
        border: 1px solid #F00;

    }
    .error {
        color: #F00;
    }
    .btn-success, .btn-warning {
  color: #fff;
  background-color: #000;
  border-color: #000;
}
.btn-warning :hover {
  color: #fff;
  background-color: #ffbf00;
  border-color: #ffbf00;
}
    </style>

</head>

<body style="background-color:#ffbf00;">

   <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['contentTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- Core Scripts - Include with every page -->
    
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <!-- validate plugins -->
    <script type="text/javascript" src="admin/js/jquery.validate/jquery.validate.js"></script>


    <!-- SB Admin Scripts - Include with every page -->
 

</body>

</html>
<?php }} ?>
