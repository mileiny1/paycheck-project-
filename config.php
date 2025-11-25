<?php
$host = "sql106.infinityfree.com";        // MySQL host (e.g., localhost)
$port = "3306";    // Default MySQL port
$dbname = "if0_40368753_guestbook_app";      // Your database name
$user = "if0_40368753";        // Your DB username
$password = "829Milignv91b";    // Your DB password

// Connect using mysqli
$conn = mysqli_connect($host, $user, $password, $dbname, $port);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}


?>  