<?php
         include("includes/connection.php");
         session_start();
ob_start();
if(!isset($_SESSION['online_id'])){
   header('location: ../../../user/login.php');
   
};
         $online_id = $_SESSION['online_id'];
$sql = "SELECT * FROM users WHERE online_id = '$online_id'";
$query = mysqli_query($con, $sql);
$user = mysqli_fetch_assoc($query);
          $tranx_id = $_GET['tranx'];
          $amount = $_GET['amount'];
         $otpsql = "SELECT * FROM transactions WHERE tranx_id = '$tranx_id'";
         $otpquery = mysqli_query($con, $otpsql);
         $fetchotp = mysqli_fetch_array($otpquery);
         if(isset($_POST['transfer'])){
            
             
             $status = "successfull";
            
             $code = $_POST['code'];    
            
                 if($user['code'] !== $code){
                     
                     echo "<script>alert('your transfer has failed')</script>";
                     
                     
                 }elseif($user['code'] == $code && $user['code_status'] == "active"){
                 $sqltransfer = "UPDATE transactions set status = '$status' WHERE tranx_id = '$tranx_id'";
                 $querytransfer = mysqli_query($con, $sqltransfer);
                 $newBal = $user['total_balance'] - $amount ;
                 $newAvaiBal = $user['available_balance'] - $amount;
                 $sqlbal = "UPDATE users set total_balance = '$newBal', available_balance = '$newAvaiBal' WHERE online_id = '$online_id'";
                 $newquery = mysqli_query($con, $sqlbal);
                 echo "<script>alert('Your transfer has successfully been placed')</script>";
                 header("Refresh:2; url=index.php");
                 }else{
                    
                     echo "<script>alert('your transfer has failed')</script>";
                 }
             
             
         }
         
         
         
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../assets/favicon.png" rel="shortcut icon">
      <link href="apple-touch-icon.png" rel="apple-touch-icon">
      <link href="https://fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet">
      <link href="../../assets/dashboard/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
      <link href="../../assets/dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
      <link href="../../assets/dashboard/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
      <link href="../../assets/dashboard/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
      <link href="../../assets/dashboard/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
      <link href="../../assets/dashboard/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
      <link href="../../assets/dashboard/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
      <link href="../../assets/dashboard/css/main5739.css?version=1.32" rel="stylesheet">
      <link href="../../assets/dashboard/icon_fonts_assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="../../assets/dashboard/icon_fonts_assets/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
      <link rel="stylesheet" href="../../assets/plugins/toastr/toastr.css">
      <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <style>
       body {

  background: #000;
  display: flex;
  height: 100vh;
  padding: 0;
  margin: 0;
}

.progress {
  background: rgba(255,255,255,0.1);
  justify-content: flex-start;
  border-radius: 100px;
  align-items: center;
  position: relative;
  padding: 0 5px;
  display: flex;
  height: 40px;
  width: 500px;
}

.progress-value {
  animation: load 3s normal forwards;
  box-shadow: 0 10px 40px -10px #fff;
  border-radius: 100px;
  background: #fff;
  height: 30px;
  width: 0;
}

@keyframes load {
  0% { width: 0; }
  100% { width: 100%; }
}
    </style>
</head>
<body>
       <div class="progress">
            <div class="progress-value"></div>
        </div>
    
            <div class="element-wrapper" style="float: none;margin: auto; max-width: 600px;">
                <div class="element-box">
                    <h6 class="element-header">Make Transfer </h6>
                                        
                                        <p>
                       <i class="fa fa-info-circle"></i> Transfer funds to Swiss Holding Bank accounts.
                    </p>
                    <form action=""  method="post">

                       
                        
                        <div class="form-group">
                            <label class="mr-sm-2 lighter">Transfer code</label>
                            <input class="form-control" type="text" name="code" placeholder="Enter transfer code" required="">
                        </div>
                        <div class="form-buttons-w text-right">
                           <button type="submit" name="transfer" class="btn btn-primary text-uppercase"> Continue <span class="os-icon os-icon-arrow-right-circle"></span></i>
                           </button>
                        </div>
                    
                    </form>

                                    </div>
            </div>
      
    
      
      
     </body>
     </html>