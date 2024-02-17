<?php

include("includes/header.php");

?>
<div class="content-w">
   <div class="content-i">
      <div class="content-box">
         
         
         <div class="element-wrapper">
            <h6 class="element-header">Deposit Transactions</h6>
            <div class="element-box-tp">
               <div class="table-responsive">
                                  <table class="table table-padded">
                     <thead>
                        <tr>
                           <th>Date</th>
                           <th>Transaction ID</th>
                           <th>Mode</th>
                           
                           <th class="">Status</th>
                           <th class="text-right">Amount</th>
                        </tr>
                     </thead>
                     
                     <?php
                     $userid = $user['id'];
                     $transsql = "SELECT * FROM deposits WHERE userid ='$userid'";
                            $transquery = mysqli_query($con, $transsql);
                           while($fetchtrans = mysqli_fetch_assoc($transquery)){
                            
                     ?>
                     <tbody>
                                              <tr>
                          
                           <td><span><?php echo $fetchtrans['created_at'] ?>   </span></td>
                           <td class="cell-with-media"><span><?php echo $fetchtrans['tranx_id'] ?> </span></td>
                           <td class="cell-with-media"><span><?php echo $fetchtrans['mode'] ?> </span></td>
                           
                            <td class="nowrap"><span class="status-pill smaller green "></span><span><?php echo $fetchtrans['status'] ?> </span></td>
                           <td class="text-right bolder nowrap"><span class="text-success"><?php echo $fetchtrans['amount'] ?> </span></td>
                        </tr>
                                               
                                             </tbody>
                                             <?php }  ?>
                  </table>
                                 </div>
            </div>
         </div>
         <div class="element-wrapper">
            <h6 class="element-header">Transfers</h6>
            <div class="element-box-tp">
               <div class="table-responsive">
                                  <table class="table table-padded">
                     <thead>
                        <tr>
                           <th>Date</th>
                           <th>Account From</th>
                           <th>Account To</th>
                           <th>Narration</th>
                           <th class="">Status</th>
                           <th class="text-right">Amount</th>
                        </tr>
                     </thead>
                     
                     
                     <tbody>
                         <?php
                     $userid = $user['id'];
                     $transsql = "SELECT * FROM transactions WHERE userid ='$userid'";
                            $transquery = mysqli_query($con, $transsql);
                           while($fetchtrans = mysqli_fetch_assoc($transquery)){
                            
                     ?>
                                              <tr>
                          
                           <td><span><?php echo $fetchtrans['created_at'] ?>   </span></td>
                           <td class="cell-with-media"><span><?php echo $fetchtrans['account_from'] ?> </span></td>
                           <td class="cell-with-media"><span><?php echo $fetchtrans['account_to'] ?> </span></td>
                           <td class="cell-with-media"><span><?php echo $fetchtrans['naration'] ?> </span></td>
                            <td class="nowrap"><span class="status-pill smaller green "></span><span><?php echo $fetchtrans['status'] ?> </span></td>
                           <td class="text-right bolder nowrap"><span class="text-success"><?php echo $fetchtrans['amount'] ?> </span></td>
                        </tr>
                                             <?php } 
                                             $userid = $user['id'];
                     $transin = "SELECT * FROM inter_transactions WHERE userid ='$userid'";
                            $transinquery = mysqli_query($con, $transin);
                           while($fetchtransin = mysqli_fetch_assoc($transinquery)){
                                             ?>
                                              <tr>
                          
                           <td><span><?php echo $fetchtransin['created_at'] ?>   </span></td>
                           <td class="cell-with-media"><span><?php echo $fetchtransin['account_from'] ?> </span></td>
                           <td class="cell-with-media"><span><?php echo $fetchtransin['account_to'] ?> </span></td>
                           <td class="cell-with-media"><span><?php echo $fetchtransin['naration'] ?> </span></td>
                            <td class="nowrap"><span class="status-pill smaller green "></span><span><?php echo $fetchtransin['status'] ?> </span></td>
                           <td class="text-right bolder nowrap"><span class="text-success"><?php echo $fetchtransin['amount'] ?> </span></td>
                        </tr>
                        <?php  } 
                        $userid = $user['id'];
                     $translo = "SELECT * FROM local_transaction WHERE userid ='$userid'";
                            $transloquery = mysqli_query($con, $translo);
                           while($fetchtranslo = mysqli_fetch_assoc($transloquery)){
                                             ?>
                                              <tr>
                          
                           <td><span><?php echo $fetchtranslo['created_at'] ?>   </span></td>
                           <td class="cell-with-media"><span><?php echo $fetchtranslo['account_from'] ?> </span></td>
                           <td class="cell-with-media"><span><?php echo $fetchtranslo['account_to'] ?> </span></td>
                           <td class="cell-with-media"><span><?php echo $fetchtranslo['naration'] ?> </span></td>
                            <td class="nowrap"><span class="status-pill smaller green "></span><span><?php echo $fetchtranslo['status'] ?> </span></td>
                           <td class="text-right bolder nowrap"><span class="text-success"><?php echo $fetchtranslo['amount'] ?> </span></td>
                        </tr>
                        <?php  } ?>
                        ?>
                                             
                                             </tbody>
                                            
                  </table>
                                 </div>
            </div>
         </div>
      </div>
   </div>
</div>
      
      
      
      </div>
      <?php
         include("includes/footer.php");
     ?>