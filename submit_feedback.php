<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection details
$servername = "localhost";
$username = "radarxtv_Atharva"; // Replace with your database username
$password = "Atharva@123"; // Replace with your database password
$dbname = "radarxtv_cricket_feedback"; // Replace with your database name
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the POST request (feedback form)
$name = $_POST['name'];
$email = $_POST['email'];
$rating = $_POST['rating'];
$comments = $_POST['comments'];
$ip_address = $_SERVER['REMOTE_ADDR']; // Get user's IP address

// Insert feedback into the database
$sql = "INSERT INTO feedback (name, email, rating, comments, ip_address) 
        VALUES ('$name', '$email', '$rating', '$comments', '$ip_address')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>