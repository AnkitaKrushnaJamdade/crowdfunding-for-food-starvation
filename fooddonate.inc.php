<?php

if(isset($_POST["submit"])){
$dname = $_POST['dname'];
$demail = $_POST['demail'];
$phone = $_POST['phone'];
$food = $_POST['food'];
$address = $_POST['address'];
$date = $_POST['date'];
$time = $_POST['time'];

require_once 'dbpay.inc.php';
require_once 'functions.inc.php'; 

storeDonate($conn, $dname, $demail, $phone, $food, $address, $date, $time);

}
else {
    header("location: ./fooddonate.php");
    exit();
}

?> 