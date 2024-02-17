

 <!DOCTYPE html>
<html lang="en">

    <head>
      <title>Mailbox</title>
      <meta charset="utf-8">
      <meta content="ie=edge" http-equiv="x-ua-compatible">
      <meta content="width=device-width,initial-scale=1" name="viewport">
      <link href="https://swissholdingbank.com/assets/favicon.png" rel="shortcut icon">
      <link href="apple-touch-icon.png" rel="apple-touch-icon">
      <link href="https://fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet">
      <link href="https://swissholdingbank.com/assets/dashboard/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
      <link href="https://swissholdingbank.com/assets/dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
      <link href="https://swissholdingbank.com/assets/dashboard/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
      <link href="https://swissholdingbank.com/assets/dashboard/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
      <link href="https://swissholdingbank.com/assets/dashboard/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
      <link href="https://swissholdingbank.com/assets/dashboard/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
      <link href="https://swissholdingbank.com/assets/dashboard/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
      <link href="https://swissholdingbank.com/assets/dashboard/css/main5739.css?version=1.32" rel="stylesheet">
      <link href="https://swissholdingbank.com/assets/dashboard/icon_fonts_assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="https://swissholdingbank.com/assets/dashboard/icon_fonts_assets/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
      <link rel="stylesheet" href="https://swissholdingbank.com/assets/plugins/toastr/toastr.css">
      <link rel="icon" type="image/png" href="https://swissholdingbank.com/assets/img/favicon.png">
      
      <style type="text/css">
        /*Styling Selectbox*/
        .toggle {
          cursor: pointer;
          display: inline-block;
          margin-bottom: 30px !important; }

        .toggle-switch {
          display: inline-block;
          background: #ccc;
          border-radius: 16px;
          width: 45px;
          height: 20px;
          position: relative;
          vertical-align: middle;
          transition: background 0.25s; }
          .toggle-switch:before, .toggle-switch:after {
            content: ""; }
          .toggle-switch:before {
            display: block;
            background: linear-gradient(to bottom, #fff 0%, #eee 100%);
            border-radius: 50%;
            width: 17px;
            height: 17px;
            position: absolute;
            top: 1px;
            left: 3px;
            transition: left 0.25s; }
          .toggle:hover .toggle-switch:before {
            background: linear-gradient(to bottom, #fff 0%, #fff 100%); }
          .toggle-checkbox:checked + .toggle-switch {
            background: #f2132b; }
            .toggle-checkbox:checked + .toggle-switch:before {
              left: 26px; }

        .toggle-checkbox {
          position: absolute;
          visibility: hidden; }

        .toggle-label {
          margin-left: 15px;
          position: relative;
          top: 2px;
          font-size: 16px; }
          .data-details{border-radius:4px;padding:18px 20px;border:1px solid #d2dde9}.data-details>div{flex-grow:1;margin-bottom:18px}.data-details>div:last-child{margin-bottom:0}.data-details-title{font-size:14px;font-weight:600;color:#758698;line-height:20px;display:block}.data-details-info{font-size:14px;font-weight:400;color:#495463;line-height:20px;display:block;margin-top:6px}.data-details-info.large{font-size:20px}.data-details-list{border-radius:4px;border:1px solid #d2dde9}.data-details-list li{display:block}.data-details-list li:last-child .data-details-des{border-bottom:none}.data-details-head{font-size:13px;font-weight:500;color:#758698;line-height:20px;padding:15px 20px 2px;width:100%}.data-details-des{font-size:14px;color:#495463;font-weight:400;line-height:20px;padding:2px 20px 15px;flex-grow:1;border-bottom:1px solid #d2dde9;display:flex;justify-content:space-between}.data-details-des .ti:not([data-toggle="tooltip"]),.data-details-des [class*=fa]:not([data-toggle="tooltip"]){color:#ffaa29}.data-details-des span:last-child:not(:first-child){font-size:12px;color:#758698}.data-details-des small{color:#758698}.data-details-des span,.data-details-des strong{white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.data-details-docs{border-top:1px solid #d2dde9}.data-details-docs-title{color:#495463;display:block;padding-bottom:6px;font-weight:400}.data-details-docs>li{flex-grow:1;border-bottom:1px solid #d2dde9;border-left:1px solid #d2dde9;padding:20px}.data-details-docs>li:last-child{border-bottom:none}.data-details-alt{border-radius:4px;border:1px solid #d2dde9;font-weight:400}.data-details-alt li{line-height:1.35;padding:15px 20px;border-bottom:1px solid #d2dde9}.data-details-alt li:last-child{border-bottom:none}.data-details-alt li div{padding:3px 0}.data-details-date{display:block;padding-bottom:4px}.data-doc-list{display:flex;margin:0 -5px}.data-doc-list>div{margin:0 5px}.data-doc-item{height:54px;width:70px;border-radius:3px;overflow:hidden;position:relative}.data-doc-item:hover .data-doc-actions{opacity:1}.data-doc-item-lg{width:180px;height:140px}.data-doc-image{position:absolute;height:100%;width:100%;top:50%;left:50%;transform:translate(-50%, -50%)}.data-doc-image img{width:100%}.data-doc-actions{position:absolute;left:0;top:0;height:100%;width:100%;background:rgba(0,0,0,0.5);display:flex;align-items:center;justify-content:center;opacity:0;transition:all .3s}.data-doc-actions li{margin:3px}.data-doc-actions li a{display:inline-block;width:30px;height:30px;font-size:14px;line-height:31px;border-radius:4px;text-align:center;color:#fff;background:rgba(44,128,255,0.7)}.data-doc-actions li a:hover{background:rgba(44,128,255,0.9)}.data-vr-list{display:inline-flex;align-items:center}.data-vr-list li{display:inline-flex;align-items:center;margin-right:18px;font-size:12px;font-weight:500}.data-vr-list li:last-child{margin-right:0}.data-vr-list .data-state{margin-right:9px}.data-action-list{display:inline-flex}.data-action-list li{padding:0 5px}.data-action-list li:first-child{padding-left:0}.data-action-list li:last-child{padding-right:0}.data-action-dropdown{position:relative}@media (min-width: 576px){.data-details-list>li{display:flex;align-items:center}.data-details-docs{width:calc(100% - 190px);border-top:none}.data-details-head{width:190px;padding:14px 20px}.data-details-des{border-top:none;border-left:1px solid #d2dde9;width:calc(100% - 190px);padding:14px 20px}}@media (min-width: 768px){.data-item .lead{font-size:14px;font-weight:700;letter-spacing:0.02em}.data-item .sub{font-size:12px;letter-spacing:0.02em;padding-top:7px}.data-item .sub-s2{font-size:13px;color:#495463}.data-details>div{margin-bottom:0}.data-details-head{font-size:14px}.data-details-docs{display:flex}.data-details-docs>li{width:50%;border:none;border-left:1px solid #d2dde9}}@media (min-width: 992px){.data-details-date{padding-bottom:0}}
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
             background-image: linear-gradient(-154deg, #4ED198 8%, #5FA 90%) !important;
             box-shadow: 0px 5px 10px rgba(19,19,19,0.17);
         }

         .mobile-menu-magic {
             background-image: linear-gradient(-154deg, #4ED198 8%, #5FA 90%) !important;
             box-shadow: 0px 5px 10px rgba(19,19,19,0.17);
         }

         .menu-mobile.color-scheme-dark {
             
             background-image: linear-gradient(to bottom, #4ED198 0%, #5FA 100%);
             background-repeat: repeat-x;
             color: rgba(255,255,255,0.9);

         }
         .menu-mobile.color-scheme-dark ul.main-menu .icon-w {
             color: #fff;
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
             color: #455a64;
             border-top: 1px solid #d2d6de;
             z-index: 820;
         }
         
        .top-bar.color-scheme-bright {
           background-color: #4ED198;
        }
      </style>

    </head>
    <body class="menu-position-side menu-side-left full-screen">
       <div class="all-wrapper solid-bg-all">
          <div class="top-bar color-scheme-bright">
             <div class="logo-w menu-size">
                <a class="logo" href="https://swissholdingbank.com/user/dashboard">
                   <div class="logo-element"></div>
                   <div class="logo-label">Swiss Holding Bank</div>
                </a>
             </div>
             <div class="fancy-selector-w" style="display: none;">
                <div class="fancy-selector-current">
                                       <div class="fs-img"><img alt="" src="https://swissholdingbank.com/assets/dashboard/img/card3.png"></div>
                   <div class="fs-main-info">
                      <div class="fs-name">3043736201 - Savings  Account</div>
                      <div class="fs-sub"><span>Balance:</span><strong>&dollar;131,900.00</strong></div>
                   </div>
                   <div class="fs-selector-trigger"><i class="os-icon os-icon-arrow-down4"></i></div>
                                   </div>


                <div class="fancy-selector-options">
                                       <div class="fancy-selector-option">
                      <div class="fs-img"><img alt="" src="https://swissholdingbank.com/assets/dashboard/img/card3.png"></div>
                      <div class="fs-main-info">
                         <div class="fs-name">2060744657 -   Account</div>
                         <div class="fs-sub"><span>Balance:</span><strong>&dollar;23,280,000.00</strong></div>
                      </div>
                      
                   </div>
                                      <div class="fancy-selector-option">
                      <div class="fs-img"><img alt="" src="https://swissholdingbank.com/assets/dashboard/img/card3.png"></div>
                      <div class="fs-main-info">
                         <div class="fs-name">2057472610 -   Account</div>
                         <div class="fs-sub"><span>Balance:</span><strong>&dollar;5,000.00</strong></div>
                      </div>
                      
                   </div>
                                      <div class="fancy-selector-option">
                      <div class="fs-img"><img alt="" src="https://swissholdingbank.com/assets/dashboard/img/card3.png"></div>
                      <div class="fs-main-info">
                         <div class="fs-name">2061153492 -   Account</div>
                         <div class="fs-sub"><span>Balance:</span><strong>&dollar;32,737,350.00</strong></div>
                      </div>
                      
                   </div>
                                      <div class="fancy-selector-option">
                      <div class="fs-img"><img alt="" src="https://swissholdingbank.com/assets/dashboard/img/card3.png"></div>
                      <div class="fs-main-info">
                         <div class="fs-name">2041609977 -   Account</div>
                         <div class="fs-sub"><span>Balance:</span><strong>&dollar;9,943,160.00</strong></div>
                      </div>
                      
                   </div>
                                      <div class="fancy-selector-option">
                      <div class="fs-img"><img alt="" src="https://swissholdingbank.com/assets/dashboard/img/card3.png"></div>
                      <div class="fs-main-info">
                         <div class="fs-name">2080061547 -   Account</div>
                         <div class="fs-sub"><span>Balance:</span><strong>&dollar;6,566,493.50</strong></div>
                      </div>
                      
                   </div>
                                      
                   <div class="fancy-selector-actions text-right"><a class="btn btn-primary" href="#"><i class="os-icon os-icon-ui-22"></i><span>Add Account</span></a></div>
                </div>
             </div>
             <div class="top-menu-controls">
                
                <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left">
                   <div class="badge badge-light">&dollar;938,400.00</div>
                   
                </div>
                <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left">
                   <i class="os-icon os-icon-mail-14"></i>
                   <div class="new-messages-count">46</div>
                   <div class="os-dropdown light message-list">
                      <ul>
                         <li>
                            <a href="https://swissholdingbank.com/user/dashboard/message/inbox">
                               
                               <div class="message-content">
                                  <h6 class="message-from">46 New</h6>
                                  <h6 class="message-title">Notifications</h6>
                               </div>
                            </a>
                         </li>
                         
                      </ul>
                   </div>
                </div>
                
                <div class="logged-user-w" style="display: none;">
                   <div class="logged-user-i">
                      <div class="avatar-w"><img alt="" src="https://swissholdingbank.com/uploads/avatars/user-1623775874.jpg"></div>
                      <div class="logged-user-menu color-style-bright">
                         <div class="logged-user-avatar-info">
                            <!-- <div class="avatar-w"><img alt="" src="https://swissholdingbank.com/uploads/avatars/user-1623775874.jpg"></div> -->
                            <div class="logged-user-info-w">
                               <div class="logged-user-name">Admin Account</div>
                            </div>
                         </div>
                         <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                         <ul style="width: 200px">
                             <li><a href="https://swissholdingbank.com/user/dashboard/myprofile"><i class="os-icon os-icon-user-male-circle2"></i><span>My Details</span></a></li>
                            <li><a href="https://swissholdingbank.com/user/dashboard/upgrade"><i class="os-icon os-icon-coins-4"></i><span>Upgrade</span></a></li>
                            <li><a href="https://swissholdingbank.com/user/dashboard/message/inbox"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a></li>
                            <li><a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                         </ul>
                      </div>
                   </div>
                </div>
                <div>
                  
                         <div id="google_translate_element"></div>
                    
                </div>
             </div>
          </div>
          

          <div class="layout-w">
                         <div class="menu-mobile menu-activated-on-click color-scheme-dark">
                <div class="mm-logo-buttons-w">
                   <a class="mm-logo" href="https://swissholdingbank.com/user/dashboard"><img src="https://swissholdingbank.com/assets/dashboard/img/logo.png"><span>Swiss Holding Bank</span></a>
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
                      <div class="avatar-w"><img alt="" src="https://swissholdingbank.com/uploads/avatars/user-1623775874.jpg"></div>
                      <div class="logged-user-info-w">
                         <div class="logged-user-name">Welcome, Admin Account</div>
                         <div class="logged-user-role"></div>
                    </div>
                   </div>
                   <ul class="main-menu">
                      <li class="">
                         <a href="https://swissholdingbank.com/user/dashboard">
                            <div class="icon-w">
                               <div class="os-icon os-icon-layout"></div>
                            </div>
                            <span>Overview</span>
                         </a>
                         
                      </li>
                      <li class="">
                         <a href="https://swissholdingbank.com/user/dashboard/transactions">
                            <div class="icon-w">
                               <div class="os-icon os-icon-grid"></div>
                            </div>
                            <span>Transactions</span>
                         </a>
                      </li>

                      <li class="">
                         <a href="https://swissholdingbank.com/user/dashboard/myaccounts">
                            <div class="icon-w">
                               <div class="os-icon os-icon-users"></div>
                            </div>
                            <span>Accounts</span>
                         </a>
                      </li>
                      <li class="has-sub-menu">
                         <a href="https://swissholdingbank.com/user/dashboard/transfer">
                            <div class="icon-w">
                               <div class="os-icon os-icon-layers"></div>
                            </div>
                            <span>Send Money</span>
                         </a>
                         <div class="sub-menu-w">
                            
                            <div class="sub-menu-i">
                               <ul class="sub-menu">
                                  <li><a href="https://swissholdingbank.com/user/dashboard/transfer/1">Between Accounts</a></li>
                                  <li><a href="https://swissholdingbank.com/user/dashboard/transfer/2">Swiss Holding Bank Accounts</a></li>
                                  <li><a href="https://swissholdingbank.com/user/dashboard/transfer/3">Local Transfer</a></li>
                                  <li><a href="https://swissholdingbank.com/user/dashboard/transfer/4">International Transfer <strong class="badge badge-danger">New</strong></a></li>
                                 
                               </ul>
                               
                            </div>
                         </div>
                      </li>
                      <li class="">
                         <a href="https://swissholdingbank.com/user/dashboard/deposits">
                            <div class="icon-w">
                               <div class="os-icon os-icon-wallet-loaded"></div>
                            </div>
                            <span>Deposit</span>
                         </a>
                      </li>
                      <li class="">
                         <a href="https://swissholdingbank.com/user/dashboard/statements">
                            <div class="icon-w">
                               <div class="os-icon os-icon-credit-card"></div>
                            </div>
                            <span>Statements</span>
                         </a>
                      </li>
                      <li class="">
                         <a href="https://swissholdingbank.com/user/dashboard/cards">
                            <div class="icon-w">
                               <div class="os-icon os-icon-credit-card"></div>
                            </div>
                            <span>Credit Cards</span>
                         </a>
                      </li>
                      <li class="">
                         <a href="https://swissholdingbank.com/user/dashboard/loans">
                            <div class="icon-w">
                               <div class="os-icon os-icon-wallet-loaded"></div>
                            </div>
                            <span>Loans</span>
                         </a>
                      </li>
                      
                      <li class="">
                         <a href="https://swissholdingbank.com/user/dashboard/upgrade">
                            <div class="icon-w">
                               <div class="os-icon os-icon-lock"></div>
                            </div>
                            <span>Upgrade</span>
                         </a>
                      </li>
                      <li class="">
                         <a href="https://swissholdingbank.com/user/dashboard/security">
                            <div class="icon-w">
                               <div class="os-icon os-icon-lock"></div>
                            </div>
                            <span>Security</span>
                         </a>
                      </li>

                      <li class="">
                         <a href="https://swissholdingbank.com/user/dashboard/account-settings">
                            <div class="icon-w">
                               <div class="os-icon os-icon-ui-46"></div>
                            </div>
                            <span>Settings</span>
                         </a>
                      </li>
                      <li class="">
                         <a href="https://swissholdingbank.com/user/logout">
                            <div class="icon-w">
                               <div class="os-icon os-icon-signs-11"></div>
                            </div>
                            <span>Logout</span>
                         </a>
                      </li>
                                        
                       <li class="">
                          <a href="https://swissholdingbank.com/user/dashboard/admin">
                             <div class="icon-w">
                                <div class="os-icon os-icon-ui-46"></div>
                             </div>
                             <span>Admin Panel</span>
                          </a>
                       </li>
                      
                      
                   </ul>
                   <div class="mobile-menu-magic">
                      <h4>Apply for loan</h4>
                      <p>Get Low Interest Loan</p>
                      <div class="btn-w"><a class="btn btn-white btn-rounded" href="" target="_blank">Apply Now</a></div>
                   </div>
                </div>
             </div>
             <div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link" style="background: #ffffff;">
                <div class="logged-user-w avatar-inline">
                   <div class="logged-user-i">
                      <div class="avatar-w"><img alt="" src="https://swissholdingbank.com/uploads/avatars/user-1623775874.jpg"></div> 
                      <div class="logged-user-info-w">
                         <div class="logged-user-name">Hi, Admin</div>
                         <div class="logged-user-role"></div>
                      </div>
                      <div class="logged-user-toggler-arrow">
                         <div class="os-icon os-icon-chevron-down"></div>
                      </div>
                      <div class="logged-user-menu color-style-bright">
                         <div class="logged-user-avatar-info">
                            <div class="avatar-w"><img alt="" src="https://swissholdingbank.com/uploads/avatars/user-1623775874.jpg"></div> 
                            <div class="logged-user-info-w">
                               <div class="logged-user-name">Admin Account</div>
                               <div class="logged-user-role"></div>
                            </div>
                         </div>
                         <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                         <ul>
                            
                            <li><a href="https://swissholdingbank.com/user/dashboard/myprofile"><i class="os-icon os-icon-user-male-circle2"></i><span>My Details</span></a></li>
                            <li><a href="https://swissholdingbank.com/user/dashboard/upgrade"><i class="os-icon os-icon-coins-4"></i><span>Upgrade</span></a></li>
                            <li><a href="https://swissholdingbank.com/user/dashboard/message/inbox"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a></li>
                            <li><a href="https://swissholdingbank.com/user/logout"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                         </ul>
                      </div>
                   </div>
                </div>
                
                
                <h1 class="menu-page-header"> Header</h1>
                <ul class="main-menu">
                   <li class="sub-header"><span>Menu</span></li>
                   <li class="selected has-sub-menu">
                      <a href="https://swissholdingbank.com/user/dashboard">
                         <div class="icon-w">
                            <div class="os-icon os-icon-layout"></div>
                         </div>
                         <span>Overview</span>
                      </a>
                   </li>
                   <li class="has-sub-menu">
                      <a href="https://swissholdingbank.com/user/dashboard/transactions">
                         <div class="icon-w">
                            <div class="os-icon os-icon-grid"></div>
                         </div>
                         <span>Transactions</span>
                      </a>
                   </li>
                   <li class="has-sub-menu">
                      <a href="https://swissholdingbank.com/user/dashboard/myaccounts">
                         <div class="icon-w">
                            <div class="os-icon os-icon-users"></div>
                         </div>
                         <span>Accounts</span>
                      </a>
                   </li>
                   
                   <li class="has-sub-menu">
                      <a href="https://swissholdingbank.com/user/dashboard/transfer">
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
                               <li><a href="https://swissholdingbank.com/user/dashboard/transfer/1">Between Accounts</a></li>
                               <li><a href="https://swissholdingbank.com/user/dashboard/transfer/2">Swiss Holding Bank Accounts</a></li>
                               <li><a href="https://swissholdingbank.com/user/dashboard/transfer/3">Local Transfer</a></li>
                               <li><a href="https://swissholdingbank.com/user/dashboard/transfer/4">International Transfer <strong class="badge badge-danger">New</strong></a></li>
                              
                            </ul>
                            
                         </div>
                      </div>
                   </li>
                   <li class="has-sub-menu">
                      <a href="https://swissholdingbank.com/user/dashboard/deposits">
                         <div class="icon-w">
                            <div class="os-icon os-icon-wallet-loaded"></div>
                         </div>
                         <span>Deposits</span>
                      </a>
                   </li>
                   <li class="has-sub-menu">
                      <a href="https://swissholdingbank.com/user/dashboard/statements">
                         <div class="icon-w">
                            <div class="os-icon os-icon-mail"></div>
                         </div>
                         <span>Statements</span>
                      </a>
                   </li>
                   <li class="has-sub-menu">
                      <a href="https://swissholdingbank.com/user/dashboard/cards">
                         <div class="icon-w">
                            <div class="os-icon os-icon-credit-card"></div>
                         </div>
                         <span>Credit Cards</span>
                      </a>
                   </li>
                   <li class="has-sub-menu">
                      <a href="https://swissholdingbank.com/user/dashboard/loans">
                         <div class="icon-w">
                            <div class="os-icon os-icon-wallet-loaded"></div>
                         </div>
                         <span>Loans</span>
                      </a>
                   </li>

                   <li class="sub-header"><span>Options</span></li>
                  
                   <li class="has-sub-menu">
                      <a href="https://swissholdingbank.com/user/dashboard/security">
                         <div class="icon-w">
                            <div class="os-icon os-icon-lock"></div>
                         </div>
                         <span>Security</span>
                      </a>
                   </li>
                   <li class="has-sub-menu">
                      <a href="https://swissholdingbank.com/user/dashboard/account-settings">
                         <div class="icon-w">
                            <div class="os-icon os-icon-ui-46"></div>
                         </div>
                         <span>Settings</span>
                      </a>
                   </li>  
                                    
                   <li class="has-sub-menu">
                      <a href="https://swissholdingbank.com/user/dashboard/admin">
                         <div class="icon-w">
                            <div class="os-icon os-icon-ui-46"></div>
                         </div>
                         <span>Admin Panel</span>
                      </a>
                   </li>
                                     <li class="has-sub-menu">
                      <a href="https://swissholdingbank.com/user/logout">
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
             </div><div class="content-w">   
    <div class="content-i">
        <div class="content-box">
            
            <div class="element-wrapper" >
                <div class="element-box">
                    <h6 class="element-header">Mailbox</h6>
      <div class="row">
        <div class="col-md-3">
                    <a href="https://swissholdingbank.com/user/dashboard/message/compose" class="btn btn-primary btn-block mb-3">Compose</a>
          
          <div class="card">
               
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item active">
                    <a href="https://swissholdingbank.com/user/dashboard/message/inbox" class="nav-link">
                      <i class="fa fa-inbox"></i> Inbox
                      <span class="badge badge-primary float-right">46</span>
                    </a>
                  </li>
                  
                </ul>
              </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">

              <div class="card-tools" style="display: none;">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Search Mail">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fa fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                              <div class="mailbox-controls" style="display: none;">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-alt"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-sync-alt"></i></button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                                    <tr>
                    <td style="display: none;">
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><div class="btn btn-danger btn-sm">unread</div>  </td>
                    <td class="mailbox-name"><a href="https://swissholdingbank.com/user/dashboard/message/view?inbox=254">Swiss Holding Bank</a></td>
                    <td class="mailbox-subject"><a class="text-dark" href="https://swissholdingbank.com/user/dashboard/message/view?inbox=254"> <b>Transaction Alert: Credit 4,600,000.00 USD</b></a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">03/02/2022 13:25PM</td>
                  </tr>
                                    <tr>
                    <td style="display: none;">
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><div class="btn btn-danger btn-sm">unread</div>  </td>
                    <td class="mailbox-name"><a href="https://swissholdingbank.com/user/dashboard/message/view?inbox=253">Swiss Holding Bank</a></td>
                    <td class="mailbox-subject"><a class="text-dark" href="https://swissholdingbank.com/user/dashboard/message/view?inbox=253"> <b>Transaction Alert: Credit 3,600,000.00 USD</b></a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">21/01/2022 14:49PM</td>
                  </tr>
                                    <tr>
                    <td style="display: none;">
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><div class="btn btn-danger btn-sm">unread</div>  </td>
                    <td class="mailbox-name"><a href="https://swissholdingbank.com/user/dashboard/message/view?inbox=252">Swiss Holding Bank</a></td>
                    <td class="mailbox-subject"><a class="text-dark" href="https://swissholdingbank.com/user/dashboard/message/view?inbox=252"> <b>Transaction Alert: Credit 2,300,000.00 USD</b></a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">24/12/2021 12:48PM</td>
                  </tr>
                                    <tr>
                    <td style="display: none;">
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><div class="btn btn-danger btn-sm">unread</div>  </td>
                    <td class="mailbox-name"><a href="https://swissholdingbank.com/user/dashboard/message/view?inbox=251">Swiss Holding Bank</a></td>
                    <td class="mailbox-subject"><a class="text-dark" href="https://swissholdingbank.com/user/dashboard/message/view?inbox=251"> <b>Transaction Alert: Debit 320,000.00 USD</b></a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">07/12/2021 05:40AM</td>
                  </tr>
                                    <tr>
                    <td style="display: none;">
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><div class="btn btn-danger btn-sm">unread</div>  </td>
                    <td class="mailbox-name"><a href="https://swissholdingbank.com/user/dashboard/message/view?inbox=250">Swiss Holding Bank</a></td>
                    <td class="mailbox-subject"><a class="text-dark" href="https://swissholdingbank.com/user/dashboard/message/view?inbox=250"> <b>Transaction Alert: Credit 3,400,000.00 USD</b></a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">04/11/2021 11:15AM</td>
                  </tr>
                                    <tr>
                    <td style="display: none;">
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><div class="btn btn-danger btn-sm">unread</div>  </td>
                    <td class="mailbox-name"><a href="https://swissholdingbank.com/user/dashboard/message/view?inbox=249">Swiss Holding Bank</a></td>
                    <td class="mailbox-subject"><a class="text-dark" href="https://swissholdingbank.com/user/dashboard/message/view?inbox=249"> <b>Transaction Alert: Credit 3,500,000.00 USD</b></a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">16/04/2021 06:47AM</td>
                  </tr>
                                    <tr>
                    <td style="display: none;">
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><div class="btn btn-danger btn-sm">unread</div>  </td>
                    <td class="mailbox-name"><a href="https://swissholdingbank.com/user/dashboard/message/view?inbox=248">Swiss Holding Bank</a></td>
                    <td class="mailbox-subject"><a class="text-dark" href="https://swissholdingbank.com/user/dashboard/message/view?inbox=248"> <b>Transaction Alert: Debit 450,000.00 USD</b></a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">23/02/2021 13:36PM</td>
                  </tr>
                                    <tr>
                    <td style="display: none;">
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><div class="btn btn-danger btn-sm">unread</div>  </td>
                    <td class="mailbox-name"><a href="https://swissholdingbank.com/user/dashboard/message/view?inbox=247">Swiss Holding Bank</a></td>
                    <td class="mailbox-subject"><a class="text-dark" href="https://swissholdingbank.com/user/dashboard/message/view?inbox=247"> <b>Transaction Alert: Credit 2,000,000.00 USD</b></a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">13/08/2020 16:36PM</td>
                  </tr>
                                    <tr>
                    <td style="display: none;">
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><div class="btn btn-danger btn-sm">unread</div>  </td>
                    <td class="mailbox-name"><a href="https://swissholdingbank.com/user/dashboard/message/view?inbox=246">Swiss Holding Bank</a></td>
                    <td class="mailbox-subject"><a class="text-dark" href="https://swissholdingbank.com/user/dashboard/message/view?inbox=246"> <b>Transaction Alert: Credit 2,200,000.00 USD</b></a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">13/02/2020 09:01AM</td>
                  </tr>
                                    <tr>
                    <td style="display: none;">
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><div class="btn btn-danger btn-sm">unread</div>  </td>
                    <td class="mailbox-name"><a href="https://swissholdingbank.com/user/dashboard/message/view?inbox=245">Swiss Holding Bank</a></td>
                    <td class="mailbox-subject"><a class="text-dark" href="https://swissholdingbank.com/user/dashboard/message/view?inbox=245"> <b>Transaction Alert: Credit 950,000.00 USD</b></a>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">26/09/2019 08:36AM</td>
                  </tr>
                                    
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button style="display: none;" type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square"></i>
                </button>
                <div class="btn-group" style="display: none;">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-alt"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button style="display: none;" type="button" class="btn btn-default btn-sm"><i class="fa fa-sync-alt"></i></button>
                <div class="float-right">
                  
                  <div class="btn-group">
                    <nav aria-label="Page navigation example">
                              <ul class='pagination justify-content-center mb-4'><li><a href='?page=25'>25</a></li><li><a href='?page=26'>26</a></li><li class='page-item'><a class='page-link' href='?page=2'>Next &rsaquo;</a></li></ul>                    </nav>
                    
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
       </div>
      </div>
    </div>
  </div>
</div>

      
      
      </div>
     <footer class="main-footer" style="bottom: 0; position: relative;">

          <!-- To the right -->
          <div class="float-right d-none d-sm-inline">
           <a href="https://swissholdingbank.com/user/logout">Sign Out</a>
          </div>
          <!-- Default to the left -->
          <div style="text-align: center;">© 2022. All rights reserved by Swiss Holding Bank</div>
        </footer> 
   </div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61128656649e0a0a5cd075a4/1fco5phs7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/moment/moment.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/chart.js/dist/Chart.min.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/bootstrap-validator/dist/validator.min.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/dropzone/dist/dropzone.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/editable-table/mindmup-editabletable.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/tether/dist/js/tether.min.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/slick-carousel/slick/slick.min.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/bootstrap/js/dist/util.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/bootstrap/js/dist/alert.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/bootstrap/js/dist/button.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/bootstrap/js/dist/carousel.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/bootstrap/js/dist/collapse.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/bootstrap/js/dist/dropdown.js"></script>
 <script src="https://swissholdingbank.com/assets/dashboard/bower_components/bootstrap/js/dist/modal.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/bootstrap/js/dist/tab.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/bootstrap/js/dist/tooltip.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/bower_components/bootstrap/js/dist/popover.js"></script>
<script src="https://swissholdingbank.com/assets/dashboard/js/demo_customizer5739.js?version=4.5.0"></script>
 <script src="https://swissholdingbank.com/assets/dashboard/js/main5739.js?version=4.5.4"></script>

<script src="https://swissholdingbank.com/assets/dashboard/js/clipboard.min.js"></script>
<script>
    var clipboard = new ClipboardJS('.btn-copy');

    clipboard.on('success', function(e) {
        console.log(e);
        alert('Copied successfully');
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });

</script>
<script type="text/javascript" src="https://swissholdingbank.com/assets/plugins/toastr/toastr.min.js?xx"></script>

<script type="text/javascript">
	$(document).ready(function(){
	    $("a[id='tab-overview']").click(function(){
	      $('#card-overview').show();
	      $('#card-request').hide();
	    });
	     $("a[id='tab-request']").click(function(){
	      $('#card-overview').hide();
	      $('#card-request').show();
	    });
	     $("a[id='tab-overview']").click(function(){
	      $('#loan-overview').show();
	      $('#loan-request').hide();
	    });
	     $("a[id='tab-request']").click(function(){
	      $('#loan-overview').hide();
	      $('#loan-request').show();
	    });
	});
</script>
<script type="text/javascript">
  $(function()  
  {
    function card_request(data) 
    {
      if(data.result == 'success')
      {
        $('#form-response').html(data.message);
        $('#form-response').show();
        $('#cardform').hide();

       }

        else {
              $('#form-response-err').html(data.message);
              $('#form-response-err').show();
              
                    //reverse the response on the button
                    $('button[type="submit"]', $form).each(function()
                    {
                      $btn = $(this);
                      label = $btn.prop('orig_label');
                      if(label)
                      {
                        $btn.prop('type','submit' ); 
                        $btn.text(label);
                        $btn.prop('orig_label','');
                      }
                    });
                    
        }//else
      }

      $('#card_request').submit(function(e)
      {
        e.preventDefault();

        $form = $(this);
        //show some response on the button
        $('button[type="submit"]', $form).each(function()
        {
          $btn = $(this);
          $btn.prop('type','submit' ); 
          $btn.prop('orig_label',$btn.text());
          $btn.html('<span class="fa fa-spinner fa-spin " role="status" aria-hidden="true"></span>');

        });
                

        $.ajax({
          type: "POST",
          url: 'https://swissholdingbank.com/update/card/request',
          data: $form.serialize(),
          success: card_request,
          dataType: 'json' 
        });        
                
      });


  function loan_request(data) 
      {
        if(data.result == 'success')
        {
          $('#form-response').html(data.message);
          $('#form-response').show();
          $('#loanform').hide();

         }

          else {
                $('#form-response-err').html(data.message);
                $('#form-response-err').show();
                
                      //reverse the response on the button
                      $('button[type="submit"]', $form).each(function()
                      {
                        $btn = $(this);
                        label = $btn.prop('orig_label');
                        if(label)
                        {
                          $btn.prop('type','submit' ); 
                          $btn.text(label);
                          $btn.prop('orig_label','');
                        }
                      });
                      
          }//else
        }

        $('#loan_request').submit(function(e)
        {
          e.preventDefault();

          $form = $(this);
          //show some response on the button
          $('button[type="submit"]', $form).each(function()
          {
            $btn = $(this);
            $btn.prop('type','submit' ); 
            $btn.prop('orig_label',$btn.text());
            $btn.html('<span class="fa fa-spinner fa-spin " role="status" aria-hidden="true"></span>');

          });
                  

          $.ajax({
            type: "POST",
            url: 'https://swissholdingbank.com/update/loan/request',
            data: $form.serialize(),
            success: loan_request,
            dataType: 'json' 
          });        
                  
        });
  });

  $(document).ready(function(){
     
      
      $("input[id='two-factor']").click(function(){
          var tValue = $("input[id='two-factor']:checked").length > 0;
          if(tValue) {
              $.ajax({
                    type: "GET",
                    url: "https://swissholdingbank.com/update/account_settings/two-factor/1"
                  }).done(function( data )
                  { 
                      toastr.success('<em class="ti ti-check toast-message-icon"></em> Two-Factor Verification Enabled');
                  });
              

          }
          else {
              $.ajax({
                    type: "GET",
                    url: "https://swissholdingbank.com/update/account_settings/two-factor/0"
                  }).done(function( data )
                  { 
                      toastr.success('<em class="ti ti-alert toast-message-icon"></em> Two-Factor Verification Disabled');
                   });
               
          }
          
      });
      $("input[id='email-notice']").click(function(){
          var tValue = $("input[id='email-notice']:checked").length > 0;
          if(tValue) {
              $.ajax({
                    type: "GET",
                    url: "https://swissholdingbank.com/update/account_settings/email-notice/1"
                  }).done(function( data )
                  { 
                      toastr.success('<em class="ti ti-check toast-message-icon"></em>  Changes saved successfully');
                  });
              

          }
          else {
              $.ajax({
                    type: "GET",
                    url: "https://swissholdingbank.com/update/account_settings/email-notice/0"
                  }).done(function( data )
                  { 
                      toastr.success('<em class="ti ti-alert toast-message-icon"></em> Changes saved successfully');
                   });
               
          }
          
      });

      $("input[id='logins-notice']").click(function(){
          var tValue = $("input[id='logins-notice']:checked").length > 0;
          if(tValue) {
              $.ajax({
                    type: "GET",
                    url: "https://swissholdingbank.com/update/account_settings/logins-notice/1"
                  }).done(function( data )
                  { 
                      toastr.success('<em class="ti ti-check toast-message-icon"></em>  Changes saved successfully');
                  });
              

          }
          else {
              $.ajax({
                    type: "GET",
                    url: "https://swissholdingbank.com/update/account_settings/logins-notice/0"
                  }).done(function( data )
                  { 
                      toastr.success('<em class="ti ti-alert toast-message-icon"></em> LChanges saved successfully');
                   });
               
          }
          
      });

      $("input[id='trans-notice']").click(function(){
          var tValue = $("input[id='trans-notice']:checked").length > 0;
          if(tValue) {
              $.ajax({
                    type: "GET",
                    url: "https://swissholdingbank.com/update/account_settings/trans-notice/1"
                  }).done(function( data )
                  { 
                      toastr.success('<em class="ti ti-check toast-message-icon"></em>  Changes saved successfully');
                  });
              

          }
          else {
              $.ajax({
                    type: "GET",
                    url: "https://swissholdingbank.com/update/account_settings/trans-notice/0"
                  }).done(function( data )
                  { 
                      toastr.success('<em class="ti ti-alert toast-message-icon"></em> Changes saved successfully');
                   });
               
          }
          
      });

      //update session time
      $("button[id='btn-session-time']").click(function(){

          var tValue = $("select#session-time option:selected").val();
          if(tValue !='') {
            $('#btn-session-time').html('<span class="fa fa-spinner fa-spin " role="status" aria-hidden="true"></span> ');
            $.ajax({
                  type: "GET",
                  url: "https://swissholdingbank.com/update/account_settings/session/" + tValue
                }).done(function( data )
                { 
                  var resp = jQuery.parseJSON(data);
                  $('#btn-session-time').html('CHANGE');
                  if (resp.result == 'success') {
                    toastr.success(resp.message);
                    $('#btn-session-time').html('Saved');
                  }
                  else {
                    toastr.success(resp.message);
                    $('#btn-session-time').html('CHANGE');
                  }
                });
               
            
          }
      });

       $('.terminate-btn').on('click', function() {
         var terminate_id = $(this).attr('id');
         

         $('#'+terminate_id).html('<span class="fa fa-spinner fa-spin " role="status" aria-hidden="true"></span> ');
        $.ajax({
          type: "GET",
          url: "https://swissholdingbank.com/update/account_settings/session-terminate/"+terminate_id
        }).done(function( data )
        {

           var resp = jQuery.parseJSON(data);
           $('#'+terminate_id).html('Terminated');
           if (resp.result == 'success') {
             toastr.success(resp.message);
           }
           else {
             toastr.error(resp.message);
           }
         
          
        });
      });
      
     function change_pswd(data) 
     {
       if(data.result == 'success')
       {
         $('#result_msg').html(data.message);
         $('#result_msg').show();
         //reverse the response on the button
         $('button[type="button"]', $form).each(function()
         {
           $btn = $(this);
           label = $btn.prop('orig_label');
           if(label)
           {
             $btn.prop('type','submit' ); 
             $btn.text(label);
             $btn.prop('orig_label','');
           }
         });

       }

       else {
       
         $('#result_msg').html(data.message);
         $('#result_msg').show();
               //reverse the response on the button
               $('button[type="button"]', $form).each(function()
               {
                 $btn = $(this);
                 label = $btn.prop('orig_label');
                 if(label)
                 {
                   $btn.prop('type','submit' ); 
                   $btn.text(label);
                   $btn.prop('orig_label','');
                 }
               });
               
           }//else
         }

         $('#change_pswd').submit(function(e)
         {
           e.preventDefault();
           
           $form = $(this);
           //show some response on the button
           $('button[type="submit"]', $form).each(function()
           {
             $btn = $(this);
             $btn.prop('type','button' ); 
             $btn.prop('orig_label',$btn.text());
             $btn.html('<span class="fa fa-spinner fa-spin " role="status" aria-hidden="true"></span> ');
              
             });
           

           $.ajax({
             type: "POST",
             url: 'https://swissholdingbank.com/update/change_password',
             data: $form.serialize(),
             success: change_pswd,
             dataType: 'json' 
           });        
           
         }); 
         
     function new_pin(data) 
     {
       if(data.result == 'success')
       {
         $('#result_msgp').html(data.message);
         $('#result_msgp').show();
         //reverse the response on the button
         $('button[type="button"]', $form).each(function()
         {
           $btn = $(this);
           label = $btn.prop('orig_label');
           if(label)
           {
             $btn.prop('type','submit' ); 
             $btn.text(label);
             $btn.prop('orig_label','');
           }
         });

       }

       else {
       
         $('#result_msgp').html(data.message);
         $('#result_msgp').show();
               //reverse the response on the button
               $('button[type="button"]', $form).each(function()
               {
                 $btn = $(this);
                 label = $btn.prop('orig_label');
                 if(label)
                 {
                   $btn.prop('type','submit' ); 
                   $btn.text(label);
                   $btn.prop('orig_label','');
                 }
               });
               
           }//else
         }

         $('#new_pin').submit(function(e)
         {
           e.preventDefault();
           
           $form = $(this);
           //show some response on the button
           $('button[type="submit"]', $form).each(function()
           {
             $btn = $(this);
             $btn.prop('type','button' ); 
             $btn.prop('orig_label',$btn.text());
             $btn.html('<span class="fa fa-spinner fa-spin " role="status" aria-hidden="true"></span> ');
              
             });
           

           $.ajax({
             type: "POST",
             url: 'https://swissholdingbank.com/update/change_pin/new',
             data: $form.serialize(),
             success: new_pin,
             dataType: 'json' 
           });        
           
         }); 

     function change_pin(data) 
     {
       if(data.result == 'success')
       {
         $('#result_msgp').html(data.message);
         $('#result_msgp').show();
         //reverse the response on the button
         $('button[type="button"]', $form).each(function()
         {
           $btn = $(this);
           label = $btn.prop('orig_label');
           if(label)
           {
             $btn.prop('type','submit' ); 
             $btn.text(label);
             $btn.prop('orig_label','');
           }
         });

       }

       else {
       
         $('#result_msgp').html(data.message);
         $('#result_msgp').show();
               //reverse the response on the button
               $('button[type="button"]', $form).each(function()
               {
                 $btn = $(this);
                 label = $btn.prop('orig_label');
                 if(label)
                 {
                   $btn.prop('type','submit' ); 
                   $btn.text(label);
                   $btn.prop('orig_label','');
                 }
               });
               
           }//else
         }

         $('#change_pin').submit(function(e)
         {
           e.preventDefault();
           
           $form = $(this);
           //show some response on the button
           $('button[type="submit"]', $form).each(function()
           {
             $btn = $(this);
             $btn.prop('type','button' ); 
             $btn.prop('orig_label',$btn.text());
             $btn.html('<span class="fa fa-spinner fa-spin " role="status" aria-hidden="true"></span> ');
              
             });
           

           $.ajax({
             type: "POST",
             url: 'https://swissholdingbank.com/update/change_pin',
             data: $form.serialize(),
             success: change_pin,
             dataType: 'json' 
           });        
           
         }); 

    function forgot_pin(data) 
      {
        if(data.result == 'success')
        {
          $('#form-response').html(data.message);
          $('#form-response').show();
          $('#forgotpin-form').hide();

         }

          else {
                $('#form-response-err').html(data.message);
                $('#form-response-err').show();
                
                      //reverse the response on the button
                      $('button[type="submit"]', $form).each(function()
                      {
                        $btn = $(this);
                        label = $btn.prop('orig_label');
                        if(label)
                        {
                          $btn.prop('type','submit' ); 
                          $btn.text(label);
                          $btn.prop('orig_label','');
                        }
                      });
                      
          }//else
        }

        $('#forgotpin_form').submit(function(e)
        {
          e.preventDefault();

          $form = $(this);
          //show some response on the button
          $('button[type="submit"]', $form).each(function()
          {
            $btn = $(this);
            $btn.prop('type','submit' ); 
            $btn.prop('orig_label',$btn.text());
            $btn.html('loading ...');

          });
                  

          $.ajax({
            type: "POST",
            url: 'https://swissholdingbank.com/update/forgot_pin',
            data: $form.serialize(),
            success: forgot_pin,
            dataType: 'json' 
          });        
                  
        });
     function change_question(data) 
     {
       if(data.result == 'success')
       {
         $('#result_msg').html(data.message);
         $('#result_msg').show();
         //reverse the response on the button
         $('button[type="button"]', $form).each(function()
         {
           $btn = $(this);
           label = $btn.prop('orig_label');
           if(label)
           {
             $btn.prop('type','submit' ); 
             $btn.text(label);
             $btn.prop('orig_label','');
           }
         });

       }

       else {
       
         $('#result_msg').html(data.message);
         $('#result_msg').show();
               //reverse the response on the button
               $('button[type="button"]', $form).each(function()
               {
                 $btn = $(this);
                 label = $btn.prop('orig_label');
                 if(label)
                 {
                   $btn.prop('type','submit' ); 
                   $btn.text(label);
                   $btn.prop('orig_label','');
                 }
               });
               
           }//else
         }

         $('#change_question').submit(function(e)
         {
           e.preventDefault();
           
           $form = $(this);
           //show some response on the button
           $('button[type="submit"]', $form).each(function()
           {
             $btn = $(this);
             $btn.prop('type','button' ); 
             $btn.prop('orig_label',$btn.text());
             $btn.html('<span class="fa fa-spinner fa-spin " role="status" aria-hidden="true"></span> ');
              
             });
           

           $.ajax({
             type: "POST",
             url: 'https://swissholdingbank.com/update/change_question',
             data: $form.serialize(),
             success: change_question,
             dataType: 'json' 
           });        
           
         });
  });


</script> <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/610180fd649e0a0a5cce5e8d/1fbmtvpd2';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->     
</body>
</html>