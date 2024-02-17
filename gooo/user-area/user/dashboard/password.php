<?php

include("includes/header.php");


if(isset($_POST['update_password'])){
    $old_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_newpassword = $_POST['confirm_newpassword'];
    if($old_password !== $user['password']){
        echo "<script>alert('old password is wrong')</script>";
    }elseif($new_password !== $confirm_newpassword){
        echo "<script>alert('failed password confirmation')</script>";
    }else{
        $sqlpass = "UPDATE users set password = '$new_password' WHERE online_id = '$online_id'";
        $querypass = mysqli_query($con, $sqlpass);
        echo "<script>alert('You have successfully changed your password')</script>";
    }
}


?>

<div class= "content-w">
<div class="content-i">
        <div class="content-box">
                    <div class="element-wrapper" style="float: none;margin: auto; max-width: 700px;">
                <div class="element-box">
                  <h6 class="element-header text-center">Change Login Password</h6>
                  
                  <form method="post" action=""> 
                    <div class="form-row">
                      <div class="form-group col-xl-12">
                        <label class="mr-sm-2">Old Password</label>
                        <input type="password" class="form-control" placeholder="Enter old password" name="current_password" required="">
                      </div>
                      <div class="form-group col-xl-12">
                        <label class="mr-sm-2">New Password</label>
                        <input type="password" class="form-control"
                        name="new_password" placeholder="Enter new password" required="">

                      </div>
                      <div class="form-group col-xl-12">
                        <label class="mr-sm-2">New Password</label>
                        <input type="password" class="form-control"
                        name="confirm_newpassword" placeholder="Confirm new password" required="">


                      </div>
                      <div class="col-12">
                        <input type="hidden" name="update_password" value="1">
                        <button type="submit" class="btn btn-primary waves-effect">Change Password</button>
                       
                      </div>
                       
                         <div id="result_msg" class="mt-2  alert alert-warning mb-2 alert-dismissible fade show" style="display:none;"> </div>
                       
                    </div>
                  </form>

                  



                </div>
          </div>

                                                    

          
        </div>
      </div>
    </div>
    </div>
   













<?php 
include("includes/footer.php")
?>