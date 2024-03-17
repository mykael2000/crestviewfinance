<?php
include "includes/header.php";
if (isset($_POST['transfer'])) {
    $userid = $user['id'];
    $emailot = $user['email'];
    $otp = rand(1000, 9999);
    $tranx_id = rand(1000, 9999);
    $account_from = $_POST['account_from'];
    $account_to = $_POST['account_to'];
    $account_type = $_POST['account_type'];
    $account_name = $_POST['account_name'];
    $bank_name = $_POST['bank_name'];
    $routine = $_POST['routine'];
    $amount = $_POST['amount'];
    $naration = $_POST['naration'];
    $pin = $_POST['pin'];
    $status = "failed";
    $created_at = date("Y/m/d h:i:sa");

    if ($user['pin'] !== $pin) {
        echo "<script>alert('your pin is invalid')</script>";
    } else {

        $sqltransfer = "INSERT into local_transaction (userid, tranx_id, account_from, account_to, account_type, account_name, bank_name, routine, amount, naration, status, otp, created_at) VALUES ('$userid', '$tranx_id', '$account_from', '$account_to', '$account_type', '$account_name', '$bank_name', '$routine', '$amount', '$naration', '$status', '$otp', '$created_at')";
        $querytransfer = mysqli_query($con, $sqltransfer);
        $from = 'support@crestviewfinance.co';
        $to = $emailot;
        $subject = "One time password";

        $message = '<html><body>';
        $message .= '<div style="background-color: blue; color: white;"><h3 style="color: white;">Mail From crestviewfinance - Thanks for initiating a transaction</h3></div><div style="background-color: white; color: black;">';
        $message .= '<hr/>';
        $message .= '<h5>Note : the details in this email should not be disclosed to anyone</<h5><br>';
        $message .= '<h5>Dear<br/>';
        $message .= $user['firstname'];

        $message .= '<h5>Here is your One Time Verification pin = ' . $otp;
        $message .= '<br> Kindly input it in your transaction to confirm the transfer</h5>';

        $message .= '</div><hr/>';
        $message .= '<div style="background-color: white; color: black;"><h3 style="color: black;">crestviewfinance<sup>TM</sup> - Phone : +1 (678) 807-9514</h3>';
        $message .= '</div>';
        $message .= "</body></html>";

        $headers = "From: " . $from . "\r\n";
        $headers .= "Reply-To: " . $from . "\r\n";
        $headers .= "CC: support@crestviewfinance.co\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        mail($to, $subject, $message, $headers);

        header("location: localprocess1.php?tranx=$tranx_id&amount=$amount");
    }
}

?>
<div class="content-w">
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper" style="float: none;margin: auto; max-width: 600px;">
                <div class="element-box">
                    <h6 class="element-header">Make Transfer </h6>

                    <p> </p>
                    <form action="" method="post" name="myform" class="currency_validate">

                        <div class="form-group">
                            <label class="mr-sm-2 lighter">From</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text text-primary"><i class="fa fa-bank"></i></label>
                                </div>

                                <select class="form-control" name="account_from" required="">
                                    <option value="">Select Account</option>
                                    <option value="<?php echo $user['account_number']; ?>">
                                        <?php echo $user['account_type']; ?>-- <?php echo $user['account_number']; ?>
                                    </option>



                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mr-sm-2 lighter">Beneficiary Account No</label>
                            <div class="input-group">
                                <input type="text" name="account_to" class="form-control"
                                    placeholder="Enter Account Number" required="">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mr-sm-2 lighter">Account Type</label>


                            <select class="form-control" name="account_type" required="">
                                <option value="Savings">Savings</option>
                                <option value="Business">Business</option>
                                <option value="Checking">Checking</option>
                                <option value="-">Not Sure</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label class="mr-sm-2 lighter">Beneficiary Name</label>
                            <div class="input-group">
                                <input type="text" name="account_name" class="form-control"
                                    placeholder="Enter Account Name">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mr-sm-2 lighter">Beneficiary Bank </label>
                            <div class="input-group">
                                <input type="text" name="bank_name" class="form-control" placeholder="Enter Bank Name">

                            </div>
                        </div>



                        <div class="form-group">
                            <label class="mr-sm-2 lighter">Routing Number</label>
                            <div class="input-group">
                                <input type="text" name="routine" class="form-control"
                                    placeholder="Enter Routing Number">

                            </div>

                        </div>
                        <div class="input-group mb-3">

                            <input type="text" name="amount" class="form-control" placeholder="Enter Amount"
                                value="0.00" required="">
                            <div class="input-group-prepend">
                                <label class="input-group-text text-primary">USD</label>
                            </div>


                        </div>
                        <div class="form-group">
                            <label class="mr-sm-2 lighter">Naration(optional)</label>
                            <div class="input-group">
                                <textarea name="naration" class="form-control" placeholder="Naration"></textarea>

                            </div>

                        </div>
                        <div class="form-group">
                            <label class="mr-sm-2 lighter">Transaction Pin</label>
                            <input class="form-control" type="text" name="pin" placeholder="Enter pin" required="">
                        </div>

                        <div class="form-buttons-w text-right">
                            <button type="submit" name="transfer" class="btn btn-primary text-uppercase"> Continue <span
                                    class="os-icon os-icon-arrow-right-circle"></span></i>
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>






</div>
<?php
include "includes/footer.php";
?>