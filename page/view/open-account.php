<?php
include "../../user-area/user/dashboard/includes/connection.php";
if (isset($_POST['open_account'])) {
    $target_di = "../../user-area/user/dashboard/uploads/";
    $target_fil = $target_di . basename($_FILES["fileToUpload"]["name"]);
    $uploadO = 1;
    $imageFileTyp = strtolower(pathinfo($target_fil, PATHINFO_EXTENSION));

    $account_type = $_POST['account_type'];
    $account_number = rand(1000000000, 9999999999);
    $password = rand(10000, 99999);
    $pin = "0000";
    $online_id = rand(10000000, 99999999);
    $prefix = $_POST['prefix'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postal = $_POST['postal'];
    $country = $_POST['country'];

    $id_card_no = $_POST['id_card_no'];
    $id_card_type = $_POST['id_card_type'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $occupation = $_POST['occupation'];
    $income_source = $_POST['income_source'];
    $marital_status = $_POST['marital_status'];
    $joint_account = $_POST['joint_account'];
    $account_name = $_POST['account_name'];
    $total_balance = 0;
    $available_balance = 0;
    $credit_limit = 0;
    $created_at = date("Y/m/d h:i:sa");

    $target_dir = "uploads/";
    $passport = $_FILES['passport']['name'];
    $profilePic = $_FILES['fileToUpload']['name'];
    $target_file = $target_dir . basename($_FILES["passport"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_fil);

    move_uploaded_file($_FILES["passport"]["tmp_name"], $target_file);

    $emailcheck = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $emailcheck);
    if (mysqli_num_rows($result)) {
        exit("<script>alert('email is taken')</script>");
    } else {
        $sql = "INSERT into users (
            profilePic,
            account_type,
            account_number,
            password,
            pin,
            online_id,
            prefix,
            firstname,
            lastname,
            middlename,
            phone,
            email,
            address,
            address2,
            city,
            state,
            postal,
            country,
            passport,
            id_card_no,
            id_card_type,
            dob,
            gender,
            nationality,
            occupation,
            income_source,
            marital_status,
            joint_account,
            account_name,
            total_balance,
            available_balance,
            credit_limit,
            created_at

        )VALUES(
            '$profilePic',
            '$account_type',
            '$account_number',
            '$password',
            '$pin',
            '$online_id',
            '$prefix',
            '$firstname',
            '$lastname',
            '$middlename',
            '$phone',
            '$email',
            '$address',
            '$address2',
            '$city',
            '$state',
            '$postal',
            '$country',
            '$passport',
            '$id_card_no',
            '$id_card_type',
            '$dob',
            '$gender',
            '$nationality',
            '$occupation',
            '$income_source',
            '$marital_status',
            '$joint_account',
            '$account_name',
            '$total_balance',
            '$available_balance',
            '$credit_limit',
            '$created_at'

        )";
        $query = mysqli_query($con, $sql);

        $from = 'support@crestviewfinance.com';
        $to = $email;
        $subject = "Successfully signed up";

        $message = '<html><body>';
        $message .= '<div style="background-color: blue; color: white;"><h3 style="color: white;">Mail From support@Crest View Finance - Thanks for signing up</h3></div><div style="background-color: white; color: black;">';
        $message .= '<hr/>';
        $message .= '<img src="https://crestviewfinance.com/first.png">';
        $message .= '<h5>Note : the details in this email should not be disclosed to anyone</<h5><br>';
        $message .= '<h5>Dear<br/>';
        $message .= $firstname;

        $message .= '<h5>Here is your Online ID = ' . $online_id;
        $message .= '<br><h5>Here is your password = ' . $password;
        $message .= '<br><h5>Here is your Account Number = ' . $account_number;
        $message .= '<br><h5>Here is your transaction pin = ' . $pin;
        $message .= '<br><br> Kindly use the details to sign in, once signed in remember to change your pin and password</h5>';

        $message .= '</div><hr/>';
        $message .= '<div style="background-color: white; color: black;"><h3 style="color: black;">support@Crest View Finance<sup>TM</sup> - Phone : +1(234)294-9534</h3>';
        $message .= '</div>';
        $message .= "</body></html>";

        $headers = "From: " . $from . "\r\n";
        $headers .= "Reply-To: " . $from . "\r\n";
        $headers .= "CC: support@crestviewfinance.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        mail($to, $subject, $message, $headers);
        echo "<script>alert('You have successfully signed up, kindly check your email')</script>";
    }
}

?>


<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../../assets/css/animate.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="../../assets/css/meanmenu.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="../../assets/css/boxicons.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="../../assets/css/flaticon.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="../../assets/css/nice-select.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <!-- Owl Carousel Default CSS -->
    <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="../../assets/css/odometer.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="../../assets/css/magnific-popup.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <link href="../../assets/dashboard/icon_fonts_assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <title>Open Account - Crest View Finance</title>

    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <style>
    .credit-card-area.bg-ffffff .row {
        background-color: #4865FE;

    }

    .location-maps-image .location a::before {
        border: 5px solid #4865FE;
    }

    .fun-facts-area::before {
        background-image: url(../../assets/img/bg2.jpg);
    }

    .open-account-area::before {
        background-image: url(https://crestviewfinance.com/xassets/img/bg-2.jpg?);
        background-color: #4865ff;
    }

    .main-banner-item.banner-item-two {
        background-image: url(assets/img/main-banner/banner-bg-2.jpg.html);
    }
    </style>
</head>

<body>

    <!-- Start Preloader Area -->
    <div class="preloader bg-4865ff">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Top Header Area -->
    <div class="top-header-area bg-color">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="top-header-information">
                        <li>
                            <i class='bx bx-envelope'></i>
                            <a href="mailto:support@crestviewfinance.com">support@crestviewfinance.com</a>
                        </li>

                        <li>
                            <i class='bx bxs-phone'></i>
                            <a href="tel:+1(234)294-9534">+1(234)294-9534</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 text-right">
                    <ul class="top-header-others color-two">
                        <li>
                            <i class='bx bxs-map'></i>
                            <a href="atm-and-bank-locations.html">ATMs location</a>
                        </li>



                        <li>
                            <i class='bx bx-user'></i>
                            <a href="../../user/login.php">Sign In</a>
                        </li>
                        <li class="languages-list">
                            <div id="google_translate_element"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header Area -->

    <!-- Start Navbar Area -->
    <div class="navbar-area navbar-color-two">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="../../index.htm">
                            <img src="../../crest.png" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="../../index.htm">
                        <img src="../../crest.png" alt="image">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="../../index.htm" class="nav-link active">
                                    Home
                                </a>

                            </li>

                            <li class="nav-item">
                                <a href="credit-cards.html" class="nav-link">
                                    Credit Cards
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="open-account.php" class="nav-link">
                                    Banking
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="contacts.html" class="nav-link">
                                    Loans
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="contacts.html" class="nav-link">
                                    Contact
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="atm-and-bank-locations.html" class="nav-link">
                                    ATM and Bank Locations
                                </a>
                            </li>





                        </ul>

                        <div class="others-options d-flex align-items-center">


                            <div class="option-item">
                                <a href="open-account.php" class="default-btn">Open account</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive color-two">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>

                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">


                            <div class="option-item">
                                <a href="open-account.php" class="default-btn">Open account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->


    <section class="open-account-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Account opening form</h2>
                <p>Create your bank account by filling in this bank account registration form. All mandatory fields are
                    marked with an asterisk(*).</p>
                <p>
                <h4>IMPORTANT INFORMATION FOR OPENING A NEW ACCOUNT</h4>
                To help fight the funding of terrorism and money laundering activities, federal law requires all
                financial institutions to collect, validate, and record information that identifies each person who
                opens an account.


            </div>

            <div class="open-account-form">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Profile Picture</label>
                            <input type="file" name="fileToUpload" id="fileToUpload" required>
                        </div>
                        <div class="form-group col-12">
                            <label>Account Type<span class="text-danger">*</span></label>
                            <select class="form-control" name="account_type" required="">

                                <option value="Savings Account"> Savings Account</option>


                                <option value="Business Account"> Business Account</option>


                                <option value="Joint Account"> Joint Account</option>


                                <option value="Checking Account"> Checking Account</option>
                                <option value="Investment Account"> Investment Account</option>




                            </select>
                            Please specify the type of account you want to open.
                        </div>
                        <h5 class="col-12">
                            <hr>CONTACT INFORMATION
                        </h5>

                        <h6 class="col-12 pt-3">Names<span class="text-danger">*</span></h6>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="prefix">
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Ms">Ms</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="firstname" class="form-control" placeholder="First name"
                                    required="" value="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="lastname" class="form-control" placeholder="Last name"
                                    required="" value="">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="middlename" class="form-control" placeholder="Middle name"
                                    value="">
                            </div>
                        </div>
                        <hr class="col-12">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Phone number<span class="text-danger">*</span></label>
                                <input type="text" name="phone" class="form-control" placeholder="Mobile number"
                                    required="" value="">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Email address<span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="Email address"
                                    required="" value="">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <h3>Address<span class="text-danger">*</span></h3>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control"
                                            placeholder="Street address" value="">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="address2" class="form-control"
                                            placeholder="Street address line 2 (optional)" value="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="city" class="form-control" placeholder="City"
                                            required="" value="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="state" class="form-control"
                                            placeholder="State / Province" required="" value="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="postal" class="form-control"
                                            placeholder="Postal / Zip code" required="" value="postal">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select name='country' id='cont'
                                            class='form-control form-control-line dropdown col_12_16'>
                                            <option>Select country</option>
                                            <optgroup label='Top Countries'>
                                                <option value='US'>United States</option>
                                                <option value='CA'>Canada</option>
                                                <option value='GB'>United Kingdom</option>
                                            </optgroup>
                                            <optgroup label='All Countries'>
                                                <option value='AF'>Afghanistan</option>
                                                <option value='AL'>Albania</option>
                                                <option value='DZ'>Algeria</option>
                                                <option value='AD'>Andorra</option>
                                                <option value='AO'>Angola</option>
                                                <option value='AI'>Anguilla</option>
                                                <option value='AQ'>Antarctica</option>
                                                <option value='AG'>Antigua and Barbuda</option>
                                                <option value='AR'>Argentina</option>
                                                <option value='AM'>Armenia</option>
                                                <option value='AW'>Aruba</option>
                                                <option value='AU'>Australia</option>
                                                <option value='AT'>Austria</option>
                                                <option value='AZ'>Azerbaijan</option>
                                                <option value='BS'>Bahamas</option>
                                                <option value='BH'>Bahrain</option>
                                                <option value='BD'>Bangladesh</option>
                                                <option value='BB'>Barbados</option>
                                                <option value='BY'>Belarus</option>
                                                <option value='BE'>Belgium</option>
                                                <option value='BZ'>Belize</option>
                                                <option value='BJ'>Benin</option>
                                                <option value='BM'>Bermuda</option>
                                                <option value='BT'>Bhutan</option>
                                                <option value='BO'>Bolivia</option>
                                                <option value='BA'>Bosnia and Herzegovina</option>
                                                <option value='BW'>Botswana</option>
                                                <option value='BR'>Brazil</option>
                                                <option value='IO'>British Indian Ocean</option>
                                                <option value='BN'>Brunei</option>
                                                <option value='BG'>Bulgaria</option>
                                                <option value='BF'>Burkina Faso</option>
                                                <option value='BI'>Burundi</option>
                                                <option value='KH'>Cambodia</option>
                                                <option value='CM'>Cameroon</option>
                                                <option value='CA'>Canada</option>
                                                <option value='CV'>Cape Verde</option>
                                                <option value='KY'>Cayman Islands</option>
                                                <option value='CF'>Central African Republic</option>
                                                <option value='TD'>Chad</option>
                                                <option value='CL'>Chile</option>
                                                <option value='CN'>China</option>
                                                <option value='CX'>Christmas Island</option>
                                                <option value='CC'>Cocos (Keeling) Islands</option>
                                                <option value='CO'>Colombia</option>
                                                <option value='KM'>Comoros</option>
                                                <option value='CD'>Congo, Democratic Republic of the</option>
                                                <option value='CG'>Congo, Republic of the</option>
                                                <option value='CK'>Cook Islands</option>
                                                <option value='CR'>Costa Rica</option>
                                                <option value='HR'>Croatia</option>
                                                <option value='CY'>Cyprus</option>
                                                <option value='CZ'>Czech Republic</option>
                                                <option value='DK'>Denmark</option>
                                                <option value='DJ'>Djibouti</option>
                                                <option value='DM'>Dominica</option>
                                                <option value='DO'>Dominican Republic</option>
                                                <option value='TL'>East Timor</option>
                                                <option value='EC'>Ecuador</option>
                                                <option value='EG'>Egypt</option>
                                                <option value='SV'>El Salvador</option>
                                                <option value='GQ'>Equatorial Guinea</option>
                                                <option value='ER'>Eritrea</option>
                                                <option value='EE'>Estonia</option>
                                                <option value='ET'>Ethiopia</option>
                                                <option value='FK'>Falkland Islands (Malvinas)</option>
                                                <option value='FO'>Faroe Islands</option>
                                                <option value='FJ'>Fiji</option>
                                                <option value='FI'>Finland</option>
                                                <option value='FR'>France</option>
                                                <option value='GF'>French Guiana</option>
                                                <option value='PF'>French Polynesia</option>
                                                <option value='GA'>Gabon</option>
                                                <option value='GM'>Gambia</option>
                                                <option value='GE'>Georgia</option>
                                                <option value='DE'>Germany</option>
                                                <option value='GH'>Ghana</option>
                                                <option value='GI'>Gibraltar</option>
                                                <option value='GR'>Greece</option>
                                                <option value='GL'>Greenland</option>
                                                <option value='GD'>Grenada</option>
                                                <option value='GP'>Guadeloupe</option>
                                                <option value='GT'>Guatemala</option>
                                                <option value='GN'>Guinea</option>
                                                <option value='GW'>Guinea-Bissau</option>
                                                <option value='GY'>Guyana</option>
                                                <option value='HT'>Haiti</option>
                                                <option value='HN'>Honduras</option>
                                                <option value='HK'>Hong Kong</option>
                                                <option value='HU'>Hungary</option>
                                                <option value='IS'>Iceland</option>
                                                <option value='IN'>India</option>
                                                <option value='ID'>Indonesia</option>
                                                <option value='IE'>Ireland</option>
                                                <option value='IL'>Israel</option>
                                                <option value='IT'>Italy</option>
                                                <option value='CI'>Ivory Coast</option>
                                                <option value='JM'>Jamaica</option>
                                                <option value='JP'>Japan</option>
                                                <option value='JO'>Jordan</option>
                                                <option value='KZ'>Kazakhstan</option>
                                                <option value='KE'>Kenya</option>
                                                <option value='KI'>Kiribati</option>
                                                <option value='KR'>Korea, South</option>
                                                <option value='KW'>Kuwait</option>
                                                <option value='KG'>Kyrgyzstan</option>
                                                <option value='LA'>Laos</option>
                                                <option value='LV'>Latvia</option>
                                                <option value='LB'>Lebanon</option>
                                                <option value='LS'>Lesotho</option>
                                                <option value='LI'>Liechtenstein</option>
                                                <option value='LT'>Lithuania</option>
                                                <option value='LU'>Luxembourg</option>
                                                <option value='MO'>Macau</option>
                                                <option value='MK'>Macedonia, Republic of</option>
                                                <option value='MG'>Madagascar</option>
                                                <option value='MW'>Malawi</option>
                                                <option value='MY'>Malaysia</option>
                                                <option value='MV'>Maldives</option>
                                                <option value='ML'>Mali</option>
                                                <option value='MT'>Malta</option>
                                                <option value='MH'>Marshall Islands</option>
                                                <option value='MQ'>Martinique</option>
                                                <option value='MR'>Mauritania</option>
                                                <option value='MU'>Mauritius</option>
                                                <option value='YT'>Mayotte</option>
                                                <option value='MX'>Mexico</option>
                                                <option value='FM'>Micronesia</option>
                                                <option value='MD'>Moldova</option>
                                                <option value='MC'>Monaco</option>
                                                <option value='MN'>Mongolia</option>
                                                <option value='ME'>Montenegro</option>
                                                <option value='MS'>Montserrat</option>
                                                <option value='MA'>Morocco</option>
                                                <option value='MZ'>Mozambique</option>
                                                <option value='NA'>Namibia</option>
                                                <option value='NR'>Nauru</option>
                                                <option value='NP'>Nepal</option>
                                                <option value='NL'>Netherlands</option>
                                                <option value='AN'>Netherlands Antilles</option>
                                                <option value='NC'>New Caledonia</option>
                                                <option value='NZ'>New Zealand</option>
                                                <option value='NI'>Nicaragua</option>
                                                <option value='NE'>Niger</option>
                                                <option value='NG'>Nigeria</option>
                                                <option value='NU'>Niue</option>
                                                <option value='NF'>Norfolk Island</option>
                                                <option value='NO'>Norway</option>
                                                <option value='OM'>Oman</option>
                                                <option value='PK'>Pakistan</option>
                                                <option value='PS'>Palestinian Territory</option>
                                                <option value='PA'>Panama</option>
                                                <option value='PG'>Papua New Guinea</option>
                                                <option value='PY'>Paraguay</option>
                                                <option value='PE'>Peru</option>
                                                <option value='PH'>Philippines</option>
                                                <option value='PN'>Pitcairn Island</option>
                                                <option value='PL'>Poland</option>
                                                <option value='PT'>Portugal</option>
                                                <option value='QA'>Qatar</option>
                                                <option value='RE'>R&eacute;union</option>
                                                <option value='RO'>Romania</option>
                                                <option value='RU'>Russia</option>
                                                <option value='RW'>Rwanda</option>
                                                <option value='SH'>Saint Helena</option>
                                                <option value='KN'>Saint Kitts and Nevis</option>
                                                <option value='LC'>Saint Lucia</option>
                                                <option value='PM'>Saint Pierre and Miquelon</option>
                                                <option value='VC'>Saint Vincent and the Grenadines</option>
                                                <option value='WS'>Samoa</option>
                                                <option value='SM'>San Marino</option>
                                                <option value='ST'>S&atilde;o Tome and Principe</option>
                                                <option value='SA'>Saudi Arabia</option>
                                                <option value='SN'>Senegal</option>
                                                <option value='RS'>Serbia</option>
                                                <option value='CS'>Serbia and Montenegro</option>
                                                <option value='SC'>Seychelles</option>
                                                <option value='SL'>Sierra Leon</option>
                                                <option value='SG'>Singapore</option>
                                                <option value='SK'>Slovakia</option>
                                                <option value='SI'>Slovenia</option>
                                                <option value='SB'>Solomon Islands</option>
                                                <option value='SO'>Somalia</option>
                                                <option value='ZA'>South Africa</option>
                                                <option value='GS'>South Georgia and the South Sandwich Islands</option>
                                                <option value='ES'>Spain</option>
                                                <option value='LK'>Sri Lanka</option>
                                                <option value='SR'>Suriname</option>
                                                <option value='SJ'>Svalbard and Jan Mayen</option>
                                                <option value='SZ'>Swaziland</option>
                                                <option value='SE'>Sweden</option>
                                                <option value='CH'>Switzerland</option>
                                                <option value='TW'>Taiwan</option>
                                                <option value='TJ'>Tajikistan</option>
                                                <option value='TZ'>Tanzania</option>
                                                <option value='TH'>Thailand</option>
                                                <option value='TG'>Togo</option>
                                                <option value='TK'>Tokelau</option>
                                                <option value='TO'>Tonga</option>
                                                <option value='TT'>Trinidad and Tobago</option>
                                                <option value='TN'>Tunisia</option>
                                                <option value='TR'>Turkey</option>
                                                <option value='TM'>Turkmenistan</option>
                                                <option value='TC'>Turks and Caicos Islands</option>
                                                <option value='TV'>Tuvalu</option>
                                                <option value='UG'>Uganda</option>
                                                <option value='UA'>Ukraine</option>
                                                <option value='AE'>United Arab Emirates</option>
                                                <option value='GB'>United Kingdom</option>
                                                <option value='US'>United States</option>
                                                <option value='UM'>United States Minor Outlying Islands</option>
                                                <option value='UY'>Uruguay</option>
                                                <option value='UZ'>Uzbekistan</option>
                                                <option value='VU'>Vanuatu</option>
                                                <option value='VA'>Vatican City</option>
                                                <option value='VE'>Venezuela</option>
                                                <option value='VN'>Vietnam</option>
                                                <option value='VG'>Virgin Islands, British</option>
                                                <option value='WF'>Wallis and Futuna</option>
                                                <option value='EH'>Western Sahara</option>
                                                <option value='YE'>Yemen</option>
                                                <option value='ZM'>Zambia</option>
                                                <option value='ZW'>Zimbabwe</option>
                                            </optgroup>
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <h5 class="col-12">
                            <hr> IDENTIFICATION
                        </h5>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Passport<span class="text-danger">*</span><small>- please upload a photo of
                                        yourself </small></label>
                                <input type="file" name="passport" class="form-control" required="">

                            </div>
                        </div>
                        <div class="col-col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>ID Card Number<span class="text-danger">*</span></label>
                                <input type="text" name="id_card_no" class="form-control"
                                    placeholder="Identity card number" required="" value="">
                            </div>
                        </div>
                        <div class="col-col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>ID Card Type<span class="text-danger">*</span></label>
                                <select name="id_card_type" required="">
                                    <option value="Passport"> Passport</option>
                                    <option value="National ID">National ID</option>
                                    <option value="Driver License">Driver License </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Date of birth<span class="text-danger">*</span></label>
                                <input type="date" name="dob" class="form-control" placeholder="dd/mm/yy" required=""
                                    value="">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Gender<span class="text-danger">*</span></label>
                                <select name="gender" required="">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>



                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Nationality</label>
                                <input type="text" name="nationality" class="form-control" placeholder="Nationality"
                                    required="" value="">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Occupation<span class="text-danger">*</span></label>
                                <input type="text" name="occupation" class="form-control" placeholder="Occupation"
                                    value="">
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Sources of income</label>
                                <input type="text" name="income_source" class="form-control"
                                    placeholder="Sources of income" value="">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Marital status<span class="text-danger">*</span></label>
                                <select name="marital_status" required="">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                </select>

                            </div>
                        </div>
                        <h5 class="col-12">
                            <hr>JOINT ACCOUNT
                        </h5>
                        <div class="col-12">
                            <div class="form-group">
                                <p>Are you applying for a joint account?<span class="text-danger">*</span></p>

                                <label class="radio-inline"><input value="1" type="radio" name="joint_account"
                                        id="joint_account_radio" onclick="jacct()"> Yes</label>
                                <label class="radio-inline"><input type="radio" name="joint_account"
                                        id="joint_account_radio" onclick="jacct()"> No</label>
                            </div>
                        </div>
                        <div class="col-12 form-group" id="joint_account" style="display:none; ">
                            <label>Account Name<span class="text-danger">*</span></label>
                            <input type="text" name="account_name" class="form-control" value="">
                        </div>

                        <h5 class="col-12">
                            <hr>HUMAN VERIFICATION
                        </h5>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Re-enter your email address<span class="text-danger">*</span></label>
                                <input type="text" name="captcha" class="form-control" required="">
                            </div>
                        </div>

                        <h5 class="col-12" class="text-uppercase">
                            <hr>Terms & Conditions
                        </h5>
                        <div class="col-12">
                            <div class="form-group">
                                <p>By completing this account registration form, you agree to the terms and conditions
                                    that govern your account and your relationship with the bank.

                                    Please check the box below to confirm agreement before sending the bank account
                                    registration information.</p>

                                <label class="radio-inline"><input value="1" type="checkbox" name="terms" required=""> I
                                    agree to the <a href="terms.html" target="_blank">terms</a> of service</label>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="banner-form-btn">
                                <button name="open_account" type="submit" class="default-btn">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Start Footer Area -->
    <section class="footer-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="footer-logo">
                            <h2><a href="../../index.htm">Crest View Finance</a></h2>

                            <p>Crest View Finance Online is an online bank platform operating in Wales , UK.</p>

                            <ul class="social">
                                <li>
                                    <a href="" class="facebook" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="../../send.html?phone=" class="twitter" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="../../index-1.htm" class="pinterest" target="_blank">
                                        <i class='bx bxl-whatsapp'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="linkedin" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Contact</h3>

                        <ul class="footer-contact-info">
                            <li>
                                <i class='bx bxs-phone'></i>
                                <span>Phone</span>
                                <a href="tel:+1(234)294-9534">+1(234)294-9534</a>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <span>Email</span>
                                <a href="mailto:support@crestviewfinance.com">support@crestviewfinance.com</a>
                            </li>
                            <li>
                                <i class='bx bx-map'></i>
                                <span>Address</span>
                                New York, United States
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget pl-5">
                        <h3>Services</h3>

                        <ul class="quick-links">

                            <li>
                                <a href="credit-cards.html">Credit cards</a>
                            </li>
                            <li>
                                <a href="contacts.html">Loans</a>
                            </li>

                            <li>
                                <a href="../../user/login.php">Online banking</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Help & guidance</h3>

                        <ul class="quick-links">

                            <li>
                                <a href="faq.html">Online banking help</a>
                            </li>
                            <li>
                                <a href="page/view/contacts.html">Help centre</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Footer Area -->

    <!-- Start Copy Right Area -->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    <i class='bx bx-copyright'></i>
                    © 2021. All rights reserved by Crest View Finance
                </p>
            </div>
        </div>
    </div>
    <!-- End Copy Right Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class='bx bx-up-arrow-alt'></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Jquery Slim JS -->
    <script src="../../assets/js/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="../../assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../../assets/js/bootstrap.min.js"></script>
    <!-- Meanmenu JS -->
    <script src="../../assets/js/jquery.meanmenu.js"></script>
    <!-- Nice Select JS -->
    <script src="../../assets/js/jquery.nice-select.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="../../assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Odometer JS -->
    <script src="../../assets/js/odometer.min.js"></script>
    <!-- Jquery Appear JS -->
    <script src="../../assets/js/jquery.appear.min.js"></script>
    <!-- Ajaxchimp JS -->
    <script src="../../assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Form Validator JS -->
    <script src="../../assets/js/form-validator.min.js"></script>
    <!-- Contact JS -->
    <script src="../../assets/js/contact-form-script.js"></script>
    <!-- Wow JS -->
    <script src="../../assets/js/wow.min.js"></script>
    <!-- Custom JS -->
    <script src="../../assets/js/main.js"></script>
    <script type="text/javascript">
    function jacct() {
        var jAcct = $("input[id='joint_account_radio']:checked").length > 0;
        if (jAcct) {
            var jAcctV = $("input[id='joint_account_radio']:checked").val();
            if (jAcctV == 1) {
                $('#joint_account').show();
            } else {
                $('#joint_account').hide();
            }
        }

    }
    </script>
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
    </script>

    <script type="text/javascript" src="../../translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script src="//code.tidio.co/efkhimfwpfr5zpbldcx6na4c74r7b3jr.js" async></script>
</body>

</html>