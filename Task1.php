<?php
// Database connection settings
$servername = "localhost";
$username   = "root";   // default XAMPP user
$password   = "";       // default password is empty
$dbname     = "test";   // default database (can be changed in phpMyAdmin)

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
} else {
    echo "✅ Connected successfully to MySQL database '$dbname'";
}

$conn->close();
?>