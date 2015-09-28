<h3>Constituency Review</h3>
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
                        {section name=y loop=$mpMplConstituencyData}
                          <tr>
                              <td><input type="hidden" name="mp_mpl_constituency_size[]">{$mpMplConstituencyData[y].id_mpl_constreview}</td>
                              <td>{$mpMplConstituencyData[y].mpl_constreview_libele}</td>
                              <td class="col-lg-2">
                                {assign var="mp_mpl_constreview" value=$editData[0].mp_mpl_constreview}
                                {assign var="constreviewid" value=$mpMplConstituencyData[y].id_mpl_constreview}
                                {capture assign=constreview_id}constreview_{$constreviewid}{/capture}
                                <select name="constreview_{$mpMplConstituencyData[y].id_mpl_constreview}" class="form-control col-lg-2">
                                  {section name=rate start=1 loop=6}
                                    <option value="{$smarty.section.rate.index}" {if $mp_mpl_constreview.$constreview_id eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
                                  {/section}
                                </select>
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
<br>



{*{include file="templates-admin/block/submit-buttons.tpl"}*}
<br>
{if $editData[0].id_mp_mpl_constreview_ass neq ''}
<button type="submit" id="button-update" name="button-update" value="update" class="btn btn-info">Update</button>
{else}
<button type="submit" id="button-insert" name="button-insert" value="Insert" class="btn btn-info">Insert</button>
{/if}

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

    {if $pageObject->id eq ''}
      $("#password").rules("add", { required:true,minlength:6 });
      $("#confirm_password").rules("add", { required:true,minlength:6,equalTo: "#password" });
    {/if}

    {if $editData[0].id_administratortype eq '1'}
      $("input[name='id_administratoraccess[]']").each(function() { this.checked = true; });
    {/if}

    
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
</script>