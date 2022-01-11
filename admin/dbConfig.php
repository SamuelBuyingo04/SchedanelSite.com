<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "andy-parefeu";
$dbPassword = "Hello@123";
$dbName     = "actwebsp_39";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>