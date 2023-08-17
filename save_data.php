<?php

session_start();
$userId = $_SESSION['user_id'];


$clientCode = $_POST['client-code'];
$linkCode = $_POST['link-code'];
$accountType = $_POST['account-type'];


//first account holder
$firstAccountHolderName = $_POST['first-account-holder-name'];
$firstAccountHolderFatherName = $_POST['first-account-holder-father-name'];
$firstAccountHolderMotherName = $_POST['first-account-holder-mother-name'];
$firstAccountHolderDateOfBirth = $_POST['first-account-holder-date-of-birth'];
$firstAccountHolderSex = $_POST['first-account-holder-sex'];
$firstAccountHolderNationality = $_POST['first-account-holder-nationality'];
$firstAccountHolderPresentAddress = $_POST['first-account-holder-present-address'];
$firstAccountHolderMobile = $_POST['first-account-holder-mobile'];
$firstAccountHolderTelephone = $_POST['first-account-holder-telephone'];
$firstAccountHolderPermanentAddress = $_POST['first-account-holder-permanent-address'];
$firstAccountHolderPermanentTelephone = $_POST['first-account-holder-permanent-telephone'];
$firstAccountHolderEmail = $_POST['first-account-holder-email'];
$firstAccountHolderOccupation = $_POST['first-account-holder-occupation'];
$firstAccountHolderETin = $_POST['first-account-holder-e-tin'];

//joint account holder
$jointAccountHolderName = $_POST['joint-account-holder-name'];
$jointAccountHolderFatherName = $_POST['joint-account-holder-father-name'];
$jointAccountHolderMotherName = $_POST['joint-account-holder-mother-name'];
$jointAccountHolderDateOfBirth = $_POST['joint-account-holder-date-of-birth'];
$jointAccountHolderSex = $_POST['joint-account-holder-sex'];
$jointAccountHolderNationality = $_POST['joint-account-holder-nationality'];
$jointAccountHolderPresentAddress = $_POST['joint-account-holder-present-address'];
$jointAccountHolderMobile = $_POST['joint-account-holder-mobile'];
$jointAccountHolderTelephone = $_POST['joint-account-holder-telephone'];
$jointAccountHolderPermanentAddress = $_POST['joint-account-holder-permanent-address'];
$jointAccountHolderPermanentTelephone = $_POST['joint-account-holder-permanent-telephone'];
$jointAccountHolderEmail = $_POST['joint-account-holder-email'];
$jointAccountHolderOccupation = $_POST['joint-account-holder-occupation'];
$jointAccountHolderETin = $_POST['joint-account-holder-e-tin'];

//authorized person jemon ami 
$authorizedPersonName = $_POST['authorized-person-name'];
$authorizedPersonFatherName = $_POST['authorized-person-father-name'];
$authorizedPersonMotherName = $_POST['authorized-person-mother-name'];
$authorizedPersonDateOfBirth = $_POST['authorized-person-date-of-birth'];
$authorizedPersonSex = $_POST['authorized-person-sex'];
$authorizedPersonNationality = $_POST['authorized-person-nationality'];
$authorizedPersonPresentAddress = $_POST['authorized-person-present-address'];
$authorizedPersonMobile = $_POST['authorized-person-mobile'];
$authorizedPersonTelephone = $_POST['authorized-person-telephone'];
$authorizedPersonPermanentAddress = $_POST['authorized-person-permanent-address'];
$authorizedPersonPermanentTelephone = $_POST['authorized-person-permanent-telephone'];
$authorizedPersonEmail = $_POST['authorized-person-email'];
$authorizedPersonOccupation = $_POST['authorized-person-occupation'];
$authorizedPersonETin = $_POST['authorized-person-e-tin'];

$nameChoice = $_POST['name-choice'];
$nameCompany = $_POST['name-company'];

$bankName = $_POST['bank-name'];
$branchName = $_POST['branch-name'];
$accountNumber = $_POST['account-number'];
$routingNumber = $_POST['routing-number'];




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

    $image_link_first = uploadImageToImgBB('first-account-holder-photo');
    $image_link_joint = uploadImageToImgBB('joint-account-holder-photo');
    $image_link_authorized = uploadImageToImgBB('authorized-person-photo');


$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db';


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Insert the data into the customer_accounts table beshi bujho abdullah tumi
$sql = "INSERT INTO customer_accounts (client_code, link_code, account_type, name_choice, name_company, bank_name, branch_name, account_number, routing_number, user_id) 
        VALUES ('$clientCode', '$linkCode', '$accountType', '$nameChoice', '$nameCompany', '$bankName', '$branchName', '$accountNumber', '$routingNumber', '$userId')";

if ($conn->query($sql) === true) {
    // Retrieve the inserted customer account ID
    $customerAccountId = $conn->insert_id;

    // Insert the first account holder information
    $sql = "INSERT INTO f_a_h (customer_account_id, name, father_name, mother_name, date_of_birth, sex, nationality, occupation, e_tin, image_link) 
        VALUES ($customerAccountId, '$firstAccountHolderName', '$firstAccountHolderFatherName', '$firstAccountHolderMotherName', '$firstAccountHolderDateOfBirth', '$firstAccountHolderSex', '$firstAccountHolderNationality', '$firstAccountHolderOccupation', '$firstAccountHolderETin', '$image_link_first')";


    if ($conn->query($sql) === true) {
        echo 'First account holder data saved successfully.<br>';
    } else {
        echo 'Error inserting first account holder data: ' . $conn->error;
    }

    $f_a_h_id = $conn->insert_id;

    $sql = "INSERT INTO f_a_h_contact (f_a_h_id, present_address, mobile, telephone, permanent_address, permanent_telephone, email) 
        VALUES ($f_a_h_id, '$firstAccountHolderPresentAddress', '$firstAccountHolderMobile', '$firstAccountHolderTelephone', '$firstAccountHolderPermanentAddress', '$firstAccountHolderPermanentTelephone', '$firstAccountHolderEmail')";

        if ($conn->query($sql) === true) {
        echo 'First account holder data saved successfully.<br>';
    } else {
        echo 'Error inserting first account holder data: ' . $conn->error;
    }


    // Insert the joint account holder information
    $sql = "INSERT INTO j_a_h (customer_account_id, name, father_name, mother_name, date_of_birth, sex, nationality, occupation, e_tin, image_link) 
            VALUES ($customerAccountId, '$jointAccountHolderName', '$jointAccountHolderFatherName', '$jointAccountHolderMotherName', '$jointAccountHolderDateOfBirth', '$jointAccountHolderSex', '$jointAccountHolderNationality', '$jointAccountHolderOccupation', '$jointAccountHolderETin', '$image_link_joint')";

    if ($conn->query($sql) === true) {
        echo 'Joint account holder data saved successfully.<br>';
    } else {
        echo 'Error inserting joint account holder data: ' . $conn->error;
    }

    $j_a_h_id = $conn->insert_id;

    $sql = "INSERT INTO j_a_h_contact (j_a_h_id, present_address, mobile, telephone, permanent_address, permanent_telephone, email) 
            VALUES ($j_a_h_id, '$jointAccountHolderPresentAddress', '$jointAccountHolderMobile', '$jointAccountHolderTelephone', '$jointAccountHolderPermanentAddress', '$jointAccountHolderPermanentTelephone', '$jointAccountHolderEmail')";

    if ($conn->query($sql) === true) {
        echo 'Joint account holder data saved successfully.<br>';
    } else {
        echo 'Error inserting joint account holder data: ' . $conn->error;
    }

    // Insert the authorized person information
    $sql = "INSERT INTO authorized_persons (customer_account_id, name, father_name, mother_name, date_of_birth, sex, nationality, occupation, e_tin, image_link) 
            VALUES ($customerAccountId, '$authorizedPersonName', '$authorizedPersonFatherName', '$authorizedPersonMotherName', '$authorizedPersonDateOfBirth', '$authorizedPersonSex', '$authorizedPersonNationality', '$authorizedPersonOccupation', '$authorizedPersonETin', '$image_link_authorized')";

    if ($conn->query($sql) === true) {
        echo 'Authorized person data saved successfully.';
    } else {
        echo 'Error inserting authorized person data: ' . $conn->error;
    }

    $a_p_id = $conn->insert_id;

    $sql = "INSERT INTO authorized_persons_contact (a_p_id, present_address, mobile, telephone, permanent_address, permanent_telephone, email) 
            VALUES ($a_p_id, '$authorizedPersonPresentAddress', '$authorizedPersonMobile', '$authorizedPersonTelephone', '$authorizedPersonPermanentAddress', '$authorizedPersonPermanentTelephone', '$authorizedPersonEmail')";

    if ($conn->query($sql) === true) {
        echo 'Authorized person data saved successfully.';
    } else {
        echo 'Error inserting authorized person data: ' . $conn->error;
    }


} else {
    echo 'Error inserting customer account data: ' . $conn->error;
}


$conn->close();
?>
