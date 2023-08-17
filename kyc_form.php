<?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db";

    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

if (isset($_GET["form_id"])) {
    $form_id = $_GET["form_id"];
} else {
    
    header("Location: manager_kyc.php"); 
    exit();
}


$bo_id = sprintf('%016d', rand(0, 9999999999999999));


$sql = "SELECT a.full_name
        FROM bo_boform bf
        JOIN bo_applicant a ON bf.applicant_id = a.applicant_id
        WHERE bf.form_id = $form_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    
    
    $account_name = $row['full_name'];
} else {
    $account_name = "No customer found";
}

$bo_id = sprintf('%016d', rand(0, 9999999999999999));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/manager.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <link href="css/KYC.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <title>KYC Form</title>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-content">
            <div class="logo">
               <a href="mainpage.php">
               <img class="logo" src="imgs/Logo.png" alt="Logo">
            </div>
            
            <ul class="menu-list">
                <li><a href="aboutus.php">About</a></li>
                <li><a href="manager_kyc.php">Back</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="page-container">
        <div class="page-container">
        <div class="form-container">
            <h2 class="form-title">KYC Profile Form</h2>
            <h3 class="form-subtitle">(Applicable for BO Account)</h3>
            <p class="form-note"><em>(To be completed by the Account Opening/Relationship Manager)</em></p>
            <form action="processkyc_form.php" method="post" enctype="multipart/form-data">
                <div class="input-container">
                    <div class="input-group">
                        <label class="input-label">BO ID:</label>
                        <input type="text" name="bo_id" value="<?php echo $bo_id; ?>" readonly>
                    </div>
                    <div class="input-group">
                        <label class="input-label">Internal Reference No./Code No.:</label>
                        <input type="text" name="internal_reference" style="width: 200px">
                    </div>
                </div>


            <div class="input-container">
                <label>1. Customer / Account Name:</label>
                <input type="text" name="account_name" value="<?php echo $account_name; ?>" readonly>
            </div>


            <div class="input-container">
                <label>2. Type of Account:</label>
                <input type="text" name="account_type">
            </div>


            <div class="input-container">
                <label>3. Name of Account Opening Officer/Relationship Manager:</label>
                <input type="text" name="opening_officer">
            </div>


            <div class="input-container">
                <label>4. What is the source of fund? How the source of fund has been verified (Where applicable):</label>
                <textarea name="source_of_fund" rows="4"></textarea>
            </div>


            <div class="input-container">
                <label>5. Information regarding Beneficial Owner of the account (In case of company, information regarding controlling shareholder(s) and the shareholder(s) holding 20% or more shares):</label>
                <textarea name="beneficial_owner" rows="4"></textarea>
            </div>

            <br>

            <div class="input-group">
            <label>6. Passport No. :</label>
            <input type="text" name="passport_number" placeholder="Enter Passport No." style="width: 200px;">
            </div>
                <div class="input-group">
                <label>Whether photocopy obtained? (where applicable)?</label>
                <input type="checkbox" name="passport_photocopy" value="Yes"> Yes
                <input type="checkbox" name="passport_photocopy" value="No"> No
                </div>
                
             <div class="input-group">
            <label>7.Voter ID Card No. :</label>
            <input type="text" name="voter_id" placeholder="Enter Voter ID Card No.." style="width: 200px;">
            </div>
                <div class="input-group">
                <label>Whether photocopy obtained? (where applicable)?</label>
                <input type="checkbox" name="voter_id_photocopy" value="Yes"> Yes
                <input type="checkbox" name="voter_id_photocopy" value="No"> No
                </div>
             
             <div class="input-group">
            <label>8.National Id No.:</label>
            <input type="text" name="national_id" placeholder="Enter National Id No." style="width: 200px;">
            </div>
                <div class="input-group">
                <label>Whether photocopy obtained? (where applicable)?</label>
                <input type="checkbox" name="national_id_photocopy" value="Yes"> Yes
                <input type="checkbox" name="national_id_photocopy" value="No"> No
                </div>         
            
            <div class="input-group">
            <label>9.T.I.N. No. :</label>
            <input type="text" name="tin_number" placeholder="Enter T.I.N. No." style="width: 200px;">
            </div>
                <div class="input-group">
                <label>Whether photocopy obtained? (where applicable)?</label>
                <input type="checkbox" name="tin_number_photocopy" value="Yes"> Yes
                <input type="checkbox" name="tin_number_photocopy" value="No"> No
                </div>
             <div class="input-group">
            <label>10.Var Reg. No. :</label>
            <input type="text" name="var_reg_number" placeholder="Enter Var Reg. No." style="width: 200px;">
            </div>
                <div class="input-group">
                <label>Whether photocopy obtained? (where applicable)?</label>
                <input type="checkbox" name="var_reg_number_photocopy" value="Yes"> Yes
                <input type="checkbox" name="var_reg_number_photocopy" value="No"> No
                </div>   
            <div class="input-group">
            <label>11.Driving License No :</label>
            <input type="text" name="driving_license" placeholder="Enter Driving License No." style="width: 200px;">
            </div>
                <div class="input-group">
                <label>Whether photocopy obtained? (where applicable)?</label>
                <input type="checkbox" name="driving_license_photocopy" value="Yes"> Yes
                <input type="checkbox" name="driving_license_photocopy" value="No"> No
                </div>

            <br>

             <label>12. What does the customer do?<br>Mention the occupation of the client in detail:</label>
             <textarea name="customer_occupation" rows="4"></textarea>

             <label>Comments (If any):</label>
             <textarea name="comments" rows="4"></textarea>
   
            <br>
            
            <div class="signature-section">
                    <div class="signature">
                        <label>Signature</label>
                        <input type="file" name="officer_signature" accept="image/*">
                    </div>
                    <div class="input-group">
                        <label>Branch Name:</label>
                        <input type="text" name="branch_name" style="width: 200px;">
                    </div>

                <div class="signature">
                    <label>A/C Opening Officer/Relationship Manager ID:</label>
                    <input type="text" name="manager_id">
                </div>
                <div class="signature">
                    <label>Verified By ID:</label>
                    <input type="text" name="verified_id">
                </div>
                <div style="clear: both;"></div>
            </div>
            
            
            <input type="hidden" name="form_id" value="<?php echo $form_id; ?>">
            <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>

