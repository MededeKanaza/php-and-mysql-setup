<?php
// Database configuration (Update these with your actual DB details)
$host = "localhost";
$dbname = "your_database_name";
$username = "your_db_username";
$password = "your_db_password";

// Receive data from the GitHub form
$name = $_POST['name'];
$email = $_POST['email'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO submissions (name, email) VALUES ('$name', '$email')";
    $conn->exec($sql);
    
    echo "Data saved successfully!";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?> 