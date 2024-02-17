<?php

include("includes/header.php");

?>
<div class="content-w">   
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper" style="float: none;margin: auto; max-width: 700px;">
                <div class="element-box">
                    <h6 class="element-header">Open New Account </h6>
                    
                      <form action="update/account/new/" method="post" class="form-horizontal form-material">

                        <input type="hidden" name="add-account" value="1">
                        <div class="form-group">
                            <label class="mr-sm-2">Primary Account</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text text-primary"><i
                                            class="fa fa-bank"></i></label>
                                </div>

                                <select class="form-control" name="account" required="">
                                    <option value="">Select Account</option>
                                                                        <option value="3043736201"> Savings  Account - 3043736201 (&dollar;131,900.00)</option>
                                    

                                                                        <option value="3043780001"> Business  Account - 3043780001 (&dollar;806,500.00)</option>
                                    

                                                                    </select>
                            </div>
                        </div> 
                        <div class="form-group">
                          <label>Account Type</label>
                          <select class="form-control" name="account_type" required="">

                                                         <option value="1"> Savings</option>


                                                        <option value="2"> Business</option>


                                                        <option value="3"> Joint</option>


                                                        <option value="4"> Checking</option>


                           

                         </select>
                       </div>
                        

                       
                      <label>Opening Balance (USD)</label>
                      <div class="input-group mb-3">

                        
                         
                              <input type="text" name="account_balance" class="form-control" placeholder="Enter Amount" value="100.00" required="">
                          <div class="input-group-prepend">
                              <label class="input-group-text text-primary">USD</label>
                          </div>
                          
                          
                      </div>
                      <div class="form-group">
                          <label class="mr-sm-2">Transaction Pin</label>
                          <input class="form-control" type="text" name="transfer_pin" placeholder="Enter pin" required="">
                      </div>
                      <div class="form-group">
                         <button type="submit" name="update-account" class="btn btn-primary btn-rounded btn-block waves-effect">SUBMIT</button>
                      </div>
                    </form>


                      

                </div>
            </div>
        </div>
    </div>
</div>


    
      
      
      
      </div>
      <?php
         include("includes/footer.php");
     ?>