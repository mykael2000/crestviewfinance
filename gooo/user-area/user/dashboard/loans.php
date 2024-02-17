<?php

include("includes/header.php");

?>
  <div class="content-w">
   <div class="content-i">
      <div class="content-box">
        <div class="os-tabs-w">
          <div class="os-tabs-controls os-tabs-complex">
            <ul class="nav nav-tabs">
              <li class="nav-item"><a aria-expanded="false" class="nav-link active" data-toggle="tab" href="#loan-overview" id="tab-overview"><span class="tab-label">My Loans</span></a>
              </li>
              <li class="nav-item"><a aria-expanded="false" class="nav-link" data-toggle="tab" href="#loan-request" id="tab-request">
                <span class="tab-label">Loan Applications</span>
                <span class="badge badge-success"><span>(1)</span></span></a>
              </li>
              <li class="nav-item nav-actions"><a class="btn btn-grey" href="#" data-target="#onboardingFormModal" data-toggle="modal"><i class="os-icon os-icon-plus-circle"></i><span>Apply for new loan</span></a>
              </li>
            </ul>
          </div>
        </div>

        
        <div class="element-wrapper">
            <div class="element-box">
                <h5 class="form-header">My Loans</h5>        

               

                                <div class="table-responsive" id="loan-overview">
                                        <table class="table table-bordered table-lg table-v2 table-striped">
                      
                        <thead>
                            <tr>
                              <th class="text-center"> Account</th>
                              <th class="text-center"> Amount</th>
                              <th class="text-center"> Reason of loan</th>
                              <th class="text-center"> Duration</th>
                              <th class="text-center"> Started On</th>
                              <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                                                        <tr>
                              <td class="text-center">
                                  3043736201 
                              </td>
                              <td class="text-center">
                                  &dollar;100.00                              </td>  
                              <td class="text-center">
                                  Heathcare 
                              </td>
                              <td class="text-center">
                                  12 months 
                              </td>

                              <td class="text-center">
                                  2020-12-17 
                              </td>
                              <td class="text-center">
                                 <span class="badge badge-success">Approved</span> 
                              </td>
                              
                            </tr>
                                                        <tr>
                              <td class="text-center">
                                  1 
                              </td>
                              <td class="text-center">
                                  &dollar;1000.00                              </td>  
                              <td class="text-center">
                                  For school fees 
                              </td>
                              <td class="text-center">
                                  1 month 
                              </td>

                              <td class="text-center">
                                  2020-12-12 
                              </td>
                              <td class="text-center">
                                 <span class="badge badge-success">Approved</span> 
                              </td>
                              
                            </tr>
                                                    </tbody>

                    </table>
                                    
                                        
                      
                                    
                </div>
                <div id="loan-request" style="display: none;">
                                    <div class="table-responsive" id="loan-overview">
                                            <table class="table table-bordered table-lg table-v2 table-striped">
                        
                          <thead>
                              <tr>
                                <th class="text-center">Date Submitted</th>
                                <th class="text-center">Account</th>
                                <th class="text-center">Amount</th>
                                <th class="text-center"> Reason For Loan</th>
                                <th class="text-center"> Duration</th>
                                <th class="text-center">Status</th>
                              </tr>
                          </thead>
                          <tbody>
                                                            <tr>
                                <td class="text-center">
                                  2020-12-12 07:05:31 
                                </td>
                                <td class="text-center">
                                  1 
                                </td>
                                <td class="text-center">
                                  &dollar;1000.00                                </td>  
                                <td class="text-center">
                                  For school fees 
                                </td>
                                <td class="text-center">
                                  1 month 
                              </td>
                                <td class="text-center">
                                   <span class="badge badge-warning">pending</span> 
                                </td>
                              </tr>
                                                        </tbody>

                      </table>
                                        
                                          
                        
                                      
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
           <span class="icon-envelope-letter" style="font-size: 150px; color:#f2132b;"></span>
        </div>
        <div  style="display:none;" id="form-response" class="onboarding-content">
          <div class="alert alert-success"></div>
        </div>
        <div class="onboarding-content with-gradient" id="loanform">
          <h4 class="onboarding-title text-uppercase">Loan Request form
          </h4>
          <div class="row">
            <div class="col-6">
              <ul class="features-list">
                <li>Low Interest rate</li>
                <li>Monthly Repayment</li>
              </ul>
            </div>
            <div class="col-6">
              <ul class="features-list">
                <li>Quick Access</li>
                <li>Full Repayment</li>
              </ul>
            </div>
          </div>
          <div class="onboarding-text"> Please fill the form below to request for a new loan 
          </div>
          <form id="loan_request" method="post">
            <div class="form-group">
              <label for="">Select Account</label>
              <select class="form-control" name="account" required="">
                <option value="">Select Account</option>
                                  <option value="3043736201"> Savings  Account - 3043736201 (&dollar;131,900.00)</option>


                                  <option value="3043780001"> Business  Account - 3043780001 (&dollar;806,500.00)</option>


                              </select>
              
            </div>
            <label class="mr-sm-2">Amount </label>
            <div class="input-group mb-3">
               

                <input type="text" name="amount" class="form-control" placeholder="Enter Amount" value="500.00" required="">
                <div class="input-group-prepend">
                    <label class="input-group-text text-primary">USD</label>
                </div>
                
                
            </div>
            <div class="form-group">
                <label class="mr-sm-2">Reason of loan</label>
                <div class="input-group">
                    <textarea name="reason" class="form-control" placeholder="Enter reason"></textarea>
                    
                </div>
                
            </div>

            <div class="form-group">
                    <label>Loan term</label>
                    <select name="duration" class="form-control">
                        <option value="1 month">1 month</option>
                        <option value="6 month">6 months</option>
                        <option value="12 months">12 months</option>
                    </select>   
            </div>
            

            
            
            <div id="form-response-err" class="alert alert-warning" style="display:none;"></div>
            <div class="form-group pt-2">
              <input type="hidden" name ="loan-request" value="1">
              <button type="submit" class="btn btn-primary btn-block"> APPLY</button>
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