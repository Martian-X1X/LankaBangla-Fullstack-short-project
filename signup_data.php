<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$password_input = $_POST['password'];
$usertype = 'client';

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute SQL query
$sql = "INSERT INTO users (name, email, password, usertype) VALUES ('$name', '$email', '$password_input', '$usertype')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
