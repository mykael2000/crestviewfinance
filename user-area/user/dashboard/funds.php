<?php

include "includes/header.php";

$amount = $_GET['amount'];

if (isset($_POST['newdeposit'])) {
    $target_dir = "proof/";
    $target_file = $target_dir . basename($_FILES["paymentproof"]["name"]);
    $proof = $_FILES["paymentproof"]["name"];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $userid = $user['id'];
    $tranx_id = rand(10000, 99999);

    $mode = $_POST['mode'];
    $status = "pending";
    $created_at = date("Y/m/d h:i:sa");
    $updated_at = date("Y/m/d h:i:sa");
    $sqlproof = "INSERT into deposits (userid, tranx_id, amount, mode, status, proof, created_at, updated_at) VALUES ('$userid', '$tranx_id', '$amount', '$mode', '$status', '$proof', '$created_at', '$updated_at')";
    $queryproof = mysqli_query($con, $sqlproof);

    if ($uploadOk == 0) {
        echo "<script>alert('Sorry, your file was not uploaded.')</script>";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["paymentproof"]["tmp_name"], $target_file)) {
            echo "<script>alert('Your proof of payment has been uploaded, kindly wait for 3 network confirmations')</script>";

        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
        }
    }

}
?>


<div class="content-w">
    <div class="content-i">
        <div class="content-box">

            <div class="element-wrapper" style="margin: auto; float: none; max-width: 600px;">
                <div class="element-box">
                    <h6 class="element-header">Make deposit</h6>

                    <div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert"
                            aria-label="Close"><span aria-hidden="true">×</span></button> <i
                            class="fa fa-arrow-circle-o-right"></i> <span class="font-bold">Notice:</span> Your email is
                        not verified yet. Please check your email and follow the instructions to verify account</div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">


                                <div class="card-body text-center">




                                    <div class="card-body text-center">
                                        <p>Your are to send <span class="text-bold">&dollar;<?php echo $amount; ?>
                                                USD</span> to the bitcoin address below or scan the QR code. <a
                                                class="text-success" href="" data-toggle="modal"
                                                data-target="#cryptodepositFormModal"> Change</a><br> </p>
                                        <h5 class="text-bold text-success">
                                            <input style="visibility: hidden;" type="text" id="deposit-address"
                                                value="bc1q5lqp8qky04np73gz0e8g86va057zprr6jpk9px">

                                            bc1q5lqp8qky04np73gz0e8g86va057zprr6jpk9px <button class="btn btn-copy"
                                                class="text-blue" id="copy"
                                                data-clipboard-text="bc1q5lqp8qky04np73gz0e8g86va057zprr6jpk9px"> <span
                                                    class="fa fa-copy">copy</span></button>
                                        </h5>
                                        <div style="margin: auto; float: none; max-width: 220px;"
                                            class="justify-content-center">
                                            <img src="https://crestviewfinance.co/uploads/qr-code/bc1q5lqp8qky04np73gz0e8g86va057zprr6jpk9px.png"
                                                width="220" height="220">
                                        </div>
                                    </div>
                                    <div class="alert alert-warning text-bold">
                                        <strong>INSTRUCTIONS:</strong> Transfer the equivalent deposit amount in bitcoin
                                        to the above bitcoin wallet address. After payment upload the payment proof
                                        below.
                                    </div>






                                </div>
                                <hr class="bg-warning">
                                <div class="card-body">

                                    <form action="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <input type="hidden" value="3000" name="amount">
                                        <div class="form-group col-md-12">
                                            <label>Proof of Payment <small>(Image or PDF)</small></label>
                                            <input type="file" class="form-control form-control-file"
                                                name="paymentproof" required="">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Payment Method use</label>

                                            <select class="form-control form-control-line" name="mode" required>

                                                <option value="bitcoin">Bitcoin</option>
                                                <option value="litecoin">Litecoin</option>
                                                <option value="ethereum">Ethereum</option>
                                                <option value="bitcoincash">Bitcoin Cash</option>
                                            </select>

                                        </div>

                                        <div class="form-group col-md-12">
                                            <button type="submit" name="newdeposit"
                                                class="btn btn-primary btn-rounded btn-block waves-effect text-uppercase">Submit
                                                Proof</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div aria-hidden="true" class="onboarding-modal modal fade animated" id="cryptodepositFormModal" role="dialog"
    tabindex="-1">
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
                <form action="https://crestviewfinance.co/index.php/user/dashboard/funds" class="" method="get"
                    accept-charset="utf-8">

                    <div class="form-group col-md-12">

                        <input type="text" placeholder="Enter amount - USD" class="form-control form-control-line"
                            name="amount" value="" required="">
                    </div>

                    <div class="form-group col-md-12">
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


<?php

include "includes/footer.php";

?>