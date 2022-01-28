<?php
include_once 'navigation.php';
require('config.php');
$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/pay.css">
    <title>Payment Status</title>
</head>
<body>
    <div class="suces">
<?php
if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

$razorpay_order_id = $_SESSION['razorpay_order_id'];
$razorpay_payment_id = $_POST['razorpay_payment_id'];
$demail = $_SESSION['demail'];
$phone = $_SESSION['phone'];
$price = $_SESSION['price'];

if ($success === true)
{
    $sql = "INSERT INTO `donates` (`demail`, `phone`, `price`, `order_id`, `razorpay_payment_id`, `status`) 
    VALUES ('$demail', '$phone', '$price', '$razorpay_order_id', '$razorpay_payment_id', 'success');";

    if(mysqli_query($conn, $sql)){
        echo "Reciept:";
    }
    
    
    $html = "
    <div class='alert'> <p>Your payment was successful !!</p></div><br>
    <div> <p>Email ID         : {$demail}</p></div>
    <div> <p>Contact No.      : {$phone}</p></div>
    <div> <p>Donated Amount   : {$price}</p></div>
    <div> <p>Payment ID       : {$_POST['razorpay_payment_id']}</p></div>";
}
else
{
    $sql = "INSERT INTO `donates` (`demail`, `phone`, `price`, `order_id`, `razorpay_payment_id`, `status`) 
    VALUES ('$demail', '$phone', '$price', '$razorpay_order_id', '$razorpay_payment_id', 'failed');";
    
    // if(mysqli_query($conn, $sql)){
    //     echo "Payment not inserted to db";
    // }
    $html = "<div class='failalert'><p>Your payment failed</p>
             <p>{$error}</p></div>";
}

echo $html;
?>
</div>
</body>
</html>
