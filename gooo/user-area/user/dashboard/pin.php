<?php

include("includes/header.php");



if(isset($_POST['update_pin'])){
    $old_pin = $_POST['current_pin'];
    $new_pin = $_POST['new_pin'];
    $confirm_newpin = $_POST['confirm_newpin'];
    if($old_pin !== $user['pin']){
        echo "<script>alert('old pin is wrong')</script>";
    }elseif($new_pin !== $confirm_newpin){
        echo "<script>alert('failed pin confirmation')</script>";
    }else{
        $sqlpin = "UPDATE users set pin = '$new_pin' WHERE online_id = '$online_id'";
        $querypin = mysqli_query($con, $sqlpin);
        echo "<script>alert('You have successfully changed your pin')</script>";
    }
}




?>

<div class= "content-w">
<div class="content-i">
        <div class="content-box">
                    <div class="element-wrapper" style="float: none;margin: auto; max-width: 700px;">
                <div class="element-box">
                  <h6 class="element-header text-center">Change Transaction Pin</h6>
                  
                  <form method="post" action=""> 
                    <div class="form-row">
                      <div class="form-group col-xl-12">
                        <label class="mr-sm-2">Old Transaction Pin</label>
                        <input type="password" class="form-control" placeholder="Enter old pin" name="current_pin" required="">
                      </div>
                      <div class="form-group col-xl-12">
                        <label class="mr-sm-2">New Pin</label>
                        <input type="password" class="form-control"
                        name="new_pin" placeholder="Enter new pin" required="">

                      </div>
                      <div class="form-group col-xl-12">
                        <label class="mr-sm-2">Confirm New Pin</label>
                        <input type="password" class="form-control"
                        name="confirm_newpin" placeholder="Confirm new pin" required="">


                      </div>
                      <div class="col-12">
                        <input type="hidden" name="update_pin" value="1">
                        <button type="submit" class="btn btn-primary waves-effect">Change Pin</button>
                       
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
    






</div>

<?php 
include("includes/footer.php")
?>