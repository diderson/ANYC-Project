<?php /* Smarty version Smarty-3.1.19, created on 2015-04-22 13:16:59
         compiled from "./templates-admin/block/list-bodyContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16089239855537832b9b3046-33969005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e828a1964f6b7948adf56a959ef4a478339993c2' => 
    array (
      0 => './templates-admin/block/list-bodyContent.tpl',
      1 => 1410987770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16089239855537832b9b3046-33969005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageObject' => 0,
    'pageTitlePostfix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5537832ba46763_75100395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5537832ba46763_75100395')) {function content_5537832ba46763_75100395($_smarty_tpl) {?><div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageObject']->value->listPageTitle, ENT_QUOTES, 'UTF-8', true);?>

<?php if ($_smarty_tpl->tpl_vars['pageObject']->value->id!=''&&$_smarty_tpl->tpl_vars['pageObject']->value->templateType=='edit') {?>&nbsp;&nbsp;ID = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageObject']->value->id, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pageTitlePostfix']->value;?>

                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                  <div id="notification">
                  </div>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
              <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['contentTemplate']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!--end insert content /.row -->
        </div>

        <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
 <?php }} ?>
