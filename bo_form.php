<!DOCTYPE html>
<html>
<head>
  <title>MainPage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
  <link href="css/boform.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
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
        <li><a href="#">Application Credit Facility</a></li>
        <li><a href="collapsible.php">BO Form</a></li>
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

<div class="intro-container">
    <h1>BO Account Opening Form</h1>
    <p>By Law 7.3.3 (b)</p>
    <p>Please complete all details in CAPITAL letters. Please fill all names correctly. All communications shall be sent only to the First Named Account Holder's correspondence address.</p>
 </div>   

<form method="post" action="bo_insert.php" enctype="multipart/form-data">
    <div class="form-section">
        <div>
            <label for="applicationNumber">Application number:</label>
            <input type="text" id="applicationNumber" name="applicationNumber">
        </div>
        <div>
            <label for="boaccdate">Date:</label>
            <input type="date" id="boaccdate" name="boaccdate">
        </div>
    </div>

    <div class="form-section">
        <h3>BO Details</h3>
        <div>
            <label class="inline-label">BO Category:</label>
            <input type="radio" id="regular" name="boCategory" value="Regular">
            <label for="regular" class="inline-label">Regular</label>

            <input type="radio" id="omnibus" name="boCategory" value="Omnibus">
            <label for="omnibus" class="inline-label">Omnibus</label>

            <input type="radio" id="clearing" name="boCategory" value="Clearing">
            <label for="clearing" class="inline-label">Clearing</label>
        </div>
        <div>
            <label class="inline-label">BO Type:</label>
            <input type="radio" id="individual" name="boType" value="Individual">
            <label for="individual" class="inline-label">Individual</label>

            <input type="radio" id="company" name="boType" value="Company">
            <label for="company" class="inline-label">Company</label>

            <input type="radio" id="jointHolder" name="boType" value="Joint Holder">
            <label for="jointHolder" class="inline-label">Joint Holder</label>
        </div>
    </div>

    <div class="form-section">
        <h3>Name of CDBL Participant: LankaBangla Securities Ltd.</h3>
        <div>
            <label for="boaccparticipantID">CDBL Participant ID:</label>
            <input type="text" id="boaccparticipantID" name="boaccparticipantID">
        </div>
        <div>
            <label for="boformID">BO ID:</label>
            <input type="text" id="boformID" name="boformID">
        </div>
        <div>
            <label for="accountOpened">Date Account Opened:</label>
            <input type="date" id="accountOpened" name="accountOpened">
        </div>
    </div>


    <div class="form-section">
        <h3>1. First Applicant</h3>
        <div>
            <label for="fullName_first">Name in Full of Account Holder:</label>
            <input type="text" id="fullName_first" name="fullName_first">
        </div>
        <div>
            <label for="title_first">Title i.e. Mr./Mrs./Ms:</label>
            <select id="title_first" name="title_first">
            <option value="NA">Not Applicable</option>
            <option value="mr">Mr.</option>
            <option value="mrs">Mrs.</option>
            <option value="ms">Ms.</option>
            </select>
        </div>
        <div>
            <label for="contactPerson">In case of a Company/Firm/Statutory Body, name of Contact Person:</label>
            <input type="text" id="contactPerson" name="contactPerson">
        </div>
        <div>
            <label class="inline-label">In Case of Individual:</label>
            <input type="radio" id="male" name="incaseofindividual" value="Male">
            <label for="male" class="inline-label">Male</label>

            <input type="radio" id="female" name="incaseofindividual" value="Female">
            <label for="female" class="inline-label">Female</label>
        </div>
        <div>
            <label for="occupation">Occupation:</label>
            <input type="text" id="occupation" name="occupation">
        </div>
        <div>
            <label for="father_husband">Father's / Husband's Name:</label>
            <input type="text" id="father_husband" name="father_husband">
        </div>
        <div>
            <label for="mother_name">Mother's Name:</label>
            <input type="text" id="mother_name" name="mother_name">
        </div>
    </div>

    <div class="form-section">
        <h3>2. Contact Details</h3>
        <div>
            <label for="boaccaddress">Address:</label>
            <input type="text" id="boaccaddress" name="boaccaddress">
        </div>
        <div>
            <label for="boacccity">City:</label>
            <input type="text" id="boacccity" name="boacccity">
        </div>
        <div>
            <label for="post_code">Post Code:</label>
            <input type="text" id="post_code" name="post_code">
        </div>
        <div>
            <label for="state_division">State/Division:</label>
            <input type="text" id="state_division" name="state_division">
        </div>
        <div>
            <label for="boacccountry">Country:</label>
            <input type="text" id="boacccountry" name="boacccountry">
        </div>
        <div>
            <label for="boaacctelephone">Telephone:</label>
            <input type="text" id="boaacctelephone" name="boaacctelephone">
        </div>
        <div>
            <label for="mobile_phone">Mobile Phone:</label>
            <input type="text" id="mobile_phone" name="mobile_phone">
        </div>
        <div>
            <label for="boaccfax">Fax:</label>
            <input type="text" id="boaccfax" name="boaccfax">
        </div>
        <div>
            <label for="boaccemail">Email:</label>
            <input type="text" id="boaccemail" name="boaccemail">
        </div>
    </div>

    <div class="form-section">
        <h3>3. Passport Details</h3>
        <div>
            <label for="passport_number">Passport No:</label>
            <input type="text" id="passport_number" name="passport_number">
        </div>
        <div>
            <label for="issue_place">Issue Place:</label>
            <input type="text" id="issue_place" name="issue_place">
        </div>
        <div>
            <label for="issue_date">Issue Date:</label>
            <input type="date" id="issue_date" name="issue_date">
        </div>
        <div>
            <label for="expiry_date">Expiry Date:</label>
            <input type="date" id="expiry_date" name="expiry_date">
        </div>
    </div>

    <div class="form-section">
        <h3>4. Bank Details</h3>
        <div>
            <label for="bank_name">Bank Name:</label>
            <input type="text" id="bank_name" name="bank_name">
        </div>
        <div>
            <label for="branch_name">Branch Name:</label>
            <input type="text" id="branch_name" name="branch_name">
        </div>
        <div>
            <label for="account_number">Account Number:</label>
            <input type="text" id="account_number" name="account_number">
        </div>
        <div>
            <label for="routing_number">Routing Number:</label>
            <input type="text" id="routing_number" name="routing_number">
        </div>
        <div>
            <label class="inline-label">Electronic Dividend Credit:</label>
            <input type="radio" id="edc-yes" name="electronicdividendcredit" value="yes">
            <label for="edc-yes" class="inline-label">Yes</label>

            <input type="radio" id="edc-no" name="electronicdividendcredit" value="no">
            <label for="edc-no" class="inline-label">No</label>
        </div>
        <div>
            <label class="inline-label">Tax Exemption if any:</label>
            <input type="radio" id="taxexemption-yes" name="taxexemption" value="yes">
            <label for="taxexemption-yes" class="inline-label">Yes</label>

            <input type="radio" id="taxexemption-no" name="taxexemption" value="no">
            <label for="taxexemption-no" class="inline-label">No</label>
        </div>
        <div>
            <label for="tin_tax_number">Tin/Tax Number:</label>
            <input type="text" id="tin_tax_number" name="tin_tax_number">
        </div>
    </div>

    <div class="form-section">
        <h3>5. Others Information</h3>
        <div>
            <label class="inline-label">Residency:</label>
            <input type="radio" id="other-resident" name="residency" value="resident">
            <label for="other-resident" class="inline-label">Resident</label>

            <input type="radio" id="other-non-resident" name="residency" value="non-resident">
            <label for="other-non-resident" class="inline-label">Non-Resident</label>
        </div>
        <div>
            <label for="boaaccnationality">Nationality:</label>
            <input type="text" id="boaaccnationality" name="boaaccnationality">
        </div>
        <div>
            <label for="date-of-birth">Date of Birth:</label>
            <input type="date" id="date-of-birth" name="date-of-birth">
        </div>
        <div>
            <label class="inline-label">Statement Cycle Code:</label>
            <input type="radio" id="daily" name="statementcyclecode" value="daily">
            <label for="daily" class="inline-label">Daily</label>

            <input type="radio" id="weekly" name="statementcyclecode" value="weekly">
            <label for="weekly" class="inline-label">Weekly</label>

            <input type="radio" id="fortnightly" name="statementcyclecode" value="fortnightly">
            <label for="fortnightly" class="inline-label">Fortnightly</label>

            <input type="radio" id="monthly" name="statementcyclecode" value="monthly">
            <label for="monthly" class="inline-label">Monthly</label>

            <input type="radio" id="other" name="statementcyclecode" value="other">
            <label for="other" class="inline-label">Other</label>

            <input type="text" id="otherInput" name="otherStatementCycleCode" style="display:none;">
        </div>
        <div>
            <label for="reference_number">Internal Reference Number(To be filled in my CDBL party):</label>
            <input type="text" id="reference_number" name="reference_number">
        </div>
        <div>
            <label for="company_name">In case of Company:</label>
            <input type="text" id="company_name" name="company_name">
        </div>
        <div>
            <label for="date-of-reg">Date of Registration:</label>
            <input type="date" id="date-of-reg" name="date-of-reg">
        </div>
        <div>
            <label for="reg_number">Registration Number:</label>
            <input type="text" id="reg_number" name="reg_number">
        </div>
    </div>

    <div class="form-section">
        <h3>6. Joint Applicant(Second Account Holder)</h3>
        <div>
            <label for="fullName_joint">Name in Full of Account Holder:</label>
            <input type="text" id="fullName_joint" name="fullName_joint">
        </div>
        <div>
            <label for="title_joint">Title i.e. Mr./Mrs./Ms:</label>
            <select id="title_joint" name="title_joint">
            <option value="NA">Not Applicable</option>
            <option value="mr">Mr.</option>
            <option value="mrs">Mrs.</option>
            <option value="ms">Ms.</option>
            </select>
        </div>
    </div>

    <div class="form-section">
        <h3>7. Account Link Request</h3>
        <div>
            <label class="inline-label">Link to existing Depository Account:</label>
            <input type="radio" id="ex-yes" name="existingdepository" value="yes">
            <label for="ex-yes" class="inline-label">Yes</label>

            <input type="radio" id="ex-no" name="existingdepository" value="no">
            <label for="ex-no" class="inline-label">No</label>
        </div>
        <div id="depositoryAccountCode" style="display:none;">
            <label for="boAccountCode">Provide the Depository BO Account Code (8 Digits):</label>
            <input type="text" id="boAccountCode" name="boAccountCode">
        </div>
    </div>

    <<div class="form-section">
        <h3>8. Nominee/Heirs</h3>
        <div>
            <p>If account holder(s) wish to continue nominate person(s) who will be entitled to receive securities outstanding in the account in the event of the death of the sole account holder/all the joint account holders, a separate nomination Form-23 must be filled up and signed by all account holders and the nominees giving names of nominees, relationship with the first account holder, percentage distribution, and contact details, if any nominee is a minor, guardian’s name, address, relationship with nominees has also to be provided.</p>
        </div>
        <div 
            id="nomineeToggle" style="cursor: pointer;">Add Nominee
        </div>

        <div id="nomineeForm" style="display:none;">
             <h2>BO Account Nomination Form</h2>
             <div>
                    <p>Please complete all details in CAPITAL letters. Please fill all names correctly. All communications shall be sent to the correspondence address of only the First Named Account Holder as specified in BO Account Opening Form 02.</p>
            </div>

            <div class="form-section">
                <div>
                    <label for="nomapplicationNo">Application No:</label>
                    <input type="text" id="nomapplicationNo" name="nomapplicationNo">
                </div>
                <div>
                    <label for="nomDate">Date:</label>
                    <input type="date" id="nomDate" name="nomDate">
                </div>
            </div>

            <div class="form-section">
                <p>Name of CDBL Participant : LankaBangla Securities Ltd.</p>
                <div>
                    <label for="cdblPartID">CDBL Participant ID:</label>
                    <input type="text" id="cdblPartID" name="cdblPartID">
                </div>
                <div>
                    <label for="bonomID">Account Holders BO ID:</label>
                    <input type="text" id="bonomID" name="bonomID">
                </div>
                <div>
                    <label for="nomaccountHolderName">Name of Account Holder(Start with title Mr/Mrs):</label>
                    <input type="text" id="nomaccountHolderName" name="nomaccountHolderName" maxlength="30">
                </div>
            </div>

            <div>
                <p>I/We nominate the following person(s) who is/are entitled to receive securities outstanding in my/our account in the event of the death of the sole holder/all the joint holders.</p>
            </div>

            <div class="form-section">
                <h2>1. Nominee/Heirs Details</h2>
                <h3>Nominee 1</h3>
                <div>
                    <label for="nominee1-fullname">Full name:</label>
                    <input type="text" id="nominee1-fullname" name="nominee1_fullname">
                </div>
                <div>
                    <label for="nominee1-shortname">Short Name (Start with Title Mr./Mrs./Ms):</label>
                    <input type="text" id="nominee1-shortname" name="nominee1_shortname">
                </div>
                <div>
                    <label for="nominee1-title">Title i.e. Mr./Mrs./Ms:</label>
                    <select id="nominee1-title" name="nominee1_title">
                    <option value="NA">Not Applicable</option>
                    <option value="mr">Mr.</option>
                    <option value="mrs">Mrs.</option>
                    <option value="ms">Ms.</option>
                    </select>
                </div>
                <div>
                    <label for="nominee1-relationship">Relationship with Nominee:</label>
                    <input type="text" id="nominee1-relationship" name="nominee1_relationship">
                </div>
                <div>
                    <label for="nominee1-percentage">Percentage(%):</label>
                    <input type="number" id="nominee1-percentage" name="nominee1_percentage">
                </div>
                <div>
                    <label for="nominee1-address">Address:</label>
                    <input type="text" id="nominee1-address" name="nominee1_address">
                </div>
                <div>
                    <label for="nominee1-city">City:</label>
                    <input type="text" id="nominee1-city" name="nominee1_city">
                </div>
                <div>
                    <label for="nominee1-postcode">Post Code:</label>
                    <input type="text" id="nominee1-postcode" name="nominee1_postcode">
                </div>
                <div>
                    <label for="nominee1-statedivision">State/Division:</label>
                    <input type="text" id="nominee1-statedivision" name="nominee1_statedivision">
                    </div>
                <div>
                    <label for="nominee1-country">Country:</label>
                    <input type="text" id="nominee1-country" name="nominee1_country">
                </div>
                <div>
                    <label for="nominee1-telephone">Telephone:</label>
                    <input type="text" id="nominee1-telephone" name="nominee1_telephone">
                </div>
                <div>
                    <label for="nominee1-mobile-phone">Mobile Phone:</label>
                    <input type="text" id="nominee1-mobile-phone" name="nominee1_mobile_phone">
                </div>
                <div>
                    <label for="nominee1-fax">Fax:</label>
                    <input type="text" id="nominee1-fax" name="nominee1_fax">
                </div>
                <div>
                    <label for="nominee1-email">Email:</label>
                    <input type="text" id="nominee1-email" name="nominee1_email">
                </div>
                <div>
                    <label for="nominee1-passportnumber">Passport Number:</label>
                    <input type="text" id="nominee1-passportnumber" name="nominee1_passportnumber">
                </div>
                <div>
                    <label for="nominee1-issueplace">Issue Place:</label>
                    <input type="text" id="nominee1-issueplace" name="nominee1_issueplace">
                </div>
                <div>
                    <label for="nominee1-issuedate">Issue Date:</label>
                    <input type="date" id="nominee1-issuedate" name="nominee1_issuedate">
                </div>
                <div>
                    <label for="nominee1-expirydate">Expiry Date:</label>
                    <input type="date" id="nominee1-expirydate" name="nominee1_expirydate">
                </div>
                <div>
                    <label class="inline-label">Residency:</label>
                    <input type="radio" id="nominee1-resident" name="nominee1_residency" value="resident">
                    <label for="nominee1-resident" class="inline-label">Resident</label>

                    <input type="radio" id="nominee1-nonresident" name="nominee1_residency" value="non-resident">
                    <label for="nominee1-nonresident" class="inline-label">Non-Resident</label>
                </div>
                <div>
                    <label for="nominee1-nationality">Nationality:</label>
                    <input type="text" id="nominee1-nationality" name="nominee1_nationality">
                </div>
                <div>
                    <label for="nominee1-dob">Date of Birth:</label>
                    <input type="date" id="nominee1-dob" name="nominee1_dob">
                </div>
            </div>

            <div class="form-section">
                <h3>Guardian Details (If nominee 1 is a minor)</h3>
                <input type="checkbox" id="nominee1-minor-check" name="nominee1_is_minor">
                <label for="nominee1-minor-check">Is Nominee 1 a minor?</label>
    
                <div id="guardian1-details" style="display: none;">
                    <div>
                        <label for="guardian1-fullname">Full name:</label>
                        <input type="text" id="guardian1-fullname" name="guardian1_fullname">
                    </div>
                    <div>
                        <label for="guardian1-shortname">Short Name (Starting with Title Mr./Mrs.):</label>
                        <input type="text" id="guardian1-shortname" name="guardian1_shortname">
                    </div>
                    <div>
                        <label for="guardian1-relationship">Relationship with Nominee:</label>
                        <input type="text" id="guardian1-relationship" name="guardian1_relationship">
                    </div>
                    <div>
                        <label for="guardian1-dob-minority">Date of Birth of Minority:</label>
                        <input type="date" id="guardian1-dob-minority" name="guardian1_dob_minority">
                    </div>
                    <div>
                        <label for="guardian1-maturity-date">Maturity Date of Minority:</label>
                        <input type="date" id="guardian1-maturity-date" name="guardian1_maturity_date">
                    </div>
                    <div>
                        <label for="guardian1-address">Address:</label>
                        <input type="text" id="guardian1-address" name="guardian1_address">
                    </div>
                    <div>
                        <label for="guardian1-city">City:</label>
                        <input type="text" id="guardian1-city" name="guardian1_city">
                    </div>
                    <div>
                        <label for="guardian1-postcode">Post Code:</label>
                        <input type="text" id="guardian1-postcode" name="guardian1_postcode">
                    </div>
                    <div>
                        <label for="guardian1-statedivision">State/Division:</label>
                        <input type="text" id="guardian1-statedivision" name="guardian1_statedivision">
                    </div>
                    <div>
                        <label for="guardian1-country">Country:</label>
                        <input type="text" id="guardian1-country" name="guardian1_country">
                    </div>
                    <div>
                        <label for="guardian1-telephone">Telephone:</label>
                        <input type="text" id="guardian1-telephone" name="guardian1_telephone">
                    </div>
                    <div>
                        <label for="guardian1-mobile-phone">Mobile Phone:</label>
                        <input type="text" id="guardian1-mobile-phone" name="guardian1_mobile_phone">
                    </div>
                    <div>
                        <label for="guardian1-fax">Fax:</label>
                        <input type="text" id="guardian1-fax" name="guardian1_fax">
                    </div>
                    <div>
                        <label for="guardian1-email">Email:</label>
                        <input type="text" id="guardian1-email" name="guardian1_email">
                    </div>
                    <div>
                        <label for="guardian1-passportnumber">Passport Number:</label>
                        <input type="text" id="guardian1-passportnumber" name="guardian1_passportnumber">
                    </div>
                    <div>
                        <label for="guardian1-issueplace">Issue Place:</label>
                        <input type="text" id="guardian1-issueplace" name="guardian1_issueplace">
                    </div>
                    <div>
                        <label for="guardian1-issuedate">Issue Date:</label>
                        <input type="date" id="guardian1-issuedate" name="guardian1_issuedate">
                    </div>
                    <div>
                        <label for="guardian1-expirydate">Expiry Date:</label>
                        <input type="date" id="guardian1-expirydate" name="guardian1_expirydate">
                    </div>
                    <div>
                        <label class="inline-label">Residency:</label>
                        <input type="radio" id="guardian1-resident" name="guardian1_residency" value="resident">
                        <label for="guardian1-resident" class="inline-label">Resident</label>

                        <input type="radio" id="guardian1-nonresident" name="guardian1_residency" value="non-resident">
                        <label for="guardian1-nonresident" class="inline-label">Non-Resident</label>
                    </div>
                    <div>
                        <label for="guardian1-nationality">Nationality:</label>
                        <input type="text" id="guardian1-nationality" name="guardian1_nationality">
                    </div>
                    <div>
                        <label for="guardian1-dob">Date of Birth:</label>
                        <input type="date" id="guardian1-dob" name="guardian1_dob">
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h3>Nominee 2</h3>
                <div>
                    <label for="nominee2-fullname">Full name:</label>
                    <input type="text" id="nominee2-fullname" name="nominee2_fullname">
                </div>
                <div>
                    <label for="nominee2-shortname">Short Name (Starting with Title i.e. Mr./Mrs.):</label>
                    <input type="text" id="nominee2-shortname" name="nominee2_shortname">
                </div>
                <div>
                    <label for="nominee2-title">Title:</label>
                    <select id="nominee2-title" name="nominee2_title">
                        <option value="NA">Not Applicable</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Ms">Ms</option>
                    </select>
                </div>
                <div>
                    <label for="nominee2-relationship">Relationship with Nominee:</label>
                    <input type="text" id="nominee2-relationship" name="nominee2_relationship">
                </div>
                <div>
                    <label for="nominee2-percentage">Percentage(%):</label>
                    <input type="number" id="nominee2-percentage" name="nominee2_percentage">
                </div>
                <div>
                    <label for="nominee2-address">Address:</label>
                    <input type="text" id="nominee2-address" name="nominee2_address">
                </div>
                <div>
                    <label for="nominee2-city">City:</label>
                    <input type="text" id="nominee2-city" name="nominee2_city">
                </div>
                <div>
                    <label for="nominee2-postcode">Post Code:</label>
                    <input type="text" id="nominee2-postcode" name="nominee2_postcode">
                </div>
                <div>
                    <label for="nominee2-statedivision">State/Division:</label>
                    <input type="text" id="nominee2-statedivision" name="nominee2_statedivision">
                </div>
                <div>
                    <label for="nominee2-country">Country:</label>
                    <input type="text" id="nominee2-country" name="nominee2_country">
                </div>
                <div>
                    <label for="nominee2-telephone">Telephone:</label>
                    <input type="text" id="nominee2-telephone" name="nominee2_telephone">
                </div>
                <div>
                    <label for="nominee2-mobile-phone">Mobile Phone:</label>
                    <input type="text" id="nominee2-mobile-phone" name="nominee2_mobile_phone">
                </div>
                <div>
                    <label for="nominee2-fax">Fax:</label>
                    <input type="text" id="nominee2-fax" name="nominee2_fax">
                </div>
                <div>
                    <label for="nominee2-email">Email:</label>
                    <input type="text" id="nominee2-email" name="nominee2_email">
                </div>
                <div>
                    <label for="nominee2-passportnumber">Passport Number:</label>
                    <input type="text" id="nominee2-passportnumber" name="nominee2_passportnumber">
                </div>
                <div>
                    <label for="nominee2-issueplace">Issue Place:</label>
                    <input type="text" id="nominee2-issueplace" name="nominee2_issueplace">
                </div>
                <div>
                    <label for="nominee2-issuedate">Issue Date:</label>
                    <input type="date" id="nominee2-issuedate" name="nominee2_issuedate">
                </div>
                <div>
                    <label for="nominee2-expirydate">Expiry Date:</label>
                    <input type="date" id="nominee2-expirydate" name="nominee2_expirydate">
                </div>
                <div>
                    <label class="inline-label">Residency:</label>
                    <input type="radio" id="nominee2-resident" name="nominee2_residency" value="resident">
                    <label for="nominee2-resident" class="inline-label">Resident</label>

                    <input type="radio" id="nominee2-nonresident" name="nominee2_residency" value="non-resident">
                    <label for="nominee2-nonresident" class="inline-label">Non-Resident</label>
                </div>
                <div>
                    <label for="nominee2-nationality">Nationality:</label>
                    <input type="text" id="nominee2-nationality" name="nominee2_nationality">
                </div>
                <div>
                    <label for="nominee2-dob">Date of Birth:</label>
                    <input type="date" id="nominee2-dob" name="nominee2_dob">
                </div>
            </div>

            <div class="form-section">
                <h3>Guardian Details (If nominee 2 is a minor)</h3>
                <input type="checkbox" id="isNominee2Minor" name="isNominee2Minor">
                <label for="isNominee2Minor">Is Nominee 2 a minor?</label>

                <div id="guardian2Details" class="form-section" style="display: none;">
                    <div>
                        <label for="guardian2-fullname">Full name:</label>
                        <input type="text" id="guardian2-fullname" name="guardian2_fullname">
                    </div>
                    <div>
                        <label for="guardian2-shortname">Short Name (Starting with Title Mr./Mrs.):</label>
                        <input type="text" id="guardian2-shortname" name="guardian2_shortname">
                    </div>
                    <div>
                        <label for="guardian2-relationship">Relationship with Nominee:</label>
                        <input type="text" id="guardian2-relationship" name="guardian2_relationship">
                    </div>
                    <div>
                        <label for="guardian2-dobminority">Date of Birth of Minority:</label>
                        <input type="date" id="guardian2-dobminority" name="guardian2_dobminority">
                    </div>
                    <div>
                        <label for="guardian2-maturitydate">Maturity Date of Minority:</label>
                        <input type="date" id="guardian2-maturitydate" name="guardian2_maturitydate">
                    </div>
                    <div>
                        <label for="guardian2-address">Address:</label>
                        <input type="text" id="guardian2-address" name="guardian2_address">
                    </div>
                    <div>
                        <label for="guardian2-city">City:</label>
                        <input type="text" id="guardian2-city" name="guardian2_city">
                    </div>
                    <div>
                        <label for="guardian2-postcode">Post Code:</label>
                        <input type="text" id="guardian2-postcode" name="guardian2_postcode">
                    </div>
                    <div>
                        <label for="guardian2-statedivision">State/Division:</label>
                        <input type="text" id="guardian2-statedivision" name="guardian2_statedivision">
                    </div>
                    <div>
                        <label for="guardian2-country">Country:</label>
                        <input type="text" id="guardian2-country" name="guardian2_country">
                    </div>
                    <div>
                        <label for="guardian2-telephone">Telephone:</label>
                        <input type="text" id="guardian2-telephone" name="guardian2_telephone">
                    </div>
                    <div>
                        <label for="guardian2-mobilephone">Mobile Phone:</label>
                        <input type="text" id="guardian2-mobilephone" name="guardian2_mobilephone">
                    </div>
                    <div>
                        <label for="guardian2-fax">Fax:</label>
                        <input type="text" id="guardian2-fax" name="guardian2_fax">
                    </div>
                    <div>
                        <label for="guardian2-email">Email:</label>
                        <input type="email" id="guardian2-email" name="guardian2_email">
                    </div>
                    <div>
                        <label for="guardian2-passportnumber">Passport Number:</label>
                        <input type="text" id="guardian2-passportnumber" name="guardian2_passportnumber">
                    </div>
                    <div>
                        <label for="guardian2-issueplace">Issue Place:</label>
                        <input type="text" id="guardian2-issueplace" name="guardian2_issueplace">
                    </div>
                    <div>
                        <label for="guardian2-issuedate">Issue Date:</label>
                        <input type="date" id="guardian2-issuedate" name="guardian2_issuedate">
                    </div>
                    <div>
                        <label for="guardian2-expirydate">Expiry Date:</label>
                        <input type="date" id="guardian2-expirydate" name="guardian2_expirydate">
                    </div>
                    <div>
                        <label class="inline-label">Residency:</label>
                        <input type="radio" id="guardian2-resident" name="guardian2_residency" value="resident">
                        <label for="guardian2-resident" class="inline-label">Resident</label>

                        <input type="radio" id="guardian2-nonresident" name="guardian2_residency" value="non-resident">
                        <label for="guardian2-nonresident" class="inline-label">Non-Resident</label>
                    </div>
                    <div>
                        <label for="guardian2-nationality">Nationality:</label>
                        <input type="text" id="guardian2-nationality" name="guardian2_nationality">
                    </div>
                    <div>
                        <label for="guardian2-dob">Date of Birth:</label>
                        <input type="date" id="guardian2-dob" name="guardian2_dob">
                    </div>
                </div>
            </div>
        
            <div class="form-section">
                <h2>2. Photograph of Nominee/Heirs</h2>
                <div class="nominee-container">
                    <div class="nominee-section">
                        <div class="form-section1">
                            <label for="nominee1_photo">Nominee/Heir 1:</label>
                            <input type="file" id="nominee1_photo" name="nominee1_photo" accept="image/*">
                            <img id="nominee1_photo_preview" src="" alt="Preview" style="display: none;">
                        </div>
                        <div class="form-section1">
                            <label for="nominee1_sig">Nominee/Heir 1 Signature:</label>
                            <input type="file" id="nominee1_sig" name="nominee1_sig" accept="image/*">
                            <img id="nominee1_sig_preview" src="" alt="Preview" style="display: none;">
                        </div>
                    </div>

                    <div class="nominee-section">
                        <div class="form-section1">
                            <label for="nominee2_photo">Nominee/Heir 2 Photo:</label>
                            <input type="file" id="nominee2_photo" name="nominee2_photo" accept="image/*">
                            <img id="nominee2_photo_preview" src="" alt="Preview" style="display: none;">
                        </div>
                        <div class="form-section1">
                            <label for="nominee2_sig">Nominee/Heir 2 Signature:</label>
                            <input type="file" id="nominee2_sig" name="nominee2_sig" accept="image/*">
                            <img id="nominee2_sig_preview" src="" alt="Preview" style="display: none;">
                        </div>
                    </div>
                </div>


                <h2>3. Photograph of Guardians</h2>
                <div class="guardian-container">
                    <div class="guardian-section">
                        <div class="form-section1">
                            <label for="guardian1_photo">Guardian 1 Photo:</label>
                            <input type="file" id="guardian1_photo" name="guardian1_photo" accept="image/*">
                            <img id="guardian1_photo_preview" src="" alt="Preview" style="display: none;">
                        </div>
                        <div class="form-section1">
                            <label for="guardian1_sig">Guardian 1 Signature:</label>
                            <input type="file" id="guardian1_sig" name="guardian1_sig" accept="image/*">
                            <img id="guardian1_sig_preview" src="" alt="Preview" style="display: none;">
                        </div>
                    </div>

                    <div class="guardian-section">
                        <div class="form-section1">
                            <label for="guardian2_photo">Guardian 2 Photo:</label>
                            <input type="file" id="guardian2_photo" name="guardian2_photo" accept="image/*">
                            <img id="guardian2_photo_preview" src="" alt="Preview" style="display: none;">
                        </div>
                        <div class="form-section1">
                            <label for="guardian2_sig">Guardian 2 Signature:</label>
                            <input type="file" id="guardian2_sig" name="guardian2_sig" accept="image/*">
                            <img id="guardian2_sig_preview" src="" alt="Preview" style="display: none;">
                        </div>
                    </div>
                </div>
            </div>
        </div>  <!-- this is a extra div i set that im not sure about -->
    </div>


    <div class="form-section">
        <h3>9. Power of Attorney</h3>
        <div>
            <p>Please complete all details in CAPITAL letters. Please fill all names correctly. All communications shall be sent to the correspondence address of only the First Named Account Holder as specified in BO Account Opening Form 02.</p>
        </div>

        <div 
            id="poaToggle" style="cursor: pointer;">Add POA
        </div>

        <div id="poaForm" style="display:none;">
            <h2>Power of Attorney (POA) Form</h2>

            <div class="form-section">
                <p>Please complete all details in CAPITAL letters. Please fill all names correctly. All communications shall be sent to the correspondence address of only the First Named Account Holder as specified in BO Account Opening Form 02.</p>
            </div>

            <div class="form-section">
                    <div>
                        <label for="poaapplicationNo">Application No:</label>
                        <input type="text" name="poaapplicationNo" id="poaapplicationNo">
                    </div>
                    <div>
                        <label for="poaaccdate">Date:</label>
                        <input type="date" name="poaaccdate" id="poaaccdate">
                    </div>
            </div>

            <div class="form-section">
                    <div>
                        <p>Name of CDBL Participant: LankaBangla Securities Ltd.</p>
                    </div>
                    <div>
                        <label for="poaaccparticipantID">CDBL Participant ID:</label>
                        <input type="text" name="poaaccparticipantID" id="poaaccparticipantID">
                    </div>
                    <div>
                        <label for="poaboID">Account Holders BO ID:</label>
                        <input type="text" name="poaboID" id="poaboID">
                    </div>
                    <div>
                        <label for="poaaccountHolderName">Name of Account Holder:</label>
                        <input type="text" name="poaaccountHolderName" id="poaaccountHolderName">
                    </div>
            </div>

            <div class="form-section">
                    <h2>Power of Attorney Holder's Details</h2>
                    <div>
                        <label for="poaFullName">Full Name:</label>
                        <input type="text" name="poaFullName" id="poaFullName">
                    </div>
                    <div>
                        <label for="poaShortName">Short Name of Power of Attorney Holder:</label>
                        <input type="text" name="poaShortName" id="poaShortName">
                    </div>
                    <div>
                        <label for="poaTitle">Title i.e. Mr./Mrs./Ms:</label>
                        <select id="poaTitle" name="poaTitle">
                        <option value="NA">Not Applicable</option>
                        <option value="mr">Mr.</option>
                        <option value="mrs">Mrs.</option>
                        <option value="ms">Ms.</option>
                        </select>
                    </div>
            </div>

            <div class="form-section">
                    <h2>1. Power of Attorney Holder's Contact Details</h2>
                    <div>
                        <label for="poaaddress">Address:</label>
                        <input type="text" name="poaaddress" id="poaaddress">
                    </div>
                    <div>
                        <label for="poacity">City:</label>
                        <input type="text" name="poacity" id="poacity">
                    </div>
                    <div>
                        <label for="postcode">Post Code:</label>
                        <input type="text" name="postcode" id="postcode">
                    </div>
                    <div>
                        <label for="state">State/Division:</label>
                        <input type="text" name="state" id="state">
                    </div>
                    <div>
                        <label for="poacountry">Country:</label>
                        <input type="text" name="poacountry" id="poacountry">
                    </div>
                    <div>
                        <label for="poatelephone">Telephone:</label>
                        <input type="text" name="poatelephone" id="poatelephone">
                    </div>
                    <div>
                        <label for="mobile">Mobile Phone:</label>
                        <input type="text" name="mobile" id="mobile">
                    </div>
                    <div>
                        <label for="poafax">Fax:</label>
                        <input type="text" name="poafax" id="poafax">
                    </div>
                    <div>
                        <label for="poaemail">Email:</label>
                        <input type="text" name="poaemail" id="poaemail">
                    </div>
            </div>

            <div class="form-section">
                    <h2>2. Power of Attorney Holder's Passport Details</h2>
                    <div>
                        <label for="passportNumber">Passport Number:</label>
                        <input type="text" name="passportNumber" id="passportNumber">
                    </div>
                    <div>
                        <label for="issuePlace">Issue Place:</label>
                        <input type="text" name="issuePlace" id="issuePlace">
                    </div>
                    <div>
                        <label for="issueDate">Issue Date:</label>
                        <input type="date" name="issueDate" id="issueDate">
                    </div>
                    <div>
                        <label for="expiryDate">Expiry Date:</label>
                        <input type="date" name="expiryDate" id="expiryDate">
                    </div>
            </div>

            <div class="form-section">
                    <h2>3. Others Information of Power of Attorney Holder</h2>
                    <div>
                        <label for="residency">Residency:</label>
                        <input type="radio" name="residency" value="Resident" id="resident"> Resident
                        <input type="radio" name="residency" value="Non-Resident" id="nonResident"> Non-Resident
                    </div>
                    <div>
                        <label for="poanationality">Nationality:</label>
                        <input type="text" name="poanationality" id="poanationality">
                    </div>
                    <div>
                        <label for="dob">Date of Birth:</label>
                        <input type="date" name="dob" id="dob">
                    </div>
                    <div>
                        <label for="poaStartDate">Power of Attorney Effective From:</label>
                        <input type="date" name="poaStartDate" id="poaStartDate">
                    </div>
                    <div>
                        <label for="poaEndDate">to</label>
                        <input type="date" name="poaEndDate" id="poaEndDate">
                    </div>
                    <div>
                        <label for="remarks">Remarks:</label>
                        <textarea name="remarks" id="remarks" placeholder="Insert reference to POA document i.e. Specific POA or General POA etc."></textarea>
                    </div>
            </div>

            <div class="form-section">
                    <h2>4. Photograph of Power Attorney Holder</h2>
                    <div class="poa-photo">
                        <label for="poa_photo">POA Photo:</label>
                        <input type="file" id="poa_photo" name="poa_photo" accept="image/*">
                        <img id="poa_photo_preview" src="" alt="Preview" style="display: none;">
                    </div>
            </div>

            <div class="form-section">
                    <h2>5. Declaration</h2>
                    <div>
                        <p>The rules and regulations of the Depository and CDBL participant pertaining to an account which are in force now have been read by me/us and I/we have understood the same and I/we agree to abide by and to be bound by the rules as are in force from time to time for such account. I/We also declare that the particulars given by me/us are true to the best of my/our knowledge as on the date of making such application. I/We further agree that any false/misleading information given by me/us or suppression of any material fact will render my/our account liable for termination and further action.</p>
                    </div>
            </div>

            <div class="form-section">
                    <h2>4. Signatures</h2>
                    <div class="poa-photo">
                        <div class="input-group">
                            <label for="poa_sig">POA Holder:</label>
                            <input type="file" id="poa_sig" name="poa_sig" accept="image/*">
                            <img id="poa_sig_preview" src="" alt="Preview" style="display: none;">
                        </div>
                        <div class="input-group">
                            <label for="fa_sig">First Applicant:</label>
                            <input type="file" id="fa_sig" name="fa_sig" accept="image/*">
                            <img id="fa_sig_preview" src="" alt="Preview" style="display: none;">
                        </div>
                        <div class="input-group">
                            <label for="sa_sig">Second Applicant:</label>
                            <input type="file" id="sa_sig" name="sa_sig" accept="image/*">
                            <img id="sa_sig_preview" src="" alt="Preview" style="display: none;">
                        </div>
                    </div>
            </div>
        </div>
        <!-- this is end of POA div form section -->
    </div>


    <div class="form-section">
        <h3>10. To be filled in by the Stock Broker/Stock Exchange in case application is for opening a CLE</h3>
        <h3>Exchange Name:</h3>
        <div>
            <input type="checkbox" id="dseCheckbox" name="exchange[]" value="DSE" onclick="toggleTradingIdInputs()"> DSE: <input type="text" id="dseTradingIdInput" name="dse_trading_id" style="display: none;">
        </div>
        <div>
            <input type="checkbox" id="cseCheckbox" name="exchange[]" value="CSE" onclick="toggleTradingIdInputs()">  CSE: <input type="text" id="cseTradingIdInput" name="cse_trading_id" style="display: none;">
        </div>
    </div>


    <div class="form-section">
        <h3>11. Declaration</h3>
        <div>
            <p>The rules and regulations of the Depository and CDBL participant pertaining to an account which are in force now have been read by me/us and I/we have understood the same and I/we agree to abide by and to be bound by the rules as are in force from time to time for such account. I/We also declare that the particulars given by me/us are true to the best of my/our knowledge as on the date of making such application. I/We further agree that any false/misleading information given by me/us or suppression of any material fact will render my/our account liable for termination and further action.</p>
        </div>
    </div>

    <div class="form-section">
        <h3>12. Photo and Signatures</h3>
            <div class="row">
                <div class="form-section1">
                    <label for="1stapp_author_photo">1st Applicant or Authorized Signatory:</label>
                    <input type="file" id="1stapp_author_photo" name="1stapp_author_photo" accept="image/*">
                    <img id="1stapp_author_photo_preview" src="" alt="Preview" style="display: none;">
                </div>
                <div class="form-section1">
                    <label for="1stapp_author_sig">1st Applicant or Authorized Signatory Signature:</label>
                    <input type="file" id="1stapp_author_sig" name="1stapp_author_sig" accept="image/*">
                    <img id="1stapp_author_sig_preview" src="" alt="Preview" style="display: none;">
                </div>
            </div>

            <div class="row">
                <div class="form-section1">
                    <label for="2ndapp_author_photo">2nd Applicant or Authorized Signatory:</label>
                    <input type="file" id="2ndapp_author_photo" name="2ndapp_author_photo" accept="image/*">
                    <img id="2ndapp_author_photo_preview" src="" alt="Preview" style="display: none;">
                </div>
                <div class="form-section1">
                    <label for="2ndapp_author_sig">2nd Applicant or Authorized Signatory Signature:</label>
                    <input type="file" id="2ndapp_author_sig" name="2ndapp_author_sig" accept="image/*">
                    <img id="2ndapp_author_sig_preview" src="" alt="Preview" style="display: none;">
                </div>
            </div>

            <div class="row">
                <div class="form-section1">
                    <label for="author_signa_photo">Authorized Signatory:</label>
                    <input type="file" id="author_signa_photo" name="author_signa_photo" accept="image/*">
                    <img id="author_signa_photo_preview" src="" alt="Preview" style="display: none;">
                </div>
                <div class="form-section1">
                    <label for="3rd_author_sig">3rd Signatory Signature:</label>
                    <input type="file" id="3rd_author_sig" name="3rd_author_sig" accept="image/*">
                    <img id="3rd_author_sig_preview" src="" alt="Preview" style="display: none;">
                </div>
            </div>
    </div>

    <div class="form-section">
        <h3>13. Introduction</h3>
        <div>
            <div>
                <label for="intro-id">Introducer ID:</label>
                <input type="text" id="intro-id" name="intro_id">
            </div>
            <div>
                <label for="intro-name">Introducer Name:</label>
                <input type="text" id="intro-name" name="intro_name">
            </div>
            <div>
                <label for="intro-number">Introducer Phone Number:</label>
                <input type="text" id="intro-number" name="intro_number">
            </div>
            <div>
                <label for="intro-email">Introducer Email:</label>
                <input type="text" id="intro-email" name="intro_email">
            </div>
        </div>
    </div>



    
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

</body>
</html>

<script>

    //For Statement Cycle Code
    const radios = document.querySelectorAll('[name="statementcyclecode"]');

    // Get the "Other" input
    const otherInput = document.getElementById('otherInput');

    // Add an event listener for change event on each radio
    radios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.id === 'other' && this.checked) {
                otherInput.style.display = 'block';
            } else {
                otherInput.style.display = 'none';
            }
        });
    });


    // For 7. Account Link request
    const yesRadio = document.getElementById('ex-yes');
    const noRadio = document.getElementById('ex-no');

    // Get the "Depository BO Account Code" input div
    const depositoryAccountCodeDiv = document.getElementById('depositoryAccountCode');

    // Add an event listener for the "Yes" radio button
    yesRadio.addEventListener('change', function() {
        if (this.checked) {
            depositoryAccountCodeDiv.style.display = 'block';
        }
    });

    // Add an event listener for the "No" radio button
    noRadio.addEventListener('change', function() {
        if (this.checked) {
            depositoryAccountCodeDiv.style.display = 'none';
        }
    }); 

    //collapsible nominee
    document.getElementById('nomineeToggle').addEventListener('click', function(){
    var nomineeForm = document.getElementById('nomineeForm');
    if (nomineeForm.style.display === 'none') {
        nomineeForm.style.display = 'block';
    } else {
        nomineeForm.style.display = 'none';
    }
    });

    //collapsible poa
    document.getElementById('poaToggle').addEventListener('click', function(){
    var nomineeForm = document.getElementById('poaForm');
    if (nomineeForm.style.display === 'none') {
        nomineeForm.style.display = 'block';
    } else {
        nomineeForm.style.display = 'none';
    }
    });

    //nominee 1 guardian choose
    document.getElementById('nominee1-minor-check').addEventListener('change', function() {
        const guardianDetails = document.getElementById('guardian1-details');
        if (this.checked) {
            guardianDetails.style.display = 'block';
        } else {
            guardianDetails.style.display = 'none';
        }
    });

    //nominee 2 guardian choose
    document.getElementById('isNominee2Minor').addEventListener('change', function() {
    var guardian2Details = document.getElementById('guardian2Details');
    if (this.checked) {
        guardian2Details.style.display = 'block';
    } else {
        guardian2Details.style.display = 'none';
    }
});

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
  document.getElementById("nominee1_photo").addEventListener("change", function () {
    showPreview(this, "nominee1_photo_preview");
  });

  document.getElementById("nominee1_sig").addEventListener("change", function () {
    showPreview(this, "nominee1_sig_preview");
  });

  document.getElementById("nominee2_photo").addEventListener("change", function () {
    showPreview(this, "nominee2_photo_preview");
  });

  document.getElementById("nominee2_sig").addEventListener("change", function () {
    showPreview(this, "nominee2_sig_preview");
  });

  document.getElementById("guardian1_photo").addEventListener("change", function () {
    showPreview(this, "guardian1_photo_preview");
  });

  document.getElementById("guardian1_sig").addEventListener("change", function () {
    showPreview(this, "guardian1_sig_preview");
  });

  document.getElementById("guardian2_photo").addEventListener("change", function () {
    showPreview(this, "guardian2_photo_preview");
  });

  document.getElementById("guardian2_sig").addEventListener("change", function () {
    showPreview(this, "guardian2_sig_preview");
  });

  document.getElementById("poa_photo").addEventListener("change", function () {
    showPreview(this, "poa_photo_preview");
  });

  document.getElementById("poa_sig").addEventListener("change", function () {
    showPreview(this, "poa_sig_preview");
  });

  document.getElementById("fa_sig").addEventListener("change", function () {
    showPreview(this, "fa_sig_preview");
  });

  document.getElementById("sa_sig").addEventListener("change", function () {
    showPreview(this, "sa_sig_preview");
  });

  document.getElementById("1stapp_author_photo").addEventListener("change", function () {
    showPreview(this, "1stapp_author_photo_preview");
  });

  document.getElementById("1stapp_author_sig").addEventListener("change", function () {
    showPreview(this, "1stapp_author_sig_preview");
  });

  document.getElementById("2ndapp_author_photo").addEventListener("change", function () {
    showPreview(this, "2ndapp_author_photo_preview");
  });

  document.getElementById("2ndapp_author_sig").addEventListener("change", function () {
    showPreview(this, "2ndapp_author_sig_preview");
  });

  document.getElementById("author_signa_photo").addEventListener("change", function () {
    showPreview(this, "author_signa_photo_preview");
  });

  document.getElementById("3rd_author_sig").addEventListener("change", function () {
    showPreview(this, "3rd_author_sig_preview");
  });

    //Exchange Name DSE and CSE
    function toggleTradingIdInputs() {
    const dseCheckbox = document.getElementById("dseCheckbox");
    const cseCheckbox = document.getElementById("cseCheckbox");
    const dseTradingIdInput = document.getElementById("dseTradingIdInput");
    const cseTradingIdInput = document.getElementById("cseTradingIdInput");

    if (dseCheckbox.checked) {
        dseTradingIdInput.style.display = "inline";
    } else {
        dseTradingIdInput.style.display = "none";
        dseTradingIdInput.value = ''; // Clear input if unchecked
    }

    if (cseCheckbox.checked) {
        cseTradingIdInput.style.display = "inline";
    } else {
        cseTradingIdInput.style.display = "none";
        cseTradingIdInput.value = ''; // Clear input if unchecked
    }
}


</script>
