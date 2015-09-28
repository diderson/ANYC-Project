<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Choose Councillor to complete the assessment
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
                                          <td>{$list[a].id|escape:"html"}</td>
                                            <td>{$list[a].councillor_name}</td>
                                            <td>{$list[a].municipality_name}</td>
                                            <td {if $list[a].mp_mpl_status eq 'completed'}class="success"{else if $list[a].mp_mpl_status eq 'incomplete'}class="warning"{else if $list[a].mp_mpl_status eq 'pending'}class="info"{/if}><strong>{$list[a].mp_mpl_status}</strong></td>
                                            <td>{$list[a].mp_mpl_score}%</td>
                                            <td>{$list[a].cdate|escape:"html"}</td>
            																<td>{$list[a].mdate|escape:"html"}</td>
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