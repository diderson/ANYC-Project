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

<h3>A. Governance Review</h3>
<h4>Part 1</h4>
<h5>ASSESSMENT: TO BE COMPLETED BY THE COUNCILLOR (Compulsory)<h5>
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
	                            	{assign var="mp_mpl_govreview" value=$editData[0].mp_mpl_govreview}
	                            	{assign var="govreviewid" value=$mpMplGovernanceData[y].id_mp_mpl_govreview}
	                            	{capture assign=govreview_id}govreview_{$govreviewid}{/capture}
	                            	<select name="govreview_{$mpMplGovernanceData[y].id_mp_mpl_govreview}" class="form-control">
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
	<h4>Part 2</h4>
	<h5>ASSESSMENT: TO BE COMPLETED BY THE COUNCILLOR (Compulsory)<h5>
	<h4>Field 1: {$mpMplGovernancePRData[x].mp_mpl_govpr_libele}</h4>
	<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            1.1 {$sous_section.0}
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                            <th>Committee</th>
	                            {*<th>No. of meetings</th>
	                            <th>No. of attendance</th>*}
	                            <th>Rate</th>	                         
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	{assign var="section_0" value=$editData[0].mp_mpl_govpr_review.mp_mpl_govpr_libele_1.section_0}
	                    	{section name=meeting start=0 loop=5}
	                 
	                        <tr>
	                            <td>
													  <select name="committee[]" id="committee[]" class="form-control">
															<option value="">Please select</option>
															<option value="Safety and Security" {if $section_0[{$smarty.section.meeting.index}].committee eq 'Safety and Security'} selected="selected"{/if}>Safety and Security</option>
															<option value="Tourism" {if $section_0[{$smarty.section.meeting.index}].committee eq 'Tourism'} selected="selected"{/if}>Tourism</option>
															<option value="LED" {if $section_0[{$smarty.section.meeting.index}].committee eq 'LED'} selected="selected"{/if}>LED</option>
															<option value="Housing" {if $section_0[{$smarty.section.meeting.index}].committee eq 'Housing'} selected="selected"{/if}>Housing</option>
															<option value="Health" {if $section_0[{$smarty.section.meeting.index}].committee eq 'Health'} selected="selected"{/if}>Health</option>
															<option value="Water and Sanitation" {if $section_0[{$smarty.section.meeting.index}].committee eq 'Water and Sanitation'} selected="selected"{/if}>Water and Sanitation</option>
															<option value="Electricity" {if $section_0[{$smarty.section.meeting.index}].committee eq 'Electricity'} selected="selected"{/if}>Electricity</option>
															<option value="Transport" {if $section_0[{$smarty.section.meeting.index}].committee eq 'Transport'} selected="selected"{/if}>Transport</option>
															<option value="Mayoral" {if $section_0[{$smarty.section.meeting.index}].committee eq 'Mayoral'} selected="selected"{/if}>Mayoral</option>
														</select>
	                            	{* <input class="form-control col-lg-8" placeholder="Committee" id="committee[]" name="committee[]" type="text" value="{$section_0[{$smarty.section.meeting.index}].committee}"></td>*}
	                           {* <td>
	                            	<select name="meetings[]" class="form-control">
																	{section name=rate start=1 loop=101}
																		<option value="{$smarty.section.rate.index}" {if $section_0[{$smarty.section.meeting.index}].meetings eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
																	{/section}
																</select>
	                            </td> 

	                            <td>
	                            	<select name="attendance[]" class="form-control">
																	{section name=rate start=1 loop=101}
																		<option value="{$smarty.section.rate.index}" {if $section_0[{$smarty.section.meeting.index}].attendance eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
																	{/section}
																</select>
	                            </td> *}

	                            <td>
	                            	<select name="rate_commitee[]" class="form-control">
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
	            1.2 {$sous_section.1}
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
	                    	{assign var="section_1" value=$editData[0].mp_mpl_govpr_review.mp_mpl_govpr_libele_1.section_1}
	                    	{section name=topic start=0 loop=5}
	                        <tr>
	                            <td><input class="form-control col-lg-10" placeholder="Topic" id="topic[]" name="topic[]" type="text"  value="{$section_1[{$smarty.section.topic.index}].topic}"></td>
	                            

	                            <td class="col-lg-2">
	                            	<select name="rate_topic[]" class="form-control">
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
	                            <td>1.3 {$sous_section.2}</td>
	                            

	                            <td>
	                            	<select name="caucus_1" class="form-control">
																	{section name=rate start=1 loop=6}
																		<option value="{$smarty.section.rate.index}" {if $editData[0].mp_mpl_govpr_review.mp_mpl_govpr_libele_1.section_2 eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
																	{/section}
																</select>
	                            </td> 
	                        </tr>
	                        <tr>
	                            <td>1.4 {$sous_section.3}</td>
	                            

	                            <td>
	                            	<select name="caucus_2" class="form-control">
																	{section name=rate start=1 loop=6}
																		<option value="{$smarty.section.rate.index}" {if $editData[0].mp_mpl_govpr_review.mp_mpl_govpr_libele_1.section_3 eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
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
	            1.5 {$mpMplGovernancePRData[x].mp_mpl_govpr_libele}
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
	                    	{assign var="competencySection" value=$editData[0].mp_mpl_govpr_review.mp_mpl_govpr_libele_2}
	                    	{foreach from=$sous_section2 item=competency key=k}
	                    	{capture assign=section_id}section_{$k}{/capture}
	                        <tr>
	                            <td>{$competency}</td>
	                            

	                            <td class="col-lg-2">
	                            	<select name="competency[]" class="form-control col-lg-2">
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
	{assign var="section_0" value=$editData[0].mp_mpl_govpr_review.mp_mpl_govpr_libele_3.section_0}
	<h4>Field 2: Self Development as a Public Representative</h4>
		<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            2.1 {$sous_section3.0}
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                        
	                            <th>Courses</th>
	                            <th>Year</th>
	                            {*<th>Rate</th>*}
	                         
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	{section name=meeting start=0 loop=5}
	                        <tr>
	                            <td>
			                          <select name="course[]" id="course[]" class="form-control">
																	<option value="">Please select</option>
																	<option value="Municipal Finance" {if $section_0[{$smarty.section.meeting.index}].course eq 'Municipal Finance'} selected="selected"{/if}>Municipal Finance</option>
																	<option value="Legislation" {if $section_0[{$smarty.section.meeting.index}].course eq 'Legislation'} selected="selected"{/if}>Legislation</option>
																	<option value="Oversight" {if $section_0[{$smarty.section.meeting.index}].course eq 'Oversight'} selected="selected"{/if}>Oversight</option>
																	<option value="Public Participation" {if $section_0[{$smarty.section.meeting.index}].course eq 'Public Participation'} selected="selected"{/if}>Public Participation</option>
																	<option value="Public Speaking" {if $section_0[{$smarty.section.meeting.index}].course eq 'Public Speaking'} selected="selected"{/if}>Public Speaking</option>
																	<option value="Project Management" {if $section_0[{$smarty.section.meeting.index}].course eq 'Project Management'} selected="selected"{/if}>Project Management</option>
																	<option value="Drafting and Report Writing" {if $section_0[{$smarty.section.meeting.index}].course eq 'Drafting and Report Writing'} selected="selected"{/if}>Drafting and Report Writing</option>
																</select>
	                            	{*<input class="form-control col-lg-10" placeholder="Course" id="course[]" name="course[]" type="text" value="{$section_0[{$smarty.section.meeting.index}].course}">*}</td>
	                            <td class="col-lg-3">
	                            	<select name="date[]" id="date[]" class="form-control">
																	<option value="">select</option>
																	{section name=year start=1950 loop=2015 }
																	<option value="{$smarty.section.year.index}" {if $section_0[{$smarty.section.meeting.index}].date eq {$smarty.section.year.index}} selected="selected"{/if}>{$smarty.section.year.index}</option>
																	{/section}
																</select>
	                            	{*<input class="form-control col-lg-10" placeholder="yyyy-mm-dd" id="date[]" name="date[]" type="text">*}</td>
	                            

	                            {* <td class="col-lg-2">
	                            	<select name="rate_course[]" class="form-control">
																	{section name=rate start=1 loop=6}
																		<option value="{$smarty.section.rate.index}" {if $section_0[{$smarty.section.meeting.index}].rate_course eq {$smarty.section.rate.index}} selected="selected"{/if}>{$smarty.section.rate.index}</option>
																	{/section}
																</select>
	                            </td> *}
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
	{assign var="strengthAndWeakness" value=$editData[0].mp_mpl_govpr_review.mp_mpl_govpr_libele_4}
		<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            2.2 {$mpMplGovernancePRData[x].mp_mpl_govpr_libele}
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
	                            <td>
	                            	<select name="strength[]" id="strength[]" class="form-control">
																	<option value="">Please select</option>
																	<option value="Public Speaking" {if $strengthAndWeakness[{$smarty.section.meeting.index}].strength eq 'Public Speaking'} selected="selected"{/if}>Public Speaking</option>
																	<option value="Understanding Municipal" {if $strengthAndWeakness[{$smarty.section.meeting.index}].strength eq 'Understanding Municipal'} selected="selected"{/if}>Understanding Municipal</option>
																	<option value="Comment engagement" {if $strengthAndWeakness[{$smarty.section.meeting.index}].strength eq 'Comment engagement'} selected="selected"{/if}>Comment engagement</option>
																	<option value="Draft Reporting" {if $strengthAndWeakness[{$smarty.section.meeting.index}].strength eq 'Draft Reporting'} selected="selected"{/if}>Draft Reporting</option>
																	<option value="Computer Literacy" {if $strengthAndWeakness[{$smarty.section.meeting.index}].strength eq 'Computer Literacy'} selected="selected"{/if}>Computer Literacy</option>
																</select>
	                            	{*<input class="form-control col-lg-10" placeholder="Strength" id="strength[]" name="strength[]" type="text" value="{$strengthAndWeakness[{$smarty.section.meeting.index}].strength}">*}</td>
	                            <td >
	                            	<select name="weakness[]" id="weakness[]" class="form-control">
																	<option value="">Please select</option>
																	<option value="Lack of Computer Literacy" {if $strengthAndWeakness[{$smarty.section.meeting.index}].weakness eq 'Lack of Computer Literacy'} selected="selected"{/if}>Lack of Computer Literacy</option>
																	<option value="Lack of constituency" {if $strengthAndWeakness[{$smarty.section.meeting.index}].weakness eq 'Lack of constituency'} selected="selected"{/if}>Lack of constituency</option>
																	<option value="Failure to participate in ANC Branch works" {if $strengthAndWeakness[{$smarty.section.meeting.index}].weakness eq 'Failure to participate in ANC Branch works'} selected="selected"{/if}>Failure to participate in ANC Branch works</option>
																	<option value="Lack of self-development" {if $strengthAndWeakness[{$smarty.section.meeting.index}].weakness eq 'Lack of self-development'} selected="selected"{/if}>Lack of self-development</option>
																	<option value="Failure to" {if $strengthAndWeakness[{$smarty.section.meeting.index}].weakness eq 'Failure to'} selected="selected"{/if}>Failure to</option>
																</select>
	                            	{* <input class="form-control col-lg-10" placeholder="Weakness" id="weakness[]" name="weakness[]" type="text" value="{$strengthAndWeakness[{$smarty.section.meeting.index}].weakness}">*}</td>
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
	{assign var="skillRate" value=$editData[0].mp_mpl_govpr_review.mp_mpl_govpr_libele_5}
		<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            2.3 {$mpMplGovernancePRData[x].mp_mpl_govpr_libele}
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
	                            <td><input class="form-control col-lg-10" placeholder="Skill" id="Skill[]" name="skill[]" type="text" value="{$skillRate[{$smarty.section.meeting.index}].skill}"></td>
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

<h3>B. Constituency Review</h3>
<h5>ASSESSMENT: TO BE COMPLETED BY THE COUNCILLOR (Compulsory)<h5>
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

<div class="row">
    <div class="col-lg-4">
			<select name="mp_mpl_status" class="form-control col-lg-2">
				<option value="">Select Status</option>
				<option value="incomplete" {if $editData[0].mp_mpl_status eq 'incomplete'}selected="selected"{/if}>incomplete</option>
				<option value="pending" {if $editData[0].mp_mpl_status eq 'pending'}selected="selected"{/if}>pending</option>
				<option value="completed" {if $editData[0].mp_mpl_status eq 'completed'}selected="selected"{/if}>complete</option>
			</select>
    </div>
</div>

{*{include file="templates-admin/block/submit-buttons.tpl"}*}
<br>
{if $editData[0].id_mp_mpl_govreview_ass neq ''}
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