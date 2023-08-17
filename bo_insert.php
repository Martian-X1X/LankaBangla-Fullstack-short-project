<?php

    session_start();
    $userId = $_SESSION['user_id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db";

    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    
    function uploadImageToImgBB($fileInputName) {
    $imgbb_api_key = 'aef367cc46564282378865ddeebdd0ec';

    if (isset($_FILES[$fileInputName]) && $_FILES[$fileInputName]['error'] === 0) {
        $image = $_FILES[$fileInputName]['tmp_name'];
        $imgbb_url = 'https://api.imgbb.com/1/upload?key=' . $imgbb_api_key;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $imgbb_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => array(
                'image' => base64_encode(file_get_contents($image))
            )
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response_data = json_decode($response, true);

        if ($response_data['status'] === 200) {
            return $response_data['data']['url'];
        } else {
            echo 'Error uploading image to imgbb: ' . $response_data['error']['message'];
            exit;
        }
    } 
    }

    $query = "SELECT id FROM customer_accounts WHERE user_id = '$userId'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $customer_id = $row['id']; // The retrieved customer ID
    } else {
        // Query error
    }




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $full_name = $_POST["fullName_first"];
    $title = $_POST["title_first"];
    $contact_person = $_POST["contactPerson"];
    $incase_of_individual = $_POST["incaseofindividual"];
    $occupation = $_POST["occupation"];
    $father_husband_name = $_POST["father_husband"];
    $mother_name = $_POST["mother_name"];
    $passport_number = $_POST["passport_number"];
    $issue_place = $_POST["issue_place"];
    $issue_date = $_POST["issue_date"];
    $expiry_date = $_POST["expiry_date"];
    $date_of_birth = $_POST["date-of-birth"];
    $residency = $_POST["residency"];
    $nationality = $_POST["boaaccnationality"];

    
    $applicantSQL = "INSERT INTO bo_Applicant (full_name, title, contact_person, incase_of_individual,  occupation, father_husband_name, mother_name, passport_number, issue_place, issue_date, expiry_date, date_of_birth, residency, nationality)
                    VALUES ('$full_name', '$title', '$contact_person', '$incase_of_individual', '$occupation', '$father_husband_name', '$mother_name', '$passport_number', '$issue_place', '$issue_date', '$expiry_date', '$date_of_birth', '$residency', '$nationality')";

    if (mysqli_query($conn, $applicantSQL)) {
        echo "Data inserted into bo_Applicant successfully.";
    } else {
        echo "Error inserting into bo_Applicant table: " . mysqli_error($conn);
    }
}

    
    $applicant_id = $conn->insert_id;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $address = $_POST["boaccaddress"];
    $city = $_POST["boacccity"];
    $post_code = $_POST["post_code"];
    $state_division = $_POST["state_division"];
    $country = $_POST["boacccountry"];
    $telephone = $_POST["boaacctelephone"];
    $mobile_phone = $_POST["mobile_phone"];
    $fax = $_POST["boaccfax"];
    $email = $_POST["boaccemail"];

    
    $contactSQL = "INSERT INTO bo_ContactDetails (address, city, post_code, state_division, country, telephone, mobile_phone, fax, email)
                   VALUES ('$address', '$city', '$post_code', '$state_division', '$country', '$telephone', '$mobile_phone', '$fax', '$email')";

    if (mysqli_query($conn, $contactSQL)) {
        echo "Data inserted into bo_ContactDetails successfully.";
    } else {
        echo "Error inserting into bo_ContactDetails table: " . mysqli_error($conn);
    }
}

    
    $contact_id = $conn->insert_id;

    
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $bank_name = $_POST["bank_name"];
    $branch_name = $_POST["branch_name"];
    $account_number = $_POST["account_number"];
    $routing_number = $_POST["routing_number"];
    $electronic_dividend_credit = $_POST["electronicdividendcredit"];
    $tax_exemption = $_POST["taxexemption"];
    $tin_tax_number = $_POST["tin_tax_number"];

    
    $bankSQL = "INSERT INTO bo_BankDetails (bank_name, branch_name, account_number, routing_number, electronic_dividend_credit, tax_exemption, tin_tax_number)
                VALUES ('$bank_name', '$branch_name', '$account_number', '$routing_number', '$electronic_dividend_credit', '$tax_exemption', '$tin_tax_number')";

    if (mysqli_query($conn, $bankSQL)) {
        echo "Data inserted into bo_BankDetails successfully.";
    } else {
        echo "Error inserting into bo_BankDetails table: " . mysqli_error($conn);
    }
}
    $bank_id = $conn->insert_id;


    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $statement_cycle_code = $_POST["statementcyclecode"];
    $other_statement_cycle_code = $_POST["otherStatementCycleCode"];

    
    $cycleSQL = "INSERT INTO bo_StatementCycle (statement_cycle_code, other_statement_cycle_code)
                 VALUES ('$statement_cycle_code', '$other_statement_cycle_code')";

    if (mysqli_query($conn, $cycleSQL)) {
        echo "Data inserted into bo_StatementCycle successfully.";
    } else {
        echo "Error inserting into bo_StatementCycle table: " . mysqli_error($conn);
    }
}
    $cycle_id = $conn->insert_id;

    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $application_number = $_POST["applicationNumber"];
    $date = $_POST["boaccdate"];
    $bo_category = $_POST["boCategory"];
    $bo_type = $_POST["boType"];
    $participant_id = $_POST["boaccparticipantID"];
    $bo_id = $_POST["boformID"];
    $account_opened = $_POST["accountOpened"];
    $reference_number = $_POST["reference_number"];
    $company_name = $_POST["company_name"];
    $date_of_registration = $_POST["date-of-reg"];
    $registration_number = $_POST["reg_number"];
    $existing_depository = $_POST["existingdepository"];
    $depository_account_code = $_POST["boAccountCode"];

    
    $boFormSQL = "INSERT INTO bo_BOForm (application_number, date, bo_category, bo_type, participant_id, bo_id, account_opened, reference_number, company_name, date_of_registration, registration_number, existing_depository, depository_account_code, contact_id, applicant_id, bank_id, cycle_id, customer_account_id, form_completed)
                  VALUES ('$application_number', '$date', '$bo_category', '$bo_type', '$participant_id', '$bo_id', '$account_opened', '$reference_number', '$company_name', '$date_of_registration', '$registration_number', '$existing_depository', '$depository_account_code', '$contact_id', '$applicant_id', '$bank_id', '$cycle_id', '$customer_id', 0)";

    if (mysqli_query($conn, $boFormSQL)) {
        echo "Data inserted into bo_BOForm successfully.";
    } else {
        echo "Error inserting into bo_BOForm table: " . mysqli_error($conn);
    }
    $bo_form_id = $conn->insert_id;
}



    if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Retrieve data from the form
            $applicationNo = $_POST["nomapplicationNo"];
            $date = $_POST["nomDate"];
            $cdblParticipantID = $_POST["cdblPartID"];
            $boID = $_POST["bonomID"];
            $accountHolderName = $_POST["nomaccountHolderName"];

        
        $sqlApplication = "INSERT INTO nom_application (application_no, bo_open_date, cdbl_participant_id, account_holder_bo_id, account_holder_name, form_id) VALUES ('$applicationNo', '$date', '$cdblParticipantID', '$boID', '$accountHolderName', '$bo_form_id')";

        if ($conn->query($sqlApplication) === TRUE) {
            echo "Data inserted successfully into nom_application table.";
        } else {
            echo "Error inserting data: " . $conn->error;
        }
    }

    $nom_application_id = $conn->insert_id;

    
    $nominee1_photo_link = uploadImageToImgBB('nominee1_photo');
    $nominee1_sig_link = uploadImageToImgBB('nominee1_sig');
    $nominee2_photo_link = uploadImageToImgBB('nominee2_photo');
    $nominee2_sig_link = uploadImageToImgBB('nominee2_sig');
    $guardian1_photo_link = uploadImageToImgBB('guardian1_photo');
    $guardian1_sig_link = uploadImageToImgBB('guardian1_sig');
    $guardian2_photo_link = uploadImageToImgBB('guardian2_photo');
    $guardian2_sig_link = uploadImageToImgBB('guardian2_sig');
    $poa_photo_link = uploadImageToImgBB('poa_photo');
    $poa_sig_link = uploadImageToImgBB('poa_sig');
    $fa_sig_link = uploadImageToImgBB('fa_sig');
    $sa_sig_link = uploadImageToImgBB('sa_sig');

    $firstappli_photo_link = uploadImageToImgBB('1stapp_author_photo');
    $firstappli_sig_link = uploadImageToImgBB('1stapp_author_sig');
    $secondappli_photo_link = uploadImageToImgBB('2ndapp_author_photo');
    $secondappli_sig_link = uploadImageToImgBB('2ndapp_author_sig');
    $auth_photo_link = uploadImageToImgBB('author_signa_photo');
    $auth_sig_link = uploadImageToImgBB('3rd_author_sig');



    
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nominee1_fullname = $_POST["nominee1_fullname"];
    $nominee1_shortname = $_POST["nominee1_shortname"];
    $nominee1_title = $_POST["nominee1_title"];
    $nominee1_relationship = $_POST["nominee1_relationship"];
    $nominee1_percentage = $_POST["nominee1_percentage"];
    $nominee1_address = $_POST["nominee1_address"];
    $nominee1_city = $_POST["nominee1_city"];
    $nominee1_postcode = $_POST["nominee1_postcode"];
    $nominee1_statedivision = $_POST["nominee1_statedivision"];
    $nominee1_country = $_POST["nominee1_country"];
    $nominee1_telephone = $_POST["nominee1_telephone"];
    $nominee1_mobile_phone = $_POST["nominee1_mobile_phone"];
    $nominee1_fax = $_POST["nominee1_fax"];
    $nominee1_email = $_POST["nominee1_email"];
    $nominee1_passportnumber = $_POST["nominee1_passportnumber"];
    $nominee1_issueplace = $_POST["nominee1_issueplace"];
    $nominee1_issuedate = $_POST["nominee1_issuedate"];
    $nominee1_expirydate = $_POST["nominee1_expirydate"];
    $nominee1_residency = $_POST["nominee1_residency"];
    $nominee1_nationality = $_POST["nominee1_nationality"];
    $nominee1_dob = $_POST["nominee1_dob"];

    
    $sqlNominee1 = "INSERT INTO nom_nominee (application_id, full_name, short_name, title, relationship, percentage, passport_number, issue_place, issue_date, expiry_date, residency, nationality, date_of_birth, photo, signature, number_nom) VALUES ('$nom_application_id', '$nominee1_fullname', '$nominee1_shortname', '$nominee1_title', '$nominee1_relationship', '$nominee1_percentage', '$nominee1_passportnumber', '$nominee1_issueplace', '$nominee1_issuedate', '$nominee1_expirydate', '$nominee1_residency', '$nominee1_nationality', '$nominee1_dob', '$nominee1_photo_link', '$nominee1_sig_link', 1)";

    if ($conn->query($sqlNominee1) !== TRUE) {
        echo "Error inserting data for Nominee 1: " . $conn->error;
    }

    $nominee1_id = $conn->insert_id;

    $sqlNominee1_contact = "INSERT INTO nominee_contact (nominee_id, address, city, post_code, state_division, country, telephone, mobile_phone, fax, email) VALUES ('$nominee1_id', '$nominee1_address', '$nominee1_city', '$nominee1_postcode', '$nominee1_statedivision', '$nominee1_country', '$nominee1_telephone', '$nominee1_mobile_phone', '$nominee1_fax', '$nominee1_email')";

    if ($conn->query($sqlNominee1_contact) !== TRUE) {
        echo "Error inserting data for Nominee 1: " . $conn->error;
    }


    
    $nominee2_fullname = $_POST["nominee2_fullname"];
    $nominee2_shortname = $_POST["nominee2_shortname"];
    $nominee2_title = $_POST["nominee2_title"];
    $nominee2_relationship = $_POST["nominee2_relationship"];
    $nominee2_percentage = $_POST["nominee2_percentage"];
    $nominee2_address = $_POST["nominee2_address"];
    $nominee2_city = $_POST["nominee2_city"];
    $nominee2_postcode = $_POST["nominee2_postcode"];
    $nominee2_statedivision = $_POST["nominee2_statedivision"];
    $nominee2_country = $_POST["nominee2_country"];
    $nominee2_telephone = $_POST["nominee2_telephone"];
    $nominee2_mobile_phone = $_POST["nominee2_mobile_phone"];
    $nominee2_fax = $_POST["nominee2_fax"];
    $nominee2_email = $_POST["nominee2_email"];
    $nominee2_passportnumber = $_POST["nominee2_passportnumber"];
    $nominee2_issueplace = $_POST["nominee2_issueplace"];
    $nominee2_issuedate = $_POST["nominee2_issuedate"];
    $nominee2_expirydate = $_POST["nominee2_expirydate"];
    $nominee2_residency = $_POST["nominee2_residency"];
    $nominee2_nationality = $_POST["nominee2_nationality"];
    $nominee2_dob = $_POST["nominee2_dob"];

    
    $sqlNominee2 = "INSERT INTO nom_nominee (application_id, full_name, short_name, title, relationship, percentage, passport_number, issue_place, issue_date, expiry_date, residency, nationality, date_of_birth, photo, signature, number_nom) VALUES ('$nom_application_id', '$nominee2_fullname', '$nominee2_shortname', '$nominee2_title', '$nominee2_relationship', '$nominee2_percentage', '$nominee2_passportnumber', '$nominee2_issueplace', '$nominee2_issuedate', '$nominee2_expirydate', '$nominee2_residency', '$nominee2_nationality', '$nominee2_dob', '$nominee2_photo_link', '$nominee2_sig_link', 2)";

    if ($conn->query($sqlNominee2) !== TRUE) {
        echo "Error inserting data for Nominee 2: " . $conn->error;
    }

    $nominee2_id = $conn->insert_id;

    $sqlNominee2_contact = "INSERT INTO nominee_contact (nominee_id, address, city, post_code, state_division, country, telephone, mobile_phone, fax, email) VALUES ('$nominee2_id', '$nominee2_address', '$nominee2_city', '$nominee2_postcode', '$nominee2_statedivision', '$nominee2_country', '$nominee2_telephone', '$nominee2_mobile_phone', '$nominee2_fax', '$nominee2_email')";

    if ($conn->query($sqlNominee2_contact) !== TRUE) {
        echo "Error inserting data for Nominee 2: " . $conn->error;
    }

}



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $guardian1_fullname = $_POST['guardian1_fullname'];
    $guardian1_shortname = $_POST['guardian1_shortname'];
    $guardian1_relationship = $_POST['guardian1_relationship'];
    $guardian1_dob_minority = $_POST['guardian1_dob_minority'];
    $guardian1_maturity_date = $_POST['guardian1_maturity_date'];
    $guardian1_address = $_POST['guardian1_address'];
    $guardian1_city = $_POST['guardian1_city'];
    $guardian1_postcode = $_POST['guardian1_postcode'];
    $guardian1_statedivision = $_POST['guardian1_statedivision'];
    $guardian1_country = $_POST['guardian1_country'];
    $guardian1_telephone = $_POST['guardian1_telephone'];
    $guardian1_mobile_phone = $_POST['guardian1_mobile_phone'];
    $guardian1_fax = $_POST['guardian1_fax'];
    $guardian1_email = $_POST['guardian1_email'];
    $guardian1_passportnumber = $_POST['guardian1_passportnumber'];
    $guardian1_issueplace = $_POST['guardian1_issueplace'];
    $guardian1_issuedate = $_POST['guardian1_issuedate'];
    $guardian1_expirydate = $_POST['guardian1_expirydate'];
    $guardian1_residency = $_POST['guardian1_residency'];
    $guardian1_nationality = $_POST['guardian1_nationality'];
    $guardian1_dob = $_POST['guardian1_dob'];


    
    $sql_guardian1 = "INSERT INTO nom_guardian (nominee_id, full_name, short_name, relationship, dob_minority, maturity_date, passport_number, issue_place, issue_date, expiry_date, residency, nationality, date_of_birth, photo, signature, number_gur)
                  VALUES ('$nominee1_id', '$guardian1_fullname', '$guardian1_shortname', '$guardian1_relationship', '$guardian1_dob_minority', '$guardian1_maturity_date',  '$guardian1_passportnumber', '$guardian1_issueplace', '$guardian1_issuedate', '$guardian1_expirydate', '$guardian1_residency', '$guardian1_nationality', '$guardian1_dob', '$guardian1_photo_link', '$guardian1_sig_link', 1)";



    if ($conn->query($sql_guardian1) !== TRUE) {
        echo "Error inserting data for Guardian 1: " . $conn->error;
    }

    $guardian1_id = $conn->insert_id;



    $sql_guardian1_contact = "INSERT INTO guardian_contact (guardian_id, address, city, post_code, state_division, country, telephone, mobile_phone, fax, email)
                  VALUES ('$guardian1_id', '$guardian1_address', '$guardian1_city', '$guardian1_postcode', '$guardian1_statedivision', '$guardian1_country', '$guardian1_telephone', '$guardian1_mobile_phone', '$guardian1_fax', '$guardian1_email')";



    if ($conn->query($sql_guardian1_contact) !== TRUE) {
        echo "Error inserting data for Guardian 1: " . $conn->error;
    }

    
    $guardian2_fullname = $_POST['guardian2_fullname'];
    $guardian2_shortname = $_POST['guardian2_shortname'];
    $guardian2_relationship = $_POST['guardian2_relationship'];
    $guardian2_dob_minority = $_POST['guardian2_dobminority'];
    $guardian2_maturity_date = $_POST['guardian2_maturitydate'];
    $guardian2_address = $_POST['guardian2_address'];
    $guardian2_city = $_POST['guardian2_city'];
    $guardian2_postcode = $_POST['guardian2_postcode'];
    $guardian2_statedivision = $_POST['guardian2_statedivision'];
    $guardian2_country = $_POST['guardian2_country'];
    $guardian2_telephone = $_POST['guardian2_telephone'];
    $guardian2_mobile_phone = $_POST['guardian2_mobilephone'];
    $guardian2_fax = $_POST['guardian2_fax'];
    $guardian2_email = $_POST['guardian2_email'];
    $guardian2_passportnumber = $_POST['guardian2_passportnumber'];
    $guardian2_issueplace = $_POST['guardian2_issueplace'];
    $guardian2_issuedate = $_POST['guardian2_issuedate'];
    $guardian2_expirydate = $_POST['guardian2_expirydate'];
    $guardian2_residency = $_POST['guardian2_residency'];
    $guardian2_nationality = $_POST['guardian2_nationality'];
    $guardian2_dob = $_POST['guardian2_dob'];

    

    
    $sql_guardian2 = "INSERT INTO nom_guardian (nominee_id, full_name, short_name, relationship, dob_minority, maturity_date, passport_number, issue_place, issue_date, expiry_date, residency, nationality, date_of_birth, photo, signature, number_gur)
                  VALUES ('$nominee2_id', '$guardian2_fullname', '$guardian2_shortname', '$guardian2_relationship', '$guardian2_dob_minority', '$guardian2_maturity_date',  '$guardian2_passportnumber', '$guardian2_issueplace', '$guardian2_issuedate', '$guardian2_expirydate', '$guardian2_residency', '$guardian2_nationality', '$guardian2_dob', '$guardian2_photo_link', '$guardian2_sig_link', 2)";


    if ($conn->query($sql_guardian2) !== TRUE) {
        echo "Error inserting data for Guardian 2: " . $conn->error;
    }

    $guardian2_id = $conn->insert_id;

    $sql_guardian2_contact = "INSERT INTO guardian_contact (guardian_id, address, city, post_code, state_division, country, telephone, mobile_phone, fax, email)
                  VALUES ('$guardian2_id', '$guardian2_address', '$guardian2_city', '$guardian2_postcode', '$guardian2_statedivision', '$guardian2_country', '$guardian2_telephone', '$guardian2_mobile_phone', '$guardian2_fax', '$guardian2_email')";


    if ($conn->query($sql_guardian2_contact) !== TRUE) {
        echo "Error inserting data for Guardian 2: " . $conn->error;
    }

}




if ($_SERVER["REQUEST_METHOD"] === "POST"){

    
$applicationNo = $_POST['poaapplicationNo'];
$accdate = $_POST['poaaccdate'];
$participantID = $_POST['poaaccparticipantID'];
$accountHolderName = $_POST['poaaccountHolderName'];
$passportNumber = $_POST['passportNumber'];
$issuePlace = $_POST['issuePlace'];
$issueDate = $_POST['issueDate'];
$expiryDate = $_POST['expiryDate'];
$residency = $_POST['residency'];
$poanationality = $_POST['poanationality'];
$dob = $_POST['dob'];
$poaStartDate = $_POST['poaStartDate'];
$poaEndDate = $_POST['poaEndDate'];
$remarks = $_POST['remarks'];

$sql = "INSERT INTO poa_form (applicationNo, accdate, participantID, accountHolderName, passportNumber, issuePlace, issueDate, expiryDate, residency, poanationality, dob, poaStartDate, poaEndDate, remarks, poa_photo, poa_sig, fa_sig, sa_sig, form_id) 
        VALUES ('$applicationNo', '$accdate', '$participantID', '$accountHolderName', '$passportNumber', '$issuePlace', '$issueDate', '$expiryDate', '$residency', '$poanationality', '$dob', '$poaStartDate', '$poaEndDate', '$remarks', '$poa_photo_link', '$poa_sig_link', '$fa_sig_link', '$sa_sig_link', '$bo_form_id')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$poa_form_id = $conn->insert_id;
}




if ($_SERVER["REQUEST_METHOD"] === "POST"){

    
$poaFullName = $_POST['poaFullName'];
$poaShortName = $_POST['poaShortName'];
$poaTitle = $_POST['poaTitle'];
$poaaddress = $_POST['poaaddress'];
$poacity = $_POST['poacity'];
$postcode = $_POST['postcode'];
$state = $_POST['state'];
$poacountry = $_POST['poacountry'];
$poatelephone = $_POST['poatelephone'];
$mobile = $_POST['mobile'];
$poafax = $_POST['poafax'];
$poaemail = $_POST['poaemail'];



$sql = "INSERT INTO poa_contact (poa_form_id, poaFullName, poaShortName, poaTitle, poaaddress, poacity, postcode, state_division, poacountry, poatelephone, mobile, poafax, poaemail) 
        VALUES ('$poa_form_id', '$poaFullName', '$poaShortName', '$poaTitle', '$poaaddress', '$poacity', '$postcode', '$state', '$poacountry', '$poatelephone', '$mobile', '$poafax', '$poaemail')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

if (isset($_POST["exchange"])) {
        $exchanges = implode(", ", $_POST["exchange"]); // Combine selected exchanges
        $dse_trading_id = isset($_POST["dse_trading_id"]) ? $_POST["dse_trading_id"] : '';
        $cse_trading_id = isset($_POST["cse_trading_id"]) ? $_POST["cse_trading_id"] : '';

        // Construct and execute SQL query
        $sql = "INSERT INTO cle_application (exchanges, dse_trading_id, cse_trading_id) VALUES ('$exchanges', '$dse_trading_id', '$cse_trading_id')";

        if ($conn->query($sql) === TRUE) {
            echo "Application data inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //for bo_photo_sig table
    $sql_bo_photo_sig = "INSERT INTO bo_photo_sig (form_id, applicant1_photo, applicant1_sign, applicant2_photo, applicant2_sig, auth_signatory_photo, auth_signatory_sig ) 
        VALUES ('$bo_form_id', '$firstappli_photo_link', '$firstappli_sig_link', '$secondappli_photo_link', '$secondappli_sig_link', '$auth_photo_link', '$auth_sig_link')";

    if ($conn->query($sql_bo_photo_sig) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error bo_photo_sig table: " . $sql . "<br>" . $conn->error;
    }


    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $intro_id = $_POST['intro_id'];
        $intro_name = $_POST['intro_name'];
        $intro_number = $_POST['intro_number'];
        $intro_email = $_POST['intro_email'];


        $sql = "INSERT INTO bo_introducer (form_id, introducer_id, introducer_name, introducer_number, introducer_email) 
                VALUES ('$bo_form_id', '$intro_id', '$intro_name', '$intro_number', '$intro_email')";

        if ($conn->query($sql) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error bo_introducer: " . $sql . "<br>" . $conn->error;
        }
    }
   

$conn->close();
?>
