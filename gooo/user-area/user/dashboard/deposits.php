<?php

include("includes/header.php");


?>
<div class="content-w">   
    <div class="content-i">
        <div class="content-box">
             <div class="os-tabs-w">
           <div class="os-tabs-controls os-tabs-complex">
              <ul class="nav nav-tabs">
                 
                 
                 
                 
                 <li class="nav-item nav-actions">
                    <a class="btn btn-primary" href="#" data-toggle="dropdown">
                    <i class="os-icon os-icon-refresh-ccw">
                    </i>
                    <span>Deposit Money
                    </span>
                    </a>
                    
                    <div class="dropdown-menu dropdown-menu-left">
                      
                        <a class="dropdown-item" href="#" data-target="#cashdepositFormModal" data-toggle="modal"><i class="icon-question"></i> Cash Deposit</a>
                        
                        <a class="dropdown-item" href="#" data-target="#cryptodepositFormModal" data-toggle="modal"><i class="icon-plus"></i> Crypto Deposit</a>
                    </div>

                    
                 </li>
              </ul>
           </div>
        </div>
            <div class="element-wrapper" >
                <div class="element-box">
                    <h6 class="element-header">Deposits History</h6>

       
                                
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    
                                    <div class="ml-auto">
                                        <div class="dl">
                                            <form class="m-t-20" action="" method="get">
                                                <div class="input-group mb-3">
                                                    <input type="text" name="search" class="form-control" placeholder="Enter transaction id" aria-label="" aria-describedby="basic-addon1">
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive ">
                                    <table class="table table-striped table-bordered no-margin">
                                        <thead>
                                            <tr class="bg-pale">
                                                <th class="border-top-0">Trans ID</th>
                                                <th class="text-center border-top-0">Amount(USD)</th>
                                                 <th class="text-center border-top-0">Narration</th>
                                                <th class="text-center border-top-0">Status</th>
                                                                                                <th class="text-center border-top-0">Date Created</th>
                                                <th class="text-center border-top-0">Date Updated</th>
                                                                                            </tr>
                                        </thead>
                                        <?php
                                        $depouser = $user['id'];
                                        $sqlde = "SELECT * FROM deposits WHERE userid = '$depouser'";
                                        $querydepo = mysqli_query($con, $sqlde);
                                        while($fetchdeposit = mysqli_fetch_assoc($querydepo)){
                                        
                                        ?>
                                        <tbody>
                                            
                                            <tr>
                                                <td class='text-center'><?php echo $fetchdeposit['tranx_id'];  ?></td>
                                                 <td class='text-center'>$<?php echo $fetchdeposit['amount'];  ?></td>
                                                  <td class='text-center'><?php echo $fetchdeposit['mode'];  ?></td>
                                                   <td class='text-center'><?php echo $fetchdeposit['status'];  ?></td>
                                                    <td class='text-center'><?php echo $fetchdeposit['created_at'];  ?></td>
                                                     <td class='text-center'><?php echo $fetchdeposit['updated_at'];  ?></td>
                                            </tr>
                                            
                                                     </tbody>
                                            <?php } ?>
                                    </table>
                                </div>
                                                             </div>
                        </div>
                    </div>

                     

                </div>
            </div>
      </div>
      </div>
    </div>
  </div>
</div>
<div aria-hidden="true" class="onboarding-modal modal fade animated" id="cashdepositFormModal" role="dialog" tabindex="-1">
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
            <h4 class="onboarding-title text-uppercase">Cash/Cheque Deposit
            </h4>
            <div class="alert alert-warning">
               For Cash/Cheque Deposits please contact us at <span class="font-bold">support@swissholdingbank.com</span>.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="cryptodepositFormModal" role="dialog" tabindex="-1">
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
            <h4 class="onboarding-title text-uppercase">Crypto Deposit
            </h4>
            <form action="funds.php" class="" method="get" accept-charset="utf-8">
            
                    <div class="input-group mb-3">

                          
                           
                                <input type="text" name="amount" class="form-control" placeholder="Enter Amount" value="0.00" required="">
                            <div class="input-group-prepend">
                                <label class="input-group-text text-primary">USD</label>
                            </div>
                            
                            
                    </div>
                    
                    <div class="form-group">
                        <label>Payment method</label>

                        <select class="form-control form-control-line" name="mode" required>

                            <option value="bitcoin">Bitcoin</option>
                            <option value="litecoin">Litecoin</option>
                            <option value="ethereum">Ethereum</option>
                            
                            <option value="bitcoincash">Bitcoin Cash</option>

                        </select>

                    </div>

                    
               
            </div>
            <div class="modal-footer">
                 
                <button type="submit" class="btn btn-primary btn-rounded btn-block waves-effect">PROCEED</button>
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