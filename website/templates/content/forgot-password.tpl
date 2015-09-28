 <div class="container">
        <div class="row">
            <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Password Request</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                  {if isset($registrationFormErrormsg)}
                  <div id="notification" style="display: block;" class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <strong>Oh snap!</strong> {$registrationFormErrormsg}</div>
                  {/if}
                    <div id="notificationEdit">
                                                </div>
                  <div class="panel panel-default">
                      {*<div class="panel-heading">
                          fabricant Détails
                      </div>*}
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-lg-6">
                                  <form role="form" id="editform" action="" method="post" enctype="multipart/form-data">
                                     
                                      <div class="form-group">
                                          <label>Email Address</label>
                                           <input class="form-control" placeholder="Email Address" id="email_address" name="email_address" type="text" value="" autofocus="">
                                           <span class="validate-error"></span>
                                      </div>
                                      <button type="submit" id="button-forgot" name="button-forgot" value="forgot" class="btn btn-success">Submit</button>
                                      

<script type="text/javascript">
/* <![CDATA[ */
    $(document).ready(function() {
    $('#editform').validate({

            rules: {
        email_address: { required: true, email: true }
            },
            messages: {     
        email_address: { required: 'Please enter your email address', email: 'Please enter a valid email address' }
            }
        });

    });


/* ]]> */
</script>

                                      <input type="hidden" id="editform-action" name="editform-action" value="">    
                                      <input type="hidden" id="viewmode" name="viewmode" value="">
                                      <input type="hidden" id="id_form" name="id_form" value="">
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
        </div>
    </div>
