<?php /* Smarty version Smarty-3.1.19, created on 2015-05-04 16:46:28
         compiled from "./templates-admin/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6751534265527d65e908753-75044684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f70b0c36bd8ae31825cf87a3912ffbf848ef0065' => 
    array (
      0 => './templates-admin/container.tpl',
      1 => 1430750690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6751534265527d65e908753-75044684',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5527d65f1a1878_65824598',
  'variables' => 
  array (
    'pageObject' => 0,
    'htmlpagetitle' => 0,
    'sectionid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5527d65f1a1878_65824598')) {function content_5527d65f1a1878_65824598($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/diderson/webdev/PHP5/diderson.dev/anc-research/website/components/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html>

<head>
    <?php  $_config = new Smarty_Internal_Config("client/admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Diderson BAKA">
    <meta name="Reply-to" content="diderson@diderson.com">
    <meta name="Identifier-URL" content="www.diderson.com">

    <title>
      <?php if (isset($_smarty_tpl->tpl_vars['pageObject']->value->templateType)&&$_smarty_tpl->tpl_vars['pageObject']->value->templateType=='list') {?>
  <?php if (isset($_smarty_tpl->tpl_vars['pageObject']->value->listHtmlPageTitle)&&$_smarty_tpl->tpl_vars['pageObject']->value->listHtmlPageTitle!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageObject']->value->listHtmlPageTitle, ENT_QUOTES, 'UTF-8', true);?>
 :: <?php }?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['pageObject']->value->templateType)&&$_smarty_tpl->tpl_vars['pageObject']->value->templateType=='edit') {?>
  <?php if (isset($_smarty_tpl->tpl_vars['pageObject']->value->id)&&$_smarty_tpl->tpl_vars['pageObject']->value->id!='') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['pageObject']->value->editHtmlPageTitle)&&$_smarty_tpl->tpl_vars['pageObject']->value->editHtmlPageTitle!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageObject']->value->editHtmlPageTitle, ENT_QUOTES, 'UTF-8', true);?>
 :: <?php }?>
  <?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars['pageObject']->value->insertHtmlPageTitle)&&$_smarty_tpl->tpl_vars['pageObject']->value->insertHtmlPageTitle!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageObject']->value->insertHtmlPageTitle, ENT_QUOTES, 'UTF-8', true);?>
 :: <?php }?>
  <?php }?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['pageObject']->value->templateType)&&$_smarty_tpl->tpl_vars['pageObject']->value->templateType=='view') {?>    
    <?php if (isset($_smarty_tpl->tpl_vars['pageObject']->value->viewHtmlPageTitle)&&$_smarty_tpl->tpl_vars['pageObject']->value->viewHtmlPageTitle!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageObject']->value->viewHtmlPageTitle, ENT_QUOTES, 'UTF-8', true);?>
 :: <?php }?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['htmlpagetitle']->value)&&$_smarty_tpl->tpl_vars['htmlpagetitle']->value!='') {?>
  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlpagetitle']->value, ENT_QUOTES, 'UTF-8', true);?>
 :: <?php }?>
<?php echo htmlspecialchars($_smarty_tpl->getConfigVariable('clientName'), ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo htmlspecialchars($_smarty_tpl->getConfigVariable('adminTitle'), ENT_QUOTES, 'UTF-8', true);?>

    </title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="css/plugins/timeline/timeline.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Diderson Admin CSS - Include with every page -->
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">ANC Research</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown"> <!-- first dropdown -->
                </li>
                <!-- /.dropdown -->
                <?php if ($_SESSION['BACKEND_ADMIN']['ADMIN_LASTLOGINDATE']) {?>
                <li class="dropdown">
                  Last Login: <strong><?php echo htmlspecialchars(smarty_modifier_date_format($_SESSION['BACKEND_ADMIN']['ADMIN_LASTLOGINDATE'],"%e %B %Y %H:%M:%S"), ENT_QUOTES, 'UTF-8', true);?>
</strong>
                </li>
                <?php }?>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php if ($_SESSION['BACKEND_ADMIN']['ADMIN_TYPE']=='councillor') {?>Councillor: <?php } elseif ($_SESSION['BACKEND_ADMIN']['ADMIN_TYPE']=='chiefwhip') {?>Chief Whip: <?php } elseif ($_SESSION['BACKEND_ADMIN']['ADMIN_TYPE']=='provincialsec') {?>Regional Sec:<?php }?>
                      <?php echo htmlspecialchars($_SESSION['BACKEND_ADMIN']['ADMIN_FIRSTNAME'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_SESSION['BACKEND_ADMIN']['ADMIN_LASTNAME'], ENT_QUOTES, 'UTF-8', true);?>
 <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profile-edit"><i class="fa fa-user fa-fw"></i>Profile</a>
                        <li><a href="member-info-edit"><i class="fa fa-user fa-fw"></i>Personal Info</a>
                        <li><a href="index?action=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                        
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <?php echo $_smarty_tpl->getSubTemplate ("templates-admin/block/left-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- #page-wrapper -->
          <!-- Build page from here: -->
            <?php if ($_smarty_tpl->tpl_vars['pageObject']->value->templateType=='list') {?>
              <?php echo $_smarty_tpl->getSubTemplate ("templates-admin/block/list-bodyContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['pageObject']->value->templateType=='edit') {?>
              <?php echo $_smarty_tpl->getSubTemplate ("templates-admin/block/edit-bodyContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['pageObject']->value->templateType=='view') {?>
              <?php echo $_smarty_tpl->getSubTemplate ("templates-admin/block/view-bodyContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php } else { ?>
                
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['contentTemplate']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>
           <!-- End Build page from here: -->
        <!-- /#page-wrapper -->

        <div id="footer">
            <?php echo $_smarty_tpl->getSubTemplate ("templates-admin/block/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <?php if ($_smarty_tpl->tpl_vars['pageObject']->value->templateType=='list') {?>
    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTableExtension.js"></script>
    <?php } elseif ($_smarty_tpl->tpl_vars['pageObject']->value->templateType=='edit') {?>
    <?php } elseif ($_smarty_tpl->tpl_vars['sectionid']->value=='dashboards') {?>
    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js/plugins/morris/morris.js"></script>

    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->


    <script src="js/demo/dashboard-demo.js"></script>
    <?php }?>

    <!-- bootbox plugins -->
    <script type="text/javascript" src="js/bootbox.min.js"></script>

    <!-- validate plugins -->
    <script type="text/javascript" src="js/jquery.validate/jquery.validate.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <script type="text/javascript">
    /* <![CDATA[ */
    $(document).ready(function() {
      <?php if ($_smarty_tpl->tpl_vars['pageObject']->value->templateType=='list') {?>
       // $('#dataTables-list-page').dataTable();
     <?php }?>  
    });
    /* ]]> */
    </script>

    <!-- Diderson Admin Scripts -->
    <script type="text/javascript" src="js/admin.diderson.js"></script>

</body>

</html>
<?php }} ?>
