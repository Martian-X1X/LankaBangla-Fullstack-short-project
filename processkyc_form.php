<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

$conn = new mysqli($servername, $username, $password, $dbname);

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

    $officer_signature = uploadImageToImgBB('officer_signature');




if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $form_id = $_POST["form_id"];
    $bo_id = $_POST["bo_id"];
    $internal_reference = $_POST["internal_reference"];
    $account_name = $_POST["account_name"];
    $account_type = $_POST["account_type"];
    $opening_officer = $_POST["opening_officer"];
    $source_of_fund = $_POST["source_of_fund"];
    $beneficial_owner = $_POST["beneficial_owner"];
    $passport_number = $_POST["passport_number"];
    $passport_photocopy = isset($_POST["passport_photocopy"]) ? $_POST["passport_photocopy"] : '';
    $voter_id = $_POST["voter_id"];
    $voter_id_photocopy = isset($_POST["voter_id_photocopy"]) ? $_POST["voter_id_photocopy"] : '';
    $national_id = $_POST["national_id"];
    $national_id_photocopy = isset($_POST["national_id_photocopy"]) ? $_POST["national_id_photocopy"] : '';
    $tin_number = $_POST["tin_number"];
    $tin_number_photocopy = isset($_POST["tin_number_photocopy"]) ? $_POST["tin_number_photocopy"] : '';
    $var_reg_number = $_POST["var_reg_number"];
    $var_reg_number_photocopy = isset($_POST["var_reg_number_photocopy"]) ? $_POST["var_reg_number_photocopy"] : '';
    $driving_license = $_POST["driving_license"];
    $driving_license_photocopy = isset($_POST["driving_license_photocopy"]) ? $_POST["driving_license_photocopy"] : '';
    $customer_occupation = $_POST["customer_occupation"];
    $comments = $_POST["comments"];
    $manager_id = $_POST["manager_id"];
    $verified_id = $_POST["verified_id"];
    $branch_name = $_POST["branch_name"];
    
    // Insert data into kyc_form table
    $insertQuery = "INSERT INTO kyc_form (form_id, bo_id, internal_reference, account_name, opening_officer, source_of_fund, beneficial_owner, passport_number, passport_photocopy, voter_id_card_number, voter_id_photocopy, national_id_number, national_id_photocopy, tin_number, tin_photocopy, var_reg_number, var_reg_photocopy, driving_license_number, driving_license_photocopy, customer_occupation, comments, officer_signature, manager_id, verified_id, branch_name) VALUES ('$form_id', '$bo_id', '$internal_reference', '$account_name', '$opening_officer', '$source_of_fund', '$beneficial_owner', '$passport_number', '$passport_photocopy', '$voter_id', '$voter_id_photocopy', '$national_id', '$national_id_photocopy', '$tin_number', '$tin_number_photocopy','$var_reg_number', '$var_reg_number_photocopy', '$driving_license', '$driving_license_photocopy','$customer_occupation', '$comments', '$officer_signature', '$manager_id', '$verified_id', '$branch_name')";


    if ($conn->query($insertQuery) === TRUE) {
        // Update status of the form completion for the BO ID in bo_boform table
        $updateQuery = "UPDATE bo_boform SET form_completed = 1 WHERE form_id = '$form_id'";
        if ($conn->query($updateQuery) === TRUE) {
            // Redirect back to the main page after successful submission
            header("Location: manager_kyc.php");
            exit();
        } else {
            echo "Error updating form completion status: " . $conn->error;
        }
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}
?>
