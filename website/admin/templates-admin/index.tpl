<!DOCTYPE html>
<html>

<head>
    {config_load file="client/admin.conf"}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{#adminTitle#|escape:"html"}</title>

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
                        {if $loginSuccess eq 'false'}
                          <div class="alert alert-danger alert-dismissable"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>The username or password is incorrect.</div>
                        {/if}

                        {if isset($p) && $p eq 's'}
                        <div class="alert alert-success alert-dismissable"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>You have been registered with success <br>
                            Please Check your email to confirm your account before login</div>
                        {/if}

                        {if isset($p) && $p eq 'f'}
                        <div class="alert alert-success alert-dismissable"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>Password have been sent<br>
                            Please use your credential to login</div>
                        {/if}

                        {if isset($p) && $p eq 'acts'}
                        <div class="alert alert-success alert-dismissable"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>Your account has been activated<br>
                            Please use your credential to login</div>
                        {/if}

                        {if isset($p) && $p eq 'actf'}
                        <div class="alert alert-danger alert-dismissable"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>Your account has not been activated<br>
                            if it's already activated Please use your credential to login</div>
                        {/if}

                        {if isset($p) && $p eq 'acty'}
                        <div class="alert alert-info alert-dismissable"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>Your account is already activated<br>
                        Please use your credential to login</div>
                        {/if}

                        <img src="{#clientLogo#|escape:"html"}" alt="{#clientName#|escape:"html"} Logo" style="width:100%;" />
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
                                    <input type="hidden" id="referrer" name="referrer" value="{$referrer}" />
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
