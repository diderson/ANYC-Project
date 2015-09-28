
{if $ratingMatrixData}
<h3>Rating Matrix</h3>
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
<h3>Governance Review</h3>
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
	                    	{section name=y loop=$mpMplGovernanceData}
	                        <tr>
	                            <td><input type="hidden" name="mp_mpl_govreview_size[]">{$mpMplGovernanceData[y].id_mp_mpl_govreview}</td>
	                            <td>{$mpMplGovernanceData[y].mp_mpl_govreview_libele}</td>
	                            <td>
	                            	{assign var="mp_mpl_govreview" value=$editCouncillorAssData[0].mp_mpl_govreview}
	                            	{assign var="govreviewid" value=$mpMplGovernanceData[y].id_mp_mpl_govreview}
	                            	{capture assign=govreview_id}govreview_{$govreviewid}{/capture}
	                            	<select name="govreview_{$mpMplGovernanceData[y].id_mp_mpl_govreview}" class="form-control" disabled="disabled">
																	{section name=rate start=1 loop=6}
																		<option value="{$smarty.section.rate.index}" {if $mp_mpl_govreview.$govreview_id eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
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
{section name=x loop=$mpMplGovernancePRData}

	{if $mpMplGovernancePRData[x].id_mp_mpl_govpr eq '1'}
	{assign var="sous_section" value=$mpMplGovernancePRData[x].mp_mpl_pr_section}
	<h4>{$mpMplGovernancePRData[x].mp_mpl_govpr_libele}</h4>
	<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            {$sous_section.0}
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                            <th>Committee</th>
	                            <th>No. of meetings</th>
	                            <th>No. of attendance</th>
	                            <th>Rate</th>	                         
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	{assign var="section_0" value=$editCouncillorAssData[0].mp_mpl_govpr_review.mp_mpl_govpr_libele_1.section_0}
	                    	{section name=meeting start=0 loop=5}
	                 
	                        <tr>
	                            <td><input disabled="disabled" class="form-control col-lg-8" placeholder="Committee" id="committee[]" name="committee[]" type="text" value="{$section_0[{$smarty.section.meeting.index}].committee}"></td>
	                            <td>
	                            	<select name="meetings[]" class="form-control" disabled="disabled">
																	{section name=rate start=1 loop=101}
																		<option value="{$smarty.section.rate.index}" {if $section_0[{$smarty.section.meeting.index}].meetings eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
																	{/section}
																</select>
	                            </td> 

	                            <td>
	                            	<select name="attendance[]" class="form-control" disabled="disabled">
																	{section name=rate start=1 loop=101}
																		<option value="{$smarty.section.rate.index}" {if $section_0[{$smarty.section.meeting.index}].attendance eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
																	{/section}
																</select>
	                            </td> 

	                            <td>
	                            	<select name="rate_commitee[]" class="form-control" disabled="disabled">
																	{section name=rate start=1 loop=6}
																		<option value="{$smarty.section.rate.index}" {if $section_0[{$smarty.section.meeting.index}].rate_commitee eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
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

	<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            {$sous_section.1}
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                        
	                            <th>Topics</th>
	                            <th>Rate</th>
	                         
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	{assign var="section_1" value=$editCouncillorAssData[0].mp_mpl_govpr_review.mp_mpl_govpr_libele_1.section_1}
	                    	{section name=topic start=0 loop=5}
	                        <tr>
	                            <td><input disabled="disabled" class="form-control col-lg-10" placeholder="Topic" id="topic[]" name="topic[]" type="text"  value="{$section_1[{$smarty.section.topic.index}].topic}"></td>
	                            

	                            <td class="col-lg-2">
	                            	<select disabled="disabled" name="rate_topic[]" class="form-control">
																	{section name=rate start=1 loop=6}
																		<option value="{$smarty.section.rate.index}" {if $section_1[{$smarty.section.topic.index}].rate_topic eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
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

	<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	       
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                        
	                            <th>Caucus Work</th>
	                            <th>Rate</th>
	                         
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <td>{$sous_section.2}</td>
	                            

	                            <td>
	                            	<select name="caucus_1" class="form-control" disabled="disabled">
																	{section name=rate start=1 loop=6}
																		<option value="{$smarty.section.rate.index}" {if $editCouncillorAssData[0].mp_mpl_govpr_review.mp_mpl_govpr_libele_1.section_2 eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
																	{/section}
																</select>
	                            </td> 
	                        </tr>
	                        <tr>
	                            <td>{$sous_section.3}</td>
	                            

	                            <td> 
	                            	<select name="caucus_2" class="form-control" disabled="disabled">
																	{section name=rate start=1 loop=6}
																		<option value="{$smarty.section.rate.index}" {if $editCouncillorAssData[0].mp_mpl_govpr_review.mp_mpl_govpr_libele_1.section_3 eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
																	{/section}
																</select>
	                            </td> 
	                        </tr>
	                    
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

	{if $mpMplGovernancePRData[x].id_mp_mpl_govpr eq '2'}
	{assign var="sous_section2" value=$mpMplGovernancePRData[x].mp_mpl_pr_section}
	
		<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            {$mpMplGovernancePRData[x].mp_mpl_govpr_libele}
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                        
	                            <th>Competency</th>
	                            <th>Rate</th>
	                         
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	{assign var="competencySection" value=$editCouncillorAssData[0].mp_mpl_govpr_review.mp_mpl_govpr_libele_2}
	                    	{foreach from=$sous_section2 item=competency key=k}
	                    	{capture assign=section_id}section_{$k}{/capture}
	                        <tr>
	                            <td>{$competency}</td>
	                            

	                            <td class="col-lg-2">
	                            	<select name="competency[]" class="form-control col-lg-2" disabled="disabled">
																	{section name=rate start=1 loop=6}
																		<option value="{$smarty.section.rate.index}" {if $competencySection.$section_id eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
																	{/section}
																</select>
	                            </td> 
	                        </tr>
	                      {/foreach} 
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
	{if $mpMplGovernancePRData[x].id_mp_mpl_govpr eq '3'}
	{assign var="sous_section3" value=$mpMplGovernancePRData[x].mp_mpl_pr_section}
	{assign var="section_0" value=$editCouncillorAssData[0].mp_mpl_govpr_review.mp_mpl_govpr_libele_3.section_0}
		<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            {$sous_section3.0}
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                        
	                            <th>Courses</th>
	                            <th>Date</th>
	                            <th>Rate</th>
	                         
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	{section name=meeting start=0 loop=5}
	                        <tr>
	                            <td><input class="form-control col-lg-10" placeholder="Course" id="course[]" name="course[]" type="text" value="{$section_0[{$smarty.section.meeting.index}].course}" disabled="disabled"></td>
	                            <td class="col-lg-3"><input class="form-control col-lg-10" placeholder="yyyy-mm-dd" id="date[]" name="date[]" type="text" disabled="disabled"></td>
	                            

	                            <td class="col-lg-2">
	                            	<select name="rate_course[]" class="form-control" disabled="disabled">
																	{section name=rate start=1 loop=6}
																		<option value="{$smarty.section.rate.index}" {if $section_0[{$smarty.section.meeting.index}].rate_course eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
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
	{/if}

	{if $mpMplGovernancePRData[x].id_mp_mpl_govpr eq '4'}
	{assign var="sous_section4" value=$mpMplGovernancePRData[x].mp_mpl_pr_section}
	{assign var="strengthAndWeakness" value=$editCouncillorAssData[0].mp_mpl_govpr_review.mp_mpl_govpr_libele_4}
		<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            {$mpMplGovernancePRData[x].mp_mpl_govpr_libele}
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                        
	                            <th>Strengths</th>
	                            <th>Weaknesses</th>
	                           
	                         
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	{section name=meeting start=0 loop=5}
	                        <tr>
	                            <td><input class="form-control col-lg-10" placeholder="Strength" id="strength[]" name="strength[]" type="text" value="{$strengthAndWeakness[{$smarty.section.meeting.index}].strength}" disabled="disabled"></td>
	                            <td ><input class="form-control col-lg-10" placeholder="Weakness" id="weakness[]" name="weakness[]" type="text" value="{$strengthAndWeakness[{$smarty.section.meeting.index}].weakness}" disabled="disabled"></td>
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

	{if $mpMplGovernancePRData[x].id_mp_mpl_govpr eq '5'}
	{assign var="skillRate" value=$editCouncillorAssData[0].mp_mpl_govpr_review.mp_mpl_govpr_libele_5}
		<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            {$mpMplGovernancePRData[x].mp_mpl_govpr_libele}
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>	                        
	                            <th>Skills</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	{section name=meeting start=0 loop=5}
	                        <tr>
	                            <td><input class="form-control col-lg-10" placeholder="Skill" id="Skill[]" name="skill[]" type="text" value="{$skillRate[{$smarty.section.meeting.index}].skill}" disabled="disabled"></td>
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
{/section}

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
                              <td><input type="hidden" name="mp_mpl_constituency_size[]" disabled="disabled">{$mpMplConstituencyData[y].id_mpl_constreview}</td>
                              <td>{$mpMplConstituencyData[y].mpl_constreview_libele}</td>
                              <td class="col-lg-2">
                                {assign var="mp_mpl_constreview" value=$editCouncillorAssData[0].mp_mpl_constreview}
                                {assign var="constreviewid" value=$mpMplConstituencyData[y].id_mpl_constreview}
                                {capture assign=constreview_id}constreview_{$constreviewid}{/capture}
                                <select name="constreview_{$mpMplConstituencyData[y].id_mpl_constreview}" class="form-control col-lg-2" disabled="disabled">
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
*}
<h3>To be Completed by the Chief Whip (Compulsory)</h3>
<h4>Peer Review</h4>
<h4>Councillor: {$editCouncillorAssData[0].councillor_name}</h4>
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
                        {section name=y loop=$cwGovernanceData}
                          <tr>
                              <td><input type="hidden" name="cw_preview_size[]">{$cwGovernanceData[y].id_chiefwhip_preview}</td>
                              <td>{$cwGovernanceData[y].chiefwhip_preview_libele}</td>
                              <td class="col-lg-2">
                                {assign var="cw_preview" value=$editData[0].cw_preview}
                                {assign var="constreviewid" value=$cwGovernanceData[y].id_chiefwhip_preview}
                                {capture assign=preview_id}preview_{$constreviewid}{/capture}
                                <select name="preview_{$cwGovernanceData[y].id_chiefwhip_preview}" class="form-control col-lg-2">
                                  {section name=rate start=1 loop=6}
                                    <option value="{$smarty.section.rate.index}" {if $cw_preview.$preview_id eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
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
<h4>Overall Performance Rating</h4>
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
                            {section name=y loop=$OverPerformanceData}
                              <th>{$OverPerformanceData[y].ovpefrating_libele}</th>
                            {/section}
                          </tr>
                      </thead>
                      <tbody>
                        
                          <tr>
                            {section name=k loop=$OverPerformanceData}
                              <td class="">
                                {assign var="cw_ovpefrating" value=$editData[0].cw_ovpefrating}
                                {assign var="ovpefratingid" value=$OverPerformanceData[k].id_ovpefrating}
                                {capture assign=ovpefrating_id}ovpefrating_{$ovpefratingid}{/capture}
                                <input type="hidden" name="ovpefrating_size[]">
                                <select name="ovpefrating_{$OverPerformanceData[k].id_ovpefrating}" class="form-control col-lg-2">
                                  {section name=rate start=1 loop=6}
                                    <option value="{$smarty.section.rate.index}" {if $cw_ovpefrating.$ovpefrating_id eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
                                  {/section}
                                </select>
                              </td> 
                            {/section}
                          </tr>
                        
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

<br>
<input type="hidden" name="id_mp_mpl_govreview_ass" value="{$editCouncillorAssData[0].id_mp_mpl_govreview_ass}">
{if $editData[0].id_cw_preview_ass neq ''}
<button type="submit" id="button-update" name="button-update" value="update" class="btn btn-info">Update</button>
{else}
<button type="submit" id="button-insert" name="button-insert" value="Insert" class="btn btn-info">Update</button>
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

		{if $editCouncillorAssData[0].id_administratortype eq '1'}
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