<?php /* Smarty version Smarty-3.1.19, created on 2015-05-04 16:07:36
         compiled from "./templates/content/forgot-password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66103809955477d288c8ea1-82743175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '193517ec2919642b4be8cd1fce15a559c594290e' => 
    array (
      0 => './templates/content/forgot-password.tpl',
      1 => 1427798913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66103809955477d288c8ea1-82743175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'registrationFormErrormsg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55477d288e0bf2_87771574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55477d288e0bf2_87771574')) {function content_55477d288e0bf2_87771574($_smarty_tpl) {?> <div class="container">
        <div class="row">
            <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Password Request</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                  <?php if (isset($_smarty_tpl->tpl_vars['registrationFormErrormsg']->value)) {?>
                  <div id="notification" style="display: block;" class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <strong>Oh snap!</strong> <?php echo $_smarty_tpl->tpl_vars['registrationFormErrormsg']->value;?>
</div>
                  <?php }?>
                    <div id="notificationEdit">
                                                </div>
                  <div class="panel panel-default">
                      
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-lg-6">
                                  <form role="form" id="editform" action="" method="post" enctype="multipart/form-data">
                                     
                                      <div class="form-group">
                                          <label>Email Address</label>
                                           <input class="form-control" placeholder="Email Address" id="email_address" name="email_address" type="text" value="" autofocus="">
                                           <span class="validate-error"></span>
                                      </div>
                                      <button type="submit" id="button-forgot" name="button-forgot" value="forgot" class="btn btn-success">Submit</button>
                                      

<script type="text/javascript">
/* <![CDATA[ */
    $(document).ready(function() {
    $('#editform').validate({

            rules: {
        email_address: { required: true, email: true }
            },
            messages: {     
        email_address: { required: 'Please enter your email address', email: 'Please enter a valid email address' }
            }
        });

    });


/* ]]> */
</script>

                                      <input type="hidden" id="editform-action" name="editform-action" value="">    
                                      <input type="hidden" id="viewmode" name="viewmode" value="">
                                      <input type="hidden" id="id_form" name="id_form" value="">
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
        </div>
    </div>
<?php }} ?>
