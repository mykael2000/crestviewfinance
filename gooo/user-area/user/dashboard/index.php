<?php

include("includes/header.php");

?>

<div class="content-w">
   <div class="content-i">
      <div class="content-box">
         <div class="element-wrapper compact pt-4">
            <div class="element-actions"><a class="btn btn-success btn-sm" href="2.php"><i class="os-icon os-icon-grid-10"></i><span>Send Money</span></a> 
               <a class="btn btn-dark btn-sm hidden-mobile" href="#" data-toggle="dropdown">
                    <i class="os-icon os-icon-refresh-ccw">
                    </i>
                    <span>Deposit Money
                    </span>
               </a>
                    
               <div class="dropdown-menu dropdown-menu-left">
                      
                        <a class="dropdown-item" href="#" data-target="#cashdepositFormModal" data-toggle="modal"><i class="icon-question"></i> Cash Deposit</a>
                        <a class="dropdown-item" href="#" data-target="#cryptodepositFormModal" data-toggle="modal"><i class="icon-plus"></i> Crypto Deposit</a>
               </div></div>
            <h6 class="element-header">Account Overview</h6>
                        <div class="element-box-tp">
               <div class="row">
                  <div class="col-lg-7 col-xxl-6">
                     <div class="element-balances">
                        <div class="balance  hidden-mobile">
                           <div class="balance-title">Total Balance</div>
                           <div class="balance-value"><span>$<?php echo $user['total_balance'];  ?></span></div>
                           <div class="balance-link"><a class="btn btn-link btn-underlined" href="transactions.php"><span>View Statement</span><i class="os-icon os-icon-arrow-right4"></i></a></div>
                        </div>
                        <div class="balance">
                           <div class="balance-title">Available Balance</div>
                           <div class="balance-value">$<?php echo $user['available_balance'];  ?></div>
                           <div class="balance-link"><a class="btn btn-link btn-underlined" href="transactions.php"><span>View Statement</span><i class="os-icon os-icon-arrow-right4"></i></a></div>
                        </div>
                        <div class="balance">
                           <div class="balance-title">Credit Limit</div>
                           <div class="balance-value danger">$<?php echo $user['credit_limit'];  ?></div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 col-xxl-6">
                     <div class="alert alert-warning borderless">
                        <h5 class="alert-heading">International Transfer Low Fees</h5>
                        <p>You can now send money to your friends and family abroad with low fees.</p>
                        <div class="alert-btn"><a class="btn btn-white-gold" href="../../user/dashboard/transfer/4.php"><i class="os-icon os-icon-ui-92"></i><span>Send Money Now</span></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        
         <div class="element-wrapper">
            <h6 class="element-header">Recent Transactions</h6>
            <div class="element-box-tp">
               <div class="table-responsive">
                                  <table class="table table-padded">
                     <thead>
                        <tr>
                           <th>Date</th>
                           <th>From</th>
                           <th>To</th>
                           <th>Description</th>
                           <th class="">Status</th>
                           <th class="text-right">Amount</th>
                        </tr>
                     </thead>
                     
                     <?php
                     $userid = $user['id'];
                     $transsql = "SELECT * FROM transactions WHERE userid ='$userid' LIMIT 5";
                            $transquery = mysqli_query($con, $transsql);
                           while($fetchtrans = mysqli_fetch_assoc($transquery)){
                            
                     ?>
                     <tbody>
                                              <tr>
                          
                           <td><span><?php echo $fetchtrans['created_at'] ?>   </span></td>
                           <td class="cell-with-media"><span><?php echo $fetchtrans['account_from'] ?> </span></td>
                           <td class="cell-with-media"><span><?php echo $fetchtrans['account_to'] ?> </span></td>
                           <td class="cell-with-media"><span><?php echo $fetchtrans['naration'] ?> </span></td>
                            <td class="nowrap"><span class="status-pill smaller green "></span><span><?php echo $fetchtrans['status'] ?> </span></td>
                           <td class="text-right bolder nowrap"><span class="text-success"><?php echo $fetchtrans['amount'] ?> </span></td>
                        </tr>
                                               
                                             </tbody>
                                             <?php }  ?>
                  </table>
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
          <div style="display:none;" id="form-response" class="onboarding-content">
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
          <div style="display:none;" id="form-response" class="onboarding-content">
            <div class="alert alert-success"></div>
          </div>
          <div class="onboarding-content with-gradient" id="cardform">
            <h4 class="onboarding-title text-uppercase">Crypto Deposit
            </h4>
            <form action="../../index.php/user/dashboard/funds" class="" method="get" accept-charset="utf-8">
            
                    <div class="input-group mb-3">

                          
                           
                                <input type="text" name="amount" class="form-control" placeholder="Enter Amount" value="0.00" required="">
                            <div class="input-group-prepend">
                                <label class="input-group-text text-primary">USD</label>
                            </div>
                            
                            
                    </div>
                    
                    <div class="form-group">
                        <label>Payment method</label>

                        <select class="form-control form-control-line" name="mode" required="">

                            <option value="bitcoin">Bitcoin</option>
                            <option value="litecoin">Litecoin</option>
                            <option value="ethereum">Ethereum</option>
                            
                            <option value="bitcoincash">Bitcoin Cash</option>

                        </select>

                    </div>

                    
               
            </form></div>
            <div class="modal-footer">
                 
                <button type="submit" class="btn btn-primary btn-rounded btn-block waves-effect">PROCEED</button>
            </div>
            
          </div>
        </div>
      </div>
    </div>  

      
      
      
      </div>
     <?php
         include("includes/footer.php");
     ?>