<!DOCTYPE html>
<html>
  <head>
  <title>MainPage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
  <link href="css/credit.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
</head>

  <title>Application for Credit Facility</title>
  <script>
    function showPopup() {
      var popup = document.getElementById('popup');
      popup.style.visibility = 'visible';
      popup.style.opacity = 1;
    }

    function hidePopup() {
      var popup = document.getElementById('popup');
      popup.style.visibility = 'hidden';
      popup.style.opacity = 0;
    }
  </script>
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
        <li><a href="EFTForm.php">EFT Form</a></li>
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
  <h1>Application for Credit Facility</h1>
  <form>
    <label for="date">Date:</label>
    <input type="text" id="date" name="date" required>
    <br><br>
    <label for="ceo">Chief Executive Officer<br>LankaBangla Securities Ltd<br>9/E, Motijheel C/A, Dhaka</label>
    <br><br>
    <p>
      I/We, <input type="text" id="user-name" name="user-name" placeholder="Enter full name" required>,
      <input type="text" id="client-code" name="client-code" placeholder="Enter client code" required>,
      would like to avail the credit facility from your company for purchasing shares/securities through your broker house.
    </p>
    <p>I furnish herewith the necessary information/documents for your kind perusal.</p>
    <p>Your faithfully</p>
    <br><br>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br><br>
    <label for="code">Code:</label>
    <input type="text" id="code" name="code" required>
    <br><br>
    <label for="bo">BO:</label>
    <input type="text" id="bo" name="bo" required>
    <br><br>
    <input type="button" value="Submit" onclick="showPopup()">
  </form>

  <div class="popup" id="popup">
    <div class="popup-content">
      <h2>TERMS AND CONDITIONS</h2>
      <p>
        <strong>DEFINITIONS</strong><br>
        "SECURITIES ACCOUNT" Shall mean the account opened by the CLIENT with the BROKER to deposit/Sell/buy securities with the B "APPROVED SECURITIES" Shall mean the securities purchased into the SECURITIES Account. "PORTFOLIO VALUE" means total market value of all the stocks in the SECURITIES Account. "MARGIN CALL" Shall mean request the "CLIENT "to deposit money or share to bring the Debit Balance below ... ... % of the portfolio Value within 24 Hours. "DEBIT BALANCE" Shall mean the total value of cash owned by the CLIENT together with any interest to the BROKER in the SECUR ACCOUNT for securities purchased into the account.
      </p>
      <p>
        <strong>TERMS AND CONDITIONS</strong><br>
        1. This will strictly be a short-term facility and valid up-to................................................<br>
        2. The "broker" will have absolute discretion to accept or decline any security, against which credit facility is granted and shall reserve the right to make changes to their list of "approved securities" at any given moment.<br>
        3. Using the credit facility, the Client may purchase quoted securities through the Broker into the "Securities Account" to a maximum value of.... % of the "Portfolio value" or Tk .................................... whichever is lower. The Client shall at all times be responsible to maintain strictly the maximum limit of the "Debit Balance" at any given time. If Debit balance goes above............% of portfolio value due to fluctuation in the market or any other event, LBSL will issue a "Margin Call" to the client.. Margin Call could be writing or via telephone call.<br>
        4. In the case of "Broker" omitting a particular security/securities from the list of "approved securities," the Client shall accordingly adjust the "Portfolio value" or the "Debit balance" within two market days.<br>
        5. If the client doesn't respond to Margin Call, in that case LBSL will sell out whatever shares as the Broker sees fit to regularize the "Debit balance" to..........% of the "portfolio value." (+/-5% deviation is accepted in case of adjustment).<br>
        6. If the "Debit balance" reaches to...........% of portfolio value due to a sudden fall in the market or any other event, then in such a case without any notice in that trading day or the next day, LBSL will sell out shares of any company whatsoever as it sees fit to make the Debit Balance nil. Any residual shares will remain in the account and will be available to the client.<br>
        7. If the Client exceeds the value of the "Debit Balance" above the stipulated limit and/or violates any other terms and conditions/rules/requirements as laid down by the "Broker" or any regulatory authority from time to time, the Broker shall have absolute discretion at the "Client's risk to sell/buy any or all shares or securities of any Company whatsoever in the Client's "Securities Account" without any consent of any form from the Client in order to adjust the Debit Balance of the "Securities Account". In the event the Portfolio value of the "Securities Account" becomes inadequate to regularize the "Debit Balance", the Client shall be under obligation to make cash payment to settle any shortfall.<br>
        8. The Client shall pay brokerage commission for all transactions, i.e., buy and sell, in the "Securities Account". The Client shall also pay brokerage commission for all transactions carried out in order to regularize the "Securities Account". The rate of brokerage will be fixed by the "Broker" and can change from time to time.<br>
        9. In the "Securities account," if the client enjoys margin facilities, in that case, the highest limit to buy a single stock is Tk.................................... or..........% of the portfolio value, whichever is lower.<br>
        10. "Broker" shall have the authority to give notice to the client to adjust the debit balance in "Securities Account" within 20 trading days for whatever reason which "Broker" reserves the right to divulge to Client. If the client doesn't respond to such notice, "Broker" shall have absolute discretion at the Client's risk to sell/buy any or all shares or securities in any company whatsoever in the Client's "Securities Account" without any consent of any form from the client in order to adjust the Debit Balance of the "Securities Account".<br>
        11. "Broker" will charge .........% P.A. Interest on the client's account for any debit amount, calculated on a daily basis. LBSL reserves the right to increase/decrease the interest rate by giving 7 trading days' notice to the client.<br>
        12. The "Securities Account" will be fully operated (All Buy/Sell decisions) by the client at all times other than in the instance of "Broker" regularizing the account which has been explained in clauses 5, 6, 7, and 10.<br>
        13. The "Broker" shall have the right to change, rectify, include any terms and conditions in addition to the above at any time with due notice to the client.<br>
      </p>
      <p>
        <strong>NOMINEE</strong><br>
        • In the event of the death of one of the joint account holders, the survivor: and on the death of the sole account holder, the nominee Or successor shall be the beneficiary of the transactions.<br>
        <strong>GOVERNING LAW</strong><br>
        • All transactions shall be subject to the Rules and Regulations of the Securities and Exchange Commission of Bangladesh, Dhaka Stock Exchange Ltd., and other prevailing laws and regulations of Bangladesh and, in particular, the authority hereinafter granted by the client to the BROKER.
      </p>

      <div class="popup-buttons">
        <button onclick="hidePopup()">Deny</button>
        <button onclick="submitForm()">Accept</button>
      </div>
    </div>
  </div>

  <script>
    function submitForm() {
      // eikhane php er code jaibo submission er bujhla
      alert('Form submitted successfully!');
      hidePopup();
    }
  </script>
</body>
</html>
