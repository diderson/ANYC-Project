<?php /* Smarty version Smarty-3.1.19, created on 2015-05-08 10:24:32
         compiled from "./templates-admin/block/left-sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1404499495527d65f414bf9-54757700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b57d254d55a10f97680d2eb7ca3af5a9fc712cfa' => 
    array (
      0 => './templates-admin/block/left-sidebar.tpl',
      1 => 1431073470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1404499495527d65f414bf9-54757700',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5527d65f4415c0_70272605',
  'variables' => 
  array (
    'sectionid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5527d65f4415c0_70272605')) {function content_5527d65f4415c0_70272605($_smarty_tpl) {?><div class="sidebar-collapse">
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
                <a href="member-info-edit"><i class="fa fa-edit fa-fw"></i> Edit personal info</a>
            </li>

            <li <?php if ($_smarty_tpl->tpl_vars['sectionid']->value=='rating-matrix') {?>class="active"<?php }?>>
                <a href="rating-matrix"><i class="fa fa-table fa-fw"></i>Ratings Matrix Explained</a>
            </li>
       
            <li <?php if ($_smarty_tpl->tpl_vars['sectionid']->value=='dashboard') {?>class="active"<?php }?>>
                <a href="mpmplgorvernancereview-edit"><i class="fa fa-edit fa-fw"></i> Councillor</a>
            </li>
    
            <li <?php if ($_smarty_tpl->tpl_vars['sectionid']->value=='dashboard') {?>class="active"<?php }?>>
                <a href="cwgovernancereview-list"><i class="fa fa-edit fa-fw"></i> Chief Whip</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['sectionid']->value=='dashboard') {?>class="active"<?php }?>>
                <a href="provsecreview-list"><i class="fa fa-edit fa-fw"></i> Regional Secretary</a>
            </li>
           
            <li <?php if ($_smarty_tpl->tpl_vars['sectionid']->value=='dashboardd') {?>class="active"<?php }?>>
                <a href="support"><i class="fa fa-wrench fa-fw"></i> Support </a>
            <li <?php if ($_smarty_tpl->tpl_vars['sectionid']->value=='dashboardd') {?>class="active"<?php }?>>
                <a href="/admin/index?action=logout"><i class="fa fa-tasks fa-fw"></i> Logout</a>
            </li>
            
        </ul>
        <!-- /#side-menu -->

    </div>

    <!-- /.sidebar-collapse --><?php }} ?>
