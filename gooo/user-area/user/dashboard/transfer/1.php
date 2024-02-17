<?php
        
include("includes/header.php");


?>
     <div class="content-w">   
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper" style="float: none;margin: auto; max-width: 600px;">
                <div class="element-box">
                    <h6 class="element-header">Make Transfer </h6>
                                        
                                        <p>
                       <i class="fa fa-info-circle"></i> Transferring funds between your accounts is easy– whether you’re making a one-time transfer, or scheduling recurring transfers for the future.
                    </p>
                    <form action="https://swissholdingbank.com/update/transfer/1"  method="post" name="myform" class="currency_validate">

                        <div class="form-group">
                            <label class="mr-sm-2 lighter">From Account</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text text-primary"><i
                                            class="fa fa-bank"></i></label>
                                </div>

                                <select class="form-control" name="account_from" required="">
                                    <option value="">Select Account</option>
                                                                        <option value="3043736201"> Savings  Account - 3043736201 (&dollar;131,900.00)</option>
                                    

                                                                        <option value="3043780001"> Business  Account - 3043780001 (&dollar;806,500.00)</option>
                                    

                                                                    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mr-sm-2 lighter">To</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text text-primary"><i
                                            class="fa fa-bank"></i></label>
                                </div>

                                <select class="form-control" name="account_to" required="">
                                    <option value="">Select Account</option>
                                                                        <option value="3043736201"> Savings  Account - 3043736201 (&dollar;131,900.00)</option>
                                    

                                                                        <option value="3043780001"> Business  Account - 3043780001 (&dollar;806,500.00)</option>
                                    

                                                                    </select>
                            </div>
                        </div>
                        
                        <div class="input-group mb-3">

                          
                           
                                <input type="text" name="amount" class="form-control" placeholder="Enter Amount" value="0.00" required="">
                            <div class="input-group-prepend">
                                <label class="input-group-text text-primary">USD</label>
                            </div>
                            
                            
                        </div>
                        <div class="form-group">
                            <label class="mr-sm-2 lighter">Naration(optional)</label>
                            <div class="input-group">
                                <textarea name="naration" class="form-control" placeholder="Enter payment description"></textarea>
                                
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label class="mr-sm-2 lighter">Transaction Pin</label>
                            <input class="form-control" type="text" name="transfer_pin" placeholder="Enter pin" required="">
                        </div>
                        <button type="submit" name="transfer" class="btn btn-primary btn-block text-uppercase"><i class="os-icon os-icon-log-out"></i> Submit Transfer
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