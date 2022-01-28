<?php

if(isset($_POST["submit"])){
  
    $eemail = $_POST["eemail"];
    $phone = $_POST["phone"];
    $price = $_POST["price"];

    require_once 'dbpay.inc.php';
    require_once 'functions.inc.php';    
    
    if(emptyInputPay($eemail, $phone, $price) !== false){
        header("location: ./donation.php?error=emptyinput"); //redirect to the same page if any error occur
        exit();
    }

    if checkPhone($phone !== false){
        header("location: ./donation.php?error=invalidphone"); //redirect to the same page if any error occur
        exit();
    }
}
else{
    header("location: ./donation.php");
    exit();
}
?>