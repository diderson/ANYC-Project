<!DOCTYPE html>
<html>

<head>
    {config_load file="client/admin.conf"}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Diderson BAKA">
    <meta name="Reply-to" content="diderson@diderson.com">
    <meta name="Identifier-URL" content="www.diderson.com">

    <title>
      {if isset($pageObject->templateType) && $pageObject->templateType eq 'list'}
  {if isset($pageObject->listHtmlPageTitle) && $pageObject->listHtmlPageTitle ne ''}{$pageObject->listHtmlPageTitle|escape:"html"} :: {/if}
{elseif isset($pageObject->templateType) && $pageObject->templateType eq 'edit'}
  {if isset($pageObject->id) && $pageObject->id ne ''}
    {if isset($pageObject->editHtmlPageTitle) && $pageObject->editHtmlPageTitle ne ''}{$pageObject->editHtmlPageTitle|escape:"html"} :: {/if}
  {else}
    {if isset($pageObject->insertHtmlPageTitle) && $pageObject->insertHtmlPageTitle ne ''}{$pageObject->insertHtmlPageTitle|escape:"html"} :: {/if}
  {/if}
{elseif isset($pageObject->templateType) && $pageObject->templateType eq 'view'}    
    {if isset($pageObject->viewHtmlPageTitle) && $pageObject->viewHtmlPageTitle ne ''}{$pageObject->viewHtmlPageTitle|escape:"html"} :: {/if}
{elseif isset($htmlpagetitle) && $htmlpagetitle ne ''}
  {$htmlpagetitle|escape:"html"} :: {/if}
{#clientName#|escape:"html"} - {#adminTitle#|escape:"html"}
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
                {if $smarty.session.BACKEND_ADMIN.ADMIN_LASTLOGINDATE}
                <li class="dropdown">
                  Last Login: <strong>{$smarty.session.BACKEND_ADMIN.ADMIN_LASTLOGINDATE|date_format:"%e %B %Y %H:%M:%S"|escape:"html"}</strong>
                </li>
                {/if}
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    {if $smarty.session.BACKEND_ADMIN.ADMIN_TYPE eq 'councillor'}Councillor: {else if $smarty.session.BACKEND_ADMIN.ADMIN_TYPE eq 'chiefwhip'}Chief Whip: {else if $smarty.session.BACKEND_ADMIN.ADMIN_TYPE eq 'provincialsec'}Regional Sec:{/if}
                      {$smarty.session.BACKEND_ADMIN.ADMIN_FIRSTNAME|escape:"html"} {$smarty.session.BACKEND_ADMIN.ADMIN_LASTNAME|escape:"html"} <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profile-edit"><i class="fa fa-user fa-fw"></i>Profile</a>
                        <li><a href="member-info-edit"><i class="fa fa-user fa-fw"></i>Personal Info</a>
                        <li><a href="index?action=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                        {*
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index?action=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                        *}
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                {include file="templates-admin/block/left-sidebar.tpl"}
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- #page-wrapper -->
          <!-- Build page from here: -->
            {if $pageObject->templateType eq 'list'}
              {include file="templates-admin/block/list-bodyContent.tpl"}
            {elseif $pageObject->templateType eq 'edit'}
              {include file="templates-admin/block/edit-bodyContent.tpl"}
            {elseif $pageObject->templateType eq 'view'}
              {include file="templates-admin/block/view-bodyContent.tpl"}
            {else}
                {* {include file="templates-admin/block/samplecontent.tpl"} *}
                {include file="$contentTemplate"}
            {/if}
           <!-- End Build page from here: -->
        <!-- /#page-wrapper -->

        <div id="footer">
            {include file="templates-admin/block/footer.tpl"}
        </div>

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    {if $pageObject->templateType eq 'list'}
    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTableExtension.js"></script>
    {elseif $pageObject->templateType eq 'edit'}
    {else if $sectionid eq 'dashboards'}
    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js/plugins/morris/morris.js"></script>

    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->


    <script src="js/demo/dashboard-demo.js"></script>
    {/if}

    <!-- bootbox plugins -->
    <script type="text/javascript" src="js/bootbox.min.js"></script>

    <!-- validate plugins -->
    <script type="text/javascript" src="js/jquery.validate/jquery.validate.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <script type="text/javascript">
    /* <![CDATA[ */
    $(document).ready(function() {
      {if $pageObject->templateType eq 'list'}
       // $('#dataTables-list-page').dataTable();
     {/if}  
    });
    /* ]]> */
    </script>

    <!-- Diderson Admin Scripts -->
    <script type="text/javascript" src="js/admin.diderson.js"></script>

</body>

</html>
