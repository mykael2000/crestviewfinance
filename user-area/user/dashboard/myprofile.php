<?php
    include("includes/header.php");
?>
<div class="content-w">   
    <div class="content-i">
        <div class="content-box">
         
          
           <div class="element-wrapper">
            <div class="element-box">
              <h6 class="element-header">My Personal Data</h6>
              <div class="card content-area">

                                    <div class="card-innr card-innr-fix">
                      
                      <div class="gaps-3x">
                      </div>
                      
                      <ul class="data-details-list">
                          <li>
                              <div class="data-details-head">First Name
                              </div>
                              <div class="data-details-des"><?php echo $user['firstname'];  ?>                              </div>
                          </li>
                          <!-- li -->
                          <li>
                              <div class="data-details-head">Last Name
                              </div>
                              <div class="data-details-des"><?php echo $user['lastname'];  ?>                              </div>
                          </li>
                          <li>
                              <div class="data-details-head">Middle Name
                              </div>
                              <div class="data-details-des"> <?php echo $user['middlename'];  ?>                             </div>
                          </li>
                          <li>
                              <div class="data-details-head">Gender
                              </div>
                              <div class="data-details-des"><?php echo $user['gender'];  ?>                           </div>
                          </li>
                          <!-- li -->
                          <li>
                              <div class="data-details-head">Mobile Number
                              </div>
                              <div class="data-details-des"><?php echo $user['phone'];  ?>                             </div>
                          </li>
                          <!-- li -->
                          <li>
                              <div class="data-details-head">Date of Birth
                              </div>
                              <div class="data-details-des"><?php echo $user['dob'];  ?>                             </div>
                          </li>
                          <li>
                              <div class="data-details-head">Street address
                              </div>
                              <div class="data-details-des"><?php echo $user['address'];  ?>                              </div>
                          </li>
                          <li>
                              <div class="data-details-head">Address 2
                              </div>
                              <div class="data-details-des"><?php echo $user['address2'];  ?>                               </div>
                          </li>
                         
                          <li>
                              <div class="data-details-head">City
                              </div>
                              <div class="data-details-des">  <?php echo $user['city'];  ?>                             </div>
                          </li>
                          <li>
                              <div class="data-details-head">State
                              </div>
                              <div class="data-details-des"><?php echo $user['state'];  ?>                               </div>
                          </li>
                          
                          <li>
                              <div class="data-details-head">Country
                              </div>
                              <div class="data-details-des"><?php echo $user['country'];  ?>                              </div>
                          </li>
                          <li>
                              <div class="data-details-head">Postal
                              </div>
                              <div class="data-details-des"> <?php echo $user['postal'];  ?>                            </div>
                          </li>
                      </ul>
                      <div class="gaps-3x">
                      </div>
                      <h6 class="card-sub-title" style="display: none;">UPLOADED DOCUMNETS
                      </h6>
                      <ul class="data-details-list" style="display: none;">
                          <li>
                              <div class="data-details-head">                              </div>
                              <ul class="data-details-docs">
                                  <li>
                                      <span class="data-details-docs-title">Document
                                      </span>
                                      <div class="data-doc-item data-doc-item-lg">
                                          <div class="data-doc-image">
                                              <img src="uploads/kyc/" alt="passport">
                                          </div>
                                          <ul class="data-doc-actions">
                                              <li>
                                                  <a href="uploads/kyc/">
                                                      <em class="ti ti-import">
                                                      </em>
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>
                                  <!-- li -->
                                                                    <!-- li -->
                              </ul>
                          </li>
                          <!-- li -->
                         
                          
                          
                      </ul>
                  </div>
                  <div class="modal fade" id="del" tabindex="-1">
                      <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
                          <div class="modal-content">
                              <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                                  <em class="ti ti-close">
                                  </em>
                              </a>
                              <div class="popup-body">
                                  <h3 class="popup-title">Delete KYC # 
                                  </h3>
                                  <p>You are about to delete a KYC application, this action can't be undone. 
                                  </p>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="float-right btn btn-light btn-rounded waves-effect" data-dismiss="modal">Close</button>
                                   <a href='update/kyc/delete/' class="btn btn-dark btn-rounded waves-effect">PROCEED</a>
                              </div>
                          </div>
                          <!-- .modal-content -->
                      </div>
                      <!-- .modal-dialog -->
                  </div>
                  <div class="modal fade" id="reject" tabindex="-1">
                      <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
                          <div class="modal-content">
                              <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                                  <em class="ti ti-close">
                                  </em>
                              </a>
                              <div class="popup-body">
                                  <h3 class="popup-title text-uppercase">Reject KYC #                                  </h3>
                                  <p>Are you sure you want to reject this application?
                                  </p>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="float-right btn btn-light btn-rounded waves-effect" data-dismiss="modal">Close</button> 
                                  <a href='update/kyc/delete/reject/' class="btn btn-dark btn-rounded waves-effect">PROCEED</a>
                              </div>
                          </div>
                          <!-- .modal-content -->
                      </div>
                      <!-- .modal-dialog -->
                  </div>


                  <div class="modal fade" id="update" tabindex="-1">
                              <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
                                  <div class="modal-content">
                                      <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                                          <em class="ti ti-close">
                                          </em>
                                      </a>
                                      <form action="update/kyc/update/" method="post" class="form-horizontal form-material">
                                          <div class="popup-body">
                                              <h3 class="popup-title text-uppercase">Update KYC #                                              </h3>
                                              <input type="hidden" name="userid" value="">
                                              <div class="form-group">
                                                  <label class="col-md-12x">Status</label>
                                                  <div class="col-md-12x">
                                                      <select class="select-bordered select-block" required="" name="status">


                                                          <option value="2">  Pending</option>
                                                          <option value="1"> Approved</option>
                                                          <option value="3"> Missing Info</option>
                                                          <option value="4"> Missing</option>

                                                      </select>

                                                  </div>
                                              </div>

                                              <div class="input-item input-with-label">
                                                  <textarea name="note" class="input-bordered"  placeholder="Note"></textarea>

                                              </div>
                                              <div class="input-item text-left">
                                                   <input class="input-checkbox input-checkbox-sm" id="notify" type="checkbox" name="mode" value="1">
                                                  <label for="notify">Notify user via email</label>
                                             </div>
                                              

                                          </div>
                                          <div class="modal-footer">
                                          <button type="button" class="float-right btn btn-light btn-rounded waves-effect" data-dismiss="modal">Close</button> <button type="submit" name="update-account" class="btn btn-dark btn-rounded waves-effect">Proceed</button>
                                          </div>
                                      </form>
                                  </div>
                                  
                              </div>
                              
                   </div>
                                    <!-- .card-innr -->
              </div>

        </div>
      </div>
    </div>

  
      
      
      </div>
<?php
    include("includes/footer.php");
?>