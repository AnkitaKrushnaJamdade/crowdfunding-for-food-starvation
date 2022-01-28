<?php

$keyId = 'rzp_test_8eGf54fIiy5o9a';
$keySecret = 'Zexg33OUSaxwf1D2KUALqHS7';
$displayCurrency = 'INR';

//These should be commented out in production
// This is for error reporting
// Add it to config.php to report any errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

//DB connection

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "donatesystem";
$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
      
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
