<?php

include("includes/header.php");

?>
<div class="content-w">
   <div class="content-i">
      <div class="content-box">
         
        <div class="element-wrapper" style="float: none;margin: auto; max-width: 600px;">
          <div class="element-box">

            <h6 class="element-header"> Account Statement </h6>
                       <form action="user/dashboard/view-statement" method="get">

            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text text-primary"><i
                    class="fa fa-bank"></i></label>
                  </div>

                  <select class="form-control" name="account" required="">
                    <option value="">Select Account</option>
                                          <option value="3043736201"> Savings  Account - 3043736201 </option>


                                          <option value="3043780001"> Business  Account - 3043780001 </option>


                                      </select>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <label>From</label>
                    <div class="date-input">
                      <input name="start" class="single-daterange form-control" id="datepicker" value="03/31/2020">
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label>To</label>
                      <div class="date-input">
                      <input name="end" class="single-daterange form-control" id="datepicker" value="03/31/2020">
                    </div>
                  </div>
                </div>
              </div>
              
              
              
              
              <button class="btn btn-primary btn-block text-uppercase"><i class="os-icon os-icon-compass"></i> View Statement</button>

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