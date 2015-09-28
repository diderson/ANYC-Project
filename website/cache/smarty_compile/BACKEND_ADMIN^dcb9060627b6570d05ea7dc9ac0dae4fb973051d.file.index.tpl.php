<?php /* Smarty version Smarty-3.1.19, created on 2015-04-15 20:08:58
         compiled from ".\templates-admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17332552ea93a2d2ef3-67922003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcb9060627b6570d05ea7dc9ac0dae4fb973051d' => 
    array (
      0 => '.\\templates-admin\\index.tpl',
      1 => 1428664530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17332552ea93a2d2ef3-67922003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'loginSuccess' => 0,
    'p' => 0,
    'referrer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552ea93a63db00_36830457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552ea93a63db00_36830457')) {function content_552ea93a63db00_36830457($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <?php  $_config = new Smarty_Internal_Config("client/admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($_smarty_tpl->getConfigVariable('adminTitle'), ENT_QUOTES, 'UTF-8', true);?>
</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <style>
    .btn-success {
        color: #fff;
  background-color: #000;
  border-color: #000;
    }
    </style>

</head>

<body style="background-color:#ffbf00;">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading" style="text-align:center; /* background-color:#dcdcde; */">
                        <?php if ($_smarty_tpl->tpl_vars['loginSuccess']->value=='false') {?>
                          <div class="alert alert-danger alert-dismissable"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>The username or password is incorrect.</div>
                        <?php }?>

                        <?php if (isset($_smarty_tpl->tpl_vars['p']->value)&&$_smarty_tpl->tpl_vars['p']->value=='s') {?>
                        <div class="alert alert-success alert-dismissable"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>You have been registered with success <br>
                            Please Check your email to confirm your account before login</div>
                        <?php }?>

                        <?php if (isset($_smarty_tpl->tpl_vars['p']->value)&&$_smarty_tpl->tpl_vars['p']->value=='f') {?>
                        <div class="alert alert-success alert-dismissable"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>Password have been sent<br>
                            Please use your credential to login</div>
                        <?php }?>

                        <?php if (isset($_smarty_tpl->tpl_vars['p']->value)&&$_smarty_tpl->tpl_vars['p']->value=='acts') {?>
                        <div class="alert alert-success alert-dismissable"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>Your account has been activated<br>
                            Please use your credential to login</div>
                        <?php }?>

                        <?php if (isset($_smarty_tpl->tpl_vars['p']->value)&&$_smarty_tpl->tpl_vars['p']->value=='actf') {?>
                        <div class="alert alert-danger alert-dismissable"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>Your account has not been activated<br>
                            if it's already activated Please use your credential to login</div>
                        <?php }?>

                        <?php if (isset($_smarty_tpl->tpl_vars['p']->value)&&$_smarty_tpl->tpl_vars['p']->value=='acty') {?>
                        <div class="alert alert-info alert-dismissable"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>Your account is already activated<br>
                        Please use your credential to login</div>
                        <?php }?>

                        <img src="<?php echo htmlspecialchars($_smarty_tpl->getConfigVariable('clientLogo'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->getConfigVariable('clientName'), ENT_QUOTES, 'UTF-8', true);?>
 Logo" style="width:100%;" />
                    </div>
                    <div class="panel-body">
                        <form role="form" action="index" id="loginForm" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" id="loginemail" name="loginemail" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="loginpassword" name="loginpassword" type="password" value="">
                                    <input type="hidden" id="submitloginform" name="submitloginform" value="true" />
                                    <input type="hidden" id="referrer" name="referrer" value="<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
" />
                                </div> 
                                <button class="btn btn-lg btn-success btn-block">Login</button>
                                <div class="checkbox">
                                    <label>
                                        <a href="/registration">Sign up</a> | <a href="/forgot-password">forgot password</a>
                                    </label>
                                </div> 
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

</body>

</html>
<?php }} ?>
