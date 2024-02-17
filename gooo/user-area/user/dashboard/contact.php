<?php

include("includes/header.php");

?>
   <div class="content-w">   
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper" style="float: none;margin: auto; max-width: 600px;">
                <div class="element-box">
                    <h6 class="element-header">Help Center </h6>
                                       <p> <strong>Do you have any complaint or enquiry?</strong></p>
                    <p>Please fill out the form below and we promise you to get back to you within a couple of hours.</p>
                    <form action="update/contact"  method="post" name="myform" class="currency_validate">

                        <div class="form-group">
                            <div class="input-group mb-3">

                                <select class="form-control" name="subject" required="">
                                    <option value="">Select</option>
                                    <option value="Transfer">Transfers</option>
                                    <option value="Account">Account Services</option>
                                    <option value="Account Opening Requirement">Account Opening Requirement</option>
                                    <option value="Cards">Cards</option>
                                    <option value="Loans">Loans</option>
                                    <option value="Investment">Investment</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <textarea name="message" class="form-control" placeholder="Specify your problem" required=""></textarea>
                                
                            </div>
                            
                        </div>
                       
                        <button type="submit" name="btn-contact" class="btn btn-primary btn-block text-uppercase"><i class="os-icon os-icon-log-out"></i> Send
                        </button>
                    
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