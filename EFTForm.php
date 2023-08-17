<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELECTRONIC FUND TRANSFER (EFT) Enrollment Form</title>
    <link href="css/style.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/EFT.css">
</head>
<body>

  <!-- Menu -->
  <div class="navbar">
    <div class="logo-container">
      <a href="mainpage.php">
      <img class="logo" src="imgs/Logo.png" alt="Logo">
    </div>
    <ul class="navbar-items">
  <li class="navbar-item"><a href="aboutus.php">About</a></li>
  <li class="navbar-item"><a href="login.php">Login</a></li>
  <li class="navbar-item signup"><a href="signup.php">Sign up</a></li>
  
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
<body>
   <div class="container">
        <h1>ELECTRONIC FUND TRANSFER (EFT) Enrollment Form</h1>
        <form action="process_form.php" method="post">
            <div class="input-row">
             <div class="input-wrapper">
                <label for="clientCode">Client Code:</label>
                <input type="text" name="clientCode" id="clientCode" class="input-field">
             </div>
    
             <div class="input-wrapper">
                <label for="date">Date:</label>
                <input type="text" name="date" id="date" class="input-field">
             </div>
            </div>

            
            <label for="clientName">Client Name:</label>
            <input type="text" name="clientName" id="clientName">
            
            <label for="mobile">Mobile:</label>
              <div class="input-field-wrapper">
                  <span id="country-code">+880</span>
                  <input type="text" name="mobile" id="mobile" class="input-field">
              </div>

            
            <p class="authorization">
            <input type="checkbox" name="authorize" id="authorize">
              I/We do hereby authorize LBSL to register the following Bank Account for the purpose of electronic fund transfer (EFT). By signing below, I/we agree to enroll in the electronic funds transfer service.
            </p>

            <label for="bankName">Bank Name:</label>
            <input type="text" name="bankName" id="bankName">
            
            <label for="bankAccount">Bank A/C:</label>
            <input type="text" name="bankAccount" id="bankAccount">
            
            <label for="branchName">Branch Name:</label>
            <input type="text" name="branchName" id="branchName">
            
            <label for="routingNumber">Routing Number:</label>
            <input type="text" name="routingNumber" id="routingNumber">
            
            <div class="terms">
    <h2>TERMS AND CONDITIONS</h2>
    <ol>
        <div class="term-item">
            <input type="checkbox" name="terms[]" value="1">
            <p>LBSL will transfer funds electronically from the customer’s trading account to customer Bank account registers on this EFT Enrollment Form</p>
        </div>
        <div class="term-item">
            <input type="checkbox" name="terms[]" value="2">
            <p>It is the customer’s sole responsibility to ensure that their bank account information is correct and accurate. LBSL is not responsible for any payment processing errors or fees incurred if accurate account information is not provided.</p>
        </div>
        <div class="term-item">
            <input type="checkbox" name="terms[]" value="3">
            <p>LBSL reserves the right to reject the EFT Enrollment Application Form.</p>
        </div>
        <div class="term-item">
            <input type="checkbox" name="terms[]" value="4">
            <p>Any changes made to this EFT Enrollment Form must be updated in person at the LBSL office. This may require a new EFT enrollment application process.</p>
        </div>
        <div class="term-item">
            <input type="checkbox" name="terms[]" value="5">
            <p>Terms and conditions may be changed without prior notice due to the amendment of relevant regulatory policy by the pertinent Government regulatory body, such as the Securities and Exchange Commission.</p>
        </div>
        <div class="term-item">
            <input type="checkbox" name="terms[]" value="6">
            <p>
                EFT services will be discontinued if:
                <ul>
                    <div>The registered account is not active or closed.</div>
                    <div>The registered account is not active or closed.</div>
                </ul>
            </p>
        </div>
        <div class="term-item">
            <input type="checkbox" name="terms[]" value="7">
            <p>All questions and concerns regarding the EFT service should be directed to the CEO & Director of LBSL.</p>
        </div>
        <div class="term-item">
            <input type="checkbox" name="terms[]" value="8">
            <p>LBSL is not responsible for technical errors or difficulties beyond LBSL’s control that may arise during the process of Electronic Fund Transfer.</p>
        </div>
        <div class="term-item">
            <input type="checkbox" name="terms[]" value="9">
            <p>The account holder has to annex a copy of a cheque leaf of the account or a bank statement or a bank certificate of the account with the EFT FORM.</p>
        </div>
    </ol>
</div>


            
            <div class="signature">
                <p>Signature of First Account Holder: ____________________</p>
                <p>Signature Verified By: ____________________</p>
                <p>Posted By: ____________________</p>
                <p>Posting Verified By: ____________________</p>
            </div>
            
            <input type="submit" value="Submit">
        </form>
    </div>
    
</body>
</html>
