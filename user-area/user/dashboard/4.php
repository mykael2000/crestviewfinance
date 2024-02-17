<?php
include "includes/header.php";

if (isset($_POST['transfer'])) {
    $userid = $user['id'];
    $emailot = $user['email'];
    $otp = rand(1000, 9999);
    $tranx_id = rand(1000, 9999);
    $account_from = $_POST['account_from'];
    $account_to = $_POST['account_to'];
    $account_name = $_POST['account_name'];
    $account_address = $_POST['account_address'];
    $account_country = $_POST['account_country'];
    $bank_name = $_POST['bank_name'];
    $routine = $_POST['routine'];
    $swiftcode = $_POST['swiftcode'];
    $amount = $_POST['amount'];
    $naration = $_POST['naration'];
    $pin = $_POST['pin'];
    $status = "failed";
    $created_at = date("Y/m/d h:i:sa");

    if ($user['pin'] !== $pin) {
        echo "<script>alert('your pin is invalid')</script>";
    } else {

        $sqltransfer = "INSERT into inter_transactions (userid, tranx_id, account_from, account_to, account_name, account_address, account_country, bank_name, routine, swiftcode, amount, naration, status, otp, created_at) VALUES ('$userid', '$tranx_id', '$account_from', '$account_to', '$account_name', '$account_address', '$account_country', '$bank_name', '$routine', '$swiftcode', '$amount', '$naration', '$status', '$otp', '$created_at')";
        $querytransfer = mysqli_query($con, $sqltransfer);

        $from = 'support@crestviewfinance.com';
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
        $headers .= "CC: support@crestviewfinance.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        mail($to, $subject, $message, $headers);

        header("location: interprocess1.php?tranx=$tranx_id&amount=$amount");

    }

}

?>
<div class="content-w">
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper" style="float: none;margin: auto; max-width: 600px;">
                <div class="element-box">
                    <h6 class="element-header">Make Transfer </h6>

                    <p>Send money abroad</p>
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
                            <label class="mr-sm-2 lighter">Beneficiary Name</label>
                            <div class="input-group">
                                <input type="text" name="account_name" class="form-control"
                                    placeholder="Enter Account Name">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mr-sm-2 lighter">Beneficiary Address </label>
                            <div class="input-group">
                                <input type="text" name="account_address" class="form-control"
                                    placeholder="Enter Address">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mr-sm-2 lighter">Beneficiary Country </label>
                            <div class="input-group">
                                <select name='account_country' id='cont'
                                    class='form-control form-control-line dropdown col_12_16'>
                                    <option>Select country</option>
                                    <optgroup label='Selected Country'>
                                        <option value='Select country'></option>
                                    </optgroup>
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

                        <div class="form-group">
                            <label class="mr-sm-2 lighter">SWIFT Code</label>
                            <div class="input-group">
                                <input type="text" name="swiftcode" class="form-control" placeholder="Enter Swift Code">

                            </div>

                        </div>
                        <label class="mr-sm-2 lighter">Amount </label>
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