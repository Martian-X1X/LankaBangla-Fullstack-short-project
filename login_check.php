<?php
session_start();


$email = $_POST['email'];
$password = $_POST['password'];
$usertype = $_POST['usertype']; 


$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "db";


$conn = new mysqli($servername, $username, $dbpassword, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND usertype = ?");
$stmt->bind_param("ss", $email, $usertype);


$stmt->execute();


$result = $stmt->get_result();

if ($result->num_rows > 0) {
   
    $row = $result->fetch_assoc();

    
    if ($password === $row['password']) {
        
        

        
        if ($usertype === 'Admin') {
            header("Location: admin_dashboard.php"); 
        } elseif ($usertype === 'Client') {
            $_SESSION['user_id'] = $row['id'];
            header("Location: customer_page.php"); 
        }elseif ($usertype === 'CRM') {
            $_SESSION['user_id'] = $row['id'];
            header("Location: manager_kyc.php"); 
        }
        exit;
    } else {
        // Password is incorrect
        echo "<script>alert('Incorrect password. Please try again.');</script>";
        echo "<script>window.location.href = 'log_sign.php';</script>";
    }
} else {
    // User account not found
    echo "<script>alert('No account found with the provided email and user type.');</script>";
    echo "<script>window.location.href = 'log_sign.php';</script>";
}


$stmt->close();
$conn->close();
?>
