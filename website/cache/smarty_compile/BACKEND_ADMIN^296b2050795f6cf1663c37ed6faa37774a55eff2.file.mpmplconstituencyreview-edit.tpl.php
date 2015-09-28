<?php /* Smarty version Smarty-3.1.19, created on 2015-04-15 21:52:02
         compiled from ".\templates-admin\content\mpmplconstituencyreview-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26567552eb742909319-21978063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '296b2050795f6cf1663c37ed6faa37774a55eff2' => 
    array (
      0 => '.\\templates-admin\\content\\mpmplconstituencyreview-edit.tpl',
      1 => 1429127495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26567552eb742909319-21978063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552eb742b56149_58322461',
  'variables' => 
  array (
    'mpMplConstituencyData' => 0,
    'editData' => 0,
    'constreviewid' => 0,
    'constreview_id' => 0,
    'mp_mpl_constreview' => 0,
    'pageObject' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552eb742b56149_58322461')) {function content_552eb742b56149_58322461($_smarty_tpl) {?><h3>Constituency Review</h3>
<div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
          <div class="panel-heading">
              Use Rating Matrix 1 to 5 to Access Performance
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
              <div class="table-responsive">
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>KEY PERFORMANCE AREAS</th>
                              <th>RATE</th>
                           
                          </tr>
                      </thead>
                      <tbody>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['y'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['y']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['name'] = 'y';
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mpMplConstituencyData']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total']);
?>
                          <tr>
                              <td><input type="hidden" name="mp_mpl_constituency_size[]"><?php echo $_smarty_tpl->tpl_vars['mpMplConstituencyData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['id_mpl_constreview'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['mpMplConstituencyData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['mpl_constreview_libele'];?>
</td>
                              <td class="col-lg-2">
                                <?php $_smarty_tpl->tpl_vars["mp_mpl_constreview"] = new Smarty_variable($_smarty_tpl->tpl_vars['editData']->value[0]['mp_mpl_constreview'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars["constreviewid"] = new Smarty_variable($_smarty_tpl->tpl_vars['mpMplConstituencyData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['id_mpl_constreview'], null, 0);?>
                                <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'constreview_id', null); ob_start(); ?>constreview_<?php echo $_smarty_tpl->tpl_vars['constreviewid']->value;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                <select name="constreview_<?php echo $_smarty_tpl->tpl_vars['mpMplConstituencyData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['id_mpl_constreview'];?>
" class="form-control col-lg-2">
                                  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['name'] = 'rate';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total']);
?>
                                    <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['mp_mpl_constreview']->value[$_smarty_tpl->tpl_vars['constreview_id']->value]==$_tmp1) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
</option>
                                  <?php endfor; endif; ?>
                                </select>
                              </td> 
                          </tr>
                        <?php endfor; endif; ?> 
                      </tbody>
                  </table>
              </div>
              <!-- /.table-responsive -->
          </div>
          <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
</div>
<br>




<br>
<?php if ($_smarty_tpl->tpl_vars['editData']->value[0]['id_mp_mpl_constreview_ass']!='') {?>
<button type="submit" id="button-update" name="button-update" value="update" class="btn btn-info">Update</button>
<?php } else { ?>
<button type="submit" id="button-insert" name="button-insert" value="Insert" class="btn btn-info">Update</button>
<?php }?>

<script type="text/javascript">

/* <![CDATA[ */

  $(document).ready(function() {
    
    $('#editform').validate({
      rules: {      
        "committee[]": { required: true },
        "topic[]": { required: true },
        "strength[]": { required: true },
        "weaknesses[]": { required: true },
        profile_parliament: { required: true },
        id_provincial_legislature: { required: true },
        ancmember_branch: { required: true },
        ancmember_number: { required: true },
        ancmember_province: { required: true },
        ancmember_region: { required: true },
        first_name: { required: true },
        last_name: { required: true },
        email_address: { email:true },      
        id_administratortype: { required: true },
        password: { required: false, minlength: 6 },
        confirm_password: { required: false, minlength: 6, equalTo: '#password'}
      },

      messages: {     
        "committee[]": { required: 'Enter a Committee... at least one' },
        "topic[]": { required: 'Enter a topic... at least one' },
        "strength[]": { required: 'Please enter a your strength... at least one' },
        "weaknesses[]": { required: 'Please enter your weaknesses... at least one' },
        profile_parliament: { required: 'Please tick parliament member' },
        id_provincial_legislature: { required: 'please select your Provincial Legislature' },
        ancmember_number: { required: 'please enter your Membership Number' },
        ancmember_branch: { required: 'please enter your Branch name' },
        ancmember_province: { required: 'please select your member province' },
        ancmember_region: { required: 'please enter your Region' },
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
