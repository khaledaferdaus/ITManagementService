<?php
// DB Connection Variables / Credentials
$server_host   = "localhost";
$database_user = "root";
$database_pass = "";
$database_name = "bu_devs_db";

// Establish Connection
$conn = mysqli_connect($server_host, $database_user, $database_pass, $database_name);

// Notification
if (!$conn) {
   die("Database Connection Failed" . mysqli_connect_error());
}