<div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                  <a href="/admin"><img src="{#clientLogo#|escape:"html"}" alt="{#clientName#|escape:"html"} Logo" width="100%" /></a>
                </div>
                <!-- /input-group -->
            </li>
            <li {if $sectionid eq 'dashboard'}class="active"{/if}>
                <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Home page</a>
            </li>

            <li {if $sectionid eq 'dashboard'}class="active"{/if}>
                <a href="member-info-edit"><i class="fa fa-edit fa-fw"></i> Edit personal info</a>
            </li>

            <li {if $sectionid eq 'rating-matrix'}class="active"{/if}>
                <a href="rating-matrix"><i class="fa fa-table fa-fw"></i>Ratings Matrix Explained</a>
            </li>
       
            <li {if $sectionid eq 'dashboard'}class="active"{/if}>
                <a href="mpmplgorvernancereview-edit"><i class="fa fa-edit fa-fw"></i> Councillor</a>
            </li>
    
            <li {if $sectionid eq 'dashboard'}class="active"{/if}>
                <a href="cwgovernancereview-list"><i class="fa fa-edit fa-fw"></i> Chief Whip</a>
            </li>
            <li {if $sectionid eq 'dashboard'}class="active"{/if}>
                <a href="provsecreview-list"><i class="fa fa-edit fa-fw"></i> Regional Secretary</a>
            </li>
           
            <li {if $sectionid eq 'dashboardd'}class="active"{/if}>
                <a href="support"><i class="fa fa-wrench fa-fw"></i> Support </a>
            <li {if $sectionid eq 'dashboardd'}class="active"{/if}>
                <a href="/admin/index?action=logout"><i class="fa fa-tasks fa-fw"></i> Logout</a>
            </li>
            {*

            {if $adminUserObj->accessControl("administrator", "administrator-access")}
              <li {if $sectionid eq 'manage-administrators'}class="active"{/if}>
                  <a href="#"><i class="fa fa-tasks fa-fw"></i> Manage Administrators<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                    {if $adminUserObj->accessControl("administrator")}
                      <li {if $pageid eq 'administrator-list'}class="active-menu"{/if}><a href="administrator-list"><strong>Administrators:</strong> List</a></li>
                      <li {if $pageid eq 'administrator-edit'}class="active-menu"{/if}><a href="administrator-edit"><strong>Administrators:</strong> {if $pageid eq 'administrator-edit' && $pageObject->id neq ''}Update{else}Insert{/if}</a></li>            
                    {/if}
                    {if $adminUserObj->accessControl("administrator-access")}
                      <li {if $pageid eq 'administrator-access-list'}class="active-menu"{/if}><a href="administrator-access-list"><strong>Administrator Access:</strong> List</a></li>
                      <li {if $pageid eq 'administrator-access-edit'}class="active-menu"{/if}><a href="administrator-access-edit"><strong>Administrator Access:</strong> {if $pageid eq 'administrator-access-edit' && $pageObject->id neq ''}Update{else}Insert{/if}</a></li>
                    {/if}
                  </ul>
                  <!-- /.nav-second-level -->
              </li>
            {/if}

            {if $adminUserObj->accessControl("filemanager")}
            <li>
                <a href="/filemanager/dialog.php?type=0" id="iframe-btn-file-manager" type="button"> <i class="fa fa-files-o fa-fw"></i> Filemanager</a>
            </li>
            {/if} *}
        </ul>
        <!-- /#side-menu -->

    </div>

    <!-- /.sidebar-collapse -->