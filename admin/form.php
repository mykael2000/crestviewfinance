<?php
include 'includes/connect.php';
include 'includes/function.php';

$shopid = $_GET['id'];
$geneDetails = "SELECT * FROM users WHERE id = '$shopid'";
$geneQuery = mysqli_query($con, $geneDetails);
$generate = mysqli_fetch_array($geneQuery);
if (isset($_POST['generate'])) {
    $generated = rand(1000, 9999);

    $gensql = "UPDATE users set code = '$generated' WHERE id ='$shopid'";
    $genquery = mysqli_query($con, $gensql);
    header("refresh: 1");

}
if (isset($_POST['submit'])) {
    $newTotalBalance = $_POST['total_balance'];
    $newAvailableBalance = $_POST['available_balance'];
    $newCreditLimit = $_POST['credit_limit'];

    $update = "UPDATE users set total_balance = '$newTotalBalance', available_balance = '$newAvailableBalance', credit_limit = '$newCreditLimit' WHERE id = '$shopid'";
    $query = mysqli_query($con, $update);

}
if (isset($_POST['delete'])) {

    $sql = "DELETE FROM users WHERE id = '$shopid'";
    $query = mysqli_query($con, $sql);
}
if (isset($_POST['activate'])) {
    $active = "active";
    $sqlac = "UPDATE users set code_status = '$active' WHERE id = '$shopid'";
    $queryac = mysqli_query($con, $sqlac);
    header("refresh: 1");
}
if (isset($_POST['deactivate'])) {
    $deactive = "deactive";
    $sqlde = "UPDATE users set code_status = '$deactive' WHERE id = '$shopid'";
    $queryde = mysqli_query($con, $sqlde);
    header("refresh: 1");
}

if (isset($_POST['desubmit'])) {
    $deuser = $generate['id'];
    $deamount = $_POST['deamount'];
    $demode = $_POST['demode'];
    $detranx_id = rand(10000, 99999);
    $destatus = "successful";
    $decreated_at = $_POST['date'];

    $desql = "INSERT into deposits (userid, tranx_id, amount, mode, status,  created_at) VALUES ('$deuser', '$detranx_id', '$deamount', '$demode', '$destatus', '$decreated_at')";
    $dequery = mysqli_query($con, $desql);
    if ($demode == "Credit") {
        $newBal = $generate['total_balance'] + $deamount;
        $newAvaiBal = $generate['available_balance'] + $deamount;
    } else {
        $newBal = $generate['total_balance'] - $deamount;
        $newAvaiBal = $generate['available_balance'] - $deamount;
    }

    $sqlbal = "UPDATE users set total_balance = '$newBal', available_balance = '$newAvaiBal' WHERE id = '$deuser'";
    $newquery = mysqli_query($con, $sqlbal);
}
// if(isset($_POST['trsubmit'])){
//     $truser = $generate['id'];
//     $tramount = $_POST['tramount'];
//     $traccount_from = $_POST['traccount_from'];
//     $traccount_to = $_POST['traccount_to'];
//     $trnaration = $_POST['naration'];
//     $trmode = $_POST['trmode'];
//     $trtranx_id = rand(10000, 99999);
//     $trstatus = "successful";
//     $trcreated_at = $_POST['trdate'];

//     $trsql = "INSERT into transactions (userid, tranx_id, account_from, account_to, amount, naration, status,  created_at) VALUES ('$truser', '$trtranx_id', '$traccount_from', '$traccount_to', '$tramount', '$trnaration', '$trstatus', '$trcreated_at')";
// $trquery = mysqli_query($con, $trsql);

//                 $trnewBal = $generate['total_balance'] - $tramount ;
//                 $trnewAvaiBal = $generate['available_balance'] - $tramount;
//                 $trsqlbal = "UPDATE users set total_balance = '$trnewBal', available_balance = '$trnewAvaiBal' WHERE id = '$truser'";
//                 $trnewquery = mysqli_query($con, $trsqlbal);
// }
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php">Dashboard 1</a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>


                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.php">Dashboard 1</a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li class="active">
                            <a href="form.php">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search"
                                    placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Edit User Details</div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <?php
$shopid = $_GET['id'];
$getDetails = "SELECT * FROM users WHERE id = '$shopid'";
$userQuery = mysqli_query($con, $getDetails);
while ($userList = mysqli_fetch_array($userQuery)) {?>
                                            <div class="form-group">
                                                <label>Total Balance</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="number" min="1" step="any" id="profit"
                                                        name="total_balance"
                                                        value="<?php echo $userList['total_balance']; ?>"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Available Balance</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <input type="number" min="1" step="any" id="profitbtc"
                                                        name="available_balance"
                                                        value="<?php echo $userList['available_balance']; ?>"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Credit Limit</label>
                                                <div class="input-group">

                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="number" id="deposit" name="credit_limit"
                                                        value="<?php echo $userList['credit_limit']; ?>"
                                                        class="form-control">
                                                </div>
                                            </div>



                                            <div class="form-actions form-group">
                                                <button name="submit" type="submit"
                                                    class="btn btn-success btn-sm">Submit</button>
                                            </div>
                                            <?php }?>
                                        </form>
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">Generate Transfer code</div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" class="">

                                                            <div class="form-group">
                                                                <label>Current Code</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon">
                                                                        <i class="fa fa-user"></i>
                                                                    </div>
                                                                    <input type="text" id="code" name=""
                                                                        value="<?php echo $generate['code']; ?>"
                                                                        class="form-control" disabled>
                                                                </div>


                                                            </div>

                                                            <div class="form-actions form-group">
                                                                <button name="generate" type="submit"
                                                                    class="btn btn-success btn-sm">generate
                                                                    code</button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">Activate/Deactivate code</div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" class="">

                                                            <div class="form-group">
                                                                <label>Current Code Status</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon">
                                                                        <i class="fa fa-user"></i>
                                                                    </div>
                                                                    <input type="text" id="code" name=""
                                                                        value="<?php echo $generate['code_status']; ?>"
                                                                        class="form-control" disabled>
                                                                </div>


                                                            </div>

                                                            <div class="form-actions form-group">
                                                                <button name="activate" type="submit"
                                                                    class="btn btn-success btn-sm">Activate</button><br><br><button
                                                                    name="deactivate" type="submit"
                                                                    class="btn btn-success btn-sm">Deactivate</button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <form action="" method="post">
                                            <button name="delete" type="submit" class="btn btn-success btn-sm">Delete
                                                user</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Add Deposit History</div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">

                                            <div class="form-group">
                                                <label>Amount</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="number" min="1" step="any" id="profit" name="deamount"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Narration</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <select class="form-control form-control-line" name="demode"
                                                        required>


                                                        <option value="Credit">Credit</option>
                                                        <option value="Debit">Debit</option>
                                                        <option value="Loan">Loan</option>
                                                        <option value="Inheritance">Inheritance</option>
                                                        <option value="Zelle Transfer">POS Purchase</option>
                                                        <option value="Gas Bill">Gas bill</option>
                                                        <option value="Apple Bill">ATM Withdrawal</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Date</label>
                                                <div class="input-group">
                                                    <input type="date" name="date" class="form-control"
                                                        placeholder="dd/mm/yy" required="" value="">
                                                </div>

                                            </div>

                                            <div class="form-actions form-group">
                                                <button name="desubmit" type="submit"
                                                    class="btn btn-success btn-sm">Submit</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->