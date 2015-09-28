<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
              {if $pageObject->enableEdit}
                <a href="{$pageObject->editFileName}" class="btn btn-primary btn-xs" type="button">{$pageObject->insertButtonName}</a>
              {/if}
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-list-page">
                        <thead>
                            <tr>
                              {include file="templates-admin/block/list-Tableheader.tpl"}
                            </tr>
                        </thead>
                        <tbody>
                          {section name=a loop=$list}
												    <tr id="tr{$list[a].id|escape:"html"}" class="{cycle values="odd,even"}">						
															<td class="t-center">{$list[a].id|escape:"html"}</td>
															<td>{$list[a].access_name}</td>	
															<td>{$list[a].access_alias|escape:"html"}</td> 						
															<td class="center" id="tdstatus{$list[a].id|escape:"html"}">
																{include file="templates-admin/block/list-entrystatus.tpl" fieldName="access_status" currentValue=$list[a].access_status listData=$list[a]}
															</td>
															<td class="t-nowrap">{$list[a].cdate|escape:"html"}</td>
															{if $pageObject->enableDelete || $pageObject->enableEdit || $pageObject->enableView}
																<td>
																	{include file="templates-admin/block/list-action-icon.tpl" showedit="true" listData=$list[a]}
																</td>			
													     {/if}			
														</tr>
                          {/section}
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

  <script type="text/javascript">
    /* <![CDATA[ */
    $(document).ready(function() {
    var defaultSortColumn = [[1,'asc'], [2,'desc']];
    var datatableObj = new DataTableJavascriptClass( defaultSortColumn ); //here where we bind datatable.  
    });
    /* ]]> */
    </script>