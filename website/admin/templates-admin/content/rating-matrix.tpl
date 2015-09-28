{if $ratingMatrixData}
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Rate yourself  on a scale of 1 ( lowest) to 5 (highest) using the rating matrix below
            <br> <span class="error">Please Read the Matrix criteria carefully</span>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      {section name=a loop=$ratingMatrixData}
                        <tr {if $ratingMatrixData[a].id_rating_matrix eq '1'}
                        class="danger"
                        {else if $ratingMatrixData[a].id_rating_matrix eq '2'}
                        class="warning"
                        {else if $ratingMatrixData[a].id_rating_matrix eq '3'}
                        style="background-color:#FFFF00;"
                        {else if $ratingMatrixData[a].id_rating_matrix eq '4'}
                        class="info"
                        {else if $ratingMatrixData[a].id_rating_matrix eq '5'}
                        class="success"
                        {/if}>
                            <td>{$ratingMatrixData[a].id_rating_matrix}</td>
                            <td>{$ratingMatrixData[a].rating_matrix_libele}</td>
                            <td>{assign var="rating_def" value=$ratingMatrixData[a].rating_def}
                              <ul>
                              {foreach from=$rating_def item=ratingMatrixDef}
                              <li>{$ratingMatrixDef}</li>
                              {/foreach}
                            </ul>
                            </td>
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
</div>
{/if}
{*
{if $ratingMatrixData}
  <div class="panel panel-default">
      <div class="panel-heading">
          Rate yourself  on a scale of 1 ( lowest) to 5 (highest) using the rating matrix below
  <br> <span class="error">Please Read the Matrix criteria carefully</span>
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
          <div class="table-responsive">
              <table class="table">
                 
                  <tbody>
   
                  {section name=a loop=$ratingMatrixData}
                    <tr
                    {if $ratingMatrixData[a].id_rating_matrix eq '1'}
                        class="danger"
                        {else if $ratingMatrixData[a].id_rating_matrix eq '2'}
                        class="warning"
                        {else if $ratingMatrixData[a].id_rating_matrix eq '3'}
                        style="background-color:#FFFF00;"
                        {else if $ratingMatrixData[a].id_rating_matrix eq '4'}
                        class="info"
                        {else if $ratingMatrixData[a].id_rating_matrix eq '5'}
                        class="success"
                        {/if}
                    >
                      <td {if $ratingMatrixData[a].id_rating_matrix eq '1'}
                        rowspan="5" {assign var="ratingNum" value="5"} 
                        {else if $ratingMatrixData[a].id_rating_matrix eq '2'}
                        rowspan="4" {assign var="ratingNum" value="4"}
                        {else if $ratingMatrixData[a].id_rating_matrix eq '3'}
                        rowspan="3" {assign var="ratingNum" value="3"}
                        {else if $ratingMatrixData[a].id_rating_matrix eq '4'}
                        rowspan="6" {assign var="ratingNum" value="6"}
                        {else if $ratingMatrixData[a].id_rating_matrix eq '5'}
                        rowspan="6" {assign var="ratingNum" value="6"}
                        {/if} valign="middle"><h4><br><br>{$ratingMatrixData[a].rating_matrix_libele}<h4></td>
                      <td {if $ratingMatrixData[a].id_rating_matrix eq '1'}
                        rowspan="5"
                        {else if $ratingMatrixData[a].id_rating_matrix eq '2'}
                        rowspan="4"
                        {else if $ratingMatrixData[a].id_rating_matrix eq '3'}
                        rowspan="3"
                        {else if $ratingMatrixData[a].id_rating_matrix eq '4'}
                        rowspan="6"
                        {else if $ratingMatrixData[a].id_rating_matrix eq '5'}
                        rowspan="6"
                        {/if} valign="middle"><br><br><h3>{$ratingMatrixData[a].id_rating_matrix}</h3></td>
                      {assign var="rating_def" value=$ratingMatrixData[a].rating_def}
                      <td>{$rating_def.0}</td>
                    </tr>
                    {section name=rate start=1 loop=$ratingNum}
                    {capture assign=index}{$smarty.section.rate.index}{/capture}
                      <tr {if $ratingMatrixData[a].id_rating_matrix eq '1'}
                        class="danger"
                        {else if $ratingMatrixData[a].id_rating_matrix eq '2'}
                        class="warning"
                        {else if $ratingMatrixData[a].id_rating_matrix eq '3'}
                        style="background-color:#FFFF00;"
                        {else if $ratingMatrixData[a].id_rating_matrix eq '4'}
                        class="info"
                        {else if $ratingMatrixData[a].id_rating_matrix eq '5'}
                        class="success"
                        {/if}>
                        <td>{$rating_def.$index}</td>
                      </tr>
                    {/section}
                   
                  {/section} 
                  </tbody>
              </table>
          </div>
          <!-- /.table-responsive -->
      </div>
      <!-- /.panel-body -->
  </div>
{/if}
*}