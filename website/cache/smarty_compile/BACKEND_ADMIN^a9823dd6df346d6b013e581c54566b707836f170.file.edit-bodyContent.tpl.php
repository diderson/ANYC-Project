<?php /* Smarty version Smarty-3.1.19, created on 2015-04-15 20:25:14
         compiled from ".\templates-admin\block\edit-bodyContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29261552ea94d1c8983-12952463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9823dd6df346d6b013e581c54566b707836f170' => 
    array (
      0 => '.\\templates-admin\\block\\edit-bodyContent.tpl',
      1 => 1429122307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29261552ea94d1c8983-12952463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552ea94d4c2e90_45677194',
  'variables' => 
  array (
    'pageObject' => 0,
    'processResult' => 0,
    'formAction' => 0,
    'processResultMessage' => 0,
    'formUrl' => 0,
    'editData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552ea94d4c2e90_45677194')) {function content_552ea94d4c2e90_45677194($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cleanurl')) include 'D:/webdev/PHP5/diderson.dev/anc-research/website/components/smarty/plugins-diderson\\function.cleanurl.php';
?><div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <?php if ($_smarty_tpl->tpl_vars['pageObject']->value->id!='') {?>
                            <?php if ($_smarty_tpl->tpl_vars['pageObject']->value->templateType=='view') {?>
                                <?php if ($_smarty_tpl->tpl_vars['pageObject']->value->viewHtmlPageTitle!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageObject']->value->viewHtmlPageTitle, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['pageObject']->value->editHtmlPageTitle!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageObject']->value->editHtmlPageTitle, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>        
                            <?php }?>         
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['pageObject']->value->insertHtmlPageTitle!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageObject']->value->insertHtmlPageTitle, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
                        <?php }?>
                    

                    <?php if ($_smarty_tpl->tpl_vars['pageObject']->value->id!=''&&$_smarty_tpl->tpl_vars['pageObject']->value->templateType=='edit') {?>&nbsp;&nbsp;<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['pageObject']->value->id!=''&&$_smarty_tpl->tpl_vars['pageObject']->value->templateType=='view') {?>&nbsp;&nbsp;<?php }?>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div id="notificationEdit">
                            <?php if (isset($_GET['pc'])&&$_GET['pc']=='not') {?>
                            <div id="" class="alert alert-warning alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <strong>Oups! </strong>Please complete your details before you start your assessment.
                              </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['processResult']->value>'0'||$_GET['action']!='') {?>
                                <?php if ($_smarty_tpl->tpl_vars['formAction']->value=='insert'||$_GET['action']=='insert') {?>
                             
                                     <div id="" class="alert alert-success alert-dismissable">
                                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        <strong></strong>Insert successful.
                                    </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['formAction']->value=='insertasnew'||$_GET['action']=='insertasnew') {?>
                                    <div id="" class="alert alert-success alert-dismissable">
                                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        <strong></strong>Insert As New successful.
                                    </div>  
                                <?php } elseif ($_smarty_tpl->tpl_vars['formAction']->value=='update'||$_GET['action']=='update') {?>
                                    <div id="" class="alert alert-success alert-dismissable">
                                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        <strong></strong>Update successful.
                                    </div>
                                <?php }?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['processResult']->value=='0') {?>
                                <?php if ($_smarty_tpl->tpl_vars['processResultMessage']->value!='') {?>
                                <div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <strong>Oh snap!</strong><?php echo $_smarty_tpl->tpl_vars['processResultMessage']->value;?>
.
                                </div>
                                <?php } else { ?>
                                <div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <strong>Oh snap!</strong>Operation failed.
                              </div>
                                <?php }?>    
                            <?php } elseif ($_smarty_tpl->tpl_vars['processResultMessage']->value!='') {?>    
                                 <div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <strong>Oh snap!</strong><?php echo $_smarty_tpl->tpl_vars['processResultMessage']->value;?>

                              </div>   
                            <?php }?>
                    </div>
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <?php echo $_smarty_tpl->tpl_vars['pageObject']->value->editPanelHeading;?>

                      </div>
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-lg-10">
                                  <form role="form" id="editform" action="<?php echo $_smarty_tpl->tpl_vars['formUrl']->value;?>
" method="post" enctype="multipart/form-data">
                                      <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['contentTemplate']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                                      <input type="hidden" id="editform-action" name="editform-action" value="" />    
                                      <input type="hidden" id="viewmode" name="viewmode" value="<?php if ($_smarty_tpl->tpl_vars['pageObject']->value->templateType=='view') {?>readonly<?php } else { ?><?php echo $_POST['viewmode'];?>
<?php }?>" />
                                      <input type="hidden" id="id_form" name="id_form" value="<?php echo $_smarty_tpl->tpl_vars['editData']->value[0]['id'];?>
" />
                                  </form>
                              </div>
                              <!-- /.col-lg-6 (nested) -->
                          </div>
                          <!-- /.row (nested) -->
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

<script type="text/javascript">
/* <![CDATA[ */
  $(document).ready(function() {
    // alert('diderson baka');
    $('#button-insert, #button-insert_a, #button-insert_b').click(function() {  $('#editform-action').val( 'insert' ); });
    $('#button-insertasnew, #button-insertasnew_a, #button-insertasnew_b').click(function() { $('#editform-action').val( 'insertasnew' ); });
    $('#button-update, #button-update_a, #button-update_b').click(function() {  $('#editform-action').val( 'update' ); });  
    $('#button-edit, #button-edit_a, #button-edit_b').click(function() { 
      $('#editform').attr( 'action', '<?php echo smarty_function_cleanurl(array('url'=>(((($_smarty_tpl->tpl_vars['pageObject']->value->editFileName).("?id=")).($_smarty_tpl->tpl_vars['editData']->value[0]['id'])).("&")).($_smarty_tpl->tpl_vars['pageObject']->value->getFormQueryString()),'htmlentities'=>"false"),$_smarty_tpl);?>
' );  
    });
    $('#button-back, #button-back_a, #button-back_b').click(function() {
      <?php if ($_smarty_tpl->tpl_vars['pageObject']->value->templateType=='view'&&$_GET['action']!='update') {?>
      $('#editform').attr( 'action', '<?php echo smarty_function_cleanurl(array('url'=>(($_smarty_tpl->tpl_vars['pageObject']->value->listFileName).("?")).($_smarty_tpl->tpl_vars['pageObject']->value->getFormQueryString()),'htmlentities'=>"false"),$_smarty_tpl);?>
' );     
      <?php } elseif ($_POST['viewmode']=='readonly') {?>
      $('#editform').attr( 'action', '<?php echo smarty_function_cleanurl(array('url'=>(((($_smarty_tpl->tpl_vars['pageObject']->value->editViewFileName).("?id=")).($_smarty_tpl->tpl_vars['editData']->value[0]['id'])).("&")).($_smarty_tpl->tpl_vars['pageObject']->value->getFormQueryString()),'htmlentities'=>"false"),$_smarty_tpl);?>
' );    
      <?php } else { ?>
      $('#editform').attr( 'action', '<?php echo smarty_function_cleanurl(array('url'=>(($_smarty_tpl->tpl_vars['pageObject']->value->listFileName).("?")).($_smarty_tpl->tpl_vars['pageObject']->value->getFormQueryString()),'htmlentities'=>"false"),$_smarty_tpl);?>
' ); 
      <?php }?>
    });
  });
/* ]]> */
</script><?php }} ?>
