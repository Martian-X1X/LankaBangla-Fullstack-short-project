<!DOCTYPE html>
<html>
<head>
  <title>MainPage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
  <link href="css/customerform.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
</head>
<body>
  <!-- Menu -->
  <div class="navbar">
    <div class="logo-container">
      <a href="mainpage.php">
      <img class="logo" src="imgs/Logo.png" alt="Logo">
    </div>
    <ul class="navbar-items">
  <div class="dropdown">
    <button class="dropbtn">Menu</button>
    <div class="dropdown-content">
      <li><a href="customer_form.php">Customer Account Form</a></li>
        <li><a href="credit_facility.php">Application Credit Facility</a></li>
        <li><a href="bo_form.php">BO Form</a></li>
        <li><a href="EFTForm">EFT Form</a></li>
    </div>
  </div>
  <li class="navbar-item"><a href="aboutus.php">About</a></li>
  <li class="navbar-item"><a href="mainpage.php">Logout</a></li>
  
</ul>


    <div>
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
          <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
          <use href="#gentle-wave" />
          <use href="#gentle-wave" />
          <use href="#gentle-wave" />
          <use href="#gentle-wave" />
        </g>
      </svg>
    </div>
    <!--Waves end-->

  </div>

  <!--form-->
  <div class="form-heading">
    CUSTOMER ACCOUNT INFORMATION FORM
  </div>

  <button type="button" onclick="autoFillForm()">Auto Fill Form</button>

  <!--start of form code--> 
  <form method="post" action="save_data.php" id="myForm" enctype="multipart/form-data">
    
    <div class="client-s">
        <div class="form-field">
          <label for="client-code">Client Code:</label>
          <input type="text" id="client-code" name="client-code" required>
        </div>
    
        
    <div class="link-s">
        <div class="form-field">
          <label for="link-code">Link Code:</label>
          <input type="text" id="link-code" name="link-code" required>
        </div>
        

    <div class="form-field">
      <label for="account-type">Account Type:</label>
        <div class="cash-marg">
          <label class="checkbox-label"><input type="radio" name="account-type" value="Cash"> Cash</label>
          <label class="checkbox-label"><input type="radio" name="account-type" value="Margin"> Margin</label>
        </div>
    </div>
  </div>
  </div>
       

    <div style="text-align: center;">
          <h2>FIRST ACCOUNT HOLDER</h2>
    </div>

    <div class="first-acc">
        <div class="form-field">
          <label for="first-account-holder-photo">First Account Holder Photo:</label>
          <input type="file" id="first-account-holder-photo" name="first-account-holder-photo" accept="image/*" required>
          <img id="first_account_holder_photo_preview" src="" alt="Preview" style="display: none;">
        </div>

        <div class="form-field">
          <label for="first-account-holder-name">Name of the customer:</label>
          <input type="text" id="first-account-holder-name" name="first-account-holder-name" required>
        </div>

        <div class="form-field">
          <label for="first-account-holder-father-name">Father/Husband's Name:</label>
          <input type="text" id="first-account-holder-father-name" name="first-account-holder-father-name" required>
        </div>

        <div class="form-field">
          <label for="first-account-holder-mother-name">Mother's Name:</label>
          <input type="text" id="first-account-holder-mother-name" name="first-account-holder-mother-name" required>
        </div>

        <div class="dob-gen-nat">
            <div class="form-field">
              <label for="first-account-holder-date-of-birth">Date of Birth:</label>
              <input type="date" id="first-account-holder-date-of-birth" name="first-account-holder-date-of-birth" required>
            </div>

            <div class="form-field sex">
              <label>Sex:</label>
              <label class="checkbox-label"><input type="radio" name="first-account-holder-sex" value="Male"> Male</label>
              <label class="checkbox-label"><input type="radio" name="first-account-holder-sex" value="Female"> Female</label>
            </div>

            <div class="form-field">
              <label for="first-account-holder-nationality">Nationality:</label>
              <input type="text" id="first-account-holder-nationality" name="first-account-holder-nationality" required>
            </div>
        </div>    

        <div class="ad-mob-tel">
            <div class="form-field">
              <label for="first-account-holder-present-address">Present Address:</label>
              <input type="text" id="first-account-holder-present-address" name="first-account-holder-present-address" required>
            </div>

            <div class="form-field">
              <label for="first-account-holder-mobile">Mobile:</label>
              <input type="tel" id="first-account-holder-mobile" name="first-account-holder-mobile" required>
            </div>

            <div class="form-field">
              <label for="first-account-holder-telephone">Telephone Number:</label>
              <input type="tel" id="first-account-holder-telephone" name="first-account-holder-telephone">
            </div>
        </div>    

        <div class="ad-tel">
            <div class="form-field">
              <label for="first-account-holder-permanent-address">Permanent Address:</label>
              <input type="text" id="first-account-holder-permanent-address" name="first-account-holder-permanent-address" required>
            </div>

            <div class="form-field">
              <label for="first-account-holder-permanent-telephone">Telephone Number:</label>
              <input type="tel" id="first-account-holder-permanent-telephone" name="first-account-holder-permanent-telephone">
            </div>
        </div>    

        <div class="em-oc-tin">
            <div class="form-field">
              <label for="first-account-holder-email">Email ID:</label>
              <input type="email" id="first-account-holder-email" name="first-account-holder-email" required>
            </div>

            <div class="form-field">
              <label for="first-account-holder-occupation">Occupation:</label>
              <input type="text" id="first-account-holder-occupation" name="first-account-holder-occupation" required>
            </div>

            <div class="form-field">
              <label for="first-account-holder-e-tin">E-Tin number:</label>
              <input type="text" id="first-account-holder-e-tin" name="first-account-holder-e-tin">
            </div>
        </div>
    </div>        

    

    <div style="text-align: center; margin:30px auto;">
          <h2>Joint ACCOUNT HOLDER</h2>
    </div>

    <div class="joint-acc">
        <div class="form-field">
          <label for="joint-account-holder-photo">Joint Account Holder Photo:</label>
          <input type="file" id="joint-account-holder-photo" name="joint-account-holder-photo" accept="image/*" required>
          <img id="joint_account_holder_photo_preview" src="" alt="Preview" style="display: none;">
        </div>

        <div class="form-field">
          <label for="joint-account-holder-name">Name of the customer:</label>
          <input type="text" id="joint-account-holder-name" name="joint-account-holder-name" required>
        </div>

        <div class="form-field">
          <label for="joint-account-holder-father-name">Father/Husband's Name:</label>
          <input type="text" id="joint-account-holder-father-name" name="joint-account-holder-father-name" required>
        </div>

        <div class="form-field">
          <label for="joint-account-holder-mother-name">Mother's Name:</label>
          <input type="text" id="joint-account-holder-mother-name" name="joint-account-holder-mother-name" required>
        </div>

        <div class="dob-gen-nat">
            <div class="form-field">
              <label for="joint-account-holder-date-of-birth">Date of Birth:</label>
              <input type="date" id="joint-account-holder-date-of-birth" name="joint-account-holder-date-of-birth" required>
            </div>

            <div class="form-field sex">
              <label>Sex:</label>
              <label class="checkbox-label"><input type="radio" name="joint-account-holder-sex" value="Male"> Male</label>
              <label class="checkbox-label"><input type="radio" name="joint-account-holder-sex" value="Female"> Female</label>
            </div>

            <div class="form-field">
              <label for="joint-account-holder-nationality">Nationality:</label>
              <input type="text" id="joint-account-holder-nationality" name="joint-account-holder-nationality" required>
            </div>
        </div>    

        <div class="ad-mob-tel">
            <div class="form-field">
              <label for="joint-account-holder-present-address">Present Address:</label>
              <input type="text" id="joint-account-holder-present-address" name="joint-account-holder-present-address" required>
            </div>

            <div class="form-field">
              <label for="joint-account-holder-mobile">Mobile:</label>
              <input type="tel" id="joint-account-holder-mobile" name="joint-account-holder-mobile" required>
            </div>

            <div class="form-field">
              <label for="joint-account-holder-telephone">Telephone Number:</label>
              <input type="tel" id="joint-account-holder-telephone" name="joint-account-holder-telephone">
            </div>
        </div>    

        <div class="ad-tel">
            <div class="form-field">
              <label for="joint-account-holder-permanent-address">Permanent Address:</label>
              <input type="text" id="joint-account-holder-permanent-address" name="joint-account-holder-permanent-address" required>
            </div>

            <div class="form-field">
              <label for="joint-account-holder-permanent-telephone">Telephone Number:</label>
              <input type="tel" id="joint-account-holder-permanent-telephone" name="joint-account-holder-permanent-telephone">
            </div>
        </div>    

        <div class="em-oc-tin">
            <div class="form-field">
              <label for="joint-account-holder-email">Email ID:</label>
              <input type="email" id="joint-account-holder-email" name="joint-account-holder-email" required>
            </div>

            <div class="form-field">
              <label for="joint-account-holder-occupation">Occupation:</label>
              <input type="text" id="joint-account-holder-occupation" name="joint-account-holder-occupation" required>
            </div>

            <div class="form-field">
              <label for="joint-account-holder-e-tin">E-Tin number:</label>
              <input type="text" id="joint-account-holder-e-tin" name="joint-account-holder-e-tin">
            </div>
        </div>
    </div>        

    

    <div style="text-align: center;">
          <h2>Authorized Person Information</h2>
    </div>

    <div class="auth-acc">
        <div class="form-field">
          <label for="authorized-person-photo">Authorized Person Photo:</label>
          <input type="file" id="authorized-person-photo" name="authorized-person-photo" accept="image/*" required>
          <img id="authorized_person_photo_preview" src="" alt="Preview" style="display: none;">
        </div>

        <div class="form-field">
          <label for="authorized-person-name">Name of the customer:</label>
          <input type="text" id="authorized-person-name" name="authorized-person-name" required>
        </div>

        <div class="form-field">
          <label for="authorized-person-father-name">Father/Husband's Name:</label>
          <input type="text" id="authorized-person-father-name" name="authorized-person-father-name" required>
        </div>

        <div class="form-field">
          <label for="authorized-person-mother-name">Mother's Name:</label>
          <input type="text" id="authorized-person-mother-name" name="authorized-person-mother-name" required>
        </div>

        <div class="dob-gen-nat">
            <div class="form-field">
              <label for="authorized-person-date-of-birth">Date of Birth:</label>
              <input type="date" id="authorized-person-date-of-birth" name="authorized-person-date-of-birth" required>
            </div>

            <div class="form-field sex">
              <label>Sex:</label>
              <label class="checkbox-label"><input type="radio" name="authorized-person-sex" value="Male"> Male</label>
              <label class="checkbox-label"><input type="radio" name="authorized-person-sex" value="Female"> Female</label>
            </div>

            <div class="form-field">
              <label for="authorized-person-nationality">Nationality:</label>
              <input type="text" id="authorized-person-nationality" name="authorized-person-nationality" required>
            </div>
        </div>    

        <div class="ad-mob-tel">
            <div class="form-field">
              <label for="authorized-person-present-address">Present Address:</label>
              <input type="text" id="authorized-person-present-address" name="authorized-person-present-address" required>
            </div>

            <div class="form-field">
              <label for="authorized-person-mobile">Mobile:</label>
              <input type="tel" id="authorized-person-mobile" name="authorized-person-mobile" required>
            </div>

            <div class="form-field">
              <label for="authorized-person-telephone">Telephone Number:</label>
              <input type="tel" id="authorized-person-telephone" name="authorized-person-telephone">
            </div>
        </div>    

        <div class="ad-tel">
            <div class="form-field">
              <label for="authorized-person-permanent-address">Permanent Address:</label>
              <input type="text" id="authorized-person-permanent-address" name="authorized-person-permanent-address" required>
            </div>

            <div class="form-field">
              <label for="authorized-person-permanent-telephone">Telephone Number:</label>
              <input type="tel" id="authorized-person-permanent-telephone" name="authorized-person-permanent-telephone">
            </div>
        </div>    

        <div class="em-oc-tin">
            <div class="form-field">
              <label for="authorized-person-email">Email ID:</label>
              <input type="email" id="authorized-person-email" name="authorized-person-email" required>
            </div>

            <div class="form-field">
              <label for="authorized-person-occupation">Occupation:</label>
              <input type="text" id="authorized-person-occupation" name="authorized-person-occupation" required>
            </div>

            <div class="form-field">
              <label for="authorized-person-e-tin">E-Tin number:</label>
              <input type="text" id="authorized-person-e-tin" name="authorized-person-e-tin">
            </div>
        </div>
    </div>        

    <div class="stock-name">
        <div class="form-field">
          <label for="name-company">Officer/Director/Sponsor/Shareholder of any Stock Exchange Listed Company:</label>
          <select id="name-choice" name="name-choice">
          <option value="no">No</option>
          <option value="yes">Yes</option>
          </select>
        </div>

        <!--this division is for the condition field with yes/no-->
        <div class="form-field" id="conditional-field" style="display: none;">
          <label for="name-company">Name:</label>
          <input type="text" id="name-company" name="name-company">
        </div>
    </div>    

     
    <div class="bank-branch-acc-routing">
        <div class="form-field">
          <label for="bank-name">Bank Name:</label>
          <input type="text" id="bank-name" name="bank-name" required>
        </div>


        <div class="form-field">
          <label for="branch-name">Branch Name:</label>
          <input type="text" id="branch-name" name="branch-name" required>
        </div>


        <div class="form-field">
          <label for="account-number">Account Number:</label>
          <input type="text" id="account-number" name="account-number" required>
        </div>


        <div class="form-field">
          <label for="routing-number">Routing Number:</label>
          <input type="text" id="routing-number" name="routing-number" required>
        </div>
    </div>    

<div class="form-field">
  <input type="submit" value="Submit" class="submit-button" onclick="openPopup(event); return false;">
</div>

  </form>
<!--end of form code-->

  <!--this division handles the popup of T&C-->
  <div class="popup-container" id="popupContainer" style="display: none;">
    <div class="popup">
      <h1>TERMS AND CONDITIONS FOR OPENING A BROKERAGE ACCOUNT</h1>
                      <h2>DECLARATION/AGREEMENT</h2>
                      <p>I/We the undersigned whose information is given in the Brokerage Application Form hereby request to be registered as a client of LankaBangla Securities Limited, to open a brokerage account in my/our/company name. I/We further agree and confirm that the account hereby requested to be opened by me/us shall be held and be governed by the terms and conditions of this agreement as provided hereinafter and as may be modified from time to time by LankaBangla Securities Limited and that I/we/company name have/has the necessary authority and permission to enter this agreement.</p>
                      <h2>TERMS AND CONDITIONS</h2>
                      <p>Instruction: A written instruction shall be given to LankaBangla Securities Limited from time to time to purchase and /or sell investments (which shall mean and include stocks, debentures, mutual funds and private placement or any other similar financial instrument as may be made available from time to time) on behalf of the account holder. On receipt of such instructions along with a cash deposit or delivery of shares, LankaBangla Securities Limited shall, so far as LankaBangla Securities Limited considers it reasonably practicable, purchase and/or sell investments in accordance with those instructions, provided always that (I) any such dealings do not contravene any applicable laws or regulations; (II) LangkaBangla Securities Limited shall have an absolute discretion to accept or reject purchase/sell instructions and (III) accounts holder's instruction shall include the following details:</p>
                      <ul class="custom-list">
                        <li>The name of the investment.</li>
                        <li>Quantity</li>
                        <li>Price with notification of limit or discretion.</li>
                        <li>The duration of the order.</li>
                        <li>The nature of the lot (i.e. scrip size) for sale or the desired format for purchase order (See Note below).</li>
                        <li>The order should specify completion formats of:</li>
                        <ul class="custom-list">
                          <li>All or partial fill with minimum trade value or number of shares.</li>
                          <li>Mode of execution i.e. DVP (Delivery versus payment)/NON DVP (non delivery versus payment).</li>
                        </ul>
                      </ul>
                      <p>(Note: The number of shares constituting a "market lot" may change. Sellers must include the exact format of their holding. This has a direct impact on market pricing given the predominantly retail nature of the market. Trades may fail where non-agreed lot sizes are delivered).</p>
                      <h2>Joint Accounts</h2>
                      <p>If this is a joint account, unless the account holders notify LankaBangla Securities Limited otherwise and provide such documentation as LankaBangla Securities Limited may require at its sole discretion, the brokerage account(s) shall be held by the account holders jointly with rights or survivorship (payable to either or the survivor). Under these terms and conditions each joint account holder irrevocably appoints the other as attorney in fact to take all action on his or her behalf and to represent him or her in all respects in connection with this agreement. LankaBangla Securities Limited shall be fully protected and indemnified in acting but shall not be required to act upon the instruction of either of the account holder, who shall be liable, jointly or severally, for any amounts due to LankaBangla Securities Limited pursuant to this agreement, whether incurred by either both of the account holders.</p>
                      <h2>Risk</h2>
                      <p>The account holder understand(s) that the stock market is a rapidly changing market and that there is an inherent risk in incurring loss in share dealings, which LankaBangla Securities Limited, is not in any way whatsoever liable and/or responsible for the share dealings of the account holder.</p>
                      <h2>Limit Orders</h2>
                      <p>While LankaBangla Securities Limited will endeavor to purchase or sell the investment within the limits of the prices that may be notified by the account holder, LankaBangla Securities Limited does not guarantee or assure that the transactions will be realized on such notified limits. LankaBangla Securities Limited will always endeavor to obtain the best price.</p>
                      <h2>Agents</h2>
                      <p>LankaBangla Securities Limited is authorized to employ other brokers as agents to perform all or part of its duties under these terms and conditions and to provide information regarding the account to such agents. LankaBangla Securities Limited may seek and act on an opinion from any lawyer, accountant or professional adviser or other expert and shall not incur any liability by acting upon such opinion.</p>
                      <h2>Associate Companies</h2>
                      <p>LankaBangla Securities Limited may purchase and / or sell investment on behalf of the account holder by placing order with itself and other company whether acting as underwriter(s), investment manager(s), merchant or commercial bank(s), registered or licensed deposit-taker(s), broker (s), dealer(s) or otherwise, or with any other broker(s) and dealer(s) as LankaBangla Securities Limited in its sole discretion may decide.</p>
                      <h2>All Rules and Regulations of the Stock Exchange(s)</h2>
                      <p>All transactions duly concluded through and recognized by the Dhaka & Chittagong Stock Exchange Limited (hereafter DSE & CSE) are governed by the respective rules of DSE & CSE relating to trading and settlement in particular and will be binding on both the parties concerned.</p>
                      <h2>Payment and Disclosure</h2>
                      <p>LankaBangla Securities Limited shall not be obliged to make any payment on behalf of the account holders. LankaBangla Securities Limited may disclose information regarding the account holder or his/her dealings in relation to this agreement to any department of the government or public body upon request, whether or not such request is in fact legally enforceable, and LankaBangla Securities Limited will not be liable in any way to the account holder for doing so.</p>
                      <h2>Cancellation provisions</h2>
                      <p>LankaBangla Securities Limited is authorized, in its absolute discretion, should the undersigned die or should LankaBangla Securities Limited, for any reason whatsoever, deem it necessary for its protection, without notice, or for any reason to cancel any outstanding orders in order to close out the accounts of the account holder, in whole or in part, or to close out any commitment made on behalf of the account holder.</p>
                      <h2>Indemnity</h2>
                      <p>In the event of a default, omission, or act committed by LankaBangla Securities Limited as a broker/member of the DSE & CSE, the account holder shall be indemnified if and only as provided by the Rules and Regulation of the DSE & CSE.</p>
                      <h2>Confirmation and Settlements</h2>
                      <p>LankaBangla Securities Limited shall use its best endeavors to provide the account holder with (a) written confirmation of each transaction it has effected on instructions and (b) contract notes (in such form as LankaBangla Securities Limited shall determine) surfacing forth (i) details of the trade date, value date, settlement date, quantity, price, commission rate, and DSE Howla' number equivalent provided also that the account holder does hereby agree and undertake to confirm in writing beforehand of all its/their instructions.</p>
                      <h2>Fees and expenses</h2>
                      <p>The account holder will pay a brokerage commission of, and any other related expenses as charged that may from time to time be applicable, every transaction concluded through and recognized by the DSE is subject to transaction levies or other fees imposed by the DSE. The account holder understands, acknowledges and accepts that the rate of commission may be changed from time to time at the discretion of LankaBangla Securities Limited.</p>
                      <h2>Set-off</h2>
                      <p>LankaBangla Securities Limited shall be entitled to, in respect of all commission, costs, charges or expenses, set off from any monies from time to time held by LankaBangla Securities Limited for the account holder and if such monies are insufficient for the purpose, to sell any investment held by LankaBangla Securities Limited or any of its agents on behalf of the account holder without notification, recourse or instruction from the account holder.</p>
                      <h2>Period</h2>
                      <p>This agreement shall remain in force for a period of [insert duration] from the date of signing.</p>
                      <h2>Terminations</h2>
                      <p>This agreement will stand terminated:</p>
                      <ol class="custom-list">
                        <li>Upon the expiry of the period of this Agreement unless renewed upon mutual agreement between LankaBangla Securities Limited and the Account Holder.</li>
                        <li>Before the expiry of the period of this Agreement, if either LankaBangla Securities Limited or the Account Holder Gives [insert notice period]. Termination shall not absolve the parties from completing accounts and adjusting any outstanding dues or respective rights and obligations under this agreement.</li>
                        <li>If the account holder fails to make payment for any transaction upon due notice for a period of [insert number of days].</li>
                      </ol>
                      <h2>Assignment</h2>
                      <p>The benefits/rights and burdens/obligations of this agreement are capable of assignment of both the account holder and LankaBangla Securities Limited without the consent of the other, but the notice of assignment must be given to the other in writing.</p>
                      <h2>Force Majeur</h2>
                      <p>LankaBangla Securities Limited shall not be liable for any loss, damages, expenses, costs, or otherwise resulting directly or indirectly from any Government restriction, exchange ruling, suspension of trading, war, strike/national disaster, or any other event or force majeure or circumstances beyond its control.</p>
                      <h2>Forged Shares</h2>
                      <p>LankaBangla Securities Limited shall not be liable or responsible for any shares that are found to be forged. However, LankaBangla Securities Limited will make every attempt to replace the forged shares from the seller.</p>
                      <h2>Law</h2>
                      <p>The terms and conditions contained herein shall be governed by and be construed in accordance with the laws of Bangladesh.</p>
                      <h2>Notices</h2>
                      <p>All notices, instructions, or other communications shall be given in English and in writing (facsimile, telex, telegram, cable, or letter) or orally and shall be sent to LankaBangla Securities Limited and the account Holder at the address, fax and/or telex number shown herein or at such other address as may be communicated by the parties here to in writing.</p>
                      <p>Proof of delivery or dispatch shall be:</p>
                      <ol class="custom-list">
                        <li>In the case of a letter: dispatch of the letter duly stamped and addressed.</li>
                        <li>In the case of facsimile, telex, telegram, or cable: on the day of dispatch with physical or actual confirmation.</li>
                      </ol>
                      <p>All verbal notices, instructions, or other communications should be confirmed in writing within 24 hours.</p>
                      <h2>Definitions</h2>
                      <p>Words defined herein, save where a contrary meaning appears or such meaning is inconsistent with the context, shall have the same defined meaning wherever used.</p>
                      <h2>Sums Due</h2>
                      <p>For all purposes, including any legal proceedings, a certificate by any of LankaBangla Securities Limited officers confirming the monies and/or liabilities for the time being due and/or incurred to by the account holder shall be conclusive evidence thereof against him/her.</p>
                      <h2>Disputes and Resolution of Dispute</h2>
                      <p>In case of any dispute arising between the LankaBangla Securities Limited and the account holder in connection with the interpretation or enforcement of the terms and conditions contained herein, attempts should be made to settle the matter amicably. In case of failure to settle the matter amicably, the same shall be referred to arbitration of two arbitrators, each to be nominated by the parties who shall also appoint an Umpire. The decision of the arbitrators, so nominated, shall be binding on both the parties. The arbitration shall be conducted in accordance with the Arbitration Act, 2001.</p>
                      <p>I/We have read the terms and conditions contained herein above and having agreed with such terms and conditions I /We put my/our/company seal and signature on this the day of [insert date].</p>
                      
      
      <div class="popup-buttons">
        <button onclick="acceptTerms()">Accept</button>
        <button onclick="denyTerms()">Deny</button>
      </div>
    </div>
  </div>



</body>
</html>


<script>
  //this part is for that condition yes/no
  document.getElementById("name-choice").addEventListener("change", function() {
    var conditionalField = document.getElementById("conditional-field");
    var additionalName = document.getElementById("name-company");

    if (this.value === "yes") {
      conditionalField.style.display = "block";
      additionalName.setAttribute("required", "required");
    } else {
      conditionalField.style.display = "none";
      additionalName.removeAttribute("required");
      additionalName.value = "";
    }
  });

   //this part is for the autofill mattu baccha kichu change korle khobor ase
   function autoFillForm() {
    var previouslyEnteredValues = {
      "client-code": "12345",
      "link-code": "67890",
      "account-type": "Cash",
      "first-account-holder-name": "Abdullah MC",
      "first-account-holder-father-name": "Abdullah Baap",
      "first-account-holder-mother-name": "Abdullah Ma",
      "first-account-holder-date-of-birth": "1990-01-01",
      "first-account-holder-sex": "Male",
      "first-account-holder-nationality": "Geram",
      "first-account-holder-present-address": "Khet",
      "first-account-holder-mobile": "1234567890",
      "first-account-holder-telephone": "9876543210",
      "first-account-holder-permanent-address": "Barisal Monu",
      "first-account-holder-permanent-telephone": "5555555555",
      "first-account-holder-email": "abdullah@bokachoda.com",
      "first-account-holder-occupation": "Tokai",
      "first-account-holder-e-tin": "1234567890",
      "joint-account-holder-name": "Sowad",
      "joint-account-holder-father-name": "Sowad Bap",
      "joint-account-holder-mother-name": "Sowad Ma",
      "joint-account-holder-date-of-birth": "1992-02-02",
      "joint-account-holder-sex": "Confused bhai",
      "joint-account-holder-nationality": "USA",
      "joint-account-holder-present-address": "123 Dance Floor",
      "joint-account-holder-mobile": "0987654321",
      "joint-account-holder-telephone": "0123456789",
      "joint-account-holder-permanent-address": "Vape Goodies",
      "joint-account-holder-permanent-telephone": "9999999999",
      "joint-account-holder-email": "sowad@shobarbaap.com",
      "joint-account-holder-occupation": "King",
      "joint-account-holder-e-tin": "0987654321",
      "authorized-person-name": "Syed",
      "authorized-person-father-name": "Syed Ali",
      "authorized-person-mother-name": "Syed Mom",
      "authorized-person-date-of-birth": "1985-05-05",
      "authorized-person-sex": "Male",
      "authorized-person-nationality": "USA",
      "authorized-person-present-address": "420 hoise toh",
      "authorized-person-mobile": "5432167890",
      "authorized-person-telephone": "0129876543",
      "authorized-person-permanent-address": "321 ar koto dibo",
      "authorized-person-permanent-telephone": "1111111111",
      "authorized-person-email": "syed@syed.com",
      "authorized-person-occupation": "partesina",
      "authorized-person-e-tin": "5432167890",
      "name-choice": "yes",
      "name-company": "Company ABC",
      "bank-name": "My Bank",
      "branch-name": "Main Branch",
      "account-number": "1234567890",
      "routing-number": "987654321"
      
    };

    for (var fieldName in previouslyEnteredValues) {
      if (previouslyEnteredValues.hasOwnProperty(fieldName)) {
        var fieldValue = previouslyEnteredValues[fieldName];
        var fieldElement = document.getElementById(fieldName);
        if (fieldElement) {
          if (fieldElement.type === "radio" || fieldElement.type === "checkbox") {
            
            var fieldOptions = document.getElementsByName(fieldName);
            for (var i = 0; i < fieldOptions.length; i++) {
              if (fieldOptions[i].value === fieldValue) {
                fieldOptions[i].checked = true;
                break;
              }
            }
          } else {
            
            fieldElement.value = fieldValue;
          }
        }
      }
    }
  }

function openPopup(event) {
  event.preventDefault();
  document.getElementById("popupContainer").style.display = "flex";
}

function acceptTerms() {
  document.getElementById("myForm").submit();
}

function denyTerms() {
  document.getElementById("popupContainer").style.display = "none";
}

// Function to show image preview
    function showPreview(input, previewId) {
    const file = input.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        const preview = document.getElementById(previewId);
        preview.src = e.target.result;
        preview.style.display = "block";
      };
      reader.readAsDataURL(file);
    }
  }

  // Show image preview on file input change
  document.getElementById("first-account-holder-photo").addEventListener("change", function () {
    showPreview(this, "first_account_holder_photo_preview");
  });

  document.getElementById("joint-account-holder-photo").addEventListener("change", function () {
    showPreview(this, "joint_account_holder_photo_preview");
  });

  document.getElementById("authorized-person-photo").addEventListener("change", function () {
    showPreview(this, "authorized_person_photo_preview");
  });


</script>
