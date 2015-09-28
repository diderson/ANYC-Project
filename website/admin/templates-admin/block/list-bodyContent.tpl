<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                      {$pageObject->listPageTitle|escape:"html"}
{if $pageObject->id ne '' && $pageObject->templateType eq 'edit'}&nbsp;&nbsp;ID = {$pageObject->id|escape:"html"}{/if}
&nbsp;{$pageTitlePostfix}
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
              {include file="$contentTemplate"}
            <!--end insert content /.row -->
        </div>

        <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
 