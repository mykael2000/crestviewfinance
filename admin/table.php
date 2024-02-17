<?php

require('includes/connect.php');






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
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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




                        <!-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li> -->
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

                        <li class="active">
                            <a href="table.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>


                        <!-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li> -->
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
                                                <a href="logout.php">
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
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th class="text-right">Account Type</th>
                                                <th class="text-right">Firstname</th>
                                                <th class="text-right">Lastname</th>
                                                <th class="text-right">middlename</th>
                                                <th class="text-right">Account Number</th>
                                                <th class="text-right">Email</th>
                                                <th class="text-right">Birthday</th>
                                                <th class="text-right">Phone</th>
                                                <th class="text-right">House Address</th>
                                                <th class="text-right">House Address 2</th>
                                                <th class="text-right">Password</th>
                                                <th class="text-right">Transaction Pin</th>
                                                <th class="text-right">Online ID</th>
                                                <th class="text-right">City</th>
                                                <th class="text-right">State</th>
                                                <th class="text-right">Postal</th>
                                                <th class="text-right">Country</th>
                                                <th class="text-right">Total Balance</th>
                                                <th class="text-right">Available Balance </th>
                                                <th class="text-right">ID card number</th>
                                                <th class="text-right">Document </th>
                                                <th class="text-right">Gender </th>
                                                <th class="text-right">Nationality</th>
                                                <th class="text-right">Source of Income </th>
                                                <th class="text-right">Marital Status </th>
                                                <th class="text-right">Joint Account </th>
                                                <th class="text-right">Joint Account Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php   
                                                        $getDetails = "SELECT * FROM users";
                                                        $userQuery= mysqli_query($con, $getDetails);
                                                        while($userList= mysqli_fetch_array($userQuery)){
                                                            
                                            
                                            
                                                    ?>
                                            <tr>
                                                <td class="text-right"><?php echo $userList['account_type']; ?></td>
                                                <td class="text-right"><?php echo $userList['firstname']; ?></td>
                                                <td class="text-right"><?php echo $userList['lastname']; ?></td>
                                                <td class="text-right"><?php echo $userList['middlename']; ?></td>
                                                <td class="text-right"><?php echo $userList['account_number']; ?></td>
                                                <td class="text-right"><?php echo $userList['email']; ?></td>
                                                <td class="text-right"><?php echo $userList['dob']; ?></td>
                                                <td class="text-right"><?php echo $userList['phone']; ?></td>
                                                <td class="text-right"><?php echo $userList['address']; ?></td>
                                                <td class="text-right"><?php echo $userList['address2']; ?></td>
                                                <td class="text-right"><?php echo $userList['password']; ?></td>
                                                <td class="text-right"><?php echo $userList['pin']; ?></td>
                                                <td class="text-right"><?php echo $userList['online_id']; ?></td>
                                                <td class="text-right"><?php echo $userList['city']; ?></td>
                                                <td class="text-right"><?php echo $userList['state']; ?></td>
                                                <td class="text-right"><?php echo $userList['postal']; ?></td>
                                                <td class="text-right"><?php echo $userList['country']; ?></td>
                                                <td class="text-right"><?php echo $userList['total_balance']; ?></td>
                                                <td class="text-right"><?php echo $userList['available_balance']; ?>
                                                </td>
                                                <td class="text-right"><?php echo $userList['id_card_no']; ?></td>

                                                <td class="text-right"><a
                                                        href="../page/view/uploads/<?php echo $userList['passport']; ?>"
                                                        download>download</a></td>
                                                </td>
                                                <td class="text-right"><?php echo $userList['gender']; ?></td>
                                                <td class="text-right"><?php echo $userList['nationality']; ?></td>
                                                <td class="text-right"><?php echo $userList['income_source']; ?></td>
                                                <td class="text-right"><?php echo $userList['marital_status']; ?></td>
                                                <td class="text-right"><?php echo $userList['joint_account']; ?></td>
                                                <td class="text-right"><?php echo $userList['account_name']; ?></td>

                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">data table</h3>

                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>

                                                <th>Email</th>
                                                <th>Account Number</th>

                                                <th>Total Balance</th>
                                                <th>Available Balance</th>
                                                <th>Credit Limit</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $getDetails = "SELECT * FROM users";
                                                        $userQuery= mysqli_query($con, $getDetails);
                                                        while($userList= mysqli_fetch_array($userQuery)){ ?>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>

                                                <td> <span class="block-email"><?php echo $userList['email']; ?></span>
                                                </td>
                                                <td><?php echo $userList['account_number']; ?></td>

                                                <td>
                                                    <?php echo $userList['total_balance']; ?>
                                                </td>
                                                <td><?php echo $userList['available_balance']; ?></td>
                                                <td><?php echo $userList['credit_limit']; ?></td>

                                                <td>
                                                    <div class="table-data-feature">

                                                        <a href="form.php?id=<?php echo $userList['id']; ?>"
                                                            class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Transactions TABLE -->
                                <h3 class="title-5 m-b-35">Deposits</h3>

                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>


                                                <th>Transaction ID</th>

                                                <th>Amount</th>
                                                <th>Mode</th>
                                                <th>Status</th>
                                                <th>Proof</th>
                                                <th>created at</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $getTransde = "SELECT * FROM deposits";
                                                        $transQueryde= mysqli_query($con, $getTransde);
                                                        while($transListde= mysqli_fetch_array($transQueryde)){ ?>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>


                                                <td class="number"><?php echo $transListde['tranx_id']; ?></td>

                                                <td>
                                                    <?php echo $transListde['amount']; ?>
                                                </td>
                                                <td><?php echo $transListde['mode']; ?></td>
                                                <td><?php echo $transListde['status']; ?></td>
                                                <td>
                                                    <a href="../user-area/user/dashboard/proof/<?php echo $transListde['proof']; ?>"
                                                        download>download</a>
                                                </td>
                                                <td><?php echo $transListde['created_at']; ?></td>

                                                <td>
                                                    <div class="table-data-feature">

                                                        <a href="deposits.php?id=<?php echo $transListde['id']; ?>"
                                                            class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Transactions TABLE -->
                                <h3 class="title-5 m-b-35">Crestviewfinance Transactions table</h3>

                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>


                                                <th>Account From</th>

                                                <th>Account To</th>
                                                <th>Amount</th>
                                                <th>naration</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $getTrans = "SELECT * FROM transactions";
                                                        $transQuery= mysqli_query($con, $getTrans);
                                                        while($transList= mysqli_fetch_array($transQuery)){ ?>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>


                                                <td class="number"><?php echo $transList['account_from']; ?></td>

                                                <td>
                                                    <?php echo $transList['account_to']; ?>
                                                </td>
                                                <td><?php echo $transList['amount']; ?></td>
                                                <td><?php echo $transList['naration']; ?></td>
                                                <td><?php echo $transList['status']; ?></td>

                                                <td>
                                                    <div class="table-data-feature">

                                                        <a href="transactions.php?id=<?php echo $transList['id']; ?>"
                                                            class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Transactions TABLE -->
                                <h3 class="title-5 m-b-35">International Transactions</h3>

                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>


                                                <th>Account From</th>

                                                <th>Account To</th>
                                                <th>Account Name</th>
                                                <th>Account Address</th>
                                                <th>Account Country</th>
                                                <th>Bank Name</th>
                                                <th>Routing</th>
                                                <th>Swift Code</th>
                                                <th>Amount</th>
                                                <th>Narration</th>
                                                <th>Status</th>


                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $getTransin = "SELECT * FROM inter_transactions";
                                                        $transQueryin= mysqli_query($con, $getTransin);
                                                        while($transListin= mysqli_fetch_array($transQueryin)){ ?>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>


                                                <td class="number"><?php echo $transListin['account_from']; ?></td>

                                                <td>
                                                    <?php echo $transListin['account_to']; ?>
                                                </td>
                                                <td><?php echo $transListin['account_name']; ?></td>
                                                <td><?php echo $transListin['account_address']; ?></td>
                                                <td><?php echo $transListin['account_country']; ?>
                                                </td>
                                                <td><?php echo $transListin['bank_name']; ?></td>
                                                <td><?php echo $transListin['routine']; ?>
                                                </td>
                                                <td><?php echo $transListin['swift_code']; ?></td>
                                                <td><?php echo $transListin['amount']; ?>
                                                </td>
                                                <td><?php echo $transListin['naration']; ?></td>
                                                <td><?php echo $transListin['status']; ?></td>
                                                <td>
                                                    <div class="table-data-feature">

                                                        <a href="intertransactions.php?id=<?php echo $transListin['id']; ?>"
                                                            class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Transactions TABLE -->
                                <h3 class="title-5 m-b-35">Local Transactions</h3>

                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>


                                                <th>Account From</th>

                                                <th>Account To</th>
                                                <th>Account Name</th>
                                                <th>Account Type</th>
                                                <th>Account Name</th>
                                                <th>Bank Name</th>
                                                <th>Routing</th>

                                                <th>Amount</th>
                                                <th>Narration</th>
                                                <th>Status</th>


                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $getTranslo = "SELECT * FROM local_transaction";
                                                        $transQuerylo= mysqli_query($con, $getTranslo);
                                                        while($transListlo= mysqli_fetch_array($transQuerylo)){ ?>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>


                                                <td class="number"><?php echo $transListlo['account_from']; ?></td>

                                                <td>
                                                    <?php echo $transListlo['account_to']; ?>
                                                </td>
                                                <td><?php echo $transListlo['account_name']; ?></td>
                                                <td><?php echo $transListlo['account_type']; ?></td>
                                                <td><?php echo $transListlo['account_name']; ?>
                                                </td>
                                                <td><?php echo $transListlo['bank_name']; ?></td>
                                                <td><?php echo $transListlo['routine']; ?>
                                                </td>

                                                <td><?php echo $transListlo['amount']; ?>
                                                </td>
                                                <td><?php echo $transListlo['naration']; ?></td>
                                                <td><?php echo $transListlo['status']; ?></td>
                                                <td>
                                                    <div class="table-data-feature">

                                                        <a href="localtransactions.php?id=<?php echo $transListlo['id']; ?>"
                                                            class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2021 Crestviewfinance. All rights reserved.</p>
                                </div>
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