<?php
// In case you connect to Azure MySQL later
$host = "your-mysql-host.mysql.database.azure.com";
$user = "your-username";
$password = "your-password";
$dbname = "student_portal";

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
