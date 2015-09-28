<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        {if $pageObject->id ne ''}
                            {if $pageObject->templateType eq 'view'}
                                {if $pageObject->viewHtmlPageTitle ne ''}{$pageObject->viewHtmlPageTitle|escape:"html"}{/if}
                            {else}
                                {if $pageObject->editHtmlPageTitle ne ''}{$pageObject->editHtmlPageTitle|escape:"html"}{/if}        
                            {/if}         
                        {else}
                            {if $pageObject->insertHtmlPageTitle ne ''}{$pageObject->insertHtmlPageTitle|escape:"html"}{/if}
                        {/if}
                    {* {if $pageObject->id ne '' && $pageObject->templateType eq 'edit'}&nbsp;&nbsp;ID = {$pageObject->id|escape:"html"}{/if}
                    {if $pageObject->id ne '' && $pageObject->templateType eq 'view'}&nbsp;&nbsp;ID = {$pageObject->id|escape:"html"}{/if}*}

                    {if $pageObject->id ne '' && $pageObject->templateType eq 'edit'}&nbsp;&nbsp;{/if}
                    {if $pageObject->id ne '' && $pageObject->templateType eq 'view'}&nbsp;&nbsp;{/if}
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div id="notificationEdit">
                            {if isset($smarty.get.pc) && $smarty.get.pc eq 'not'}
                            <div id="" class="alert alert-warning alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <strong>Oups! </strong>Please complete your details before you start your assessment.
                              </div>
                            {/if}
                            {if $processResult gt '0' || $smarty.get.action ne ''}
                                {if $formAction eq 'insert' || $smarty.get.action eq 'insert'}
                             
                                     <div id="" class="alert alert-success alert-dismissable">
                                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        <strong></strong>Insert successful.
                                    </div>
                                {elseif $formAction eq 'insertasnew' || $smarty.get.action eq 'insertasnew'}
                                    <div id="" class="alert alert-success alert-dismissable">
                                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        <strong></strong>Insert As New successful.
                                    </div>  
                                {elseif $formAction eq 'update' || $smarty.get.action eq 'update'}
                                    <div id="" class="alert alert-success alert-dismissable">
                                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        <strong></strong>Update successful.
                                    </div>
                                {/if}
                            {elseif $processResult eq '0'}
                                {if $processResultMessage neq ''}
                                <div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <strong>Oh snap!</strong>{$processResultMessage}.
                                </div>
                                {else}
                                <div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <strong>Oh snap!</strong>Operation failed.
                              </div>
                                {/if}    
                            {elseif $processResultMessage neq ''}    
                                 <div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <strong>Oh snap!</strong>{$processResultMessage}
                              </div>   
                            {/if}
                    </div>
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          {$pageObject->editPanelHeading}
                      </div>
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-lg-10">
                                  <form role="form" id="editform" action="{$formUrl}" method="post" enctype="multipart/form-data">
                                      {include file="$contentTemplate"}

                                      <input type="hidden" id="editform-action" name="editform-action" value="" />    
                                      <input type="hidden" id="viewmode" name="viewmode" value="{if $pageObject->templateType eq 'view'}readonly{else}{$smarty.post.viewmode}{/if}" />
                                      <input type="hidden" id="id_form" name="id_form" value="{$editData[0].id}" />
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
      $('#editform').attr( 'action', '{cleanurl url=$pageObject->editFileName|cat:"?id="|cat:$editData[0].id|cat:"&"|cat:$pageObject->getFormQueryString() htmlentities="false"}' );  
    });
    $('#button-back, #button-back_a, #button-back_b').click(function() {
      {if $pageObject->templateType eq 'view' && $smarty.get.action != 'update'}
      $('#editform').attr( 'action', '{cleanurl url=$pageObject->listFileName|cat:"?"|cat:$pageObject->getFormQueryString() htmlentities="false"}' );     
      {elseif $smarty.post.viewmode eq 'readonly'}
      $('#editform').attr( 'action', '{cleanurl url=$pageObject->editViewFileName|cat:"?id="|cat:$editData[0].id|cat:"&"|cat:$pageObject->getFormQueryString() htmlentities="false"}' );    
      {else}
      $('#editform').attr( 'action', '{cleanurl url=$pageObject->listFileName|cat:"?"|cat:$pageObject->getFormQueryString() htmlentities="false"}' ); 
      {/if}
    });
  });
/* ]]> */
</script>