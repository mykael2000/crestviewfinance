<?php

session_start();
ob_start();
if (!isset($_SESSION['online_id'])) {
    header('location: ../../../user/login.php');

}
;
include "includes/connection.php";
$online_id = $_SESSION['online_id'];
$sql = "SELECT * FROM users WHERE online_id = '$online_id'";
$query = mysqli_query($con, $sql);
$user = mysqli_fetch_assoc($query);
$twofactor = $_GET['two'];
$emailse = $user['email'];

$from = 'support@crestviewfinance.co';
$to = $emailse;
$subject = "2fa - Security";

$message = '<html><body>';
$message .= '<div style="background-color: blue; color: white;"><h3 style="color: white;">Mail From support@crestviewfinance.co - Thanks for logging in</h3></div><div style="background-color: white; color: black;">';
$message .= '<hr/>';
$message .= '<img src="https://crestviewfinance.co/assets/img/logo.png">';
$message .= '<h5>Note : the details in this email should not be disclosed to anyone</<h5><br>';
$message .= '<h5>Dear<br/>';
$message .= $firstname;

$message .= '<h5>Here is your 2fa code = ' . $twofactor;

$message .= '</div><hr/>';
$message .= '<div style="background-color: white; color: black;"><h3 style="color: black;">support@crestviewfinance.co<sup>TM</sup> - Phone : +447776704159</h3>';
$message .= '</div>';
$message .= "</body></html>";

$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $from . "\r\n";
$headers .= "CC: support@crestviewfinance.co\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to, $subject, $message, $headers);
if (isset($_POST['submit'])) {
    $first = $_POST['first'] . $_POST['second'] . $_POST['third'] . $_POST['fourth'] . $_POST['fifth'] . $_POST['sixth'];
    if ($twofactor == $first) {
        header("location: index.php");
    } else {
        echo "<script>alert('authentication failed, redirecting now......')</script>";
        header("refresh: 1; url=../../../user/logout.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    body {
        background: #eee;
    }

    .card {
        box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: 1rem;
    }

    .img-thumbnail {
        padding: .25rem;
        background-color: #ecf2f5;
        border: 1px solid #dee2e6;
        border-radius: .25rem;
        max-width: 100%;
        height: auto;
    }

    .avatar-lg {
        height: 150px;
        width: 150px;
    }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-lg-5 col-md-7 mx-auto my-auto">
                <div class="card">
                    <div class="card-body px-lg-5 py-lg-5 text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                            class="rounded-circle avatar-lg img-thumbnail mb-4" alt="profile-image">
                        <h2 class="text-info">2FA Security</h2>
                        <p class="mb-4">Enter 6-digits code sent to your email address.</p>
                        <form action="" method="post">
                            <div class="row mb-4">
                                <div class="col-lg-2 col-md-2 col-2 ps-0 ps-md-2">
                                    <input type="text" name="first" class="form-control text-lg text-center"
                                        placeholder="_" aria-label="2fa">
                                </div>
                                <div class="col-lg-2 col-md-2 col-2 ps-0 ps-md-2">
                                    <input type="text" name="second" class="form-control text-lg text-center"
                                        placeholder="_" aria-label="2fa">
                                </div>
                                <div class="col-lg-2 col-md-2 col-2 ps-0 ps-md-2">
                                    <input type="text" name="third" class="form-control text-lg text-center"
                                        placeholder="_" aria-label="2fa">
                                </div>
                                <div class="col-lg-2 col-md-2 col-2 pe-0 pe-md-2">
                                    <input type="text" name="fourth" class="form-control text-lg text-center"
                                        placeholder="_" aria-label="2fa">
                                </div>
                                <div class="col-lg-2 col-md-2 col-2 pe-0 pe-md-2">
                                    <input type="text" name="fifth" class="form-control text-lg text-center"
                                        placeholder="_" aria-label="2fa">
                                </div>
                                <div class="col-lg-2 col-md-2 col-2 pe-0 pe-md-2">
                                    <input type="text" name="sixth" class="form-control text-lg text-center"
                                        placeholder="_" aria-label="2fa">
                                </div>
                            </div>
                            <div class="text-center">
                                <button name="submit" type="submit" class="btn bg-info btn-lg my-4">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
