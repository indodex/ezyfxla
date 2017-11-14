<?php include('includes/nav.php'); ?>

<style>
  form
{
  display: block;
  margin: 100px auto 20px;
  /*width: 950px;*/
  /*width: 100%;*/
  overflow: hidden;
  background: #FFF;
  border: 1px solid #E4E4E4;
  border-radius: 5px;
  font-size: 0;
}

form > div
{
  display: inline-block;
  width: 100%;
}

form > div > label
{
  display: block;
  padding: 20px 20px 10px;
  vertical-align: top;
  font-family: Source Sans Pro, Arial, sans-serif;
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
  color: #939393;
  cursor: pointer;
}

form > div.col-2, form > div.col-3, form > div.col-4 { box-shadow: 1px 1px #E4E4E4 }

form > div.col-2 { width: 50% }
form > div.col-3 { width: 33.3333333333% }
form > div.col-4 { width: 25% }

form > div > label > input
{
  display: inline-block;
  position: relative;
  width: 100%;
  height: 27px;
  line-height: 27px;
  margin: 5px -5px 0;
  padding: 7px 5px 3px;
  border: none;
  outline: none;
  border-radius: 3px;
  background: transparent;
  font-size: 14px;
  font-weight: 200;
  opacity: .66;
  transition: opacity .3s, box-shadow .3s;
}

form > div > label > select
{
  display: block;
  width: 100%;
  margin: 16px 0 -3px;
  padding: 0;
  background: transparent;
  border: none;
  outline: none;
  font-size: 14px;
  font-weight: 200;
  opacity: .33;
}


form > div > label > input:focus, form > div > label > select:focus
{
  opacity: 1;
  box-shadow: 0 3px 4px rgba(0, 0, 0, .15);
}

.partner-form {
  /*padding-top: -30px;*/
  margin-top: -80px;
}
</style>

<section class="why-us">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1><i class="fa fa-handshake-o"></i>EZYFX Partnership</h1>
      </div>
      <?php include 'open-accts.php'; ?>
    </div>
  </div>
</section>

<section class="bonus-icons">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
        <i class="fa fa-gift pull-left"></i> Wide range of Bonuses
      </div>

      <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
        <i class="fa fa-star-half pull-left"></i> 5% Interest Rate
      </div>

      <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
        <i class="fa fa-google-wallet pull-left"></i> Variety of Account types
      </div>

      <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
        <i class="fa fa-lock pull-left"></i> Funds Security
      </div>

      <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
        <i class="fa fa-venus-double pull-left"></i> Fixed Spreads
      </div>

      <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
        <i class="fa fa-tasks pull-left"></i> Many Deposit Methods
      </div>
    </div>
  </div>
</section>

<section class="reg-start partnerWithUs">
  <div class="container">
    <div class="bonus-intro">
      <!-- <p>TRADE MORE &amp; <br>CONVERT YOUR BONUSES INTO REAL MONEY</p>
      <a href="#" class="btn btn-success">CLAIM BONUS</a> -->
      <h6 class="lead text-center" style="color: #fff; font-weight: 700; font-size: 3em;">Register as an ezyfx partner</h6>
    </div>
  </div>
</section>

<section class="reg-start">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Cooperating with us, you obtain unlimited improvement opportunities, reliability and stability. We offer the highest partnership reward up to 2 pips from a trade of each involved client. Becoming a partner you get ready-made website, 24-hour access to the partners statistics and completed educational and advertising materials.</p>

        <p>To become a partner it is enough to just complete the registration form below. During the cooperation process the partner is allowed to change the type of partnership program. Traders also can become partners, that will be an additional source of income, with information distribution about company's services among acquaintances and friends.</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <h2 class="text-center" style="margin-top: -10px; padding-bottom: 5px;">Partner Registration Form</h2>
  </div>

  <div class="container">
    <div class="row">
      <div class="partner-form">
        <div class="col-md-12">
        <form method="get">
          <div class="col-md-6" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              Status
              <select tabindex="5" required="">
                <option>Select Status</option>
                <option>Individual</option>
                <option>Company</option>
              </select>
            </label>
          </div>
          <div class="col-md-6" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              Partnership Type
              <select tabindex="5" required="">
                <option>Select Type</option>
                <option>Introducing Broker</option>
                <option>Trader Partner</option>
                <option>Investment Project</option>
                <option>Webmaster</option>
                <option>Blogger</option>
                <option>FX Education Project</option>
                <option>Exchanger</option>
                <option>FX Signal Provider</option>
                <option>FX Advisor Seller</option>
              </select>
            </label>
          </div>
          <div class="col-md-6" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              Name
              <input placeholder="What is your full name?" tabindex="1" required=""/>
            </label>
          </div>
          <div class="col-md-6" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              Email
              <input placeholder="What is your email address" tabindex="2" required=""/>
            </label>
          </div>
          <div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              Address
              <input placeholder="What is your mailing address" tabindex="2" required=""/>
            </label>
          </div>
          <div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              City
              <input placeholder="What City?" tabindex="3" required=""/>
            </label>
          </div>
          <div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              State
              <input placeholder="What State?" tabindex="4" required=""/>
            </label>
          </div>

          <div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              Country
              <select name="country" id="country" tabindex="5">
                <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                  <option data-countryCode="US" value="1">USA (+1)</option>
                    <optgroup label="Other countries">
                      <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                      <option data-countryCode="AD" value="376">Andorra (+376)</option>
                      <option data-countryCode="AO" value="244">Angola (+244)</option>
                      <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                      <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                      <option data-countryCode="AR" value="54">Argentina (+54)</option>
                      <option data-countryCode="AM" value="374">Armenia (+374)</option>
                      <option data-countryCode="AW" value="297">Aruba (+297)</option>
                      <option data-countryCode="AU" value="61">Australia (+61)</option>
                      <option data-countryCode="AT" value="43">Austria (+43)</option>
                      <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                      <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                      <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                      <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                      <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                      <option data-countryCode="BY" value="375">Belarus (+375)</option>
                      <option data-countryCode="BE" value="32">Belgium (+32)</option>
                      <option data-countryCode="BZ" value="501">Belize (+501)</option>
                      <option data-countryCode="BJ" value="229">Benin (+229)</option>
                      <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                      <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                      <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                      <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                      <option data-countryCode="BW" value="267">Botswana (+267)</option>
                      <option data-countryCode="BR" value="55">Brazil (+55)</option>
                      <option data-countryCode="BN" value="673">Brunei (+673)</option>
                      <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                      <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                      <option data-countryCode="BI" value="257">Burundi (+257)</option>
                      <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                      <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                      <option data-countryCode="CA" value="1">Canada (+1)</option>
                      <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                      <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                      <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                      <option data-countryCode="CL" value="56">Chile (+56)</option>
                      <option data-countryCode="CN" value="86">China (+86)</option>
                      <option data-countryCode="CO" value="57">Colombia (+57)</option>
                      <option data-countryCode="KM" value="269">Comoros (+269)</option>
                      <option data-countryCode="CG" value="242">Congo (+242)</option>
                      <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                      <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                      <option data-countryCode="HR" value="385">Croatia (+385)</option>
                      <option data-countryCode="CU" value="53">Cuba (+53)</option>
                      <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                      <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                      <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                      <option data-countryCode="DK" value="45">Denmark (+45)</option>
                      <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                      <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                      <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                      <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                      <option data-countryCode="EG" value="20">Egypt (+20)</option>
                      <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                      <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                      <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                      <option data-countryCode="EE" value="372">Estonia (+372)</option>
                      <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                      <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                      <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                      <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                      <option data-countryCode="FI" value="358">Finland (+358)</option>
                      <option data-countryCode="FR" value="33">France (+33)</option>
                      <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                      <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                      <option data-countryCode="GA" value="241">Gabon (+241)</option>
                      <option data-countryCode="GM" value="220">Gambia (+220)</option>
                      <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                      <option data-countryCode="DE" value="49">Germany (+49)</option>
                      <option data-countryCode="GH" value="233">Ghana (+233)</option>
                      <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                      <option data-countryCode="GR" value="30">Greece (+30)</option>
                      <option data-countryCode="GL" value="299">Greenland (+299)</option>
                      <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                      <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                      <option data-countryCode="GU" value="671">Guam (+671)</option>
                      <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                      <option data-countryCode="GN" value="224">Guinea (+224)</option>
                      <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                      <option data-countryCode="GY" value="592">Guyana (+592)</option>
                      <option data-countryCode="HT" value="509">Haiti (+509)</option>
                      <option data-countryCode="HN" value="504">Honduras (+504)</option>
                      <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                      <option data-countryCode="HU" value="36">Hungary (+36)</option>
                      <option data-countryCode="IS" value="354">Iceland (+354)</option>
                      <option data-countryCode="IN" value="91">India (+91)</option>
                      <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                      <option data-countryCode="IR" value="98">Iran (+98)</option>
                      <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                      <option data-countryCode="IE" value="353">Ireland (+353)</option>
                      <option data-countryCode="IL" value="972">Israel (+972)</option>
                      <option data-countryCode="IT" value="39">Italy (+39)</option>
                      <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                      <option data-countryCode="JP" value="81">Japan (+81)</option>
                      <option data-countryCode="JO" value="962">Jordan (+962)</option>
                      <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                      <option data-countryCode="KE" value="254">Kenya (+254)</option>
                      <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                      <option data-countryCode="KP" value="850">Korea North (+850)</option>
                      <option data-countryCode="KR" value="82">Korea South (+82)</option>
                      <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                      <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                      <option data-countryCode="LA" value="856">Laos (+856)</option>
                      <option data-countryCode="LV" value="371">Latvia (+371)</option>
                      <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                      <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                      <option data-countryCode="LR" value="231">Liberia (+231)</option>
                      <option data-countryCode="LY" value="218">Libya (+218)</option>
                      <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                      <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                      <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                      <option data-countryCode="MO" value="853">Macao (+853)</option>
                      <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                      <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                      <option data-countryCode="MW" value="265">Malawi (+265)</option>
                      <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                      <option data-countryCode="MV" value="960">Maldives (+960)</option>
                      <option data-countryCode="ML" value="223">Mali (+223)</option>
                      <option data-countryCode="MT" value="356">Malta (+356)</option>
                      <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                      <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                      <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                      <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                      <option data-countryCode="MX" value="52">Mexico (+52)</option>
                      <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                      <option data-countryCode="MD" value="373">Moldova (+373)</option>
                      <option data-countryCode="MC" value="377">Monaco (+377)</option>
                      <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                      <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                      <option data-countryCode="MA" value="212">Morocco (+212)</option>
                      <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                      <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                      <option data-countryCode="NA" value="264">Namibia (+264)</option>
                      <option data-countryCode="NR" value="674">Nauru (+674)</option>
                      <option data-countryCode="NP" value="977">Nepal (+977)</option>
                      <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                      <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                      <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                      <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                      <option data-countryCode="NE" value="227">Niger (+227)</option>
                      <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                      <option data-countryCode="NU" value="683">Niue (+683)</option>
                      <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                      <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                      <option data-countryCode="NO" value="47">Norway (+47)</option>
                      <option data-countryCode="OM" value="968">Oman (+968)</option>
                      <option data-countryCode="PW" value="680">Palau (+680)</option>
                      <option data-countryCode="PA" value="507">Panama (+507)</option>
                      <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                      <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                      <option data-countryCode="PE" value="51">Peru (+51)</option>
                      <option data-countryCode="PH" value="63">Philippines (+63)</option>
                      <option data-countryCode="PL" value="48">Poland (+48)</option>
                      <option data-countryCode="PT" value="351">Portugal (+351)</option>
                      <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                      <option data-countryCode="QA" value="974">Qatar (+974)</option>
                      <option data-countryCode="RE" value="262">Reunion (+262)</option>
                      <option data-countryCode="RO" value="40">Romania (+40)</option>
                      <option data-countryCode="RU" value="7">Russia (+7)</option>
                      <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                      <option data-countryCode="SM" value="378">San Marino (+378)</option>
                      <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                      <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                      <option data-countryCode="SN" value="221">Senegal (+221)</option>
                      <option data-countryCode="CS" value="381">Serbia (+381)</option>
                      <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                      <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                      <option data-countryCode="SG" value="65">Singapore (+65)</option>
                      <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                      <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                      <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                      <option data-countryCode="SO" value="252">Somalia (+252)</option>
                      <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                      <option data-countryCode="ES" value="34">Spain (+34)</option>
                      <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                      <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                      <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                      <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                      <option data-countryCode="SD" value="249">Sudan (+249)</option>
                      <option data-countryCode="SR" value="597">Suriname (+597)</option>
                      <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                      <option data-countryCode="SE" value="46">Sweden (+46)</option>
                      <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                      <option data-countryCode="SI" value="963">Syria (+963)</option>
                      <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                      <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                      <option data-countryCode="TH" value="66">Thailand (+66)</option>
                      <option data-countryCode="TG" value="228">Togo (+228)</option>
                      <option data-countryCode="TO" value="676">Tonga (+676)</option>
                      <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                      <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                      <option data-countryCode="TR" value="90">Turkey (+90)</option>
                      <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                      <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                      <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                      <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                      <option data-countryCode="UG" value="256">Uganda (+256)</option>
                      <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                      <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                      <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                      <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                      <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                      <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                      <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                      <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                      <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                      <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                      <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                      <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                      <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                      <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                      <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                      <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                      <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                    </optgroup>
              </select>
            </label>
          </div>
          <div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              Telephone
              <input placeholder="What is your phone number?" tabindex="1" required=""/>
            </label>
          </div>

          <div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              Date of Birth
              <input type="date" placeholder="What State?" tabindex="4" required=""/>
            </label>
          </div>
          <!-- <div class="col-md-4" style="border: none;">
            <label>
              Partnership Agreement here &raquo;
              <input placeholder="What is your email address" tabindex="2" />
            </label>
          </div> -->
          <!-- <div class="col-3">
            <label>
              Shipping Method
              <select tabindex="5">
                <option>Select shipment method</option>
                <option>Standard 3 - 5 Business Days</option>
                <option>Expedited Next-Day Delivery</option>
              </select>
            </label>
          </div> -->
          <div class="col-xs-12 text-center" style="margin-top: 20px;">
            <!-- <a href="partnership-agreement.php" target="_blank"> -->
            	<label>
              <span class="button-checkbox">
                <button type="button" class="btn btn-default" data-color="primary">I Agree to the </button>
                <input type="checkbox" class="hidden" required="" />
                <a href="#" target="_blank">Partnership Terms &amp; Conditions</a>
              </span>
              </label>
            <!-- </a> -->

          </div>

          <div class="col-xs-12 text-center" style="margin-bottom: 20px;">
          	<input type="submit" value="Register As A Partner" class="btn btn-danger">
          </div>


        </form>

        <div class="col-xs-12">
          <h2 class="text-center">Agreement</h2>
          <div class="agreement">
            <h4>Privacy Policy</h4>

            <p>At EZYFX we strive to deliver quality products and services to our users. We value their businesses
and recognize that privacy is an important issue. The information contained in this Privacy Policy
explains the practices of EZYFX, and its subsidiaries and affiliates (collectively, "EZYFX," "we," or
"us") regarding the personal or non-personal information that we collect from you or about you
through this Site. </p>

            <p>“The Site” shall refer collectively to ezyfx.la website and its available language versions and domain names. </p>

            <p>“User” shall refer to any person or entity visiting, using or otherwise accessing the Site.</p>

            <p>Although we aim to ensure the safety and confidentiality of all information received by our clients, please note that this Privacy Policy does not apply to processing of personal information by third parties such as payment service providers. </p>

            <p>If you have any questions about our Privacy Policy, please contact us at <a href="mailto:support@ezyfx.la">support@ezyfx.la</a></p>

            <h5>Registration and Use of User Activities on the Website </h5>

            <h6>Non-Personal Data </h6>

            <p>EZYFX collects non- personal information about Users when they visit The Site unless Users choose to provide that information to us by registering an account. </p>

            <p>EZYFX may record and analyse all User activities on the Site for the purposes of security, system monitoring, management, and marketing in compliance with legal and regulatory obligations incumbent on EZYFX. We undertake to store such information using adequate security measures and for a limited period of time.</p>

            <h6>Log Files</h6>

            <p>Log files allow us to record visitors' use of the Site. We put together log file information from all our visitors and use it to improve our understanding of Users’ patterns of behaviour and needs, and to make improvements to the Site, based on the way users move around it. Log files do not contain any personal information about the User. We automatically collect non-personal information such as: </p>

            <ul class="ppro">
              <li>&mdash; The type and version of the operating system of User’s computer </li>
              <li>&mdash; The date and time of User’s access to the Site </li>
              <li>&mdash; The type and version of the browser used to access the Site </li>
              <li>&mdash; The IP address from which User accesses the Site</li>
              <li>&mdash; The pages the user has visited</li>
              <li>&mdash; If User linked to the Site from another website, the address of that other website; etc. </li>
            </ul>

            <p>Regularly reviewing this page ensures that Users are always aware of what information we collect and how we use it. </p>

            <h6>Cookies</h6>

            <p>Cookies are small text files sent by a web server and stored on a visitor's browser which are read by the server when Users re-visit a website. Cookies are used to store information such as passwords (encrypted), user-names, interests, shopping preferences, etc., allowing Users to re-visit a website without having to enter the same information again. Cookies are not used to determine the personal identity of visitors to the Site. </p>

            <h6>Personal Data </h6>

            <p>To open a demo or a trading account with EZYFX, Users need to provide certain information (hereinafter referred to as “Personal Data”) about themselves. The Personal Data that we collect may include: </p>

            <ul class="ppro">
              <li>&mdash; Information provided on applications and other forms on the Site, such as full name, address, date of birth, passport data, or other identification information </li>
              <li>&mdash; Personal phone number </li>
              <li>&mdash; Financial information that may include investment experience </li>
              <li>&mdash; Documentation made available to us to confirm identity, such as ID card, passport, utilities, etc., for individual customers  </li>
              <li>&mdash; Company incorporation information for business clients </li>
              <li>&mdash; Payment documents, such as money transfer orders, bank statements, etc.  </li>
            </ul>

            <h6>Use of Personal Data </h6>
            <p>EZYFX may use a User's Personal Data for one or more of the purposes below: </p>

            <ul class="ppro">
              <li>&mdash; To verify User's identity  </li>
              <li>&mdash; To process trading or non-trading operations </li>
              <li>&mdash; To perform anti-money laundering procedures </li>
              <li>&mdash; To keep an accurate and up-to-date record of User’s account data  </li>
              <li>&mdash; To provide information to the User about specific products and services of EZYFX that we believe will be most suitable for him.  </li>
            </ul>

            <h6>Confidentiality in Respect of User IDs and Passwords </h6>

            <p>Users are obliged to keep user IDs, passwords and other means of identification secret. Users shall not store their user IDs, passwords or other means of identification in their browsers and shall delete all temporary files stored in their cache memory as well as surfing history. Users are solely responsible should such means of identification be communicated to, discovered or misused by a third party, and for any and all losses and damages that may result therefrom. </p>

            <p>Users have taken note of the fact that they should disconnect from the identification services proposed by EZYFX before leaving their Internet station. </p>

            <h6>Confidentiality and Encryption </h6>

            <p>The data exchanged between Users and EZYFX is transmitted via open, public networks (such as the Internet) that are not subject to any controls or reviews. Even if the data transmitted is encrypted, it may not necessarily stay encrypted for the entire duration of the transmission, nor may it necessarily remain encrypted at User’s end: it is possible that data may be intercepted. </p>

            <p>Furthermore, Users hereby declare that they have taken note that the legislation applicable in their country may prohibit or restrict the importing, exporting or use of encryption logarithms. In no event shall EZYFX be responsible for any violations of measures governing the importing, exporting or use of encryption logarithms. User alone shall be responsible in the event of any such violation.</p>

            <p>Lastly, User attention is drawn to the fact that information transmitted electronically, e.g. by e-mail, SMS, etc., is in principle not encrypted and may be intercepted.</p>

            <p>If you have any questions about this Privacy Policy or how EZYFX processes your personal information, please contact us by email at <a href="mailto:support@ezyfx.la">support@ezyfx.la</a></p>


            <h4>RISK DISCLOSURE</h4>

            <p>EZYFX Limited., operating under the trading name EZYFX, having its registered address at S.I.P. Building,
P.O Box 3010, Rue Pasteur, Port Vila, Vanuatu, registration number 17925, hereinafter collectively referred
to as “EZYFX”, we”, or “us”, is authorised and recognized by Vanuatu FSC as one of the Registered
Financial Service Provider (FSP). </p>

            <p>“The Site” shall refer collectively to ezyfx.la website and its available language versions and domain names. </p>

            <p>“Client” shall refer to any person or entity who registered an account at the Site, or who is using, visiting or
otherwise accessing the Site. </p>

            <p>This document is a disclosure by EZYFX Limited, of the potential risks involved in trading on financial
            markets. The document cannot and does not disclose all risks and all other considerable aspects inherent in
            trading on financial markets. The client should first and foremost be aware of the potential losses related to
            this activity. </p>

            <p>The client hereby acknowledges, understands and agrees that:</p>

            <p><strong>Trading is highly speculative and risky</strong></p>

            <p>Trading CFDs or any other derivate product is highly speculative, involves a high-degree of risk of loss and
may not be appropriate for all clients, but only for those clients who:</p>

            <ul class="ppro">
              <li>&mdash; Understand and are willing to assume the economic, legal and other risks and costs involved;  </li>
              <li>&mdash; Have knowledge and experience in trading in derivatives and in underlying asset types, as well as
enough time to manage their investment in an active basis; and  </li>
              <li>&mdash; Are able to assume financial losses significantly in excess of margin or deposits as clients may lose
the total value of the contract not just the margin or the deposit.  </li>
            </ul>

            <p>The client is the only responsible person for all the losses suffered in his account. Therefore, the client
should be prepared that he may lose all of his investments. Clients are advised not to invest money they
cannot afford to lose. </p>

            <p><strong>Through EZYFX Limited clients can trade CFDs on forex (FX), spot metals, futures and shares. </strong></p>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>




<?php include('includes/footer.php'); ?>

<script>
  $(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});
</script>
