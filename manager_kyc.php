<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/manager.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <title>Admin</title>
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
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>
    </nav>
<div class="content">
  <div class="header">
    <h1>Submit KYC Forms for each BO IDS</h1>
  </div>
  
  <div class="container">
    <div class="button-container">
      <?php
        
        $servername = "localhost";
	    $username = "root";
	    $password = "";
	    $dbname = "db";

	    $conn = new mysqli($servername, $username, $password, $dbname);


	    if ($conn->connect_error) {
	        die("Connection failed: " . $conn->connect_error);
	    }
        
        $sql = "SELECT form_id FROM bo_boform WHERE form_completed <> 1";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<a href='kyc_form.php?form_id=" . $row["form_id"] . "' class='button'>" . $row["form_id"] . "</a>";
            }
        } else {
            echo "<p>No pending KYC forms.</p>";
        }

      ?>
      <button id="verifyButton" class="button">Verify</button>

                <!-- Verification Successful Message -->
                <p id="verificationMessage" style="display: none;">Verification Successful</p>
    </div>
  </div>
</div>
<!-- Your JavaScript code -->
    <script>
        document.getElementById('verifyButton').addEventListener('click', function () {
            // Show the verification message
            document.getElementById('verificationMessage').style.display = 'block';
        });
    </script>
</body>
</html>

