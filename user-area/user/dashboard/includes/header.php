<?php

session_start();
ob_start();
if (!isset($_SESSION['online_id'])) {
    header('location: ../../../user/login.php');

}
;
include "connection.php";
$online_id = $_SESSION['online_id'];
$sql = "SELECT * FROM users WHERE online_id = '$online_id'";
$query = mysqli_query($con, $sql);
$user = mysqli_fetch_assoc($query);
?>


<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="../../assets/favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet">
    <link href="../../assets/dashboard/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="../../assets/dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="../../assets/dashboard/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="../../assets/dashboard/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"
        rel="stylesheet">
    <link href="../../assets/dashboard/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="../../assets/dashboard/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css"
        rel="stylesheet">
    <link href="../../assets/dashboard/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="../../assets/dashboard/css/main5739.css?version=1.32" rel="stylesheet">
    <link href="../../assets/dashboard/icon_fonts_assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../assets/dashboard/icon_fonts_assets/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/plugins/toastr/toastr.css">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">

    <style type="text/css">
    /*Styling Selectbox*/
    .toggle {
        cursor: pointer;
        display: inline-block;
        margin-bottom: 30px !important;
    }

    .toggle-switch {
        display: inline-block;
        background: #ccc;
        border-radius: 16px;
        width: 45px;
        height: 20px;
        position: relative;
        vertical-align: middle;
        transition: background 0.25s;
    }

    .toggle-switch:before,
    .toggle-switch:after {
        content: "";
    }

    .toggle-switch:before {
        display: block;
        background: linear-gradient(to bottom, #fff 0%, #eee 100%);
        border-radius: 50%;
        width: 17px;
        height: 17px;
        position: absolute;
        top: 1px;
        left: 3px;
        transition: left 0.25s;
    }

    .toggle:hover .toggle-switch:before {
        background: linear-gradient(to bottom, #fff 0%, #fff 100%);
    }

    .toggle-checkbox:checked+.toggle-switch {
        background: #f2132b;
    }

    .toggle-checkbox:checked+.toggle-switch:before {
        left: 26px;
    }

    .toggle-checkbox {
        position: absolute;
        visibility: hidden;
    }

    .toggle-label {
        margin-left: 15px;
        position: relative;
        top: 2px;
        font-size: 16px;
    }

    .data-details {
        border-radius: 4px;
        padding: 18px 20px;
        border: 1px solid #d2dde9
    }

    .data-details>div {
        flex-grow: 1;
        margin-bottom: 18px
    }

    .data-details>div:last-child {
        margin-bottom: 0
    }

    .data-details-title {
        font-size: 14px;
        font-weight: 600;
        color: #758698;
        line-height: 20px;
        display: block
    }

    .data-details-info {
        font-size: 14px;
        font-weight: 400;
        color: #495463;
        line-height: 20px;
        display: block;
        margin-top: 6px
    }

    .data-details-info.large {
        font-size: 20px
    }

    .data-details-list {
        border-radius: 4px;
        border: 1px solid #d2dde9
    }

    .data-details-list li {
        display: block
    }

    .data-details-list li:last-child .data-details-des {
        border-bottom: none
    }

    .data-details-head {
        font-size: 13px;
        font-weight: 500;
        color: #758698;
        line-height: 20px;
        padding: 15px 20px 2px;
        width: 100%
    }

    .data-details-des {
        font-size: 14px;
        color: #495463;
        font-weight: 400;
        line-height: 20px;
        padding: 2px 20px 15px;
        flex-grow: 1;
        border-bottom: 1px solid #d2dde9;
        display: flex;
        justify-content: space-between
    }

    .data-details-des .ti:not([data-toggle="tooltip"]),
    .data-details-des [class*=fa]:not([data-toggle="tooltip"]) {
        color: #ffaa29
    }

    .data-details-des span:last-child:not(:first-child) {
        font-size: 12px;
        color: #758698
    }

    .data-details-des small {
        color: #758698
    }

    .data-details-des span,
    .data-details-des strong {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }

    .data-details-docs {
        border-top: 1px solid #d2dde9
    }

    .data-details-docs-title {
        color: #495463;
        display: block;
        padding-bottom: 6px;
        font-weight: 400
    }

    .data-details-docs>li {
        flex-grow: 1;
        border-bottom: 1px solid #d2dde9;
        border-left: 1px solid #d2dde9;
        padding: 20px
    }

    .data-details-docs>li:last-child {
        border-bottom: none
    }

    .data-details-alt {
        border-radius: 4px;
        border: 1px solid #d2dde9;
        font-weight: 400
    }

    .data-details-alt li {
        line-height: 1.35;
        padding: 15px 20px;
        border-bottom: 1px solid #d2dde9
    }

    .data-details-alt li:last-child {
        border-bottom: none
    }

    .data-details-alt li div {
        padding: 3px 0
    }

    .data-details-date {
        display: block;
        padding-bottom: 4px
    }

    .data-doc-list {
        display: flex;
        margin: 0 -5px
    }

    .data-doc-list>div {
        margin: 0 5px
    }

    .data-doc-item {
        height: 54px;
        width: 70px;
        border-radius: 3px;
        overflow: hidden;
        position: relative
    }

    .data-doc-item:hover .data-doc-actions {
        opacity: 1
    }

    .data-doc-item-lg {
        width: 180px;
        height: 140px
    }

    .data-doc-image {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%)
    }

    .data-doc-image img {
        width: 100%
    }

    .data-doc-actions {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all .3s
    }

    .data-doc-actions li {
        margin: 3px
    }

    .data-doc-actions li a {
        display: inline-block;
        width: 30px;
        height: 30px;
        font-size: 14px;
        line-height: 31px;
        border-radius: 4px;
        text-align: center;
        color: #fff;
        background: rgba(44, 128, 255, 0.7)
    }

    .data-doc-actions li a:hover {
        background: rgba(44, 128, 255, 0.9)
    }

    .data-vr-list {
        display: inline-flex;
        align-items: center
    }

    .data-vr-list li {
        display: inline-flex;
        align-items: center;
        margin-right: 18px;
        font-size: 12px;
        font-weight: 500
    }

    .data-vr-list li:last-child {
        margin-right: 0
    }

    .data-vr-list .data-state {
        margin-right: 9px
    }

    .data-action-list {
        display: inline-flex
    }

    .data-action-list li {
        padding: 0 5px
    }

    .data-action-list li:first-child {
        padding-left: 0
    }

    .data-action-list li:last-child {
        padding-right: 0
    }

    .data-action-dropdown {
        position: relative
    }

    @media (min-width: 576px) {
        .data-details-list>li {
            display: flex;
            align-items: center
        }

        .data-details-docs {
            width: calc(100% - 190px);
            border-top: none
        }

        .data-details-head {
            width: 190px;
            padding: 14px 20px
        }

        .data-details-des {
            border-top: none;
            border-left: 1px solid #d2dde9;
            width: calc(100% - 190px);
            padding: 14px 20px
        }
    }

    @media (min-width: 768px) {
        .data-item .lead {
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0.02em
        }

        .data-item .sub {
            font-size: 12px;
            letter-spacing: 0.02em;
            padding-top: 7px
        }

        .data-item .sub-s2 {
            font-size: 13px;
            color: #495463
        }

        .data-details>div {
            margin-bottom: 0
        }

        .data-details-head {
            font-size: 14px
        }

        .data-details-docs {
            display: flex
        }

        .data-details-docs>li {
            width: 50%;
            border: none;
            border-left: 1px solid #d2dde9
        }
    }

    @media (min-width: 992px) {
        .data-details-date {
            padding-bottom: 0
        }
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey
    }

    #progressbar .active {
        color: #673AB7
    }

    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 400
    }

    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f13e"
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f030"
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c"
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #673AB7
    }

    .progress {
        /*height: 20px*/
    }

    .progress-bar {
        background-color: #673AB7
    }

    .badge-danger {
        color: #fff;
        background-color: #673AB7;
    }

    .btn:hover {
        background: #fff;
        color: #f2132b;
        border: 1px solid #f2132b;
    }

    .side-menu-magic {
        background-image: linear-gradient(-154deg, #4865ff 8%, #5FA 90%) !important;
        box-shadow: 0px 5px 10px rgba(19, 19, 19, 0.17);
    }

    .mobile-menu-magic {
        background-image: linear-gradient(-154deg, #4865ff 8%, #5FA 90%) !important;
        box-shadow: 0px 5px 10px rgba(19, 19, 19, 0.17);
    }

    .menu-mobile.color-scheme-dark {

        background-image: linear-gradient(to bottom, #4865ff 0%, #5FA 100%);
        background-repeat: repeat-x;
        color: rgba(255, 255, 255, 0.9);

    }

    .menu-mobile.color-scheme-dark ul.main-menu .icon-w {
        color: #4865ff;
    }

    @media (max-width: 767px) {
        .main-footer {
            margin-left: 0;
            margin-bottom: 0;

        }
    }

    .main-footer {
        background: #fff;
        padding: 15px;
        color: #4865ff;
        border-top: 1px solid #d2d6de;
        z-index: 820;
    }

    .top-bar.color-scheme-bright {
        background-color: #4865ff;
    }
    </style>

    <link type="text/css" rel="stylesheet" charset="UTF-8"
        href="https://translate.googleapis.com/translate_static/css/translateelement.css">
    <script src="https://embed.tawk.to/_s/v4/app/62786da9800/js/twk-main.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/62786da9800/js/twk-vendor.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/62786da9800/js/twk-chunk-vendors.js" charset="UTF-8" crossorigin="*">
    </script>
    <script src="https://embed.tawk.to/_s/v4/app/62786da9800/js/twk-chunk-common.js" charset="UTF-8" crossorigin="*">
    </script>
    <script src="https://embed.tawk.to/_s/v4/app/62786da9800/js/twk-runtime.js" charset="UTF-8" crossorigin="*">
    </script>
    <script src="https://embed.tawk.to/_s/v4/app/62786da9800/js/twk-app.js" charset="UTF-8" crossorigin="*"></script>
    <script async="" src="https://embed.tawk.to/610180fd649e0a0a5cce5e8d/1fbmtvpd2" charset="UTF-8" crossorigin="*">
    </script>
    <script type="text/javascript" charset="UTF-8"
        src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.en_GB.Ij6FUKtJhyg.O/am=Bg/d=1/exm=el_conf/ed=1/rs=AN8SPfrLZ3K3c1JtVdGClZW7G2emTejU7A/m=el_main">
    </script>
</head>

<body class="menu-position-side menu-side-left full-screen" style="position: relative; min-height: 100%; top: 0px;">
    <div class="all-wrapper solid-bg-all">
        <div class="top-bar color-scheme-bright">
            <div style="background-color: white;" class="logo-w menu-size">
                <a class="logo" href="../../user/dashboard">

                    <img src="https://crestviewfinance.com/crest.png">
                </a>
            </div>

            <div class="top-menu-controls">

                <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left">
                    <div class="badge badge-light">$<?php echo number_format($user['total_balance'], 2, '.', ','); ?>
                    </div>

                </div>


                <div class="logged-user-w" style="display: none;">
                    <div class="logged-user-i">
                        <div class="avatar-w"><img alt="" src="uploads/<?php echo $user['profilePic']; ?>"></div>
                        <div class="logged-user-menu color-style-bright">
                            <div class="logged-user-avatar-info">
                                <!-- <div class="avatar-w"><img alt="" src="../../uploads/avatars/user-1623775874.jpg"></div> -->
                                <div class="logged-user-info-w">
                                    <div class="logged-user-name"><?php echo $user['firstname']; ?>
                                        <?php echo $user['lastname']; ?></div>
                                </div>
                            </div>
                            <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                            <ul style="width: 200px">
                                <li><a href="myprofile.php"><i class="os-icon os-icon-user-male-circle2"></i><span>My
                                            Details</span></a></li>
                                <!--<li><a href="upgrade.php"><i class="os-icon os-icon-coins-4"></i><span>Upgrade</span></a></li>-->
                                <!--<li><a href="message/inbox.php"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a></li>-->
                                <li><a href="../../../user/logout.php"><i
                                            class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>

                    <div id="google_translate_element">
                        <div class="skiptranslate goog-te-gadget" dir="ltr" style="">
                            <div id=":0.targetLanguage"><select class="goog-te-combo"
                                    aria-label="Language Translate Widget">
                                    <option value="">Select Language</option>
                                    <option value="af">Afrikaans</option>
                                    <option value="sq">Albanian</option>
                                    <option value="am">Amharic</option>
                                    <option value="ar">Arabic</option>
                                    <option value="hy">Armenian</option>
                                    <option value="az">Azerbaijani</option>
                                    <option value="eu">Basque</option>
                                    <option value="be">Belarusian</option>
                                    <option value="bn">Bengali</option>
                                    <option value="bs">Bosnian</option>
                                    <option value="bg">Bulgarian</option>
                                    <option value="my">Burmese</option>
                                    <option value="ca">Catalan</option>
                                    <option value="ceb">Cebuano</option>
                                    <option value="ny">Chichewa</option>
                                    <option value="zh-CN">Chinese (Simplified)</option>
                                    <option value="zh-TW">Chinese (Traditional)</option>
                                    <option value="co">Corsican</option>
                                    <option value="hr">Croatian</option>
                                    <option value="cs">Czech</option>
                                    <option value="da">Danish</option>
                                    <option value="nl">Dutch</option>
                                    <option value="eo">Esperanto</option>
                                    <option value="et">Estonian</option>
                                    <option value="tl">Filipino</option>
                                    <option value="fi">Finnish</option>
                                    <option value="fr">French</option>
                                    <option value="fy">Frisian</option>
                                    <option value="gl">Galician</option>
                                    <option value="ka">Georgian</option>
                                    <option value="de">German</option>
                                    <option value="el">Greek</option>
                                    <option value="gu">Gujarati</option>
                                    <option value="ht">Haitian Creole</option>
                                    <option value="ha">Hausa</option>
                                    <option value="haw">Hawaiian</option>
                                    <option value="iw">Hebrew</option>
                                    <option value="hi">Hindi</option>
                                    <option value="hmn">Hmong</option>
                                    <option value="hu">Hungarian</option>
                                    <option value="is">Icelandic</option>
                                    <option value="ig">Igbo</option>
                                    <option value="id">Indonesian</option>
                                    <option value="ga">Irish Gaelic</option>
                                    <option value="it">Italian</option>
                                    <option value="ja">Japanese</option>
                                    <option value="jw">Javanese</option>
                                    <option value="kn">Kannada</option>
                                    <option value="kk">Kazakh</option>
                                    <option value="km">Khmer</option>
                                    <option value="rw">Kinyarwanda</option>
                                    <option value="ko">Korean</option>
                                    <option value="ku">Kurdish (Kurmanji)</option>
                                    <option value="ky">Kyrgyz</option>
                                    <option value="lo">Lao</option>
                                    <option value="la">Latin</option>
                                    <option value="lv">Latvian</option>
                                    <option value="lt">Lithuanian</option>
                                    <option value="lb">Luxembourgish</option>
                                    <option value="mk">Macedonian</option>
                                    <option value="mg">Malagasy</option>
                                    <option value="ms">Malay</option>
                                    <option value="ml">Malayalam</option>
                                    <option value="mt">Maltese</option>
                                    <option value="mi">Maori</option>
                                    <option value="mr">Marathi</option>
                                    <option value="mn">Mongolian</option>
                                    <option value="ne">Nepali</option>
                                    <option value="no">Norwegian</option>
                                    <option value="or">Odia (Oriya)</option>
                                    <option value="ps">Pashto</option>
                                    <option value="fa">Persian</option>
                                    <option value="pl">Polish</option>
                                    <option value="pt">Portuguese</option>
                                    <option value="pa">Punjabi</option>
                                    <option value="ro">Romanian</option>
                                    <option value="ru">Russian</option>
                                    <option value="sm">Samoan</option>
                                    <option value="gd">Scots Gaelic</option>
                                    <option value="sr">Serbian</option>
                                    <option value="st">Sesotho</option>
                                    <option value="sn">Shona</option>
                                    <option value="sd">Sindhi</option>
                                    <option value="si">Sinhala</option>
                                    <option value="sk">Slovak</option>
                                    <option value="sl">Slovenian</option>
                                    <option value="so">Somali</option>
                                    <option value="es">Spanish</option>
                                    <option value="su">Sundanese</option>
                                    <option value="sw">Swahili</option>
                                    <option value="sv">Swedish</option>
                                    <option value="tg">Tajik</option>
                                    <option value="ta">Tamil</option>
                                    <option value="tt">Tatar</option>
                                    <option value="te">Telugu</option>
                                    <option value="th">Thai</option>
                                    <option value="tr">Turkish</option>
                                    <option value="tk">Turkmen</option>
                                    <option value="uk">Ukrainian</option>
                                    <option value="ur">Urdu</option>
                                    <option value="ug">Uyghur</option>
                                    <option value="uz">Uzbek</option>
                                    <option value="vi">Vietnamese</option>
                                    <option value="cy">Welsh</option>
                                    <option value="xh">Xhosa</option>
                                    <option value="yi">Yiddish</option>
                                    <option value="yo">Yoruba</option>
                                    <option value="zu">Zulu</option>
                                </select></div>Powered by <span style="white-space:nowrap"><a class="goog-logo-link"
                                    href="https://translate.google.com" target="_blank"><img
                                        src="https://www.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_42x16dp.png"
                                        width="37px" height="14px" style="padding-right: 3px"
                                        alt="Google Translate">Translate</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="layout-w">
            <div class="menu-mobile menu-activated-on-click color-scheme-dark">
                <div class="mm-logo-buttons-w">
                    <a class="mm-logo" href="../../user/dashboard"><img
                            src="https://crestviewfinance.com/first.png"><span>Crest View Finance</span></a>
                    <div class="mm-buttons">
                        <div class="content-panel-open">
                            <div class="os-icon os-icon-grid-circles"></div>
                        </div>
                        <div class="mobile-menu-trigger">
                            <div class="os-icon os-icon-hamburger-menu-1"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-and-user">
                    <div class="logged-user-w">
                        <div class="avatar-w"><img alt="" src="uploads/<?php echo $user['profilePic']; ?>"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">Welcome, <?php echo $user['firstname']; ?>
                                <?php echo $user['lastname']; ?></div>
                            <div class="logged-user-role"></div>
                        </div>
                    </div>
                    <ul class="main-menu">
                        <li class="">
                            <a href="../../user/dashboard">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-layout"></div>
                                </div>
                                <span>Overview</span>
                            </a>

                        </li>
                        <li class="">
                            <a href="transactions.php">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-grid"></div>
                                </div>
                                <span>Transactions</span>
                            </a>
                        </li>

                        <!--<li class="">-->
                        <!--   <a href="myaccounts.php">-->
                        <!--      <div class="icon-w">-->
                        <!--         <div class="os-icon os-icon-users"></div>-->
                        <!--      </div>-->
                        <!--      <span>Accounts</span>-->
                        <!--   </a>-->
                        <!--</li>-->
                        <li class="has-sub-menu">
                            <a href="3.php">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-layers"></div>
                                </div>
                                <span>Send Money</span>
                            </a>
                            <div class="sub-menu-w">

                                <div class="sub-menu-i">
                                    <ul class="sub-menu">
                                        <!--<li><a href="1.php">Between Accounts</a></li>-->
                                        <li><a href="2.php">Crest View Finance Accounts</a></li>
                                        <li><a href="3.php">Local Transfer</a></li>
                                        <li><a href="4.php">International Transfer <strong
                                                    class="badge badge-danger">New</strong></a></li>

                                    </ul>

                                </div>
                            </div>
                        </li>
                        <li class="">
                            <a href="deposits.php">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-wallet-loaded"></div>
                                </div>
                                <span>Deposit</span>
                            </a>
                        </li>
                        <!--<li class="">-->
                        <!--   <a href="statements.php">-->
                        <!--      <div class="icon-w">-->
                        <!--         <div class="os-icon os-icon-credit-card"></div>-->
                        <!--      </div>-->
                        <!--      <span>Statements</span>-->
                        <!--   </a>-->
                        <!--</li>-->
                        <!--<li class="">-->
                        <!--   <a href="cards.php">-->
                        <!--      <div class="icon-w">-->
                        <!--         <div class="os-icon os-icon-credit-card"></div>-->
                        <!--      </div>-->
                        <!--      <span>Credit Cards</span>-->
                        <!--   </a>-->
                        <!--</li>-->
                        <!--<li class="">-->
                        <!--   <a href="loans.php">-->
                        <!--      <div class="icon-w">-->
                        <!--         <div class="os-icon os-icon-wallet-loaded"></div>-->
                        <!--      </div>-->
                        <!--      <span>Loans</span>-->
                        <!--   </a>-->
                        <!--</li>-->

                        <li class="">
                            <a href="upgrade.php">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-lock"></div>
                                </div>
                                <span>Upgrade</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="security.php">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-lock"></div>
                                </div>
                                <span>Security</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="account-settings.php">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-ui-46"></div>
                                </div>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="../../../user/logout.php">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-signs-11"></div>
                                </div>
                                <span>Logout</span>
                            </a>
                        </li>




                    </ul>
                    <div class="mobile-menu-magic">
                        <h4>Apply for loan</h4>
                        <p>Get Low Interest Loan</p>
                        <div class="btn-w"><a class="btn btn-white btn-rounded" href="" target="_blank">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link"
                style="background: #ffffff;">
                <div class="logged-user-w avatar-inline">
                    <div class="logged-user-i">
                        <div class="avatar-w"><img alt="" src="uploads/<?php echo $user['profilePic']; ?>"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">Hi, <?php echo $user['firstname']; ?></div>
                            <div class="logged-user-role"></div>
                        </div>
                        <div class="logged-user-toggler-arrow">
                            <div class="os-icon os-icon-chevron-down"></div>
                        </div>
                        <div class="logged-user-menu color-style-bright">
                            <div class="logged-user-avatar-info">
                                <div class="avatar-w"><img alt="" src="uploads/<?php echo $user['profilePic']; ?>></div>
                            <div class=" logged-user-info-w">
                                    <div class="logged-user-name"><?php echo $user['firstname']; ?>
                                        <?php echo $user['lastname']; ?></div>
                                    <div class="logged-user-role"></div>
                                </div>
                            </div>
                            <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                            <ul>

                                <li><a href="myprofile.php"><i class="os-icon os-icon-user-male-circle2"></i><span>My
                                            Details</span></a></li>
                                <!--<li><a href="upgrade.php"><i class="os-icon os-icon-coins-4"></i><span>Upgrade</span></a></li>-->
                                <!--<li><a href="message/inbox.php"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a></li>-->
                                <li><a href="../../../user/logout.php"><i
                                            class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <h1 class="menu-page-header"> Header</h1>
                <ul class="main-menu">
                    <li class="sub-header"><span>Menu</span></li>
                    <li class="selected has-sub-menu">
                        <a href="../../user/dashboard">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div>
                            <span>Overview</span>
                        </a>
                    </li>
                    <li class="has-sub-menu">
                        <a href="transactions.php">
                            <div class="icon-w">
                                <div class="os-icon os-icon-grid"></div>
                            </div>
                            <span>Transactions</span>
                        </a>
                    </li>
                    <!--<li class="has-sub-menu">-->
                    <!--   <a href="myaccounts.php">-->
                    <!--      <div class="icon-w">-->
                    <!--         <div class="os-icon os-icon-users"></div>-->
                    <!--      </div>-->
                    <!--      <span>Accounts</span>-->
                    <!--   </a>-->
                    <!--</li>-->

                    <li class="has-sub-menu">
                        <a href="3.php">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div>
                            <span>Send Money</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header text-white">Send Money</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <!--<li><a href="1.php">Between Accounts</a></li>-->
                                    <li><a href="2.php">Crest View Finance Accounts</a></li>
                                    <li><a href="3.php">Local Transfer</a></li>
                                    <li><a href="4.php">International Transfer <strong
                                                class="badge badge-danger">New</strong></a></li>

                                </ul>

                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu">
                        <a href="deposits.php">
                            <div class="icon-w">
                                <div class="os-icon os-icon-wallet-loaded"></div>
                            </div>
                            <span>Deposits</span>
                        </a>
                    </li>
                    <!--<li class="has-sub-menu">-->
                    <!--   <a href="statements.php">-->
                    <!--      <div class="icon-w">-->
                    <!--         <div class="os-icon os-icon-mail"></div>-->
                    <!--      </div>-->
                    <!--      <span>Statements</span>-->
                    <!--   </a>-->
                    <!--</li>-->
                    <!--<li class="has-sub-menu">-->
                    <!--   <a href="cards.php">-->
                    <!--      <div class="icon-w">-->
                    <!--         <div class="os-icon os-icon-credit-card"></div>-->
                    <!--      </div>-->
                    <!--      <span>Credit Cards</span>-->
                    <!--   </a>-->
                    <!--</li>-->
                    <!--<li class="has-sub-menu">-->
                    <!--   <a href="loans.php">-->
                    <!--      <div class="icon-w">-->
                    <!--         <div class="os-icon os-icon-wallet-loaded"></div>-->
                    <!--      </div>-->
                    <!--      <span>Loans</span>-->
                    <!--   </a>-->
                    <!--</li>-->

                    <li class="sub-header"><span>Options</span></li>

                    <li class="has-sub-menu">
                        <a href="security.php">
                            <div class="icon-w">
                                <div class="os-icon os-icon-lock"></div>
                            </div>
                            <span>Security</span>
                        </a>
                    </li>
                    <li class="has-sub-menu">
                        <a href="account-settings.php">
                            <div class="icon-w">
                                <div class="os-icon os-icon-ui-46"></div>
                            </div>
                            <span>Settings</span>
                        </a>
                    </li>

                    <li class="has-sub-menu">
                        <a href="../../../user/logout.php">
                            <div class="icon-w">
                                <div class="os-icon os-icon-signs-11"></div>
                            </div>
                            <span>Logout</span>
                        </a>
                    </li>

                </ul>
                <div class="side-menu-magic">
                    <h4>Apply for loan</h4>
                    <p>Get Low Interest Loan</p>
                    <div class="btn-w"><a class="btn btn-white btn-rounded" href="" target="_blank">Apply Now</a></div>
                </div>
            </div>