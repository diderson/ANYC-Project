<?php /* Smarty version Smarty-3.1.19, created on 2015-04-22 21:02:05
         compiled from ".\templates\container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52215537f02d6f5053-87224730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2173ff90cc9aace60110be81e5159a416d29b7f' => 
    array (
      0 => '.\\templates\\container.tpl',
      1 => 1427786521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52215537f02d6f5053-87224730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contentTemplate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5537f02d9c3004_03401033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5537f02d9c3004_03401033')) {function content_5537f02d9c3004_03401033($_smarty_tpl) {?>
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
