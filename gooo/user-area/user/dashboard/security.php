<?php

include("includes/header.php");

?>
<div class="content-w">   
    <div class="content-i">
        <div class="content-box">
                    <div class="element-wrapper compact pt-4">

            <div class="element-box-tp">
              <div class="inline-profile-tiles">
                <div class="row">
                  <div class="col-4 col-sm-3 col-xxl-2">
                    <div class="profile-tile profile-tile-inlined">
                      <a class="profile-tile-box faded" href="password.php">
                        <div class="pt-new-icon"><i class="os-icon os-icon-lock"></i>
                        </div>
                        <div class="pt-user-name">Change<br> Password</div>
                      </a>
                    </div>
                  </div>
                                    <div class="col-4 col-sm-3 col-xxl-2">
                    <div class="profile-tile profile-tile-inlined">
                      <a class="profile-tile-box white" href="pin.php">
                        <div class="pt-new-icon"><i class="icon-settings"></i>
                        </div>
                        <div class="pt-user-name">Change<br> Transaction Pin</div>
                      </a>
                    </div>
                  </div>
                                    <!--<div class="col-4 col-sm-3 col-xxl-2">
                    <div class="profile-tile profile-tile-inlined">
                      <a class="profile-tile-box white" href="user/dashboard/security/session">
                        <div class="pt-new-icon"><i class="icon-settings"></i>
                        </div>
                        <div class="pt-user-name">Sessions<br> Settings</div>
                      </a>
                    </div>
                  </div>-->

                  <div class="col-4 col-sm-3 col-xxl-2">
                    <div class="profile-tile profile-tile-inlined">
                      <a class="profile-tile-box white" href="question.php">
                        <div class="pt-new-icon"><i class="icon-settings"></i>
                        </div>
                        <div class="pt-user-name">Security<br> Question</div>
                      </a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          
                                                    

          
        </div>
      </div>
    </div>
    </div>
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="forgotpinModal" role="dialog" tabindex="-1">
      <div class="modal-dialog modal-centered" role="document">
        <div class="modal-content text-center">
          <button aria-label="Close" class="close" data-dismiss="modal" type="button">
            <span class="close-label">Close
            </span>
            <span class="os-icon os-icon-close">
            </span>
          </button>
          
          <div  style="display:none;" id="form-response" class="onboarding-content">
            <div class="alert alert-success"></div>
          </div>
          <div class="onboarding-content with-gradient" id="forgotpin-form">
            <h4 class="onboarding-title text-uppercase">Forgot Pin?
            </h4>
            
            <form id="forgotpin_form" method="post">
              <div class="form-row">

                <div class="form-group col-xl-6">
                  <label class="mr-sm-2">New Transaction  Pin</label>
                  <input type="text" class="form-control"
                  name="new_password" placeholder="Enter new tansaction pin" required="">

                </div>
                <div class="form-group col-xl-6">
                  <label class="mr-sm-2">Confirm New Transaction Pin</label>
                  <input type="text" class="form-control"
                  name="confirm_newpassword" placeholder="Confirm new tansaction pin" required="">


                </div>

                <div class="form-group col-xl-6">
                  <label class="mr-sm-2">Security Question</label>
                  <input type="text" class="form-control" placeholder="What is your favorite color?" name="current_question" disabled="">
                </div>
                <div class="form-group col-xl-6">
                  <label class="mr-sm-2">Your Answer</label>
                  <input type="text" class="form-control"
                  name="current_answer" placeholder="Enter your answer" required="">

                </div>
              </div>




              
              
              <div id="form-response-err" class="alert alert-danger" style="display:none;"></div>
              <div class="form-group pt-2">
                <input type="hidden" name ="forgot-pin" value="1">
                <button type="submit" class="btn btn-primary btn-block"> Change Pin</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  
      
      
      </div>
      <?php
         include("includes/footer.php");
     ?>