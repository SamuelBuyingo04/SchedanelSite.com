<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "andy_parefeu";
$dbPassword = "Sc#d@n3l";
$dbName     = "actwebsp_39";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>