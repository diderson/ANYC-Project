<?php /* Smarty version Smarty-3.1.19, created on 2015-04-13 12:05:56
         compiled from "./templates-admin/content/profile-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1382084395552b93665feab2-20458209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd46b5087afd140df0e17faa62ffb0ce4219d69c4' => 
    array (
      0 => './templates-admin/content/profile-edit.tpl',
      1 => 1428919554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1382084395552b93665feab2-20458209',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552b9366675261_86000559',
  'variables' => 
  array (
    'editData' => 0,
    'validation_error_messages' => 0,
    'pageObject' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b9366675261_86000559')) {function content_552b9366675261_86000559($_smarty_tpl) {?><div class="form-group">
    <label>First Name</label>
     <input class="form-control" placeholder="First Name" id="first_name" name="first_name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['editData']->value[0]['first_name'], ENT_QUOTES, 'UTF-8', true);?>
" autofocus>
     <span class="validate-error"><?php echo $_smarty_tpl->tpl_vars['validation_error_messages']->value['first_name'];?>
</span>
</div>

<div class="form-group">
    <label>Last Name</label>
     <input class="form-control" placeholder="Last Name" id="last_name" name="last_name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['editData']->value[0]['last_name'], ENT_QUOTES, 'UTF-8', true);?>
">
     <span class="validate-error"><?php echo $_smarty_tpl->tpl_vars['validation_error_messages']->value['last_name'];?>
</span>
</div>

<div class="form-group">
    <label>Email Address</label>
     <input class="form-control" placeholder="Email Address" id="email_address" name="email_address" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['editData']->value[0]['email_address'], ENT_QUOTES, 'UTF-8', true);?>
">
     <span class="validate-error"><?php echo $_smarty_tpl->tpl_vars['validation_error_messages']->value['email_address'];?>
</span>
</div>


<div class="form-group">
    <label>Password</label>
     <input class="form-control" id="password" name="password" type="password">
     <span class="validate-error"><?php echo $_smarty_tpl->tpl_vars['validation_error_messages']->value['password'];?>
</span>
</div>

<div class="form-group">
    <label>Confirm Password</label>
     <input class="form-control" id="confirm_password" name="confirm_password" type="password">
     <span class="validate-error"><?php echo $_smarty_tpl->tpl_vars['validation_error_messages']->value['confirm_password'];?>
</span>
</div>

<button type="submit" id="button-update" name="button-update" value="update" class="btn btn-info">Update</button>

<script type="text/javascript">
/* <![CDATA[ */
	$(document).ready(function() {
  	
	  $('#editform').validate({
			rules: {			
				first_name: { required: true },
				last_name: { required: true },
				email_address: { email:true },			
				id_administratortype: { required: true },
				password: { required: false, minlength: 6 },
				confirm_password: { required: false, minlength: 6, equalTo: '#password'}
			},

			messages: {			
				first_name: { required: 'Please enter your First Name' },
				last_name: { required: 'Please enter your Last Name' },
				email_address: { required: 'Please enter your Email Address' },					
				id_administratortype: { required: 'Please select Adminstrator Type' },
				password: { required: 'Please enter your Password' },
				confirm_password: { required: 'Please confirm your Password', equalTo: 'Your password and confirmation password must match' }
			}
		});

		$("#id_administratortype").change( function() {
			
			if( $("#id_administratortype").val() == 1 ) $("input[name='id_administratoraccess[]']").each(function() { this.checked = true; });  
			else $("input[name='id_administratoraccess[]']").each(function() { this.checked = false; });
		});

		<?php if ($_smarty_tpl->tpl_vars['pageObject']->value->id=='') {?>
			$("#password").rules("add", { required:true,minlength:6 });
			$("#confirm_password").rules("add", { required:true,minlength:6,equalTo: "#password" });
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['id_administratortype']=='1') {?>
			$("input[name='id_administratoraccess[]']").each(function() { this.checked = true; });
		<?php }?>

		
		$('#button-insertasnew, #button-insertasnew_a, #button-insertasnew_b').click(function() {  
			$("#password").rules("add", { required:true,minlength:6 });
			$("#confirm_password").rules("add", { required:true,minlength:6,equalTo: "#password" });
		});	
		
		$('#button-update, #button-update_a, #button-update_b').click(function() {
			if( $("#password").val() == '' && $("#confirm_password").val() == '' ) {
				$("#password").rules("remove");
				$("#confirm_password").rules("remove");		
			}			
		});

	});
/* ]]> */
</script><?php }} ?>
