<?php /* Smarty version Smarty-3.1.19, created on 2015-04-22 21:13:58
         compiled from ".\templates-admin\block\left-sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29187552ea93ee9d1f3-25933468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd96f8698bdd77df66b500444b9abad3f0e08f4c6' => 
    array (
      0 => '.\\templates-admin\\block\\left-sidebar.tpl',
      1 => 1429708333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29187552ea93ee9d1f3-25933468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552ea93ef17613_39469278',
  'variables' => 
  array (
    'sectionid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552ea93ef17613_39469278')) {function content_552ea93ef17613_39469278($_smarty_tpl) {?><div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                  <a href="/admin"><img src="<?php echo htmlspecialchars($_smarty_tpl->getConfigVariable('clientLogo'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->getConfigVariable('clientName'), ENT_QUOTES, 'UTF-8', true);?>
 Logo" width="100%" /></a>
                </div>
                <!-- /input-group -->
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['sectionid']->value=='dashboard') {?>class="active"<?php }?>>
                <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Home page</a>
            </li>
            
            <li <?php if ($_smarty_tpl->tpl_vars['sectionid']->value=='dashboard') {?>class="active"<?php }?>>
                <a href="mpmplgorvernancereview-edit"><i class="fa fa-dashboard fa-fw"></i> Councillor</a>
            </li>
            
            <li <?php if ($_smarty_tpl->tpl_vars['sectionid']->value=='dashboard') {?>class="active"<?php }?>>
                <a href="cwgovernancereview-list"><i class="fa fa-dashboard fa-fw"></i> Chief Whip</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['sectionid']->value=='dashboard') {?>class="active"<?php }?>>
                <a href="#"><i class="fa fa-dashboard fa-fw"></i> Provincial Secretary</a>
            </li>
            
           
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['sectionid']->value=='dashboardd') {?>class="active"<?php }?>>
                <a href="/admin/index?action=logout"><i class="fa fa-tasks fa-fw"></i> Logout</a>
            </li>
            
        </ul>
        <!-- /#side-menu -->

    </div>

    <!-- /.sidebar-collapse --><?php }} ?>
