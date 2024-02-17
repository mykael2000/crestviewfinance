<?php

include("includes/header.php");

?>
  <div class="content-w">
   <div class="content-i">
      <div class="content-box">
        <div class="os-tabs-w">
          <div class="os-tabs-controls os-tabs-complex">
            <ul class="nav nav-tabs">
              <li class="nav-item"><a aria-expanded="false" class="nav-link active" data-toggle="tab" href="#card-overview" id="tab-overview"><span class="tab-label">My Cards</span></a>
              </li>
              <li class="nav-item"><a aria-expanded="false" class="nav-link" data-toggle="tab" href="#card-request" id="tab-request">
                <span class="tab-label">Card Request</span>
                <span class="badge badge-success"><span>(0)</span></span></a>
              </li>
              <li class="nav-item nav-actions"><a class="btn btn-grey" href="#" data-target="#onboardingFormModal" data-toggle="modal"><i class="os-icon os-icon-plus-circle"></i><span>Apply for new card</span></a>
              </li>
            </ul>
          </div>
        </div>

        
        <div class="element-wrapper">
            <div class="element-box">
                <h5 class="form-header">My Cards</h5>        

               

                                <div class="table-responsive" id="card-overview">
                                        <table class="table table-bordered table-lg table-v2 table-striped">
                      
                        <thead>
                            <tr>
                              <th class="text-center"> Cards</th>
                              <th class="text-center"> Details</th>
                              <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                                                        <tr>
                              <td class="text-center">
                                  Master Card                              </td>  
                              <td class="text-center">
                                  Debit 530862*********8865                              </td>
                              <td class="text-center">
                                 <span class="badge badge-success">active</span> 
                              </td>
                            </tr>
                                                    </tbody>

                    </table>
                                    
                                        
                      
                                    
                </div>
                <div id="card-request" style="display: none;">
                                    <div class="table-responsive" id="card-overview">
                                        
                                          
                                                                      
                          <span class="d-flex  flex-column justify-content-center align-items-center  w-50 mx-auto p-5"> You currently do not have credit card application request. Please kindly apply for one below.
                            <div class="mt-5">
                              <a  href="#" data-target="#onboardingFormModal" data-toggle="modal" class="btn btn-success px-4">Apply for new card</a>
                            </div> 

                          </span>

                        
                                      
                  </div>
                  

                </div>
            </div>
        </div> 
      </div>
    </div>
  </div>
  <div aria-hidden="true" class="onboarding-modal modal fade animated" id="onboardingFormModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-centered" role="document">
      <div class="modal-content text-center">
        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
          <span class="close-label">Close
          </span>
          <span class="os-icon os-icon-close">
          </span>
        </button>
        <div class="onboarding-media">
          <span class="icon-credit-card" style="font-size: 150px; color:#f2132b;"></span>
        </div>
        <div  style="display:none;" id="form-response" class="onboarding-content">
          <div class="alert alert-success"></div>
        </div>
        <div class="onboarding-content with-gradient" id="cardform">
          <h4 class="onboarding-title text-uppercase">Card Request form
          </h4>
          <div class="row">
            <div class="col-sm-6">
              <ul class="features-list">
                <li>ATM Cash withdrawal</li>
                <li>Web/Online Payment</li>
                <li>POS terminal</li>
              </ul>
            </div>
            <div class="col-sm-6">
              <ul class="features-list">
                <li>Mobile Access</li>
                <li>Security</li>
                <li>Global Coverage</li>
              </ul>
            </div>
          </div>
          <div class="onboarding-text"> Please fill the form below to request for a new card 
          </div>
          <form id="card_request" method="post">
            <div class="form-group">
              <label for="">Select Account</label>
              <select class="form-control" name="account" required="">
                <option value="">Select Account</option>
                                  <option value="3043736201"> Savings  Account - 3043736201 (&dollar;131,900.00)</option>


                                  <option value="3043780001"> Business  Account - 3043780001 (&dollar;806,500.00)</option>


                              </select>
              
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="">Card</label>
                  <select class="form-control" name="card" required="">
                    <option value="master card">Master Card</option>
                    <option value="visa">Visa</option>
                  </select>

                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="">Card Type</label>
                  <select class="form-control" name="card_type" required="">
                    <option value="credit">Credit</option>
                    <option value="debit">Debit</option>

                  </select>
                </div>
              </div> 
            </div>
            <div class="form-group">
              <label>Card Fee</label>
              <input value="&dollar;200.00" class="form-control" disabled>
            </div>
            
            <div id="form-response-err" class="alert alert-danger" style="display:none;"></div>
            <div class="form-group pt-2">
              <input type="hidden" name ="card-request" value="1">
              <button type="submit" class="btn btn-primary btn-block"> Submit</button>
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